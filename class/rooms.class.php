<?php
class Rooms{

	private $room_id ;
	
	private $_db ;
	
	public function __construct(){
		$this->_db = new Db('rooms');
	}
	
	public function getRoomsUser(){
		global $user ;
		return $this->_db->find(array('conditions' => 'owner = "'.$user->username.'"','fields' => 'owner,id,caption'));
	}
	
	public function roomsBelongsToUser($id){
		global  $user;
		$belongs = $this->_db->find(array('conditions' => 'owner = "'.$user->username.'" AND id='.intval($id).'','fields' => 'id'));	
		if($belongs != null)
			return true ;
		return false ;
	}
}	
?>