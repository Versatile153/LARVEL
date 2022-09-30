<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'detail',
        'pics',
        'writer',
        'user_id',

    ];
    public function user(){
        return $this->belongsTo(('App/Model/User'));
    }
}
