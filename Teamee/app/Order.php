<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
  /**
   * @var string
   */
  protected $table = 'orders';


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'user_id',
      'cart',
      'name',
      'address',
      'total',
      'phone',
      'payment_id'
  ];
  
  /**
   * An Order can have many products
   *
   * @return $this
   */
    public function user() {
      return $this->belongsTo('App\User');
    }
}
