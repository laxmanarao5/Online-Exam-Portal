<?php 
include("../includes/config.php");
    session_start();
    $exam=$_SESSION['eid'];
    $ques=$_POST['question'];
    $op1=$_POST['option1'];
    $op2=$_POST['option2'];
    $op3=$_POST['option3'];
    $op4=$_POST['option4'];
    $ans=$_POST['correct'];
    $query="INSERT INTO `questions`( `examid`, `question`, `op1`, `op2`,`op3`,`op4`,`ans`) VALUES ('$exam','$ques','$op1','$op2','$op3','$op4','$ans')";
    $result=mysqli_query($con,$query);
    echo '<h1 style="color:green">Question Paper Created Sucessfull<h1>';
    echo "<h2>Redirecting to Add Questions page</h2?";
    header('Refresh: 1; URL=../examinar/student-exam-questionpaper2.html');

?>