<?php
class Controller{

	protected $f3;
	protected $db;

	public function beforeroute(){
		if($this->f3->get('SESSION.username') === null){
			$this->f3->redirect('GET /user/@id/messages', '/login');
			$this->f3->redirect('GET /user/@id/messages/*', '/login');
		}
	}

	public function afterroute(){}

	public function __construct(){
		$f3 = Base::instance();
		$this->f3 = $f3;

		$db = new DB\SQL(
				$f3->get('devdb'),
				$f3->get('devdbusername'),
				$f3->get('devdbpassword'),
				array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
		);

		$this->db = $db;

	}
}
