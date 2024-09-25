<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// get = Realiza una peticion de forma http seguido de la url 
//

Route::get('/home', function () {
    return "Pagina de inicio";
});

Route::get('/notes/{id}', function($id) {
    return 'Detalles de la note' .' '. $id;

})->whereNumber('id'); // Con esta expresion lo que hacemos es engadenar la URL Con (whereNumber), Esto puede variar

Route::get('/notes', function() {
    return 'Listado de Notas';
});

Route::get('/notes/create', function () {
    return 'Crear nueva nota';
});

Route::get('notas/{id}/editar', function ($id) {
    return 'Editar nota: ' . $id;
}); //Esta URL, permite Diferentes valores ya que no esta encadenada


