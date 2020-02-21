<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//tambahan

use App\Paket;


//panggil pustaka/library/vendor
use DB;
use Validator,File,Redirect,Response;
use PDF;
use App\Exports\PaketExport;
use Maatwebsite\Excel\Facades\Excel;
class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_paket = DB::table('paket')->get();
        return view ('paket.index',
        compact('ar_paket')
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        DB::table('paket')->insert(
            [
                
                'nama_pengirim'=>$request->nama_pengirim,
                'tipe_barang'=>$request->tipe_barang,
                'instansi'=>$request->instansi,
                'nama_penerima'=>$request->nama_penerima,
                
                'admin_id'=>$request->admin_id,
               
            ]
        );
        //landing page
        return redirect ('/afterKirim');
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
         $ar_paket = DB::table('paket')
        
        ->where('paket.idpaket','=',$id)
        ->get();
        return view('paket.show', compact('ar_paket'));
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
       $data = DB::table('paket')->where('idpaket',$id)->get();
        return view('paket.form_edit',compact('data'));
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
            
            'nama_pengirim'=>'required',
            'instansi'=>'required',
            'tipe_barang'=>'required',
            'nama_penerima'=>'required',
            
         ],[
             
             'nama_pengirim.required'=>'Nama Wajib untuk diisi',
             'instansi.required'=>'Instansi tidak boleh kosong',
             'tipe_barang.required'=>'tipe barang Wajib untuk diisi',
             'nama_penerima.required'=>'nama penerima wajib untuk diisi',
             
         ]);
        //
         DB::table('paket')->where('idpaket',$id)->update(
            [
                
                'nama_pengirim'=>$request->nama_pengirim,
                'nama_penerima'=>$request->nama_penerima,
                'instansi'=>$request->instansi,
                'tipe_barang'=>$request->tipe_barang,


                
            ]
        );
        //landing page
        return redirect ('/paket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        //hapus data
        DB::table('paket')->where('idpaket',$id)->delete();
        //landing page
        return redirect ('/paket');
    }

     public function paketPDF()
    {
        $ar_paket = DB::table('paket')

            ->select('paket.*')
            ->get();
           
            
        $pdf = PDF::loadView('paket.paketPDF', ['ar_paket'=>$ar_paket])
               ->setPaper('a4','landscape');
        //return $pdf->download('data kiriman paket.pdf');
               return $pdf->stream();
    }
    public function export() 
    {
        return Excel::download(new PaketExport, 'data_paket.xlsx');
    }

   
}
