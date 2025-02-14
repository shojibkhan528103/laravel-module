<?php

namespace Modules\ContactUs\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\ContactUs\Database\Factories\ContactusFactory;

class contactus extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): ContactusFactory
    // {
    //     // return ContactusFactory::new();
    // }
}
