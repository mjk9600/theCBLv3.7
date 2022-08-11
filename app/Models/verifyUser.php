<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verifyUser extends Model
{
    use HasFactory;
    public $table = "verify_users";
    protected $fillable = [
        'token',
        'user_id',
    ];

    public function user()
    {
        return $this->belongTo(User::class);
    }
}
