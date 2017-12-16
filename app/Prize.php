<?php

namespace App;

use App\Concursant;
use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'taken',
    ];

    public function concursant()
    {
        return $this->belongsTo(Concursant::class);
    }
}
