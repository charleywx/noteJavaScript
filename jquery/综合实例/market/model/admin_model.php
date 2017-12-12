<?php
chdir(dirname(__FILE__));
include_once ("../db/TPgsql.php");

class Admin_model {
    public function isfound($username,$password) {
        $db = new TPgsql();
        $sql = "select entity_id, admin_user, admin_pass from pre_admin where admin_user='" . $username. "' and admin_pass='" . md5($password) . "'";
        $result = $db->query_two($sql);
        if(count($result[0])>0){
            return true;
        }
        return false;
    }
	
	public function insert($data) {
		$admin_user = $data['admin_user'];
		$admin_pass = $data['admin_pass'];
        $addtime = $data['addtime'];
        $db = new TPgsql();
        $sql = "insert into pre_admin(admin_user,admin_pass,addtime)values('".$admin_user."','".md5($admin_pass)."','".$addtime."')";
        $result = $db->query($sql);
        return $result;
    }
	
	public function update($data) {
        $id = $data['id'];
		$admin_user = $data['admin_user'];
		$admin_pass = $data['admin_pass'];
        $addtime = $data['addtime'];
        $db = new TPgsql();
        $sql = "update pre_admin set admin_user='".$admin_user."',admin_pass='".md5($admin_pass)."',addtime='".$addtime."' where entity_id=".$id;
        $result = $db->query($sql);
        return $result;
    }

    public function find_many() {
        $db = new TPgsql();
        $sql = "select * from pre_admin order by addtime desc";
        $result = $db->query_two($sql);
        return $result;
    }

    public function find_one($id) {
        $db = new TPgsql();
        $sql = "select * from pre_admin where entity_id=" . $id;
        $result = $db->query_onerow($sql);
        return $result;
    }

    public function delete($id) {
        $sql = "delete from pre_admin where entity_id=".$id;
        $db = new TPgsql();
        return $db->query($sql);
    }
}
