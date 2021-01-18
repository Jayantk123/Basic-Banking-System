<!DOCTYPE html>

<?php
    include("functions.php");
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css" media="all">
        
        <title>Details</title>
        <style type="text/css">

       .but {
            border-radius: 7px;
 
 font-size: 20px;
 background-color: lightblue;
            border-color: black;
        }

 #header{
            height: 10%;
            width: 100%;
            top: 0%;

            background-color: black;
            position: fixed;
            color: white;
            }
            #right_side{
            height: 87%;
            width: 80%;
            background-color: whitesmoke;
            position: fixed;
            left: 12%;
            top: 12%;
            color: red;
            
            border: solid 5px black;
        </style>
    </head>
    
    <body>
    

         <div id="header"><br>
        <center><h1>JK Banking Systems</h1>
        </center>
    </div>

<div id="right_side"><br><br>
        <div class="container">
            <?php
                if(isset($_GET['customer_id'])) {
                    $c_id = $_GET['customer_id'];
                    $get_customers = "select * from customers where customer_id='$c_id'";
                    $run_customers = mysqli_query($con, $get_customers);

                    while ($row_customers = mysqli_fetch_array($run_customers)) {
                        $customer_id = $row_customers['customer_id'];
                        $customer_name = $row_customers['customer_name'];
                        $customer_email = $row_customers['customer_email'];
                        $current_balance = $row_customers['current_balance'];
                       
                        echo "
                           
                            <br>
                            <table class='table table-bordered' style='text-align: center; font-size: 20px;'>
                                <tr>
                                    <th scope='col'>Customer ID</th>
                                    <td>$customer_id</td>
                                </tr>
                                <tr>
                                    <th scope='col'>Customer Name</th>
                                    <td>$customer_name</td>
                                </tr>
                                <tr>
                                    <th scope='col'>Customer Email</th>
                                    <td>$customer_email</td>
                                </tr>
                                <tr>
                                    <th scope='col'>Current Balance</th>
                                    <td>$current_balance</td>
                                </tr>
                            </table>
                            <center>
                                        <button class='btn'>
                                            <a href='transfer.php?customer_id=$c_id' style='text-decoration: none; color: white;'>Transfer Money</a>
                                        </button>
                                    </center>
                            
                                    <center>
                                        <button class='btn'>
                                            <a href='Customer.php' style=' color: white;' >Back to all customers</a>
                                        </button>
                                    </center>
                               
                                   
                        ";
                    }
                }
            ?>
        </div>

        

      </div>
        
     
    </body>
</html>
