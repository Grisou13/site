<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	protected $fillable=["title","teaser","body","highlighted","user_id","slug"];
  
  public function user(){
    return $this->belongsTo('User');
  }

  public function generateSlug(){
    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $this->title);
    $clean = preg_replace("/[^a-zA-Z0-9\/_| -]/", '', $clean);
    $clean = strtolower(trim($clean, '-'));
    $clean = preg_replace("/[\/_| -]+/", '-', $clean);
    return $clean;
  }
}
