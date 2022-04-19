<?php
session_start();
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
	<link rel="stylesheet" href="css/style1.css">
    <script>
        function fun1(i1,i2)
        {
            var s1=document.getElementById(i1);
            var s2=document.getElementById(i2);
            s2.innerHTML=s1.value;
        }
    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color: #DDD;">
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
								<li role="presentation"><a href="logout.php">logout</a></li>

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
				<li><a href="index.html">Home</a></li>
				<li><?php echo $_SESSION['username']?></li>			
			</div>		
		</div>	
	</div>
	<div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
            	 <div class="row">
            	 	<div class="col-md-3"></div>
            	 	<div class="col-md-7" style="margin-left: 10px">
	                	<h1><span>Search Alumni </span></h1>
	                </div>
	                <div class="col-md-2"></div>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="show_search_result.php" autocomplete="on" method="POST"> 
                            	<p style="text-align: center;margin-top: 10px; font-size: 30px;"><strong>ALUMNI</strong></p>
                                <h1 style="font-size: 0px">Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > search by </label>
                                    <select class="input" id="username" onclick=fun1(this.id,"para1") name="sel" required>
                                       <option disabled="disabled" selected>select</option>
                                       <option>Alumni Name</option>
                                       <option>Company Name</option>
                                       <option>Year of passing</option>
                                   </select>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"><h4 id='para1'></h4></label>
                                    <input id="password" name="val" required="required" type="text" /> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Search" /> 
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="alumni_signup.php" autocomplete="on" method="post"> 
                                <p style="text-align: center;margin-top: 10px; font-size: 30px;"><strong>ALUMNI</strong></p>
                                <h1 style="font-size: 0px;"> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="phone_no" class="phone" data-icon="m">Mobile No.</label>
                                    <input id="phone_no" name="phone_no" required="required" type="text" placeholder="9876543210" />
                                </p>
                                <p> 
                                    <label for="branch" class="branch" data-icon="b">Your Branch</label>
                                    <input id="branch" name="branch" required="required" type="text" placeholder="CSE" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="year_pass" class="year_pass" data-icon="u">Year of Passing</label>
                                    <input id="year_pass" name="year_pass" required="required" type="text" placeholder="2018" />
                                </p>
                                <p> 
                                    <label for="company" class="company" data-icon="u">Company</label>
                                    <input id="company" name="company" required="required" type="text" placeholder="TCS" />
                                </p>
                                <p> 
                                    <label for="designation" class="designation" data-icon="b">Your Designation</label>
                                    <input id="designation" name="designation" required="required" type="text" placeholder="Product Manager" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
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