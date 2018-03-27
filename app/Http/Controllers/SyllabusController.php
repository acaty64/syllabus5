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
    public function index()
    {
/*
        $titulos = Titulo::where('cod_curso', $cod_curso)->orderBy('orden');
        $generales = General::where('cod_curso', $cod_curso)->orderBy('orden');
*/
        $titulos = [
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
        ];

        $generales = [
            ['tipo' => 'generales', 'row' => 1, 'col' => 2, 'cols' => 2, 'align' => 'left', 'texto' => 'Código:', ],
            ['tipo' => 'generales', 'row' => 1, 'col' => 3, 'cols' => 2, 'align' => 'left', 'texto' => '100048', ],
            ['tipo' => 'generales', 'row' => 2, 'col' => 2, 'cols' => 2, 'align' => 'left', 'texto' => 'Pre‐ Requisito :', ],
            ['tipo' => 'generales', 'row' => 2, 'col' => 3, 'cols' => 2, 'align' => 'left', 'texto' => 'Contabilidad General', ],
            ['tipo' => 'generales', 'row' => 3, 'col' => 2, 'cols' => 2, 'align' => 'left', 'texto' => 'Créditos :', ],
            ['tipo' => 'generales', 'row' => 3, 'col' => 3, 'cols' => 2, 'align' => 'left', 'texto' => '03', ],
            ['tipo' => 'generales', 'row' => 4, 'col' => 2, 'cols' => 2, 'align' => 'left', 'texto' => 'Horas :', ],
            ['tipo' => 'generales', 'row' => 4, 'col' => 3, 'cols' => 2, 'align' => 'left', 'texto' => '04 horas', ],
            ['tipo' => 'generales', 'row' => 5, 'col' => 2, 'cols' => 2, 'align' => 'left', 'texto' => 'Semestre académico : ', ],
            ['tipo' => 'generales', 'row' => 5, 'col' => 3, 'cols' => 2, 'align' => 'left', 'texto' => '2017‐ I', ],
            ['tipo' => 'generales', 'row' => 6, 'col' => 2, 'cols' => 2, 'align' => 'left', 'texto' => 'Ciclo :', ],
            ['tipo' => 'generales', 'row' => 6, 'col' => 3, 'cols' => 2, 'align' => 'left', 'texto' => 'III', ],
        ];

        $sumillas = [
            ['tipo' => 'sumillas', 'row' => 1, 'col' => 1, 'cols' => 8, 'align' => 'justify', 'texto' => 'El curso tiene como propósito integrar las teorías, las técnicas y las herramientas adquiridas en las materias de contabilidad general y administración que le permita llegar al alumno a desarrollar las habilidades de análisis, integración de la información para la construcción de propuestas y soluciones que llevan al logro de los objetivos de la organización. Se pondrá énfasis en el análisis financiero de los estados financieros y su relación con los costos empresariales.']
        ];
/*
        $esquema = [
            'nivel' => 1, 'rows' =>[
                'tipo' => 'titulo0', 'subtipo' => '', 'data' => 'titulo0',
            ],
            'nivel' => 1, 'rows' => [
                'tipo' => 'titulo1', 'subtipo' => '', 'data' => 'titulo1', 'rows' =>[
                    ['nivel' => 2, 'tipo' => 'titulo1', 'subtipo' => 'generales', 'data' => 'generales', 'separacion' => ''],
                    ['nivel' => 2, 'tipo' => 'titulo1', 'subtipo' => 'sumillas', 'data' => 'sumillas', 'separacion' => ''],
                    ['nivel' => 2, 'tipo' => 'titulo1', 'subtipo' => 'competencias', 'data' => 'titulo2', 'separacion' => 'subtipo', 'rows' => [
                        'nivel' => 3, 'tipo' => 'titulo1', 'subtipo' => 'competencias', 'data' => 'competencias']
                    ],
                    ['nivel' => 2, 'tipo' => 'unidades', 'subtipo' => 'contenidos', 'data' => 'contenidos', 'separacion' => 'semana'],
                    ['nivel' => 2, 'tipo' => 'examenes', 'subtipo' => 'semana', 'data' => 'examenes', 'separacion' => ''],
                ],
            ],
        ];

        $esquema = [
            ['orden' => 1, 'nivel' => 1, 'datos' => 'titulos',   'tipo' => 'titulo0', 'bucle' => '',  ],
            ['orden' => 2, 'nivel' => 1, 'datos' => 'titulos',   'tipo' => 'titulo1', 'bucle' => 'data', 'data' => [ 
                    ['orden' => 1, 'nivel' => 2, 'datos' => 'generales', 'tipo' => 'data',    'bucle' => '',  ],
                    ['orden' => 2, 'nivel' => 3, 'datos' => 'sumillas',  'tipo' => 'data',    'bucle' => '',  ],
                ],
            ],
        ];

        $datos = [];

        foreach ($esquema as $registro) {
            $tipo = $registro['tipo'];
            $data = $registro['datos'];
            $bucle = $registro['bucle'];
            if($tipo == 'data'){
                $registros = $$data;
                array_push($datos, $registros);
            }else{
                $key = array_search($tipo, array_column($$data, 'tipo'));
                array_push($datos, $$data[$key]);
                if($bucle == 'data'){
                    foreach ($variable as $key => $value) {
                        # code...
                    }
                }
            }
        }

*/

        /************************* GENERACIÓN DE DATOS UNO A UNO  **********************/

        $datos = [];
        
        $data = 'titulos';
        $tipo = 'titulo0';
        $key = 'tipo';
        $reg = array_search($tipo, array_column($$data, $key));
        array_push($datos, $$data[$reg]);

        $data = 'titulos';
        $reg1 = array_filter($$data, function($v, $k) {
            $key = 'tipo';
            $val = 'titulo1';
            return $k == $key && $v == $val;
        }, ARRAY_FILTER_USE_BOTH);
dd($reg1);
        $registros = array_filter($reg1, function($v, $k) {
            $key = 'row';
            $val = 1;
            return $k == $key && $v == $val;
        }, ARRAY_FILTER_USE_BOTH);
        array_push($datos, $registros);

        return $datos;
        
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
