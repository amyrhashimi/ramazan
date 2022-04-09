<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'share',
        'status',
        'date',
        'family',
        'address',
        'description'
    ];

    public function phones()
    {
        return $this->belongsToMany(Phones::class);
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class);
    }
}
