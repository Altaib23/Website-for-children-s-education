
<?php  include('../config/constants.php');  ?>

<div class="main-content">
<div class="wrapper">
    <h1>Report Of  Resgister</h1>

    <br /><br />
    <?php 
    
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if(isset($_SESSION['remove']))
        {
            echo $_SESSION['remove'];
            unset($_SESSION['remove']);
        }

        if(isset($_SESSION['delete']))
        {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        if(isset($_SESSION['no-category-found']))
        {
            echo $_SESSION['no-category-found'];
            unset($_SESSION['no-category-found']);
        }

        if(isset($_SESSION['update']))
        {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }

        if(isset($_SESSION['upload']))
        {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }

        if(isset($_SESSION['failed-remove']))
        {
            echo $_SESSION['failed-remove'];
            unset($_SESSION['failed-remove']);
        }
    
    ?>
    <br><br>

            <!-- Button to Add Admin -->
            <a href="print.php" class="btn-primary" onclick="window.print();" >Print</a>

            <br /><br /><br />

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>first Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Card Number</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Insurance</th>
                    <th>Family Number</th>
                    <th>Family Type</th>
                </tr>

                <?php 

                    //Query to Get all CAtegories from Database
                    $sql = "SELECT * FROM tbl_register";

                    //Execute Query
                    $res = mysqli_query($conn, $sql);

                    //Count Rows
                    $count = mysqli_num_rows($res);

                    //Create Serial Number Variable and assign value as 1
                    $sn=1;

                    //Check whether we have data in database or not
                    if($count>0)
                    {
                        //We have data in database
                        //get the data and display
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id = $row['id'];
                            $first_name = $row['first_name'];
                            $last_name = $row['last_name'];
                            $gender = $row['gender'];
                            $age = $row['age'];
                            $card_number = $row['card_number'];
                            $phone = $row['phone'];
                            $address = $row['address'];
                            $insurance = $row['insurance'];
                            $family = $row['family'];
                            $type_family = $row['type_family'];


                            ?>

                                <tr>
                                    <td><?php echo $sn++; ?>. </td>
                                    <td><?php echo $first_name; ?></td>
                                    <td><?php echo $last_name; ?></td>
                                    <td><?php echo $gender; ?></td>
                                    <td><?php echo $age; ?></td>
                                    <td><?php echo $card_number; ?></td>
                                    <td><?php echo $phone; ?></td>
                                    <td><?php echo $address; ?></td>
                                    <td><?php echo $insurance; ?></td>
                                    <td><?php echo $family; ?></td>
                                    <td><?php echo $type_family; ?></td>
                                    
                                </tr>

                            <?php

                        }
                    }
                    else
                    {
                        //WE do not have data
                        //We'll display the message inside table
                        ?>

                        <tr>
                            <td colspan="6"><div class="error">No Regisister Added.</div></td>
                        </tr>

                        <?php
                    }
                
                ?>

                

                
            </table>
</div>

</div>


