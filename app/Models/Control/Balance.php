<?php

    namespace App\Models\Control;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Laratrust\Traits\LaratrustUserTrait;

    class Balance extends Model
    {
        use HasFactory, LaratrustUserTrait;

        protected $guarded = [];

        public function client(): BelongsTo
        {
            return $this->belongsTo(Client::class, 'client_id', 'id');
        }

        public function movements(): HasMany
        {
            return $this->hasMany(Movement::class, 'balance_id', 'id');
        }

    }
