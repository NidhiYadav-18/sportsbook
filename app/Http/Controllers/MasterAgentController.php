<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterAgentController extends Controller
{
     //
     public function dashboard()
     {
         return view('master-agent.dashboard');
     }
}
