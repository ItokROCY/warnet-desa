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
    function updatebilling(Request $request, $id)
{
    $users = User::find($id);

    // Check if the PC number is already associated with another user
    $existingKomputer = Komputer::where('PC', $request->input('PC'))->first();

    if ($existingKomputer && $existingKomputer->user_id != $users->id) {
        // PC number is already used by another user, return an error response
        return response()->json(['error' => 'PC sudah terpakai. Silahkan gunakan PC yang lain'], 422);
    }

    // Check if the user already has a PC with the specified number
    $komputer = $users->komputer()->where('PC', $request->input('PC'))->first();

    if ($komputer) {
        // Update the billing for the existing PC
        $currentBilling = $komputer->user->billing;
        $newBilling = $currentBilling + $request->input('billing');
        $komputer->user->update(['billing' => $newBilling]);
    } else {
        // Create a new komputer entry and associate it with the user
        $komputer = new Komputer();
        $komputer->PC = $request->input('PC');
        $users->komputer()->save($komputer);

        // Update the billing for the user
        $currentBilling = $users->billing;
        $newBilling = $currentBilling + $request->input('billing');
        $users->update(['billing' => $newBilling]);
    }

    // Increase user->bayar attribute
    $users->bayar += $request->input('billing') * 1000;
    $users->save();

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
        $ruangan1 = array('A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'A12');
        return view('halamanAdmin.laporanLokal', compact('komputers', 'ruangan1'));
    }
    
    function keuangan(){
        $laporans = User::all();
        $i = 1;
        $total_tarif = User::sum('bayar');
        return view('halamanAdmin.keuangan', compact('laporans', 'i', 'total_tarif'));
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