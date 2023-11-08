<!DOCTYPE html>
<html>
   <head>
       <meta name="viewport" content="with=device-width,initial-scale=1.0">
           <title>
               Balance Galaxy
           </title>
<style>
    *{
    margin:0;
    padding:0;
    font-family: 'Poppins', sans-serif;
}

.header{
    min-height:100vh;
    width:100%;
    background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('https://www.milner.com/images/default-source/articles/blog-header-image-(3).jpg?sfvrsn=a9bc06a6_2');
    background-position: center;
    background-size:cover;
    position:relative;
}

nav{
    display:flex;
    padding:2% 6%;
    justify-content:space-between;
    align-items:center;
}
nav img{
   width:290px;
    
}

.nav-links{
    flex:1;
    text-align:right;
}
.nav-links ul li{
    list-style:none;
    display:inline-block;
    padding:8px 12px;
    position:relative;
}
.nav-links ul li a{
    color:yellow;
    text-decoration:none;
    font-size:20px;
}
.nav-links ul li::after{
    content:'';
    width:0;
    height:2px;
    background:#f44336;
    display:block;
    margin:auto;
    transition:0.5s;

}
.nav-links ul li:hover::after{
    width:100%;
}
.text-box{
    width:90%;
    color:yellow;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    text-align:center;

}
.text-box h1{
    font-size:62px;

}
.text-box p{
margin:10px 0 40px;
font-size:30px;
color:lightgreen;

}
.hn-btn{
    display:inline-block;
    text-decoration: none;
    color:#fff;
    border:1px solid #fff;
    padding:12px 34px;
    font-size:13px;
    background:transparent;
    position:relative;
    cursor:pointer;
}
.hn-btn:hover{
    border:1px solid#f44336;
    background:#f44336;
    transition:1s;
}
nav .fa{
    display:none;
}
/*-- media query for samll device--*/
@media(max-width:700px){
    .text-box h1{
        font-size:20px;
    
    }
    .nav-links ul li{
        display:block;
    }
.nav-links{
    position:fixed;
    background:#f44336;
    height:100vh;
    width:200px;
    top:0;
    right:-200px;
    text-align:left;
    z-index:2;
    transition:1s; 

}
nav.fa{
    display:block;
    color:#fff;
    margin:10px;
    font-size:22px;
    cursor:pointer;
}
.nav-links ul{
    padding:30px;
}
}


/*---footer--*/
.footer{
    width:auto;
    text-align:center;
    padding:30px 0;
    background-color:lightpink;''
   
}
.footer h4{
    margin-bottom:25px;
    margin-top:20px;
    font-weight:600;
}
.icons .fa{
    color:#f44336;
    margin:0 13px;
    cursor:pointer;
    padding:17px;
}


.content {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  height: 100vh;
  position: relative;
}

.slideshow-container {
  max-width: 1000px;
  margin: 0 auto;
}
  
    
</style>      
       
         <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" >
<script src="https://kit.fontawesome.com/332a215f17.js" cross origin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&display=swap" rel="stylesheet">

</head>
<span>
    
</span>
   <body>
       
       
<section class="header">
    
    <nav>
        <div class="nav-links" id="navLinks">
            
            <ul>
                
                <li>
                <a href="{{ url('/music') }}">Music</a>
                </li>
                <li>
                <a href="{{ url('/game') }}">Insect-Game</a>
                </li>
                <li>
                <a href="{{ url('/quiz') }}">Quiz</a>
                </li>
                <li>
                <a href="{{ url('/photogallery') }}">Photo-Gallery</a>
                </li>
                <li>
                <a href="{{ url('/cgpa') }}">CGPA Calculator</a>
                </li>
                <li>
                <a href="{{ url('/waterintake') }}">Water-Intake-Calculator</a>

                </li>
                <li>
                <a href="{{ url('/todo') }}">To-Do-List</a>
                </li>

            </ul>

        </div>
        
       
    </nav>
    <div class="text-box">
        <h1>Balance Galaxy </h1>

        
        <p>Looking for a place for entertainment, Productivity, Making Projects,etc .</p>
      
        <p>You are at right place !</p>

    </div>

</section>


<!-- Slideshow container -->
<div class="content">


<div class="slideshow-container">
  <!-- Slide 1 -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="https://lh3.googleusercontent.com/pw/ADCreHeoQdJrxZl05lwIE2gI40e-9MBl8tHKYgfwJ03Vixh_K9NyRem9nmnWlUwjn-rKFlTi3rdA272_x19FiowIZuPbT2N4G1v7iIlwlqz93nVWNW2SP3f50x4KFygiD6iZGv7opmI1YZSnpIjXwSjOrTNB52tw0JdtQS2-e_1wA0-dSUg5eGGZvkCA-R_1G347xqczNebSzBp6m68OGlMyqpRQgtyBekFf5nhIFZ7Paa1vQi0KCA0Nq36py6vzy2xsr0_Yrs98Qr2CmTSq3SGqwzJ5zJ8b89pN75tnzp-66Yn07MFwhXtPg--vLj3DPTEPyMJ0RzldkrX0JPTGdbzt86fqxvRiLsU0spswA-EWqt2_59wlIw5awAe7-Aja_J4CupxZYBo6CEn7v19dmp2JDAKGARfLrjAvcW9l5sgOuClCSLI-KBUdKDhiY4AKxpjQaVVVyGpLwEzIwsCKx8Rv9aJUTiX9MhGbADxYpY2YiLZR3QFKbW8gTvT6XP8hYW9KziSA2vPPRnOycOHL6fvtL56AHcteFCyZD4rNpv8BZuIgIARPsa1zBUdaJkd-DHiWhZfDqr48MtTTkORS820ADvb59d5Db9cqf-cELIqjJc5e02xlmo6-P1_8vJb1xjVzord9h1NVgIUvriGWsMQXGX6S6pZEOYVhfjonaoUnx3jzUk80RpA95EPp7g_cqtkJiPPvP_ec83kXiDfgeLwPVM4J1GLZQS5bp6nw4QwMElrSzmW7fb_Pjda5qKDFdGLml3GNApaVMIi-Qx1nhMguU6UjyncsLIjrUnJXh1SC0lArwB9rew4JN9EpdpZrFV3mhbbWO7Jm_l_RQ7mNKdHt9Frk81OoE5WLTrYhn3utwjCynpx1isVmUg2tKBeisFZJe2bt3iugtLUdaPCAMfPr7FqANX8W38kS1B63vt5uPH-7QwqUnlrIGx8NHDAO464t_yY_Gj6OzgNUHqwMgPfzleMZgU19BX5O7EJdbq36ntQYzJ1KyJQoFwV1d9IC9LojwC0=w1664-h884-s-no-gm?authuser=1" style="width:100%">
    <div class="text">Photo Gallery</div>
  </div>

  <!-- Slide 2 -->
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="https://lh3.googleusercontent.com/pw/ADCreHfkNDe-TFCapbjCIuRL4EUoGYmCuAZiH--UGVgReV_KGevuZ5_syS2HVMNy7kPEBpEMVJW8Hm7W8PlH6WcwFCuBb_dK93uF5BGkJ_AU5ljQwGbD-lLIptzgYVnVNkAs72xUIN7XQvsSDPJuIeU65hL5-vKBrSnc3TjYi-J2MDm5V81o7Ciqt7ef2zdyFF4dsuGWMW9gMvh8n8Eboz-xKnzVqutD6jjZKRqINVU8UhSk_utih4j4JWzHsw_4geeGGb7aONM2Jho74GXp--_Q3GEJd6wMR9cQNRzw_OCzbpZI15NVqUP3uP4zUiSwoy7tMFmqzOpD3PopZ6XeyB-GCGpq0rTaWIQWILubvpBQd4wzk77tYu7B5u0_DmqLDL0PV4j_g_lKXpDh1Fbo8P-HmrFKMEIfyFLDj8nBEMI-BXKoYbY7j03P2yWeizeDTp_paS6YoRzjsNY45RFPg2RUJoqyQd-_9M8uNqVEq-6WgbL1PPJdn9xLKQjuHqVGfdMXXHlGTBmhIn1NJV8r9cp5flXrLfC8o1iq7yQIMD64wWyIV0xAywyhboc_dZ6yTdptCSQJbLRjQ1jknrDWL1YxR2V8bwv_dnciYERmo5TcloYuLwlOcE8BY0F1U0j_Es9Vot3IOqHM3ykBiVdYKNqifHcoVO1Rwi04-tZTRvhjHax1HNdbfrLrAaGJg0Vkf3voh_eMcuj1hQCjl_Ilcb53L9ilBvNgX2n8E8Y28UczX-BWEIBYZrqyqSnbtUIDFMSXxjOaOEhvgPHyOLF8LEq-Fi4OWUhkYBkQ603Msj6gq5gitZ-KWgYlCQkEMR_ZcpbuuzjUvCnZRWYGB4pe7S5URTox9gTHw362U0cedtbJY2KFr5OtPSDcQJbFmoDQC089kwip-LFP6HasK02VykTv3POwLA6AAin3sYx6enaQFoS6OiYh2iEavmTS0UiFxhUrIQhqI0_RXqydlsRUD43UzA145ml1nIP97OHBsGDv4gw5t-B0qg7IQlSXN66tfB72Nb0=w1664-h884-s-no-gm?authuser=1" style="width:100%">
    <div class="text">CGPA-Calculator</div>
  </div>

  <!-- Slide 3 -->
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="https://lh3.googleusercontent.com/pw/ADCreHdKT7EWGg6hKcj5jhnMTvTx7XcuxzCWh2C_f1EX6fe_2wi9Z20c--56b6Xcd_oYR-00SWVyveTd2yZbzLekLqmhIIieGd84dzjPZvNna96zbAq6WQUVFMrdmCp96iL57Ap9pxQsLdO82DyrDZoeoTkD8DI-RqE1oHwOvfnxYN8dxkgCXgepJD2FnMfc1vzz1LE6d48i7dGBjT-9JlqgLehurISjlKJIliftMEu5Otcf1m3Y5allRwDjtc5uuwtae6OTv_rZYgdzeta6ByMk0Ibu7gQLh40WlL5zy0sGHHQvyS3N5Y1QOD37qZyE2mLzeO-CFxeFvBBBqCNeaTlCL7Q0jHQukkwGMSnq1-8siePECj4LptOiKhOaJRqHB1CbIIkD_QcyhPVlSzBtO5o911sg1bizJi05BGqxZv5vYi9d6TWtH97qWA3GIe-CL7W0Q2NFc8iVE-n3SBzbB6lb5RZAOQIKtS0-GFcxKKYOspzMvSywj-ow0oy6dUZoBY9a0OFh14Z21jmMmQGjaEw0IbB2PaeZestevc_iKH4fHUOTAcD47FMqoQqy7SPtptcCmkbIp0oAIj8xNeK25WOW3FTNQowpGKOc6mJ8Y30mcspJPmGbrGYd2cUJ5WU_KKkz-409vQno6lqIVAyfIbAgIwR444WkKXJIlT-ZUIDMJxxJsjWmU6XVLwPpr83GDu_GhWnWVlBtkxmLG_dilSgbWl4xUENDKTlx5K5AZxneQgSWjgyZkE6NxfV9YGH20dMTi7SPQXdEk-rQzdkx65O_f8uP5thRv7RGsgQYvhkMvbw-jo-TFUPEMD3QEr4UtjCaRNAGnjDPhpNbpJsAUpoqECS5d0S0HgKz5wgLM-g7hC5rRtQ9wPS6NSftMWeY0mvU-chJJrYxMB0uym2Ck-eLOlSfcblYhtem5LkrpirMehxuq_TdiBk8cmEh5TTnkRanf3KJntNYv2ZwmI_kYfGf17bMgUMwMS_81M4vf1wo1P-zbFg5oAJjJ5ncY2bjJ7qVApg=w1664-h884-s-no-gm?authuser=1" style="width:100%">
    <div class="text">Water-Intake Tracker</div>
  </div>
</div>

<br>

<!-- The dots/bullets/indicators -->
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

 
<!--footer-->
<section class="footer">
    <h4>
       Thank You For Visiting My Website!!!
    </h4>
    <p> Hope to see you again..Take Care ...</p>
         <div class="icons">
            
            <a href="https://www.facebook.com" class="fa fa-facebook"></a>
            <a href="https://www.instagram.com" class="fa fa-instagram"></a>
            <a href="https://www.linkedin.com" class="fa fa-linkedin"></a>
            <a href="https://www.twitter.com"  class="fa fa-twitter"></a>
            <a href="https://www.whatsapp.com" class="fa fa-whatsapp"></a>
            <a href="https://telegram.org/" class="fa fa-telegram"></a>
            
            
         </div>
         <br>
         <p align="center">Created with 💕 Sweta Mishra</p>
<p align="center"> <img src="https://media4.giphy.com/media/FkdU6Or6txxpPdOsL8/giphy.gif?cid=ecf05e47x5muoglxq2k5i6uskhn6s7moqcs8e0x3xxbw7jl2&ep=v1_stickers_search&rid=giphy.gif&ct=s" width="30"> </p>
</section>



<!---javascript for toggle menu-->
<script>
         var navLinks =  document.getElementById("navLinks");

         function showMenu(){
        navLinks.style.right = "0";
        }
        function hideMenu(){
        navLinks.style.right = "-200px"; 
        }
</script>

   </body>
</html>