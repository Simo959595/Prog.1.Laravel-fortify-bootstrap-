<?php

namespace App\Models;

use App\Models\Land;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    protected $fillable = ['PrezzoAlMq', 'Mq', 'Edificabile'];
}
