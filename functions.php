<?php
    $con = mysqli_connect("localhost","root","","bankd");

    function getCustomers() {
        global $con;
        $get_customers = "select * from customers";
        $run_customers = mysqli_query($con, $get_customers);

        while ($row_customers = mysqli_fetch_array($run_customers)) {
            $customer_id = $row_customers['customer_id'];
            $customer_name = $row_customers['customer_name'];
            $customer_email = $row_customers['customer_email'];
            $current_balance = $row_customers['current_balance'];
            echo "
                <tr>
                    <td>$customer_id</td>
                    <td><a href='details.php?customer_id=$customer_id'>$customer_name</a></td>
                    <td>$customer_email</td>
                    <td>$current_balance</td>
                </tr>
            ";
        }
    }
?>