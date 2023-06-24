<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;




class Contacts extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone_number', 'email', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}