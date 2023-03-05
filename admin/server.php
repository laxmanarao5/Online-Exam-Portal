<?php
include("../includes/config.php");
session_start();
if(isset($_POST["adduser"]))
{
$sid=$_POST["sid"];
$name=$_POST["name"];
$email=$_POST["email"];
$branch=$_POST["branch"];
$img_name=$_FILES['dp']['name'];
$img_size=$_FILES['dp']['size'];
$tmp_name=$_FILES['dp']['tmp_name'];
$img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
$img_ex_lc=strtolower($img_ex);
$new_img_name="IMG00".rand(1000,10000).'.'.$img_ex_lc;
$img_upload_path='uploads/'.$new_img_name;
move_uploaded_file($tmp_name,$img_upload_path);
$pass=password_hash("rguktsklm",PASSWORD_DEFAULT);
echo $new_img_name;
$query="INSERT INTO `users`(`id`, `name`, `email`, `branch`, `dp`, `pass`, `type`) VALUES ('$sid','$name','$email','$branch','$new_img_name','$pass','student')";
$result=mysqli_query($con,$query);
echo '<h1 style="color:green">Registration Sucessfull<h1>';
echo "<h2>Redirecting to HomePage</h2?";
// header('Refresh: 2; URL=index.php');

}
if(isset($_POST["updatestudent"]))
{
$sid=$_POST["sid"];
$name=$_POST["name"];
$email=$_POST["email"];
$query="DELETE FROM `users` WHERE email='$email';";
$result=mysqli_query($con,$query);
$branch=$_POST["branch"];
$img_name=$_FILES['dp']['name'];
$img_size=$_FILES['dp']['size'];
$tmp_name=$_FILES['dp']['tmp_name'];
$img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
$img_ex_lc=strtolower($img_ex);
$new_img_name="IMG00".rand(1000,10000).'.'.$img_ex_lc;
$img_upload_path='uploads/'.$new_img_name;
move_uploaded_file($tmp_name,$img_upload_path);
$pass=password_hash("rguktsklm",PASSWORD_DEFAULT);
echo $new_img_name;
$query="INSERT INTO `users`(`id`, `name`, `email`, `branch`, `dp`, `pass`, `type`) VALUES ('$sid','$name','$email','$branch','$new_img_name','$pass','student')";
$result=mysqli_query($con,$query);
echo '<h1 style="color:green">Registration Sucessfull<h1>';
echo "<h2>Redirecting to HomePage</h2?";
header('Location: admin_students_insights.php');

}
if(isset($_POST["addexaminer"]))
{
$subject=$_POST["subject"];
$name=$_POST["name"];
$email=$_POST["email"];
$branch=$_POST["branch"];
$img_name=$_FILES['dp']['name'];
$img_size=$_FILES['dp']['size'];
$tmp_name=$_FILES['dp']['tmp_name'];
$img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
$img_ex_lc=strtolower($img_ex);
$new_img_name="IMG00".rand(1000,10000).'.'.$img_ex_lc;
$img_upload_path='uploads/'.$new_img_name;
move_uploaded_file($tmp_name,$img_upload_path);
$pass=password_hash("rguktsklm",PASSWORD_DEFAULT);
echo $new_img_name;
$query="INSERT INTO `users`(`id`, `name`, `email`, `branch`, `dp`, `pass`, `type`) VALUES ('$subject','$name','$email','$branch','$new_img_name','$pass','examiner')";
$result=mysqli_query($con,$query);
echo '<h1 style="color:green">Registration Sucessfull<h1>';
echo "<h2>Redirecting to HomePage</h2?";
// header('Refresh: 2; URL=index.php');
}
if(isset($_POST["updateexaminer"]))
{
$subject=$_POST["subject"];
$name=$_POST["name"];
$email=$_POST["email"];
$query="DELETE FROM `users` WHERE email='$email';";
$result=mysqli_query($con,$query);
$branch=$_POST["branch"];
$img_name=$_FILES['dp']['name'];
$img_size=$_FILES['dp']['size'];
$tmp_name=$_FILES['dp']['tmp_name'];
$img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
$img_ex_lc=strtolower($img_ex);
$new_img_name="IMG00".rand(1000,10000).'.'.$img_ex_lc;
$img_upload_path='uploads/'.$new_img_name;
move_uploaded_file($tmp_name,$img_upload_path);
$pass=password_hash("rguktsklm",PASSWORD_DEFAULT);
echo $new_img_name;
$query="INSERT INTO `users`(`id`, `name`, `email`, `branch`, `dp`, `pass`, `type`) VALUES ('$subject','$name','$email','$branch','$new_img_name','$pass','examiner')";
$result=mysqli_query($con,$query);
echo '<h1 style="color:green">Registration Sucessfull<h1>';
echo "<h2>Redirecting to HomePage</h2?";
// header('Refresh: 2; URL=index.php');
header('Location: admin_insights.php');
}
if(isset($_POST["login"]))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $query="SELECT * FROM users WHERE email='$email';";
    $result=mysqli_query($con,$query);
    $test=0;
    if(mysqli_num_rows($result)>0)
    {
    $row = $result->fetch_assoc();
    $dbpass=$row["pass"];
    $type=$row["type"];
    $dbname=$row['name'];
    $test=password_verify($pass,$dbpass);
    }
    if($test)
    {
        $_SESSION['email']=$email;
        $_SESSION['email']=$dbname;
        if($type=="admin")
        {
            header('Location: index.php');
        }
        if($type=="examiner")
        {
            header('Location: ../examinar/examiner-dashboard.html');
        }
        if($type=="student")
        {
            header('Location: ../Student/student-dashboard.html');
        }
            
    }

}

if(isset($_POST["query"]))
{
$name=$_POST["name"];
$problem=$_POST["problem"];
$desc=$_POST['desc'];
$today=date("Ymd");
$query="INSERT INTO `queries`( `Name`, `Problem`, `desc`, `date`, `type`, `status`) VALUES ('$name','$problem','$desc','$today','Examiner',0)";
$result=mysqli_query($con,$query);
echo '<h1 style="color:green">Query Registration Sucessfull<h1>';
echo "<h2>Redirecting to Dashboard</h2?";
header('Refresh: 2; URL=../examinar/stu_dash-1.html');
}
if(isset($_POST["studentquery"]))
{
$name=$_POST["name"];
$problem=$_POST["problem"];
$desc=$_POST['desc'];
$today=date("Ymd");
$query="INSERT INTO `queries`( `Name`, `Problem`, `desc`, `date`, `type`, `status`) VALUES ('$name','$problem','$desc','$today','Stuent',0)";
$result=mysqli_query($con,$query);
echo '<h1 style="color:green">Query Registration Sucessfull<h1>';
echo "<h2>Redirecting to Dashboard</h2?";
header('Refresh: 2; URL=../examinar/stu_dash-1.html');
}
if(isset($_POST['question']))
{
    $query="SELECT branch from users where id='admin'";
    $result=mysqli_query($con,$query);
    $temp=$result->fetch_assoc();
    $x=intval($temp['branch']);
    $x++;
    $query="UPDATE users set branch= $x where id='admin'";
    $result=mysqli_query($con,$query);
    $name=$_POST['examname'];
    $time=intval($_POST['time']);
    $marks=intval($_POST['noofmarks']);
    $createdby="laxman";
    $query="INSERT INTO `questionpapers`(`examid`, `examname`, `createdby`, `time`, `marks`,`noofquestions`) VALUES ('$x','$name','$createdby','$time','$marks',0)";
    $result=mysqli_query($con,$query);
    echo '<h1 style="color:green">Question Paper Created Sucessfull<h1>';
    echo "<h2>Redirecting to Add Questions page</h2?";
    $_SESSION['eid']=$x;
    header('Refresh: 1; URL=../examinar/student-exam-questionpaper2.html');
}
if(isset($_POST['next']))
{
    $exam="";
    $ques=$_POST['question'];
    $op1=$_POST['option1'];
    $op2=$_POST['option2'];
    $op3=$_POST['option3'];
    $op4=$_POST['option4'];
    $ans=$_POST['correct'];
    $query="INSERT INTO `questions`( `examid`, `question`, `op1`, `op2`,`op3`,'op4','ans') VALUES ('$exam','$ques','$op1','$op2','$op3','$op4','$ans')";
    $result=mysqli_query($con,$query);
    echo '<h1 style="color:green">Question Paper Created Sucessfull<h1>';
    echo "<h2>Redirecting to Add Questions page</h2?";
    header('Refresh: 1; URL=../examinar/student-exam-questionpaper2.html');
}
?>