<?php

/*session_start();
$nam= $_SESSION["name"];*/
include "conn.php";
/*if($nam==''){
    echo "<script> location.href='login.php'; </script>";
}*/


/*date */


include "conn.php";
$filename = 'HCL Feedback '.'.csv';
if(isset($_POST['download'])){
// POST values
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];

// Select query
$query = "SELECT * FROM tbl_manage ORDER BY id asc";

if(isset($_POST['from_date']) && isset($_POST['to_date'])){
   $query = "SELECT * FROM tbl_manage where date '".$from_date."' and '".$to_date."' ORDER BY id asc";
}

$result = mysqli_query($conn,$query);
$employee_arr = array();
$employee_arr1 = array();

// file creation
$file = fopen($filename,"w");

// Header row - Remove this code if you don't want a header row in the export file.
 $csv_fields=array();

$csv_fields[] = 'id';
$csv_fields[] = 'Name';
$csv_fields[] = 'email';
$csv_fields[] = 'Suggestion';
$csv_fields[] = 'date';
$csv_fields[] = '1.How Satisfied with our Products';
$csv_fields[] = '2.How long have you been using the product?';
$csv_fields[] = '3.How easy is this product to use';
$csv_fields[] = '4.How likely are you to use this product over similar platforms ';
$csv_fields[] = '5.How often do you use our products';
$csv_fields[] = '6.Overall how do you rate the application';
$csv_fields[] = '7.What impressed you most about the product/service? ';
$csv_fields[] = '8.How would you compare our products to our competitor';

$csv_fields1[] = ' AVG';



fputcsv($file,$csv_fields); 
fputcsv($file,$csv_fields1); 





while($row = mysqli_fetch_assoc($result)){
   $id = $row['id'];
   $name = $row['name'];
   $email = $row['email'];
   $Suggestion = $row['Suggestion'];
   $date = $row['date'];
   $Satisfied = $row['Satisfied'];
   $how_long = $row['how_long'];
   $easy = $row['easy'];
   $similar = $row['similar'];
   $often = $row['often'];
   $Overall = $row['Overall'];
   $impressed = $row['impressed'];
   $compare = $row['compare'];
   
   
 
   // Write to file 
   $employee_arr = array($id,$name, $email,$Suggestion,$date, $Satisfied,$how_long,$easy,$similar,
    $often,$Overall,$impressed,$compare);
   
   
  fputcsv($file,$employee_arr); 
  
  
  
}
$avg1='';
$avg2='';
$avg3='';
$avg4='';
 $avg17= "SELECT AVG(Satisfied)AS AVGS17 FROM tbl_manage";
$res17= mysqli_query ($conn,$avg17);

$fetch17= mysqli_fetch_assoc($res17);
$entire_syllbus17 = $fetch17['AVGS17'];
   
   /*Curriculum  */
$avg19= "SELECT AVG(how_long)AS AVGS19 FROM tbl_manage";
$res19= mysqli_query ($conn,$avg19);

$fetch19= mysqli_fetch_assoc($res19);
$entire_syllbus19 = $fetch19['AVGS19'];

/*administrative_matters  */
$avg22= "SELECT AVG(easy)AS AVGS22 FROM tbl_manage";
$res22= mysqli_query ($conn,$avg22);

$fetch22= mysqli_fetch_assoc($res22);
$entire_syllbus22 = $fetch22['AVGS22'];

/*rooms_available  */
$avg23= "SELECT AVG(similar)AS AVGS23 FROM tbl_manage";
$res23= mysqli_query ($conn,$avg23);

$fetch23= mysqli_fetch_assoc($res23);
$entire_syllbus23 = $fetch23['AVGS23'];

/*toilets_cleaned  */
$avg24= "SELECT AVG(often)AS AVGS24 FROM tbl_manage";
$res24= mysqli_query ($conn,$avg24);

$fetch24= mysqli_fetch_assoc($res24);
$entire_syllbus24 = $fetch24['AVGS24'];

/*drinking_water  */
$avg28= "SELECT AVG(Overall)AS AVGS28 FROM tbl_manage";
$res28= mysqli_query ($conn,$avg28);

$fetch28= mysqli_fetch_assoc($res28);
$entire_syllbus28 = $fetch28['AVGS28'];

/*placement_cell  */
$avg26= "SELECT AVG(impressed)AS AVGS26 FROM tbl_manage";
$res26= mysqli_query ($conn,$avg26);

$fetch26= mysqli_fetch_assoc($res26);
$entire_syllbus26 = $fetch26['AVGS26'];


$avg21= "SELECT AVG(compare)AS AVGS21 FROM tbl_manage";
$res21= mysqli_query ($conn,$avg21);

$fetch21= mysqli_fetch_assoc($res21);
$entire_syllbus21 = $fetch21['AVGS21'];




   
$avg = Average;
$employee_arr1 = array($avg1,$avg2,$avg3,$avg4,$avg,$entire_syllbus17,$entire_syllbus19,$entire_syllbus22,$entire_syllbus23,$entire_syllbus24,$entire_syllbus28,$entire_syllbus26,$entire_syllbus21);
   
   
    fputcsv($file,$employee_arr1); 
    
    
fclose($file);

// download
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=$filename");
header("Content-Type: application/csv; ");


readfile($filename);

// deleting file
unlink($filename);
exit();

}







?>

<!doctype html>
<html lang="en">
    

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="fontawesome-all.css">
    <link rel="stylesheet" href="jqvmap.css">
    <link rel="stylesheet" href="jquery-jvectormap-2.0.2.css">
    <link rel="stylesheet" href="flag-icon.min.css">
    <title></title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <!-- <div class="dashboard-main-wrapper">    -->
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <!-- <div class="dashboard-header">
 -->       <!--      <nav class="navbar navbar-expand-lg bg-white fixed-top"> -->
                <a class="navbar-brand" href="index.php">  <!-- <?php echo   $_SESSION["name"]; ?>  -->  </a>
                
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                          
                        </li>
                        
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">   
                            </a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                               
                                
                                
                                <a class="dropdown-item" href="index.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark" style="width:250px";>
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="dashboard.php"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                    </ul>
                                </div>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link active" href="manage_feedback.php" ></i> Feedback</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    
                                </div>
                            </li>
                          
                            
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pagehader  -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- pagehader  -->
                <!-- ============================================================== -->
             
                <!-- ============================================================== -->
                <!-- revenue  -->
                <!-- ============================================================== -->
           
               
               
               
               
               
                <div class="row" >
                    
                       <?php
                 $sql1="SELECT * FROM tbl_feedback";
                $res1= mysqli_query($conn,$sql1);
                
                ?>
                
                    <!-- ============================================================== -->
                    <!-- Staff  -->
                    <!-- ============================================================== -->
                    
                    <!-- ============================================================== -->
                    <!-- end top selling products  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- revenue locations  -->
                    <!-- ============================================================== -->
                   
                    <!-- ============================================================== -->
                    <!-- end revenue locations  -->
                    <!-- ======
                        ======================================================== -->
                      <div>
                        
                        <a href="index.php"  style="margin-left: 900px;">Logout</a>   

                    </div>
                </div><br>
                    
                
  <form method="post">
                <div class="row" Style="margin-left:-150px;">
                 </div>
                 <!-- date -->
                 <label for="from_date">From Date:</label>
                <input type="date" id="from_date" name="from_date">&nbsp 
  
  
                <label for="to_date">To Date :</label>
                <input type="date" id="to_date" name="to_date">
                
                <button  name="download">Download </button>
                </form>
                <br><br>
                    
                    
                    <!--  -->
                  <div class="row">
                  
                        <?php
                 $sql="SELECT * FROM tbl_manage ";
                $res= mysqli_query($conn,$sql);
                
                ?>
                
                    
                    
                    
                    
                    
                    
                    
                 
                    
                    
                    
                    
                    
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12" style=" margin-left: 165px; margin-right: -512px;">
                        <div class="card" style="margin-left:-160px; margin-right:-300px; margin-top:20px;">
                            <h5 class="card-header"> </h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                 <th class="border-0" title="i" style="padding-bottom: 30px;">S.No</th>
                                                 <th class="border-0" title="Name" style="padding-bottom: 30px;">Name</th>
                                                 <th class="border-0" title="E-mail" style="padding-bottom: 30px;">E-mail</th>
                                                 <th class="border-0" title="Suggestion" style="padding-bottom: 30px;">Suggestion</th>
                                                 
                                                <th class="border-0" title="How Satisfied with our Products">1. How Satisfied with our Products..</th>
                                                <th class="border-0" title="How long have you been using the product?">2.How long using product</th>
                                                <th class="border-0" title="How easy is this product to use?">3.How easy is product to use</th>
                                                <th class="border-0" title="How likely are you to use this product over similar platforms?">4.product over similar platforms?..</th>
                                                <th class="border-0" title="How often do you use our products">5.often do you use our products</th>
                                                <th class="border-0" title="Overall how do you rate the application."> 6.Overall how do you rate the application....</th>
                                                <th class="border-0" title="What impressed you most about the product/service?">7. What Impressed you about product/service?..</th>
                                                <th class="border-0" title="How would you compare our products to our competitor's?">8. How would Compare our products to our competitor's?...  </th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody> <?php  $i=0; while  ($fetch= mysqli_fetch_assoc($res) ){$i++;?>
                                            <tr>
                                                <td><?php echo $i; ?> </td>
                                                <td><?php echo  $fetch['name'];?> </td>
                                                <td><?php echo  $fetch['email'];?> </td>
                                                <td><?php echo  $fetch['Suggestion'];?> </td>
                                                <td><?php echo  $fetch['Satisfied'];?> </td> 
                                                <td><?php echo  $fetch['how_long'];?> </td> 
                                                <td><?php echo  $fetch['easy'];?> </td> 
                                                <td><?php echo  $fetch['similar'];?> </td> 
                                                <td><?php echo  $fetch['often'];?> </td> 
                                                <td><?php echo  $fetch['Overall'];?> </td> 
                                                <td><?php echo  $fetch['impressed'];?> </td> 
                                                <td><?php echo  $fetch['compare'];?> </td> 
                                                
                                                
                                                <?php }?>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end top selling products  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- revenue locations  -->
                    <!-- ============================================================== -->
                   
                    <!-- ============================================================== -->
                    <!-- end revenue locations  -->
                    <!-- ============================================================== -->
                </div>
                <div class="row" style="flex-wrap: wrap; margin-right: -15px; margin-left: -205px;">
                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                        <!-- ============================================================== -->
                        <!-- social source  -->
                        <!-- ============================================================== -->
                     
                        <!-- ============================================================== -->
                        <!-- end social source  -->
                        <!-- ============================================================== -->
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <!-- ============================================================== -->
                        <!-- sales traffice source  -->
                        <!-- ============================================================== -->
                        
                    </div>
                    <!-- ============================================================== -->
                    <!-- end sales traffice source  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- sales traffic country source  -->
                    <!-- ============================================================== -->
                 
                    <!-- ============================================================== -->
                    <!-- end sales traffice country source  -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 js-->
    <script src="jquery-3.3.1.min.js"></script>
    <!-- bootstrap bundle js-->
    <script src="bootstrap.bundle.js"></script>
    <!-- slimscroll js-->
    <script src="jquery.slimscroll.js"></script>
    <!-- chartjs js-->
    <script src="Chart.bundle.js"></script>
    <script src="chartjs.js"></script>
   
    <!-- main js-->
    <script src="main-js.js"></script>
    <!-- jvactormap js-->
    <script src="jquery-jvectormap-2.0.2.min.js"></script>
    <script src="jquery-jvectormap-world-mill-en.js"></script>
    <!-- sparkline js-->
    <script src="jquery.sparkline.js"></script>
    <script src="spark-js.js"></script>
     <!-- dashboard sales js-->
    <script src="dashboard-sales.js"></script>
</body>
 
</html>