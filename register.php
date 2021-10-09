<?php


$connection = mysqli_connect('localhost', 'root', '','project_hcd');

if($_POST){
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $mobileno = $_POST['mobileno'];
    
    $q = mysqli_query($connection, "insert into farmer( username,fullname,password,address,city,state,mobileno)"
            . " values('{$username}','{$fullname}','{$password}','{$address}','{$city}','{$state}','{$mobileno}')")  or 
            die(mysqli_error($connection));
    
    if($q){
        echo " <script> alert('Record added');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Here</title>

</head>
<body>
    
        <div>
            <img src="logo.JPG" alt =" logo" id="logo">
        </div>

    <div id="home-container">

        <div id="inner">

            <h1>Register Here</h1>
            <p class="subtitle">The Change In You</p>

            <div class="login-content">
                <form action="register.php" method="post">
                    <div class="input-div one">
                        <div class="i">
                                <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <input type="varchar" class="input" placeholder="Enter Username" name="username" required="">
                        </div>
                        
                     </div>

                     <div class="input-div one">
                        <div class="i">
                                <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                                <input type="text" class="input" name="fullname" placeholder="Enter Fullname" name='fullname'>
                        </div>
                        
                    </div>

                     <div class="input-div pass">
                        <div class="i"> 
                             <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <input type="password" class="input" placeholder="Password" name='password'>
                     </div>
                  </div>


              <div class="input-div one">
                <div class="i">
                        <i class="fas fa-user"></i>
                </div>
                <div class="div">
                        <input type="text" class="input" name="address" placeholder="Address" name='address'>
                </div>
                
            </div>

            <div class="input-div one">
                <div class="i">
                        <i class="fas fa-user"></i>
                </div>
                <div class="div">
                        <input type="text" class="input" name="city" placeholder="Enter Cityname" name='city'>
                </div>
                
            </div>
            <div class="input-div one">
                <div class="i">
                        <i class="fas fa-user"></i>
                </div>
                <div class="div">
                        <input type="text" class="input" name="state" placeholder="Enter State" name='state'>
                </div>
                
            </div>
                    
                
            <div class="input-div one">
                <div class="i">
                        <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <input type="number" class="input" name="mobileno" placeholder="Enter Mobile Number" name='mobileno' maxlength="15" minlength="10"
                           required="">
                </div>
                
            </div>
                    
                    <input type="submit" class="btn" value="Register">
                    <br/><br/>           
                </form>
            </div>
            Already there Then Login<br/><br/>
            <tr>
                <td>
                    <a href="login.php" class="cta cta--white ">Login</a>
                   
                    <a href="firstpage.php" type="button" class="button">Back</a>
                </td>
            </tr>
           
        </div>


</body>


<style>

* {
    box-sizing: border-box;
}

body,
html {
    font-family: "Montserrat", sans-serif;
    min-height: 100vh;
    margin: 0;
    background-color:black;
}


body {
    background: #f4f4f4 url("wave.png");
    padding: 50px 2px 280px 2px;
    background-repeat: no-repeat;
    background-size: auto;
}

#inner{
    background-color: rgb(182, 198, 250);
    border-radius: 20px;
    opacity: 0.9;
    padding: 20px 20px 20px 20px;
    width: fit-content;
}

.login-content{
	display: flex;
	justify-content: flex-start;
	align-items: center;
	text-align: center;
        width: fit-content;
    
}




form{
        width: 360px;
        height: fit-content;
    }

    .login-content .input-div{
        position: relative;
        display: grid;
        grid-template-columns: 7% 93%;
        margin: 25px 0;
        padding: 5px 0;
        border-bottom: 2px solid #d9d9d9;
        color: black;
    }

    .login-content .input-div.one{
        margin-top: 0;
    }

    .i{
        color: #141414;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .i i{
        transition: .3s;
    }

    .input-div > div{
        position: relative;
        height: 45px;
    }


    .input-div:before, .input-div:after{
        content: '';
        position: absolute;
        bottom: -2px;
        width: 0%;
        height: 2px;
        background-color: #38d39f;
        color: black;
        transition: .4s;
    }

    .input-div:before{
        right: 50%;
    }

    .input-div:after    {
        left: 50%;
    }

    .input-div.focus:before, .input-div.focus:after{
        width: 50%;
    }

    .input-div.focus > div > h5{
        top: -5px;
        font-size: 15px;
    }

    .input-div.focus > .i > i{
        color: #38d39f;
    }

    .input-div > div > input{
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        border: none;
        outline: none;
        background: none;
        padding: 0.5rem 0.7rem;
        font-size: 24px;
        color:black;
        font-family: 'poppins', sans-serif;
    }

    .input-div.pass{
        margin-bottom: 4px;
    }
    

    .btn{
        display: block;
        width: 100%;
        height: 50px;
        border-radius: 25px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #32be39, #27a1e7, #3234be);
        font-size: 22px;
        font-weight:bolder;
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


.button{
            color: rgb(4, 1, 17);
            padding: 10px 25px;
            margin-top: 10000px;
            background: #09c7e9c9;
            border: 1px solid #fff;
            border-radius: 20px;
            outline: none;
            cursor: pointer;
            font-weight: bolder;
            font-size: 12px;
            align-items: center;
}

@media screen and (max-width: 1050px){
	.container{
		grid-gap: 5rem;
	}
}

@media screen and (max-width: 1000px){
	form{
            width: fit-content;
	}

	.login-content h2{
        font-size: 2.4rem;
        margin: 8px 0;
	}

	.img img{
		width: 400px;
	}
}

@media screen and (max-width: 900px){
	.container{
		grid-template-columns: 1fr;
	}

	.img{
		display: none;
	}

	.wave{
		display: none;
	}

	.login-content{
		justify-content: center;
	}
}

#home-container {
    display: grid;
    grid-template-columns: 10px 1fr 10px; 
    grid-template-rows: 10px 1fr 1fr 10px;
    grid-gap: 20px;
    height: 100vh;
    text-align: center;
    margin-left: 25%;
    
}

#inner {
    grid-row: 2;
    grid-column: 2;
    align-self: center;
    justify-self: center;
}

#illustration {
    grid-row: 3;
    grid-column: 2;
    align-self: center;
    justify-self: center;
    width: 100%;
    padding: 10px;
}

.id{
    border-radius: 100px;
}

@media (min-width: 768px) {
    #home-container {
        grid-template-columns: 0.5fr 1fr 1fr 0.5fr;
        grid-template-rows: 1fr;
    }
    #inner {
        grid-column: 2;
        grid-row: 1;
    }

    #illustration {
        grid-column: 3;
        grid-row: 1;
    }
}

img#logo {
    width: 130px;
    margin-bottom: 1.6em;
    border-radius: 100px;
}

h1 {
    text-transform: uppercase;
    color: #0c0c0c;
    margin-top: 140px;
    margin-bottom: 0.2em;
}

p.subtitle {
    font-size: 1.4em;
    color: #000000;
    margin-top: 0;
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

@-webkit-keyframes pulse {to {box-shadow: 0 0 0 20px rgba(0, 0, 0, 0.76);}}
@-moz-keyframes pulse {to {box-shadow: 0 0 0 20px rgba(0, 0, 0, 0);}}
@-ms-keyframes pulse {to {box-shadow: 0 0 0 20px rgba(3, 3, 3, 0);}}
@keyframes pulse {to {box-shadow: 0 0 0 20px rgba(0, 0, 0, 0);}}

#monitor {
    animation: monitorIn 5s ease-in-out forwards;
    opacity: 0;
    border-radius: 50px;
}

.crypto-icons {
    position: absolute;
    width: 100px;
    border-radius: 60%;
    opacity: 0.6;

}

.crypto-icons path.b {
  fill: red;
}

.main{
    width: 600px;
    opacity: 0.8;
}

#dash {
    margin-top: 0%;
    margin-left: 9%;
    animation: chatblips  ease-in-out 5s forwards ;
    opacity: 0;
    z-index: 2;
    opacity: 0.8 ;
}

#eth {
    margin-top: 13%;
    margin-left: 22%;
    animation: chatblips ease-in-out 5s forwards ; 
    opacity: 0.8;
    z-index: 2;
}

#iota {
    margin-top: 15%;
    margin-left: 5%;
    animation: chatblips ease-in-out 5s forwards ; 
    opacity: 1;
    z-index: 2;
}

@keyframes monitorIn {
    from {
        transform: translateY(-30px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes chatblips {
    0% {
        opacity: 1;
        transform: scale(0.9);
        transform: translateY(0vh) ;
    }
    50% {
        opacity: 0.3;
        transform: scale(1);
        transform: translateY(5vh) ;
    }
    70% {
        opacity: 0.6;
        transform: scale(0.9);
        transform: translateY(10vh);
    }
    100% {

        transform: scale(1);
        opacity: 0.3;
    }
}
</style>
</html>



