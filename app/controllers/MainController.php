<?php


class MainController extends Controller {

	function render() {
		
	  $message = new Messages($this->db);
	  $message->new_key = "New message";
	  $message->message = "Another message for you";
	  $message->save();
	  
	  $messages = new Messages($this->db);
	  $msg = $messages->all()[0];
	  
	  $this->f3->set('msg',$msg);
      echo \Template::instance()->render('template.htm');
	}
	
	

	
}
