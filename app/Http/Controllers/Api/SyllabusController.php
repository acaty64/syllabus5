<?php

namespace App\Http\Controllers\Api;

use App\Competencia;
use App\Contenido;
use App\Curso;
use App\Evaluacion;
use App\General;
use App\Http\Controllers\Controller;
use App\Sumilla;
use App\Titulo;
use App\Unidad;
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

        $unidades = Unidad::all()->where('semestre', $request->semestre)
                    ->where('cod_curso', $request->cod_curso)
                    ->toArray();

        $contenidos = Contenido::all()->where('semestre', $request->semestre)
                    ->where('cod_curso', $request->cod_curso)
                    ->toArray();

        $evaluaciones = Evaluacion::all()->where('semestre', $request->semestre)
                    ->where('cod_curso', $request->cod_curso)
                    ->toArray();

/*
        $evaluaciones = [
            [
                'id'    => 1,
                'semestre' => '20181', 
                'cod_curso' => '100048', 
                'semana' => 1,
                'texto' => 'Primer Examen Parcial',
                'porcentaje' => 10,
                'orden' => 1,                
            ],
            [
                'id'    => 1,
                'semestre' => '20181', 
                'cod_curso' => '100048', 
                'semana' => 8,
                'texto' => 'Segundo Examen Parcial',
                'porcentaje' => 10,
                'orden' => 1,                
            ],
        ];
*/

        /************************* GENERACIÓN DE DATOS UNO A UNO  **********************/

        $datos = [];
        
        /* titulo0 */

        $new_data = [];
        $new_data['id'] = 0; 
        $new_data['row'] = 0;
        //$new_data['week'] = '';
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
            //$new_data['week'] = '';
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
            //$new_data['week'] = '';
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
            //$new_data['week'] = '';
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
        //$new_data['week'] = '';
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
                //$new_data['week'] = '';
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
            $new_data['semana'] = $collection[$key]['semana'];
            $new_data['logro'] = $collection[$key]['logro'];
            $new_data['editing'] = true;
            $new_data['data'] = [
                [
                    'col' => 1,
                    'cols' => 8,
                    'offset' => 1,
                    'align' => 'center',
                    'texto' => $collection[$key]['texto'],
                    'logro' => $collection[$key]['logro']
                ],
            ];
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
            $new_data['semana'] = $collection[$key]['semana'];
            $new_data['editing'] = false;
            $new_data['data'] = [
                [
                    'col' => 1,
                    'cols' => 1,
                    'offset' => 1,
                    'align' => 'center',
                    'texto' => $collection[$key]['semana'],
                ],
                [
                    'col' => 2,
                    'cols' => 3,
                    'offset' => 1,
                    'align' => 'left',
                    'texto' => $collection[$key]['concepto'],
                ],
                [
                    'col' => 4,
                    'cols' => 2,
                    'offset' => 1,
                    'align' => 'left',
                    'texto' => $collection[$key]['procedimiento'],
                ],
                [
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
            $new_data['semana'] = $collection[$key]['semana'];
            $new_data['editing'] = false;
            $new_data['data'] = [
                [
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
        /* Evaluaciones */
        /* Bibliografia */




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
