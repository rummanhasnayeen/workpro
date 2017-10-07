<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;

class CatagoryController extends Controller
{
    public function catagory(){

    	return view('catagories.pic');
    }
    public function addcatagory(Request $request){


    	$this-> validate($request,[
    		'catagory'=>'required'

    	]);
    	$catagory= new Catagory;
    	$catagory->catagory=$request->input('catagory');
    	$catagory->save();
    	return redirect('/post_catagories')->with('response','Catagorry added Successfully');
    }
}
