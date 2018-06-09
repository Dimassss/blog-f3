<?php
class UserController extends Controller{
	public function login(){
		$template = new Template;
		echo $template->render("login.htm");
	}
	
	public function registration(){
		$template = new Template;
		echo $template->render("registration.htm");
	}
	
	public function authenticate(){
		echo "authenticate";
	}
}