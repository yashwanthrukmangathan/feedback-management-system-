<?php
   include'conn.php';
   ?>
<html lang="en">
   <head>
      <title>Welcome</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css" type="text/css">
   </head>
   <body>
      <style>
         body{
         font-family: sans-serif;
         margin:0;
         line-height: 1.5;
         }
         *{
         box-sizing: border-box;
         margin:0;
         }
         .login-popup{
         position: fixed;
         left: 0;
         top: 0;
         width: 100%;
         height: 100%;
         z-index: 1099;
         background-image:url(bg.jpg);
         visibility: hidden;
         opacity: 0;
         transition: all 1s ease;
         background-attachment: fixed;
         background-position: center top;
         }
         .login-popup.show{
         visibility:visible;
         opacity: 1;
         }
         .login-popup .box{
         background-color:#0000006b;
         width: 750px;
         position: absolute;
         left: 50%;
         top:50%;
         transform:translate(-50%,-50%);
         display: flex;
         flex-wrap: wrap;
         opacity: 0;
         margin-left: 50px;
         transition: all 1s ease;
         }
         .login-popup.show .box{
         opacity: 1;
         margin-left: 0;
         border-radius: 118px
         }
         .login-popup .box .img-area{
         flex:0 0 50%;
         max-width: 50%;
         position: relative;
         overflow: hidden;
         padding:30px;
         display: flex;
         align-items: center;
         justify-content: center;
         }
         .login-popup .box .img-area h1{
         font-size: 30px;
         }
         .login-popup .box .img-area .img{
         position: absolute;
         left: 111px;
         top: 77px;
         width: 50%;
         height: 10%;
         background-image: url('https://akashanimation.com/images/loading.gif');
         background-size: cover;
         background-position: center;
         animation: zoomInOut 1s linear infinite;
         z-index: -1;
         }
         @keyframes zoomInOut{
         0%,100%{
         transform: scale(1);
         }
         50%{
         transform: scale(1.1);
         }
         }
         .login-popup .box .form{
         flex:0 0 50%;
         max-width: 32%;
         padding:40px 30px;
         }
         .login-popup .box .form h1{
         color:#000000;
         font-size: 30px;
         margin:0 0 30px;
         }
         .login-popup .box .form .form-control{
         height: 45px;
         margin-bottom: 30px;
         width: 100%;
         border:none;
         border-bottom:1px solid #cccccc;
         font-size: 15px;
         color:#000000;
         }
         .login-popup .box .form .form-control:focus{
         outline: none;
         }
         .login-popup .box .form label{
         font-size: 15px;
         color:#555555;
         }
         .login-popup .box .form .btn{
         width: 100%;
         background-color: #E91E63;
         margin-top:40px;
         height: 45px;
         border:none;
         border-radius: 25px;
         font-size: 15px;
         text-transform: uppercase;
         color:#ffffff;
         cursor: pointer;
         }
         .login-popup .box .form .btn:focus{
         outline: none;
         }
         .login-popup .box .form .close{
         position: absolute;
         right: 10px;
         top:0px;
         font-size: 30px;
         cursor: pointer;
         }
         /*responsive*/
         @media(max-width: 767px){
         .login-popup .box{
         width: calc(100% - 0px);
         }
         .login-popup .box .img-area{
         flex: 0 0 100%;
         width: 50%;
         }
         .login-popup .box .form{
         flex: 0 0 100%;
         width: 50%;
         }
         }
      </style>
      <div class="login-popup show">
         <div class="box">
            <div class="form" style="margin-top: -10px;">
            </div>
            <div class="form">
               <h2 style="margin-left: 25px;color: #fff;">Welcome</h2>
               <form>
                  <a href="feedback.php"> 
                  <button type="button" class="btn">Give feedback </button>
                  </a>
                  <a href="login.php"> 
                  <button type="button" class="btn">Admin Login </button>
                  </a>
               </form>
            </div>
         </div>
         <div style="margin-top: 634px;"> <a href="login.php" onmouseover="this.style.color='#FFF'">
            Login</a><a>
            </a>
         </div>
         <a>
         </a>
      </div>
      <a>
         <script> 
            const loginPopup = document.querySelector(".login-popup");
            const close = document.querySelector(".close");
            
            
            window.addEventListener("load",function(){
            
             showPopup();
             // setTimeout(function(){
             //   loginPopup.classList.add("show");
             // },5000)
            
            })
            
            function showPopup(){
                  const timeLimit = 1 // seconds;
                  let i=0;
                  const timer = setInterval(function(){
                   i++;
                   if(i == timeLimit){
                    clearInterval(timer);
                    loginPopup.classList.add("show");
                   } 
                   console.log(i)
                  },10);
            }
            
            
            close.addEventListener("click",function(){
              loginPopup.classList.remove("show");
            })
            
         </script>
      </a>
   </body>
</html>