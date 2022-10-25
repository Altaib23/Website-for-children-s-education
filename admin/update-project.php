<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Project</h1>
        <br><br>


        <?php 
        
            //CHeck whether id is set or not
            if(isset($_GET['id']))
            {
                //GEt the Order Details
                $id=$_GET['id'];

                //Get all other details based on this id
                //SQL Query to get the order details
                $sql = "SELECT * FROM tbl_project WHERE id=$id";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    //Detail Availble
                    $row=mysqli_fetch_assoc($res);

                    $id = $row['id'];
                    $name = $row['name'];
                    $amount = $row['amount'];
                    $duration = $row['duration'];
                    $status = $row['status'];
                    $description = $row['description'];
                }
                else
                {
                    //DEtail not Available/
                    //Redirect to Manage Order
                    header('location:'.SITEURL.'admin/manage-project.php');
                }
            }
            else
            {
                //REdirect to Manage ORder PAge
                header('location:'.SITEURL.'admin/manage-project.php');
            }
        
        ?>

        <form action="" method="POST">
        
            <table class="tbl-30">
                <tr>
                    <td>Project Name</td>
                    <td><b> <?php echo $name; ?> </b></td>
                </tr>

                <tr>
                    <td>Amount</td>
                    <td>
                        <b> $ <?php echo $amount; ?></b>
                    </td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status">
                            <option <?php if($status=="On Process"){echo "selected";} ?> value="On Process">On Process</option>
                            <option <?php if($status=="Approval"){echo "selected";} ?> value="Approval">Approval</option>
                            <option <?php if($status=="Reject"){echo "selected";} ?> value="Reject">Reject</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Duration</td>
                    <td><b> <?php echo $duration; ?> </b></td>
                </tr>

                <tr>
                    <td>Project Description</td>
                    <td><b> <?php echo $description; ?> </b></td>
                </tr>

                <tr>
                    <td clospan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Project" class="btn-secondary">
                    </td>
                </tr>
            </table>
        
        </form>


        <?php 
            //CHeck whether Update Button is Clicked or Not
            if(isset($_POST['submit']))
            {
                //echo "Clicked";
                //Get All the Values from Form
                $id = $_POST['id'];
                $status = $_POST['status'];
                $duration = $_POST['duration'];
                $description = $_POST['description'];

                //Update the Values
                $sql2 = "UPDATE tbl_project SET 
                    status = '$status' 
                    WHERE id=$id
                ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //CHeck whether update or not
                //And REdirect to Manage Order with Message
                if($res2==true)
                {
                    //Updated
                    $_SESSION['update'] = "<div class='success'>Project Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-project.php');
                }
                else
                {
                    //Failed to Update
                    $_SESSION['update'] = "<div class='error'>Failed to Update Project.</div>";
                    header('location:'.SITEURL.'admin/manage-project.php');
                }
            }
        ?>


    </div>
</div>

<?php include('partials/footer.php'); ?>
