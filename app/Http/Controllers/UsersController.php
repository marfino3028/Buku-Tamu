<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Users;

class UsersController extends Controller
{
    //
	public function index()
    {
        $ar_user = DB::table('users')->get();
        return view ('auth.index',
        compact('ar_user')
      );
    }

     public function show($id)
    {
        //
         $ar_user= DB::table('users')
        
        ->where('users.id','=',$id)
        ->get();
        return view('auth.show', compact('ar_user'));
    }

    public function edit($id)
    {
        //
       $data = DB::table('users')->where('id',$id)->get();
        return view('auth.form_edit',compact('data'));
    }
     public function update(Request $request, $id)
    {

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
       
        

         DB::table('users')->where('id',$id)->update(
            [
                
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
                'foto'=>$fileName,
                
                
            ]
        );
        //landing page
        return redirect ('/auth');
    }
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

        DB::table('users')->insert(
            [

                'name'=>$request->name,
                'role'=>$request->role,
                
               
                'foto'=>$fileName,
                

                

            ]
        );
        //landing page
        return redirect ('/auth');
    }


     public function destroy($id)
    {
        //hapus data
        DB::table('users')->where('id',$id)->delete();
        //landing page
        return redirect ('/auth');
    }
}
