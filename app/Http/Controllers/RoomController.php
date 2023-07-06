<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\room;

class RoomController extends Controller
{
    public function index(){
        $room = room::find(2);
        dd($room);
    }
}
