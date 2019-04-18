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
   
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css" />
<meta name="x-stylesheet-fallback-test" content="" class="sr-only" /><script>!function(a,b,c,d){var e,f=document,g=f.getElementsByTagName("SCRIPT"),h=g[g.length-1].previousElementSibling,i=f.defaultView&&f.defaultView.getComputedStyle?f.defaultView.getComputedStyle(h):h.currentStyle;if(i&&i[a]!==b)for(e=0;e<c.length;e++)f.write('<link href="'+c[e]+'" '+d+"/>")}("position","absolute",["\/lib\/bootstrap\/dist\/css\/bootstrap.min.css"], "rel=\u0022stylesheet\u0022 ");</script>  
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
                <a class="navbar-brand">KB</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="../index.php">Home</a></li>
					<li><a href="../KB.php">KB</a></li>
                    <li><a href="../logout.php">Logout</a></li>
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
<h4>Below is a list of common protocols and their more-or-less "standard" port numbers. (Ports are TCP unless
otherwise noted.)</h4>

DHCP		: Port 67 (UDP)
<br><br>
DNS		: Port 53 (UDP or TCP)
<br><br>
Echo		: Port 7
<br><br>
FTP		: Port 21 (Data channel for Active FTP: 20)
<br><br>
Gopher		: Port 70
<br><br>
HTTP		: Port 80
<br><br>
HTTPS		: Port 443
<br><br>
IKE		: Port 500 (UDP)
<br><br>
IMAP		: Port 143
<br><br>
IMAP (SSL)	: Port 993
<br><br>
LDAP		: Port 389
<br><br>
NNTP		: Port 119
<br><br>
POP3		: Port 110
<br><br>
POP3 (SSL)	: Port 995
<br><br>
RDP		: Port 3389
<br><br>
rtelnet		: Port 107
<br><br>
SMTP		: Port 25
<br><br>
SNMP		: Port 161
<br><br>
SQL Probe	: Port 1434 (UDP)
<br><br>
Telnet		: Port 23
<br><br>
TFTP		: Port 69
<br><br>
UUCP		: Port 540
<br><br>
Whois		: Port 43


</div>

        <hr />
<?php include 'footer.php';?>

    </div>   
</body>
</html>
