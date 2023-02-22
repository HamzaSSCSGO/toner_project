<?php

namespace App\Console\Commands;

use App\Mail\TestMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\CriticalValue;

class SendTonereStatusCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tonere:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $newCriticalValue = CriticalValue::all()->first()->critical_value;
        $toners=DB::table('toners')
                ->select('toners.id as toners_id','quantity_left','color_name','toner_model_name','color_id','toner_model_id','toner_image')
                ->join('toner_models','toners.toner_model_id','=','toner_models.id')
                ->join('colors','toners.color_id','=','colors.id')
                ->where('quantity_left','<',$newCriticalValue)
                ->get();
        /* $userName = Auth::user()->name; */
        $details=[
            'title' => 'Mail from Toner Asset Manager App',
            'description'=> ' just added a toner ' ,
            'toners' => $toners,
            
        ]; 

        Mail::to("jits.maron@gmail.com")->send(new TestMail($details));
        return 0;
    }
}
