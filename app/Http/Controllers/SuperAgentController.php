<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;


class SuperAgentController extends Controller
{
     //
     public function dashboard()
     {
         return view('super-agent.dashboard');
     }

}
