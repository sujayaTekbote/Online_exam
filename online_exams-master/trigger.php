<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> TEST YOUR SKILL </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>


  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>

<div class="header">
<div class="row">
<div class="col-lg-6">
<h1 style="background-color:orange">Exam time!!!</h1></div>
<div class="col-md-4 col-md-offset-2">
 <?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
}?>
</div>
</div></div>
<!--alert message end-->

<?php
      include_once 'dbConnection.php';
      $records=mysqli_query($con,"SELECT * FROM logs");

    ?>
<!DOCTYPE html>
<head>
<style>
            .button
            {
                width:200px;
                height:50px;

                margin-top:80px;
                background:#9ACD32;
            }

    #table1
    {
        background:white;
    }
    </style>
    </head>

<html>
    <head><title> record4</title >
        </head>
    <body bgcolor="#FFE4E1"></body>
    <center>
  <table class="table table-striped title1" >
        <tr>
            <th> ID</th>
            <th> Username</th>
            <th>Gender</th>
            <th>College</th>
            <th>Email</th>

              <th>registration_time</th>
              <!-- <th>price</th> -->


        </tr>
        <?php
        while($user=mysqli_fetch_assoc($records))
        {
            echo "<tr>";
            echo "<td>".$user['id']."</td>";
            echo "<td>".$user['name']."</td>";
            echo "<td>".$user['gender']."</td>";
            echo "<td>".$user['college']."</td>";
            echo "<td>".$user['email']."</td>";
      
              echo "<td>".$user['time']."</td>";
            // echo "<td>".$user['price']."</td>";


           echo" </tr>";


        }
        ?>
    </table>
         <form name="record" action="trigger.php" width="50px" >
              <a href="account.php?q=1"><input type="button" name="button" value="back" class="button"/></a>
        </form>
        </center>

</html>
