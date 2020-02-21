<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//tambahan

use App\Tamu;


//panggil pustaka/library/vendor
use DB;
use Validator,File,Redirect,Response;
use PDF;
use App\Exports\TamuExport;
use Maatwebsite\Excel\Facades\Excel;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_tamu = DB::table('tamu')->get();

        //menyiapkan data chart
        $categori = [];
        $data = [];
        foreach ($ar_tamu as $mp) {
            # code...

            $categori[] = $mp->nama;
            $data[] = $mp->tanggal_datang;
        }

        return view ('tamu.index',
            compact('ar_tamu')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function hitung()
    {
        //
        //$tanggal = DB::table('tamu')->count(if(tanggal_datang = 02,1,null)) 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //tambah foto 
        if(!empty($request->foto)){
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->nama.'.jpg';   
            $request->foto->move(public_path('images'), $fileName);
        }else{
            $fileName = $request->nama.'.jpg';
        } 

        DB::table('tamu')->insert(
            [

                'nama'=>$request->nama,
                'gender'=>$request->gender,
                'instansi'=>$request->instansi,
                'no_telp'=>$request->no_telp,
                'keperluan'=>$request->keperluan,
                'foto'=>$fileName,
                'tanggal_datang'=>$request->tanggal_datang,
                'admin_id'=>$request->admin_id,

                

            ]
        );
        //landing page
        return redirect ('/afterRegister');
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
       $ar_tamu= DB::table('tamu')

       ->where('tamu.id','=',$id)
       ->get();
       return view('tamu.show', compact('ar_tamu'));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
     $data = DB::table('tamu')->where('id',$id)->get();
     return view('tamu.form_edit',compact('data'));
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
        $validasi = $request->validate([

            'nama'=>'required',
            'gender'=>'required',
            'instansi'=>'required',
            'no_telp'=>'required',
            'keperluan'=>'required',
            'tanggal_datang'=>'required',
            
            
        ],[

           'nama.required'=>'Nama Wajib untuk diisi',
           'instansi.required'=>'Instansi tidak boleh kosong',
           'gender.required'=>'gender silahkan diisi',
           'no_telp.required'=>'nama penerima wajib untuk diisi',
           'keperluan.required'=>'keeprluan tidak boleh kosong',
           'tanggal_datang.required'=>'tanggal silahkan diisi',


       ]);
        //2.proses upload,dicek pas input ada upload file/tidak
        if(!empty($request->foto)){
            //proses ganti foto lama dgn baru
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff,jfif|max:3048',
            ]);
            //$fileName = $request->nip.'.'.$request->foto->extension();
            $fileName = $request->nama.'.jpg';  
            $request->foto->move(public_path('images'), $fileName);
        }else{
            $fileName = $request->nama.'.jpg';
        }
        
        //

        DB::table('tamu')->where('id',$id)->update(
            [

                'nama'=>$request->nama,
                'gender'=>$request->gender,
                'instansi'=>$request->instansi,
                'tanggal_datang'=>$request->tanggal_datang,               
                'keperluan'=>$request->keperluan,
                'no_telp'=>$request->no_telp,
                'foto'=>$fileName,
                
            ]
        );
        //landing page
        return redirect ('/tamu'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //ambil isi kolom foto lalu hapus file fotonya 
        //di folder img
        $foto = DB::table('tamu')->select('foto')
        ->where('id','=',$id)->get();
        foreach($foto as $f){
            $namaFile = $f->foto;
        }
        File::delete(public_path('images/'.$namaFile));
        //hapus data
        DB::table('tamu')->where('id',$id)->delete();
        //landing page
        return redirect ('/tamu');
    }
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to cetak PDF'];
        $pdf = PDF::loadView('tamu.myPDF', $data);
        return $pdf->download('file Tamu.pdf');
    }


    public function tamuPDF()
    {
        $ar_tamu = DB::table('tamu')

        ->select('tamu.*')
        ->get();


        $pdf = PDF::loadView('tamu.tamuPDF', ['ar_tamu'=>$ar_tamu])
        ->setPaper('a4','landscape');
        //return $pdf->download('data_tamu.pdf');
        return $pdf->stream();
    }

    
    public function export() 
    {
        return Excel::download(new TamuExport, 'data_Kategori.xlsx');
    }


}
