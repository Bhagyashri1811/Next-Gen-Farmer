<?php 
session_start();
$connection = mysqli_connect("localhost","root", "", "project_hcd");
$editid = $_SESSION['username'];
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location:login.php");
    }
 /*
    else{
    
    $q = mysqli_query($connection, "select farmer_id from crop_details where farmer_id='{$editid}'");
    
    if($editid == mysqli_query($connection, "select farmer_id from crop_details where farmer_id='{$editid}'") ){
        echo 'off';
          header('location:cropdetails.php');
      }
      
      else{
          echo 'else';
    $p = mysqli_query($connection, "insert into crop_details(farmer_id) values('{$editid}')")  or 
      die(mysqli_error($connection));
     if($p){
        echo " <script> alert('Record added');</script>";
         
        header("location:cropdetails.php");
        }
      }
    }*/
//Fetch Data
$editq = mysqli_query($connection, "select * from farmer where username='{$editid}'") or 
die(mysqli_error($connection));
$editp = mysqli_query($connection, "select * from crop_details where farmer_id='{$editid}'") or 
die(mysqli_error($connection));

$editrow = mysqli_fetch_array($editp);
//print_r($editrow);

/* //Auth
if(!isset($_SESSION['username'])){
    header("location:login.php");
}else{
    //echo "username is: " ,$_SESSION['username'];
     
}*/

?>


<html>
    <body><nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="profile.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="cropdetails.php">Crop_Details</a>
      </li>
        </a>

      </li>
    </ul>
    <form class="logout">

        <button class="btn1 btn-dark"><a href='logout.php'>Logout</a></button>
    </form>
  </div>
</nav>
        
        </body>
</html>
<?php
$connection = mysqli_connect("localhost", "root", "","project_hcd");
 //echo $_SESSION['city'];
//Select
$q = mysqli_query($connection, "SELECT
    `crop_details`.`crop_type`
    , `crop_details`.`crop_name`
    , `crop_details`.`unit_price`
    , `crop_details`.`unit_name`
    , `crop_details`.`stock`
    , `crop_details`.`crop_id`
    
FROM
    `crop_details` where farmer_id = '{$_SESSION['username']}'") or die(mysqli_error($connection));

$count = mysqli_num_rows($q);
echo "$count Records Found";
echo "<table border='1'>";
echo "<tr>";
echo "<th>Crop_Type</th>";
echo "<th>Crop_Name</th>";
echo "<th>Unit_Price</th>";
echo "<th>Unit_Name</th>";
echo "<th>Stock</th>";
echo "<th>Crop_Id</th>";
echo "</tr>";

while($row = mysqli_fetch_array($q)){
    echo "<tr>";
    echo "<td>{$row['crop_type']}</td>";
    echo "<td>{$row['crop_name']}</td>";
    echo "<td>{$row['unit_price']}</td>";
    echo "<td>{$row['unit_name']}</td>";
        echo "<td>{$row['stock']}</td>";
        echo "<td>{$row['crop_id']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
<?php
/*
session_start();
$connection = mysqli_connect("localhost", "root", "","project_hcd");
$editid = $_SESSION['username'];
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location:table1.php");
}

//Fetch Data
$editq = mysqli_query($connection, "select * from farmer where username='{$editid}'") or 
die(mysqli_error($connection));
$editrow = mysqli_fetch_array($editq);
//print_r($editrow);

if($_POST){
    $fullname = $_POST['fullname'];
    
    $mobileno = $_POST['mobileno'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $q = mysqli_query($connection, "update farmer set fullname='{$fullname}',
    address='{$address}',city='{$city}', state='{$state}', mobileno='{$mobileno}' where username='{$editid}'") or 
    die(mysqli_error($connection));
    if($q){
        echo "<script>alert('Record Updated');window.location='';</script>";
    }
}*/
?>


<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=3yZdjIABx-Fv5YjcpteH9r9Kq8dsynA2U60gcUJQfweTDA4xHSPu3rG5pyMkfKPxRyvblMsge1nkQ92nW1Zu7GWUIfFe-Pv67JOBQjDpif6Oll2SoQqvGbEVXHSJzyoT6N2XT3o9hFkQqYcQiJalgSny8f1nOvJm7CcSobU0e8zDo4suajFNYdw3ryzWXMtvLerVsna2cUlhzB0yLWb_j02G0UyBq7mt65gUhn4ykrGrzR7D5TZqP3Zz0o_nDTYx_nPK6PMeXSDYlmsst8P6wX1GAldFJQgIAIByc5Y0MmlH2J0SK3nsDJkjy3nIREUGo8ZXuE6kZVvrZJqUy2gmFrJ3Z3HgEgDw14En7Y75_X5nJLSqAX7vxkvfg3t_5xNIBM7d10WXv09Et61HYz81WIN-NO6xzoQH0MjWr22yMnkKGSGihG_vJostfB1a-zsSHQyH7dnSVWhUcsndvnlav1Ersg3IFwpr9P4QZ_fGFFGj-zOfGbR_L08WRNQoBVKcY-hQOeGct2FB9PzS8xOXt_aXTWzxXTVxPygS2i1woscx6EXk6hTstqmstawg2xHbCsdSACtW-pd38pdCyqtfC7CvJ7ZWhgVPMtKlInJNnUJ2hKsALc362dkN1_wKm1BOKBBd5bJItgLd7fYKotyb_y_IaFAUQU29LBiaB_MExmtVWskkWPjbL_gCDZXkd4YNH08CTctnNg6Pl2BZ5cjlyLnQYtwEhbzokuQkuqIZeI8lO5Bm0n6RX3ix7SHcX2C3cNjtq_6HH5KSlOZNYRPfbCG1rBgvLIBNYhXj09ljEstTy98uo8VWIqL7pJNNrAlNGtkCmLmll3xfuTNmXRJ8ySJpOzl5JTKJ-Lkwpje2c4Yk6dAENRO8NHKwKFzWrBwPIq5grqAhihAJHK_uhTVnbwXteiQy8DnPKEf_EzMiQ1SPNH8iPpIFnNHtf1ByJyHBR1U0LfNHyeT1fp9-JkzrIY0Soso1pQ8xEsX3xidyMNeeMwdi3E1hSGK7s86-5l0xXW-OD_oWNuoM-7-HvU5fl8oAuTa_Rn4OQKKxwIwF6VZNkw3lK1NVMM2tyUnce922JAZHCsXfyXHfg3jJWnba7xwymRrtWKoVqIKKX2nu7C5FUFpWLBgSgJ9pKwHp_D9aK4DDine6aX0yH5_i4zP3dXngR5VIuUnelX2Q2GnJ7E4ToTIY7gppY5Qx-GeCqFC8O2l2lDHItI4Clk_khtRD9w" nonce="b724460fd2bbdf16a3206a69f102c471" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9tYWlsLWF0dGFjaG1lbnQuZ29vZ2xldXNlcmNvbnRlbnQuY29tL2F0dGFjaG1lbnQvdS8wLz91aT0yJmlrPTk0YWY3ODcwNjEmYXR0aWQ9MC4xJnBlcm1tc2dpZD1tc2ctZjoxNzEyODkyNDgzODQ2NjIzMjkyJnRoPTE3YzU2YWEzODYxZDUwM2Mmdmlldz1hdHQmZGlzcD1zYWZlJnJlYWxhdHRpZD1mX2t1ZnNnaWNvMCZzYWRkYmF0PUFOR2pkSjhrTXRKb3NsQllfcXp4WUt2NFp5X2JGRzJDNFhzR0ViZXR2eFo5bWRQTS16Q1JIckNzZUQxSUxFdWZCMEJLb0duLWhreEdodGpPQWJ4R01mS3cxRkMwRTVRYnpfVFo3b0thN0piZUNmOWFhZTVWYjJfWjE5c2M3cWRJSlhReTZKdzE0STBabUlpbGUyYjFKcjFVVXRFQV9pbnlSbWxGZHJCUEotWkhaNHJDR0R1RXhFY0lkaExHLUI2cl9oX3pvV3BDN0dsZGlRbHExT2hOblN1Z2ZwaXhwcUNIZVk0czF1WUJLQ0JmMXZjRmpEQW42LVJsamlDMURPaXQzS1c4c1NtbDlHX0Y4VWZkOXNLUENtUnlyNV9hNUswbkQ0SHlIRHdsSFBOU1h4bGZ2MzJ4ZTYwck5XRXRmSHB1QmpEUkdYZEFJZlZKajUtNjJnNmVhT2MxRkhIamRzclpyczgyaEk0WlpnN3RSY3N5U3VIVVpMQ3pmbW9MSkwwekI5bnM1dmRxWnNDQmp0UXRxMG9lSU5hWTRua3RYOW9NQThTZVhBNGdWZm5aUHJTTUZObmhhTHlBdGpfbzJod3hJdnpzelFZRENobjg2WTRfQzJ6SnVscjJ0RVBRSE5aR3JSeEFhdGRxRzgtOFZGWndiQ3JFUTZJUTBqclZuYkg5dmdNTmRIdXlSdENjSmN1Sm1ZRVA1SEp2cVZNUk5MaXp5X3gtYkV2NXc1Vnd2Wjh6VHVWb194SXFVYlZrMFNJQ2xpeGJ5anhkVzBfbDhwci11c3AzckZLOFVvVS1jZ0E2WFFjd05MOUc5RGttSmFlV3oxNWg2aHAycG1pNDRmdTF5YnVYRXhtUDRTMkJVNDh4ZHRxdmdSLWFUMm82QnROOGpXMjZ3Y1B2WlZtOVVjNmpRTkVWdlhlOWpPb0dEZG8"/><style>
            * {
    margin: 0;
    padding: 0
}

body {
        background: #f4f4f4 url("wave.png");
}

.card {
    width: 450px;
    background-color: #f4f4f4;
    border-radius: 10%;
    cursor: pointer;
    transition: all 0.5s;
    height: fit-content;
}

.image img {
    transition: all 0.5s
}

.card:hover .image img {
    transform: scale(1.5)
}

.btn {
    height: 200px;
    width: 200px;
    border-radius: 50%;
}

.name {
    font-size: 48px;
    font-weight: bold
}

.idd {
    font-size: 32px;
    font-weight: 600
}

.idd1 {
    font-size: 20px
}

.number {   
    font-size: 24px;
    font-weight: bold
}

.follow {
    font-size: 12px;
    font-weight: 500;
    color: #444444
}

.btn1 {
    height: 60px;
    border-radius: 5%;
    background-color: #000;
    color: #aeaeae;
    font-size: 22px;
    padding: 5px 5px 5px 5px;
}

.text span {
    font-size: 13px;
    color: #545454;
    font-weight: 500
}

.icons i {
    font-size: 19px
}

hr .new1 {
    border: 1px solid
}

.join {
    font-size: 14px;
    color: #a0a0a0;
    font-weight: bold
}

.date {
    background-color: #ccc
}
a{
    color: white;
}
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
        
.cta {
    background-color:#02d5fa;
    padding: 1em;
    color: #000;
    font-weight: bold;
    margin-right: 5em;
    display: inline-block;
    border-radius: 5px;
    text-decoration: none;
    box-shadow: 0 0 0 0 rgba(7, 7, 7, 0.2);
}

.cta{
  -webkit-animation: pulse 1.25s infinite cubic-bezier(0.50, 0, 0, 1);
  -moz-animation: pulse 1.25s infinite cubic-bezier(0.50, 0, 0, 1);
  -ms-animation: pulse 1.25s infinite cubic-bezier(0.50, 0, 0, 1);
  animation: pulse 1.25s infinite cubic-bezier(0.50, 0, 0, 1);
}
.logout{
    margin-right: 0%;
    margin-left: 80%;
}
        </style>

        <script>

        </script>
    </head>

    <body>
        
        
        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
            <div class="card p-4">
                <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="https://media.nationalgeographic.org/assets/photos/120/983/091a0e2f-b93d-481b-9a60-db520c87ec33.jpg" height="100" width="100" /></button>
                    USERNAME :<?php echo $_SESSION['username'] ?><span class="name mt-3">
                        </span> <span class="idd">Username:@<?php echo $_SESSION['username'] ?></span>
                    <div class=" d-flex mt-2"> <button class="btn1 btn-dark"> <a href="updatecrop.php">Update Crop Details</a></button> </div>
                    <div class=" d-flex mt-2"> <button class="btn1 btn-dark"> <a href="insertcrop.php">Insert New Crop Details</a></button> </div>
                    <!--<div class="text mt-3"> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> </div>
                    <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                    <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div>-->
                </div>
            </div>
        </div>
        
       
    </body>
</html>
