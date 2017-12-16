<?php

namespace App;

use App\Prize;
use Illuminate\Database\Eloquent\Model;

class Concursant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'number', 'prize_id', 'checked'
    ];

    public function prize()
    {
        return $this->belongsTo(Prize::class);
    }
}
