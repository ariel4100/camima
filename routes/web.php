<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
/*************************RUTAS PUBLICAS******************************/
Route::get('/','FrontendController@home')->name('home');



Route::get('quienes-somos','FrontendController@quienessomos')->name('quienes.somos');
Route::get('autoridades','FrontendController@autoridades')->name('autoridades');
Route::get('objetivos','FrontendController@objetivos')->name('objetivos');
Route::get('mision-vision','FrontendController@misionvision')->name('mision.vision');
Route::get('enlaces','FrontendController@enlaces')->name('enlaces');
Route::get('nuestra-sede','FrontendController@nuestrasede')->name('nuestra.sede');
Route::get('asesorias','FrontendController@asesorias')->name('asesorias');

//PRENSA
Route::get('prensa','FrontendController@prensa')->name('prensa');
Route::get('prensa/{id}/prensa', 'FrontendController@show_index')->name('show_index');
Route::get('prensa/{news}','FrontendController@show')->name('show');

//GREMIALES
Route::get('uom','FrontendController@uom')->name('uom');
Route::get('asimra','FrontendController@asimra')->name('asimra');
Route::get('{gremial}/pdf/{id}','FrontendController@pdf')->name('page.pdf');

//CAPACITACION
Route::get('cursos','FrontendController@cursos')->name('cursos');
Route::get('otros','FrontendController@otros')->name('otros');
Route::get('curso/{id}','FrontendController@curso')->name('curso.ver');


Route::get('contacto','FrontendController@contacto')->name('contacto');


/***MAIL***/
Route::post('contacto','MailController@contacto')->name('contacto.mail');
Route::post('postventa','MailController@postventa')->name('post.venta.mail');
/****FIN MAIL****/

Auth::routes();




/*************************RUTAS ADM******************************/

Route::group([ 'prefix' => 'adm'],function (){
    Route::view('/',  'adm.dashboard.index');
    // SLIDERS
    Route::group(['prefix' => 'slider', 'as' => 'slider'], function() {
        Route::get('{seccion}/create', ['uses' => 'Adm\SliderController@create', 'as' => '.create']);
        Route::post('store', ['uses' => 'Adm\SliderController@store', 'as' => '.store']);
        Route::get('{seccion}/list', ['uses' => 'Adm\SliderController@list', 'as' => '.list']);
        Route::get('edit/{slider}', ['uses' => 'Adm\SliderController@edit', 'as' => '.edit']);
        Route::post('update/{slider}', ['uses' => 'Adm\SliderController@update', 'as' => '.update']);
        Route::get('destroy/{slider}', ['uses' => 'Adm\SliderController@destroy', 'as' => '.destroy']);
    });
    // CONTENIDO
    Route::group(['prefix' => 'contenido', 'as' => 'contenido'], function() {
        Route::get('{section}/', ['uses' => 'Adm\ContentController@index', 'as' => '.index']);
        Route::get('{section}/create', ['uses' => 'Adm\ContentController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\ContentController@store', 'as' => '.store']);
        Route::get('{section}/{contenido}/edit', ['uses' => 'Adm\ContentController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\ContentController@update', 'as' => '.update']);
        Route::get('/eliminar/lista/{section}/{contenido}', ['uses' => 'Adm\ContentController@delete', 'as' => '.delete']);
    });

    // PRODUCTOS
    Route::group(['prefix' => 'productos', 'as' => 'productos'], function() {
        Route::get('{general}', ['uses' => 'Adm\ProductController@index', 'as' => '.index']);
        Route::get('crear/productos/{general}', ['uses' => 'Adm\ProductController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\ProductController@store', 'as' => '.store']);
        Route::get('{id}/edit/{general}', ['uses' => 'Adm\ProductController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\ProductController@update', 'as' => '.update']);
        Route::get('{id}/destroy', ['uses' => 'Adm\ProductController@delete', 'as' => '.destroy']);
    });
    //CONFIGURACIONES DE PRODUCTOS
    Route::group(['prefix' => 'config', 'as' => 'config'], function() {
        Route::get('{producto}', ['uses' => 'Adm\ConfigController@index', 'as' => '.index']);
        Route::get('crear/config/{producto}', ['uses' => 'Adm\ConfigController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\ConfigController@store', 'as' => '.store']);
        Route::get('edit/{id}', ['uses' => 'Adm\ConfigController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\ConfigController@update', 'as' => '.update']);
        Route::get('{id}/destroy', ['uses' => 'Adm\ConfigController@delete', 'as' => '.destroy']);
    });
    /* Route::group(['prefix' => 'pedidos', 'as' => 'pedidos'], function() {
         Route::get('pedidos', ['uses' => 'Adm\OrderController@index', 'as' => '.index']);

     });*/
    // FAMILIA
    Route::group(['prefix' => 'familia', 'as' => 'familia'], function() {
        Route::get('{general}', ['uses' => 'Adm\FamilyController@index', 'as' => '.index']);
        Route::get('crear/familia/{general}', ['uses' => 'Adm\FamilyController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\FamilyController@store', 'as' => '.store']);
        Route::get('{id}/edit/{general}', ['uses' => 'Adm\FamilyController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\FamilyController@update', 'as' => '.update']);
        Route::get('{id}/destroy', ['uses' => 'Adm\FamilyController@delete', 'as' => '.destroy']);
    });

    Route::group(['prefix' => 'subfamilia', 'as' => 'subfamilia'], function() {
        Route::get('{general}', ['uses' => 'Adm\SubfamilyController@index', 'as' => '.index']);
        Route::get('crear/subfamilia/{general}', ['uses' => 'Adm\SubfamilyController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\SubfamilyController@store', 'as' => '.store']);
        Route::get('{id}/edit/{general}', ['uses' => 'Adm\SubfamilyController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\SubfamilyController@update', 'as' => '.update']);
        Route::get('{id}/destroy', ['uses' => 'Adm\SubfamilyController@delete', 'as' => '.destroy']);
    });


    Route::group(['prefix' => 'cursos', 'as' => 'cursos'], function() {
        Route::get('{cursos}', ['uses' => 'Adm\CourseController@index', 'as' => '.index']);
        Route::get('crear/subfamilia/{cursos}', ['uses' => 'Adm\CourseController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\CourseController@store', 'as' => '.store']);
        Route::get('{id}/edit/{cursos}', ['uses' => 'Adm\CourseController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\CourseController@update', 'as' => '.update']);
        Route::get('{id}/destroy', ['uses' => 'Adm\CourseController@delete', 'as' => '.destroy']);
    });

    //Route::get('familia/{general}','Adm\FamilyController@index')->name('fami.index');
    //Route::resource('familia','Adm\FamilyController');
    Route::resource('categoria','Adm\CategoryController');
    Route::resource('noticia','Adm\NewController');
    Route::resource('metadatos','Adm\MetadataController');
    Route::resource('usuario','Adm\UserController');

    Route::resource('video','Adm\VideoController');



    Route::get('gremial/{gremial}','Adm\GremialController@index')->name('gremial');
    Route::get('{gremial}/pdf/{id}','Adm\GremialController@pdf')->name('pdf');
});

//Route::get('/home', 'HomeController@index')->name('home');
