<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['siswa'] = \DB::table('t_siswa')->get();
        $query = @$_GET['query'];
        if (isset($query)) {
            $data['siswa'] = \DB::table('t_siswa')
                            ->where('nis','like','%'.$query.'%')
                            ->orWhere('namalengkap','like','%'.$query.'%')
                            ->get();
            
        }
        return view('belajar',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $rule = [
            'nis' => 'required|numeric|unique:t_siswa',
            'namalengkap' => 'required|string',
            'jenkel' => 'required',
            'golongan_darah' => 'required'
        ];
        $this->validate($request,$rule);
        unset($input['_token']);
        $status = \DB::table('t_siswa')->insert($input);
        if($status){
            return redirect('/siswa')->with('success','Data Berhasil Ditambahkan');
        }else{
            return redirect('/siswa/create')->with('error','Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['siswa'] = \DB::table('t_siswa')->find($id);
        return view('siswa.form',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rule = [
            'nis' => 'required|numeric',
            'namalengkap' => 'required|string',
            'jenkel' => 'required',
            'golongan_darah' => 'required'
        ];

        $this->validate($request,$rule);

        $input = $request->all();
        unset($input['_token']);
        unset($input['_method']);

        $status = \DB::table('t_siswa')->where('id',$id)->update($input);

        if($status){
            return redirect('/siswa')->with('success','Data Berhasil Diubah');
        }else{
            return redirect('/siswa/create')->with('error','Data Gagal Diubah');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = \DB::table('t_siswa')->where('id',$id)->delete();

        if($status){
            return redirect('/siswa')->with('success','Data Berhasil Dihapus');
        }else{
            return redirect('/siswa')->with('error','Data Gagal Dihapus');
        }
    }
}
