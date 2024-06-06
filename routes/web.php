<?php
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function () {
     Route::get('/submit/get-spec-from-edu-fig/{id}', [
        'uses' => 'SubmitController@getSpecFromEduFig',
        'as' => 'getSpecFromEduFig'
    ]);
    Route::get('/submit/get-spec-from-edu-fig-mag/{id}', [
        'uses' => 'SubmitController@getSpecFromEduFigMag',
        'as' => 'getSpecFromEduFigMag'
    ]);
    Route::get('/submit/get-dir-lang/{id}', [
        'uses' => 'SubmitController@get_dir_lang',
        'as' => 'get_dir_lang'
    ]);


    Route::get('/', ['uses' => 'IndexController@index', 'as' => 'index']);
    Route::get('university', ['uses' => 'IndexController@university', 'as' => 'university']);
    // admission start
    Route::get('/submit/masters', [
        'uses' => 'SubmitController@masters',
        'as' => 'masters'
    ]);
    Route::post('/submit/storemasters', [
        'uses' => 'SubmitController@storemasters',
        'as' => 'storemasters'
    ]);
    Route::get('/submit/overseas', [
        'uses' => 'SubmitController@overseas',
        'as' => 'overseas'
    ]);

    Route::post('/submit/storeoverseas', [
        'uses' => 'SubmitController@storeoverseas',
        'as' => 'storeoverseas'
    ]);
    Route::get('/submit/checkmail/{id}', [
        'uses' => 'SubmitController@checkmail',
        'as' => 'checkmail'
    ]);
    Route::get('/submit/checkmail2/{id}', [
        'uses' => 'SubmitController@checkmail2',
        'as' => 'checkmail2'
    ]);
    Route::get('/submit/overseaspdf/{id}', [
        'uses' => 'SubmitController@overseaspdf',
        'as' => 'overseaspdf'
    ]);
    Route::get('/submit/masterspdf/{id}', [
        'uses' => 'SubmitController@masterspdf',
        'as' => 'masterspdf'
    ]);
    Route::get('/submit/masterspdf1/{id}', [
        'uses' => 'SubmitController@masterspdf1',
        'as' => 'masterspdf1'
    ]);
    Route::get('/submit/success', [
        'uses' => 'SubmitController@success',
        'as' => 'success'
    ]);
    Route::post('/submit/downloadapp', [
        'uses' => 'SubmitController@downloadapp',
        'as' => 'downloadapp'
    ]);

// admission end

});


Route::group([
    'prefix' => 'backoffice',
    'namespace' => 'Admin',
    'middleware' => ['web', 'auth']
], function (){

    Route::get('/', 'AdminController@index')->name('admin');
    Route::resource('masters', 'MastersController');
    Route::resource('overseas', 'OverseasController');
    Route::resource('menu', 'MenuController');
    Route::resource('dirs', 'DirController');
    Route::get('/settings/profile',[
        'uses' => 'SettingsController@profile',
        'as'   => 'settings'
    ]);
    Route::get('/export/index',[
        'uses' => 'ExportController@index',
        'as'   => 'export.index'
    ]);
    Route::get('/export/exportmasters',[
        'uses' => 'ExportController@exportmasters',
        'as'   => 'export.masters'
    ]);
    Route::get('/export/exportoverseas',[
        'uses' => 'ExportController@exportoverseas',
        'as'   => 'export.overseas'
    ]);
    Route::get('/export/exportmasters',[
        'uses' => 'ExportController@exportmasters',
        'as'   => 'export.masters'
    ]);
    Route::post('/overseas/confirm',[
        'uses' => 'OverseasController@confirm',
        'as'   => 'overseasconfirm'
    ]);
    Route::post('/masters/confirm',[
        'uses' => 'MastersController@confirm',
        'as'   => 'mastersconfirm'
    ]);
    Route::get('/masters/exportFile/{$type}',[
        'uses' => 'MastersController@exportFile',
        'as'   => 'exportFile'
    ]);
    Route::get('/overseas/mailer/{id}/{lang}/{text}',[
        'uses' => 'OverseasController@mailer',
        'as'   => 'overmailer'
    ]);
    Route::post('/overseas/mailto',[
        'uses' => 'OverseasController@mailto',
        'as'   => 'overmailto'
    ]);
    Route::post('/masters/mailto',[
        'uses' => 'MastersController@mailto',
        'as'   => 'mastersmailto'
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ddrr', 'HomeController@ddrr');

// Clear application cache:
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function() {
    Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return 'Config cache has been cleared';
});

// Clear view cache:
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});