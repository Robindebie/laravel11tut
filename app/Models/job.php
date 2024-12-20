<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class job extends Model {
    use HasFactory;
    protected $table = 'job_Listings';

    protected $guarded = []; 

    protected $fillable = ['employer_id',   'title', 'salary'];
 

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

}
