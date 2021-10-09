<?php
session_start();
$connection = mysqli_connect("localhost", "root", "","project_hcd");
 //echo $_SESSION['city'];
//Select
$q = mysqli_query($connection, "SELECT
    `farmer`.`fullname`
    , `farmer`.`address`
    , `farmer`.`state`
    ,`farmer`.`city`
        ,`farmer`.`mobileno`
FROM
    `farmer` where city = '{$_SESSION['city']}'") or die(mysqli_error($connection));

$count = mysqli_num_rows($q);
echo "$count Records Found";
echo "<table border='1'>";
echo "<tr>";
echo "<th>Farmer_name</th>";
echo "<th>address</th>";
echo "<th>state</th>";
echo "<th>City</th>";
echo "<th>Mobile No</th>";
echo "</tr>";

while($row = mysqli_fetch_array($q)){
    echo "<tr>";
    echo "<td>{$row['fullname']}</td>";
    echo "<td>{$row['address']}</td>";
    echo "<td>{$row['state']}</td>";
    echo "<td>{$row['city']}</td>";
        echo "<td>{$row['mobileno']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
<html>
    <style>
        
        table{background: #f4f4f4;
        }
        
        
  table, td {
      border-collapse: collapse;
      border: 1px solid #00ADEF;
  }
  
  td{
      padding:10px 10px 10px 10px;
  }
  
  
  th{
      font-size: 28px;
      text-align: center;
      padding: 3px;
  } 
    table, tr, td{
    border: none;
  }
        
.btn{
        display: block;
        width: 20%;
        height: 50px;
        border-radius: 25px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #329dbe, #d34f38, #b0be32);
        background-size: 200%;
        font-size: 1.2rem;
        color: #fff;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: .5s;
        text-align: center;
        margin-left: 25%;
    }
    .btn:hover{
        background-position: right;
    }
        </style>
        <a href="consumer1.php" class = 'btn' >Search Again</a>
        <a href="go_out.php" class = 'btn' >Moving Out</a>

</html>


