<?php
/**
 * Created by PhpStorm.
 * User: pathao
 * Date: 4/1/18
 * Time: 2:05 PM
 */

namespace App\Http\Controllers;


use Illuminate\Redis\Connections\PredisConnection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{

    public function test(){

        //Cookie::queue(Cookie::make("test","test-value"));

        return Auth::user();

    }

    public function redisTest(){


            //Redis::set('name', 'Taylor');
        if(Redis::get("name")==null || Redis::get("name")==""){
            Redis::set('name', 'Taylor');
        }

        return Redis::get("name");

    }


}