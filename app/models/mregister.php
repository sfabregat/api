<?php

	namespace X\App\Models;

	use \X\Sys\Model;

	class mHome extends Model{
		public function __construct(){
			parent::__construct();
			
		}
		public function reg(){
			
	}

	function valemail(){
		$this->query("SELECT * FROM users WHERE email=")
	}