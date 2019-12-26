<?php 

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';
	
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$aim=mysqli_real_escape_string($conn,$_POST['aim']);
	$comp=mysqli_real_escape_string($conn,$_POST['comreq']);
	$message=mysqli_real_escape_string($conn,$_POST['message']);

	$file = $_FILES['pdf'];

	$filename = $_FILES['pdf']['name'];
	$filetmpname = $_FILES['pdf']['tmp_name'];
	$filesize = $_FILES['pdf']['size'];
	$filerror = $_FILES['pdf']['error'];
	$filetype = $_FILES['pdf']['type'];

	$fileext = Explode('.', $filename);
	$fileactualext = strtolower(end($fileext));

	$allowed = array('pdf');

	if (in_array($fileactualext, $allowed)) {
		if ($filerror === 0) {
			if ($filesize < 2000000) {
				$filenamenew = uniqid('',true).".".$fileactualext;
				$filedestination = 'uploads/'.$filenamenew;
				move_uploaded_file($filetmpname, $filedestination);
			} else {
				header("Location: ../php/launch.php?file=big");
				exit();
			}
		} else {
			header("Location: ../php/launch.php?fileupload=error");
				exit();
		}
	} else{
		header("Location: ../php/launch.php?fileformat=false");
		exit();
	}
	
	$image = $_FILES['image'];

	$filename = $_FILES['image']['name'];
	$imgtmpname = $_FILES['image']['tmp_name'];
	$filesize = $_FILES['image']['size'];
	$filerror = $_FILES['image']['error'];
	$filetype = $_FILES['image']['type'];

	$fileext = Explode('.', $filename);
	$fileactualext = strtolower(end($fileext));

	$allowed = array('png','jpeg','jpg');

	if (in_array($fileactualext, $allowed)) {
		if ($filerror === 0) {
			if ($filesize < 2000000) {
				$imgnamenew = uniqid('',true).".".$fileactualext;
				$filedestination = 'images/'.$imgnamenew;
				move_uploaded_file($imgtmpname, $filedestination);
			} else {
				header("Location: ../php/launch.php?img=big");
	        	exit();
			}
		} else {
    		header("Location: ../php/launch.php?imgupload=error");
    		exit();
		}
	} else{
		header("Location: ../php/launch.php?imgformat=false");
		exit();
	}

if(empty($name) || empty($aim)|| empty($comp)|| empty($message)){
		header("Location: ../php/launch.php?empty");
		exit();
	}else{
		
			$sql = "SELECT * FROM project WHERE name='$name';";
			$result = mysqli_query($conn, $sql);
			$resultcheck = mysqli_num_rows($result);

			if($resultcheck > 0){
				echo "PROJECT TITLE ALREADY EXISTS....PLEASE TRY AGAIN";
				header("Location: ../php/launch.php?exists");
				exit();
			}else{
				$sql = "INSERT INTO project (name,aim,comp,message,filename,imgname) VALUES ('$name','$aim','$comp','$message','$filenamenew','$imgnamenew');";
				mysqli_query($conn, $sql);
				
				$mail->Body    = "Project submitted succesfully. Thank You !";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->addAddress($email);
                    
        $mail ->send();
                    
        	
				header("Location: ../php/launch.php?success");
				exit();
			}
		}	
}else{
	header("Location: ../php/launch.php?failed");
	exit();
}

 ?>