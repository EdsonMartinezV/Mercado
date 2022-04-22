<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    function showSellers(){
        return view('showSellers');
    }

    function showSeller($sellerId){
        return view('showSeller', compact('sellerId'));
    }
}
