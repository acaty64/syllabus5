<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\General;
use App\Titulo;

class SyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
/*
        $titulos = Titulo::where('cod_curso', $cod_curso)->orderBy('orden');
        $generales = General::where('cod_curso', $cod_curso)->orderBy('orden');
*/

        /* 'semestre', 'cod_curso', 'tipo', 'texto', 'orden', */
        $titulos = [
            ['semestre' => '2018-I', 'cod_curso' => '100048', 'tipo' => 'titulo0', 'subtipo' => '', 'texto' => 'CONTABILIDAD GERENCIAL', 'orden' => 0],
            ['semestre' => '2018-I', 'cod_curso' => '100048', 'tipo' => 'titulo1', 'subtipo' =>'generales', 'texto' => 'I. DATOS GENERALES', 'orden' => 1],
            ['semestre' => '2018-I', 'cod_curso' => '100048', 'tipo' => 'titulo1', 'subtipo' =>'sumillas', 'texto' => 'II. SUMILLA', 'orden' => 2],
            ['semestre' => '2018-I', 'cod_curso' => '100048', 'tipo' => 'titulo1', 'subtipo' =>'competencias', 'texto' => 'III. SISTEMA DE COMPETENCIAS', 'orden' => 3],
            ['semestre' => '2018-I', 'cod_curso' => '100048', 'tipo' => 'titulo1', 'subtipo' =>'contenidos', 'texto' => 'IV. PROGRAMACIÓN DE CONTENIDOS', 'orden' => 4],
            ['semestre' => '2018-I', 'cod_curso' => '100048', 'tipo' => 'titulo1', 'subtipo' =>'estrategias', 'texto' => 'V. ESTRATEGIAS METODOLÓGICAS', 'orden' => 5],
            ['semestre' => '2018-I', 'cod_curso' => '100048', 'tipo' => 'titulo1', 'subtipo' =>'evaluaciones', 'texto' => 'VI. EVALUACIÓN', 'orden' => 6],
            ['semestre' => '2018-I', 'cod_curso' => '100048', 'tipo' => 'titulo1', 'subtipo' =>'bibliografias', 'texto' => 'VII. BIBLIOGRAFÍA', 'orden' => 7],
            ['semestre' => '2018-I', 'cod_curso' => '100048', 'tipo' => 'titulo2', 'subtipo' =>'competencias1', 'texto' => 'COMPETENCIAS GENERALES', 'orden' => 1],
            ['semestre' => '2018-I', 'cod_curso' => '100048', 'tipo' => 'titulo2', 'subtipo' =>'competencias2', 'texto' => 'COMPETENCIAS ESPECÍFICAS', 'orden' => 2],
/*
            ['tipo' => 'titulo0', 'row' => 0, 'col' => 1, 'cols' => 8, 'align' => 'center', 'texto' => 'CONTABILIDAD GERENCIAL',],
            ['tipo' => 'titulo1', 'row' => 1, 'col' => 1, 'cols' => 8, 'align' => 'left', 'texto' =>   'I. DATOS GENERALES', ],
            ['tipo' => 'titulo1', 'row' => 2, 'col' => 1, 'cols' => 8, 'align' => 'left', 'texto' =>   'II. SUMILLA', ],
            ['tipo' => 'titulo1', 'row' => 3, 'col' => 1, 'cols' => 8, 'align' => 'left', 'texto' =>   'III. SISTEMA DE COMPETENCIAS', ],
            ['tipo' => 'titulo2', 'row' => 1, 'col' => 1, 'cols' => 8, 'align' => 'left', 'texto' =>   'COMPETENCIAS GENERALES', ],
            ['tipo' => 'titulo2', 'row' => 2, 'col' => 1, 'cols' => 8, 'align' => 'left', 'texto' =>   'COMPETENCIAS ESPECÍFICAS', ],
            ['tipo' => 'titulo1', 'row' => 4, 'col' => 1, 'cols' => 8, 'align' => 'left', 'texto' =>   'IV. PROGRAMACIÓN DE CONTENIDOS', ],
            ['tipo' => 'titulo3', 'row' => 2, 'col' => 1, 'cols' => 1, 'align' => 'center', 'texto' => 'SEMANA', ],
            ['tipo' => 'titulo3', 'row' => 2, 'col' => 2, 'cols' => 3, 'align' => 'center', 'texto' => 'CONCEPTUAL', ],
            ['tipo' => 'titulo3', 'row' => 2, 'col' => 4, 'cols' => 2, 'align' => 'center', 'texto' => 'PROCEDIMENTAL', ],
            ['tipo' => 'titulo3', 'row' => 2, 'col' => 6, 'cols' => 2, 'align' => 'center', 'texto' => 'ACTIVIDAD DE APRENDIZAJE', ],
            ['tipo' => 'titulo1', 'row' => 5, 'col' => 1, 'cols' => 8, 'align' => 'left', 'texto' =>   'V. ESTRATEGIAS METODOLÓGICAS', ],
            ['tipo' => 'titulo1', 'row' => 6, 'col' => 1, 'cols' => 8, 'align' => 'left', 'texto' =>   'VI. EVALUACIÓN', ],
            ['tipo' => 'titulo1', 'row' => 7, 'col' => 1, 'cols' => 8, 'align' => 'left', 'texto' =>   'VII. BIBLIOGRAFÍA', ],
*/
        ];

        $request = [
            'semestre' => '2018-I',
            'cod_curso' => '100048'
        ];

        $curso = [
            'cod_curso' => '100048',
            'wcurso' => 'CONTABILIDAD GERENCIAL',
            'ht' => 2,
            'hp' => 2,
            'horas' => 4,
            'creditos' => 4,
            'prereq' => '100020',
            'wprereq' => 'Contabilidad General',
            'ciclo' => 3
        ];

        $generales = [
            [
                'semestre' => '20181', 
                'texto' => 'Código: ',
                'modelo' => 'request',
                'campo' => 'cod_curso',
                'orden' => 1,
            ],
            [
                'semestre' => '20181', 
                'texto' => 'Pre-requisito: ',
                'modelo' => 'curso',
                'campo' => 'wprereq',
                'orden' => 2,
            ],
            [
                'semestre' => '20181', 
                'texto' => 'Créditos: ',
                'modelo' => 'curso',
                'campo' => 'creditos',
                'orden' => 3,
            ],
            [
                'semestre' => '20181', 
                'texto' => 'Horas: ',
                'modelo' => 'curso',
                'campo' => 'horas',
                'orden' => 4,
            ],
            [
                'semestre' => '20181', 
                'texto' => 'Semestre Académico: ',
                'modelo' => 'request',
                'campo' => 'semestre',
                'orden' => 5,
            ],
            [
                'semestre' => '20181', 
                'texto' => 'Ciclo: ',
                'modelo' => 'curso',
                'campo' => 'ciclo',
                'orden' => 6,
            ],
        ];

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
        $data = 'titulos';
        $tipo = 'titulo0';
        $key = 'tipo';
        $reg = array_search($tipo, array_column($$data, $key));

        $new_data = [];
        $new_data['row'] = 0;
        $new_data['week'] = '';
        $new_data['editing'] = false;
        $new_data['tipo'] = $$data[$reg]['tipo'];
        $new_data['subtipo'] = $$data[$reg]['subtipo'];
        $new_data['data'] = [
                [
                    'col' => 1,
                    'cols' => 8,
                    'offset' => 1,
                    'align' => 'center',
                    'texto' => $$data[$reg]['texto']
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
