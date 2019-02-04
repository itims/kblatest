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
    <title>KB</title>
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
		      <li><a href="upload.php">Upload Files</a></li>
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
    <div class="col-md-3">
	    <h4>Quick View</h4>
        <h6>Configurations, Error Fixing & Troubleshooting</h6>
        <ul>
           <li><a href="ApacheDefault_page.php">Apache Default Page</a></li>
            <li><a href="Appache2.php">Appache2</a></li>
			<li><a href="Resize_Virtual_Screen_Ubuntu_in_VirtualBox.php">Resize Virtual Screen-Ubuntu in VirtualBox</a></li>
        </ul>
    </div>

<div class="col-md-4">
		<h4>CV</h4>
        <ul>
            <li><a href="files_uploaded/Ashir_Resume.pdf">Resume</a></li>
			<li><a href="files_uploaded/RnR.pdf">RnR</a></li>
        </ul>

		<h4>Cloud Computing</h4>
		<h5>1. AWS SysOps Exam Tips</h5>
        <ul>
            <li><a href="files_uploaded/Monitoring_and_Reporting.pdf">Monitoring & Reporting</a></li>
        </ul>
		<h5>2. VMWare vSphere</h5>
        <ul>
            <li><a href="files_uploaded/VMWare_vSphere.pdf">Monitoring & Reporting</a></li>
        </ul>
</div>
   
<div class="col-md-4">
		<h4>System Administration</h4>
        <ul>
			<li><a href="files_uploaded/IQ_Windows_Admin.pdf">Windows Administration</a></li>
			<li><a href="files_uploaded/IQ_Linux_Admin.pdf">Linux Administration</a></li>
        </ul>
		<h4>Scripts</h4>
        <ul>
			<li><a href="files_uploaded/IQ_PShell.pdf">PowerShell - IQA</a> | <a href="files_uploaded/AD_Obj_with_ PS.pdf">AD with PowerShell</a> | <a href="files_uploaded/PS_Mail_EventLog.pdf">Event Log</a></li>
            <li><a href="files_uploaded/PowerShell_DocVer_2.2 -Contents.pdf">PowerShell Doc - Contents</a> | <a href="files_uploaded/PowerShell_DocVer_2.2.pdf">PowerShell Doc</a></li>
			<li><a href="files_uploaded/Py.pdf">Python</a></li>
        </ul>
		<h4>Tools & Apps</h4>
        <ul>
			<li><a href="files_uploaded/IQ_Apache.pdf">Apache Web Server</a></li>
			<li><a href="files_uploaded/IQ_MDT_WDS.pdf">MDT & WDS</a></li>
			<li><a href="files_uploaded/IQ_VMware.pdf">VMware</a></li>
			<li><a href="files_uploaded/IQ_Nagios.pdf">Nagios</a></li>
			<li><a href="files_uploaded/IQ_SCCM.pdf">SCCM</a></li>
			<li><a href="files_uploaded/IQ_OpenStack.pdf">OpenStack</a></li>
			<li><a href="files_uploaded/IQ_Ansible.pdf">Ansible</a></li>
			<li><a href="files_uploaded/IQ_Exchange.pdf">Mail Server - Exchange</a></li>
			<li><a href="files_uploaded/IQ_Exchange.pdf">Mail Server - Office365</a></li>
			<li><a href="files_uploaded/IQ_Sharepoint.pdf">SharePoint</a></li>
        </ul>

		<h4>Network Administration</h4>
        <ul>
			<li><a href="files_uploaded/IQ_LAN_WAN.pdf">LAN/WAN (VLAN & Routing)</a></li>
			<li><a href="files_uploaded/IQ_Firewall.pdf">Firewall</a></li>
			<li><a href="files_uploaded/IQ_VPN.pdf">VPN (IPsec)</a></li>
        </ul>
</div>

</div>

        <hr />
<?php include 'footer.php';?>

    </div>   
</body>
</html>
