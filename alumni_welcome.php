<?php
session_start();
$conn=mysqli_connect('127.0.0.1:3307','root','ameta1234','ams');
if(! $conn){
	die('Could not connect: '.mysqli_error());
}
$q='SELECT * from news';
$result=mysqli_query($conn,$q);
$row=mysqli_num_rows($result);
$i=0;
while($res=mysqli_fetch_assoc($result))
{    
$arr[$i]['news_id']=$res['news_id'];	
$arr[$i]['subject']=$res['subject'];	
$arr[$i]['gmail']=$res['gmail'];	
$arr[$i]['date']=$res['date'];	
$arr[$i]['content']=$res['content'];	
$i++;
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company-HTML Bootstrap theme</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1><span>Alumni</span> Management<span> System</span></h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="logout.php" class="active">logout</a></li>	
								<li role="presentation"><a href="connection_req.php" class="active">connection request</a></li>	
								<li role="presentation"><a href="connected_stud.php" class="active">connected student</a></li>											
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb" >							
				<li><p><?php echo $_SESSION['username'];?></p></li>		
			</div>		
		</div>	
	</div>	
	<div style='position:relative;top:50px;'>
		<h3>News</h3>
	 <table style="width:100%;color:black;">
  <tr>
    <th>Date</th>
    <th>Subject</th> 
    <th>Content</th>
  </tr>
  	<?php
    for($j=0;$j<$i;$j++)
    {
    	echo '<tr>';
    echo '<td>'.$arr[$j]['date'].'</td>';	
    echo '<td>'.$arr[$j]['subject'].'</td>';
    echo '<td>'.$arr[$j]['content'].'</td>';
echo '</tr>';
    }
    ?>

</table>
	   </div>
      
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
	
  </body>
</html>