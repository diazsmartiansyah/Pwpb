<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kelas'] = \DB::table('t_kelas')->get();
        $query = @$_GET['query'];
        if (isset($query)) {
            $data['kelas'] = \DB::table('t_kelas')
                            ->where('nama_kelas','like','%'.$query.'%')
                            ->orWhere('jurusan','like','%'.$query.'%')
                            ->orWhere('nama_wali_kelas','like','%'.$query.'%')
                            ->get();
            
        }
        return view('nyuprih',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = [
            'nama_kelas' => 'required|unique:t_kelas',
            'jurusan' => 'required|string',
            'nama_wali_kelas' => 'required'
        ];
        $this->validate($request,$rule);
        $input = $request->all();
        unset($input['_token']);
        $status = \DB::table('t_kelas')->insert($input);
        if($status){
            return redirect('/kelas')->with('success','Data Berhasil Ditambahkan');
        }else{
            return redirect('/kelas/create')->with('error','Data Gagal Ditambahkan');
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
        $data['kelas'] = \DB::table('t_kelas')->find($id);
        return view('kelas.form',$data);
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
            'nama_kelas' => 'required',
            'jurusan' => 'required|string',
            'lokasi_ruangan' => 'required',
            'nama_wali_kelas' => 'required'
        ];

        $this->validate($request,$rule);

        $input = $request->all();
        unset($input['_token']);
        unset($input['_method']);

        $status = \DB::table('t_kelas')->where('id',$id)->update($input);

        if($status){
            return redirect('/kelas')->with('success','Data Berhasil Diubah');
        }else{
            return redirect('/kelas/create')->with('error','Data Gagal Diubah');
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
        $status = \DB::table('t_kelas')->where('id',$id)->delete();

        if($status){
            return redirect('/kelas')->with('success','Data Berhasil Dihapus');
        }else{
            return redirect('/kelas')->with('error','Data Gagal Dihapus');
        }
    }
}
