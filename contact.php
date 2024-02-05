<?php
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    
    <!-- <link rel="stylesheet" href="contact.css"> -->

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito&display=swap");

* {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  font-family: "Nunito", sans-serif;
}
.navigation {
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url(https://img.freepik.com/premium-photo/young-businesswoman-making-phone-call-with-her-customer_67155-5280.jpg?size=626&ext=jpg);
    height: 482px;
}

nav ul{
    margin-left: 13%;
    display: flex;
}
nav li{
    margin-top: 20px;
    display: inline-block;
}
nav li a{
    
    color: black;
    margin: 5px 30px 0px 0px;
    text-decoration: none;
    font-size: large;
}

#home:hover,#about:hover,#service:hover,#contact:hover,#login:hover,#signup:hover{
    font-weight: bold;
    text-decoration: underline;
}

#main-heading {
    margin: 2% 0% 0% 20%;
    font-size: xx-large;
    color: orangered;
}

#tagline {
    margin: 15% 0% 0% 13%;
    font-size: large;
    color: black;
}

#heading2 {
    margin: 1% 0% 0% 13%;
    font-size: 70px;
    font-weight: bolder;
    color: black;
}

.contactbox {
    display: flex;
    margin: 3% 10% 0% 10%;
}

.contact {
    width: 50%;
    /* border: 1px solid black; */
}

.contactform {
    width: 50%;
    /* border: 1px solid black; */
}

.homehead1 {
    text-align: justify;
    margin: 7% 0% 0% 15%;
    font-size: 20px;
    font-weight: bold;
}

.homehead2 {
    text-align: justify;
    margin: 1% 0% 3% 15%;
    font-size: 30px;
    font-weight: bolder;
}

.phonemail {
    width: 100%;
    margin: 0% 0% 0% 10%;
    /* border: 1px solid black; */
    display: flex;

}

.boxes {
    margin: 5% 0% 0% 5%;
    width: 50%;
    padding: 0%;
}

.boxes img {
    width: 30px;
    height: 30px;
    margin-bottom: -10px;
}

.follow {
    margin-top: 5%;
    margin-left: 15%;
    font-size: 20px;
    font-weight: bold;
}

.media {
    display: flex;
}

.media img {
    width: 30px;
    height: 30px;
    /* border: 1px solid orangered; */
    margin-left: 10px;
}

form {
    margin-top: 8%;
    margin-left: 0%;
    /* border: 1px solid black; */
}

input {
    display: block;
    margin: 2% 0% 0% 20%;
    width: 50%;
    height: 30px;
}

button {
    margin: 2% 0% 0% 20%;
    width: 20%;
    height: 30px;
    border-radius: 10px;
    background-color: orangered;
    border: none;

}
button:hover{
    font-weight: bold;
    position: relative;
   border: 2px solid black;
   width: 21%;
   height: 35px;
}
.div_heading,
.div_nav {
    padding-left: 0%;
    display: inline-block;
    vertical-align: top;
    width: 45%;
}
.navbar {
    margin: 1% 5% 0% 20%;
    /* border: 1px solid red; */
    float: right;
    display: inline-block;
}

.navbar a {
    margin-right: 5px;
    padding: 0px 10px 0px 10px;
    text-decoration: none;
    color: black;
}

.navbar a:hover {
    text-decoration: underline;
}

footer {
    background-image: url(https://img.freepik.com/premium-photo/young-businesswoman-making-phone-call-with-her-customer_67155-5280.jpg?size=626&ext=jpg);
    background-size: cover;
    margin-top: 5%;
    height: 50px;
    margin-bottom: 1%;
    display: flex;
}

#copyright {
    margin: 1% 0% 0% 10%;

}

    </style>
</head>

<body>
    <div class="navigation">
        <header>
            <nav>
                <ul>
                    <li id="home"><a href="Home.html">Home</a></li>
                    <li id="about"><a href="About.html">About</a></li>
                    <li id="service"><a href="services.html">Services</a></li>
                    <li id="contact"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
    </header>

        <p id="tagline">Get in touch</p>
        <p id="heading2">Contact</p>
    </div>
    <div class="contactbox">


        <div class="contact">

            <div class="homehead1">Get in touch</div>
            <div class="homehead2">Contact Details</div>

            <div class="phonemail">
                <div class="boxes">
                    <p> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwHnHqb1X8ZkO_E87HzUTQ9UFHI9hX7UsseCVLQUY4NqsWk1Z-8yvZLUiXkx4mGPrn0HE&usqp=CAU"
                            alt=""><strong style="margin-bottom: 10px; font-size: x-large;"> Phone Number </strong></p>
                    <p style="text-indent: 50px;">8659895687</p>
                    <p style="text-indent: 50px;">8978797852</p>
                </div>
                <div class="boxes">
                    <p> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVLqbpjccQ6kzETDvqvozpTQQorPMr7BtqwLNf_QUr30M4aQe8P7SjSf5ISSfvJtxRQMM&usqp=CAU"
                            alt=""><strong style="margin-bottom: 5px; font-size: x-large;"> Email </strong></p>
                    invest@gmail.com
                </div>
            </div>
            <div class="phonemail">
                <div class="boxes">
                    <p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5cGfdA3WCC3CFGZOLNLXK9iXzOFWSQharDVgw8r-dUZM7-o0svX35acZjmcLxWdoXuGk&usqp=CAU"
                            alt=""><strong style="margin-bottom: 5px; font-size: x-large; margin-left: 10px;">Address</strong></p>
                    <p style="text-indent: 50px;">Nagpur,Maharshtra</p>
                </div>
            </div>

            <div class="follow">
                <p>Follow Us</p>
                <div class="media">
                    <a href=""><img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoekKKr0oVR5KHH4wdcY09SCZuS6z181hlxg&usqp=CAU"
                            alt=""></a>
                    <a href=""><img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxI5A42c5q29IQYq8ci6rasg70WrDm96s-gQ&usqp=CAU"
                            alt=""></a>
                    <a href=""><img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvkaH3MdnHwz1QDFwDTlTUBdc3ugrpXKQ9zw&usqp=CAU"
                            alt=""></a>
                    <a href=""><img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSczKV9YvD3ma-a22O2-vRPk4b1naRzSfJHQQ&usqp=CAU"
                            alt=""></a>
                </div>
            </div>
        </div>

        <div class="contactform">
            <div class="homehead1">Leave your details and query here</div>
            <div class="homehead2">Enquiry form</div>
            <form action="" method="post">
                <input type="text" placeholder="Name*" name="name1">
                <input type="email" placeholder="Email*" name="email">
                <input type="number" placeholder="Phone Number*" name="ph_no">
                <input type="text" placeholder="Type your query here" name="query">
                <button>Submit</button>
            </form>
        </div>
    </div>

    <footer>

        <p id="copyright">copyright 2022 INVEST-O-BULLS|powered by INVEST-O-BULLS</p>
        <div class="navbar">
            <a href="Home.html">Home</a>
            <a href="About.html">About</a>
            <a href="services.html">Services</a>
            <a href="invest contact.php">Contact</a>
        </div>
    </footer>
</body>

</html>'
?>
<?php require 'query.php'?>
