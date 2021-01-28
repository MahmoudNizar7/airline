<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Trips extends Component
{
    public $from;
    public $to;
    public $travel_no;
    public $air_line;
    public $price;
    public $baby_price;
    public $seats;
    public $date;
    public $image;
    public $image_name;

    public function render()
    {
        return view('livewire.trips');
    }



}
