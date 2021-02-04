<?php

    namespace App\Models\Front;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Reservation extends Model
    {
        use HasFactory;

        protected $guarded = [];


        public function clientTrips()
        {
            return $this->hasMany(ClientTrip::class, 'reservation_id', 'id');
        }
    }
