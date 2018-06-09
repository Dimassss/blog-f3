<?php

class User extends DB\SQL\Mapper{
	public function __construct(DB\SQL $db){
		parent::__construct($db, 'users');
	}

	public function create(){
		$this->copyFrom('POST');
		$this->save();
	}

	public function edit($username){
		$this->load(array('username=?',$username));
		$this->copyFrom('POST');
		$this->update();
	}

	public function remove($username){
		$this->load(array('username=?',$username));
		$this->erase();
	}

	public function getById($id){
		$this->load(array('id=?',$id));
		return $this->query;
	}

	public function getByUsername($username){
		$this->load(array('username=?',$username));
		return $this->query;
	}
}
