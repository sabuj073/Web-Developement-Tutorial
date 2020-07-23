<?php 
class dataclass{
	public $db;

	public function __construct(){
		$this->db = new DATABASE();
	}

	public function  insertintodb($post){
		$fname = $post['fname'];
		$lname = $post['lname'];
		$phone = $post['number'];

		$query = "INSERT into test_tbl values(null,'$fname','$lname','$phone')";

		$data = $this->db->run($query);
		return $data;
	}

	public function showall(){
		$query = "SELECT * from test_tbl";
		$data = $this->db->run($query);
		return $data;
	}

	public function gettopbar(){
		$query = "SELECT * from info";
		$data = $this->db->run($query);
		return $data;
	}

	public function insertintotopbar($post){
		$email = $post['email'];
		$address = $post['address'];
		$number = $post['number'];

		$query = "UPDATE info set email='$email',
		address='$address',number='$number'";
		$data = $this->db->run($query);
	}

	public function insertintocard($post){
		$icon = $post['icon'];
		$title = $post['title'];
		$description = $post['description'];

		$query = "INSERT into card values(null,'$icon','$title','$description')";
		$data = $this->db->run($query);
	}

	public function getallcard(){
		$query = "SELECT * FROM `card`";
		$data = $this->db->run($query);
		return $data;
	}

	public function deletecard($id){
		$query = "DELETE  FROM `card` where id='$id'";
		$data = $this->db->run($query);
		return $data;
	}


}
?>