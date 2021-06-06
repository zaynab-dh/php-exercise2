<?php require 'header.php'; ?>

<?php 

$msg = '';

if (isset($_GET['empty'])) {
	
	$msg = 'Field must not be empty!';
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
	 <meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>create</title>
	 <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
 </head>
 <body>
	 
 

<div class="card-header">
		<h3>Write Your Story <i class="fas fa-pen-square"></i></h3>
	</div>


<div class="card-body">

	<?php if(!empty($msg)): ?>
		<div class="alert alert-danger"><?php echo $msg; ?></div>
	<?php endif; ?>

<form action="create_post_actions.php" method="POST">
	

	<div class="from-group">
		<label for="title">Title</label>
		<input type="text" name="title" class="form-control" placeholder="Enter Title Here" >
	</div>

	<div class="form-group mt-2">
		<p>Content</p>
		<!-- <textarea name="content" cols="150" rows="10" placeholder="write your stories here..."></textarea> -->
		<textarea name="content" cols="150" rows="10" placeholder="write your stories here..."></textarea>
		<script>
				CKEDITOR.replace( 'content' );
		</script>
	</div>

	<button name="publish" class="btn btn-primary ">Publish</button>

</form>


</div>
</body>
 </html>