<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'visitors_id', 
        'date', 
        'time_in', 
        'time_out', 
        'whom_to_see', 
        'purpose_of_visit', 
        'admin',
    ];
   
    public function visitor() {
    	return $this->belongsTo("App\Visitor");
    }
}