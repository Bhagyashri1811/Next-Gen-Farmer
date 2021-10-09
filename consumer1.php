<?php 
session_start();
$connection = mysqli_connect("localhost","root", "", "project_hcd");
//Auth
if(!isset($_SESSION['consumer_name'])){
    header("location:consumer.php");
}else{
/*    echo "username is: " ,$_SESSION['full_name'];*/

}

if($_POST){
    $city = $_POST['city'];
    
        echo " <script> alert('Finding Results');</script>";
          $_SESSION['city'] = $city;
      
        header("location:availfarmer.php");
        
}
      




?>



<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='strylesheet'>
        <link ref = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
        <link ref="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link ref='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js' rel="stylesheet">

        <style>
            * {
    margin: 0;
    padding: 0
}

body {
    
    justify-content: center;
    text-align: center;
    align-items: center;
    position: relative;
    width: 50%;
    background: #f4f4f4 url("wave.png");
}

.card {
    height: 450px;
    width: 100%;
    background-image: "wave1.png";
    background-repeat: no-repeat;
    background-size: 100% 100%;
    border: none;
    border-radius: 15px;
    position: relative;
    overflow: hidden;
    cursor: pointer;
    transition: all 1s;
}

.card:hover {
    background-image: url('https://i.imgur.com/nnGNYwf.png');
    background-size: 100% 100%;
    background-repeat: no-repeat
}

.text1 {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center
}

.text1 h1 {
    color: #000;
    font-size: 40px;
    font-weight: 600;
    font-family: 'Shippori Mincho B1', serif
}

.text2 {
    text-align: center;
    color: #5e94c1
}

.form-control {
    height: 50px;
    width: 400px;
    background-color: #fff;
    border: none;
    border-radius: 20px;
    font-size: 12px;
    position: relative
}

.btn1 {
    align-items: center;
    position: absolute;
    height: 44px;
    width: 44px;
    border-radius: 50%;
    background-color: #3252D1;
    border: none
}

.input-field {
    position: relative
}

.input-field button {
    position: absolute;
    top: 3px;
    right: 3px;
    color: #fff;
    font-size: 14px;
    cursor: pointer
}

.card .icons {
    position: absolute;
    bottom: -340px;
    left: 40%;
    transition: all 0.5s
}

.card:hover .icons {
    bottom: 40px
}

.card .icons span {
    font-size: 23px;
    color: white
}

body .bbbootstrap {
    background-image: url(download.jpg) !important;
    background-size: cover;
    padding: 180px 0 60px 0;
        border-radius: 50px;
}

.bbbootstrap {
    padding: 40px;
    margin-bottom: 22px;
    color: #fff;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
    background-color: #2e9df7;
    -webkit-box-shadow: 0 15px 15px -15px rgba(0, 0, 0, 0.25) inset, 0 -15px 15px -15px rgba(0, 0, 0, 0.25) inset;
    box-shadow: 0 15px 15px -15px rgba(0, 0, 0, 0.25) inset, 0 -15px 15px -15px rgba(0, 0, 0, 0.25) inset
}

.bbbootstrap form {
    position: relative;
    width: 540px;
    margin: 22px auto 0
}

span {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-weight: inherit;
    font-style: inherit;
    font-size: 100%;
    font-family: inherit;
    vertical-align: baseline
}

.bbbootstrap form input[type="text"] {
    padding: 15px 20px;
    padding-right: 100px;
    padding-bottom: 10px;
    border-color: transparent;
    border-radius: 4px
}

input.InputBox {
    font-family: "lucida grande", "Lucida Sans Unicode", tahoma, sans-serif;
    color: #333;
    font-size: 15px;
    padding: 3px;
    margin: 0;
    width: 250px;
    background: #fff;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, 0.4)
}

input[type=text] {
    box-sizing: border-box
}

.InputBox {
    display: block;
    width: 100% !important;
    padding: 6px 12px;
    font-size: 15px;
    line-height: 22px;
    border-radius: 4px
}

.bbbootstrap form input[type="submit"] {
    position: absolute;
    top: 5px;
    right: 5px;
    float: right;
    padding: 10px 25px
}

body .Button,
body .button {
    background-color: #1268b3;
    background-image: none
}

input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer
}

.Button,
.Button:hover,
.Button:focus,
.Button:active {
    text-shadow: none;
    border-color: transparent
}

.btn{
        display: block;
        width: 100%;
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
    }
    .btn:hover{
        background-position: right;
    }


.Button {
    display: inline-block;
    padding: 6px 12px;
    vertical-align: middle;
    font-size: 13px;
    font-weight: 700;
    line-height: 22px;
    text-transform: uppercase;
    border: transparent solid 1px;
    border-radius: 3px;
    -webkit-transition: -webkit-box-shadow 50ms;
    transition: -webkit-box-shadow 50ms;
    -o-transition: box-shadow 50ms;
    transition: box-shadow 50ms;
    transition: box-shadow 50ms, -webkit-box-shadow 50ms;
    -webkit-font-smoothing: inherit;
    color: #fff;
    background-color: #2e9df7;
    background-repeat: repeat-x;
    background-color: #38a2f7;
    background-image: -webkit-linear-gradient(#38a2f7, #2498f7);
    background-image: -webkit-gradient(linear, left top, left bottom, from(#38a2f7), to(#2498f7));
    background-image: -o-linear-gradient(#38a2f7, #2498f7);
    background-image: linear-gradient(#38a2f7, #2498f7)
}

.button1{
    margin: 5px 5px 5px 5px;
       padding: 6px 12px;
}
</style>

    </head>

    <body>
        
        <div class="bbbootstrap">
            <div class="container">
                <form method='post'>
                    <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                    <input name='city' type="text" id="Form_Search" value="" placeholder="Search via your city name choice" role="searchbox" class="InputBox " autocomplete="off">
                    <input type="submit" id="Form_Go" class="Button" value="GO">
                </form>
            </div>
            
        </div>
        
        <br/><br/><br/>
         <div class="button1"> <a href="go_out.php" class = 'btn' >Moving Out</a></div>

        
    </body>
</html>
    

