<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Earning extends Model
{

    use HasFactory;

    protected $fillable = ['amount', 'source', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
