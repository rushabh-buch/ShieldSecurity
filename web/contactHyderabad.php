<!DOCTYPE html>
<html>
    <head>
        <title>Contact us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/customCss.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid" id="main">
            
            <!--Navigation Bar Starts-->
            
            <nav class="navbar navbar-inverse navbar-fixed-top navigationbar">
                <div class="container-fluid">
                    <div>
                        <a class="navbar-brand" href="index.html">
                            <img src="images/shield_security.png" alt="Shield Security" width="60" height="60" id="logo"/>   
                        </a>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navforsmall">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navforsmall">
                        <ul class="nav navbar-nav text-center">
                            <li>
                                <a href="index.html">HOME</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT US
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="aboutus.html">MISSION AND VISION</a></li>
                                    <li><a href="people.html">OUR PEOPLE</a></li>
                                    <li><a href="ourteam.html">OUR TEAM</a></li>
                                    <li><a href="clients.html">CLIENTS</a></li>
                                    <li><a href="news.php">NEWS</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICES
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="training.html">TRAINING</a></li>
                                    <li><a href="training-facelities.html">TRAINING FACILITIES</a></li>
                                    <li><a href="surveillance1.html">SURVEILLANCES</a></li>
                                    <li><a href="mobile-patrol1.html">MOBILE PATROL</a></li>
                                    <li><a href="residential-security1.html">RESIDENTIAL BUILDING SECURITY</a></li>
                                    <li><a href="crossingguards1.html">CROSSING GUARDS</a></li>
                                    <li><a href="event1.html">EVENT SECURITY</a></li>
                                </ul>
                            </li>
                            <li class="dropdown active">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">CONTACT US
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="contactMumbai.php">MUMBAI</a></li>
                                    <li><a href="contactPune.php">PUNE</a></li>
                                    <li><a href="#">HYDERABAD</a></li>
                                    <li><a href="contactDelhi.php">DELHI</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">CAREERS
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="job.php">JOB APPLICATION</a></li>
                                    <li><a href="companyculture.html">COMPANY CULTURE</a></li>
                                    <li><a href="employee.html">EMPLOYEE TRAINING</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">LOGIN</a></li>
                        </ul>
                </div>
                </div>
                <div class="container-fluid" style="box-shadow: 0 3px 2px black;  height: 0.3vh;"></div>
            </nav>
            <!--Navigation Bar Ends-->
        <br><br>
        <div class="heading">
            <center><h1>Security Services - Hyderabad</h1></center>
        </div>
        <br>
    <center><h3>We are an established full service security firm with locations in Hyderabad. Please call 040 2331 9036 for a free security services quote.</h3></center><hr>
        <div class="contactmain">
            <div class="row">
                <div class="col-md-12 address">
                    <h3 style="color: #006699">Hyderabad Office</h3>
                    <hr>
                    <p>Ground Floor, Badam Sohna Apartment,<br> Raj Bhavan Rd, Raj Bhavan Quarters Colony, Somajiguda,<br> Hyderabad, Telangana 500082</p><hr>
                    <h3>CONTACT US - 040 2331 9036 </h3><hr>
                    <h3>MAIL US - <a href="mailto:info@shieldsecurity.com">info@shieldsecurity.com</a></h3><hr>
                </div>
            </div>
            <div class="row contactform">
                <h3 style="color: #006699">CONTACT FORM</h3><br>
                <form>
                    <div class="form-group">
                        <label for="name"><h4>Name: </h4></label>
                        <input type="text" class="form-control" required id="name">
                    </div>
                    <div class="form-group">
                        <label for="email1"><h4>Email: </h4></label>
                        <input type="email" class="form-control" required id="emaail1">
                    </div>
                    <div class="form-group">
                        <label for="subject"><h4>Subject: </h4></label>
                        <input type="text" class="form-control" required id="subject">
                    </div>
                    <div class="form-group">
                        <label for="message"><h4>Message: </h4></label>
                        <textarea class="form-control" rows="4" required id="message"></textarea>
                    </div>
                    <br>
                    <input type="submit" value="Send Message">
                </form>
            </div>
        </div>
        <div class="footer1">
            <div class="footcontent">
                <center><p>&copy; 2017 Shield Security. All Rights Reserved.</p></center>
            </div>
        </div>
    </div>
    </body>
</html>
