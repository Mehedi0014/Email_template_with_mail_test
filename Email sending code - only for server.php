
<?php
if(isset($_POST["userName"]) &&  isset($_POST["CompanyName"]) && isset($_POST["userEmail"]) && isset($_POST["userMsg"]))
{
	if(!empty($_POST['userName']) && !empty($_POST['CompanyName']) && !empty($_POST['userEmail']) && !empty($_POST['userMsg']))
	{
		$userName=$_POST['userName'];
		$userCompany=$_POST['CompanyName'];
		$userEmail=$_POST['userEmail'];
		$userMsg=$_POST['userMsg'];
		if(!filter_var($userEmail,FILTER_VALIDATE_EMAIL)){
		
			echo 'Kindly provide vVadid Email';
		}
		else{
			    $body =$userName."\n".$userCompany."\n".$userEmail."\n".$userMsg;
				if(mail('abbasuddincvc@gmail.com','website Responsive',$body,"From:".$userEmail."\r\n".'X-Mailer: PHP/' . phpversion())){
					echo 'Thanks for contacting us';
		}else{
			echo 'There is a problem in senndig mail';
		}
		}
	}	else{
		echo 'All Fields are required';
	}

	}else
{
	echo 'not ok';
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">

          <form action="" method="POST">
       
          <div class="form-group">
            <label for="recipient-name" class="control-label">Name:</label>
      
            <input type="text" class="color" name="userName" id="userName" placeholder="Name*" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Company:</label>
        
            <input type="text" class="color" name="CompanyName" id="CompanyName" placeholder="Company*" >
          </div>
           <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
       
            <input type="text" class=" color" name="userEmail" id="userEmail" placeholder="Email" >
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
        
            <textarea class="color" name="userMsg" id="userMsg" ></textarea>
          </div>
		    <input type="submit" value="contact me">
        </form>
      </div>

   



 </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/active.js"></script>
</body>
</html>