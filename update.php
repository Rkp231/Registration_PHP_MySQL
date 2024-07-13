<?php
	
	require_once "connection.php";
	
	
	$sql="select * from registration where id=".$_GET["id"];

	$result=$conn->query($sql);
  
    if($result->num_rows > 0)
			   {
                
                $row = $result->fetch_array(MYSQLI_ASSOC);
		           
				}
			   
	?>
	
	
<html>
    <head>
        <title>CUSTOMER REGISTRATION</title>
        </head>
    <body bgcolor="yellow">
        <fieldset>
            <legend>Personal Information</legend>
       <form action="saveupdate.php" method="post" enctype="multipart/form-data">
            ID   :<input type="text" name="id1" value="<?php echo $_GET["id"]; ?>"readonly><br><br><br>	
            CUSTOMER NAME      : <input type="text" name="n1" value="<?php echo $row["tname"]; ?>" required /><br><br>
            CUSTOMER PASSWORD  : <input type="password" name="p1" value="<?php echo $row["tpassword"]; ?>" required />
	     <p>Must contain at least 1 number and 1 letter,May contain any of these characters: !@#$%,Must be 8-12 characters</p>
			CONFIRM PASSWORD  : <input type="password" name="p2" value="<?php echo $row["tcpassword"]; ?>" required /><br><br>
            GENDER             : <input type="radio" name="g1" value="Male" />Male
                                 <input type="radio" name="g1" value="Female" />Female<br><br>
            ADDRESS            : <textarea name="a1" rows="4" cols="20" value="<?php echo $row["taddress"]; ?>" required></textarea><br><br>
            STATE : <select name="s1" value="<?php echo $row["tstate"]; ?>" required>
                    <option selected="" disabled="">Select State</option>
                    <option value="Delhi">DELHI</option>
                    <option value="Maharashtra">MAHARASHTRA</option>
                    <option value="Gujarat">GUJRAT</option>
                    <option value="UP">UTTAR PRADESH</option>
                    <option value="UP"> BANGLORE</option>
                    <option value="UP">CHANDIGAARH</option>
                </select><br><br>
            DOB                : <input type="date" name="d1" value="<?php echo $row["tdob"]; ?>" required/><br><br>
            CONTACT NUMBER     : <input type="number" name="m1"  required /><br><br>
            EMAIL ID : <input type="text" name="e1" value="<?php echo $row["temail"]; ?>" required /><br><br>
            INDUSTRY : <select name="i1[]" MULTIPLE required>
                    <option selected="" disabled="">CHOOSE </option>
                    <option value="IT">IT</option>
					<option value="HOSPITALITY">HOSPITALITY</option>
					<option value="ACEDEMIC">ACEDEMIC</option>
					<option value="FINANCE">FINANCE</option>
					<option value="TOUR">TOUR AND TRAVEL</option>
                    <option value="DESIGNER">INTERIOR DESIGN</option>
                    </select><br><br>
			SELECT PHOTO :</b> <input type="file" name="p1" required/><br><br>
                    <input type="submit" value="UPDATE">

	
</form>
<a href="form.html"><br><br><button type="button">BACK TO MAIN FORM</button></a><br><br>

</fieldset>
   
</body>
</html>
	
	
	

