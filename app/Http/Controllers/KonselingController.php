<?php

namespace App\Http\Controllers;
use App\Models\Konseling;
use Illuminate\Http\Request;

class KonselingController extends Controller
{
    public function index(){
        $konselings = Konseling::all();
        return view('konselings.index', ['konselings' => $konselings]);
        
    }

    public function create(){
        return view('konselings.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'jenis' => 'required',
            'telp' => 'required|numeric',
            'tgl_konseling' => 'required',
            'jam' => 'required',
            'deskripsi' => 'required'
        ]);

        Konseling::create($data);

        return redirect('/');

    }

//     public function store(Request $request)
// {
//             //Validasi Formulir
//             $this->validate($request, [
//                 'nama' => 'required',
//                 'email' => 'required',
//                 'jenis' => 'required',
//                 'telp' => 'required|numeric',
//                 'tgl_konseling' => 'required',
//                 'jam' => 'required',
//                 'description' => 'required'
//             ]);
//             //Fungsi Simpan Data ke dalam Database
//             Departemen::create([
//                 'nama' => $request->nama,
//                 'email' => $request->email,
//                 'jenis' => $request->jenis,
//                 'telp' => $request->telp,
//                 'tgl_konseling' => $request->tgl_konseling,
//                 'jam' => $request->jam,
//                 'deskripsi' => $request->deskripsi,
           
//             ]);
//             try{
//             //Mengisi variabel yang akan ditampilkan pada view mail
//             $content = [
//             'body' => $request->nama_departemen,
//             ];
//             //Mengirim email ke emailtujuan@gmail.com
//             Mail::to('gvnelsword@gmail.com')->send(new
//             DepartemenMail($content));
//             //Redirect jika berhasil mengirim email
//             return redirect()->route('departemen.index')->with(['message'
//             => 'Data Berhasil Disimpan, email telah terkirim!']);
//             }catch(Exception $e){
//             //Redirect jika gagal mengirim email
//             return redirect()->route('departemen.index')->with(['message'
//             => 'Data Berhasil Disimpan, namun gagal mengirim email!']);
//             }
// }

    public function edit(Konseling $konseling){
        return view('konselings.edit', ['konseling' => $konseling]);
    }

    public function update(Konseling $konseling, Request $request){
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'jenis' => 'required',
            'telp' => 'required|numeric',
            'tgl_konseling' => 'required',
            'jam' => 'required',
            'deskripsi' => 'required'
        ]);

        $konseling->update($data);

        return redirect(route('konseling.index'));

    }

    public function destroy(Konseling $konseling){
        $konseling->delete();
        return redirect(route('konseling.index'));
    }
}
