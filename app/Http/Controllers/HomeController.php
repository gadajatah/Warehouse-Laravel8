<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $workers = Worker::get()->all();
        $pekerja = count($workers);
        return view('home', compact('workers', 'pekerja'));
    }
    /**
     * Tampil Data pada Dashboard
     * 
     */
    public function create()
    {
        return view('worker.create');
    }
    /**
     * 
     */
    public function store(Request $request)
    {
        // Validated Field
       $rules = array(
        'nama' => 'required',
        'jenkel' => 'required',
        'username' => 'required',
        'password' => 'required',
       );
       $validated = $request->validate($rules);
        //    Input Data
       $worker = new Worker();
       $worker->nama = $validated['nama'];
       $worker->jenkel = $validated['jenkel'];
       $worker->username = $validated['username'];
       $worker->password = $validated['password'];
       
       if (!$worker->save()) {
           return redirect()->route('create')->with('error', 'Petugas gagal dibuat.');;
       }
       return redirect()->route('home')->with('success', 'Petugas ' . $validated['nama'] . ' berhasil dibuat!');
    }
    /**
     * Simpan Data
     * 
     */
    public function edit($id)
    {
        $worker = Worker::findOrFail($id);
        return view('worker.edit', compact('worker'));
    }
    /**
     * Edit data
     * 
     */
    public function update($id)
    {
         // Validated Field
       $rules = array(
        'nama' => 'required',
        'jenkel' => 'required',
        'username' => 'required',
        'password' => 'required',
       );
       $validated = request()->validate($rules);
       $worker = Worker::findOrFail($id);
       $check = $worker->update(
           array(
               'nama' => $validated['nama'],
               'jenkel' => $validated['jenkel'],
               'username' => $validated['username'],
               'password' => $validated['password'],
           )
       );
       if (!$check) {
           return redirect()->route('worker.update')->with('errors', 'Petugas Gagal di Update!');
       }
       return redirect()->route('home')->with('success', 'Petugas ' . $validated['nama'] . ' berhasil di Edit!');
    }
    /**
     * Update Data
     * 
     */
    public function destroy($id)
    {
        $worker = Worker::findOrFail($id);
        $worker->delete();
        
        return redirect()->route('home')->with('success', 'Petugas Berhasil Dihapus!');
    }
    /**
     * Hapus Data
     */
}
