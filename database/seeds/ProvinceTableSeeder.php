<?php

use Illuminate\Database\Seeder;
use App\Province;
use App\City;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
          'Eastern Cape' => [
            'Alice',
            'Butterworth',
            'East London',
            'Graaff-Reinet',
            'Grahamstown',
            'King William’s Town',
            'Mthatha',
            'Port Elizabeth',
            'Queenstown',
            'Uitenhage',
            'Zwelitsha',
          ],
          'Free State' => [
            'Bethlehem',
            'Bloemfontein',
            'Jagersfontein',
            'Kroonstad',
            'Odendaalsrus',
            'Parys',
            'Phuthaditjhaba',
            'Sasolburg',
            'Virginia',
            'Welkom',
          ],
          'Gauteng' => [
            'Benoni',
            'Boksburg',
            'Brakpan',
            'Carletonville',
            'Germiston',
            'Johannesburg',
            'Krugersdorp',
            'Pretoria',
            'Randburg',
            'Randfontein',
            'Roodepoort',
            'Soweto',
            'Springs',
            'Vanderbijlpark',
            'Vereeniging',
          ],
          'KwaZulu-Natal' => [
            'Durban',
            'Empangeni',
            'Ladysmith',
            'Newcastle',
            'Pietermaritzburg',
            'Pinetown',
            'Ulundi',
            'Umlazi',
          ],
          'Limpopo' => [
            'Giyani',
            'Lebowakgomo',
            'Musina',
            'Phalaborwa',
            'Polokwane',
            'Seshego',
            'Sibasa',
            'Thabazimbi',
          ],
          'Mpumalanga' => [
            'Emalahleni',
            'Nelspruit',
            'Secunda',
          ],
          'North West' => [
            'Klerksdorp',
            'Mahikeng',
            'Mmabatho',
            'Potchefstroom',
            'Rustenburg',
          ],
          'Northern Cape' => [
            'Kimberley',
            'Kuruman',
            'Port Nolloth',
          ],
          'Western Cape' => [
            'Bellville',
            'Cape Town',
            'Constantia',
            'George',
            'Hopefield',
            'Oudtshoorn',
            'Paarl',
            'Simon’s Town',
            'Stellenbosch',
            'Swellendam',
            'Worcester',
          ],
        ];

        foreach ($provinces as $name => $cities) {
          $province = Province::create([
            'name' => $name
          ]);
          foreach ($cities as $key => $city) {
            City::create([
              'province_id' => $province->id,
              'name' => $city
            ]);
          }
        }
    }
}
