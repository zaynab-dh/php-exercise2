<?php include_once 'dbconfig.php';
if(!$user->is_loggedin())
{
 $user->redirect('index.php');
}
?>

<?php require 'header.php'; ?>






	<?php

	 if (isset($_GET['id'])) {
	 	
	 	$id = $_GET['id'];
	 }

$post = new Post;

$fetch_singlePost = $post->readPostById($id);


	 ?>
	



<div class="card-body">

<div class="allcard">

		

	<h3 style=font-family:cursive; class="mb-4"><?php echo $fetch_singlePost->title; ?></h3>


	<a class="btn edit btn-primary mb-4" href="edit_post.php?id=<?php echo $fetch_singlePost->id;?>">Edit</a>
	<a class="btn delete btn-danger mb-4" href="delete_post.php?id=<?php echo $fetch_singlePost->id; ?>">Delete</a>

	<p class="posts" style=font-family:roboto;><?php echo $fetch_singlePost->content; ?></p>

</div>
</div>