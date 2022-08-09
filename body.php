<body class="bg-dark">
  <script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
<nav class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Agu C. Christopher</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>  
  <li class="nav-item">
          <a class="nav-link" href="#skills">Skills</a>
  <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>  
        </li> 
  <li class="nav-item">
          <a class="nav-link" href="https://github. com/dev-kay1"> <i class="bi bi-github"></i> </a>
        </li>  
        </li>  
 <li class="nav-item">
          <a class="nav-link" href="https://facebook.com/lrc.agu.don/"><i class="bi bi-facebook"></i></a>
        </li>  
 <li class="nav-item">
          <a class="nav-link" href="https://twitter.com/agucchristophe1"> <i class="bi bi-twitter"></i></a>
        </li>
        <li class="nav-item">
  </li>
      </ul>
    </div>
  </div>
</nav>
<br />
<br />
<br />
<div class="container-fluid">
<div class="d-flex">
        <div class="form-check form-switch ms-auto mt-3 me-3">
          <label class="form-check-label ms-3" for="lightSwitch">
            <i class="bi bi-sun"></i>
          </label>
          <input class="form-check-input" type="checkbox" id="lightSwitch" />
        </div>
      </div>
<div class="row">
 <div class="col-sm-4">
<div class="jumbotron">
  <br />
 <div class="container-fluid">
    <h1 class="intro">Hi, i am</h1>
	<div class="intro">
<h1 id="type"></h1> 
<script>  
let string = "a fullstack Web Developer ";
let array = string.split("");
let string2 = "a Software  Engineer.";
let arr = string2.split("");
let strin = "a Mobile App Developer.";
let arrr = strin.split("");
let string3 = "a young Innovator";
arrrr = string3.split("");
let timerr;
  function looperr() {
if (array.length > 0) {
        document.getElementById("type").innerHTML += array.shift();
if (array.length === 0) {
   document.getElementById("type").innerHTML = "";
}
}
else if (arr.length > 0) {
console.log(array);
document.getElementById("type").innerHTML += arr.shift();
console.log(arr); 
if (arr.length === 0) {
document.getElementById("type").innerHTML = "";
}
}

else if (arrr.length > 0) {
document.getElementById("type").innerHTML += arrr.shift(); 
if (arrr.length === 0) {
document.getElementById("type").innerHTML = "";
}
}

else if (arrrr.length > 0) {
document.getElementById("type").innerHTML += arrrr.shift(); 
if (arrrr.length === 0) {
document.getElementById("type").innerHTML = "a Techie - The Future Is Now";
}
}
else if (arrr.length === 0 && arr.length === 0 && array.length === 0) {
console.log("Done writing 😁")
}
timerr = setTimeout('looperr()', 150); 
  }
 looperr();
    </script>
	</div>

 <p><a href="#me" class="btn btn-primary btn-lg" role="button">
 Learn more <i class="bi bi-arrow-right-circle"></i></a>
 </p>
</div>
  </div>

</div>
  <div class="col-sm-8">
    <img class="img-fluid" src="images/learn.jpg" alt="" />
  </div>
 </div>
</div>
<br />
<hr id="contact" />
<div class="container-fluid">
<div id="">
<form action="php/form.php" method="get" accept-charset="utf-8">
  <h4 class="center">Contact Form</h4>
  <div class="input form-control">
    <i class="fa fa-user"></i>
    <input type="text" name="sender" id="" class="formi" placeholder="Your Full Name" /> </div>
    <br />
    <div class="form-control input">
      <i class="fa fa-phone"></i>
    <input type="number" name="phone" placeholder="Phone Number" class="formi"value="" /> </div>
    <br />
    <div class="form-control input">
      <i class="fa fa-message"></i>
    <input name="message" class="formi" name="message" placeholder="Message..."/>
</div>
    <br class=""/>
    <button style="float:right;" class="btn btn-primary btn-xs" type="submit">Send</button>
    <br />
    <br />
    <h1 class="rowbtn">OR</h1>
    <div class="rowbtn">
<i class="bi bi-instagram">
  <a class="i text-dark" href="https://instagram.com/devkay1"></a></i>
  <i class="bi bi-facebook"><a class="i" href="https://instagram.com/devkay1"></a></i>
  <i class="bi bi-linkedin"><a class="i" href="https://instagram.com/devkay1"></a></i>
  </div>
</form>
</div>
</div>
<br />
<br />
<br />
<hr />
<!--
<div class="">
<h4 class="intro center">My Projects</h4>
<div id="demo" class="carousel slide" data-bs-interval="5000" data-bs-ride="carousel">
<!--Indicators/dots
<div class="carousel-indicators">     
<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button> 
</div>
<!--The slideshow/ carousel <div class="carousel-inner">     <div class="carousel-item active"> <img src="images/1.jpg" alt="Los Angeles" class="d-block w-100"> </div> <div class="carousel-item"> <img src="images/code.png" alt="2" class="d-block w-100"> </div> <div class="carousel-item">
   <img src="images/1.jpg" alt="New York" class="d-block w-100"> </div>
   </div>
<!--Left and right controls/icons
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">   
<span class="carousel-control-prev-icon"></span> 
</button> 
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next"> 
<span class="carousel-control-next-icon"></span>
</button>
</div>
</div> -->
<hr />
<div class="container">
  <div class="row">
    <div class="col-sm-4">
<div id="me"class="card">
 <img class="card-img-top" src="images/mypic.jpg" height="250" width="100%"
 alt="Media Object">
</div>
    </div>
 <div class="col-sm-8">
 <div class="card-body">
   <br />
 <h4 class="card-title underline">About Me</h4>
<h4 id="typeb"></h4> <script>     let strings = "Hi am Agu C. Christopher a Software developer am 14 years old am a Nigerian and hail from Imo State. \n  \n I love coding and watching sci-fi movies  \n\n I currently code with Html, Css, Javascript, React Native, React.js, Bootstrap, Php and Mysql. \n \n Thanks.";
 let arrayy = strings.split("");     let timer;
    function looper() {       if (arrayy.length > 0) {         document.getElementById("typeb").innerHTML += arrayy.shift(""); 
      
    } else {     
    clearTimeout(looper); 
    } 
    timer = setTimeout('looper()', 100);     
    }     
    looper();   
    </script>
 </div>
 </div>
  </div>
</div>
    <hr class="full" />
<script src="js/index.js"></script>
<div id="skills" class="skills">
 <h1 style="text-align:center;">
   <i class="bi bi-code"></i> My Skills and Tools </h1>
   <hr />
   <div class="center">
     <i class="fab fa-html5"></i>
     <span>Level: Intermediate </span>
    <i class="fab fa-css3"></i>
<span>Level: Intermediate </span>
     <i class="fab fa-js"></i>
<span>Level: Intermediate</span>
     <i class="fab fa-react"></i>
  <span>Level: Begineer</span>
     <i class="fab fa-php"></i>
     <span>Level: Intermediate</span>
    
     <i class="fab fa-bootstrap"></i>
     <span>Level: Intermediate</span>
       <i class="fab fa-python"></i>
       <i class="fab fa-apple"></i>
       <i class="fab fa-java"></i>
       <i class="fab fa-swift"></i>
       <i class="fab fa-linux"></i>
       <i class="fab fa-android"></i>
       <i class="fab fa-node"></i>
       <i class="fab fa-figma"></i>
  <i class="fab fa-aws"></i>  
  <i class="fab fa-cpp"></i></div>
     
     </div>
     <hr />
     <div id="project" class="project">
       <h2 class="" style="text-align:center;"><i class="fa fa-tools"></i> Projects and accomplishment</h2>
       <hr />
       <ol>
         <li class="project">
           <h1>My Portfolio</h1>
           <h3>My Second Portfolio made with HTML, CSS, Javascript, Bootstrap, Php</h3>
           <img class="img-fluid" src="images/portfolio.png" alt="" />
           <h3>Status: working </h3>
           </li>
           <li class="project">
             <h1>EasyRoutes</h1>
             <h3>A mobile that is used to order food online made with React Native and Expo</h3>
             <img class="img img-fluid" src="images/easyroutes.png" alt="" />
             <h3>Status: working</h3>
           </li>
       </ol>
     </div>
</body>
</html>
