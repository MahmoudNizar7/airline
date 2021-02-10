<?php

    namespace App\Models\Control;

    use App\Models\Front\Reservation;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Trip extends Model
    {
        use HasFactory;

        protected $guarded = [];

        public function reservations()
        {
            return $this->hasMany(Reservation::class, 'trip_id', 'id');
        }
    }
