<?php

    namespace App\Models\Front;

    use App\Models\Control\Client;
    use App\Models\Control\Trip;
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

        public function trip()
        {
            return $this->belongsTo(Trip::class, 'trip_id', 'id');
        }

        public function client()
        {
            return $this->belongsTo(Client::class, 'client_id', 'id');
        }

    }
