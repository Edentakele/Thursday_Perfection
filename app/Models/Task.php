<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function User(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
    protected $fillable = ['title','user_id'];
}
