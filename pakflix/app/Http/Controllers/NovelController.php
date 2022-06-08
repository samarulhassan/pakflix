<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\History;
use App\Novels;
use DB;
class NovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
     
    public function display_novel($novelid)

    {
        // var_dump($request);
        // die();
        $dataid['novelid']=$novelid;
        $novel=DB::table('novels')->select('url','title','novelid')->where($dataid)->get();
        // var_dump($novel);
        // die();

        $videoarray= json_decode(json_encode($novel), true);

        $id=$videoarray[0]['novelid'];
        $url=$videoarray[0]['url'];
        $title=$videoarray[0]['title'];

        $user=Session::get('session');
        $historydata=array('userid'=>$user->userid,'videoid'=>$id,'url'=>$url,'title'=>$title);
        History::create($historydata);
        // die("samar");

    $sug=DB::table('novels')->select('url','title','novelid')->where('novelid','>',$novelid)->limit(6)->get();
        $sugarray= json_decode(json_encode($sug), true);
        $count=count($sugarray);

        // die();

        return view('novelvideo',compact('url','title','id','sugarray','count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function get_novels_novelpage(Request $request)
    {
        $novels=DB::table('novels')->select('url','title','novelid')->get();
        // var_dump($novels->url);
        // die();
        return view('audionovelpage',compact('novels'));
    }

   
    public function search_novel(Request $request)
    { 
    
        $search_text=$_GET['query_novel'];
        
        $search3=DB:: table('novels')->select('title','url','novelid')->where('title','LIKE' ,"%$search_text%")->get();
        $search_result= json_decode(json_encode($search3), true);
        $count=count($search3);
 
        
        
        return view('searchnovel', compact('search_result','count'));
    }
}
