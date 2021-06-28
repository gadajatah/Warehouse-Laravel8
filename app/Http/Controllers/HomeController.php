<?php

namespace App\Http\Controllers;

use App\Models\Item;
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
        $items = Item::get()->all();
        $pekerja = count($workers);
        $barang = count($items);
        return view('home', compact('workers', 'pekerja', 'items', 'barang'));
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
        // 
    }
    /**
     * Simpan Data
     * 
     */
    public function edit($id)
    {
        // 
    }
    /**
     * Edit data
     * 
     */
    public function update($id)
    {
      //    
    }
    /**
     * Update Data
     * 
     */
    public function destroy($id)
    {
        // 
    }
    /**
     * Hapus Data
     */
}
