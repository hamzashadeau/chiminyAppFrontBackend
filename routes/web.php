<?php

use App\Http\Controllers\CreateMessagesController;
use App\Http\Controllers\CreateUtilisateuController;
use App\Mail\MailRespense;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});

Route::get('/about.html', function () {
    return view('about');
});
Route::get('/login.html', function () {
    return view('login');
});
Route::get('/contact.html', function () {
    return view('contact');
});
Route::get('/client.html', function () {
    return view('client');
});


Route::get('/gallery.html', 'App\Http\Controllers\CreateProjetController@indexGallery')->name('gallery');
Route::get('/admin', 'App\Http\Controllers\CreateProjetController@indextest')->name('gallery');
Route::post('store_image/insert_image', 'App\Http\Controllers\CreateProjetController@insert_image');
Route::post('store_etat', 'App\Http\Controllers\CreateEtatFinanciereController@store');
Route::get('login', [CreateUtilisateuController::class,'index'])->name("login");
Route::post('login_page',[CreateUtilisateuController::class,'login'])->name('_login');
Route::post('store_message', 'App\Http\Controllers\CreateMessagesController@store');
Route::get('store_image/fetch_image/{id}', 'App\Http\Controllers\CreateProjetController@fetch_image')->name('projet_Detail');
Route::get('/adminDashboard',[CreateUtilisateuController::class,'index']);
Route::get('projet-create', [CreateUtilisateuController::class,'projetCreate']);
Route::get('projet-show','App\Http\Controllers\CreateProjetController@index');
Route::get('messageCreate', [CreateUtilisateuController::class,'messagesCreate']);
Route::get('messageShow',[CreateUtilisateuController::class,'messageShow'] );
Route::get('message', 'App\Http\Controllers\CreateMessagesController@index');
Route::get('etatFinanciere-despence-create',  [CreateUtilisateuController::class,'etatFinanciereDespenceCreate']);
Route::get('etatFinanciere-Despence-Show','App\Http\Controllers\CreateEtatFinanciereController@getDespence')->name('gallery');

Route::get('etatFinanciere-gain-create', [CreateUtilisateuController::class,'etatFinanciereGainCreate']);
Route::get('/email', function () {
    return new MailRespense();
});

Route::get('etatFinanciere-gain-Show','App\Http\Controllers\CreateEtatFinanciereController@getGain')->name('gallery');
Route::get('chercher','App\Http\Controllers\CreateProjetController@chercher')->name('gallery');
Route::get('chercherParMois','App\Http\Controllers\CreateEtatFinanciereController@chercherParMois')->name('gallery');
Route::get('/send-email',[\App\Http\Controllers\CreateMessagesController::class,'send']);
Route::get('/createPDF',[\App\Http\Controllers\FacturePdf::class,'createPDF']);
Route::get("admin/message_table",[CreateMessagesController::class,'index'])->name('posts');
Route::get("admin/gain_table",[\App\Http\Controllers\CreateEtatFinanciereController::class,'getGain'])->name('posts');
Route::get("admin/despence_table",[\App\Http\Controllers\CreateEtatFinanciereController::class,'getDespence'])->name('posts');
Route::get("admin/projet_table",[\App\Http\Controllers\CreateProjetController::class,'index'])->name('posts');
Route::get("admin/imprimer/{id}",[\App\Http\Controllers\FacturePdf::class,'createPDF'])->name('posts');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("contact/respond/{id}",[CreateUtilisateuController::class,'respond']);
Route::post("send",[CreateMessagesController::class,'send'])->name('send');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post("admin/saveClientProjet",[\App\Http\Controllers\ClientProjetController::class,'insert_clientProjet'])->name('posts');
Route::get("admin/showcreateClientProjet",[CreateUtilisateuController::class,'showCreateClientProjet']);
Route::get("admin/showClientProjet",[CreateUtilisateuController::class,'showClientProjet']);
Route::get("chercher",[CreateUtilisateuController::class,'chercher']);
Route::get("create",[CreateUtilisateuController::class,'create']);

Route::get('attachement/{id}',[\App\Http\Controllers\CreateProjetController::class,'getFile']);
