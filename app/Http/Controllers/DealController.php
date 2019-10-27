<?php

namespace App\Http\Controllers;

use App\Deal;
use Illuminate\Http\Request;
use App\User;

class DealController extends Controller
{
    public function makeDeal(Request $request)
    {
         $data = [];
         $data['name'] = $request->post('name');
         $data['sum'] = $request->post('sum');
         $data['days'] = $request->post('days');
         $data['customer_id'] = $request->post('customer_id');
         $data['worker_id'] = $request->post('worker_id');
         $data['creator_id'] = $request->post('curr_user');


         $deal = new Deal();
         $deal->name = $data['name'];
         $deal->sum = $data['sum'];
         $deal->days = $data['days'];
         $deal->customer_id = $data['customer_id'];
         $deal->worker_id = $data['worker_id'];
         $deal->deposit = 0;
         $deal->creator_id = $data['creator_id'];
         $deal->file_path = '';

         $deal->save();

         if($deal->creator_id == $deal->customer_id)
         {

         } else {

         }


    }


    public function getUsersByEmail(Request $request)
    {
        $email = $request->post('email');
        $users = User::where('email' , 'like' , $email)->take(25)->get();



        return $users;
    }

}
