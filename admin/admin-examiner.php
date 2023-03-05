<?php 
session_start();
if(isset($_SESSION['email']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../fonts/fonts.css">
    <!-- <link rel="stylesheet" href="styles.css?v=<?php echo time();?>" /> -->
    <link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.css">
    <title>OES</title>

    <style>
        .admin-students-icon,.admin-queries-icon{
    color: #596075;
}
.admin-students-icon,.admin-queries-icon{
    padding-left: 35px;
}
    </style>
</head>
<body>
        <div class="navigation">
            <div class="logo">
                OES
            </div>
            
            <div class="userlogin">
                
                <div onclick="over('user-logout')"><img src="../images/user.JPG"></div>
                <button class="user-logout" id="user-logout" style="visibility: hidden"><i class="bi bi-box-arrow-right"></i><a class="user-logout-color" href="logout.php">Logout</a></button>
            </div>
        </div>
        <div class="dashboard_container">
            <div class="dashboard_left_container">
        <div class="dashboard">
            <div class="admin-student_dashboard">
            <div class="line" style="display: none;"></div>
            <div class="admin-students-links">
            <a href="index.php"><i class="fa fa-user admin-students-icon"></i><p>Students</p></a></div></div>  
        <div class="admin-examiner_dashboard">
            <div class="line"></div>
            <div class="admin-examiner-links">
            <a href="admin-examiner.php"><i class="fa fa-user-tie admin-examiner-icon"></i><p  style="color:white;">Examiner</p> </a></div></div>

            <div class="admin-queries_dashboard">
                <div class="line" style="display: none;">
    
                </div>
                <div class="admin-queries-links">
            <a href="admin-examiner-queries.php"><i class="fa fa-comment-dots admin-queries-icon"></i><p>Queries</p> </a></div></div>
            <!-- <a href=""><i class="fa fa-dashboard dashboard-icon"></i><p>Settings</p></a> -->
        </div>
        </div>
            <div class="dashboard_right_container">
                <object type="text/html" class="wd" data="./page_7.html"></object>
            </div>
        
        </div>
    
    <script>
        function over(i) {
  if(document.getElementById(i).style.visibility=='visible'){
    document.getElementById(i).style.visibility='hidden';
  }
  else
  document.getElementById(i).style.visibility="visible";
}
    </script>
</body>
</html>
<?php
}
?>