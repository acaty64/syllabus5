<?php

namespace App\Http\Controllers\Api;

use App\Curso;
use App\General;
use App\Http\Controllers\Controller;
use App\Titulo;
use Illuminate\Http\Request;

class SyllabusController extends Controller
{
    public function pruebaApi(Request $request)
    {
        return [
            'success'=>true,
            'data'=>$request->cod_curso,
        ]; 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /* Selecciona los titulos del semestre*/
        $titulos = Titulo::all()->where('semestre', $request->semestre)
                ->sortBy('orden')->toArray();

        foreach ($titulos as $key => $value) {
            $titulos[$key]['tipo'] = 'titulo' . $titulos[$key]['tipo'];
        } 

        $curso = Curso::all()->where('cod_curso', $request->cod_curso)->first();

        $generales = General::all()->where('semestre', $request->semestre)
            ->sortBy('orden')->toArray();

        $sumillas = [
            ['tipo' => 'sumillas', 'orden' => 1 , 'texto' => 'El curso tiene como propósito integrar las teorías, las técnicas y las herramientas adquiridas en las materias de contabilidad general y administración que le permita llegar al alumno a desarrollar las habilidades de análisis, integración de la información para la construcción de propuestas y soluciones que llevan al logro de los objetivos de la organización. Se pondrá énfasis en el análisis financiero de los estados financieros y su relación con los costos empresariales.']
        ];

        $unidades = [
            [
                'semestre' => '20181', 
                'cod_curso' => '100048', 
                'semana' => 1,
                'texto' => 'LA CONTABILIDAD GERENCIAL.',
                'logro' => '',
                'orden' => 1,
            ],
            [
                'semestre' => '20181', 
                'cod_curso' => '100048', 
                'semana' => 6,
                'texto' => 'ANALISIS E INTERPRETACION DE LOS ESTADOS FINANCIEROS.',
                'logro' => '',
                'orden' => 2,
            ],
        ];


        /************************* GENERACIÓN DE DATOS UNO A UNO  **********************/

        $datos = [];
        
        /* titulo0 */

/*
        $data = 'titulos';
        $tipo = '0';
        $key = 'tipo';
        $reg = array_search($tipo, array_column($$data, $key));
*/  

        $new_data = [];
        $new_data['row'] = 0;
        $new_data['week'] = '';
        $new_data['editing'] = false;
        $new_data['tipo'] = 'titulo0';
        $new_data['subtipo'] = '';
        $new_data['data'] = [
                [
                    'col' => 1,
                    'cols' => 8,
                    'offset' => 1,
                    'align' => 'center',
                    'texto' => $curso['wcurso']
                ]
            ];

        array_push($datos, $new_data);


        /* titulo1 */
        $data = 'titulos';
        $data1 = $$data;
        foreach ($data1 as $key => $value) {
            $tipo = 'titulo1';
            if($value['tipo'] != $tipo){
                unset($data1[$key]);
            }
        };
        foreach ($data1 as $key => $value) {
            $new_data = [];
            $new_data['row'] = $data1[$key]['orden'] * 10000;
            $new_data['week'] = '';
            $new_data['editing'] = false;
            $new_data['tipo'] = $data1[$key]['tipo'];
            $new_data['subtipo'] = $data1[$key]['subtipo'];
            $new_data['data'] = [
                    [
                        'col' => 1,
                        'cols' => 8,
                        'offset' => 1,
                        'align' => 'left',
                        'texto' => $$data[$key]['texto']
                    ]
                ];
            array_push($datos, $new_data);          
        }

        /* titulo2 */
        foreach ($datos as $key => $value) {
            $tipo = 'titulo1';
            if($value['tipo'] == $tipo && $value['subtipo'] == 'competencias'){
                $llave = $key;
            }
        };
        $row_titulo = $datos[$llave]['row'];
        
        $data = 'titulos';
        $data1 = $$data;
        foreach ($data1 as $key => $value) {
            $tipo = 'titulo2';
            if($value['tipo'] != $tipo){
                unset($data1[$key]);
            }
        };
        foreach ($data1 as $key => $value) {
            $new_data = [];
            $new_data['row'] = $data1[$key]['orden'] * 1000 + $row_titulo;
            $new_data['week'] = '';
            $new_data['editing'] = false;
            $new_data['tipo'] = $data1[$key]['tipo'];
            $new_data['subtipo'] = $data1[$key]['subtipo'];
            $new_data['data'] = [
                    [
                        'col' => 1,
                        'cols' => 8,
                        'offset' => 1,
                        'align' => 'left',
                        'texto' => $$data[$key]['texto']
                    ]
                ];
            array_push($datos, $new_data);             
        }


        /* Generalidades */
        foreach ($datos as $key => $value) {
            $tipo = 'titulo1';
            if($value['tipo'] == $tipo && $value['subtipo'] == 'generales'){
                $llave = $key;
            }
        };
        $row_titulo = $datos[$llave]['row'];

        $data = 'generales';
        $data1 = $$data;
        foreach ($data1 as $key => $value) {
            $modelo = $data1[$key]['modelo'];
            $campo = $data1[$key]['campo'];
            $new_data = [];
            $new_data['row'] = $data1[$key]['orden'] * 1000 + $row_titulo;
            $new_data['week'] = '';
            $new_data['editing'] = false;
            $new_data['tipo'] = $data;
            $new_data['data'] = [
                    [
                        'col' => 2,
                        'cols' => 2,
                        'offset' => 2,
                        'align' => 'left',
                        'texto' => $$data[$key]['texto']
                    ],
                    [
                        'col' => 3,
                        'cols' => 2,
                        'offset' => 1,
                        'align' => 'left',
                        'texto' => $$modelo[$campo]
                    ],
                ];
            array_push($datos, $new_data);          
        }

        /* Sumillas */
        foreach ($datos as $key => $value) {
            $tipo = 'titulo1';
            if($value['tipo'] == $tipo && $value['subtipo'] == 'sumillas'){
                $llave = $key;
            }
        };
        $row_titulo = $datos[$llave]['row'];

        $data = 'sumillas';
        $data1 = $$data;

        $new_data = [];
        $new_data['row'] = $data1[0]['orden'] * 1000 + $row_titulo;
        $new_data['week'] = '';
        $new_data['editing'] = false;
        $new_data['tipo'] = $data;
        $new_data['data'] = [
                [
                    'col' => 1,
                    'cols' => 8,
                    'offset' => 1,
                    'align' => 'justify',
                    'texto' => $$data[0]['texto']
                ],
        ];
        array_push($datos, $new_data);

        /* unidades */




        return [
            'status'=>true,
            'data'=>$datos,
        ];
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
    public function show()
    {
        return view('app.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
