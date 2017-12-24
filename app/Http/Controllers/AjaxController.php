<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AjaxController extends Controller
{
    public function index()
    {
      return view('Ajax');
    }
    
    public function ajax1(Request $r)
    {
      $user = new User ;
      if($r->ajax()){

        $user['nom'] =$r->name;
        $user['prenom'] =$r->prenom;
        $user['image'] =$r->image;
        $user['password'] =$r->password;
        if($user->save()){
          return response(['msg'=>'well its saved !']);
        }

}
    }


    public function readbyAjax(){

      $user =User::orderBy('id','desc')->paginate(6);
      return view('read',compact('user'));
    }


        public function deletebyAjax(Request $r){
          if($r->ajax()){
            //return response($r->id);
            User::destroy($r->id);
            return response([ 'id'=>$r->id]);
          }

        }



        public function updatebyAjax(Request $r){
          if($r->ajax()){
            return response(User::find($r->id));

          }

        }

        public function update(Request $r){

            //return response($user);
          if($r->ajax()){
            $product = User::find($r->id);
            $product['name'] = $r['name'];
            $product['password'] = $r['password'];
            $product->save();
            return response('ok !');

        }

      }


}
