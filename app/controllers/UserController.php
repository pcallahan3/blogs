<?php


class UserController extends Controller {

	function render() {
	
      echo \Template::instance()->render('login.htm');
	}

	
}