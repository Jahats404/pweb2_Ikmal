<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index(){
        $arsip = Arsip::all();
        return view('aisya.arsip', compact(['arsip']));
    }

    public function tampil(){
        $arsip = Arsip::all();
        return view('aisya.dashboard', compact(['arsip']));
    }

    public function insert(){
        return view('aisya.form');
    }

    public function postinsert(Request $request){
        // dd($request->except(['_token', 'submit']));
        Arsip::create($request->except(['_token', 'submit']));
        return redirect('/arsip');
    }

    public function edit($id){

        $arsip = Arsip::find($id);        
        return view('aisya.edit',compact(['arsip']));        
    }

    public function update($id, Request $request){
        $arsip = Arsip::find($id);
        $arsip->update($request->except(['_token','submit']));
        return redirect('/arsip');
    }

    public function delete($id){
        $arsip = Arsip::find($id);
        $arsip->delete();
        return redirect('/arsip');
    }
}
