<?php

class Message extends DB\SQL\Mapper{
	public function __construct(DB\SQL $db){
		parent::__construct($db, 'messages');
	}

	public function create(){
		$this->copyfrom('GET');
		$this->save();
	}

	public function edit($id){
		$this->load(array('id=?', $id));
    $this->copyfrom('GET');
    $this->update();
	}

	public function remove($id){
		$this->load(array('id=?', $id));
    $this->erase();
	}

	public function getByUser($username){
    $this->load(array('owner=?', $username));
    return $this->query;
	}

	public function getById($id){
    $this->load(array('id=?', $id));
    return $this->query;
	}
}
