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
        
        <title>Payment Processing</title>
        <style type="text/css">
            #right_side{
            height: 86%;
            width: 80%;
            background-color: whitesmoke;
            position: fixed;
            left: 10%;
            top: 12%;
            color: red;
            
            border: solid 5px black;
        }
        #header{
            height: 10%;
            width: 100%;
            top: 0%;

            background-color: black;
            position: fixed;
            color: white;
        }

        </style>
    </head>
    
    <body>
     <div id="header"><br>
        <center><h1>JK Banking Systems</h1>
        </center>
    </div>
        <br>
<div id="right_side"><br><br>
        <div class="container">
            <?php
                if(isset($_GET['customer_id'])) {
                    $c_id = $_GET['customer_id'];
                    $get_customers = "select * from customers where customer_id='$c_id'";
                    $run_customers = mysqli_query($con, $get_customers);
                    $row_customers = mysqli_fetch_array($run_customers);
                    $customer_id = $row_customers['customer_id'];
                    $customer_name = $row_customers['customer_name'];
                    $current_balance = $row_customers['current_balance'];

                    echo "
                        <form action='transfer.php?customer_id=$c_id' method='post' enctype='multipart/form-data'>
                            <label for='from' style='font-size: 20px;'>Transferring from</label>
                            <div class='form-row'>
                                <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                    <label for='from_acc'>Cust. ID</label>
                                    <input type='number' class='form-control' name='from_acc' value='$customer_id' readonly>
                                </div>
                                <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                    <label for='from_acc_name'>Cust. Name</label>
                                    <input type='text' class='form-control' name='from_acc_name' value='$customer_name' readonly>
                                </div>
                                <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                    <label for='curr_bal'>Current Balance</label>
                                    <input type='number' class='form-control' name='curr_bal' value='$current_balance' readonly>
                                </div>
                            </div>
                            <br>
                            <label for='to' style='font-size: 20px;'>Transfer to</label>
                            <div class='form-row'>
                                <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                    <label for='to_acc'>Cust. ID</label>
                                    <select class='form-control' name='to_acc' required>
                                        <option value='0'>User Account Name</option>
                    ";
                                        $get_customers = "select * from customers";
                                        $run_customers = mysqli_query($con, $get_customers);
                                        while($row_customers = mysqli_fetch_array($run_customers)) {
                                            $customer_id = $row_customers['customer_id'];
                                            $customer_name = $row_customers['customer_name'];
                                            echo "<option value='$customer_id'>$customer_name</option>";
                                        }
                    echo "
                                    </select>
                                </div>
                                <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                    <label for='transfer_amt'>Transfer Amount</label>
                                    <input type='number' class='form-control' name='transfer_amt' placeholder='Min amt 100.Rs' required>
                                </div>
                            </div>
                            <div class='form-row'>
                                <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                    <label for='transfer_msg'>Enter any Remark</label>
                                    <input type='text' class='form-control' name='transfer_msg' placeholder='Type Here...'>
                                </div>
                            </div>
                            <center>
                                <button type='submit' class='btn btn-primary' name='transfer'>Transfer Now</button>
                            </center>
                         </form>
                       
                            <div class='col'>
                                <center>
                                    <button class='btn'>
                                        <a href='customer.php' style='text-decoration: none; color: #f0ffff;'>Cancel Transfer</a>
                                    </button>
                                </center>
                               
                          
                        </div>
                    ";
                }
            ?>
        </div>
</div>
       
    </body>
</html>

<?php
    if (isset($_POST['transfer'])) {
        $curr_bal = $_POST['curr_bal'];
        $transfer_date = date('d-m-Y H:i:s a');
        $from_acc = $_POST['from_acc'];
        $from_acc_name = $_POST['from_acc_name'];
        $to_acc = $_POST['to_acc'];
        $transfer_amt = $_POST['transfer_amt'];
        $transfer_msg = $_POST['transfer_msg'];
        
        if($to_acc != 0){
            $get_customer = "select current_balance from customers where customer_id=$from_acc";
            $run_customer = mysqli_query($con, $get_customer);
            $row_customer = mysqli_fetch_array($run_customer);
            
            if($transfer_amt <= $row_customer['current_balance']) {
                $f_customer = "update customers set current_balance=$curr_bal-$transfer_amt where customer_id=$from_acc";
                $run_f_customer = mysqli_query($con, $f_customer);

                $t_customer = "select current_balance from customers where customer_id=$to_acc";
                $run_t_customer = mysqli_query($con, $t_customer);
                $row_t_customer = mysqli_fetch_array($run_t_customer);
                $to_curr_bal = $row_t_customer['current_balance'];

                $t_customer_1 = "update customers set current_balance=$to_curr_bal+$transfer_amt where customer_id=$to_acc";
                $run_t_customer_1 = mysqli_query($con, $t_customer_1);
                
                $insert_transfer = "insert into transfers (transfer_date, from_acc, from_acc_name, to_acc, transfer_amt, transfer_msg) values ('$transfer_date', $from_acc, '$from_acc_name', $to_acc, $transfer_amt, '$transfer_msg')";
                $run_transfer = mysqli_query($con, $insert_transfer);
                if($run_f_customer && $run_t_customer && $run_t_customer_1 && $run_transfer) {
                    echo '<script>alert("Transfer complete")</script>';
                    echo '<script>window.open("customer.php", "_self")</script>';
                } else {
                    echo '<script>alert("Unable to transfer")</script>';
                }
            } else {
                echo '<script>alert("Insufficient Balance!!!")</script>';
            }
        } else {
            echo '<script>alert("Please selct an account!!!")</script>';
        }
    }
?>
