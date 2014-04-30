<?php 
/*Book object
By Greg McGowan
*/ 
include 'config.php';
class book{
	
	public $id;
	public $title;
	public $author;
	public $description;
	public $isbn;



	function __construct($id =0){
		if($id > 0){
			$this->id = intval($id);
			$this->loadDB();
		}
	}

	function __get($name){
		return $this->$name;
	}

	function __set($name, $value){
		$this->name = $value;
	}

	 function loadDB(){
		if(isset($this->id)){
			global $dbh;
			$sql = "SELECT * FROM test.books WHERE ID = " .  $this->id . " "  ; 
			$query= $dbh->query($sql);
			if($query != false){
				$row = $query->fetch();
				$this->title = $row['title'];
				$this->author = $row['author'];
				$this->description =  $row['description'];
				$this->isbn = $row['isbn'];

			}
		
		}
		
	}

	public function saveDB(){
		global $dbh;
		if(isset($this->id) && $this->id > 0){
			$sql = "UPDATE test.books SET title = '".$this->title."', author = '".$this->author."', description = '".$this->description."' , isbn = '".$this->isbn."' WHERE ID = " . $this->id;  //update
			$result = $dbh->exec($sql);
		}elseif (isset($this->title) && isset($this->author) && isset($this->description) && isset($this->isbn)) {
			$sql = "INSERT INTO test.books (title, author, description, isbn) VALUES ('".$this->title."', '".$this->author."', '".$this->description."' , '".$this->isbn."')" ; // insert
			echo $sql;
			//$result = $dbh->exec($sql);
			$id = $dbh->lastInsertId();
			$this->id = intval($id);
			//set insert id
		}
		
	}

	public function valid(){
		$ret = false;
		if (isset($this->title) && isset($this->author) && isset($this->description) && isset($this->id) && isset($this->isbn)){
			$ret = true;
		}

		return $ret;
	}

	public function getAllBookIds(){

		global $dbh;
		$ret = array();
		$sql = "SELECT ID FROM test.books  "  ; 
			foreach ($dbh->query($sql) as $row) {
				$ret[] = $row['ID'];
			}
		return $ret;


	}
}

?>