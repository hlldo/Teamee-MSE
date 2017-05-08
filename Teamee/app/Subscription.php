<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model {

    protected $table = 'subscriptions';


    //Validation Rules and Validator Function
    public static function validator($input){

        $rules = array(
            'email'    =>'required|email'
        );

        return Validator::make($input,$rules);
    }

}
