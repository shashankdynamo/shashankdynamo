<?php 
require 'config.php';

if (isset($_POST['upload'])) {
	
	$uploadDirectory = "upload/";
	$validExtensions = array('jpg', 'jpeg', 'png', 'bmp');

	$message = $errorType = $errorSize = $errorImage = "";
	$img_ref = rand();
	$sqlValues = "";

	foreach ($_FILES['image']['tmp_name'] as $imageKey => $imageValue) {

		$image = $_FILES['image']['name'][$imageKey];
		$imageSize = $_FILES['image']['size'][$imageKey];
		$imageTmp = $_FILES['image']['tmp_name'][$imageKey];
		$imageType = pathinfo($uploadDirectory.$image, PATHINFO_EXTENSION);

		// Get Image New Name
		if ($image !== '') {

			$imageNewName = uniqid().".".$imageType;
		}
		else{
			$imageNewName = "";
			$errorImage .= "<span style='color:red;'>Image Required...!</span>";
		}

		if ($imageSize > 2048000) {
			
			$errorSize .= "<span style='color:red;'>Larg Image Size must be under 2 Mb...!</span>";
		}
		else if (!empty($image) && !in_array($imageType, $validExtensions)) {
			
			$errorType .= "<span style='color:red;'>File must be an Image...!</span>";
		}
		else if (empty($message)) {
			
			$sqlValues .= "('".$imageNewName."', '".$img_ref."'),";

			$store = move_uploaded_file($imageTmp, $uploadDirectory.$imageNewName); 
		}		
	}

	if (empty($_POST['name'])) {
		
		$message .= "<span style='color:red;'>Name Required...!</span>";
	}
	elseif (!empty($errorType) || !empty($errorSize) || !empty($errorImage)) {
		
		$message .= $errorType . $errorSize . $errorImage;
	}
	else{
		$sqlIns = "INSERT INTO user (name, img_ref) VALUES ('".$_POST['name']."', '".$img_ref."');";

		$sqlIns .= "INSERT INTO images (image, img_ref) VALUES $sqlValues";

		$sqlIns = rtrim($sqlIns, ",");

		$result = mysqli_multi_query($conn, $sqlIns);

		if ($result) {
			
			header("Location: index.php?message=success&name=".$_POST['name']."&img_ref=".$img_ref);
		}
		else{
			$message .= "<span style='color:red;'>Process Failed...!</span>";
		}
	}
}

?>
<!DOCTYPE html>

<html lang="en">

 	<head>
 		<!-- Meta Tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Site Title -->
 		<title></title>
 		<!-- External Style Sheet -->
 		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<style type="text/css">
			body{
				background: url(img/background.jpg);
				background-size: cover;
			}
			.wrapper{
				position: absolute;
				top: 15%;
				left: 50%;
				transform: translate(-50%);
				text-align: center;
				background-color: #ecf0f1;
				padding: 30px 20px;
				border-radius: 10px;
				box-shadow: 0px 0px 10px #000;
			}
			h4{
				margin-bottom: 50px;	
			}
			input{
				width: 100%;
			}
			input[type="submit"]{
				background-color: #00B594;
				color: #fff;
				border: none;
				border-radius: 5px;
				padding: 5px 0;
			}
			input[type="submit"]:hover{
				background-color: #4A566E;
			}
			.images-display{
				display: flex;
				justify-content: space-around;
				padding: 10px;
				margin-bottom: 20px;
				border: 1px solid #9A9A9A;
				border-radius: 5px;
			}
			.name p{
				width: 100%;
				font-size: 18px;
			}
			.images-display img{
				width: 110px;
				height: 100px;
				object-fit: cover;
			}
		</style>
 	</head>

<body>
	<section class="wrapper">
		
		<h4>Upl</h4>

		<div class="name">
			<?php
				if (isset($_GET['name'])) {
					echo "<p>Thank You ".ucfirst($_GET['name'])."</p>";	
				} 
			?>
		</div>
		<div class="images-display">
			<?php
				if (isset($_GET['img_ref'])) {
					
					$sql = "SELECT * FROM images WHERE img_ref = '".$_GET['img_ref']."'";
					$resultSql = mysqli_query($conn, $sql);

					while ($row = mysqli_fetch_assoc($resultSql)) {
							
						echo '<img src="upload/'.$row['image'].'">';
					}	
				}else{
					echo '<img src="img/photo.png">
							<img src="img/photo.png">
							<img src="img/photo.png">
							<img src="img/photo.png">';
				}
			?>			
		</div>
		
		<form action="" method="POST" enctype="multipart/form-data">
			
			<input type="text" name="name" placeholder="Your Name">
			<br><br>
			<br><br>
			<input type="file" name="image[]" multiple>
			<br><br>
			<input type="submit" name="upload" value="Upload">
			<a href="report.php"><input type="button" name="upload" value="DONE"></a>

		</form>	

		<?php
			if (isset($message)) {
			 	
			 	echo $message;
			}
			elseif (isset($_GET['message']) == "success") {
				
				echo "<span style='color:green;'>Image Uploaded...!</span>";
				header("Refresh: 5; url=index.php");
			}
		?>

	</section> <!-- /End of wrapper section -->

</body>
</html>