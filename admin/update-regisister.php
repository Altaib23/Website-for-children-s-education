<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Regisister</h1>

        <br><br>


        <?php 
        
            //Check whether the id is set or not
            if(isset($_GET['id']))
            {
                //Get the ID and all other details
                //echo "Getting the Data";
                $id = $_GET['id'];
                //Create SQL Query to get all other details
                $sql = "SELECT * FROM tbl_register WHERE id=$id";

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //Count the Rows to check whether the id is valid or not
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    //Get all the data
                                $row = mysqli_fetch_assoc($res);
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
                }
                else
                {
                    //redirect to manage regisister with session message
                    $_SESSION['no-category-found'] = "<div class='error'>Regisister not Found.</div>";
                    header('location:'.SITEURL.'admin/manage-regisister.php');
                }

            }
            else
            {
                //redirect to Manage regisister
                header('location:'.SITEURL.'admin/manage-regisister.php');
            }
        
        ?>

        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>First Name : </td>
                    <td>
                        <input type="text" name="first_name" value="<?php echo $first_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Last Name : </td>
                    <td>
                        <input type="text" name="last_name" value="<?php echo $last_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Age : </td>
                    <td>
                        <input type="text" name="age" value="<?php echo $age; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Card Number : </td>
                    <td>
                        <input type="text" name="card_number" value="<?php echo $card_number; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Gender: </td>
                    <td>
                        <input <?php if($gender=="Fmale"){echo "checked";} ?> type="radio" name="gender" value="Fmale"> Fmale 

                        <input <?php if($gender=="Male"){echo "checked";} ?> type="radio" name="gender" value="Male"> Male 
                    </td>
                </tr>

                <tr>
                    <td>Phone : </td>
                    <td>
                        <input type="text" name="phone" value="<?php echo $phone; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Address : </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $address; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Insurance : </td>
                    <td>
                        <input type="text" name="insurance" value="<?php echo $insurance; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Family Number : </td>
                    <td>
                        <input type="text" name="family" value="<?php echo $family; ?>">
                    </td>
                </tr>


                <tr>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Regisister" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

        <?php 
        
            if(isset($_POST['submit']))
            {
                //echo "Clicked";
                //1. Get all the values from our form
                                $id = $_POST['id'];
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

                
                //3. Update the Database
                $sql2 = "UPDATE tbl_category SET 
                    first_name = '$first_name',
                    last_name = '$last_name',
                    gender = '$gender',
                    card_number = '$card_number',
                    phone = '$phone',
                    address = '$address',
                    insurance = '$insurance',
                    family = '$family',
                    type_family = '$type_family',
                    age = '$age' 
                    WHERE id=$id
                ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //4. REdirect to Manage Category with MEssage
                //CHeck whether executed or not
                if($res2==true)
                {
                    //Category Updated
                    $_SESSION['update'] = "<div class='success'>Regisister Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-regisister.php');
                }
                else
                {
                    //failed to update category
                    $_SESSION['update'] = "<div class='error'>Failed to Update Regisister.</div>";
                    header('location:'.SITEURL.'admin/manage-regisister.php');
                }

            }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>