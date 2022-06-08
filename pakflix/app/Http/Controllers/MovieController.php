<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Movies;
use App\History;
use DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_movies_moviepage(Request $request)
    {

         $movies=DB::table('movies')->select('url','title','movieid')->get();
        // var_dump($movies);
        // die();
        return view('moviespage',compact('movies'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function display_movie($movieid)

    {
        // var_dump($request);
        // die();
        $dataid['movieid']=$movieid;
        $movie=DB::table('movies')->select('url','title','movieid')->where($dataid)->get();
        // var_dump($novel);
        // die();

       $videoarray= json_decode(json_encode($movie), true);
        $id=$videoarray[0]['movieid'];
        $url=$videoarray[0]['url'];
        $title=$videoarray[0]['title'];

        $user=Session::get('session');
        $historydata=array('userid'=>$user->userid,'videoid'=>$id,'url'=>$url,'title'=>$title);
        History::create($historydata);
        // die("samar");


    $sug=DB::table('movies')->select('url','title','movieid')->where('movieid','>',$movieid)->limit(6)->get();
        $sugarray= json_decode(json_encode($sug), true);
        $count=count($sugarray);

        // var_dump($title);


        return view('movievideo',compact('url','title','id','sugarray','count'));
    }

   
    public function search_movie(Request $request)
    { 
    
        $search_text=$_GET['query_movie'];
        
        $search3=DB:: table('movies')->select('title','url','movieid')->where('title','LIKE' ,"%$search_text%")->get();
        $search_result= json_decode(json_encode($search3), true);
        $count=count($search3);
 
        
        
        return view('searchmovie', compact('search_result','count'));
    }
}
