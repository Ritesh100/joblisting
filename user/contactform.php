<!DOCTYPE html>
<html>

<head>
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="stylesheet" type="text/css" href="../css/aboutus.css">
</head>

<body>
    <nav class="navbar">

        <div class="logo">
            <strong> JOB HERE </strong>
        </div>
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

        <div class="profile" style="float: right;">
            <div class="dropdown">
                <button class="dropbtn">user
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="logout.php">Logout</a>

                </div>
            </div>
        </div>

    </nav>


    <div class="contact-title">
        <h1 style="margin-bottom: 20px;">Say Hello</h1>
        <h2>We are always ready to serve you!</h2>
    </div>

    <div class="contact-form">
        <form id="contact-form" method="post" action="contact-form-handler.php">

            <input type="text" name="name" class="form-control" placeholder="Your Name" required><br>

            <input type="email" name="email" class="form-control" placeholder="Your Email" required><br>

            <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>

            <input type="submit" class="form-control submit" value="SEND MESSAGE">

        </form>

    </div>
</body>

</html>