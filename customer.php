<!DOCTYPE html>

<?php
    include("functions.php");
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="kyra banking, banking, best banking, banking solutions">
        
       
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css" media="all">
        
        <title>Customers</title>
    
        <style type="text/css">

 #header{
            height: 10%;
            width: 100%;
            top: 0%;

            background-color: black;
            position: fixed;
            color: white;
        }
            #right_side{
            height: 75%;
            width: 80%;
            background-color: whitesmoke;
            position: fixed;
            left: 10%;
            top: 21%;
            color: red;
            
            border: solid 5px black;

               
        }
        </style>
    </head>
    
    <body>
       
 
               
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="header">
             
            

              
                    <ul class="navbar-nav mr-auto pl-0 pl-sm-5">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="customer.php">View Customers <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                   
                </div>
            </nav>
      

        <br>
<div id="right_side">
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Email</th>
                        <th scope="col">Current Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        getCustomers();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

     

       
       
      
    </body>
</html>
