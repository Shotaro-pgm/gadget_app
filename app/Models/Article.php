<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';

    protected $fillable = ['id', 'title', 'body', 'image_path'];

    public static $rules = array(
      'title' => 'required',
      'body' => 'required',
    );
}
