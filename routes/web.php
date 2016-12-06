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
Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/admin', 'AuthenticationController@index');

Route::get('/info-panel', 'InfoController@index')->middleware('admin');

// Download Route
Route::get('download/{filename}', function($filename)
{
    // Check if file exists in app/storage/file folder
    $filePath = storage_path() .'/app/public/'. $filename;
    if (file_exists($filePath)) {
        // Send Download
        return Response::download($filePath, $filename, [
            'Content-Length: '. filesize($filePath)
        ]);
    }
    else {
        // Error
        exit('Requested file does not exist on our server!');
    }
})
->where('filename', '[A-Za-z0-9\-\_\.]+');
