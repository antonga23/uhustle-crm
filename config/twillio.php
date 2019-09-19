<?php 

use DB;
use Auth;
use App\ApiIntegration;

$twillio = ApiIntegration::with('attributes')->where(['name' => 'Twillio'])->first();

foreach ($twillio->attributes as $key => $value) {
    switch($value->key){
        case 'twilio_phone_number':
                $twilio_phone_number = $value->value;
            break;
        case 'account_sid':
                $account_sid = $value->value;
            break;
        case 'auth_token':
                $auth_token = $value->value;
            break;
        case 'twiml_app_sid':
                $twiml_app_sid = $value->value;
            break;
    }
}

return [
    'twillio_number' => env('TWILLIO_NUMBER', $twillio_phone_number),
    'twillio_account_sid' => env('TWILLIO_ACCOUNT_SID', $account_sid),
    'twillio_auth_token' => env('TWILLIO_AUTH_TOKEN', $auth_token),
    'twillio_twiml_app_sid' => env('TWILLIO_TWIML_APP_SID', $twiml_app_sid)
];
