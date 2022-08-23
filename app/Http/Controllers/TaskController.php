<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Task;
use App\Http\Requests\TaskFormRequest;

class TaskController extends Controller
{
    public function getTask()
    {//funcion para obtener tareas de una api
        try {
            //URL Y PARAMETROS
            $url = "https://hipsum.co/api/"; 
            $params = "?type=hipster-centric&sentences=3";
           
            //SOLICITUD Y RESULTADOS
            $content = file_get_contents($url.$params);            
            $result = Arr::query($content);//lo convertimos a una cadena de consulta

            if ($result !== null) {
                dd("enviar datos a vista para mostrar");
            }else{
                throw new Exception("ERROR DE COMUNICACION CON API", 1);
            }
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function storeTask(TaskFormRequest $request)
    {//funcion para agregar tarea a base de datos
        try {
            //se guardan datos si paso la validacion del FormRequest
            Task::create($request->all());
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
