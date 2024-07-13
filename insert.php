<?php
require_once "connection.php";
  
   $photo="";  
if ($_SERVER["REQUEST_METHOD"] == "POST")
	{ 
	   if (!preg_match("/^[a-zA-Z ]*$/",$_POST["n1"]) && empty($_POST["n1"])) 
	   {
	      echo "Only letters and white space allowed in the Name field";
		  echo "<br><br>";
	   }
	   else
	   {
          $name=$_POST["n1"];
	   }
	   if(!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/",$_POST["p1"]) && $_POST["p1"]!=$_POST["p2"] && empty($_POST["p1"]) )
	   
	   {
           echo "Password is wrong";		   
	       echo "<br><br>";
	   }
	   else
	   {
	      $password=$_POST["p1"];
		  $cpassword=$_POST["p2"];
	   }
	  
	  
	  if(empty($_POST["g1"]))
	  {
          echo "select the gender";
		  echo "<br><br>";
	  }
	  else
	  {
	       $gender=$_POST["g1"];
	  }
	  if(empty($_POST["a1"]))
	  {
          echo "Enter Address";
		  echo "<br><br>";
	  }
	  else
	  {
	       $address=$_POST["a1"];
	  }
	  if(empty($_POST["s1"]))
	  {
          echo "select the state";
		  echo "<br><br>";
	  }
	  else
	  {
	       $state=$_POST["s1"];
	  }
	  if((time()-strtotime($_POST["d1"]))/(3600 * 24 * 365)<18 || empty($_POST["d1"])) 
	   {   
           echo  "date cannot be empty or must be above 18 years";
		   echo "<br><br>";
	   }
	   else
	   {    
            $dob=$_POST["d1"];

       } 
	   
	   
	  if(strlen($_POST["m1"])>10 || empty($_POST["m1"]))        //preg_match("/^[0-9]{10}+$/",
	   {
	      echo "mobile no cannot be more than 10 digits";
          echo "<br><br>";
	   }
       else
	   {
	       $mobile=$_POST["m1"];
       }
	   
	   if (!filter_var($_POST["e1"], FILTER_VALIDATE_EMAIL) && empty($_POST["e1"])) 
	   {
          echo "Invalid email format";
          echo "<br><br>"; 
	   }
	   else
	   {
	      $email=$_POST["e1"];
	   }
	  
        if(empty($_POST["i1"]))  
        { 
	       echo "Select an industry";
		}
		else
        {    //foreach ($_POST['i1'] as $ind)
	        
              $industry=implode(",",$_POST["i1"]) ;
			
        }
		if(empty($_POST["p1"]))
		{
	      echo "Sorry, file not uploaded, please try again!";
		}
		else
		{
	     $target = "uploads/";  
         $target_path = $target.basename( $_FILES["p1"]["name"]);   
  
          if(move_uploaded_file($_FILES["p1"]["tmp_name"], $target_path))
		  {
             $photo=$target_path;  
		  } 
		       
        }  
    
         
    }   
	      
	 $stmt = $conn->query("INSERT INTO registration (tname,tpassword,tcpassword,tgender,taddress,tstate,tdob,tmobile,temail,tindustry,tphoto) VALUES('".$name."','".$password."','".$cpassword."','".$gender."','".$address."','".$state."','".$dob."','".$mobile."','".$email."','".$industry."','".$photo."')") ;
	
	 
		if($stmt)

	  {
		echo "Hello " . $name . "!, your data has been saved!";
	  }
	else
	   {
		echo "data is not inserted in table"; 
 	   }
	
 

	?>
<html>
		<body>
		<a href="form.html"><br><br><button type="button">BACK TO MAIN FORM</button></a><br><br>
			</body>
			</html>