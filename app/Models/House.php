<?php

namespace App\Models;

use App\Models\User;
use App\Models\House;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class House extends Model
{
    protected $fillable = ['Autore', 'Indirizzo', 'MQ', 'TipoImmobile', 'Foto'];

    public function user(): BelongsTo{
        return $this->BelongsTo(User::class);
    }


}
