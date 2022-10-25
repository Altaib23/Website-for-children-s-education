
<!DOCTYPE html>
<html dir="rtl">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />


  <title>Search</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
         body {
            background-image: url(i7.jpg);

        color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 16px;
  }
  .table-responsive {
        margin: 30px 0;
    }
  .table-wrapper {
          background-image: url(i7.jpg);

    min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
    border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
  .table-title {        
    padding-bottom: 15px;
    background: #435d7d;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
  }
  .table-title .btn-group {
    float: right;
  }
  .table-title .btn {
    color: #fff;
    float: right;
    font-size: 13px;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
  }
  .table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
  }
  .table-title .btn span {
    float: left;
    margin-top: 2px;
  }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
    }
  table.table tr th:first-child {
    width: 200px;
    text-align: right;
  }
  table.table tr th {
    width: 200px;
    text-align: right;
  }
  table.table tr th:last-child {
    width: 100px;
  }
    table.table-striped tbody tr:nth-of-type(odd) {
      background-color: #fcfcfc;
  }
  table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
  }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    } 
    table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
        margin: 0 5px;
    }
  table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
    outline: none !important;
  }
  table.table td a:hover {
    color: #2196F3;
  }
  table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
  table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
  } 
  </style>
</head>
<body>
<center>
  <form action="#" method="POST">
  <div style="width:25%;margin-top: 100px;box-shadow:20px 20px 50px 15px grey;padding: 2%;background-color: #646060 " >
  <label style="color:white">ID</label><br>
   <input type="text" name="id" class="form-control" required="" placeholder="ID"><br>
      <br><br><br><br><br>

    <input type="submit" name="ch"  value="Search" class="btn-success">
    
  </div>
</form>
</center>

<div class="container">
    <div class="table-responsive">
      <div class="table-wrapper">
        <div class="table-title" style="background-color: #566787;">
          <div class="row">
            <div class="col-xs-2">
              <a href="register.php" class="btn btn-success" data-toggle=""><i class="material-icons">&#xE147;</i> <span>Add User</span></a>
            </div>
            <div class="col-xs-10">
              <h2>Data of all User</b></h2>
            </div>
          </div>
        </div>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Password</th>
               <th>Phone </th>
              <th>Email </th>
              <th>Age</th>
              <th></th>
            </tr>
          </thead>
          <?php 
          if (isset($_POST["ch"]))
          {
            $idd=$_POST["id"];

          $conn=new mysqli("localhost","root","","kid");
          $query = "SELECT * FROM donator WHERE donator_id= $idd";
          $result = mysqli_query($conn,$query);
         
          $line = mysqli_fetch_row($result);
          echo'
          <tbody>         
            <tr>
              <td>'. $line[0] . '</td>
              <td>'. $line[1] . '</td>
              <td>'. $line[2]. '</td>
              <td>'. $line[3]. '</td>
              <td>'. $line[5]. '</td>
              <td>'. $line[4]. '</td>



            
            </tr> 
          </tbody>

          '; }?>
         </table>
      </div>
    </div>        
  </div>
</body>
</html>