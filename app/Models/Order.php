<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'hamburger_id',
        'address',
        'user_id',

    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hamburger()
    {
        return $this->hasOne(Hamburger::class, "id", "hamburger_id");
    }




}
