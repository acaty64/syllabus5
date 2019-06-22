<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
	public function FunctionSnappy($value='')
	{
		return 'FunctionSnappy';
	}

    public function snappy($data, $semestre, $message)
    {
        if($message){
            $headerHtml = url('/') . '/header/PDF/syllabus/' . $semestre;
            $footerHtml = url('/') . '/footer/PDF/syllabus/' . $semestre;
        }else{
            $headerHtml = url('/') . '/header/PDF/syllabus/0';
            $footerHtml = url('/') . '/footer/PDF/syllabus/0';   
        }

        return \PDF::loadView('pdf.syllabus', $data)
                    ->setPaper('a4')
                    ->setOrientation('Portrait')
                    ->setOption('enable-javascript', true)
                    ->setOption('images', true)
                    ->setOption('javascript-delay', 3500)
                    ->setOption('no-stop-slow-scripts', true)
                    ->setOption('enable-smart-shrinking', true)
                    ->setOption('header-html', $headerHtml)
                    ->setOption('footer-html', $footerHtml)
                    ->setOption('header-spacing', 5)
                    ->setOption('footer-spacing', 5)
                    ->setOption('margin-top', 40)
                    ->setOption('lowquality', true)
                    ->setOption('margin-bottom', 30);
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
            'cod_curso' => $cod_curso,
            'user_id' => ''
        ];    
        $url = url('/api/index');
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', $url, ['form_params' => $parametros]);
 
        $rpta = json_decode($res->getBody()->getContents(),true);

        $registros = [];

        $datos = $rpta["data"];
        $orden_unidad = 0;
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
                        // Linea::create($linea);
                        array_push($registros, $linea);
                    };
                    break;
                case 'unidades':
                    foreach ($datos[$key1]['data'] as $key2 => $value2) {
                        if($datos[$key1]['data'][$key2]['view']==true){
                            $texto = $datos[$key1]['data'][$key2]['texto'];
                            if($key2 == 1){
                                $linea['texto'] = 'UNIDAD ' . $this->getTitulo($texto, ++$orden_unidad);    
                            }else{
                                $linea['texto'] = $texto;    
                            }
                            $linea['col'] = $datos[$key1]['data'][$key2]['col'];
                            $linea['cols'] = $datos[$key1]['data'][$key2]['cols'];
                            $linea['align'] = $datos[$key1]['data'][$key2]['align'];
                            $linea['offset'] = $datos[$key1]['data'][$key2]['offset'];
                                $xHtml = "<div class='row ".$linea['row']."'><span class=";
                                $xHtml = $xHtml.'"row col-'.$linea['col'] . ' ' . $linea['tipo'] . ' col-xs-' . $linea['cols'] . ' col-xs-offset-' . $linea['offset'].'"';
                                $xHtml = $xHtml . " align='" . $linea['align'] . "'";
                                $xHtml = $xHtml . '>';
                                $xHtml = $xHtml . $linea['texto'] . '<br> Logro: ' . $datos[$key1]['data'][$key2]['logro'];
                                $xHtml = $xHtml . '</span></div>';
                            $linea['html'] = $xHtml;
                            // Linea::create($linea);
                            array_push($registros, $linea);
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
                        // Linea::create($linea);
                        array_push($registros, $linea);
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
                        // Linea::create($linea);
                        array_push($registros, $linea);
                        $xHtml = '';
                    };
                    break;
                case 'contenidos': 

                    $xHtml = "<div class='row " . $linea['row'] . "'>";
                    foreach ($datos[$key1]['data'] as $key2 => $value2) {
                        // Reconstruye texto
                        $cadena = $datos[$key1]['data'][$key2]['texto'];
                        // $patron = '/(\n)/';
                        $patron = array("\n", "\r\n");
                        $sustitucion = '</br>'; 
                        $new_text = str_replace($patron, $sustitucion, $cadena);


                        $linea['texto'] = $new_text;
                        $linea['cols'] = $datos[$key1]['data'][$key2]['cols'];
                        $linea['align'] = $datos[$key1]['data'][$key2]['align'];
                        $xHtml = $xHtml . "<span class=";
                        $xHtml = $xHtml."'row col-" . $datos[$key1]['data'][$key2]['col'] . " " . $linea['tipo'] . " col-xs-" . $datos[$key1]['data'][$key2]['cols'] . " col-xs-offset-" . $datos[$key1]['data'][$key2]['offset']."'". " style='text-align:".$linea['align']."'" ;
// if ($key1 == 27 && $key2 == 2){

// dd('join@syllabus:', $xHtml);
// }
                        $xHtml = $xHtml . ">";
                        $xHtml = $xHtml . $linea['texto'] . "</span>";          
                        $linea['html'] = $xHtml;
                        $linea['col'] = $key2;
                        // Linea::create($linea);
                        array_push($registros, $linea);
                        $linea['row'] = $linea['row'] + 1 ;
                        $xHtml = '';
                    };
                    $linea['html'] = "</div>";
                    // Linea::create($linea);
                    array_push($registros, $linea);
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
                        // Linea::create($linea);
                    array_push($registros, $linea);
                        $linea['row'] = $linea['row'] + 1 ;
                        $xHtml = '';
                    };
                    $linea['html'] = "</div>";
                    // Linea::create($linea);
                    array_push($registros, $linea);
                    $xHtml = '';
                    break;
            }

        }
        // $registros = Linea::all();
        $registros = collect($registros);
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

        $wcurso = Curso::where('cod_curso', $cod_curso)->first()->wcurso;

        $new_data = [
            'cod_curso' => $cod_curso,
            'wcurso' => $wcurso,
            'lineas' => $lineas
        ];
// dd('join.syllabus: ', $new_data);
        return $new_data;
    }


    protected function getTitulo($texto, $orden)
    {
        $romanos = [ '','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII','XIII','XIV','XV','XVI','XVII' ];
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


/* Answer from: https://code.i-harness.com/es/q/1cf55f1
class ReportingService
{
  public function getPrintReport()
  {
    // your implementation here.
  }
}

// don't forget to import ReportingService at the top (use Path\To\Class)
class SubmitPerformanceController extends Controller
{
  protected $reportingService;
  public function __construct(ReportingService $reportingService)
  {
     $this->reportingService = $reportingService;
  }

  public function reports() 
  {
    // call the method 
    $this->reportingService->getPrintReport();
    // rest of the code here
  }
}
*/