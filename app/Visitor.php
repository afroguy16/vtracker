<?php

namespace App;

use App\History;

use Carbon\Carbon;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 
        'lname', 
        'sex', 
        'email', 
        'mobile', 
        'address', 
        'jobtitle', 
    ];

    // public function history() {
    // 	$this->hasMany("App\Histories");
    // }

    public static function loggedIn($id) {
    	$visitor = History::where(["visitors_id" => $id])->where(["date" => Carbon::today()])->where(["time_out" => null])->first();
    	// print_r($visitor);
    	// print_r(Carbon::today());
    	// $visitor = $this->find($id);
    
    	if ($visitor !== null) {
    		return true;
    	}else {
    		return false;
    	}
    }
}