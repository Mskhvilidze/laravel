<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    //Table name
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //timesteps
    public $timesteps = true;

    public function user(){
        return $this->belongsTo(User::class);
    }
}