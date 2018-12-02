<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;

class GudangController extends Controller
{
    public function index(){
    	$data['gudang'] = Gudang::orderby('id', 'desc')->get();
    	return view('gudang.index')->with($data);
    }
    public function add(){
    	return view('gudang.add');
    }
    public function save(Request $r){
    	$gudang = new Gudang;
    	$gudang->alamat = $r->input('alamat');
    	$gudang->kapasitas = $r->input('kapasitas');

    $file = $r->file('pic');
      $filename = $file->getClientOriginalName();
      $r->file('pic')->move("picture/", $filename);
      $gudang->pic = $filename; 
    	$gudang->save();


    	return redirect()->route('gudang_all');
    }
    public function edit($id){
    	$data['gudang'] = Gudang::find($id);
    	return view('gudang.edit')->with($data);
    }
    public function update(Request $r, $id){
    	$gudang = Gudang::find($id);
    	$gudang->alamat = $r->input('alamat');
    	$gudang->kapasitas = $r->input('kapasitas');
    	$pic = $r->file('pic');
        $gudang->pic = $pic->getClientOriginalName();
        $pic->move(public_path('pic'),$pic->getClientOriginalName());

        $gudang->save();


        return redirect()->route('gudang_all');
    }
    public function delete($id){
    	Gudang::find($id)->delete();
    	return redirect()->route('gudang_all');
    }
}
