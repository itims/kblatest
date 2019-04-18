<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AWS Exam</title>
    <link rel="stylesheet" href="bootstrap337/css/bootstrap.min.css" />
<meta name="x-stylesheet-fallback-test" content="" class="sr-only" />
<script>!function(a,b,c,d){var e,f=document,g=f.getElementsByTagName("SCRIPT"),h=g[g.length-1].previousElementSibling,i=f.defaultView&&f.defaultView.getComputedStyle?f.defaultView.getComputedStyle(h):h.currentStyle;if(i&&i[a]!==b)for(e=0;e<c.length;e++)f.write('<link href="'+c[e]+'" '+d+"/>")}("position","absolute",["\/lib\/bootstrap\/dist\/css\/bootstrap.min.css"], "rel=\u0022stylesheet\u0022 ");</script>  
</head>

<body>

     <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Knowledge Base</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href=""></a></li>
		      <li><a href="index.php">Home</a></li>
		      <li><a href="aws_exam.php">AWS Exam</a></li>
		      <li><a href="pluralsight.php">Pluralsight</a></li>
		      <li><a href="logout.php">Logout</a></li>
		      <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container body-content">  
	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">
    		<ol class="carousel-indicators">
        		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        		<li data-target="#myCarousel" data-slide-to="1"></li>
        		<li data-target="#myCarousel" data-slide-to="2"></li>
        		<li data-target="#myCarousel" data-slide-to="3"></li>
    		</ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/images/banner1.svg" alt="ASP.NET" class="img-responsive" />
            
        </div>
    </div>
</div>

<br>
<br>
<br>

<div class="row">

	<h4>PowerShell</h4>
       <ul>
			<li><a href="https://app.pluralsight.com/library/courses/building-powershell-security-tools-windows-environment/table-of-contents">Building PowerShell Security Tools - (2h 49m / 20 Mar 201  </a></li>
       </ul>

	   <h4>AWS</h4>
       <ul>
			<li><a href="https://app.pluralsight.com/library/courses/aws-load-balancing-implementing/table-of-contents">Implementing AWS Load Balancing - (1h 25m / 14 Mar 2019)</a></li>
			<li><a href="https://app.pluralsight.com/library/courses/aws-operations-designing-infrastructure-deployment/table-of-contents">Designing Infrastructure Deployment on AWS - (1h 36m / 20 Mar 2019)</a></li>
			<li><a href="https://app.pluralsight.com/library/courses/identity-access-management-aws-designing-implementing/table-of-contents">IAM : Designing and Implementing an AWS Organization - (2h 24m / 26 Feb 2019)</a></li>
			<li><a href="https://app.pluralsight.com/library/courses/identity-access-management-aws-policies-permissions/table-of-contents">IAM : Policies and Permissions - (2h 21m / 26 Feb 2019)</a></li>
			<li><a href="https://app.pluralsight.com/library/courses/identity-access-management-aws-roles-groups/table-of-contents">IAM : Roles and Groups - (2h 30m / 25 Feb 2019)</a></li>
			<li><a href="https://app.pluralsight.com/library/courses/identity-access-management-aws-users/table-of-contents">IAM : Users - (1h 43m / 22 Feb 2019)</a></li>
			<li><a href="https://app.pluralsight.com/library/courses/aws-amazon-rds/table-of-contents">Creating, Connecting, and Monitoring Databases with Amazon RDS - (1h 49m / 20 Feb 2019)</a></li>
			<li><a href="https://app.pluralsight.com/library/courses/aws-ec2-auto-scaling-implementing/table-of-contents">Implementing AWS EC2 Auto Scaling - (1h 10m / 14 Feb 2019)</a></li>
       </ul>

	   <h4>VMware</h4>
       <ul>
			<li><a href="https://app.pluralsight.com/library/courses/designing-implementing-managing-vmware-vsan-production/table-of-contents">Designing, Implementing, and Managing VMware vSAN - (2h 29m / 19 Feb 2019)</a></li>
       </ul>
	   <h4>Linux System Administration</h4>
       <ul>
			<li><a href="https://app.pluralsight.com/library/courses/getting-started-linux-system-administration/table-of-contents">Getting Started with Linux System Administration - (1h 10m / 13 Feb 2019)</a></li>
			<li><a href="https://app.pluralsight.com/library/courses/getting-started-linux-command-line/table-of-contents">Getting Started with the Linux Command Line - (1h 3m / 30 Jan 2019)</a></li>
			<li><a href="https://app.pluralsight.com/library/courses/getting-started-linux/table-of-contents">Getting Started with Linux - (1h 44m / 26 Jan 2019)</a></li>
       </ul>

		<h4>Other</h4>
        <ul>
            <li><a href="https://app.pluralsight.com/library/courses/vmware-cloud-on-aws-fundamentals/table-of-contents">VMware Cloud on AWS Fundamentals</a></li>
            <li><a href="https://app.pluralsight.com/library/courses/fundamentals-storage-virtualization/table-of-contents">Fundamentals of Storage Virtualization</a></li>
        </ul>
</div>

        <hr />
<?php include 'footer.php';?>

    </div>   
</body>
</html>
