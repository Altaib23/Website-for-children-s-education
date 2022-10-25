
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
                        <th>Project Name</th>  
                        <th>Amount</th>  
                        <th>Duration</th>      
                        <th>Status</th>
                        <th>Project Description</th>
                </tr>

                <?php 

                    //Query to Get all CAtegories from Database
                    $sql = "SELECT * FROM tbl_project ORDER BY id DESC";
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
                                $name = $row['name'];
                                $amount = $row['amount'];
                                $duration = $row['duration'];
                                $status = $row['status'];
                                $description = $row['description'];


                            ?>

                                <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $amount; ?></td>
                                        <td><?php echo $duration; ?></td>
                                        <td><?php echo $status; ?></td>

                                        <td><?php echo $description; ?></td>

                                    
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


