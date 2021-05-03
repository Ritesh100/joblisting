
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="employerzone.css">
    <link rel="stylesheet" href="../css/aboutus.css">
    <link rel="stylesheet" href="guest.css">
    <title>home</title>
</head>

<body>
    <nav>
        <div class="menu-icon">
            <span class="fas fa-bars"></span>
        </div>
        <div class="logo">
            JOB HERE</div>
        <div class="nav-items">
            <li><a href="employerzone.php">Home</a></li>
            <div class="portal">
                <div class="dropdown">
                    <li>
                        <a href="#" class="dropbtn" style="font-size:19px;">Portals
                            <i class="fa fa-caret-down"></i>
                        </a>


                        <div class="dropdown-content" style="background-color: rgba(14, 13, 13, 0.849);">
                            <a href="merojob.php">Mero Job</a>
                            <a href="kumarijob.php">Kumari Job</a>
                        </div>
                </div>
            </div>


            <li><a href="aboutus.php">About US</a></li>
            <li><a href="contactform.php">Contact</a></li>

        </div>
 
        <div class="cancel-icon">
            <span class="fas fa-times"></span>
        </div>

        <div class="profile" style="float: right;">
            <div class="dropdown">
                <a class="dropbtn">user
                    <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-content">
                    <a href="logout.php">Log Out</a>

                </div>
            </div>
        </div>

    </nav>
    <script>
    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    menuBtn.onclick = () => {
        items.classList.add("active");
        menuBtn.classList.add("hide");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = () => {
        items.classList.remove("active");
        menuBtn.classList.remove("hide");
        searchBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        form.classList.remove("active");
        cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = () => {
        form.classList.add("active");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
    }
    </script>

    <div class="slideshow-container">

        <div class=" mySlides fade">
            <img src="images/image1.jpg" style="width:100%; height: 400px;">
            <div class="text" style="top: 20%; font-size:30px; color:white">
                <h1 style="color: white;">Welcome To Job Here......<br></h1>
                <h1 style="color: white;">Find Your Dream Job Here</h1>

            </div>
        </div>

        <div class=" mySlides fade">

            <img src="images/job2.jpg" style="width:100%;height: 400px; ">
            <div class="text" style="top: 20%; font-size:30px">
                <h1 style="color: black;">Differents Job Portals <br>
                    <br>on one site
                </h1>
            </div>
        </div>



        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>

    </div>

    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
    </script>
    
    
        <?php include "../simple_html_dom.php";
        $websiteurl="https://merojob.com/services/top-job/?page=1";
        $html = file_get_html($websiteurl);

        $card = $html->find('#search_job .card');

         ?>
        <div class="portals">
            <h1>Available Jobs</h1>
            <?php foreach($card as $c):
                
                if(!(is_object($c->find('h1 a', 0)))) {
                    continue;
                }
                
             ?>
            <div class="card" style="padding: 20px;" >
                <span style="color: white;">Title:  <?php echo $c->find('h1 a', 0)->title; ?></span>
                <br>
                 <span style="color: white;">Address:  <?php echo $c->find('h3', 0)->title; ?></span>
                    <br>
                 <span style="color: white;">Key Skills:  <?php echo $c->find('.media-body > span .badge', 0); ?></span>
                 <br>

                 <a href="https://merojob.com/3d-artist-3/"><button type="submit" style="background-color: darkgrey; color: white;">Apply</button>
                 </a>

                </div>           
        <?php endforeach; ?>

    <footer class="footer " style="background-color: #f2f2f2;">
        <div class="aboutus ">
            <h4 style="margin-left: 50px; ">About Us</h4>
            <p>Job Here is one of the best platform<br> to provide jobto jobseekers and provide <br> the capable
                employer to the company.</p>

        </div>
        <div class="contact ">
            <h4>Contact Us</h4>
            <p class="fa fa-phone "> : XXXXXXX</p><br>
            <p class="fa fa-envelope ">: info@cnmae.com</p>
            <p>jobhere pvt.ltd</p>
            <p>xxx, Kathmandu, Nepal</p>

        </div>
        <div class="socialsites">
            <h4>Find Us at Social sites</h4>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter "></i></a>
            <a href="#"><i class="fab fa-instagram "></i></a>
            <a href="#"><i class="fa fa-envelope "></i></a>
            <a href="#"><i class="fab fa-linkedin "></i></a>
        </div>

    </footer>
</body>

</html>