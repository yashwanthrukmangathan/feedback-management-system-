<?php
   include'conn.php';
   
    if (isset($_POST["submited"])){
       
   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
    $name=$_POST['name'];
   $email=$_POST['email'];
   $Satisfied=$_POST['Satisfied'];
   $how_long=$_POST['how_long'];
    $easy=$_POST['easy'];
   $similar=$_POST['similar'];
   $often=$_POST['often'];
   $Overall=$_POST['Overall'];
   $impressed=$_POST['impressed'];
   $compare=$_POST['compare'];
   
   $Suggestion=$_POST['Suggestion'];
   
   $sql="INSERT INTO  tbl_manage (name,email,Satisfied,how_long,easy,similar,often,Overall,impressed,compare,Suggestion)
   VALUES ('$name','$email','$Satisfied','$how_long','$easy','$similar','$often','$Overall','$impressed','$compare','$Suggestion')";
   
   $var= mysqli_query ($conn,$sql);
   
   if($var){
      echo "<script> location.href='thank_you.php'; </script>";
         exit;
       
   }
   else{
       echo mysqli_error($conn);
   }
   }
   ?>
<html class="supernova">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta property="og:title" content="Event Feedback Form" >
      <meta property="og:description" content="Please click the link to complete this form." >
      <meta name="slack-app-id" content="AHNMASS8M">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
      <meta name="HandheldFriendly" content="true" />
      <title>HCL Internship</title>
      <style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
      <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/defaultV2.css?"/>
      <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/themes/CSS/54ab0a7825d790e9458b4567.css?themeRevisionID=6140ad4adf488b0bc30e35a1"/>
      <link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.29319" />
      <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.29319" />
      <style type="text/css" id="form-designer-style">
         /* Injected CSS Code */
         /*PREFERENCES STYLE*/
         .form-all {
         font-family: Inter, sans-serif;
         }
         .form-all .qq-upload-button,
         .form-all .form-submit-button,
         .form-all .form-submit-reset,
         .form-all .form-submit-print {
         font-family: Inter, sans-serif;
         }
         .form-all .form-pagebreak-back-container,
         .form-all .form-pagebreak-next-container {
         font-family: Inter, sans-serif;
         }
         .form-header-group {
         font-family: Inter, sans-serif;
         }
         .form-label {
         font-family: Inter, sans-serif;
         }
         .form-label.form-label-auto {
         display: block;
         float: none;
         text-align: left;
         width: 100%;
         }
         .form-line {
         margin-top: 12px 36px 12px 36px px;
         margin-bottom: 12px 36px 12px 36px px;
         }
         .form-all {
         max-width: 752px;
         width: 100%;
         }
         .form-label.form-label-left,
         .form-label.form-label-right,
         .form-label.form-label-left.form-label-auto,
         .form-label.form-label-right.form-label-auto {
         width: 230px;
         }
         .form-all {
         font-size: 16px
         }
         .form-all .qq-upload-button,
         .form-all .qq-upload-button,
         .form-all .form-submit-button,
         .form-all .form-submit-reset,
         .form-all .form-submit-print {
         font-size: 16px
         }
         .form-all .form-pagebreak-back-container,
         .form-all .form-pagebreak-next-container {
         font-size: 16px
         }
         .supernova .form-all, .form-all {
         background-color: #050606c2; //question
         //opacity:0.9 !important; 
         }
         .form-all {
         color: rgb(255, 255, 255);
         }
         .form-header-group .form-header {
         color: rgb(255, 255, 255); // studentcolor
         }
         .form-header-group .form-subHeader {
         color: rgb(255, 255, 255);
         }
         .form-label-top,
         .form-label-left,
         .form-label-right,
         .form-html,
         .form-checkbox-item label,
         .form-radio-item label {
         color: rgb(255, 255, 255); // question 
         }
         .form-sub-label {
         color: #1E5162;
         }
         .supernova {
         background-color: #1E5162;
         }
         .supernova body {
         background: transparent;
         }
         .form-textbox,
         .form-textarea,
         .form-dropdown,
         .form-radio-other-input,
         .form-checkbox-other-input,
         .form-captcha input,
         .form-spinner input {
         background-color: #fff;
         }
         .supernova {
         height: 100%;
         background-repeat: repeat;
         background-attachment: fixed;
         background-position: center top;
         }
         .supernova {
         background-image: url("image2.jpg");
         }
         #stage {
         background-image: url("https://shots.jotform.com/elton/brick_wall_new_pxb.jpg");
         }
         .form-all {
         background-image: none;
         }
         .ie-8 .form-all:before { display: none; }
         .ie-8 {
         margin-top: auto;
         margin-top: initial;
         }
         /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
         /* Injected CSS Code */
      </style>
      <script src="https://cdn02.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
      <script src="https://cdn03.jotfor.ms/static/jotform.forms.js?3.3.29319" type="text/javascript"></script>
      <script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
      <script src="https://cdn01.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.29319" type="text/javascript"></script>
      <script defer src="https://cdn02.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.29319" type="text/javascript"></script>
      <script defer src="https://cdn03.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.29319" type="text/javascript"></script>
   </head>
   <body>
      <form class="jotform-form" action="" method="post"  accept-charset="utf-8" autocomplete="on">
      <div role="main" class="form-all">
         <style>
            .form-all:before { background: none;}
         </style>
         <ul class="form-section page-section">
            <li id="cid_87" class="form-input-wide" data-type="control_head">
               <div class="form-header-group  header-large">
                  <div class="header-text httal htvam">
                     <h1 id="header_87" class="form-header" data-component="header">
                        Customer Feedback Management System For an IT Organization
                     </h1>
                  </div>
               </div>
            </li>
            <li class="form-line jf-required" data-type="control_scale" id="id_99">
               <label class="form-label form-label-top form-label-auto" id="label_99" for="input_99">
               1.How Satisfied with our Products
               <span class="form-required">
               *
               </span>
               </label>
               <div id="cid_109" class="form-input-wide jf-required" data-layout="full">
                  <span class="form-sub-label-container" style="vertical-align:top">
                     <div role="radiogroup" aria-labelledby="label_109 sublabel_input_109_description" cellPadding="4" cellSpacing="0" class="form-scale-table" data-component="scale">
                        <div class="rating-item-group">
                           <div class="rating-item">
                              <span class="rating-item-title for-from">
                              <label for="input_109_worst" aria-hidden="true">  </label>
                              </span>
                              <input type="radio" aria-describedby="label_109" class="form-radio validate[required]" name="Satisfied" value="1" title="1" id="assessments1" required="" />
                              <label for="assessments1">1</label>

                           </div>
                           <div class="rating-item">
                              <input type="radio" aria-describedby="label_109" class="form-radio validate[required]" name="Satisfied" value="2" title="2" id="assessments2" required="" />
                              <label for="assessments2"> 2 </label>
                           </div>
                           <div class="rating-item">
                              <input type="radio" aria-describedby="label_109" class="form-radio validate[required]" name="Satisfied" value="3" title="3" id="assessments3" required="" />
                              <label for="assessments3"> 3 </label>
                           </div>
                           <div class="rating-item">
                              <input type="radio" aria-describedby="label_109" class="form-radio validate[required]" name="Satisfied" value="4" title="4" id="assessments4" required="" />
                              <label for="assessments4"> 4 </label>
                           </div>
                           <div class="rating-item">
                              <span class="rating-item-title for-to">
                              <label for="input_109_best" aria-hidden="true">  </label>
                              </span>
                              <input type="radio" aria-describedby="label_109" class="form-radio validate[required]" name="Satisfied" value="5" title="5" id="assessments5" required="" />
                              <label for="assessments5"> 5 </label>
                           </div>
                        </div>
                     </div>
                     <label class="form-sub-label" id="sublabel_input_109_description" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false"> 1 is , 5 is </label>
                  </span>
               </div>
            </li>
            <li class="form-line jf-required" data-type="control_rating" id="id_74">
               <label class="form-label form-label-top form-label-auto" id="label_74" for="input_74">
               
               2.How long have you been using the product?
               <span class="form-required">
               *
               </span>
               </label>
               <div id="cid_75" class="form-input-wide jf-required" data-layout="full">
                  <div class="form-single-column" role="group" aria-labelledby="label_75" data-component="radio">
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="Curriculum0" name="how_long" value="1" required="" />
                     <label id="knowledge_subject" for="Curriculum0">Once a Month</label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="Curriculum1" name="how_long" value="2" required="" />
                     <label id="knowledge_subject1" for="Curriculum1">Three Months Once </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="Curriculum2" name="how_long" value="3" required="" />
                     <label id="knowledge_subject2" for="Curriculum2"> Six Months Once</label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="Curriculum3" name="how_long" value="4" required="" />
                     <label id="knowledge_subject3" for="Curriculum3"> More than One Year </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="Curriculum4" name="how_long" value="5" required="" />
                     <label id="knowledge_subject4" for="Curriculum4"> Not at all </label>
                     </span>
                  </div>
               </div>
            </li>
            <li class="form-line jf-required" data-type="control_matrix" id="id_97">
               <label class="form-label form-label-top" id="label_97" for="input_97">
               3.How easy is this product to use?
               <span class="form-required">
               *
               </span>
               </label>
               <div id="cid_75" class="form-input-wide jf-required" data-layout="full">
                  <div class="form-single-column" role="group" aria-labelledby="label_75" data-component="radio">
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="administrative_matters0" name="easy" value="1" required="" />
                     <label id="administrative_matters0" for="administrative_matters0"> Bad </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="administrative_matters1" name="easy" value="2" required="" />
                     <label id="administrative_matters1" for="administrative_matters1"> Somewhat </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="administrative_matters2" name="easy" value="3" required="" />
                     <label id="administrative_matters2" for="administrative_matters2"> Good </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="administrative_matters3" name="easy" value="4" required="" />
                     <label id="administrative_matters3" for="administrative_matters3"> Excellent </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="administrative_matters4" name="easy" value="5" required="" />
                     <label id="administrative_matters4" for="administrative_matters4"> Awesome </label>
                     </span>
                  </div>
               </div>
            </li>
            <li class="form-line jf-required" data-type="control_matrix" id="id_97">
               <label class="form-label form-label-top" id="label_97" for="input_97">
               4.How likely are you to use this product over similar platforms?
               <span class="form-required">
               *
               </span>
               </label>
               <div id="cid_97" class="form-input-wide jf-required" data-layout="full">
                  <table summary="" aria-labelledby="label_97" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix" data-dynamic="true">
                     <tr class="form-matrix-tr form-matrix-header-tr">
                        <th class="form-matrix-th" style="border:none">
                            
                        </th>
                        <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0">
                           <label id="rooms_available_0"> Bad </label>
                        </th>
                        <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_1">
                           <label id="rooms_available_1"> Somewhat </label>
                        </th>
                        <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_2">
                           <label id="rooms_available_2">
                           <span style="display: inline !important;">
                           Good
                           </span>
                           </label>
                        </th>
                        <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_3">
                           <label id="rooms_available_3"> Excellent </label>
                        </th>
                        <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_4">
                           <label id="rooms_available_4">
                           <span style="display: inline !important;">
                           Awesome
                           </span>
                           </label>
                        </th>
                     </tr>
                     <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_97 label_97_row_0">
                        <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                           <label id="label_97_row_0"> Rate </label>
                        </th>
                        <td class="form-matrix-values">
                           <input type="radio" id="rooms_available" class="form-radio validate[required, requireEveryRow]" name="similar" value=" 1" aria-labelledby="label_97_col_0 label_97_row_0" />
                           <label for="rooms_available_0" class="matrix-choice-label matrix-radio-label">  </label>
                        </td>
                        <td class="form-matrix-values">
                           <input type="radio" id="rooms_available_1" class="form-radio validate[required, requireEveryRow]" name="similar" value="2" aria-labelledby="label_97_col_1 label_97_row_0" />
                           <label for="rooms_available_1" class="matrix-choice-label matrix-radio-label">  </label>
                        </td>
                        <td class="form-matrix-values">
                           <input type="radio" id="rooms_available_2" class="form-radio validate[required, requireEveryRow]" name="similar" value="3" aria-labelledby="label_97_col_2 label_97_row_0" />
                           <label for="rooms_available_2" class="matrix-choice-label matrix-radio-label">  </label>
                        </td>
                        <td class="form-matrix-values">
                           <input type="radio" id="rooms_available_3" class="form-radio validate[required, requireEveryRow]" name="similar" value="4" aria-labelledby="label_97_col_3 label_97_row_0" />
                           <label for="rooms_available_3" class="matrix-choice-label matrix-radio-label">  </label>
                        </td>
                        <td class="form-matrix-values">
                           <input type="radio" id="rooms_available_4" class="form-radio validate[required, requireEveryRow]" name="similar" value="5" aria-labelledby="label_97_col_4 label_97_row_0" />
                           <label for="rooms_available_4" class="matrix-choice-label matrix-radio-label">  </label>
                        </td>
                     </tr>
                  </table>
               </div>
            </li>
            <li class="form-line jf-required" data-type="control_rating" id="id_78">
               <label class="form-label form-label-top form-label-auto" id="label_78" for="input_78">
               5.How often do you use our products
               <span class="form-required">
               *
               </span>
               </label>
               <div id="cid_75" class="form-input-wide jf-required" data-layout="full">
                  <div class="form-single-column" role="group" aria-labelledby="label_75" data-component="radio">
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="toilets_cleaned0" name="often" value="1" required="" />
                     <label id="knowledge_subject" for="toilets_cleaned0"> Once a week  </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="toilets_cleaned1" name="often" value="2" required="" />
                     <label id="knowledge_subject1" for="toilets_cleaned1"> 2 to 3 times a month </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="toilets_cleaned2" name="often" value="3" required="" />
                     <label id="knowledge_subject2" for="toilets_cleaned2"> Once a month  </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="toilets_cleaned3" name="often" value="4" required="" />
                     <label id="knowledge_subject3" for="toilets_cleaned3"> Less than  Once a month </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="toilets_cleaned4" name="often" value="5" required="" />
                     <label id="knowledge_subject4" for="toilets_cleaned4"> Not at all </label>
                     </span>
                  </div>
               </div>
            </li>
            <li class="form-line jf-required" data-type="control_matrix" id="id_97">
               <label class="form-label form-label-top" id="label_97" for="input_97">
               6.Overall how do you rate the application.
               <span class="form-required">
               *
               </span>
               </label>
               <div id="cid_75" class="form-input-wide jf-required" data-layout="full">
                  <div class="form-single-column" role="group" aria-labelledby="label_75" data-component="radio">
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="drinking_water0" name="Overall" value="1" required="" />
                     <label id="knowledge_subject" for="drinking_water0"> Bad </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="drinking_water1" name="Overall" value="2" required="" />
                     <label id="knowledge_subject1" for="drinking_water1"> Somewhat </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="drinking_water2" name="Overall" value="3" required="" />
                     <label id="knowledge_subject2" for="drinking_water2"> Good </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="drinking_water3" name="Overall" value="4" required="" />
                     <label id="knowledge_subject3" for="drinking_water3"> Excellent </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_75" class="form-radio validate[required]" id="drinking_water4" name="Overall" value="5" required="" />
                     <label id="knowledge_subject4" for="drinking_water4"> Awesome </label>
                     </span>
                  </div>
               </div>
            </li>
            <li class="form-line jf-required" data-type="control_matrix" id="id_97">
               <label class="form-label form-label-top" id="label_97" for="input_97">
               7.What impressed you most about the product/service?
               <span class="form-required">
               *
               </span>
               </label>
               <div id="cid_122" class="form-input-wide jf-required" data-layout="full">
                  <div class="form-single-column" role="group" aria-labelledby="label_122" data-component="radio">
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_122" class="form-radio validate[required]" id="placement_cell_0" name="impressed" value="1" required="" />
                     <label id="label_placement_cell_0" for="placement_cell_0"> Quality </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_122" class="form-radio validate[required]" id="placement_cell_1" name="impressed" value="2" required="" />
                     <label id="label_placement_cell_1" for="placement_cell_1"> Price </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_122" class="form-radio validate[required]" id="placement_cell_2" name="impressed" value="3" required="" />
                     <label id="label_placement_cell_2" for="placement_cell_2"> Shopping Experience </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_122" class="form-radio validate[required]" id="placement_cell_3" name="impressed" value="4" required="" />
                     <label id="label_placement_cell_3" for="placement_cell_3"> Installation or First Experience  </label>
                     </span>
                     <span class="form-radio-item" style="clear:left">
                     <span class="dragger-item">
                     </span>
                     <input type="radio" aria-describedby="label_122" class="form-radio validate[required]" id="placement_cell_4" name="impressed" value="5" required="" />
                     <label id="label_placement_cell_4" for="placement_cell_4"> Customer service </label>
                     </span>
                  </div>
               </div>
            </li>
            <li class="form-line jf-required" data-type="control_rating" id="id_121">
               <label class="form-label form-label-top form-label-auto" id="label_121" for="input_121">
               
               8.How would you compare our products to our competitors’?
               <span class="form-required">
               *
               </span>
               </label>
               <div id="cid_97" class="form-input-wide jf-required" data-layout="full">
                  <table summary="" aria-labelledby="label_97" cellPadding="4" cellSpacing="0" class="form-matrix-table" data-component="matrix" data-dynamic="true">
                     <tr class="form-matrix-tr form-matrix-header-tr">
                        <th class="form-matrix-th" style="border:none">
                            
                        </th>
                        <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0">
                           <label id="working_conditions_0"> Very Bad </label>
                        </th>
                        <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_1">
                           <label id="working_conditions_1"> Bad </label>
                        </th>
                        <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_2">
                           <label id="working_conditions_2">
                           <span style="display: inline !important;">
                           Good
                           </span>
                           </label>
                        </th>
                        <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_3">
                           <label id="working_conditions_3"> Great </label>
                        </th>
                        <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_4">
                           <label id="working_conditions_4">
                           <span style="display: inline !important;">
                           Excellent
                           </span>
                           </label>
                        </th>
                     </tr>
                     <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_97 label_97_row_0">
                        <th scope="row" class="form-matrix-headers form-matrix-row-headers">
                           <label id="label_97_row_0"> Rate </label>
                        </th>
                        <td class="form-matrix-values">
                           <input type="radio" id="working_conditions_0" class="form-radio validate[required, requireEveryRow]" name="compare" value=" 1" aria-labelledby="label_97_col_0 label_97_row_0" />
                           <label for="working_conditions_0" class="matrix-choice-label matrix-radio-label">  </label>
                        </td>
                        <td class="form-matrix-values">
                           <input type="radio" id="working_conditions_1" class="form-radio validate[required, requireEveryRow]" name="compare" value="2" aria-labelledby="label_97_col_1 label_97_row_0" />
                           <label for="working_conditions_1" class="matrix-choice-label matrix-radio-label">  </label>
                        </td>
                        <td class="form-matrix-values">
                           <input type="radio" id="working_conditions_2" class="form-radio validate[required, requireEveryRow]" name="compare" value="3" aria-labelledby="label_97_col_2 label_97_row_0" />
                           <label for="working_conditions_2" class="matrix-choice-label matrix-radio-label">  </label>
                        </td>
                        <td class="form-matrix-values">
                           <input type="radio" id="working_conditions_3" class="form-radio validate[required, requireEveryRow]" name="compare" value="4" aria-labelledby="label_97_col_3 label_97_row_0" />
                           <label for="working_conditions_3" class="matrix-choice-label matrix-radio-label">  </label>
                        </td>
                        <td class="form-matrix-values">
                           <input type="radio" id="working_conditions_4" class="form-radio validate[required, requireEveryRow]" name="compare" value="5" aria-labelledby="label_97_col_4 label_97_row_0" />
                           <label for="working_conditions_4" class="matrix-choice-label matrix-radio-label">  </label>
                        </td>
                     </tr>
                  </table>
               </div>
            </li>
            
            <li class="form-line jf-required" data-type="control_fullname" id="id_4" data-compound-hint=",">
               <label class="form-label form-label-top form-label-auto" id="label_4" for="first_4">
               Name
               <span class="form-required">
               *
               </span>
               </label>
               <div id="cid_4" class="form-input-wide jf-required" data-layout="full">
                  <div data-wrapper-react="true">
                     <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                     <input type="text" id="name" name="name" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_4 given-name" size="10" value="" data-component="first" aria-labelledby="label_4 sublabel_4_first"  required >
                     <label class="form-sub-label" for="name" id="sublabel_4_first" style="min-height:13px" aria-hidden="false">  </label>
                     </span>
                     <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                     </span>
                  </div>
               </div>
            </li>
            <li class="form-line jf-required" data-type="control_email" id="email">
               <label class="form-label form-label-top form-label-auto" id="email" for="email">
               E-mail
               <span class="form-required">
               *
               </span>
               </label>
               <div id="cemail" class="form-input-wide jf-required" data-layout="half">
                  <input type="email" id="email" name="email" class="form-textbox validate[required, Email]" data-defaultvalue="" style="width:310px" size="310" value="" placeh1="ex: myname@example.com" data-component="email" aria-labelledby="label_5" required="" />
               </div>
            </li>
            <li class="form-line" data-type="control_phone" id="id_124">
               <label class="form-label form-label-top form-label-auto" id="label_124" for="input_124_full"> Phone Number </label>
               <div id="cid_124" class="form-input-wide" data-layout="half">
                  <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="tel" id="input_124_full" name="q124_phoneNumber[full]" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue="" autoComplete="section-input_124 tel-national" style="width:310px" data-masked="true" value="" placeh1="(000) 000-0000" data-component="phone" aria-labelledby="label_124 sublabel_124_masked" />
                  <label class="form-sub-label" for="input_124_full" id="sublabel_124_masked" style="min-height:13px" aria-hidden="false"> Please enter a valid phone number. </label>
                  </span>
               </div>
            </li>
            <li class="form-line jf-required" data-type="control_textarea" id="id_126">
               <label class="form-label form-label-top form-label-auto" id="label_126" for="input_126">
               Suggestion
               <span class="form-required">
               *
               </span>
               </label>
               <div id="cid_126" class="form-input-wide jf-required" data-layout="full">
                  <textarea id="input_126" class="form-textarea validate[required]" name="Suggestion" style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_126"></textarea>
               </div>
            </li>
            <li style="display:none">
               Should be Empty:
               <input type="text" name="website" value="" />
            <li class="form-line" data-type="control_button" id="id_76">
               <div id="cid_76" class="form-input-wide" data-layout="full">
                  <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                     <button id="input_76" type="submit" name="submited" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">Post</button>
                  </div>
               </div>
            </li>
            </li>
         </ul>
      </div>
     