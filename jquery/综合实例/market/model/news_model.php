<?php
chdir(dirname(__FILE__));
include_once ("../db/TPgsql.php");

class News_model {
	
	public function insert($data) {
		$title = $data['title'];
		$content = $data['content'];
        $addtime = $data['addtime'];
        $db = new TPgsql();
        $sql = "insert into pre_news(title,content,addtime)values('".$title."','".$content."','".$addtime."')";
        $result = $db->query($sql);
        return $result;
    }
	
	public function update($data) {
        $id = $data['id'];
        $title = $data['title'];
        $content = $data['content'];
        $addtime = $data['addtime'];
        $db = new TPgsql();
        $sql = "update pre_news set title='".$title."',content='".$content."',addtime='".$addtime."' where entity_id=".$id;
        $result = $db->query($sql);
        return $result;
    }

    public function find_many() {
        $db = new TPgsql();
        $sql = "select * from pre_news order by addtime desc";
        $result = $db->query_two($sql);
        return $result;
    }

    public function find_one($id) {
        $db = new TPgsql();
        $sql = "select * from pre_news where entity_id=" . $id;
        $result = $db->query_onerow($sql);
        return $result;
    }

    public function delete($id) {
        $sql = "delete from pre_news where entity_id=".$id;
        $db = new TPgsql();
        return $db->query($sql);
    }
}
