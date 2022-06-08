<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Dramas;
use App\History;
use DB;

class DramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function userhomenew(Request $request)

    {

         // $dramas=DB::table('dramas')->select('url')->orderBy('dramaid', 'DESC')->limit(1)->get();

         // $dramas=DB::table('dramas')->select('url','dramaid')->orderBy('dramaid', 'DESC')->get();
        // $dramas=DB::table('dramas')->select('url','dramaid')->orderBy('dramaid', 'DESC')->get();
         $dramas=DB::table('dramas')->select('url','title','dramaid')->orderBy('views','DESC')->get();
         $novels=DB::table('novels')->select('url','title','novelid')->orderBy('views','DESC')->get();
         // var_dump($novels);
         // die();
         $movies=DB::table('movies')->select('url','title','movieid')->orderBy('views','DESC')->get();

        // return view('userhome');

        return view('userhome',compact('dramas','novels','movies'));


        // return view('userhome');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function display_drama($dramaid)
    {
        $dataid['dramaid']=$dramaid;
        $drama=DB::table('dramas')->select('url','title','dramaid')->where($dataid)->get();

      
       $videoarray= json_decode(json_encode($drama), true);
        $id=$videoarray[0]['dramaid'];
        $url=$videoarray[0]['url'];
        $title=$videoarray[0]['title'];

        //FOR HISTORY

        $user=Session::get('session');
        $historydata=array('userid'=>$user->userid,'videoid'=>$id,'url'=>$url,'title'=>$title);
        History::create($historydata);
        // die("samar");

        //FOR SUGGESTION

        $sug=DB::table('dramas')->select('url','title','dramaid')->where('dramaid','>',$dataid)->limit(6)->get();
// var_dump($sug); 
// die();
        $sugarray= json_decode(json_encode($sug), true);

        $count=count($sugarray);


        return view('dramavideo',compact('url','title','id','sugarray','count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function get_dramas_dramapage(Request $request)
    {
       $ispr=DB::table('dramas')->select('url','title','dramaid')->where('category','novel based')->get();
       // var_dump($ispr);
       // die();
       $horror=DB::table('dramas')->select('url','title','dramaid')->where('category','horror')->get();
       $anthology=DB::table('dramas')->select('url','title','dramaid')->where('category','fiction')->get();
    return view('dramapage',compact('ispr','horror','anthology'));
    }

    

    public function search_drama(Request $request)
    { 
    
        $search_text=$_GET['query_drama'];
        
        $search3=DB:: table('dramas')->select('title','url','dramaid')->where('title','LIKE' ,"%$search_text%")->get();
        $search_result= json_decode(json_encode($search3), true);
        $count=count($search3);
        // var_dump($search3);
        // die();
        
        
        return view('searchdrama', compact('search_result','count'));
    }
}
