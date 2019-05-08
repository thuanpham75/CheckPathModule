<?php 
spl_autoload_register(function($class_name){
	require './app/'.$class_name.'.php';
});

$dir = null;
$result = false;
$resource = new Resource();
if(isset($_POST['btnCheck'])){
	$dir = $_POST['links'];
	$result = $_POST['links'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CHECK PATH MODULE</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/js/scripts.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#show').click(function() {
				$('.show-module').toggle("slide");
				$('.result').toggle("slide");

			});
		});
	</script>
</head>
<body>
	<div class="container content">
		<div class="logo">
			<img src="public/images/logo.png" alt="logo" class="img-responsive">
		</div>

		<form action="check.php" method="POST">
			<div class="form-group">
				<label for="link">Enter path module:</label>
				<input type="text" class="form-control" id="link" name="links"> 
			</div>

			<button id="check"  type="submit" name="btnCheck" class="btn btn-primary">Check</button>


		</form>
		<button style="display: inline-block;" id="show"  type="submit" name="btnShow" class="btn btn-primary">Show Correct Module</button>
		<div class="result" style="display: none;">
			<h2 id="hidden" class="kq">NOTE</h2>
			<div class="true">
				<i style="color: #35fc42;" class="fa fa-square" aria-hidden="true"></i> File correct structure

			</div>
			<div class="false">
				<i style="color: red;" class="fa fa-square" aria-hidden="true"></i> File wrong structure
			</div>
		</div>
		<div class="dir">
			<div class="row">
				<div class="col-md-6">
					<div class="address1">
						<h2 id="hidden">PATH MODULE<i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>

						<?php 
						if($dir != null) {
							echo "<h3>".$dir."</h3>";
							echo "<br>";
							$resource->dirToArray($dir);
						}
						?>
					</div>
					
				</div>
				<div class="col-md-6">
					<div class="address1 show-module" style="display: none;">

						<h2 id="hidden">CORRECT MODULE<i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>
						<h3>Path module</h3>
						<br>
						<ul>

							<li><i class="fa fa-file" aria-hidden="true"></i> NUMBER-content.php</li>
							<li><i class="fa fa-file" aria-hidden="true"></i> NUMBER-screenshot.png</li>
							<li><i  class="fa fa-file" aria-hidden="true"></i> NUMBER.php</li>
							<li><i style="color: #FEDF61;" class="fa fa-folder-open" aria-hidden="true"></i> css</li>
							<li>			
								<ul>
									<li><i class="fa fa-file" aria-hidden="true"></i> NUMBER.css</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> bootrap.min.css</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> font-awesome.min.css</li>
								</ul>
							</li>
							<li><i style="color: #FEDF61;" class="fa fa-folder-open" aria-hidden="true"></i> fonts</li>
							<li>			
								<ul>
									<li><i class="fa fa-file" aria-hidden="true"></i> FontAwesome.otf</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> fontawesome-webfont.eot</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> fontawesome-webfont.svg</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> fontawesome-webfont.ttf</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> fontawesome-webfont.woff</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> fontawesome-webfont.woff2</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> glyphicons-halflings-regular.eot</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> glyphicons-halflings-regular.svg</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> glyphicons-halflings-regular.ttf</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> glyphicons-halflings-regular.woff</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> glyphicons-halflings-regular.woff2</li>
								</ul>
							</li>
							<li><i style="color: #FEDF61;" class="fa fa-folder-open" aria-hidden="true"></i> images</li>
							<li><i style="color: #FEDF61;" class="fa fa-folder-open" aria-hidden="true"></i> js</li>
							<li>			
								<ul>
									<li><i class="fa fa-file" aria-hidden="true"></i> NUMBER.js</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> bootstrap.min.js</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> jquery.js</li>
								</ul>
							</li>
							<li><i style="color: #FEDF61;" class="fa fa-folder-open" aria-hidden="true"></i> less</li>
							<li>			
								<ul>
									<li><i class="fa fa-file" aria-hidden="true"></i> NUMBER.less</li>
								</ul>
							</li>
							<li><i style="color: #FEDF61;" class="fa fa-folder-open" aria-hidden="true"></i> libs</li>
							<li>			
								<ul>
									<li><i class="fa fa-file" aria-hidden="true"></i> lessc.inc.php</li>
									<li><i class="fa fa-file" aria-hidden="true"></i> lessc.php</li>
								</ul>
							</li>
						</ul>
					</div>
					
				</div>		
			</div>
		</div>


	</body>
	</html>


