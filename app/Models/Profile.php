<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = "profile";

    protected $fillable = ['id', 'user_id', 'name', 'body'];

    public static $rules = array(
      'name' => 'required',
      'body' => 'required',
    );
}
