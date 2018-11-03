<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Especialidad;
use App\Join;
use App\Linea;
use App\Unidad;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;


class PDFController extends Controller
{
    /* Define el constructor */
    protected $join;
    public function __construct(Join $join)
    {
        $this->join = $join;
    }

    public function ViewSyllabus($semestre, $cod_curso, $output, $message)
    {
        $data = $this->join->syllabus($semestre, $cod_curso);
        $snappy = $this->join->snappy($data, $semestre, $message);

        $outputFile = $cod_curso . "_" . $semestre . ".pdf";
        switch ($output) {
            case 'screen':
                return $snappy->stream($outputFile);
                break;
            case 'download':
                return $snappy->download($outputFile);
                break;
            case 'tests':
                return view('pdf.syllabus')->with($data);
                break;        
            default:
                dd('Error PDF');
                # code...
                break;
        }
    }


    public function malla($especialidad)
    {
        $val = new Especialidad;
        $wespecialidad = $val->wEspecialidad($especialidad);

        return view('pdf.malla', [
                'especialidad'=>$especialidad,
                'wespecialidad'=>$wespecialidad,
                ]);
    }

}
