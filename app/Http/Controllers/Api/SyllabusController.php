<?php

namespace App\Http\Controllers\Api;

use App\Competencia;
use App\Curso;
use App\General;
use App\Http\Controllers\Controller;
use App\Sumilla;
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

        $sumillas = Sumilla::all()->where('semestre', $request->semestre)
                    ->where('cod_curso', $request->cod_curso)
                    ->toArray();

        $competencias = Competencia::all()->where('semestre', $request->semestre)
                    ->where('cod_curso', $request->cod_curso)
                    ->toArray();
//return $competencias;
/*
        $competencias = [
            [
                'id' => 1,
                'semestre' => '20181', 
                'cod_curso' => '100048',
                'orden' => 1,
                'item' => '1', 
                'texto' => 'Comprende el papel de la información contable en los Negocios. Relación entre la contabilidad y la Administración y la toma de decisiones.',
            ],
            [
                'id' => 2,
                'semestre' => '20181', 
                'cod_curso' => '100048',
                'orden' => 2,
                'item' => '1', 
                'texto' =>  'Conoce y ejecuta los Estados Financieros de una empresa comercial, industrial y de servicios.',
            ],
            [
                'id' => 3,
                'semestre' => '20181', 
                'cod_curso' => '100048',
                'orden' => 3,
                'item' => '1', 
                'texto' => 'Toma de decisiones, en base a un análisis financiero, dentro de las funciones de operación, inversión y financiamiento y análisis de los costos.',
            ],
            [
                'id' => 4,
                'semestre' => '20181', 
                'cod_curso' => '100048',
                'orden' => 4,
                'item' => '1',
                'texto' => 'Planifica la gestión de la empresa a futuro.',
            ],
            [
                'id' => 5,
                'semestre' => '20181', 
                'cod_curso' => '100048',
                'orden' => 5,
                'item' => '1', 
                'texto' => 'Capacidad de trabajo en equipo.',
            ],
            [
                'id' => 6,
                'semestre' => '20181', 
                'cod_curso' => '100048',
                'orden' => 1,
                'item' => '2', 
                'texto' => 'Conoce, Analiza y describe las diferentes empresas que se desarrollan en nuestro país y la importancia que tiene en ellas la contabilidad gerencia, desde la óptica de los estados financieros: Estado de Situación Financiera y Estado de Resultados.'
            ],
            [
                'id' => 7,
                'semestre' => '20181', 
                'cod_curso' => '100048',
                'orden' => 2,
                'item' => '2', 
                'texto' => 'Analiza y diagnostica los Estados financieros básicos de diferentes empresas, mediante el análisis vertical y horizontal así como los ratios financieros. '
            ],
            [
                'id' => 8,
                'semestre' => '20181', 
                'cod_curso' => '100048',
                'orden' => 3,
                'item' => '2', 
                'texto' => 'Desarrolla un plan financiero para una empresa: Presupuesto de ventas, Presupuesto de cobranzas, presupuesto de producción, presupuesto de compras, presupuesto de pagos, presupuesto de pagos, presupuesto de gastos, entre otros.'
            ],
            [
                'id' => 9,
                'semestre' => '20181', 
                'cod_curso' => '100048',
                'orden' => 4,
                'item' => '2', 
                'texto' => 'Estudia la importancia de la estructura de costos de una empresa y su implicancia en la planificación financiera.'
            ],
            [
                'id' => 10,
                'semestre' => '20181', 
                'cod_curso' => '100048',
                'orden' => 5,
                'item' => '2',
                'texto' => 'Elabora estados financieros proyectados, para diagnosticar el futuro de la empresa.'
            ],
        ];
*/
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

        $new_data = [];
        $new_data['id'] = 0; 
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
        $collection = collect($titulos)->where('tipo', 'titulo1');

        foreach ($collection as $key => $value) {
            $new_data = [];
            $new_data['id'] = $collection[$key]['id'];
            $new_data['row'] = $collection[$key]['orden'] * 10000;
            $new_data['week'] = '';
            $new_data['editing'] = false;
            $new_data['tipo'] = $collection[$key]['tipo'];
            $new_data['subtipo'] = $collection[$key]['subtipo'];
            $new_data['data'] = [
                    [
                        'col' => 1,
                        'cols' => 8,
                        'offset' => 1,
                        'align' => 'left',
                        'texto' => $collection[$key]['texto']
                    ]
                ];
            array_push($datos, $new_data);          
        }

        /* titulo2 */
        $collection = collect($datos)
                    ->where('tipo', 'titulo1')
                    ->where('subtipo', 'competencias');
        $row_titulo = $collection->first()['row'];

        $collection = collect($titulos)->where('tipo', 'titulo2');

        foreach ($collection as $key => $value) {
            $new_data = [];
            $new_data['id'] = $collection[$key]['id'];
            $new_data['row'] = $collection[$key]['orden'] * 1000 + $row_titulo;
            $new_data['week'] = '';
            $new_data['editing'] = false;
            $new_data['tipo'] = $collection[$key]['tipo'];
            $new_data['subtipo'] = $collection[$key]['subtipo'];
            $new_data['item'] = $collection[$key]['item'];
            $new_data['data'] = [
                    [
                        'col' => 1,
                        'cols' => 8,
                        'offset' => 1,
                        'align' => 'left',
                        'texto' => $collection[$key]['texto']
                    ]
                ];
            array_push($datos, $new_data);
        }

        /* Generalidades */
        $collection = collect($datos)
                    ->where('tipo', 'titulo1')
                    ->where('subtipo', 'generales');
        $row_titulo = $collection->first()['row']; 

        $data = 'generales';
        $data1 = $$data;
        foreach ($data1 as $key => $value) {
            $modelo = $data1[$key]['modelo'];
            $campo = $data1[$key]['campo'];
            $new_data = [];
            $new_data['id'] = $data1[$key]['id'];
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
        $collection = collect($datos)
                    ->where('tipo', 'titulo1')
                    ->where('subtipo', 'sumillas');
        $row_titulo = $collection->first()['row']; 

        $data = 'sumillas';
        $data1 = $$data;

        $new_data = [];
        $new_data['id'] = $data1[0]['id'];
        $new_data['row'] = $data1[0]['orden'] * 1000 + $row_titulo;
        $new_data['week'] = '';
        $new_data['editing'] = false;
        $new_data['tipo'] = $data;
        $new_data['data'] = [
                [
                    'col' => 1,
                    'cols' => 8,
                    'offset' => 2,
                    'align' => 'justify',
                    'texto' => $$data[0]['texto']
                ],
        ];
        array_push($datos, $new_data);

        /* Competencias */
        $collect_items = collect($datos)->where('tipo', 'titulo2');


        foreach ($collect_items as $key1 => $value1) {
            $row_titulo = $collect_items[$key1]['row'];
            $xitem = $collect_items[$key1]['item'];
            $collection = collect($competencias)->where('item', $xitem);
            foreach ($collection as $key2 => $value2) {
                $new_data = [];
                $new_data['id'] = $collection[$key2]['id'];
                $new_data['row'] = $collection[$key2]['orden'] * 100 + $row_titulo;
                $new_data['week'] = '';
                $new_data['editing'] = false;
                $new_data['item'] = $collection[$key2]['item'];
                $new_data['data'] = [
                        [
                            'col' => 2,
                            'cols' => 8,
                            'offset' => 2,
                            'align' => 'justify',
                            'texto' => $collection[$key2]['texto']
                        ]
                    ];
                array_push($datos, $new_data); 
            }
        }
        
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
