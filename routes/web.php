<?php

use App\Events\CitaEstadoEvent;
use App\Http\Controllers\Admin\EspecialidadController;
use App\Http\Controllers\Admin\MedicoController;
use App\Http\Controllers\Admin\PacienteController;
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\NoticiaController;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

/* Route::get('/', function () {
    return view('welcome');
})->name('incio'); */

/* Route::get('/eco', function () {
    event(new CitaEstadoEvent);
    return 'Escuchado';
}); */

Auth::routes();


//Route::get('/paciente/buscar-mi-cita', [App\Http\Controllers\Paciente\CitaController::class, 'buscarMiCita'])->name('buscar.cita');

Route::middleware('auth', 'admin')->group(function () {
    //Rutas Resources 
    Route::resource('especialidades', EspecialidadController::class);
    Route::resource('medicos', MedicoController::class);
    Route::resource('pacientes', PacienteController::class);
    //Rutas para los reportes
    Route::get('/reports/citas/line', [App\Http\Controllers\Admin\ChartController::class, 'citasLine'])->name('reports.citas.line');
    Route::get('/reports/medicos/column', [App\Http\Controllers\Admin\ChartController::class, 'medicosColumn'])->name('reports.medicos.column');
    Route::get('/reports/medicos/column/data', [App\Http\Controllers\Admin\ChartController::class, 'medicosJson'])->name('reports.medicos.json');
    //Rutas para noticias
    Route::get('/lista_noticias', [\App\Http\Controllers\NoticiaController::class, 'listNoticias'])->name('noticias.list');
    #Route::get('noticias', [App\Http\Controllers\NoticiaController::class, 'index'])->name('noticias.index');
    Route::get('/noticias/create', [App\Http\Controllers\NoticiaController::class, 'create'])->name('noticias.create');
    Route::post('/noticias', [App\Http\Controllers\NoticiaController::class, 'store'])->name('noticias.store');
    Route::get('/noticias/{noticia}/edit', [App\Http\Controllers\NoticiaController::class, 'edit'])->name('noticias.edit');
    Route::put('/noticias/{noticia}', [App\Http\Controllers\NoticiaController::class, 'update'])->name('noticias.update');
    Route::delete('/noticias/{noticia}', [App\Http\Controllers\NoticiaController::class, 'destroy'])->name('noticias.destroy');
    Route::get('noticias/noticias-nuevas/{slug}', [App\Http\Controllers\NoticiaController::class,'show'])->name('noticias.show');
});

Route::middleware('auth', 'medico')->group(function () {
    Route::get('/horario', [App\Http\Controllers\Medico\HorarioController::class, 'edit'])->name('edit-horario');
    Route::post('/horario', [App\Http\Controllers\Medico\HorarioController::class, 'store'])->name('store-horario');
});

Route::middleware('auth')->group(function () {
    Route::get('/reservarcitas/create', [App\Http\Controllers\Paciente\CitaController::class, 'create'])->name('create-cita');
    Route::post('/reservarcitas', [App\Http\Controllers\Paciente\CitaController::class, 'store'])->name('store-cita');
    Route::get('/miscitas', [App\Http\Controllers\Paciente\CitaController::class, 'index'])->name('mis-citas'); //lista de las citas pendientes
    Route::get('/miscitas/{cita}', [App\Http\Controllers\Paciente\CitaController::class, 'show'])->name('cita-show'); //mostrar informacion de las citas
    Route::post('/miscitas/cancelar/{cita}', [App\Http\Controllers\Paciente\CitaController::class, 'cancel'])->name('cancelar-cita'); //cancelar citas confirmadas
    Route::get('/miscitas/cancelar/{cita}', [App\Http\Controllers\Paciente\CitaController::class, 'formcancel'])->name('confirmar-cancelar-cita'); //formulario para cancelar citas confirmadas
    Route::post('/miscitas/confirmar/{cita}', [App\Http\Controllers\Paciente\CitaController::class, 'confirm'])->name('confirmar-cita'); //aprobar citas pendientes
    Route::delete('/miscitas/delete/{cita}', [App\Http\Controllers\Paciente\CitaController::class, 'destroy'])->name('eliminar-cita'); //eliminar cita
    Route::post('/miscitas/atendido/{cita}', [App\Http\Controllers\Paciente\CitaController::class, 'accepted'])->name('atendido-cita'); //atendido citas confirmadas
    //Route::get('/miscitas/atendido/{cita}', [App\Http\Controllers\Paciente\CitaController::class,'formaccepted'])->name('confirmar-atendido-cita'); //formulario para atender citas confirmadas

    Route::get('/data/profile/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.profile.edit');
    Route::post('/data/profile/edit', [App\Http\Controllers\UserController::class, 'update'])->name('users.profile.update');

    Route::get('/especialidades/{especialidad}/medicos', [App\Http\Controllers\Api\EspecialidadController::class, 'medicos'])->name('especialidades.medicos');

    Route::get('/horario/horas', [App\Http\Controllers\Api\HorarioController::class, 'horas'])->name('horario.horas');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    //Ruta Complementos: Crear Cita Rápida
    Route::post('/medico-cita-store', [App\Http\Controllers\Paciente\CitaController::class, 'medicoCrearCitaStore'])->name('medico-crear-cita-store');
    Route::get('/medico-cita', [App\Http\Controllers\Paciente\CitaController::class, 'medicoCrearCita'])->name('medico-crear-cita');
});

Route::get('/notifiacion', [App\Http\Controllers\Notificacion\NotificacionController::class, 'send'])->name('send');

Route::get('/fullcalendars', [FullCalendarController::class, 'index']);
Route::post('/fullcalendar/create', [FullCalendarController::class, 'create']);
Route::post('/fullcalendar/update', [FullCalendarController::class, 'update']);
Route::post('/fullcalendar/delete', [FullCalendarController::class, 'destroy']);

Route::get('/calendario', [App\Http\Controllers\FullCalendarController::class, 'calendario'])->name('mi-calendario');

//PDF y QR
//Route::get('/pdf', [\App\Http\Controllers\PdfController::class, 'generarPdf'])->name('generar.pdf');
Route::get('/pdf-generate', function () {
    $pdf = PDF::loadView('upload.docs.documento-pdf');
    return $pdf->stream();
});

Route::get('/qrcode', function () {
    //return QrCode::size(300)->generate('A basic example of QR code!'); //text
    //return QrCode::size(300)->phoneNumber('+51 924366489'); //celular
    $qrCode = QrCode::style('round')->gradient(255, 0, 150, 50, 20, 150, 'radial')->size(250)->email('c2-jose@hotmail.com', 'Aqui va el asunto', 'Este es el mensaje de prueba.');
    return $qrCode;
});



Route::get('/', [App\Http\Controllers\ViewsController::class, 'listMedicos'])->name('lista.medicos');

Route::get('/noticias/noticias-nuevas/{slug}', [App\Http\Controllers\ViewsController::class, 'ver_noticias'])->name('noticias.ver');
//ruta pagina principal de nosotros
Route::get('/nosotros', [App\Http\Controllers\ViewsController::class, 'info_nosotros'])->name('nosotros.index');
//ruta para mostrar todas las noticias
Route::get('/noticias', [App\Http\Controllers\ViewsController::class, 'all_show'])->name('all.noticias');
//ruta para servicios/especilidades
Route::get('/servicios', [App\Http\Controllers\ViewsController::class, 'cs_servicios'])->name('servicios.index');
//ruta para contacto
Route::get('/contacto', [App\Http\Controllers\ViewsController::class, 'cs_contacto'])->name('contact.index');
