<?php

	class killswitch{
	
		public $info;
		private $domain;
		private $xml = 'http://domain.com/killswitch.xml';
		
		
		public function __construct($_domain=null){
			if($_domain != null):
				$this->domain = $_domain;
				$this->loadFile();
			endif;
		}
		
		
		public function loadFile(){
			try{
				$xml = simplexml_load_file($this->xml);
				$this->info = $xml->{$this->domain};
			} catch(Exception $e){
				print $e->getMessage();
			}
		}
	
	}

?>
