<?php require 'db.php'; ?>

<?php 

// public function register($fname,$lname,$uname,$umail,$upass)
//     {
//        try
//        {
//            $new_password = password_hash($upass, PASSWORD_DEFAULT);
   
//            $stmt = $this->db->prepare("INSERT INTO user(user_name,user_email,password) 
//                                                        VALUES(:uname, :umail, :upass)");
              
//            $stmt->bindparam(":uname", $uname);
//            $stmt->bindparam(":umail", $umail);
//            $stmt->bindparam(":upass", $new_password);            
//            $stmt->execute(); 
   
//            return $stmt; 
//        }
//        catch(PDOException $e)
//        {
//            echo $e->getMessage();
//        }    
//     }


class Post{

	

//CREATE POST
	public function insertPost($title,$content){

		global $pdo;

		$stmt = $pdo->prepare('INSERT INTO user_post (title,content) VALUES (?,?)');

		$stmt->execute([

			$title,
			$content

		]);

		return $pdo->lastInsertId();
	}


//READ POST


	public function readAllPost($fetchType = PDO::FETCH_OBJ){

		global $pdo;

		$stmt = $pdo->prepare('SELECT * FROM user_post ORDER BY id DESC');
		$stmt->execute();

		return $stmt->fetchAll($fetchType);

	}

	public function readPostById($id, $fetchType = PDO::FETCH_OBJ){

		global $pdo;

		$stmt = $pdo->prepare('SELECT * FROM user_post WHERE id=?');
		
		$stmt->execute([$id]);

		return $stmt->fetch($fetchType);

	}


	//UPDATE POST


	public function updatePost($id,$title,$content){

global $pdo;

$stmt = $pdo->prepare('UPDATE user_post SET title=?, content=? WHERE id=?');

$stmt->execute([

$title,
$content,
$id

]);


	}





public function deletePost($id){

	global $pdo;

	$stmt = $pdo->prepare("DELETE FROM user_post WHERE id=?");

	$stmt->execute([$id]);
}
}