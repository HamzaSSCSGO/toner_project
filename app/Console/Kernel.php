<?php

namespace App\Console;

use Illuminate\Support\Facades\DB;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\CriticalValue;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        

        
        
        
        $schedule->command("tonere:status")->dailyAt('10:00')->timeZone('Africa/Casablanca')->when(function () {
            $newCriticalValue = CriticalValue::all()->first()->critical_value;
            $toners=DB::table('toners')
                ->select('toners.id as toners_id','quantity_left','color_name','toner_model_name','color_id','toner_model_id','toner_image')
                ->join('toner_models','toners.toner_model_id','=','toner_models.id')
                ->join('colors','toners.color_id','=','colors.id')
                ->where('quantity_left','<',$newCriticalValue)
                ->get();
            if($toners->first()){
                return true;
            }else{
                return false;
            }
                
            });
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
