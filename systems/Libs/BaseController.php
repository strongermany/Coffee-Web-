<?php
    
    class BaseController {
        
        protected $load ;

        public function __construct() {
            $this->load = new Load();
        }
    }

?>