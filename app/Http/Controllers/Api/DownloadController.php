<?php

namespace App\Http\Controllers\Api;

use App\CursoGrupo;
use App\Grupo;
use App\Http\Controllers\Controller;
use App\Join;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use ZipArchive;

class DownloadController extends Controller
{
    /*
    * Controlador de descarga masiva
    *
    */

	/* Define el constructor */
	protected $join;
	public function __construct(Join $join)
	{
	 	$this->join = $join;
	}

	public function downloadGrupo(Request $request)
	{
/*dd(route('descarga.grupo', [
                'cod_grupo' => $siglas, 
                'message' => $message]));
*/
        
        $siglas = $request->cod_grupo;
        $message = $request->message;
        $wgrupo = Grupo::where('cod_grupo', $request->cod_grupo)->first()->wgrupo;
        $data = [
                'cod_grupo' => $siglas, 
                'message' => $message
            ];
        $route = pathinfo(route('descarga.grupo'));
//dd($route['dirname'].'/'.$route['basename']);
        return view('app.download', [
            'url_proceso' => $route['dirname'].'/'.$route['basename'],
            'data_route' => $data,
            //url('download/' . $siglas),
            'zipFile' => $siglas . "_" . env('SEMESTRE') . ".zip",
            'titulo_pagina' => 'Descarga de Syllabus. Grupo: ' . $wgrupo,
            'message' => $message,
        ]);
    }

    //public function descargaGrupo($cod_grupo, $message)
    public function descargaGrupo(Request $request)
    {
        Artisan::call('cache:clear');
        $cod_grupo = $request->cod_grupo;
        $message = $request->message;
        $semestre = env('SEMESTRE');

        /* Borrar todos los archivos del path output */
        File::delete(File::glob(base_path('storage/output/') . '*.pdf'));
        File::delete(File::glob(base_path('storage/output/') . '*.zip'));
        
        /* Datos Iniciales para barra de progreso */
        $sFile = base_path("public/progreso.txt");
/*
        $fp = fopen($sFile,"w");
        fclose($fp);
        unlink($sFile);
        $control = fopen($sFile,"w+");
        if($control == false){
          die("No se ha podido crear el archivo.");
        }
*/        
        file_put_contents($sFile, 0);
        /* Fin de Datos Iniciales para barra de progreso */

        /* Crea el archivo .zip */
        $zipFileName = $cod_grupo . "_" . $semestre . ".zip";
        $outputFileZip = storage_path() . DIRECTORY_SEPARATOR . 'output'. DIRECTORY_SEPARATOR . $zipFileName;
        // base_path('storage/output/') . $zipFileName;
        $zip = new ZipArchive();
        /* Fin Creacion de archivo .zip */
        if ($zip->open($outputFileZip, ZipArchive::CREATE) === TRUE) {
            /* Generar los PDFs */
            $cursos = CursoGrupo::where('cod_grupo', $cod_grupo)->get();
            /* Datos Iniciales para barra de progreso */
            $totRegistros = count($cursos);
            file_put_contents($sFile, 10);
            $nRegistro = 0;
            /* Fin de Datos Iniciales para barra de progreso */     
            foreach ($cursos as $key => $curso) {
                /* Datos para barra de progreso */
                $nRegistro ++;
                file_put_contents($sFile, (($nRegistro) / $totRegistros)*100);
//                Session::put('progress', ((++$nRegistro) / $totRegistros)*100);

                /* Fin Datos para barra de progreso */
                $cod_curso = $curso->cod_curso;
                $data = $this->join->syllabus($semestre, $cod_curso);
                $snappy = $this->join->snappy($data, $semestre, $message);
                /*** Nombre de archivo de descarga ***/
                $outputFile = base_path('storage/output/') . $semestre . '-A-' .  $cod_curso . "-SYL.pdf";
                /*  */
                $snappy->save($outputFile);
                // Add File in ZipArchive
                // $xFile = base_path('storage/output/') . $cod_curso . "_" . $semestre . ".pdf";
                // $zip->addFile($xFile);
                $zip->addFile($outputFile);
            }
            // Close ZipArchive     
            $zip->close();

            /* Datos para barra de progreso completo */
            file_put_contents($sFile, "finish");
            /* Fin Datos para barra de progreso completo */
	    	/* Borrar todos los archivos del path output */
	    	//File::delete(File::glob( base_path('public/output/') . '*.*'));
    	}
    }


    public function downloadFile($fileName, $type)
    {
    	switch ($type) {
    		case 'zip':
		        // Set Header
		        $headers = array(
		            'Content-Type' => 'application/octet-stream',
		        );
		        // Create Download Response
		        $file_in = storage_path() . DIRECTORY_SEPARATOR . 'output' . DIRECTORY_SEPARATOR . $fileName;
    	//dd(file_exists($file_in));
		        if(file_exists($file_in)){
		            return response()->download($file_in,$fileName,$headers);
		        }else{
		        	dd('Error');
		        };		        
    			break;
    		
    		default:
    			# code...
    			break;
    	}

    }
}



/* https://stackoverflow.com/questions/51873115/creating-zip-of-multiple-files-and-download-in-laravel  */
/*************************************************
public function downloadposts($id)
   {
      $post=Post::find($id);


        // Define Dir Folder
       $public_dir=public_path().DIRECTORY_SEPARATOR.'uploads/post/zip';
       $file_path=public_path().DIRECTORY_SEPARATOR.'uploads/post';
        // Zip File Name
        $zipFileName = $post->post_title.'.zip';
        // Create ZipArchive Obj
        $zip = new ZipArchive();
        if ($zip->open($public_dir .DIRECTORY_SEPARATOR. $zipFileName, ZipArchive::CREATE) === TRUE) {
            // Add File in ZipArchive
            foreach($post->PostDetails as $postdetails)
            {
            $zip->addFile($file_path,$postdetails->file_name);
            }
            // Close ZipArchive     
            $zip->close();
        }
        // Set Header
        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );
        $filetopath=$public_dir.'/'.$zipFileName;
        dd($filetopath);
        // Create Download Response
        if(file_exists($filetopath)){
            return response()->download($filetopath,$zipFileName,$headers);
        }

    return redirect()->back();
}

******************************************/