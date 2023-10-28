<?php

use App\Http\Controllers\Admin\EspecialidadController;
use App\Http\Controllers\Admin\MedicoController;
use App\Http\Controllers\Admin\PacienteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth', 'admin')->group(function () {
    
    Route::resource('especialidades', EspecialidadController::class);

    Route::resource('medicos', MedicoController::class);

    Route::resource('pacientes', PacienteController::class);

    //Rutas para los reportes
    Route::get('reports/citas/line', [App\Http\Controllers\Admin\ChartController::class,'citasLine'])->name('reports.citas.line');
    Route::get('reports/medicos/column', [App\Http\Controllers\Admin\ChartController::class,'medicosColumn'])->name('reports.medicos.column');
    
});
Route::get('reports/medicos/column/data', [App\Http\Controllers\Admin\ChartController::class,'medicosJson'])->name('reports.medicos.json');

Route::middleware('auth', 'medico')->group(function () {
    
    Route::get('/horario', [App\Http\Controllers\Medico\HorarioController::class,'edit'])->name('edit-horario');
    Route::post('/horario', [App\Http\Controllers\Medico\HorarioController::class,'store'])->name('store-horario');
});

Route::middleware('auth')->group(function() {
    Route::get('/reservarcitas/create', [App\Http\Controllers\Paciente\CitaController::class,'create'])->name('create-cita');
    Route::post('/reservarcitas', [App\Http\Controllers\Paciente\CitaController::class,'store'])->name('store-cita');
    Route::get('/miscitas', [App\Http\Controllers\Paciente\CitaController::class,'index'])->name('mis-citas'); //lista de las citas pendientes
    Route::get('/miscitas/{cita}', [App\Http\Controllers\Paciente\CitaController::class,'show'])->name('cita-show'); //mostrar informacion de las citas
    Route::post('/miscitas/cancelar/{cita}', [App\Http\Controllers\Paciente\CitaController::class,'cancel'])->name('cancelar-cita'); //cancelar citas confirmadas
    Route::get('/miscitas/cancelar/{cita}', [App\Http\Controllers\Paciente\CitaController::class,'formcancel'])->name('confirmar-cancelar-cita'); //formulario para cancelar citas confirmadas
    Route::post('/miscitas/confirmar/{cita}', [App\Http\Controllers\Paciente\CitaController::class,'confirm'])->name('confirmar-cita'); //aprobar citas pendientes
    Route::delete('/miscitas/delete/{cita}', [App\Http\Controllers\Paciente\CitaController::class,'destroy'])->name('eliminar-cita'); //eliminar cita
    Route::post('/miscitas/atendido/{cita}', [App\Http\Controllers\Paciente\CitaController::class,'accepted'])->name('atendido-cita'); //atendido citas confirmadas
    //Route::get('/miscitas/atendido/{cita}', [App\Http\Controllers\Paciente\CitaController::class,'formaccepted'])->name('confirmar-atendido-cita'); //formulario para atender citas confirmadas
    
    Route::get('/data/profile/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.profile.edit');
    Route::post('/data/profile/edit', [App\Http\Controllers\UserController::class, 'update'])->name('users.profile.update');
    
    Route::get('/especialidades/{especialidad}/medicos', [App\Http\Controllers\Api\EspecialidadController::class,'medicos'])->name('especialidades.medicos');

    Route::get('/horario/horas', [App\Http\Controllers\Api\HorarioController::class,'horas'])->name('horario.horas');
});
