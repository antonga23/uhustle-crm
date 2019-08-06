<?php

namespace App\Console;

use DB;
use Auth;
use Response;
use App\Lead;
use App\Twillio;
use App\Product;
use App\LeadsCallbacks;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;
use Twilio\TwiML\VoiceResponse;
use Twilio\Twiml;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

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
        // $schedule->command('inspire')
        //          ->hourly();


        $schedule->call(function(){
            
            $now = Carbon::now();
    
            // Your Account SID and Auth Token from twilio.com/console
            $account_sid = config('twillio.twillio_account_sid');
            $auth_token = config('twillio.twillio_auth_token');
    
            $client = new Client($account_sid, $auth_token);
    
            $twilios = Twillio::with('lead')
                        ->where(['twilio_imported' => 0])
                        ->get();
    
            foreach ($twilios as $key => $value) {
                
                $count = LeadsCallbacks::where(['user_id' => $value->agent_id])
                            ->where(['lead_id' => $value->lead->id ])
                            ->where(['call_sid' => $value->call_sid ])
                            ->count();

                $call = $client->calls($value->call_sid)->fetch();
              
                Twillio::where(['call_sid' => $value->call_sid])->update([
                    'lead_name' => $value->lead->name . ' ' . $value->lead->surname,
                    'lead_country' => $value->lead->country,
                    'call_date_created' => $value->created_at->format('Y-m-d'),
                    'call_duration' => $call->duration,
                    'call_from' => $call->from,
                    'call_price' => $call->price,
                    'call_status' => $call->status,
                    'call_to' => $call->to,
                    'has_call_back' => ( $count > 0)? true : false,
                    'twilio_imported' => 1
                ]);
                
            }
        })->everyMinute();
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
