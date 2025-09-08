<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Player;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PlayersController extends Controller
{

    public function update(Request $request, Player $player)
    {
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'position' => ['nullable','string','max:100']
        ]);

        $player->update($data);

        return back()->with('status', 'Player updated.');
    }


    public function listPlayer(){
        $query = DB::select('SELECT * FROM sergio');
        
        return view('welcome', ['players' => $query]);
    }

    public function birthday(Request $request){
        try {
            \Artisan::call('daily:run');
        } catch (\Throwable $th) {
            \Log::debug($th->getMessage() . ' in ' . $th->getFile() . ' on line ' . $th->getLine());
        }

        $response = 'ok';

        return response()->json(compact('response'));
    }

}