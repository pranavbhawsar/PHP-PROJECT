<?php  
  include("header.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Enquiry</title>
	<link rel="stylesheet" type="text/css" href= "newstyle.css">
	<link href="css/newstyle.css" rel="stylesheet" type="text/css">
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>">
        <h1><center> Enquiry Form</center></h1><br/>

        	<?php
                  if(!empty($_POST['name'])&&   !empty($_POST['branch']) 
                    && !empty($_POST['email']) && !empty($_POST['gender'])
                    && !empty($_POST['tfws']))
                  { 
                    $name =$_POST['name'];
                    $branch=$_POST['branch'];
                    $email=$_POST['email'];
                    $gender=$_POST['gender'];
                    $money=$_POST['money'];
                    $tfws=$_POST['tfws'];
                  }
                  else
                    echo "<h4 class=\"red\">(you need to fill in all the fields)</h4>";
           ?>
<br/><br/><br/>
<div class="details">
        
         
           NAME :	<input type="text" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" style="margin-left:325px"/>
            
            
            <?php  if(!empty($_POST['name']))
	               {    $name=$_POST['name'];
            		    if ((strlen ($name))> 32)
                		{	echo"  <span class=\"error\">  your name is too long</span>";
              			}}
            	   else echo " <span class=\"error\">please enter your name</span>";
           ?>
<br/><br/>
          BRANCH :	<input type="text" name="branch" value="<?php if(isset($_POST['branch'])) {echo $_POST['branch'];}?>" style="margin-left:305px"/>
             <?php  if(!empty($_POST['branch']))
                	{$branch =$_POST['branch'];
                	}
            		else echo "<span class=\"error\">please enter your branch</span>";
             ?>
<br/><br/>
  		  EMAIL ID : <input type="text" name="email" value="<?php if(isset($_POST['email'])) {echo $_POST['email'];}?>" style="margin-left:295px"/>
             <?php  if(!empty($_POST['email']))
                	{$email =$_POST['email'];
                	if (!filter_var($email,FILTER_VALIDATE_EMAIL))
                    {	echo "<span class=\"error\">invalid email</span>";
               		}}
               		else echo "<span class=\"error\">please enter your email</span>";
	        ?>
<br/><br/>
          GENDER :	<input   type="radio" name="gender" <?php if(isset($gender)&&$gender=="MALE") echo "checked";?> value="MALE" style="margin-left:			 																												305px "/>MALE
          			<input type="radio" name="gender"<?php if(isset($gender)&&$gender=="FEMALE") echo "checked";?> value="FEMALE"
																												style="margin-left:85px"/>FEMALE
            <?php  	if(!empty($_POST['gender']))
                  	{$gender =$_POST['gender'];
                	}
                 	else echo "<span class=\"error\">please select your gender</span>";

             ?> 
<br/><br/>
            CATEGORY :
           			 	<select name="Sel" style="margin-left:280px">
            			<option value="general">GENERAL</option>
            			<option value="obc"> OBC</option>
			            <option value="sc">SC</option>
            			<option value="st">ST</option>
			            </select><br/><br/>
            
            BRANCH TYPE:
            		<input type="radio" name="money" style="margin-left:245px"/>GAS
            		<input type="radio" name="money" style="margin-left:110px"/>SFS
            <?php 	if(!empty($_POST['money']))
                	{$money =$_POST['money'];
                	}
               		else echo "<span class=\"error\">please select your branch type</span>";
             ?> 
<br/><br/>
             
            DO YOU BELONG TO TFWS CATEGORY ?:
 		           <input type="radio" name="tfws" style="margin-left:60px"/>YES
		           <input type="radio" name="tfws" style="margin-left:115px"/>NO
            <?php 	if(!empty($_POST['tfws']))
                	{$tfws =$_POST['tfws'];
                	}
               		else echo "<span class=\"error\">please select your category</span>";
             ?> 
<br/><br/><br/><br/>
		  			<input type="submit" value="SUBMIT" name="submit" style="margin-left:400px"/> 
		  		 

</div>
</form>

<?php  
    include("footer.php");
 ?>
</body>
</html>
