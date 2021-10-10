<!DOCTYPE html>
<html>
    <head>
        <title>Free Consultation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/customCss.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid" id="main">
          <nav class="navbar navbar-inverse navbar-fixed-top navigationbar">
                <div class="container-fluid">
                    <div>
                        <a class="navbar-brand" href="index.html">
                            <img src="images/shield_security.png" alt="Shield Security" width="60" height="60" id="logo"/>   
                        </a>
                    </div>
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target="#navforsmall">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navforsmall">
                        <ul class="nav navbar-nav text-center">
                            <li class="active">
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
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">CONTACT US
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="contactMumbai.php">MUMBAI</a></li>
                                    <li><a href="contactPune.php">PUNE</a></li>
                                    <li><a href="contactHyderabad.php">HYDERABAD</a></li>
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
            
            <br><br>
            <div class="heading">
                <center><h1>FREE SECURITY CONSULTATION</h1></center>
            </div>
            <br>
            <center><h3>Our experienced Security Consultants will provide you with an honest evaluation of your current security situation and suggest the best options to meet your needs.</h3></center><hr>
            <div class="contactmain">
                <form>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="fname"><h4>First Name</h4></label>   
                            <input type="text" class="form-control" id="fname" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lname"><h4>Last Name</h4></label>
                            <input type="text" class="form-control" id="lname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email"><h4>E-mail Address </h4></label>
                        <input type="email" class="form-control" id="email" required>
                        <br>
                        <label for="phone"><h4>Phone Number </h4></label>
                            <input type="text" class="form-control" id="phone">
                            <br>
                        <label for="comments"><h4>Comments / Questions: </h4></label>
                            <textarea rows="5" cols="30" class="form-control" id="comments"></textarea>
                            <br>
                    </div>
                    <input type="submit" value="Send Message">
                </form>
            </div>
            <div class="footer">
                <div class="footcontent">
                    <center><p>&copy; 2017 Shield Security. All Rights Reserved.</p></center>
                </div>
            </div>
        </div>
    </body>
</html>
