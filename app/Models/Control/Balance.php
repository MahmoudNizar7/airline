<?php

    namespace App\Models\Control;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Laratrust\Traits\LaratrustUserTrait;

    class Balance extends Model
    {
        use HasFactory, LaratrustUserTrait;

        protected $guarded = [];

        public function client()
        {
            return $this->belongsTo(Client::class, 'client_id', 'id');
        }

        public function movements()
        {
            return $this->hasMany(Movement::class, 'balance_id', 'id');
        }


    }
