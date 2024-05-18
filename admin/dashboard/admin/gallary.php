
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Anamol Gym center| Admin</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<style>
    	.page-container .sidebar-menu #main-menu li#adminprofile > a {
    	background-color: #2b303a;
    	color: #ffffff;
		}

    </style>

</head>
     <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="main.php">
					<img src="../../images/TT.png" alt="" width="192" height="80" />
				</a>
			</div>
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							</li>						
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

		<h3>Upload the gallery picture</h3>
				
		<hr />
		
<!-- php for uploading the image to gallery -->
<?php
// Include the database connection file
require_once '../../include/db_conn.php';

// Check if the connection object is valid
if ($con) {
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize input
        $title = $_POST["title"];
        $image = $_FILES["image"];

        // Validate input (you can add more validation as needed)
        if (empty($title) || empty($image["name"])) {
            echo "Please fill in all fields.";
        } else {
            // Upload image file
            $targetDir = "gallery/"; // Directory where uploaded images will be saved
            $targetFile = $targetDir. basename($image["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            $check = getimagesize($image["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($image["tmp_name"], $targetFile)) {
                    // File uploaded successfully, insert data into database
                    $stmt = $con->prepare("INSERT INTO gallery (title, image) VALUES (?, ?)");
                    $stmt->bind_param("ss", $title, $targetFile);

                    if ($stmt->execute()) {
                        echo "New image added successfully.";
                    } else {
                        echo "Error: " . $stmt->error;
                    }

                    // Close the statement
                    $stmt->close();
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
    }
} else {
    // Handle connection errors
    echo "Failed to connect to the database.";
}
?>
    <!-- ending the gallery image upload part -->
		
		
		
		
		<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:600px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>Upload to gallery</h6>
        </div>
       <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
             <tr>
               <td height="35">Name of gallery</td>
               <td height="35"><input class="form-control" type="text" id="title" name="title" required></td>
             </tr>
             <tr>
               <td height="35">Upload image</td>
               <td height="35"> <input  type="file" id="image" name="image"></td><br>
             </tr>
             
             <br>
            
             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="SUBMIT" >
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   
		
		
		
		
		

			<?php include('footer.php'); ?>

    	</div>

    </body>
</html>


										
