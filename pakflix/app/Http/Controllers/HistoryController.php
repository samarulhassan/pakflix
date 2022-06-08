<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\History;
use DB;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function display_history(Request $request)

    {
        $user=Session::get('session');
        $history=DB::table('history')->select('userid','videoid','url','title','created_at')->where('userid','=',$user->userid)->get();
        $historyarray= json_decode(json_encode($history), true);
        $count=count($historyarray);
        // $title=$historyarray[0]['title'];
        // var_dump($title);
        // die();
        return view('history',compact('historyarray','count'));
    }

   
}
