<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    // Actions 
    public function index () { 
        //$user = 'Oraib'; 
        //always return response : view , json , redirect , file 


        //1- return array 
        //2- use compact 
        //3- use Facades
        //4- use response ->view (Facade class)
        return View('layouts/dashboard/index',[
            'user'=>'Oraib'
        ]); 
    }
}
