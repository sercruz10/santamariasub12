<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PlayersController extends Controller
{

    public function listPlayer(){
        $query = DB::select('SELECT * FROM sergio');
        
        return view('welcome', ['players' => $query]);
    }

    public function birthday(Request $request){
        
    }

}