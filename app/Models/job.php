<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class job extends Model {
    protected $table = 'job_Listings';

    protected $fillable = ['title', 'salary'];
 
}
