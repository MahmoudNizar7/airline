<?php

    namespace App\Models\Control;


    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Laratrust\Traits\LaratrustUserTrait;

    class Client extends Authenticatable
    {
        use LaratrustUserTrait, HasFactory;


        protected $table = 'clients';

        protected $fillable = ['name', 'email', 'company', 'address', 'phone', 'password', 'image'];

        protected $hidden = ['password', 'remember_token'];

        public function balance()
        {
            return $this->hasOne(Balance::class, 'client_id', 'id');
        }

        public function movements()
        {
            return $this->hasMany(Movement::class, 'client_id', 'id');
        }

    }
