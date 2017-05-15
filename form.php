<?php
include("header.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<link rel="stylesheet" type="text/css" href= "newstyle.css">
	<link href="css/newstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<form method="post" action="challan.php">
  <h1 style="text-align:center">Registration Form</h1>

                    <?php if(!empty($_POST['name'])&& !empty($_POST['fname'])&& 
                          !empty($_POST['degree'])&& !empty($_POST['branch']) 
                          && !empty($_POST['email']) && !empty($_POST['mnum'])
                          && !empty($_POST['km'])&& !empty($_POST['income'])
                          && !empty($_POST['ph'])&& !empty($_POST['tfws'])
                          && !empty($_POST['gender']))
                        { $name =$_POST['name'];
                        $fname=$_POST['fname'];
                        $degree=$_POST['degree'];
                        $branch=$_POST['branch'];
                        $email=$_POST['email'];
                        $mnum=$_POST['mnum'];
                        $gender=$_POST['gender'];
                        $money=$_POST['money'];
                        $km=$_POST['km'];
                        $income=$_POST['income'];
                        $ph=$_POST['ph'];
                        $tfws=$_POST['tfws'];

/*
                        if ((strlen ($name))> 32)
                          echo "<h4 class=\"red\">your name is too long</h4>";
                        elseif ((strlen ($fname))> 32)
                          echo "<h4 class=\"red\">your father'sname is too long</h4>";
                        elseif (!filter_var($email,FILTER_VALIDATE_EMAIL))
                          echo "<h4 class=\"red\">invalid email</h4>";
                        elseif ((strlen ($mnum))> 10)
                          echo "<h4 class=\"red\">your mobile number is invalid</h4>";
                        else 
                          echo "<h4 class=\"red\">your data has been submitted</h4>";*/
                        }
                        else
                          echo "<h4 class=\"red\">(you need to fill in all the fields)</h4>";
                    ?>

        
<br/><br/><br/>
<div class="reg">
          
         NAME :		<input type="text" name="name"  value="<?php if(isset($_POST['name'])) {echo $_POST['name'];}?>"  style="margin-left:325px"/>
           				<?php   if(!empty($_POST['name']))
                			    {$name=$_POST['name'];
                			 	if ((strlen ($name))> 32)
                				{ echo"  <span class=\"error\">  your name is too long</span>";
                                }} 
            					else echo " <span class=\"error\">please enter your name</span>";
           				?>

<br/>
<br/>
         FATHER'S NAME :
		 			<input type="text" name="fname" value="<?php if(isset($_POST['fname'])) {echo $_POST['fname'];}?>" style="margin-left:250px"/>

                       <?php    if(!empty($_POST['fname']))
                				{$fname=$_POST['fname'];
                				if ((strlen ($fname))> 32)
                				{ echo"  <span class=\"error\">  your father's name is too long</span>";
                                }}
            				    else echo " <span class=\"error\">please enter your father's name</span>";
           					    ?>
<br/><br/>
           DEGREE :  <input type="text" name="degree" value="<?php if(isset($_POST['degree'])) {echo $_POST['degree'];}?>" style="margin-left:310px"/>
                	   <?php    if(!empty($_POST['degree']))
                				{$degree=$_POST['degree'];
                				}
            					else echo " <span class=\"error\">please enter your degree</span>";
           						?>
<br/><br/>                 
    	   BRANCH :  <input type="text" name="branch" value="<?php if(isset($_POST['branch'])){echo $_POST['branch'];}?>" style="margin-left:310px"/>
                       <?php    if(!empty($_POST['branch']))
                				{$banch=$_POST['branch'];
                				}
            					else echo " <span class=\"error\">please enter your branch</span>";
           		   		?>
<br/><br/>
  		   EMAIL ID : <input type="text" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" style="margin-left:300px"/>
                        <?php   if(!empty($_POST['email']))
                				{$email =$_POST['email'];
                				if (!filter_var($email,FILTER_VALIDATE_EMAIL))
                    			{	echo "<span class=\"error\">invalid email</span>";
               					}}
               					else echo "<span class=\"error\">please enter your mail</span>";

              			?>
<br/><br/>
           MOBILE NO.: <input type="text" name="mnum" value="<?php if(isset($_POST['mnum'])){echo $_POST['mnum'];}?>" style="margin-left:285px"/>
                         <?php  if(!empty($_POST['mnum']))
                				{$mnum=$_POST['mnum'];
				                if ((strlen ($mnum))> 10)
                				{	echo"  <span class=\"error\">  your mobile number is invalid</span>";
                                }}
							 	else echo " <span class=\"error\">please enter your mobile number</span>";
           				  ?>
<br/><br/>
            GENDER :   <input type="radio" name="gender" style="margin-left:310px "/>MALE
                       <input type="radio" name="gender" style="margin-left:110px"/>FEMALE
                         <?php  if(!empty($_POST['gender']))
                           		{$gender =$_POST['gender'];
                           		}
                 				else echo "<span class=\"error\">please select your gender</span>";
			             ?> 
<br/><br/>
            CATEGORY :
		            <select name="Select" style="margin-left:290px">
		            <option value="general">GENERAL</option>
		            <option value="obc"> OBC</option>
        		    <option value="sc">SC</option>
            		<option value="st">ST</option>
            		</select>
<br/><br/>
            BRANCH TYPE:
            		<input type="radio" name="money" style="margin-left:265px"/>GAS
            		<input type="radio" name="money" style="margin-left:130px"/>SFS
           				 <?php  if(!empty($_POST['money']))
                				{$money =$_POST['money'];
                				}
               					else echo "<span class=\"error\">please select your branch type</span>";
               			 ?>
<br/><br/>
            ARE YOU A KASHMIRI MIGRANT? 
		            <input type="radio" name="km" style="margin-left:125px"/>YES
        		    <input type="radio" name="km" style="margin-left:130px"/>NO
            			 <?php  if(!empty($_POST['km']))
                				{$km =$_POST['km'];
                				}
               					else echo "<span class=\"error\">please select your category</span>";
			             ?> 
<br/><br/>
            ANNUAL INCOME GREATER THAN 500000:
		            <input type="radio" name="income" style="margin-left:65px"/>YES
		            <input type="radio" name="income" style="margin-left:130px"/>NO
			            <?php  if(!empty($_POST['income']))
                				{$income =$_POST['income'];
               					}
               					else echo "<span class=\"error\">please select your category</span>";              
			            ?> 
<br/><br/>
            PHYSICALLY HANDICAPPED:
		            <input type="radio" name="ph" style="margin-left:160px"/>YES
        		    <input type="radio" name="ph" style="margin-left:130px"/>NO
            			 <?php  if(!empty($_POST['ph']))
                				{$ph =$_POST['ph'];
                				}
               					else echo "<span class=\"error\">please select your category</span>";
                         ?> 
<br/><br/>
            DO YOU BELONG TO TFWS CATEGORY ?:
            		<input type="radio" name="tfws" style="margin-left:70px"/>YES
					<input type="radio" name="tfws" style="margin-left:135px"/>NO
                        <?php  if(!empty($_POST['tfws']))
                			   {$tfws =$_POST['tfws'];
                               }
               				   else echo "<span class=\"error\">please select your category</span>";
			            ?> 
<br/><br/><br/><br/>
			       
					 <input type="submit" value="GENERATE CHALLAN"  name="submit" onClick='window.open('form.php')'  style="margin-left:390px" />
					
</div>
</form>
<?php include("footer.php"); ?>
</body>
</html>
