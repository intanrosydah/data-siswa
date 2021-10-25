<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Session;
use DB;

class pendataanController extends Controller
{
    public function createData(){
        return view ('pendataan.tambah_data');
    }
    public function readData(){
        return view ('pendataan.read');
    }
    public function updateData(){
        return view ('pendataan.update');
    }
    public function deleteData(){
        return view ('pendataan.delete');
    }
    public function paginateData(){
        $paginateData = Siswa::all();
        // return $paginateData;
        return view ('paginate',compact('paginateData'));
        // paginate($request->all());
       
    }
    public function listData(Request $request){
        $listData = Siswa::all();
        // return $listData;
        return view ('list',compact('listData'));
    }
    // public function masukData(Request $request){
    //     $masukData = Siswa::all();
    //     // return $masukData;
    //     return view ('masuk',compact('masukData'));
    // }
    public function editData($id){
        // $editData = Siswa::all();
        // return $editData;
        // return view ('edit',compact('editData'));
        // $peg = Siswa::findorfail($id);
        $idd = Session::put("id",$id);
        $peg = Siswa::where('id', $id)->first();
        $data = [
            "info"=>$peg,
            "Title"=>"Edit"
          ];
        return view('edit',$data);
    }
    
    public function updating(Request $request){
        $id = Session::get("id");
        $request->validate
        ([

          'nama'=> 'required',
          'tempat_tanggal_lahir'=> 'required',
          'alamat'=> 'required',
          'sekolah'=> 'required',
          'NISN'=> 'required',
          'no_telp'=> 'required'
        ]);
        
        $updating = Siswa::where("id", $id)
        ->update([
          'nama'=> $request->input('nama'),
          'tempat_tanggal_lahir'=> $request->input('tempat_tanggal_lahir'),
          'alamat'=> $request->input('alamat'),
          'sekolah'=> $request->input('sekolah'),
          'NISN'=> $request -> input('NISN'),
          'no_telp'=> $request -> input('no_telp')
        ]);
        // dd($updating);
        return redirect('/paginate');
    }
    
    // public function delete(Request $request)
    // {
    //     $delete = Siswa::delete( $id);
    //     return redirect('/paginate')->with('success', 'id has been deleted!');
    // }
    public function delete($id){
      DB::table('siswas')->where('id', $id)->delete();
        // Siswa::delete($id);
        return redirect( '/paginate' )->with( 'success', 'id has been deleted!');
    }
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'nama' => 'required',
            'tempat_tanggal_lahir' => 'required',
            'alamat' => 'required',
            'sekolah'=> 'required',
            'NISN' => 'required',
            'no_telp' => 'required'
        ]);
        $data['nama'] = $request["nama"];
        $data['tempat_tanggal_lahir'] = $request["tempat_tanggal_lahir"];
        $data['alamat'] = $request["alamat"];
        $data['sekolah'] = $request["sekolah"];
        $data['NISN'] = $request["NISN"];
        $data['no_telp'] = $request["no_telp"];
       
        $siswa = Siswa::create($data);
        if($siswa){
            //redirect dengan pesan sukses
            return redirect()->route('paginate')->with(['success' => 'Data Berhasil Disimpan!']);
        }
        else
        {
            //redirect dengan pesan error
            return redirect()->route('tambahdata')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }  
}



