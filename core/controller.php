<?php

class controller{

protected $db;
	
public function __construct() {
		try {
		
     
		} catch (PDOException $e) {
			
		}
}

	
	
	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		include 'views/template.php';
	}
        
        public function loadTemplate_1($viewName, $viewData = array()) {
		include 'views/template_1.php';
	}
        
        public function loadTemplate_meta($viewName, $viewData = array()) {
		include 'views/template_meta.php';
	}

	public function loadViewInTemplate($viewName, $viewData) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}
        public function loadViewInTemplate_meta($viewName, $viewData) {
		extract($viewData);
		include 'views/template_meta.php';
	}
}
