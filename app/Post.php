<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $fillable=["title","body","highlighted"];
  
  public function user(){
    return $this->belongsTo('User');
  }

}
