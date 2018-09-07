<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    protected $fillable = [
      'title',
      'description',
      'code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
