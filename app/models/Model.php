<?php

class Model extends Eloquent {
	
	protected $guarded = array('id');
	protected $validationRules;
	
	public $validationErrors;
	
	
	
	
	public  function validate($input){
		$validator = Validator::make($input, $this->validationRules);		
		
		if($validator->fails()){
			$this->validationErrors = $validator->errors();
			return false;
		}
		return true;
	}
	
	
	
	
	}
