<?php

namespace App\Console\Commands;

use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CleanDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laracarte:clean-database';
   // protected $signature = 'demo:command{user=foo}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean Database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
     //   dd($this->argument('user'));




       // $this->load(__DIR__.'/Commands'); // pour l'auto enregistrement les commandes  sous commands sans avoir de mettre CleanDatabase::class, dans app.kernel

       $this->info('Cleaning database..'); // ou line // ou error

//        Message::where('created_at','<=',Carbon::parse('2 month ago'))->delete();

        Message::twoMonthsOld()->delete(); //scope dans Model

        $this->info('Database cleaned..');
    }
}
