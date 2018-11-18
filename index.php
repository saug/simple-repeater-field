<!DOCTYPE html>
<html>
<head>
	<title>Repeater Fields</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
		.submit{
			margin:20px 20px 20px 0px;
		}
		.center-block{
			margin-left: 500px;
		}
	</style>
</head>
<body>

	<?php 
		if( isset( $_POST ) && !empty( $_POST ) ):
			echo "<pre>";print_r($_POST);echo "</pre>";exit; 
		endif;

	?>

	<div class="container">
		<h1 style="text-align:center;">Repeater Field</h1>
		<div class="container">
		<form method="POST" action="">
			<div id="add-row">
				<div id="repeater-field">
					<div class="form-group">
						<label for="your-name">Name</label>
						<input id="your-name" type="text" name="yourname[0][name]" class="form-control" aria-describedby="name" placeholder="Name">
						<small id="nameHelp" class="form-text text-muted">Your name here.</small>
					</div>

					<div class="form-group">
						<label for="your-email">Email</label>
						<input id="your-email" type="email" name="youremail[0][email]" class="form-control" aria-describedby="your-email" placeholder="Email">
						<small id="emailHelp" class="form-text text-muted">Your email here.</small>
					</div>
				</div>
			</div>
			<button class="clone btn btn-primary center-block">+</button><br/>

			<button type="submit" class="submit btn btn-danger col-12">Submit</button>

		</form>
		</div>
	</div>

</body>
<footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$('.clone').on( 'click', function(e){
				e.preventDefault();
 				$("#repeater-field").clone().appendTo('#add-row');
			} );

		})
	</script>
</footer>
</html>