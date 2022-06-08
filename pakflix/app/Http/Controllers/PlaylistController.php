<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Dramas;
use App\Playlist;
use DB;
class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function Addtoplaylist_drama($id)
    {
        $drama=DB::table('dramas')->select('url','title','dramaid')->where('dramaid','=',$id)->get();
        $dramaarray= json_decode(json_encode($drama), true);

        $videoid=$dramaarray[0]['dramaid'];
        $url=$dramaarray[0]['url'];
        $title=$dramaarray[0]['title'];
        $userid=(Session::get('session'))->userid;

        $Check_video_in_playlist=Playlist::where(['userid'=>$userid,'videoid'=>$videoid,'title'=>$title,'url'=>$url])->first();
        if (isset($Check_video_in_playlist)) {
            
           return redirect('dramavideo/'.$videoid)->with('success','Already Present in playlist');
        } else {
            $playlist=array('userid'=>$userid,'videoid'=>$videoid,'url'=>$url,'title'=>$title);
            Playlist::create($playlist);
            return redirect('dramavideo/'.$videoid)->with('success','Added to playlist');
        }
        
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


      public function Addtoplaylist_movie($id)
    {
        $movie=DB::table('movies')->select('url','title','movieid')->where('movieid','=',$id)->get();
        $moviearray= json_decode(json_encode($movie), true);

        $videoid=$moviearray[0]['movieid'];
        $url=$moviearray[0]['url'];
        $title=$moviearray[0]['title'];
        $userid=(Session::get('session'))->userid;

        $Check_video_in_playlist=Playlist::where(['userid'=>$userid,'videoid'=>$videoid,'title'=>$title,'url'=>$url])->first();
        if (isset($Check_video_in_playlist)) {
            
           return redirect('movievideo/'.$videoid)->with('success','Already Present in playlist');
        } else {
            $playlist=array('userid'=>$userid,'videoid'=>$videoid,'url'=>$url,'title'=>$title);
            Playlist::create($playlist);
            return redirect('movievideo/'.$videoid)->with('success','Added to playlist');
        }
     
    }

     public function Addtoplaylist_novel($id)
    {
        $novel=DB::table('novels')->select('url','title','novelid')->where('novelid','=',$id)->get();
       $novelarray= json_decode(json_encode($novel), true);

        $videoid=$novelarray[0]['novelid'];
        $url=$novelarray[0]['url'];
        $title=$novelarray[0]['title'];
        $userid=(Session::get('session'))->userid;

        $Check_video_in_playlist=Playlist::where(['userid'=>$userid,'videoid'=>$videoid,'title'=>$title,'url'=>$url])->first();
        if (isset($Check_video_in_playlist)) {
            
           return redirect('novelvideo/'.$videoid)->with('success','Already Present in playlist');
        } else {
            $playlist=array('userid'=>$userid,'videoid'=>$videoid,'url'=>$url,'title'=>$title);
            Playlist::create($playlist);
            return redirect('novelvideo/'.$videoid)->with('success','Added to playlist');
        }
     
    }
    public function Display_playlist(Request $request)
    {
        $user=Session::get('session');
        $playlist=DB::table('playlist')->select('userid','videoid','url','title')->where('userid','=',$user->userid)->get();
        $playlistarray= json_decode(json_encode($playlist), true);
        $count=count($playlistarray);
        // $title=$historyarray[0]['title'];
        // var_dump($title);
        // die();
        return view('playlist',compact('playlistarray','count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
