
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>part3</title>
    <style type="text/css">
        .container{
            display: flex;
            flex-direction: column;
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
         .button1{
            color: white;
            background-color: blue;
            border: none;
            border-radius: 2px;
            padding: 5px 15px;
            font-weight: 700;
            margin-top: 10px;
            cursor: pointer;
        }
        table{
            margin: auto;
            margin-top: 10vh;
        }
        label{
            font-size: 20px;
            margin-top: 20px;
            font-family: 'poppins';
        }
        input{
            font-size: 15px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav-bar">
            <a href="part3.php" title="click here to add new user"><i class="fa fa-plus"></i>Add Questions</a>
            <a href="part1.php" title="click here to add new user"><i class="fa fa-bar-chart"></i>Total Papers</a>
    
        </div>
        <div class="row">
           
            <div class="details">
            <div class="col-5" >
                <form action="../admin/server.php" method="POST" class="exam">
                    <table>
                     <tr><td><label for="sname">Exam Name:</label></td><td><input type="text" name="examname" id="sname" placeholder="Enter subject name"></span></td></tr>
                     <tr><td><label for="etime">Time:</label></td><td><input type="text" name="time" id="etime" placeholder="Enter exam time"></span></td> </tr>
                    <tr><td><label for="nm">Marks for Each question</label></td><td><input type="number" placeholder="Enter no.of Marks" name="noofmarks" id="nm"></span></td></tr>
                    <tr><td></td><td style="float: right;"><input type="submit" name="question" value="Add Question" class="button1"></a></td></tr>
                 </table>
                 </form>

            </div>
            
        </div>
        

        </div>
        
        
    </div>
 </body>
</html>