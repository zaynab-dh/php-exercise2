
<?php 

include_once 'dbconfig.php';
if(!$user->is_loggedin())
{
 $user->redirect('index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog Project</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php require 'header.php'; ?>



<div class="card-body">

<?php 

$post = new Post;

$fetch_post = $post->readAllPost();

foreach ($fetch_post as $value):
	
 ?>
	<div class="allcard">

		<div class="title"><h3><a  style="text-decoration: none; font-family: cursive;color: #ffffff;" href="single_post.php?id=<?php echo $value->id; ?>"><?php echo $value->title; ?></a></h3></div>

		
		<div class="posts" ><p style=font-family:roboto; class="mt-3"><?php echo substr($value->content, 0,300); ?>&nbsp;<a style="text-decoration: none;" href="single_post.php?id=<?php echo $value->id; ?>">read more...</a></p></div>
		<div class="buttons">
			<a class="btn edit btn-primary mt-3" href="edit_post.php?id=<?php echo $value->id; ?>">Edit</a>
			<a class="delete" href="delete_post.php?id=<?php echo $value->id; ?>">Delete</a>
		</div>
	</div>
<?php endforeach; ?>

</div>