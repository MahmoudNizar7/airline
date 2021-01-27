<?php

    namespace App\Models\Control;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Movement extends Model
    {
        use HasFactory;

        protected $guarded = [];

        public function clients()
        {
            return $this->belongsTo(Client::class, 'client_id', 'id');
        }

    }
