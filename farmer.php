<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Farmer</title>

</head>
<body>

    <div id="home-container">

        <div id="inner">

            <h1>Landing Farmer Content Here</h1>
            <p class="subtitle">Agriculture products are most Importantto sustain life. Farmer's are the whole-time need.</p>
            <p class="subtitle">Let's Provide The Best Directly.</p>

            <p>Do login Or Register If new</p>
            <a href="login.php" class="cta cta--white ">Login</a>
            <a href="register.php" class="cta cta--white ">Register</a>
            <br/><br/><br/> 
            <a href="firstpage.php" type="button" class="button"  >Back</a>
        </div>

        <div>
            <img src="logo.JPG" alt =" logo" id="logo">
        </div>
        <div id="illustration">
            <img src="build.JPG" alt="dash img" id="dash" class="crypto-icons">
            <img src="connect.JPG" alt="iota img" id="iota" class="crypto-icons">
            <img src="explore.JPG" alt="eth img" id="eth" class="crypto-icons">  
            <img src="logo.JPG" alt="monitor img" id="monitor" class="main">
        </div>
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
    background-color: black;
    background: #f4f4f4 url("wave.png");
    background-repeat: no-repeat;
    background-position: center;
    width: 100%;
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



#home-container {
    display: grid;
    grid-template-columns: 10px 1fr 10px; 
    grid-template-rows: 10px 1fr 1fr 10px;
    grid-gap: 20px;
    height: 100vh;
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
    margin-top: 170px;
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



