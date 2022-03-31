<?php
   include 'conn.php';
   
   
   /*Satisfied  */
   $avg19= "SELECT AVG(Satisfied)AS AVGS19 FROM tbl_manage";
   $res19= mysqli_query ($conn,$avg19);
   
   $fetch19= mysqli_fetch_assoc($res19);
   $entire_syllbus19 = $fetch19['AVGS19'];
   
   /*how_long  */
   $avg20= "SELECT AVG(how_long)AS AVGS20 FROM tbl_manage";
   $res20= mysqli_query ($conn,$avg20);
   
   $fetch20= mysqli_fetch_assoc($res20);
   $entire_syllbus20 = $fetch20['AVGS20'];
   
   /*easy  */
   $avg21= "SELECT AVG(easy)AS AVGS21 FROM tbl_manage";
   $res21= mysqli_query ($conn,$avg21);
   
   $fetch21= mysqli_fetch_assoc($res21);
   $entire_syllbus21 = $fetch21['AVGS21'];
   
   
   /*similar  */
   $avg22= "SELECT AVG(similar)AS AVGS22 FROM tbl_manage";
   $res22= mysqli_query ($conn,$avg22);
   
   $fetch22= mysqli_fetch_assoc($res22);
   $entire_syllbus22 = $fetch22['AVGS22'];
   
   /*often  */
   $avg23= "SELECT AVG(often)AS AVGS23 FROM tbl_manage";
   $res23= mysqli_query ($conn,$avg23);
   
   $fetch23= mysqli_fetch_assoc($res23);
   $entire_syllbus23 = $fetch23['AVGS23'];
   
   /*Overall  */
   $avg24= "SELECT AVG(Overall)AS AVGS24 FROM tbl_manage";
   $res24= mysqli_query ($conn,$avg24);
   
   $fetch24= mysqli_fetch_assoc($res24);
   $entire_syllbus24 = $fetch24['AVGS24'];
   
   
   
   /*impressed   */
   $avg25= "SELECT AVG(impressed)AS AVGS25 FROM tbl_manage";
   $res25= mysqli_query ($conn,$avg25);
   
   $fetch25= mysqli_fetch_assoc($res25);
   $entire_syllbus25 = $fetch25['AVGS25'];
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
         * {
         box-sizing: border-box;
         } 
         .column1 {
         float: left;
         width: 25%;
         padding: 5px;
         height: 130px; 
         }
         .column2 {
         float: left;
         width: 65%;
         padding: 10px;
         height: 130px;
         }
         /*.row{
         -webkit-box-shadow: 0 0 5px 2px lightgray;
         -moz-box-shadow: 0 0 5px 2px lightgray;
         box-shadow: 0 0 5px 2px lightgray;
         border-radius:0px;
         }*/
         .row:after {
         content: "";
         display: table;
         clear: both;
         }
      </style>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
         .checked {
         color: orange;
         }
      </style>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="bootstrap.min.css">
      <link href="style2.css" rel="stylesheet">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
      <link rel="stylesheet" href="jqvmap.css">
      <link rel="stylesheet" href="jquery-jvectormap-2.0.2.css">
      <link rel="stylesheet" href="flag-icon.min.css">
      <title>Admin page</title>
   </head>
   <body>
      <div class="row">
      <div class="column1" >
         <div class="nav-left-sidebar sidebar-dark" >
            <div class="menu-list">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav flex-column">
                        <li class="nav-divider" style="color:#fff;">
                           Menu 
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link active" href="dashboard.php"></i>Dashboard <span class="badge badge-success">6</span></a>
                           <div id="submenu-1" class="collapse submenu" style="">
                              <ul class="nav flex-column">
                              </ul>
                           </div>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="manage_feedback.php" ></i> Feedback</a>
                           <div id="submenu-3" class="collapse submenu" style="">
                           </div>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
      <div class="column2"  >
         <div>
            <div class="row" >
               <div>
                  <br>
                  <a href="index.php"  style="margin-left: 900px;">Logout</a>   
               </div>
               <br>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <br>
                  <div class="card" title="How Satisfied with our Products ">
                     <div class="card-body">
                        <h5   class="text-muted">1.How Satisfied with our Products.. </h5>
                        <div class="metric-value d-inline-block">
                           <div>
                              <?php  if(round($entire_syllbus19) ==1) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus19) ==2) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus19) ==3) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus19) ==4) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus19) ==5) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <?php } ?>
                           </div>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success">
                           <i ></i><span></span>
                        </div>
                     </div>
                     <div id="sparkline-1"></div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <br>
                  <div class="card">
                     <div class="card-body" title="How long have you been using the product? ">
                        <h5   class="text-muted">2.How long have you been using the product?..   </h5>
                        <div class="metric-value d-inline-block">
                           <div>
                              <?php  if(round($entire_syllbus20) ==1) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus20) ==2) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus20) ==3) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus20) ==4) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus20) ==5) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <?php } ?>
                           </div>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success">
                           <i ></i><span></span>
                        </div>
                     </div>
                     <div id="sparkline-1"></div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <br>
                  <div class="card" title="How easy is this product to use?">
                     <div class="card-body">
                        <h5   class="text-muted">3.How easy is this product to use?... </h5>
                        <div class="metric-value d-inline-block">
                           <div>
                              <?php  if(round($entire_syllbus19) ==1) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus19) ==2) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus19) ==3) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus19) ==4) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus19) ==5) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <?php } ?>
                           </div>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success">
                           <i ></i><span></span>
                        </div>
                     </div>
                     <div id="sparkline-1"></div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <br>
                  <div class="card">
                     <div class="card-body" title="How likely are you to use this product over similar platforms?">
                        <h5   class="text-muted">4.Use this product over similar platforms?..   </h5>
                        <div class="metric-value d-inline-block">
                           <div>
                              <?php  if(round($entire_syllbus20) ==1) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus20) ==2) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus20) ==3) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus20) ==4) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus20) ==5) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <?php } ?>
                           </div>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success">
                           <i ></i><span></span>
                        </div>
                     </div>
                     <div id="sparkline-1"></div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card">
                     <div class="card-body" title="How often do you use our products">
                        <h5   class="text-muted">5.How often do you use our products...  </h5>
                        <div class="metric-value d-inline-block">
                           <div>
                              <?php  if(round($entire_syllbus21) ==1) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus21) ==2) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus21) ==3) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus21) ==4) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus21) ==5) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <?php } ?>
                           </div>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success">
                           <i ></i><span></span>
                        </div>
                     </div>
                     <div id="sparkline-1"></div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card" title="Overall how do you rate the application.">
                     <div class="card-body">
                        <h5   class="text-muted">6.Overall how do you rate the application....    </h5>
                        <div class="metric-value d-inline-block">
                           <div>
                              <?php  if(round($entire_syllbus22) ==1) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus22) ==2) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus22) ==3) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus22) ==4) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus22) ==5) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <?php } ?>
                           </div>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success">
                           <i ></i><span></span>
                        </div>
                     </div>
                     <div id="sparkline-1"></div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card" title="What impressed you most about the product/service? ">
                     <div class="card-body">
                        <h5   class="text-muted">. 7.Impressed you about product/service?..   </h5>
                        <div class="metric-value d-inline-block">
                           <div>
                              <?php  if(round($entire_syllbus23) ==1) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus23) ==2) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus23) ==3) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus23) ==4) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus23) ==5) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <?php } ?>
                           </div>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success">
                           <i ></i><span></span>
                        </div>
                     </div>
                     <div id="sparkline-1"></div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card"  title="How would you compare our products to our competitor's?">
                     <div class="card-body">
                        <h5  class="text-muted">8.Compare our products to our competitor's?...   </h5>
                        <div class="metric-value d-inline-block">
                           <div>
                              <?php  if(round($entire_syllbus24) ==1) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus24) ==2) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus24) ==3) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } 
                                 else if(round($entire_syllbus24) ==4) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <?php }  
                                 else if(round($entire_syllbus24) ==5) { ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <?php } ?>
                           </div>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success">
                           <i ></i><span></span>
                        </div>
                     </div>
                     <div id="sparkline-1"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <p></p>
   </body>
</html>
<link rel="shortcut icon" type="image/x-icon" href="img/logo_puc.png">
<!-- Animate CSS -->
<link rel="stylesheet" href="css/animate.min.css">
<!-- Font-awesome CSS-->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Owl Caousel CSS -->
<link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
<link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
<!-- Main Menu CSS -->
<link rel="stylesheet" href="css/meanmenu.min.css">
<!-- Select2 CSS -->
<link rel="stylesheet" href="css/select2.min.css">
<!-- Magnific CSS -->
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="style.css">