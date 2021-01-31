<?php

    namespace App\Models\Control;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Tran extends Model
    {
        use HasFactory;

        public $timestamps = false;
        protected $guarded = [];
    }
