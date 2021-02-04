<?php

    namespace App\Models\Front;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class ClientTrip extends Model
    {
        use HasFactory;

        protected $guarded = [];

        public function reservation()
        {
            return $this->belongsTo(Reservation::class, 'reservation_id', 'id');
        }

    }
