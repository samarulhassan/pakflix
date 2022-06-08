<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;
use Illuminate\Http\Request;
use App\Users;
use App\Accounts;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accounts_details(Request $request)

    {

      $data['accountno']=$request->input('acc');
      $data['userid']=$request->input('id');
      // var_dump($data);
      // die();
      $inserted =Accounts::create($data);
      // var_dump($inserted);
      // die();
      if(isset($inserted->userid)>0){

            return response()->json(['status'=>'true','code'=>'200','message'=>'data inserted']);
    //response()->json(array('status'=>'true','code'=>'200','message'=>'data inserted'));
        }else{

             return response()->json(['status'=>'false','code'=>'400','message'=>'data not inserted']);
        }   




    }


        public function userhomenew(Request $request)

    {

         // $dramas=DB::table('dramas')->select('url')->orderBy('dramaid', 'DESC')->limit(1)->get();

         $dramas=DB::table('dramas')->select('url','dramaid')->orderBy('dramaid', 'DESC')->get();

         

        // return view('userhome');

        return view('userhome',compact('dramas'));


        // return view('userhome');

    }


    public function store(Request $request)
    {
         $data['name']=$request->input('name');
         $data['email']=$request->input('email');
         $data['phoneno']=$request->input('phoneno');
         $data['password']=$request->input('password');
         $data['usertype']=$request->input('type');
       
        $inserted =Users::create($data);
        $lastInsertedId=$inserted->id;
        
        if(isset($inserted->id)>0){

            return response()->json(['status'=>'true','code'=>'200','message'=>'data inserted', 'id'=>$lastInsertedId,'type'=>$inserted->usertype]);
    //response()->json(array('status'=>'true','code'=>'200','message'=>'data inserted'));
        }else{

             return response()->json(array('status'=>'false','code'=>'400','message'=>'data not inserted'));
        }   
    }

    
    public function login(Request $request)
    
       { 
         $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        
        $name=$request->input('email');
        $password=$request->input('password');
        $user = Users::where(['email'=>$name,'password'=>$password])->first();

        

         Session::put('session',$user);
        
        if(isset($user->userid)>0){
            return redirect('userhomenew');
        }
        else
        {
            return redirect('/')->with('error', 'Oppes! You have entered invalid credentials');
        }
        

       
   }
   




 public function logout(Request $request)
    {
        // $request->session()->forget('key');
        // Session::get('session');
        Session::flush(); 
        return redirect('/');
    }





}
