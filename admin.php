<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style type="text/css">
body {
  background-image: linear-gradient(to Right, #f0efed, #ffe6b3);
}

#btnsubmit {
  background-color: #cc9900;
  color: #f0f0f5;
  margin-top:10px;
}


.seperater
{
  border-style: solid;
  border-width: 3.5px;
  border-color:#664d00;
  padding-top: 32px;
  padding-bottom:32px;
  padding-right:100px;
  padding-left:100px;
  margin-top:180px;
  margin-left:374px;
  position: absolute;
  background-color:#ffffff;
}
#lb
{
text-align:left;
}
.navbar-brand {
    display: inline-block;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    /* margin-right: 1rem; */
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
}
.nav-link {
    display: block;
    padding: 0.5rem 1rem;
}
body {
    font-family: "Poppins", Arial, sans-serif;
  
    /* font-size: 15px; */
    line-height: 1.8;
    /* font-weight: 400; */
    color: gray;
}
.res
{ height:150px;
}
.hero-wrap .slider-text {
    color: #fff;
    height: 300px;
}
.ftco-navbar-light {
    background: transparent !important;
    position: absolute;
    top: 20px;
    left: 0;
    right: 0;
    z-index: 3;
    padding: 0;
	}
	#nav-item2{
  color: #fff;
}
.lbldel{
  color: #f0efed;
  font-size: 1.2em;
}
#lblwelcome{
  font-size: 3.8em;
  color: #fff;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: .5rem;
    font-weight: 500;
    /* line-height: 1.2; */
}.room-img, .hero-wrap, .img, .blog-img, .user-img {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}


</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="lbldel" href="index.html">Deluxe</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	    </div>
	  </nav>
    <!-- END nav -->
	
<div class="hero-wrap" style="background-image: url('images/luxury_hotel.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            
	            <h1 class="mb-4 bread res">Login</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="container">

<div class="seperater" id="lb">
<h1> Login In </h1>
<form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">User Name: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Name" name="UserName">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password: </label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  
  <input type="submit" value="Log In" name="submit" class="btn btn-warning" id="btnsubmit">
</form>
</div>
</div>
</body>
</html>

