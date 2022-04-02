<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';

    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
      'title' => 'required',
      'body' => 'required',
    );
}
