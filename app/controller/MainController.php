<?php
class MainController extends Controller{
	public function root(){
		$blogs = new Blog($this->db);
		$users = new User($this->db);
		$data = $blogs->getAll();

		$this->f3->set('blogs', $data);
		$this->f3->set('users', $users);

		$temp = new Template;
		echo $temp->render('main.htm');
	}

	public function blog($f3, $params){
		$username = $this->f3->get('SESSION.username');
		//$username = 'pileVoid';
		$blogs = new Blog($this->db);
		$users = new User($this->db);
		$idOfUserPage = $params['id'];
		$blogsOfUser = $blogs->getByUser($idOfUserPage);

		if($users->getById($idOfUserPage)[0] === null) $f3->error(404);

		if($username !== null && $idOfUserPage == $users->getByUsername($username)[0]->id){
			$this->f3->set('ownerBlogButton', 'Delete me or Edit');
			$this->f3->set('ownerMessageButton', 'My Messages');
		}else {
			$this->f3->set('ownerBlogButton', '');
			$this->f3->set('ownerMessageButton', '');
		}

		$this->f3->set('blogs', $blogsOfUser);
		$this->f3->set('username', $users->getById($idOfUserPage)[0]->username);
		$this->f3->set('id', $idOfUserPage);

		$temp = new Template;
		echo $temp->render('user.htm');
	}

	public function message($f3,$params){
		echo "Message";
	}

	public function messages(){
		echo "messages";
	}

	public function profile($f3, $params){
		$username = $this->f3->get('SESSION.username');
		//$username = 'pileVoid';
		$users = new User($this->db);
		$idOfUserPage = $params['id'];
		$infoOfUser = json_encode($users->getById($idOfUserPage)[0]->info);

		if($users->getById($idOfUserPage)[0] === null) $f3->error(404);

		if($username !== null && $idOfUserPage == $users->getByUsername($username)[0]->id){
			$this->f3->set('ownerBlogButton', 'Delete me or Edit');
		}else {
			$this->f3->set('ownerBlogButton', '');
		}

		$this->f3->set('info', $infoOfUser);
		$this->f3->set('m', 'Hello World!');

		$temp = new Template;
		echo $temp->render('profile.htm');
	}

	public function test(){
		$ar = array("text"=>"This is info of user dimas__karpus");
		$json = json_encode($ar);

		$this->f3->set('json', $json);

		$temp = new Template;
		echo $temp->render('test.htm');

	}

	public function teste(){
		$users = new User($this->db);

		$users->edit('pileVoid');

	}
}
