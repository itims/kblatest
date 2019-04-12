<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('ashir' => 'ashir123');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Login</title>
<link href="./css/style.css" rel="stylesheet">
</head>

<body>

<!--
<div id="Frame0">
  <h1>Asset Reports</h1>
  </div>
-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="aws_sysops_exam.php">AWS SysOps Administrator Associate Exam</a>
<br>
<br>
MCSA & MCITP Practice Test
<ul>
<li><a href="http://www.gocertify.com/quizzes/">Ref:1</a></li>
<li><a href="http://www.techiebird.com/ad14.html">Ref:2</a></li>
<li><a href="http://www.techken.in/windows-server-os/server-scenario-interview-questions-part-1/">Ref:3</a></li>
<li><a href="http://www.windowstricks.in/active-directory-real-time-interview-questions-and-answers">Ref:4</a></li>
<li><a href="files_uploaded/Scenario_Based_AD_IQA.pdf">Scenario Based AD - IQA</a></li>
</ul>
<br>
<br>
<br>
<br>

<form action="" method="post" name="Login_Form">

  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>

</form>

</body>

</html>