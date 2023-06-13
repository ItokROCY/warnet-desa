<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\komputer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    function tambahBilling(){
        $users = User::with('komputer')->get();
        return view('halamanAdmin.tambahBilling', compact('users'));
    }
    function editbilling($id){
        $users = User::find($id);
        return view('halamanAdmin.popup', compact('users'));
    }
    function updatebilling(Request $request, $id){
        // $users = User::find($id);
        // $currentBilling = $users->billing; 
        // $newBilling = $currentBilling + $request->input('billing');
        // $users->update(['billing' => $newBilling]); 
        // return redirect('/tambahBilling');

        $users = User::find($id);

        // Create a new komputer entry and associate it with the user
        $komputer = new Komputer();
        $komputer->PC = $request->input('PC');
        $komputer->user_id = $users->id;
        $komputer->save();
    
        $currentBilling = $users->billing;
        $newBilling = $currentBilling + $request->input('billing');
        $users->update(['billing' => $newBilling]);
        return redirect('/tambahBilling');
    }
    function akunBaru(){
        return view('halamanAdmin.akunBaru');
    }
    function addakun(Request $request){
      
            $user = DB::table('users')->get();
            $password = bcrypt($request->password);
            DB::table('users')->insert([
                'name'=>$request->name,
                'password'=>$password,
                'email'=>$request->email,
                'billing' => $request-> billing
            ]);
    
            return redirect('/tambahBilling');
        
    }
    function laporanLokal(){
        $komputers= komputer::with('user')->get();
        return view('halamanAdmin.laporanLokal', compact('komputers'));
    }
    
    function keuangan(){
        return view('halamanAdmin.keuangan');
    }

    function feedback(){
        return view('halamanAdmin.feedback');
    }
    
    function hapusAkun(){
        return view('halamanAdmin.hapusAkun');
    }

    //-----------------------------------------------------------------------------------------------------
    public function add()
    {
        return view('create');
    }
    public function create(Request $request)
    {
        // Validasi request, jika diperlukan
    
    if ($request->hasFile('image_url')) {
        // $imagePath = $request->file('image_url')->store('storage/products');
        // $image_url = basename($imagePath);
        $image = $request->file('image_url');
        $imageName = $image->getClientOriginalName();
        $imagePath = $image->move('storage/products', $imageName);
        $image_url = basename($imagePath);
    } else {
        $imageName = null; // Atau Anda bisa menetapkan nilai default untuk gambar jika tidak ada yang diunggah
    }
    
    // Simpan data ke database
    DB::table('products')->insert([
        'name' => $request->name,
        'price' => $request-> price,
        'description' => $request->description,
        'image_url' => $image_url, // Kolom untuk menyimpan nama gambar
    ]);

    //$imageUrl = Storage::url('products/' . $image_url);
    
    // Redirect atau tindakan lain setelah upload berhasil
    
    return redirect('/list');
    }


}
//  public function lihat(){
//     $data = DB::table('users')->get();
//     return view('lihat_user',['data' => $data]);
//  }
//  public function tambah(){
//     return view('tambah_user');
//  }
//  public function add_user(Request $request){ 
//     $password = bcrypt($request->password);
//     DB::table('users')->insert(['username'=>$request->username,
//     'password'=>$password,
//     'name'=>$request->nama,
//     'alamat'=>$request->alamat,
//     'no_telp'=>$request->nomor,
//     'role'=>$request->role]);
//     return redirect('/');
//  }
//  public function delete($id){
//     DB::table('users')->where('id',$id)->delete();
//     return redirect('/');
//  }
//  public function edit_user($user){
//         $data = DB::table('users')->where('id',$user)->get();
//         return view('/edit_user', ['data'=>$data]);
//  }
// public function edit_user_aksi(Request $request){
//         $password = bcrypt($request->password);
//         DB::table('users')->where('username',$request->username)
//         ->update(['username'=>$request->username,
//         'password'=>$password,
//         'name'=>$request->nama,
//         'alamat'=>$request->alamat,
//         'no_telp'=>$request->nomor,
//         'role'=>$request->role]);
//         return redirect('/');
//      }
//  };