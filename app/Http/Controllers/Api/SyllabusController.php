<?php

namespace App\Http\Controllers\Api;

use App\Bibliografia;
use App\Competencia;
use App\Contenido;
use App\Curso;
use App\Estrategia;
use App\Evaluacion;
use App\General;
use App\Http\Controllers\Controller;
use App\Sumilla;
use App\Titulo;
use App\Unidad;
use Illuminate\Http\Request;

class SyllabusController extends Controller
{
    public function saveData(Request $request)
    {     
        switch ($request->data['tipo']) {
            case 'sumillas' :
                $id = $request->data['id'];
                $sumilla = Sumilla::find($id);
                $sumilla->texto = $request->data['data'][0]['texto'];
                $sumilla->save();
                $proceso = 'sumillas' ;
                break;
            case 'unidades' :
                $id = $request->data['id'];
                $unidad = Unidad::find($id);
                if(!empty($unidad)){                
                    $unidad->semana = $request->data['data'][0]['texto'];
                    $unidad->texto  = $request->data['data'][1]['texto'];
                    $unidad->logro  = $request->data['data'][2]['texto'];
                    $unidad->save();
                    $proceso = 'unidades';
                }else{
                    $proceso = 'error unidades';
                }
                break;
            case 'contenidos' :
                $proceso = 'contenidos';
                break;
            case 'competencias' :
                $proceso = 'competencias';
                break;
            case 'estrategias' :
                $id = $request->data['id'];
                $estrategia = Estrategia::find($id);
                $estrategia->texto = $request->data['data'][0]['texto'];
                $estrategia->save();
                $proceso = 'estrategias';
                break;
            case 'evaluaciones' :
                $id = $request->data['id'];
                $evaluacion = Evaluacion::find($id);
                $evaluacion->texto = $request->data['data'][0]['texto'];
                $evaluacion->porcentaje = $request->data['data'][1]['texto'];
                $evaluacion->semana = $request->data['data'][2]['texto'];
                $evaluacion->save();
                $proceso = 'evaluaciones';
                break;
            case 'bibliografias' :
                $proceso = 'bibliografias';
                break;
            case 'generales' :
                $proceso = 'generales';
                break;
            case 'titulo3' :
                $proceso = 'titulo3';
                break;
        };
        return [
            'success'=>true,
            'proceso' => $proceso,
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

        $unidades = Unidad::all()->where('semestre', $request->semestre)
                    ->where('cod_curso', $request->cod_curso)
                    ->toArray();

        $contenidos = Contenido::all()->where('semestre', $request->semestre)
                    ->where('cod_curso', $request->cod_curso)
                    ->toArray();

        $evaluaciones = Evaluacion::all()->where('semestre', $request->semestre)
                    ->where('cod_curso', $request->cod_curso)
                    ->sortBy('tipo . semana')
                    ->toArray();

        $estrategias = Estrategia::all()->where('semestre', $request->semestre)
                    ->where('cod_curso', $request->cod_curso)
                    ->toArray();

        $bibliografias = Bibliografia::all()->where('semestre', $request->semestre)
                    ->where('cod_curso', $request->cod_curso)
                    ->toArray();

        /************************* GENERACIÓN DE DATOS UNO A UNO  **********************/

        $datos = [];
        
        /* titulo0 */

        $new_data = [];
        $new_data['id'] = 0; 
        $new_data['row'] = 0;
        $new_data['editing'] = false;
        $new_data['tipo'] = 'titulo0';
        $new_data['subtipo'] = '';
        $new_data['data'] = [
                [
                    'view' => true,
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
            $new_data['pre_row'] = $new_data['row'];
            $new_data['editing'] = false;
            $new_data['tipo'] = $collection[$key]['tipo'];
            $new_data['subtipo'] = $collection[$key]['subtipo'];
            $new_data['orden'] = $collection[$key]['orden'];
            $new_data['data'] = [
                    [
                        'view' => true,
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
            $new_data['pre_row'] = $new_data['row'];
            //$new_data['week'] = '';
            $new_data['editing'] = false;
            $new_data['tipo'] = $collection[$key]['tipo'];
            $new_data['subtipo'] = $collection[$key]['subtipo'];
            $new_data['item'] = $collection[$key]['item'];
            $new_data['data'] = [
                    [
                        'view' => true,
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
            $new_data['pre_row'] = $new_data['row'];
            //$new_data['week'] = '';
            $new_data['editing'] = false;
            $new_data['tipo'] = $data;
            $new_data['data'] = [
                    [
                        'view' => true,
                        'col' => 2,
                        'cols' => 2,
                        'offset' => 2,
                        'align' => 'left',
                        'texto' => $$data[$key]['texto']
                    ],
                    [
                        'view' => true,
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
        $new_data['pre_row'] = $new_data['row'];
        //$new_data['week'] = '';
        $new_data['editing'] = false;
        $new_data['tipo'] = $data;
        $new_data['data'] = [
                [
                    'view' => true,
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
                $new_data['pre_row'] = $new_data['row'];
                //$new_data['week'] = '';
                $new_data['editing'] = false;
                $new_data['item'] = $collection[$key2]['item'];
                $new_data['data'] = [
                        [
                            'view' => true,
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
        $collection = collect($datos)
                    ->where('tipo', 'titulo1')
                    ->where('subtipo', 'contenidos');
        $row_titulo = $collection->first()['row'];

        $collection = collect($unidades);
        foreach ($collection as $key => $value) {
            $new_data = [];
            $new_data['id'] = $collection[$key]['id'];
            $new_data['tipo'] = 'unidades';
            $new_data['row'] = $collection[$key]['semana'] * 100 + $row_titulo;
            $new_data['pre_row'] = $new_data['row'];
            $new_data['semana'] = $collection[$key]['semana'];
            $new_data['editing'] = false;
            $new_data['data'] = [
                [
                    'view' => false,
                    'col' => 1,
                    'cols' => 1,
                    'offset' => 1,
                    'align' => 'center',
                    'texto' => $collection[$key]['semana'],
                ],
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 8,
                    'offset' => 1,
                    'align' => 'center',
                    'texto' => $collection[$key]['texto'],
                    'logro' => $collection[$key]['logro'],
                ],
                [
                    'view' => false,
                    'col' => 3,
                    'cols' => 4,
                    'offset' => 3,
                    'align' => 'center',
                    'texto' => $collection[$key]['logro'],
                ],
            ];
            array_push($datos, $new_data);

            /* Agrega titulo3 */
            $new_data = [];
            $new_data['id'] = $collection[$key]['id'];
            $new_data['tipo'] = 'titulo3';
            $new_data['row'] = $collection[$key]['semana'] * 100 + $row_titulo + 1;
            $new_data['pre_row'] = $new_data['row'];
            $new_data['semana'] = $collection[$key]['semana'];
            $new_data['editing'] = false;
            $new_data['data'] = [];
            $titulo3 = collect($titulos)->where('tipo','titulo3')->sortBy('orden');
            foreach ($titulo3 as $key2 => $value2) {
                $new_data_col = [
                    'col' => $titulo3[$key2]['col'],
                    'cols' =>  $titulo3[$key2]['columns'],
                    'offset' => 1,
                    'align' => 'center',
                    'texto' => $titulo3[$key2]['texto'],
                ];
                array_push($new_data['data'], $new_data_col);                 
            }
            array_push($datos, $new_data);
        }

        /* contenidos  */
        $collection = collect($datos)
                    ->where('tipo', 'titulo1')
                    ->where('subtipo', 'contenidos');
        $row_titulo = $collection->first()['row'];

        $collection = collect($contenidos);
        foreach ($collection as $key => $value) {
            $new_data = [];
            $new_data['id'] = $collection[$key]['id'];
            $new_data['tipo'] = 'contenidos';
            $new_data['row'] = $collection[$key]['semana'] * 100 + $row_titulo + 10;
            $new_data['pre_row'] = $new_data['row'];
            $new_data['semana'] = $collection[$key]['semana'];
            $new_data['editing'] = false;
            $new_data['data'] = [
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 1,
                    'offset' => 1,
                    'align' => 'center',
                    'texto' => $collection[$key]['semana'],
                ],
                [
                    'view' => true,
                    'col' => 2,
                    'cols' => 3,
                    'offset' => 1,
                    'align' => 'left',
                    'texto' => $collection[$key]['concepto'],
                ],
                [
                    'view' => true,
                    'col' => 4,
                    'cols' => 2,
                    'offset' => 1,
                    'align' => 'left',
                    'texto' => $collection[$key]['procedimiento'],
                ],
                [
                    'view' => true,
                    'col' => 6,
                    'cols' => 2,
                    'offset' => 1,
                    'align' => 'left',
                    'texto' => $collection[$key]['actividad'],
                ],
            ];
            array_push($datos, $new_data); 
        }        

        /* examenes */
        $collection = collect($datos)
                    ->where('tipo', 'titulo1')
                    ->where('subtipo', 'contenidos');
        $row_titulo = $collection->first()['row'];        

        $collection = collect($evaluaciones)->where('tipo','1');

        foreach ($collection as $key => $value) {
            $new_data = [];
            $new_data['id'] = $collection[$key]['id'];
            $new_data['tipo'] = 'examenes';
            $new_data['row'] = $collection[$key]['semana'] * 100 + $row_titulo + 99;
            $new_data['pre_row'] = $new_data['row'];
            $new_data['semana'] = $collection[$key]['semana'];
            $new_data['editing'] = false;
            $new_data['data'] = [
                [
                    'view' => true,
                    'col' => 2,
                    'cols' => 7,
                    'offset' => 2,
                    'align' => 'center',
                    'texto' => $collection[$key]['texto'],
                ],
            ];
            array_push($datos, $new_data); 
        }           

        /* Estrategias */
        $collection = collect($datos)
                    ->where('tipo', 'titulo1')
                    ->where('subtipo', 'estrategias');
        $row_titulo = $collection->first()['row']; 

        $data = 'estrategias';
        $data1 = $$data;

        $new_data = [];
        $new_data['id'] = $data1[0]['id'];
        $new_data['row'] = $data1[0]['orden'] * 1000 + $row_titulo;
        $new_data['pre_row'] = $new_data['row'];
        $new_data['editing'] = false;
        $new_data['tipo'] = $data;
        $new_data['data'] = [
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 8,
                    'offset' => 2,
                    'align' => 'justify',
                    'texto' => $$data[0]['texto']
                ],
        ];
        array_push($datos, $new_data);


        /* Evaluaciones */
        $collection = collect($datos)
                    ->where('tipo', 'titulo1')
                    ->where('subtipo', 'evaluaciones');
        $row_titulo = $collection->first()['row'];        

        $collection = collect($evaluaciones);

        foreach ($collection as $key => $value) {
            $new_data = [];
            $new_data['id'] = $collection[$key]['id'];
            $new_data['tipo'] = 'evaluaciones';
            if($collection[$key]['semana'] > 0){
                $new_data['row'] = $collection[$key]['semana'] * 100 + $row_titulo;
            }else{
                $new_data['row'] = 99 * 100 + $row_titulo;
            }
            $new_data['pre_row'] = $new_data['row'];
            $new_data['editing'] = false;
            $new_data['data'] = [
                [
                    'view' => true,
                    'col' => 2,
                    'cols' => 2,
                    'offset' => 2,
                    'align' => 'left',
                    'texto' => $collection[$key]['texto'],
                    'type' => 'texto',
                ],
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 1,
                    'offset' => 1,
                    'align' => 'left',
                    //'texto' => $collection[$key]['porcentaje'] . '%',
                    'texto' => $collection[$key]['porcentaje'],
                    'type' => 'porcentaje',
                ],
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 2,
                    'offset' => 1,
                    'align' => 'left',
                    //'texto' => ($collection[$key]['tipo'] == '1' ?
                    //            'semana ' . $collection[$key]['semana'] : '' ),
                    'texto' => $collection[$key]['semana'],
                    'type' => 'semana',
                ],

            ];
            array_push($datos, $new_data); 
        }

        /* Bibliografias */
        $collection = collect($datos)
                    ->where('tipo', 'titulo1')
                    ->where('subtipo', 'bibliografia');
        $row_titulo = $collection->first()['row'];        

        $collection = collect($bibliografias);
        foreach ($collection as $key => $value) {
            $new_data = [];
            $new_data['id'] = $collection[$key]['id'];
            $new_data['tipo'] = 'bibliografias';

            $new_data['row'] = $collection[$key]['orden'] * 1000 + $row_titulo;
            $new_data['pre_row'] = $new_data['row'];
            $new_data['editing'] = false;
            $new_data['data'] = [
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 1,
                    'offset' => 1,
                    'align' => 'right',
                    'texto' => $collection[$key]['orden'],
                    'tipo' => 'orden',                    
                ],
                [
                    'view' => true,
                    'col' => 2,
                    'cols' => 6,
                    'offset' => 2,
                    'align' => 'left',
                    'texto' => $collection[$key]['autor'],
                    'tipo' => 'autor',
                ],
                [
                    'view' => true,
                    'col' => 0,
                    'cols' => 0,
                    'offset' => 0,
                    'align' => 'justify',
                    'texto' => $collection[$key]['titulo'],
                    'tipo' => 'titulo',
                ],
                [
                    'view' => true,
                    'col' => 0,
                    'cols' => 0,
                    'offset' => 0,
                    'align' => 'left',
                    'texto' => $collection[$key]['editorial'],
                    'tipo' => 'editorial',
                ],
                [
                    'view' => true,
                    'col' => 0,
                    'cols' => 0,
                    'offset' => 0,
                    'align' => 'left',
                    'texto' => $collection[$key]['year'],
                    'tipo' => 'año',
                ],                                                                                
                [
                    'view' => true,
                    'col' => 0,
                    'cols' => 0,
                    'offset' => 0,
                    'align' => 'left',
                    'texto' => $collection[$key]['codigo'],
                    'tipo' => 'ubicacion',
                ],                                                                                
            ];
            array_push($datos, $new_data); 
        };
/*
        foreach ($collection as $key => $value) {
            $new_data = [];
            $new_data['id'] = $collection[$key]['id'];
            $new_data['tipo'] = 'bibliografias';

            $new_data['row'] = $collection[$key]['orden'] * 1000 + $row_titulo + 1;
            $new_data['pre_row'] = $new_data['row'];
            $new_data['editing'] = false;
            $new_data['data'] = [
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 1,
                    'offset' => 1,
                    'align' => 'right',
                    'texto' => $collection[$key]['orden'],
                    'tipo' => 'orden',
                ],
                [
                    'view' => true,
                    'col' => 2,
                    'cols' => 6,
                    'offset' => 1,
                    'align' => 'left',
                    'texto' => $collection[$key]['autor'],
                    'tipo' => 'autor',
                ],
            ];
            array_push($datos, $new_data); 

            $new_data['row'] = $collection[$key]['orden'] * 1000 + $row_titulo + 2;
            $new_data['pre_row'] = $new_data['row'];
            $new_data['data'] = [
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 1,
                    'offset' => 1,
                    'align' => 'right',
                    'texto' => '',
                    'tipo' => '',
                ],
                [
                    'view' => true,
                    'col' => 2,
                    'cols' => 8,
                    'offset' => 2,
                    'align' => 'left',
                    'texto' => $collection[$key]['titulo'],
                    'tipo' => 'titulo',
                ],
            ];
            array_push($datos, $new_data);

            $new_data['row'] = $collection[$key]['orden'] * 1000 + $row_titulo + 3;
            $new_data['pre_row'] = $new_data['row'];
            $new_data['data'] = [
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 1,
                    'offset' => 1,
                    'align' => 'right',
                    'texto' => '',
                    'tipo' => '',
                ],
                [
                    'view' => true,
                    'col' => 2,
                    'cols' => 8,
                    'offset' => 2,
                    'align' => 'left',
                    'texto' => $collection[$key]['editorial'],
                    'tipo' => 'editorial',
                    'tipo' => '',
                ],
            ];
            array_push($datos, $new_data); 
           
            $new_data['row'] = $collection[$key]['orden'] * 1000 + $row_titulo + 4;
            $new_data['pre_row'] = $new_data['row'];
            $new_data['data'] = [
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 1,
                    'offset' => 1,
                    'align' => 'right',
                    'texto' => '',
                    'tipo' => '',
                ],
                [
                    'view' => true,
                    'col' => 2,
                    'cols' => 4,
                    'offset' => 2,
                    'align' => 'left',
                    'texto' => $collection[$key]['year'],
                    'tipo' => 'año',
                ],
            ];
            array_push($datos, $new_data); 
           
            $new_data['row'] = $collection[$key]['orden'] * 1000 + $row_titulo + 5;
            $new_data['pre_row'] = $new_data['row'];
            $new_data['data'] = [
                [
                    'view' => true,
                    'col' => 1,
                    'cols' => 1,
                    'offset' => 1,
                    'align' => 'right',
                    'texto' => '',
                    'tipo' => '',
                ],
                [
                    'view' => true,
                    'col' => 2,
                    'cols' => 6,
                    'offset' => 2,
                    'align' => 'left',
                    'texto' => $collection[$key]['codigo'],
                    'tipo' => 'ubicacion',
                ],
            ];
            array_push($datos, $new_data); 

        }
*/

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
