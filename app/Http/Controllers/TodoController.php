<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * En esta clase deben implementar los metodos vacios de acuerdo a lo
 * previamente estudiado acerca de RESTFul. Recuerda que DEBEN validar los datos
 * de entrada y de regresar lo que les pide el método correctamente.
 *
 * Class TodoController
 * @package App\Http\Controllers
 */
class TodoController extends Controller
{
    /**
     * Este método del controlador regresa el listado del todos de la app
     * en un response del tipo json.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        {
            $todos = Todo::all()->toArray();
            
            return view('/');
        }
    }

    /**
     * Este método del controlador debe crear un nuevo registro todo
     * y al final regresa el registro creado en un response del tipo
     * json.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $todo = new Todo([
            'text'=>$request->get('text'),
            'done'=>$request->get('done')
        ]);
        $todo->save();
        return redirect('/');

    }

    /**
     * Modifica el item todo con el $id correspondiente
     * y regresa el mismo item modificado.
     *
     * @param integer $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request)
    {
        // TODO
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
        // TODO
    }
}
