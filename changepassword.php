<?php 
session_start();
$connection = mysqli_connect("localhost","root", "", "project_hcd");
//Auth
if(!isset($_SESSION['username'])){
    header("location:login.php");
}

if($_POST){
    $opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    //Fetch Old Password From DB
    $q = mysqli_query($connection, "select * from farmer where username ='{$_SESSION['username']}'") or 
    die(mysqli_error($connection));
    $data = mysqli_fetch_array($q);
    if($data['password'] == $opass )
    {
        if($npass==$cpass){
            
            mysqli_query($connection,"update farmer set password='{$npass}' where username='{$_SESSION['username']}' ") or die(mysqli_error($connection));
            echo "<script>alert('Password is Changed ')</script>";
            header('location:login.php');
        }else
        {
            echo "<script>alert('New and Confirm Password Not Matched')</script>";
        }
        
    }else
    {
        echo "<script>alert('Old Password Not Matched')</script>";
    }
}

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
        <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=_ffNoozceNSYUopb1ApyAQFt8pkawdnuWWWLxmxOUCjjFH7whIbNFxPz9ym8LueCIRusrG8nv4oQ7opKB7Bd-EJRegqV8XpB4DS_CQ0lP0GAJgzcGPM7ITIiJJMehA7Le5d8PwPhtEFp-c6IPTtlLU346CbOcdkeyvVNKUacVL6SP2eI90Zh-Ed5SQSthW127OBr2E8bG95aUuy5Pz3TDhCeRWGKmLryfPaYy7vKEZVMozTjGHKZX1N40L4wgebVCzSXMrLLvaELxs-B0625r5rfeiRoFPxhly0GS8gyV4hLMP3epP30O80vXNiBItVfdZFiURNUJnn62zKSrU5KZ59oMI1udXh7AQfdmvwzSu_6_ecRiseDnp-cEFfHmxqEipLHzBJSH5csoI9mrKZ9tT8WRgOl0uf9Z4ptVOsWzSaEw1OTDhP1a-oRLsJS-uCC0TT6HpHgxZc6adC57jXd5Zeg1g6-VmIhOA0D5k6ptBZ9k_mymcqKhGe9iVWcG3x7L2Vg4rEJkTT6ujQpX4TFyFROYXuLqHCqAEpIt-cEQDo4aimxSqFPFBfzdFHH4e3OW80pfZAmToRrTAo9Pe5HMObEFgZM3JzHeFg47eL4zrbVbK_HJNlGjUI0Fje_0GRR9zwuBkkR7y-HW9tPYIJt6zozNixPnuYbtCoTaSkMdXGdo-dVOq6c8iS82LpKLLuXGlBS_rNJhRFG5uEyPBek66piQYadsIr-geN4e7W8IzypZ7Bt8bKJGgoNjYIGHFcR7TKhnlyFoPWkFKBaspf2ZgcqRc-MxOn-6OZfoo8_t-dfA5L-HYa1ndDMzE8-YTjxzf0siCAjmpKFJnKuysqtt5ZmYboOqiY--9oCuh1rPBeTJG5xy-H6oe3HGHp0ryZtqFrEp8WadobUZN4udU1bDJS6N9q4ttW3CtYd3iuCGtTKK7F7wW5pDkb3z0dI93-qipbE9ctRIpD8GEreivK-qvl94LCnJV666u1P1ZkO4Phyvszp64c_kRIvi8V8GkU_xQ7BSYhRbbYNNdjfqXQYUNaPZ4w2nbBTvuUvOWgcs17gBzN3sgDgp5-CZmEBZ9gYP99W5LABqozU5a73hwZ5LeDQ2KpqzRvRPtHXbhB_67QYfr4cOT9tWGpBAGWfOZQZgFD7f4H9kqngjzIN1DaW8eeyOIGTVHHJQDgDHSWHE2s" nonce="5643d0970de68cb7c2ebed77dd0b4696" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9tYWlsLWF0dGFjaG1lbnQuZ29vZ2xldXNlcmNvbnRlbnQuY29tL2F0dGFjaG1lbnQvdS8wLz91aT0yJmlrPTk0YWY3ODcwNjEmYXR0aWQ9MC4xJnBlcm1tc2dpZD1tc2ctZjoxNzEyODk1MjY5NDE0Njk4OTc3JnRoPTE3YzU2ZDJjMTZlOGZmZTEmdmlldz1hdHQmZGlzcD1zYWZlJnNhZGRiYXQ9QU5HamRKOTdzN0p5Tk5hWC1Ma2Fxc2ZjYmJxN3lWaDJKTXJGc01GeUJJcEV4WTFIbzdrdjFMd3VYOGFzUzV0U25jaVUwbXhFbm5ELXpBdlpuaFpOWXczd0VMczR0d1B4TjUxUnhnZlFZWGhCM2xQYmktTWkwLVlrX1ZCT256VzNVM3Y5YUtKWGZEMDNzUWV1M1VST2ZTZHdsUFQtUjZ0VTE2UG5IdzJtVWQ1cHAwTFlyX2RjR0VOaUpENy0zeFFiTmJJcWF6dlRIakR1eGNCclFnNTVVLTdGdGt2T2lZUjJEN1pMc0p0RkNyS1dfWVNqM2xUV2h5bzlqVmtoLVdfWHhsY3BhX1ZvNmFORkFySk1Fc2trOXgtZnpZWEpBNS1DTEVwNTAtYlBPenFrajdiYzZsTXNZODFFNC1tVmo0dXVCd0xwSnkxenhXUVJzTmRubmRlN1pIaUxtY3IzbU1sb3ZuZkJ4QmZNS2c3SmhreFpPWXU5LW1qbFQ5MlRqYjVENGZjY1Jfb2NOUmhyRHZMOFA2NmRJV3RtcnZpOFJucEZLV0U3Z0Z1MDA3czNza3g1dlBMdjNnLTAtc3FlaENvZmNOYk9iTkpJbmduNVBkNGs4ZzNtRTlRaVhDS280UmZnUEJqcFNLWlZnVkpjQnQtYTZ1eWQ1T2hoN296c2hXVUk3OUJ0UlBIOWRHZ19ZanBLb3FLcEVtN0RtMjRNendBRXFWSjVORks3QjdVWksyVHJxS01NVmZXTlRaams4N1pTTjRWVzM4SC1BMTJ5RUdzVVNjVUVTNXpsa1dJZHpkdF8yT3RVUFVraTVyX2VTR1RCTXVoQTltLXJUb2dlVzJ6cHY0eVpQMW1YYVpGc29XZFhUSVlOeUVtLWlMN1JwdjVQclc2STMyc29xam5ZYzNMNDlBbXZta01BaTNHdjFkQQ"/><style>
            * {
    margin: 0;
    padding: 0
}

body {
        background: #f4f4f4 url("wave.png");
}

.card {
    width: 650px;
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
    width: 100px;
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
input{
    border-radius: 10px; 
}
        </style>

        <script>

        </script>
    </head>

    <body>
        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
            <div class="card p-4">
                <form method="post"> 
                <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ79J9CUATagpDZSpsMypcBCkkPh6OO_CK-Fw&usqp=CAU" height="100" width="100" /></button>
                    USERNAME :<?php echo $_SESSION['username'] ?><span class="name mt-3">
                        </span> <span class="idd">Username:@<?php echo $_SESSION['username'] ?></span>
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1">&nbsp;Old Password:<input type="text" value="" name="opass"/></div> <br/>
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1">&nbsp;&nbsp;&nbsp;&nbsp;New Password:<input type="number" value="" name="npass"/></span> </div><br/>
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confirm Password:<input type="textarea" value="" name="cpass"/> </div><br/>
                    <input type="submit" value="Edit" class="btn1 btn-dark">
                    <div class=" d-flex mt-2"> <button class="btn1 btn-dark"> <a href="profile.php">Profile</a></button> </div>
                    <!--<div class="text mt-3"> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> </div>
                    <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                    <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div>-->
                </div>
            </div>
                </form>
        </div>
        
       
    </body>
</html>
