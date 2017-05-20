<?php
/*
 * We will create a Base controller named “Controller” to initialize our database
 * connection and F3‘s instance of “Base” Class. In directory “app/controllers”
 * create a new file named “Controller.php”. and fill it with below class ::
 */

class Controller  {
	
	protected $f3;
	protected $db;
	
	function __construct(){
		
		$f3=Base::instance();
		$this->f3=$f3;
		
		$db=new DB\SQL(
			$f3->get('devdb'),
			$f3->get('devdbusername'),
			$f3->get('devdbpassword'),
			array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
		);
		
		$this->db=$db;
	}
	
	//event handler method
	function beforeroute() {
		//echo 'Before routing - ';
	}

	//event handler method
	function afterroute() {
		echo Template::instance()->render('layout.htm');
	}

}