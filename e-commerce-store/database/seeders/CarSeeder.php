<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'brand' => 'Toyota',
            'model' => 'RAV4',
            'bodyType' => 'SUV',
            'manufactureYear' => '2022-01-01',
            'cubicCapacity' => 2500,
            'fuelType' => 'Petrol',
            'power' => 218,
            'imageUrl' => 'https://www.automobili.ba/wp-content/uploads/2020/01/toyota-rav4.jpg',
            'price' => 37499
        ]);

        DB::table('cars')->insert([
            'brand' => 'Renault',
            'model' => 'Talisman',
            'bodyType' => 'Sedan',
            'manufactureYear' => '2020-01-01',
            'cubicCapacity' => 2000,
            'fuelType' => 'Diesel',
            'power' => 160,
            'imageUrl' => 'https://i.ytimg.com/vi/xOSy7d4Zr-w/maxresdefault.jpg',
            'price' => 22399
        ]);

        DB::table('cars')->insert([
            'brand' => 'Honda',
            'model' => 'Civic Type R',
            'bodyType' => 'Hatchback',
            'manufactureYear' => '2021-01-01',
            'cubicCapacity' => 2000,
            'fuelType' => 'Petrol',
            'power' => 306,
            'imageUrl' => 'https://autorepublika.com/wp-content/uploads/2017/04/1-144.jpg',
            'price' => 28299
        ]);

        DB::table('cars')->insert([
            'brand' => 'Peugeot',
            'model' => '508',
            'bodyType' => 'Sedan',
            'manufactureYear' => '2018-01-01',
            'cubicCapacity' => 1500,
            'fuelType' => 'Diesel',
            'power' => 130,
            'imageUrl' => 'https://www.hdcarwallpapers.com/download/508_sw_peugeot_sport_engineered_2021_4k-1280x720.jpg',
            'price' => 18999
        ]);

        DB::table('cars')->insert([
            'brand' => 'Audi',
            'model' => 'A5',
            'bodyType' => 'Coupe',
            'manufactureYear' => '2019-01-01',
            'cubicCapacity' => 5000,
            'fuelType' => 'Diesel',
            'power' => 286,
            'imageUrl' => 'https://www.hdcarwallpapers.com/download/audi_a5_sportback_45_tfsi_s_line_quattro_5k-1280x720.jpg',
            'price' => 31699
        ]);

        DB::table('cars')->insert([
            'brand' => 'Kia',
            'model' => 'Sportage',
            'bodyType' => 'SUV',
            'manufactureYear' => '2018-01-01',
            'cubicCapacity' => 1600,
            'fuelType' => 'Diesel',
            'power' => 136,
            'imageUrl' => 'https://autorepublika.com/wp-content/uploads/2018/11/maxresdefault-1.jpg',
            'price' => 18499
        ]);

        DB::table('cars')->insert([
            'brand' => 'Citroen',
            'model' => 'C5 Aircross',
            'bodyType' => 'SUV',
            'manufactureYear' => '2020-01-01',
            'cubicCapacity' => 1200,
            'fuelType' => 'Petrol',
            'power' => 131,
            'imageUrl' => 'https://www.motor.es/fotos-noticias/2021/10/citroen-c5-aircross-electrico-produccion-2025-202182248-1635359983_3.jpg',
            'price' => 19999
        ]);

        DB::table('cars')->insert([
            'brand' => 'Skoda',
            'model' => 'Octavia',
            'bodyType' => 'Sedan',
            'manufactureYear' => '2017-01-01',
            'cubicCapacity' => 2000,
            'fuelType' => 'Diesel',
            'power' => 150,
            'imageUrl' => 'https://cdn.motor1.com/images/mgl/1xB1K/s3/2021-skoda-octavia-rs.jpg',
            'price' => 16499
        ]);

        DB::table('cars')->insert([
            'brand' => 'Suzuki',
            'model' => 'Grand Vitara',
            'bodyType' => 'SUV',
            'manufactureYear' => '2014-01-01',
            'cubicCapacity' => 1600,
            'fuelType' => 'Petrol',
            'power' => 106,
            'imageUrl' => 'https://i.ytimg.com/vi/Cu6mi_SPenI/maxresdefault.jpg',
            'price' => 12499
        ]);

        DB::table('cars')->insert([
            'brand' => 'Mazda',
            'model' => '6',
            'bodyType' => 'Sedan',
            'manufactureYear' => '2019-01-01',
            'cubicCapacity' => 2000,
            'fuelType' => 'Petrol',
            'power' => 165,
            'imageUrl' => 'https://s1.1zoom.me/big0/653/Mazda_2015_6_Sedan_487595.jpg',
            'price' => 18999
        ]);

        DB::table('cars')->insert([
            'brand' => 'BMW',
            'model' => 'M5',
            'bodyType' => 'Sedan',
            'manufactureYear' => '2017-01-01',
            'cubicCapacity' => 4400,
            'fuelType' => 'Petrol',
            'power' => 600,
            'imageUrl' => 'https://a-static.besthdwallpaper.com/2018-bmw-m5-04-pozadina-1280x720-57463_45.jpg',
            'price' => 28499
        ]);

        DB::table('cars')->insert([
            'brand' => 'Volvo',
            'model' => 'XC90',
            'bodyType' => 'SUV',
            'manufactureYear' => '2019-01-01',
            'cubicCapacity' => 2000,
            'fuelType' => 'Diesel',
            'power' => 235,
            'imageUrl' => 'https://images.wallpapersden.com/image/download/volvo-xc90-inscription_Zm1uaGWUmZqaraWkpJRmZ21lrWxnZQ.jpg',
            'price' => 28999
        ]);

        DB::table('cars')->insert([
            'brand' => 'Opel',
            'model' => 'Insignia',
            'bodyType' => 'Sedan',
            'manufactureYear' => '2018-01-01',
            'cubicCapacity' => 2000,
            'fuelType' => 'Diesel',
            'power' => 170,
            'imageUrl' => 'https://autorepublika.com/wp-content/uploads/2021/04/Opel-Insignia-AR.jpg',
            'price' => 14499
        ]);

        DB::table('cars')->insert([
            'brand' => 'Ford',
            'model' => 'Fusion',
            'bodyType' => 'Sedan',
            'manufactureYear' => '2020-01-01',
            'cubicCapacity' => 2700,
            'fuelType' => 'Petrol',
            'power' => 325,
            'imageUrl' => 'https://res.feednews.com/assets/v2/89ea802f858709d8170f48f52a9e655a?width=1280&height=720&quality=hq',
            'price' => 24999
        ]);

        DB::table('cars')->insert([
            'brand' => 'Hyundai',
            'model' => 'Tucson',
            'bodyType' => 'SUV',
            'manufactureYear' => '2021-01-01',
            'cubicCapacity' => 1600,
            'fuelType' => 'Petrol',
            'power' => 227,
            'imageUrl' => 'https://cdn.motor1.com/images/mgl/QMX30/s3/2021-hyundai-tucson.jpg',
            'price' => 28499
        ]);
    }
}
