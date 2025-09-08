<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Mail\BirthdayMail;

class DailyTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(){
       $query = \DB::table('sergio')->whereMonth('full_birthday', '=', date('m'))->whereDay('full_birthday', '=', date('d'))->get();
        foreach ($query as $user){
            Mail::to($user->email)->send(new BirthdayMail($user->name));      
        }
    }
}
