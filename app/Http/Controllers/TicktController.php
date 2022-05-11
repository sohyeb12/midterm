<?php

namespace App\Http\Controllers;

use App\Models\Tickt;
use Illuminate\Http\Request;

class TicktController extends Controller
{
    public function index (){
        $tickts = Tickt::all();
        return view('tickt',compact('tickts'));
    }

    public function add (){
        // $tickts = Tickt::all();
        // return view('tickt',compact('tickts'));
        // $tickt = new Tickt();
        // $tickt->title = $request->title;

        // $tickt->category = $request->category;
        // $tickt->status = $request->status;
        // $tickt->message = $request->message;
        // $tickt->created_at = now();
        // $tickt->updated_at = now();
        // $tickt->save();
        return view('add');
    }

    public function addshift(Request $request){

        $tickt = new Tickt();
        $tickt->title = $request->title;

        $tickt->category = $request->category;
        $tickt->status = $request->status;
        $tickt->message = $request->message;
        $tickt->created_at = now();
        $tickt->updated_at = now();
        $tickt->save();
        return redirect()->to('/add');
    }

    public function find(Request $request){
        $tickt = Tickt::find($request->id);
        return view('data',compact('tickt'));
    }
}
