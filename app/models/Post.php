<?php

class Post extends Eloquent {

	public $active;
	public function comments(){
		return $this->hasMany('Comment');
	}

	public function category(){
		return $this->belongsTo('Category');
	}

	public function excerpt(){
		return substr($this->content, 0, 140) . '...';
	}


}
