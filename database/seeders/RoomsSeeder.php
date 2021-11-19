<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $room = new Room();
       $room->id ='101';
       $room->name ='phong 01';
       $room->category_id ='1';
       $room->price ='2502101';
       $room-> room_status='con trong';
       $room->description='tien nghi day du';
       $room->time_in='2021-11-18 14:02:00';
       $room->time_out='2021-11-19 16:00:00';    
       $room->save();     

      
    }
}
