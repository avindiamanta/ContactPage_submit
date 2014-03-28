<!DOCTYPE html>
<html lang="en">
 <head>
		<title>HTML</title>
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="bootstrap.min.css" />
		<script src="jquery-2.0.2.min.js"></script>
		<script src="bootstrap.min.js"></script>
		<script src="formscript.js"></script>
 </head>
	<body>
		<div class="row">
		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img src="http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                            	<span>Welcome to <strong>Contact Page</strong></span>
                            </h2>
                            <br>
                            <h3>
                            	<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </h3>
                            <br>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="Second slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Welcome to LOREM IPSUM</span>
                            </h2>
                            <br>
                            <h3>
                            	<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </h3>
                            <br>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="Third slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Welcome to LOREM IPSUM</span>
                            </h2>
                            <br>
                            <h3>
                            	<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </h3>
                            <br>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="left-icon" data-icon="b"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="left-icon" data-icon="a"></span>
			</a>
		</div><!-- /carousel -->
	</div>
	<div class="row">
		 <section class="entry-content contact-content"> 
		 	<div class="col-md-4">
		 		<div class="left-side-background">
		 			
		 		</div>
		 	</div>
            <div class="col-md-4">
            	<div id="result"></div>
	     			<form class="forming-class" action="form_validation.php" method="post">
						NAME:<br /> <input class="information" type="text" name="name"><br />
						EMAIL ADDRESS: <br /><input class="information" type="text" name="email"><br />
						MESSAGE: <br /><textarea class="information" type="text" name="message"></textarea>
						<br />
	      						 <button class="submit_btn" id="submit">Submit</button>
	    	 		</form>
	  		 </div>
	  		 <div class="col-md-4">
		 		<div class="right-side-background">
		 			
		 		</div>
		 	</div>
        </section>
      </div>
	</body>
</html>