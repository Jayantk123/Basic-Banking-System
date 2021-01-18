<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
       .but {
            border-radius: 7px;
 
 font-size: 20px;
 background-color: lightblue;
            border-color: black;
        }
       .det {
        font-size: 25px;
        font-family: sans-serif;
        font-color:black;
       }
       h1 {
        font-size: 50px;
        font-style:monospace;
       }
        #header{
            height: 15%;
            width: 100%;
            top: 1%;
            left: 0%;
            
            background-color: black;
            position: fixed;
            color: white;
        }
        #left_side{
           
            height: 75%;
            width: 15%;
          top: 21%;
            position: fixed;
             background-color: whitesmoke;
              border: solid 5px black;
        }
      
        #right_side{
            height: 75%;
            width: 80%;
            background-color: whitesmoke;
            position: fixed;
            left: 17%;
            top: 21%;
            color: red;
            
            border: solid 5px black;
        }
       
    </style>
   
</head>
<body>
    <div id="header"><br>
        <center> <h2>Banking System</h2></center>
        &nbsp;&nbsp;
        </center>
    </div>
   <div id="left_side">
        <br><br><br>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                       <button class='but'>
                                            <a href='#'>Home</a>
                                        </button>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <button class='but'>
                                            <a href='Customer.php'>Customer Details</a>
                                        </button>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                      <button class='but'>
                                            <a href='#'>Contact Us</a>
                                        </button>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                       <button class='but'>
                                            <a href='#'>About Us</a>
                                        </button>
                    </td>
                </tr>
               
            </table>
            </form>
        </div>
   
    <div id="right_side"><br><br>
        <center><h1>Welcome to</h1></center>
       <center><h1>JK Banking Systems</h1></center>
      
                          <center> <a class="det" href="customer.php">View Customer Details</a></center> 
                      
</body>
</html>