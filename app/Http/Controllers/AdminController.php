<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\History;
use App\Visitor;
use Illuminate\Http\Request;
use App\Http\Requests;

class AdminController extends Controller
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
    public function index()
    {
        
        return view("admindetails");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
    *Admin History Page
    * 
    *
    */

    public function history(Request $data)
    {
        $date = $data["date"];
        if (!empty($date)) {
            $history = History::where(["date" => $date])->get();
        }else {
            $history = History::where(["date" => Carbon::today()])->get();
        }
        $user = auth()->user();
        $admin = History::where(["admin" => $user->fname])->get();
        return view("adminhistory", compact("history", "admin"));
    }

    /**
    *Edit Admin Page
    * 
    *
    */

    public function editadmin()
    {
        return view("editadmin");
    }

    /**
    *Add Admin Page
    * 
    *
    */

    public function addadmin()
    {
        return view("addadmin");
    }
}