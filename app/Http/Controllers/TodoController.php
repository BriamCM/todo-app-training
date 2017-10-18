<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * En esta clase deben implementar los mes vacios de acuerdo a lo
 * previamente estudiado acerca de RESTFul. Recuerda que DEBEN validar los datos
 * de entrada y de regresar lo que les pide el mé correctamente.
 *
 * Class Controller
 * @package App\Http\Controllers
 */
class Controller extends Controller
{
    /**
     * Este mé del controlador regresa el listado del s de la app
     * en un response del tipo json ordenados desde el más antiguo al más nuevo.
     *
     * @return \Illuminate\Http\JsonResponse
     */
 

    /**
     * Este mé del controlador debe crear un nuevo registro 
     * y al final regresa el registro creado en un response del tipo
     * json.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // 
    }
    public function create(Request $request)
    {
    	$todo = new Todo();
    	$todo->id = $request->id;
    	$todo->user_id = Auth::id();
    	$todo->save();
    	return redirect('/'); 
    }

    public function edit(Todo $todo)
    {
           	
    }
    /**
     * Modifica el item  con el $id correspondiente
     * y regresa el mismo item modificado.
     *
     * @param integer $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request)
    {
    	    	
    }

    /**
     * Elimina el registro y devuelve un response 200 en caso de exito o un 404
     * en caso de fallo pero igual en tipo json.
     *
     * @param integer $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        if(isset($_POST['delete'])) {
    		$todo->delete();
    		return redirect('/');
    	}
    	else
    	{
    		$todo->id = $request->id;
	    	$todo->save();
	    	return redirect('/'); 
    	}
    }
}
