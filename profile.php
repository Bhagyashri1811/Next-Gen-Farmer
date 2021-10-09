<?php 
session_start();
$connection = mysqli_connect("localhost","root", "", "project_hcd");
//Auth
if(!isset($_SESSION['username'])){
    header("location:login.php");
}else{
    //echo "username is: " ,$_SESSION['username'];

}

?>


<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
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
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
            <div class="card p-4">
                <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ79J9CUATagpDZSpsMypcBCkkPh6OO_CK-Fw&usqp=CAU" height="100" width="100" /></button>
                    USERNAME :<?php echo $_SESSION['username'] ?><span class="name mt-3">
                        </span> <span class="idd">Username:@<?php echo $_SESSION['username'] ?></span>
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1"> Full Name: <?php echo $_SESSION['fullname'] ?></div>
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1"> Mobile No: <?php echo $_SESSION['mobileno'] ?></span> </div>
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1"> Address: <?php echo $_SESSION['address'] ?> </div>
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1"> City: <?php echo $_SESSION['city'] ?> <br/> State: <?php echo $_SESSION['state']?></div>
                    
                    <div class=" d-flex mt-2"> <button class="btn1 btn-dark"> <a href="editfarm.php">Edit Profile</a></button> </div>
                    <div class=" d-flex mt-2"> <button class="btn1 btn-dark"> <a href="changepassword.php">Change Password</a></button> </div><!-- comment -->
                    <div class=" d-flex mt-2"> <button class="btn1 btn-dark"> <a href="insertcrop.php">Insert Crop Details</a></button> </div>
                    
                    <div class=" d-flex mt-2"> <button class="btn1 btn-dark"> <a href="logout.php">Logout</a></button> </div>
                    
                    <!--<div class="text mt-3"> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> </div>
                    <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                    <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div>-->
                </div>
            </div>
        </div>
        
       
    </body>
</html>
