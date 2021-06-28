<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers = Worker::get()->all();
        $pekerja = count($workers);
        return view('worker.all',compact('workers','pekerja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('worker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
       return redirect()->route('worker.all')->with('success', 'Petugas ' . $validated['nama'] . ' berhasil dibuat!');
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
        $worker = Worker::findOrFail($id);
        return view('worker.edit', compact('worker'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
            return redirect()->route('worker.all')->with('success', 'Petugas ' . $validated['nama'] . ' berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $worker = Worker::findOrFail($id);
        $worker->delete();
        
        return redirect()->route('worker.all')->with('success', 'Petugas Berhasil Dihapus!');
    }
}
