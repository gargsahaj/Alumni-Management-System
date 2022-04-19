<?php
session_start();
$selected=$_POST['sel'];
$val=$_POST['val'];
$student=$_SESSION['username'];
$conn=mysqli_connect('127.0.0.1:3307','root','ameta1234','ams');
if(! $conn){
	die('Could not connect: '.mysqli_error());
}
if($selected=='Alumni Name')
{
	
	$q="SELECT * from user,alumni where user.gmail=alumni.gmail and name like '%$val%' ";
}
elseif ($selected=='Company Name') {

	$q="SELECT * from user,alumni where user.gmail=alumni.gmail and company like '%$val%' ";# code...
}   
else
{
$q="SELECT * from user,alumni where user.gmail=alumni.gmail and year_pass ='$val'";	
}
$result=mysqli_query($conn,$q);
$row=mysqli_num_rows($result);
$i=0;
while($res=mysqli_fetch_assoc($result))
{    
$arr[$i]['name']=$res['name'];	
$arr[$i]['gmail']=$res['gmail'];	
$arr[$i]['phone_no']=$res['phone_no'];	
$arr[$i]['branch']=$res['branch'];	
$arr[$i]['year_pass']=$res['year_pass'];	
$arr[$i]['company']=$res['company'];
$arr[$i]['designation']=$res['designation'];
$i++;

}
$q2="SELECT * from connection where sgmail='$student'";
$result2=mysqli_query($conn,$q2);
$k=0;
while($res=mysqli_fetch_assoc($result2))
{    
$arr2[$k]['agmail']=$res['agmail'];	
$arr2[$k]['status']=$res['status'];	
$k++;
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
    <script type="text/javascript">
    	function fun(i)
    	{ 
    		  var req=new XMLHttpRequest();
            req.open("GET","http://localhost/Alumni Management System/ajax2.php?x="+i,false);
            req.send();  
        
        }
    </script>
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
								
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><p><?php echo $_SESSION['username'] ?></p></li>		
			</div>		
		</div>	
	</div>
	
	<div style='position:relative;top:50px;'>
		<h3>Search result</h3>
	 <table style="width:100%;color:black;">
  <tr>
    <th>Name</th>
    <th>Gmail</th> 
    <th>Phone no</th>
     <th>Branch</th>
    <th>year of passing</th> 
    <th>Company</th>
    <th>Designation</th>
    <th>Status</th>
  </tr>
  	<?php
    for($j=0;$j<$i;$j++)
    {
    	echo '<tr>';
    echo '<td>'.$arr[$j]['name'].'</td>';	
    echo '<td>'.$arr[$j]['gmail'].'</td>';
    echo '<td>'.$arr[$j]['phone_no'].'</td>';
     echo '<td>'.$arr[$j]['branch'].'</td>';	
    echo '<td>'.$arr[$j]['year_pass'].'</td>';
    echo '<td>'.$arr[$j]['company'].'</td>';
    echo '<td>'.$arr[$j]['designation'].'</td>';
    for($t=0;$t<$k;$t++)
    {
     if($arr[$j]['gmail']==$arr2[$t]['agmail'])	
     {
    	if($arr2[$t]['status']==0)
    	{
    	  echo '<td>requested</td>';
    	  break;	
    	}
    	else
    	{
    	 echo '<td>connected</td>';	
    	 break;
    	}
     }
    }
   if($t==$k)
   {
   	echo "<td><button id=".$arr[$j]['gmail']." onclick=fun(this.id)>send request</button></td>";
   }
echo '</tr>';
    }
    ?>
     
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
