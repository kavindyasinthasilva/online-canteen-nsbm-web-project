<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	

		<title>Canteen Shopping Systems</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>
		
		
		
         
		
	
    <style>
        #navigation {
         

         




          
        }
        #header {
  
            background: #780206;  
            background: -webkit-linear-gradient(to right, #061161, #780206);  
            background: linear-gradient(to right, #061161, #780206); /
            background-image: url("nsbm-2020.jpg");
            background-image: url("nsbm-2020.jpg");



  
        }
        #top-header {
              
  
            background: #870000;  
            background: -webkit-linear-gradient(to right, #190A05, #870000); 
            background: linear-gradient(to right, #190A05, #870000); 


        }
        #footer {
            background: #7474BF; 
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF); 
            background: linear-gradient(to right, #348AC7, #7474BF); 
            background-image: url("nsbm-2020.jpg");



          color: #1E1F29;
        }
        #bottom-footer {
            background: #7474BF;  
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  
            background: linear-gradient(to right, #348AC7, #7474BF); 
          

        }
        .footer-links li a {
          color: #1E1F29;
        }
        .mainn-raised {
            
            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }

        .developerb a{

        	text-align: right;
        	margin-right: 200px;
        	border-style: solid;
        
        	background-color:#9A2C2C;
        	border-radius: 50px;

        
 




        }
 .sky img{



 height: 20%;
 width: 20%;

 position: 20%;

 padding-bottom: -30%;






        }
       
        .glyphicon{
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;

      background-image: url("nsbm-2020.jpg");
    }
    .glyphicon-chevron-left:before{
        content:"\f053"
    }
    .glyphicon-chevron-right:before{
        content:"\f054"
    }
        

       
        
        </style>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +(94)712978152</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> skysiva@students.nsbm.lk</a></li>
						<li><a href="https://www.google.com/maps/dir//nsbm+l/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x3ae25a48d2a0302d:0xddb466719c0595db?sa=X&ved=2ahUKEwiIvJeOzdrmAhWa7XMBHRQRDEcQ9RcwD3oECAwQDg"><i class="fa fa-map-marker"></i>nsbm</a></li>
						<li><a href="https://www.facebook.com/nsbm.lk/"><i class="fa fa-facebook"></i>facebook</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="	fa fa-graduation-cap"></i> English</a></li>
						<li><?php
                             include "db.php";
                            if(isset($_SESSION["uid"])){
                                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                
                                echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI '.$row["first_name"].'</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';

                            }else{ 
                                echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    
                                  </div>
                                </div>';
                                
                            }
                                             ?>
                               
                                </li>				
					</ul>
					
				</div>
			</div>
			<!-- /TOP HEADER -->
			
			

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="http://www.nsbm.ac.lk/" class="logo">
								<font style="font-style:normal; font-size: 33px; color:#ffff;font-family: serif">
                                        Online canteen shop.
                                    </font> 
                                    <a href="http://www.nsbm.ac.lk/">


									
								</a>
								<div class="sky">

									<img src="NSBM_Green_University_seal.png" alt="Italian Trulli" sizes="30 ">
									

								</div>


							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Indian food</option>
										<option value="1">Sinhala food </option>
										<option value="1">Italy food </option>
										<option value="1">cloths </option>
									</select>
									<input class="input" id="search" type="text" placeholder="Search here">
									<button type="submit" id="search_btn" class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="http://localhost/online-shopping-system-advanced-master/online-shopping-system-advanced-master/admin/manage_users.php">
										<i class="fa fa-automobile"></i>
										<span>Developer</span>
										
									</a>
								</div>


								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="badge qty">0</div>
									</a>
									<div class="cart-dropdown"  >
										<div class="cart-list" id="cart_product">
										
											
										</div>
										
										<div class="cart-btns">
												<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  Apply cart/beay </a>
											
										</div>
									</div>
										
									</div>





							





								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
		<nav id='navigation'>
			<!-- container -->
            <div class="container" id="get_category_home">
                
            </div>
				<!-- responsive-nav -->
				
			<!-- /container -->
		</nav>
            

		<!-- NAVIGATION -->
		
		<div class="modal fade" id="Modal_login" role="dialog">
                        <div class="modal-dialog">
													
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "login_form.php";
    
                            ?>
          
                            </div>
                            
                          </div>
													
                        </div>
                      </div>
                <div class="modal fade" id="Modal_register" role="dialog">
                        <div class="modal-dialog" style="">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "register_form.php";
    
                            ?>
          
                            </div>
                            
                          </div>

                        </div>
                      </div>
		