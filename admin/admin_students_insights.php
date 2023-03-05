<?php
include("../includes/config.php");
$query="SELECT * FROM `users` WHERE `type`='student';";
$result=mysqli_query($con,$query);
$tno=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css"> -->
	<title>Admin</title>
	<style type="text/css">
		.container{
			display: flex;
			flex-direction: column;
			/* border:1px solid black; */
			/* width:800px;
			height: 500px; */
		}
		a{
         	color: white;
         	font-style: bold;
         	padding:5px 10px;
         	border: 1px solid;
         	margin-top: 40px;
         	background-color:blueviolet;
         	text-decoration: none;
         	border-radius:5px; 


         }
         a:link{
	          text-decoration: none;
	          color: #fff;
         }
         a:hover{
         	color: white;
         	text-decoration: none;

         }
         .nav-bar{
         	text-align: left;
         	margin-top:1rem;
         	display: inline-block;

         }
         .nav-bar a{
         	margin:3px;
         }
         .row{

         	/* width:670px; */
			height:80vh;
         	background-color: lightgray;
			border-radius: 10px;
            margin-top:20px;
            margin-left:0.2rem;
            text-align:justify;
            display:inline-block;
         }
         .header{
         	margin-left:1rem;
         	margin-top:1rem;
         	display:flex;
         }
         #form-details{
         	margin-top: 20px;

         }
#pnode{
    position: relative;
    left: 40px;
    margin: 10px;
    margin-top: 60px;
}
.btn {
    background-color: #2252d9;
    border: none;
    color: white;
    padding: 10px 15px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    border-radius: 5px;
}

.btn:hover {
    background-color: RoyalBlue;
}

.child_node {
    margin-top: 20px;
    display: flex;
    flex-direction: row;
    background-color: #dee3eb;
    padding: 15px;
    width: 100%;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}

h1{
    font-size: 15px;
    margin-right: 15px;
}

.search-bar {
    margin-top: 5px;
    height: 30px;
    background-color: #2252d9;
    border-radius: 10px;
    position:relative;
    width:200px;
    margin-left:350px;
}
    
.searchbutton {
    position:absolute;
    padding-top: 4px;
    left:10px;
    width: 18px;
    /* margin-right: 10px; */
}

.sfield {
    float: right;
    margin-top: 5px ;
    margin-right: 35px;
    font: 8pt;
    color: #fff;
    font-weight: 400;
    height: 20px;
    padding: 0;
    background: transparent;
    /* border: none; */
    max-width: 125px;
    border: 0px;
}
.sfield:focus{
    outline: none;
}
::placeholder{
    color: white;
}
.table_container{
    background-color: #d7dadf;
    height: auto;
    padding: 10px;
    /* border-radius: 20px; */
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px;
}

table{
    border-collapse: collapse;
    width: 100%;
    border-radius: 10px;
}
td, th {
    border: 1px solid #aca7a7;
    text-align: left;
    padding: 8px;
}
.search-icon{
    color: white;
   margin-left: 15px;
   margin-top: 5px;
   font-size: 16px;
}
button {
    border: none;
    color: white;
    padding: 5px 10px;
    border-radius: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 {background-color: #1c9b1c;
    padding: 5px 25px;
}
.button2 {background-color: #f44336;}

	</style>
</head>
<body>
	<div class="container">
		<div class="nav-bar">
			<a href="admin_student_dashboard.html" title="click here to add new user"><i class="fa fa-plus"></i> Add User</a>
			<a href="admin_students_insights.php" title="click here to add new user"><i class="fa fa-bar-chart"></i> Insights</a>
        </div>
		<!-- <div class="row">
			<div class="header">
				<div><h6>Add new user</h6></div>
				
			</div>
			<div class="details">
			<div class="col-5" >
				
				
			</div>
			
		</div> -->
        <div id="cnode">
            <div class="child_node">
                <h1>Recently Added</h1>
                <h1>Total Count : <?php echo $tno;?></h1>
                <h1>Export CSV</h1>
                <div class="search-bar">
                    <!-- <input type="image" class="searchbutton" src="./images/search.svg" alt="Search"> -->
                    <i class="fa fa-search search-icon"></i>
                    <input type="text" placeholder="Search..." class="sfield" >  
                </div>  
            </div>
            <div class="table_container">
                <table>
                    <tr>
                        <th>S.No</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Dept</th>
                        <th>Edit/Remove</th>
                    </tr>
                <?php 
                $count=0;
                while($row=$result->fetch_assoc())
                {
                $count++;
                    ?>
                    <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['branch']; ?></td>
                        <td class="approve">
                            <a class="button1" href="update_student.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a class="button2" href="delete.php?id=<?php echo $row['id']; ?>">Remove</a>
                        </td>
                    </tr>
                <?php 
                }
                ?>
                </table>
            </div>
        </div>

		</div>
        
		
	</div>
	
</body>
</html>