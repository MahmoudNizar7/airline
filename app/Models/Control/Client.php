<?php

    namespace App\Models\Control;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Laratrust\Traits\LaratrustUserTrait;

    class Client extends Model
    {
        use LaratrustUserTrait, HasFactory;

        protected $guarded = [];
        protected $hidden = ['password'];

        public function balance()
        {
            return $this->hasOne(Balance::class, 'client_id', 'id');
        }

        public function movements()
        {
            return $this->hasMany(Movement::class, 'client_id', 'id');
        }

    }
