<!DOCTYPE html>
<html>
    <head>
        <title>Job Application</title>
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
                            <li class="dropdown active">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">CAREERS
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">JOB APPLICATION</a></li>
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
        
        <!--Careers paragraphs starts-->
        <br><br>
        <div class="heading">
            <center><h1>Job Application</h1></center></div>
        <div class="careers"> 
            <div class="section1">
                <article>
                    <h3>At Shield Security, We Pride Ourselves On Our Employees</h3>
                    <br>
                    <p><img src="images/service2.jpg" alt="Careers" class="img-responsive">
                        After all, without them, who are we? In our understanding of this, we offer a wide
                        array of the services, tools and benefits and our employees are the best in the 
                        game. From motivating managers, high tech tools, superior training, health and  
                       vacation benefits: these all work to keep our employees happy, healthy and secure 
                       in themselves to do the best job possible.</p>
                    <p>Shield Security, offers our employees a comprehensive benefit program including 
                        three different medical packages, holiday benefits and vacations for qualified 
                        individuals.</p>
                    <p>If you think you have what it takes to be a Shield Security, employee, then please 
                        fill out and submit the form below and be sure to attach your resume. For your 
                        convenience, you may also download our employment application on the right, print 
                        it out and fill it out ahead of time should we call you in for an interview.</p>
                </article>
            </div>
            <div class="Application">
                <h3>ONLINE APPLICATION</h3>
                <form>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="fname">First Name</label>   
                            <input type="text" class="form-control" id="fname" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" id="lname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail Address </label>
                        <input type="email" class="form-control" id="email" required>
                        <br>
                        <label for="phone">Phone Number </label>
                            <input type="text" class="form-control" id="phone">
                            <br>
                        <label for="notes">Notes </label>
                            <p>Describe your past experience and what you think would qualify you for the position you desire.</p>
                            <textarea rows="5" cols="30" class="form-control" id="notes"></textarea>
                            <br>
                        <label>Preferred Contact?</label>
                        <div class="radio">
                            <label><input type="radio" name="contact"> Email</label></div>
                        <div class="radio">
                            <label><input type="radio" name="contact"> Phone</label></div>
                    </div>
                    <input type="submit" value="Send Message">
                </form>
            </div>
            <div class="links1">
                <h3><u>OTHER LINKS</u></h3>
                <a href="companyculture.html">COMPANY CULTURE</a><br>
                <a href="employee.html">EMPLOYEE TRAINING</a>
            </div>
        </div>
        <div class="footer">
            <div class="footcontent">
                <center><p>&copy; 2017 Shield Security. All Rights Reserved.</p></center>
            </div>
        </div>
       
    </div>
    </body>
</html>