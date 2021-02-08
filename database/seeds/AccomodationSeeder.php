<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Accomodations')->insert([
           'username' => 'Victory Akom',
           'room_title' => 'Grand deluxe suite',
           'amenity_1' => 'Col Ac',
           'amenity_2' => 'Break Fast',
           'amenity_3' => 'Wifi Service',
           'amenity_4' => 'Parking Lot',
           'room_description' => 'For a very long time, spirits and wine have always used glass as the only storage option. The main reason is to maintain the purity of the taste since plastic tends to affect the purity of liquid.
           
           Today, people are shifting from the use of plastic bottles to glass bottles when it comes to water packaging too. The reason is a glass water bottle is easy to clean, 100 percent recyclable, and does not add residual tastes to water.
           
           When talking about recyclability, up to 80 percent of recovered glass is usually made into new glass products. That’s a great benefit to Mother Earth.
           
           Learn more about the benefits of glass bottles.
           The use of recycled glass is beneficial to the environment than new glass when in comes to saving energy. Recycling one glass helps to conserve enough energy to power a 100-watt bulb for about four hours.
           
           Also, for every 10 percent cullet used in the manufacturing process, the cost of energy drops by 2 to 3 percent.
           ',
           'photo_1' => '1.jpg',
           'photo_2' => '2.jpg',
           'photo_3' => '3.jpg',
           'photo_4' => '4.jpg',
           'room_category' => 'business class',
        ]);

        DB::table('Accomodations')->insert([
            'username' => 'Mel Robbins',
            'room_title' => 'Ixco chill beach view',
            'amenity_1' => 'Col Ac',
            'amenity_2' => 'Break Fast',
            'amenity_3' => 'Wifi Service',
            'amenity_4' => '',
            'room_description' => 'For a very long time, spirits and wine have always used glass as the only storage option. The main reason is to maintain the purity of the taste since plastic tends to affect the purity of liquid.
            
            Today, people are shifting from the use of plastic bottles to glass bottles when it comes to water packaging too. The reason is a glass water bottle is easy to clean, 100 percent recyclable, and does not add residual tastes to water.
            
            When talking about recyclability, up to 80 percent of recovered glass is usually made into new glass products. That’s a great benefit to Mother Earth.
            
            Learn more about the benefits of glass bottles.
            The use of recycled glass is beneficial to the environment than new glass when in comes to saving energy. Recycling one glass helps to conserve enough energy to power a 100-watt bulb for about four hours.
            
            Also, for every 10 percent cullet used in the manufacturing process, the cost of energy drops by 2 to 3 percent.
            ',
            'photo_1' => '1.jpg',
            'photo_2' => '2.jpg',
            'photo_3' => '3.jpg',
            'photo_4' => '4.jpg',
            'room_category' => 'executive',
         ]);

         DB::table('Accomodations')->insert([
            'username' => 'Casie Mora',
            'room_title' => 'verve edge appartment',
            'amenity_1' => 'Col Ac',
            'amenity_2' => '',
            'amenity_3' => 'Wifi Service',
            'amenity_4' => '',
            'room_description' => 'For a very long time, spirits and wine have always used glass as the only storage option. The main reason is to maintain the purity of the taste since plastic tends to affect the purity of liquid.
            
            Today, people are shifting from the use of plastic bottles to glass bottles when it comes to water packaging too. The reason is a glass water bottle is easy to clean, 100 percent recyclable, and does not add residual tastes to water.
            
            When talking about recyclability, up to 80 percent of recovered glass is usually made into new glass products. That’s a great benefit to Mother Earth.
            
            Learn more about the benefits of glass bottles.
            The use of recycled glass is beneficial to the environment than new glass when in comes to saving energy. Recycling one glass helps to conserve enough energy to power a 100-watt bulb for about four hours.
            
            Also, for every 10 percent cullet used in the manufacturing process, the cost of energy drops by 2 to 3 percent.
            ',
            'photo_1' => '1.jpg',
            'photo_2' => '2.jpg',
            'photo_3' => '3.jpg',
            'photo_4' => '4.jpg',
            'room_category' => 'regular',
         ]);

         DB::table('Accomodations')->insert([
            'username' => 'Carl Peters',
            'room_title' => 'state of the art room',
            'amenity_1' => 'Col Ac',
            'amenity_2' => 'Break Fast',
            'amenity_3' => 'Wifi Service',
            'amenity_4' => '',
            'room_description' => 'For a very long time, spirits and wine have always used glass as the only storage option. The main reason is to maintain the purity of the taste since plastic tends to affect the purity of liquid.
            
            Today, people are shifting from the use of plastic bottles to glass bottles when it comes to water packaging too. The reason is a glass water bottle is easy to clean, 100 percent recyclable, and does not add residual tastes to water.
            
            When talking about recyclability, up to 80 percent of recovered glass is usually made into new glass products. That’s a great benefit to Mother Earth.
            
            Learn more about the benefits of glass bottles.
            The use of recycled glass is beneficial to the environment than new glass when in comes to saving energy. Recycling one glass helps to conserve enough energy to power a 100-watt bulb for about four hours.
            
            Also, for every 10 percent cullet used in the manufacturing process, the cost of energy drops by 2 to 3 percent.
            ',
            'photo_1' => '1.jpg',
            'photo_2' => '2.jpg',
            'photo_3' => '3.jpg',
            'photo_4' => '4.jpg',
            'room_category' => 'executive',
         ]);


        

    }
}