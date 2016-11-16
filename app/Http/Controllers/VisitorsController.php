<?php

namespace App\Http\Controllers;

use App\Visitor;
use App\History;
use Validator;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

use App\Http\Requests;

class VisitorsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $visitor = Visitor::where(["id" => $id])->first();
        return view("userdetails")->with("visitor", $visitor);
    }

    /**
     * Search Visitor's DB to see if user exist.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchvisitors(Request $data)
    {
        $visitor = Visitor::where("email", "=", $data["username"])->orWhere("mobile", "=", $data["username"])->first();
        
        if ($visitor) {
            if ($visitor::loggedIn($visitor->id)) {
                return redirect("/logout/".$visitor->id);
            }else {
                return redirect("/visitlogin/".$visitor->id);
            }
        }else {
            return redirect("/newvisitor");
        }
        
    }

    /**
     * Browse Visitors.
     *
     * @return \Illuminate\Http\Response
     */
    public function browseusers(){
        $users = Visitor::all();
        return view("browseusers", compact("users"));
    }


    /**
     * Log in visistor.
     *
     * @return \Illuminate\Http\Response
     */
    public function showVisitor($id){
        $visitor = Visitor::find($id);
        return view("visitorslogin", compact('visitor'));
    }


    /**
     * log user in and create history.
     *
     * @return \Illuminate\Http\Response
     */
    public function createhistory(Request $data)
    {
        $rule = [
            'whom_to_see' => 'required|max:255',
            'purpose_of_visit' => 'required|max:255',
        ];

        $this->validate($data, $rule);

        History::create([
            'visitors_id' => $data['visitor_id'],
            'date' => Carbon::now(),
            'time_in' => Carbon::now(),
            'time_out' => null,
            'whom_to_see' => $data['whom_to_see'],
            'purpose_of_visit' => $data['purpose_of_visit'],
            'admin' => auth()->user()->fname
        ]);
        // echo "Visitor's been logged in";
        return redirect('/')->with("message", ["New visitor's been signed in"]);
    }

    /**
     * Log visitor out.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logoutvisitorpage($id)
    {
        // echo $id;
        $history = History::where(["visitors_id" => $id])->first();
        $visitor = Visitor::where(["id" => $id])->first();
        return view("logoutvisitor", compact("visitor"), compact("history"));
    }

    public function logoutvisitor($id)
    {
        $history = History::where(["visitors_id" => $id])->where(["time_out" => null])->where(["date" => Carbon::today()])->first();
        $history->time_out = Carbon::now();
        $history->save();
        return redirect("home")->with("message", ["Visitor's been signed out"]);
    }

    /**
     * Show visitor's history.
     *
     * @return \Illuminate\Http\Response
     */
    public function visitorhistory($id){
        $visitor = Visitor::find(["id", $id])->first();
        $history = History::where(["visitors_id" => $id])->get();
        return view("userhistory", compact("visitor", "history"));
    }

    /**
     * Display Edit User Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function edituser()
    {
        return view("edituser");
    }

    /**
     * Create a new visitor instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(request $data)
    {

        $rule = [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'sex' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'mobile' => 'required',
            'address' => 'required|max:255',
            'jobtitle' => 'required|max:255',
        ];
        $this->validate($data, $rule);

        Visitor::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'sex' => $data['sex'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'address' => $data['address'],
            'jobtitle' => $data['jobtitle'],
        ]);

        return redirect("/");
    }
}
