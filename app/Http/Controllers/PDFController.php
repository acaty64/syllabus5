<?php

namespace App\Http\Controllers;

use App\Linea;
use App\Unidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use PDF;

class PDFController extends Controller
{
    public function PDFdompdf()
    {
        $view = \View::make('pdf.simple', [])->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('dompdf');
    }

    public function PDFSimple()
    {   
        $pdf = \PDF::loadView('pdf.simple',[])
                    ->setPaper('a4')
                    ->setOrientation('landscape')
                    ->setOption('enable-javascript', true)
                    ->setOption('images', true)
                    ->setOption('javascript-delay', 3500)
                    ->setOption('no-stop-slow-scripts', true)
                    ->setOption('enable-smart-shrinking', true);
        return $pdf->stream('pdf.simple');
    }

    public function showSimple()
    {
        return view('pdf.simple');
    }

    public function PDFexample()
    {
        $view = \View::make('pdf.example', [])->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('dompdf');

        $pdf = \PDF::loadView('pdf.example',[])
                    ->setPaper('a4')
                    ->setOrientation('landscape')
                    ->setOption('enable-javascript', true)
                    ->setOption('images', true)
                    ->setOption('javascript-delay', 3500)
                    ->setOption('no-stop-slow-scripts', true)
                    ->setOption('enable-smart-shrinking', true);
        return $pdf->stream('pdf.example');
        
        /* Esto NO funciona 
        return PDF::loadFile('http://syllabus.test/PDFshow')->inline('github.pdf');
        */

        /* Esto funciona bien 
        return PDF::loadFile('http://www.github.com')->inline('github.pdf');
        */

/*
        $view = View::make('pdf.example');
        $html = $view->render();
        return \PDF::loadView($html, 'A4', 'portrait')->show();

        $pdf = App::make('snappy.pdf.wrapper');
        $pdf->loadHTML($html);
        return $pdf->inline();
*/
    }

    public function showExample()
    {
        return view('pdf.example');
    }


    public function ViewSyllabus($semestre, $cod_curso, $pdf)
    {
        $data = $this->syllabus($semestre, $cod_curso);
//return $data;
        if($pdf == 'true'){
            $snappy = \PDF::loadView('pdf.syllabus',$data)
                        ->setPaper('a4')
                        ->setOrientation('landscape')
                        ->setOption('enable-javascript', true)
                        ->setOption('images', true)
                        ->setOption('javascript-delay', 3500)
                        ->setOption('no-stop-slow-scripts', true)
                        ->setOption('enable-smart-shrinking', true);
            return $snappy->stream('pdf.syllabus');
            /* 
            $pdf->setOption('header-html', base_path('views/Modulos/Funcional/OrdemServico/Os/header.blade.php'));
            $pdf->setOption('footer-html', base_path('views/Modulos/Funcional/OrdemServico/Os/footer.blade.php'));
            */

/*
            $view = \View::make('pdf.syllabus', $data)->render();
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view)->setPaper('a4', 'portrait');
            return $pdf->stream('dompdf');
*/
        }else{
            return view('pdf.syllabus')->with($data);
        }

    }


    /**
     * Display a syllabus.
     *
     * @return \Illuminate\Http\Response
     */
    public function syllabus($semestre, $cod_curso)
    {
        $parametros = [
            'semestre' => $semestre,
            'cod_curso' => $cod_curso
        ];    
        $url = url('/api/index');
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', $url, ['form_params' => $parametros]);
 
        $rpta = json_decode($res->getBody()->getContents(),true);

        Linea::truncate();

        $datos = $rpta["data"];
        foreach ($datos as $key1 => $value1) {
            $linea['row'] = $datos[$key1]['row'];
            $linea['tipo'] = $datos[$key1]['tipo'];
            $linea['subtipo'] = $datos[$key1]['subtipo'];
            switch ($datos[$key1]['tipo']) {
                case 'titulo1':
                    foreach ($datos[$key1]['data'] as $key2 => $value2) {
                        $linea['texto'] = $datos[$key1]['data'][$key2]['texto'];
                        $linea['col'] = $datos[$key1]['data'][$key2]['col'];
                        $linea['cols'] = $datos[$key1]['data'][$key2]['cols'];
                        $linea['align'] = $datos[$key1]['data'][$key2]['align'];
                        $linea['offset'] = $datos[$key1]['data'][$key2]['offset'];
                            $xHtml = "<div class='row ".$linea['row']."'><span class=";
                            $xHtml = $xHtml.'" col-'.$linea['col'] . ' ' . $linea['tipo'] . ' col-xs-' . $linea['cols'] . ' col-xs-offset-' . $linea['offset'].'"';
                            $xHtml = $xHtml . " align='" . $linea['align'] . "'";
                            $xHtml = $xHtml . '>';
                            $titulo_romano = $this->getTitulo($datos[$key1]['data'][$key2]['texto'], 
                                                $datos[$key1]['orden']);
                            $xHtml = $xHtml . $titulo_romano;
                            $xHtml = $xHtml . '</span></div>';
                        $linea['html'] = $xHtml;
                        Linea::create($linea);
                    };
                    break;
                case 'unidades':
                    foreach ($datos[$key1]['data'] as $key2 => $value2) {
                        if($datos[$key1]['data'][$key2]['view']==true){    
                            $linea['texto'] = $datos[$key1]['data'][$key2]['texto'];
                            $linea['col'] = $datos[$key1]['data'][$key2]['col'];
                            $linea['cols'] = $datos[$key1]['data'][$key2]['cols'];
                            $linea['align'] = $datos[$key1]['data'][$key2]['align'];
                            $linea['offset'] = $datos[$key1]['data'][$key2]['offset'];
                                $xHtml = "<div class='row ".$linea['row']."'><span class=";
                                $xHtml = $xHtml.'"row col-'.$linea['col'] . ' ' . $linea['tipo'] . ' col-xs-' . $linea['cols'] . ' col-xs-offset-' . $linea['offset'].'"';
                                $xHtml = $xHtml . " align='" . $linea['align'] . "'";
                                $xHtml = $xHtml . '>';
                                $xHtml = $xHtml . $datos[$key1]['data'][$key2]['texto'] . '<br> Logro: ' . $datos[$key1]['data'][$key2]['logro'];
                                $xHtml = $xHtml . '</span></div>';
                            $linea['html'] = $xHtml;
                            Linea::create($linea);
                        }
                    };
                    break;
                case 'evaluaciones': 
                    $xHtml = "<div class='row " . $linea['row'] . "'>";
                    foreach ($datos[$key1]['data'] as $key2 => $value2) {
                        $linea['texto'] = $datos[$key1]['data'][$key2]['texto'];
                        $linea['cols'] = $datos[$key1]['data'][$key2]['cols'];
                        $linea['align'] = $datos[$key1]['data'][$key2]['align'];
                        $xHtml = $xHtml . '<span class=';
                        $xHtml = $xHtml."'row col-" . $datos[$key1]['data'][$key2]['col'] . ' ' . $linea['tipo'] . ' col-xs-' . $datos[$key1]['data'][$key2]['cols'] . ' col-xs-offset-' . $datos[$key1]['data'][$key2]['offset']."'";
                        $xHtml = $xHtml . " align='" . $linea['align'] . "'";
                        $xHtml = $xHtml . '>';
                        switch ($datos[$key1]['data'][$key2]['type']) {
                            case 'texto':
                                $xHtml = $xHtml . $datos[$key1]['data'][$key2]['texto'] . '</span>';
                                break;
                            case 'porcentaje':
                                $xHtml = $xHtml . $datos[$key1]['data'][$key2]['texto'] . '%' . '</span>';
                                break;
                            case 'semana':
                                if($datos[$key1]['data'][$key2]['texto'] <> 0){
                                    $xHtml = $xHtml . 'semana ' . $datos[$key1]['data'][$key2]['texto'] . '</span>';
                                }
                                $xHtml = $xHtml ."</div>";
                                break;
                        }                        
                        $linea['html'] = $xHtml;
                        $linea['col'] = $key2;
                        Linea::create($linea);
                        $xHtml = '';
                    };
                    break;
                case 'bibliografias': 
                    foreach ($datos[$key1]['data'] as $key2 => $value2) {
                        $linea['texto'] = $datos[$key1]['data'][$key2]['texto'];
                        $linea['cols'] = $datos[$key1]['data'][$key2]['cols'];
                        $linea['align'] = $datos[$key1]['data'][$key2]['align'];
                        switch ($datos[$key1]['data'][$key2]['type']) {
                            case 'orden':
                                $xHtml = "<div class='row " . $linea['row'] . "'>";
                                $xHtml = $xHtml."<span class='col-" . $datos[$key1]['data'][$key2]['col'] . " " . $linea['tipo'] . " col-xs-" . $datos[$key1]['data'][$key2]['cols'] . " col-xs-offset-" . $datos[$key1]['data'][$key2]['offset'] . "' align='right' ><strong>";
                                $xHtml = $xHtml . $datos[$key1]['data'][$key2]['texto'] . '</strong></span>';
                                break;
                            case 'autor':
                                $xHtml = $xHtml."<span class='col-" . $datos[$key1]['data'][$key2]['col'] . ' ' . $linea['tipo'] . ' col-xs-' . $datos[$key1]['data'][$key2]['cols'] . ' col-xs-offset-' . $datos[$key1]['data'][$key2]['offset']."'>";
                                $xHtml = $xHtml . "<strong>Autor(es): </strong>" . $datos[$key1]['data'][$key2]['texto'] . '</span></div>';
                                break;
                            case 'titulo':
                                $xHtml = "<div class='row " . $linea['row'] . "'>";
                                $xHtml = $xHtml . "<span class='col-1 col-xs-1 col-xs-offset-1'></span>";
                                $xHtml = $xHtml . "<span class='col-2 col-xs-6 col-xs-offset-2" . ' ' . $linea['tipo'] . "'>";
                                $xHtml = $xHtml . "<strong>Título: </strong>" . $datos[$key1]['data'][$key2]['texto'] . '</span></div>';
                                break;
                            case 'editorial':
                                $xHtml = "<div class='row " . $linea['row'] . "'>";
                                $xHtml = $xHtml . "<span class='col-1 col-xs-1 col-xs-offset-1'></span>";
                                $xHtml = $xHtml."<span class='col-2" . ' ' . $linea['tipo'] . ' col-xs-6' . "'>";
                                $xHtml = $xHtml . "<strong>Editorial: </strong>" . $datos[$key1]['data'][$key2]['texto'] . '</span></div>';
                                break;
                            case 'año':
                                $xHtml = "<div class='row " . $linea['row'] . "'>";
                                $xHtml = $xHtml . "<span class='col-1 col-xs-1 col-xs-offset-1'></span>";
                                $xHtml = $xHtml."<span class='col-2" . ' ' . $linea['tipo'] . ' col-xs-6' . "'>";
                                $xHtml = $xHtml . "<strong>Año: </strong>" . $datos[$key1]['data'][$key2]['texto'] . '</span></div>';
                                break;
                            case 'ubicacion':
                                $xHtml = "<div class='row " . $linea['row'] . "'>";
                                $xHtml = $xHtml . "<span class='col-1 col-xs-1 col-xs-offset-1'></span>";
                                $xHtml = $xHtml."<span class='col-2" . ' ' . $linea['tipo'] . ' col-xs-6' . "'>";
                                $xHtml = $xHtml . "<strong>Código UCSS: </strong>" . $datos[$key1]['data'][$key2]['texto'] . '</span></div>';
                                break;
                        }                        
                        $linea['html'] = $xHtml;
                        $linea['col'] = $key2;
                        Linea::create($linea);
                        $xHtml = '';
                    };
                    break;
                case 'contenidos': 
                    $xHtml = "<div class='row " . $linea['row'] . "'>";
                    foreach ($datos[$key1]['data'] as $key2 => $value2) {
                            $linea['texto'] = $datos[$key1]['data'][$key2]['texto'];
                            $linea['cols'] = $datos[$key1]['data'][$key2]['cols'];
                            $linea['align'] = $datos[$key1]['data'][$key2]['align'];
                            $xHtml = $xHtml . "<span class=";
                            $xHtml = $xHtml."'row col-" . $datos[$key1]['data'][$key2]['col'] . " " . $linea['tipo'] . " col-xs-" . $datos[$key1]['data'][$key2]['cols'] . " col-xs-offset-" . $datos[$key1]['data'][$key2]['offset']."'";
                            $xHtml = $xHtml . ">";
                            $xHtml = $xHtml . $datos[$key1]['data'][$key2]['texto'] . "</span>";          
                        $linea['html'] = $xHtml;
                        $linea['col'] = $key2;
                        Linea::create($linea);
                        $linea['row'] = $linea['row'] + 1 ;
                        $xHtml = '';
                    };
                    $linea['html'] = "</div>";
                    Linea::create($linea);
                    $xHtml = '';
                    break;
                default:
                    $xHtml = "<div class='row " . $linea['row'] . "'>";
                    foreach ($datos[$key1]['data'] as $key2 => $value2) {
                            $linea['texto'] = $this->lineText($datos[$key1]['data'][$key2]['texto']);
                            $linea['cols'] = $datos[$key1]['data'][$key2]['cols'];
                            $linea['align'] = $datos[$key1]['data'][$key2]['align'];
                            $xHtml = $xHtml . "<span class=";
                            $xHtml = $xHtml."'row col-" . $datos[$key1]['data'][$key2]['col'] . " " . $linea['tipo'] . " col-xs-" . $datos[$key1]['data'][$key2]['cols'] . " col-xs-offset-" . $datos[$key1]['data'][$key2]['offset']."'";
                            $xHtml = $xHtml . ">";
                            $xHtml = $xHtml . $linea['texto'] . "</span>";          
                        $linea['html'] = $xHtml;
                        $linea['col'] = $key2;
                        Linea::create($linea);
                        $linea['row'] = $linea['row'] + 1 ;
                        $xHtml = '';
                    };
                    $linea['html'] = "</div>";
                    Linea::create($linea);
                    $xHtml = '';
                    break;
            }

        }
        $registros = Linea::all();

        /* https://stackoverflow.com/questions/25451019/what-is-the-syntax-for-sorting-an-eloquent-collection-by-multiple-columns */  
        $registros = $registros->sort(
            function ($a, $b) {
                // sort by column1 first, then 2, and so on
                return ($a['row'] - $b['row'])
                    ?: ($a['col'] - $b['col']);
            }
        );

        $lineas = [];
        foreach ($registros as $key => $value) {
            $lineas[$key]['html']=$registros[$key]['html'];
        };

        $new_data = ['lineas'=>$lineas];

        return $new_data;
    }

    protected function getTitulo($texto, $orden)
    {
        $romanos = [ '','I','II','III','IV','V','VI','VII','VIII','IX','X' ];
        $titulo = $romanos[$orden].'. '.$texto;
        return $titulo;
    }

    protected function lineText($blob)
    {
        /*
        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );
        */
        $blob = str_replace(
            array("\r\n", "\n", "\r"),
            array("<br>","<br>","<br>"),
            $blob
        );
        return $blob;
    }

}
