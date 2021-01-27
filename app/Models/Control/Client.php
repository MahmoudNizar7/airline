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
    }
