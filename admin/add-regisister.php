<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Regisister</h1>

        <br><br>

        <?php 
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

        
        ?>

        <br><br>

        <!-- Add CAtegory Form Starts -->
        <form action="" method="POST" enctype="multipart/form-data">

        <table class="tbl-30">
                <tr>
                    <td> Name : </td>
                    <td>
                        <input type="text" name="name" placeholder=" Name">
                    </td>
                </tr>
                <tr>
                    <td>Phone : </td>
                    <td>
                        <input type="text" name="phone" placeholder="Phone">
                    </td>
                </tr>
                <tr>
                    <td>User name : </td>
                    <td>
                        <input type="text" name="username" placeholder="User Name">
                    </td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td>
                        <input type="text" name="password" placeholder="Password">
                    </td>
                </tr>

                

                <tr>
                    <td>
                        <input type="submit" name="submit" value="Update Regisister" class="btn-secondary">
                    </td>
                </tr>

            </table>


        </form>
        <!-- Add CAtegory Form Ends -->

        <?php 
        
            //CHeck whether the Submit Button is Clicked or Not
            if(isset($_POST['submit']))
            {
                //echo "Clicked";

                //1. Get the Value from CAtegory Form
                $name = $row['name'];
                $phone = $row['phone'];
                $password = $row['password'];
                $username = $row['username'];
                



               

                //2. Create SQL Query to Insert CAtegory into Database
                $sql = "INSERT INTO guardian SET 
                    name = '$name',
                    phone = '$phone',
                    password = '$password',
                    username = '$username'
                ";

                //3. Execute the Query and Save in Database
                $res = mysqli_query($conn, $sql);

                //4. Check whether the query executed or not and data added or not
                if($res==true)
                {
                    //Query Executed and Category Added
                    $_SESSION['add'] = "<div class='success'>Regisister Added Successfully.</div>";
                    //Redirect to Manage Category Page
                    header('location:'.SITEURL.'admin/manage-regisister.php');
                }
                else
                {
                    //Failed to Add CAtegory
                    $_SESSION['add'] = "<div class='error'>Failed to Add Regisister.</div>";
                    //Redirect to Manage Category Page
                    header('location:'.SITEURL.'admin/add-regisister.php');
                }
            }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>