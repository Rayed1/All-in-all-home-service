
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="houseshifter.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>House Shifting Services</title>
</head>
<body>
    <div class="menu-bar">
    <ul>
        <li ><a href="home2.php"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="#"><i class="fa fa-user"></i>About Us</a>
        <div class="sub-menu-1">
            <ul>

            <li> <button class="bt" onclick="openPopup()"><a href="#">Mission</a></button>
            <div class="pop" id="pop">
                <h3>Our Mission & Vision</h3>
                <p>Our Mission is to create a better everyday life for the many people through our service! And to become country's number one home service platform.
                    We try to give our best to our customer.
                </p>
                <button class="bt" onclick="closePopup()">Close</button> 
            </div>
        </li>
        <li> <button class="bt" onclick="openPopup()"><a href="#">Vision</a></button>
            <div class="pop" id="pop">
                <h3>Our Mission & Vision</h3>
                <p>Our Mission is to create a better everyday life for the many people through our service! And to become country's number one home service platform.</p>
                <button class="bt" onclick="closePopup()">Close</button> 
            </div>
        </li>
                <li><a href="team.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Team</a></li>
            </ul>
        </div>
    </li>
        <li><a href="#"><i class="fa fa-clone"></i>Services</a>
        <div class="sub-menu-1">
            <ul>
                <li><a href="plumbing.php">Plumber</a></li>
                <li><a href="housekeeping.php">House Keeping</a></li>
                <li><a href="electrician.php">Electrician</a></li>
            </ul>
        </div>
    </li>
    </ul>
    <button class="btn"><i class="fa fa-phone"></i>Contact</button>
    <button class="btn">Overview of Service</button>
    <button class="bt"><a href="index.php">Profile</a></button>
    <button class="bt"><a href="logout.php">Logout</a></button>


    <div class="popup popup_multi">

        <div class="open-popup">
            <span class="close close_multi">×</span>
            <h2>Contact</h2>
            <p><i class ="fa fa-map-marker"></i>House # 57, Road # 25, Block - A, Banani, Dhaka 1212</p>
            <p><i class="fa fa-envelope"></i>allinall.xyz</p>
            <p><i class="fa fa-phone"></i>+16216</p>
        </div>

    </div>


    <div  class="popup popup_multi">

        <div class="open-popup">
            <span class="close close_multi">×</span>
            <h2>We Have Two Types of House Shifting Services</h2><br>
            <p>1. House Shifting Service for Family</p>
            <p>2. House Shifting Service for Bachelor</p><br>
            <h2>House Shifting Service for Family</h2><br>
            <p>1. 1 Bedroom moving service with/without packing</p>
            <p>2. 2 Bedroom moving service with/without packing</p>
            <p>3. 3 Bedroom moving service with/without packing</p>
            <p>4. 4 Bedroom moving service with/without packing</p><br>
            <h2>House Shifting Service for Bachelors</h2><br>
            <p>1. Bachelor household goods shifting service within the city</p>
            <p>2. Bachelor household goods shifting outside city</p><br>
            <h2>Pricing & Payment Terms</h2><br>
            <p>1. Pay through online or cash on delivery after completion of service</p>
            <p>2. 20% advance required for order confirmation</p>

        </div>

    </div>
    

    </div>
    <div class="container" id="showcase"></div>
    <div class="container">
        <div class="header">
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Details</h2>
        </div>
        <form id="form" class="form">
            <div class="form-control">
                <label for="username">Name</label>
                <input type="text" placeholder="abc123" id="username" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Email</label>
                <input type="email" placeholder="abc@.com" id="email" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Phone No.</label>
                <input type="text" id="phone"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Address</label>
                <input type="text" placeholder="Your Current Address" id="address"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="schedule">Schedule</label>
                <input type="datetime-local" id="schedule">
            </div>
            <label for="radio">Which Service do you need?</label>
            <section class="radio-section">
                

        <div class="radio-list">
        <div class="radio-item">
                <input type="radio" name="radio" id="radio1">
              
                <label for="radio1">Family House Shifting</label>
            </div>
            <div class="radio-item">
                <input type="radio" name="radio" id="radio2">
                <label for="radio2">Bachelor House Shifting</label>
            </div>
        </div>
    </section>
            <button id="submitfunc" type="submit">Submit</button>
        </form>
    </div>
    <section id="testimonials">
        <div class="testimonial-heading">
            <h1>User Reviews</h1>
        </div>
        <div class="testimonial-box-container">
        <div class="testimonial-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="rayed.jpg">
                    </div>
                    <div class="name-user">
                        <strong>Rayed</strong>
                        <span>@rayed1</span>
                    </div>
                </div>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="client-comment">
                <p>They have the best service in the country!</p>
            </div>
            </div>
            <div class="testimonial-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="nabil.jpg">
                    </div>
                    <div class="name-user">
                        <strong>Nabil</strong>
                        <span>@nabil1</span>
                    </div>
                </div>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="client-comment">
                <p>Decent Service</p>
            </div>
            </div>
            <div class="testimonial-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="syed.jpg">
                    </div>
                    <div class="name-user">
                        <strong>Syed Fahim</strong>
                        <span>@syedfahim</span>
                    </div>
                </div>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="client-comment">
                <p>Reliable and trustable</p>
            </div>
            </div>
            <div class="testimonial-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="sadia.jpg">
                    </div>
                    <div class="name-user">
                        <strong>Sadia Islam</strong>
                        <span>@islamsadia</span>
                    </div>
                </div>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="client-comment">
                <p>Fully satisfied!</p>
            </div>
            </div>

        </div>
        
        
    </section>
    <script src="main.js"></script>

<footer class="footer">
  	 <div class="cnt">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Reach Us</h4>
  	 			<ul>
  	 				<li><a href="#"><i class ="fa fa-map-marker"></i>&nbsp;&nbsp;House # 57, Road # 25, Block - A, Banani, Dhaka 1212</a></li>
  	 				<li><a href="#"><i class="fa fa-envelope"></i>&nbsp;&nbsp;allinall.xyz</a></li>
  	 				<li><a href="#"><i class="fa fa-phone"></i>&nbsp;&nbsp;+16216</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
    
</body>

</html>