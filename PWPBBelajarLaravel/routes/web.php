<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers;
use Illuminate\Http\Request;
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

Route::get('/',function(){
    $data['jumlahSiswa'] = count(\DB::table('t_siswa')->get());
    $data['jumlahKelas'] = count(\DB::table('t_kelas')->get());
    return view('welcome',$data);
});

Route::get('/add',function(){
    return view('addOption');
});

Route::get('/search',function(){
    $data['kategori'] = $_GET['kategori'];
    $data['query'] = $_GET['query'];
    if ($data['kategori'] == "siswa") {
        return redirect()->action(
            'SiswaController@index',$data
        );
    }else if($data['kategori'] == "kelas"){
        return redirect()->action(
            'KelasController@index',$data
        );
    }else{
        return redirect(url()->previous())->with('errCat','Pilih Kategori');
    }
    
});

Route::post('/gupdate',function(Request $request){
    
    $saya = new Controller();
    $rule = [
        'email' => 'required|email'
    ];
    
    $saya->validate($request,$rule);
    $input = $request->all();
    unset($input['_token']);
    $status = \DB::table('t_gupdate')->insert($input);

    if($status){
        return redirect(url()->previous())->with('success','Stay Tuned Dengan Update Terbaru Saya');
    }else{
        return redirect(url()->previous())->with('error','Terjadi Kesalahan');
    }

});

Route::get('/siswa','SiswaController@index');

Route::get('/siswa/create','SiswaController@create');

Route::post('/siswa','SiswaController@store');

Route::get('/siswa/{id}/edit','SiswaController@edit');

Route::patch('/siswa/{id}','SiswaController@update');

Route::delete('/siswa/{id}','SiswaController@destroy');

Route::get('/kelas','KelasController@index');

Route::get('/kelas/create','KelasController@create');

Route::post('/kelas','KelasController@store');

Route::get('/kelas/{id}/edit','KelasController@edit');

Route::patch('/kelas/{id}','KelasController@update');

Route::delete('/kelas/{id}','KelasController@destroy');

?>