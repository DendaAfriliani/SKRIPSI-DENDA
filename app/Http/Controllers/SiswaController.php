<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    // isisnya: index, semua fungdi CRUD
    public function index(){
    	$tampil = Siswa::all();

    	return view('Siswa.DaftarSiswa', compact('tampil'));
    }

    public function create(){
    	return view('Siswa.data_siswa');
    }

    public function store(Request $datasiswa){
    	$dtsiswa = $datasiswa->all();
    	Siswa::create($dtsiswa);
    	return redirect('siswa');
    }

    public function edit($id){
    	$tampil = Siswa::find($id);
    	// var_dump($tampil);
    	return view('Siswa.edit_siswa',compact('tampil'));
    }

    public function update(Request $ubah, $id){
    	
    	Siswa::find($id)->update($ubah->all());
    	return redirect('siswa');

    }

    public function destroy($id){
    	Siswa::find($id)->delete();
    	return redirect('siswa');
    }
}
