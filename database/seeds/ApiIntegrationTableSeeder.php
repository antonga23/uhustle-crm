<?php

use Illuminate\Database\Seeder;
use App\ApiIntegration;
use App\ApiIntegrationAttributes;

class ApiIntegrationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supported_apis = [
                'Twillio' => [
                    'Twilio Phone Number',
                    'Account SID',
                    'Auth Token',
                    'Twiml App SID',
                    'Default Dialing API',
                ],
                'Nexmo' => [
                    'Nexmo Phone Number',
                    'API Key',
                    'API Secret',
                    'Default Dialing API',
                ],
                'Stripe' => [
                    'API Key',
                    'API Secret',
                    'Default Payment API',
                ],
                'PayPal' => [
                    'API Key',
                    'API Secret',
                    'Default Payment API',
                ]
            ];

        foreach ($supported_apis as $supported_api_name => $supported_api_attrs) {
            $api = ApiIntegration::create([
                'name' => $supported_api_name
            ]);
            foreach ($supported_api_attrs as $key => $attr) {
                ApiIntegrationAttributes::create([
                    'api_id' => $api->id,
                    'key' => strtolower( str_replace(' ','_',$attr) ),
                    'value' => null,
                    'display_name' => $attr
                ]);
            }
        }

    }
}
