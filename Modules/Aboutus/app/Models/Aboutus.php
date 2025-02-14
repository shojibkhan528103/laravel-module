<?php

namespace Modules\Aboutus\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Aboutus\Database\Factories\AboutusFactory;

class aboutus extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): AboutusFactory
    // {
    //     // return AboutusFactory::new();
    // }
}
