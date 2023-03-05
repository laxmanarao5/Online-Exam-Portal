<?php
include("../includes/config.php");
$query="SELECT * FROM `queries` WHERE status=1;";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin</title>
    <style type="text/css">
        .container{
            display: flex;
            flex-direction: column;
            /* overflow: hidden; */
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

        /* .child_node {
            display: flex;
            flex-direction: row;
            background-color: #dee3eb;
            padding: 15px;
            width: 100%;
        } */
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
            margin-right: 50px;
        }

        .search-bar {
            margin-top: 2px;
            height: 30px;
            background-color: #2252d9;
            border-radius: 10px;
            position:relative;
            width:200px;
            margin-left: 250px;
        }
            
        .searchbutton {
            position:absolute;
            padding-top: 4px;
            left:10px;
            width: 18px;
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
            border-radius: 20px;
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

        .button1 {
            background-color: #1c9b1c;
            padding: 5px 25px;
        }

        .button2 {
            background-color: #f44336;
            padding: 5px 25px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="nav-bar">
            <a href="page_9.php" title="click here to add new user"><i class="fa fa-question-circle" aria-hidden="true"></i>Add Queries</a>
            <a href="page_10.php" title="click here to add new user"><i class="fa fa-check" aria-hidden="true"></i>Solved</a>
            <a href="page_11.php" title="click here to add new user"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Pending</a>
        </div>
        <div class="row">
            <!-- <div class="header">
                <div><h6>Add new user</h6></div>
                
            </div> -->
            <div class="details">
            <div class="col-5" >
                
                
            </div>
            
        </div>
        <div id="cnode">
            <div class="child_node">
                <h1>Recently Added</h1>
                <h1>Total Count :</h1>
                <h1>Export CSV</h1>
                <div class="search-bar">
                    <i class="fa fa-search search-icon"></i>
                    <input type="text" placeholder="Search..." class="sfield" >  
                </div>  
            </div>
            <div class="table_container">
                <table>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Problem</th>
                        <th>Updated On</th>
                        <th>Issue Solved</th>
                    </tr>
                    <?php 
                $count=0;
                while($row=$result->fetch_assoc())
                {
                $count++;
                    ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $row['Name'];?></td>
                        <td><?php echo $row['Problem'];?></td>
                        <td><?php echo $row['date'];?></td>
                        <td class="approve">
                            <button class="button1">Solved</button>
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