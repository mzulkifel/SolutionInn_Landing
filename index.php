<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SolutionInn-Landing Page</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="css/font-awesome.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Theme CSS -->
    <link href="css/landingpage_search.css" rel="stylesheet">
    <link href="css/landingpage_section.css" rel="stylesheet">
    <link href="css/landingpage_testimonials.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">


</head>

<body id="page-top" class="index" ng-app="">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top show">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#"><img src="img/logo.png" alt="SolutionInn Logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a class="page-scroll" href="#">Tutors</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Free Books</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Scholarship</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Games</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="visible-lg visible-md">
                        <a class="page-scroll search_iconing" onclick="divFunction()" href="javascript:void(0)"><i class="fa fa-search search-icon-color"></i></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Sign In</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Registered</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->


    <!--Navigation Bar with Search-->

    <nav id="mainNav2" class="navbar navbar-default navbar-custom navbar-fixed-top hide ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">

                <a class="navbar-brand page-scroll" href="#"><img src="img/logo.png" alt="SolutionInn Logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav1 navbar-left">
                    <form class="" role="search" action="" method="GET">
                        <div class="input-group" id="navigationsearch">
                            <input type="search" autocomplete="off" ng-model="navbarsearch" class="form-control" placeholder="Search" name="navbarsearch" id="navbarsearch">
                            <span class="input-group-addon" onclick="closeFunction()"><i class="fa fa-times-circle "></i> </span>
                        </div>

                        <div class="navbarsearch_result text-left hide" id="searchcompletion2">
                            <ul class="search_answer">
                                <li class="category-style"> <i class="fa fa-search icon-color"></i> <span class="suggest-term">{{navbarsearch}}</span> in <span class="search-category">Textbook Solution</span> </li>
                                <li><a href="">Use an online site to determine what is contained in ...</a>
                                </li>
                                <li><a href="">What surface is represented by r ·a = <span class="search-category">Constantine</span> that is description ...</a>
                                </li>
                                <li><a href="">A particle moves with v = <b>const,</b> along the curve r = k (1 + cos ...</a>
                                </li>
                                <li><a href="">Heating and cooling of a building can be modeled by the ODE ...</a>
                                </li>

                                <a href="#" class="search-category">More...</a>
                            </ul>

                            <ul>
                                <li class="category-style"> <i class="fa fa-user icon-color"></i> <span class="suggest-term">{{navbarsearch}}</span> in <span class="search-category">Freelancer</span> </li>
                                <li><a href="">Use an online site to determine what is contained in ...</a>
                                </li>
                                <li><a href="">What surface is represented by r ·a = <span class="search-category">Constantine</span> that is description ...</a>
                                </li>
                                <li><a href="">A particle moves with v = <b>const,</b> along the curve r = k (1 + cos ...</a>
                                </li>
                                <li><a href="">Heating and cooling of a building can be modeled by the ODE ...</a>
                                </li>

                                <a href="#" class="search-category">More...</a>
                            </ul>

                        </div>
                    </form>

                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a class="page-scroll" href="#">Sign In</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Registered</a>
                    </li>
                </ul>



            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <!--End of Navigation with search -->
    <div class="header-container">
        <div class="video-container">
            <video autoplay loop poster="#" muted>
                <source src="video/video.MP4" type="video/mp4" />
            </video>
        </div>
        <div class="container">
            <div class="intro-text text-center">
                <div class="intro-heading">What are you looking for ?</div>
                <div class="col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6 col-sm-12 brownbackground visible-lg visible-md">
                    <div class=" col-md-offset-2 col-md-4  col-lg-offset-2  col-lg-4 col-sm-12 white">
                        <h4>Solution Library</h4>
                        <i class="fa fa-university fa-3x icon-color"></i>
                        <h5>Over one million tutorials</h5>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 white">
                        <h4>Tutor Directory</h4>
                        <i class="fa fa-book fa-3x icon-color"></i>
                        <h5>More than 10,184 Tutors</h5>
                    </div>
                </div>
                <br>
                <div class="col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6 col-sm-12 nospacing">
                    <form method="get" action="index.php" role="search">
                        <div class="input-group">
                            <input type="search" class="form-control" id="search" autocomplete="off" ng-model="name" required ng-minlength="2" placeholder="Find books , solution , tutors and more ..." name="searchresult" />
                            <span class="input-group-addon">
                            <i class="glyphicon glyphicon-search"></i>
                            </span>
                        </div>
                        <div class="search_result text-left hide" id="searchcompletion">
                            <ul class="search_answer">
                                <li class="category-style"> <i class="fa fa-search icon-color"></i> <span class="suggest-term">{{name}}</span> in <span class="search-category">Textbook Solution</span> </li>
                                <li><a href="">Use an online site to determine what is contained in ...</a>
                                </li>
                                <li><a href="">What surface is represented by r ·a = <span class="search-category">Constantine</span> that is description ...</a>
                                </li>
                                <li><a href="">A particle moves with v = <b>const,</b> along the curve r = k (1 + cos ...</a>
                                </li>
                                <li><a href="">Heating and cooling of a building can be modeled by the ODE ...</a>
                                </li>

                                <a href="#" class="search-category">More...</a>
                            </ul>

                            <ul>
                                <li class="category-style"> <i class="fa fa-user icon-color"></i> <span class="suggest-term">{{name}}</span> in <span class="search-category">Freelancer</span> </li>
                                <li><a href="">Use an online site to determine what is contained in ...</a>
                                </li>
                                <li><a href="">What surface is represented by r ·a = <span class="search-category">Constantine</span> that is description ...</a>
                                </li>
                                <li><a href="">A particle moves with v = <b>const,</b> along the curve r = k (1 + cos ...</a>
                                </li>
                                <li><a href="">Heating and cooling of a building can be modeled by the ODE ...</a>
                                </li>

                                <a href="#" class="search-category">More...</a>
                            </ul>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- Homework Help Section -->
    <section id="services1" class="edgesection">
        <div class="container-fluid">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <p class="white"><span class="heading_section">Leave to have an edge</span></p>
                <p class="white text_detail">
                    Stop messing around around with textbooks. Get the right guidance on your homework and assignments.
                    <br>
                </p>

                <a ng-href="#" class="text_detail"> Read More > </a>
            </div>
        </div>
    </section>

    <!-- How It Work Section -->
    <section id="services2" class="howitworksection">
        <div class="container-fluid">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <p class="sm-margin"><span class="white section-heading">12000+ tutors 24/7 Help </span>
                    <a href="#" class="section-button hidden-xs">Ask A Question</a>
                </p>
                <p class="white text_detail">
                    Ask your questions to our best tutors for quality and timely answers whenever you need and from wherever you are.
                    <br>
                </p>

                <a ng-href="#" class="text_detail"> Read More > </a>
            </div>
            <div class="col-md-4 col-lg-4 visible-lg visible-md">
                <!--Empty Section-->
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="blank_row"></div>
                <p class="white"><span class="heading_section">How It Works</span></p>

                <p class="orange section-heading">Ask a question</p>
                <p class="white">Post your assignments, homework or project and hire the tutor that best fits your needs and budget.</p>

                <p class="orange section-heading">Get a answer</p>
                <p class="white">Obtain best answers within 24 hours</p>

                <p class="orange section-heading">Pay your tutor</p>
                <p class="white">Release payment after you are satisfied.</p>
            </div>

        </div>
    </section>

    <!-- Scholarship Section -->
    <section id="services3" class="scholarshipsection">
        <div class="container-fluid">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <p class="white "><span class="heading_section">Scholarship</span></p>
                <p class="white text_detail">Reward yourself for your most deserved talents
                    <br> If you are struggling for funds for your tuitions and you 
are talented then apply for our monthly scholarships in 
less than 2 minutes and prove that you are truly deserve.  
                </p>

                <a ng-href="#" class="text_detail"> Read More > </a>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section id="services4" class="testimonialssection">
        <div class="container-fluid">
            <p class="text-center section-testimonials-heading">What Student think about us</p>
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel">

                        <div class="testimonial">
                            <div class="testimonial-profile">
                                <img src="img/testimonials/person1.png" alt="" class="img-responsive img-testimonials">
                            </div>
                            <p class="testimonial-description text-center">
                                “We can hire engineers who code in different languages than we write internally. Our Pro is one of the best hires we've made.”
                            </p>
                            <p class="testimonial-title text-center">Web Designer</p>
                            <p class="text-center testimonial-position">Freelance iOS and OSX developer</p>
                        </div>

                        <div class="testimonial">
                            <div class="testimonial-profile">
                                <img src="img/testimonials/person2.png" alt="" class="img-responsive img-testimonials">
                            </div>
                            <p class="testimonial-description text-center">
                                “We can hire engineers who code in different languages than we write internally. Our Pro is one of the best hires we've made. Upwork because Upwork worked for me!”

                            </p>
                            <p class="testimonial-title text-center">Web Designer</p>
                            <p class="text-center testimonial-position">Freelance iOS and OSX developer</p>
                        </div>

                        <div class="testimonial">
                            <div class="testimonial-profile">
                                <img src="img/testimonials/person3.png" alt="" class="img-responsive img-testimonials">
                            </div>
                            <p class="testimonial-description text-center">
                                “We can hire engineers who code in different languages than we write internally. Our Pro is one of the best hires we've made.”
                            </p>
                            <p class="testimonial-title text-center">Web Designer</p>
                            <p class="text-center testimonial-position">Freelance iOS and OSX developer</p>
                        </div>


                        <div class="testimonial">
                            <div class="testimonial-profile">
                                <img src="img/testimonials/person2.png" alt="" class="img-responsive img-testimonials">
                            </div>
                            <p class="testimonial-description text-center">
                                “We can hire engineers who code in different languages than we write internally. Our Pro is one of the best hires we've made.”
                            </p>
                            <p class="testimonial-title text-center">Web Designer</p>
                            <p class="text-center testimonial-position">Freelance iOS and OSX developer</p>
                        </div>

                        <div class="testimonial">
                            <div class="testimonial-profile">
                                <img src="img/testimonials/person3.png" alt="" class="img-responsive img-testimonials">
                            </div>
                            <p class="testimonial-description text-center">
                                “We can hire engineers who code in different languages than we write internally. Our Pro is one of the best hires we've made.”
                            </p>
                            <p class="testimonial-title text-center">Web Designer</p>
                            <p class="text-center testimonial-position">Freelance iOS and OSX developer</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Statistics Section -->
    <section id="services5" class="statspsection">
        <div class="container-fluid">
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <p class="white text-center" style="font-size: 25px;">Students</p>
                <img src="img/statistics/Student Fact.png" class="img-responsive img-statistics" alt="Students on SolutionInn">
                <p class="white text-center" style="font-size: 40px" id="students">0</p>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <p class="white text-center" style="font-size: 25px;">Tutors</p>
                <img src="img/statistics/Tutor.png" class="img-responsive img-statistics" alt="Tutors on SolutionInn">
                <p class="white text-center" style="font-size: 40px" id="tutors">0</p>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <p class="white text-center" style="font-size: 25px;">Assignments</p>
                <img src="img/statistics/Assignment.png" class="img-responsive img-statistics" alt="Assignment on SolutionInn">
                <p class="white text-center" style="font-size: 40px" id="assignment">0</p>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <p class="white text-center" style="font-size: 25px;">Question Answer</p>
                <img src="img/statistics/Student Fact.png" class="img-responsive img-statistics" alt="Answers on SolutionInn">
                <p class="Counter1 white text-center" style="font-size: 40px" id="question-answer">0</p>
                <h2 count-up end-val="873.4"></h2>

            </div>
        </div>
    </section>


    <!-- Tutor Section -->
    <section id="services6" class="tutorsection">
        <div class="container-fluid">
            <div class="white text-center centralizing">
                <span class="becometutor">Become Our Tutor <a href="#" class="tutorbutton">Get Started</a> </span>

            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                    <img src="img/logo_solutioninn.png" class="img-responsive margin-bottom-50">
                    <p class="AboutSolutionInn">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    </p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                   
                  
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <h5 class="margin-bottom-50">Get in touch</h5>
                    <ul class="list-unstyled">
                        <li><a href="/about-us">About Us</a>
                        </li>
                        <li><a href="/contact-us">Contact Us</a>
                        </li>
                        <li><a href="/complains">Complaint</a>
                        </li>
                        <li><a href="/career">Careers</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <h5 class="margin-bottom-50">Company Info</h5>
                    <ul class="list-unstyled">
                        <li><a href="/security">Security</a>
                        </li>
                        <li><a href="/copyrights">Copyrights</a>
                        </li>
                        <li><a href="/privacy">Privacy Policy</a>
                        </li>
                        <li><a href="/condition">Terms & Condition</a>
                        </li>
                        <li><a href="/solutioninn-fee">SolutionInn Fee</a>
                        </li>
                        <li><a href="/promotions">Promotion</a>
                        </li>
                        <li><a href="/jobs">Jobs</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <h5 class="margin-bottom-50">Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="/freelancers-by-skills">Freelancer By Skill</a>
                        </li>
                        <li><a href="/sitemap">Sitemap</a>
                        </li>
                        <li><a href="/blog">Blog</a>
                        </li>
                        <li><a href="/press-releases">Press Release</a>
                        </li>
                        <li><a href="/hire-profreelancers">Hire Pro Freelancer</a>
                        </li>
                        <li><a href="/giveaway-books">Giveaway Books</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                    <h3>CONTACT INFO<h3>
                    </div>
                    
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <h5>Address</h5>
                        <div class="footer-address">
                        <strong>US Office:</strong>
                        <br>
                        1800 Pembrook Drive Suite 3000
                        <br>
                        Orlando FL,32810
                        </div>
                    </div>
                    
                     <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                         <h5 class="UK_Address" >Address</h5>
                        <div class="footer-address">
                        <strong>UK Office:</strong>
                        <br>
                       273-275A Wood Lane Dagenham,
                        <br>
                         London RM8 3NH, UK
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                    </div>
                   
                </div>
            </div>
        </footer>
        
         <div class="container-fluid copyrightrow">
             <div class="container">
                 <div class="row m-y-40 ">
                    <span class="copyright">Copyright &#169; 2017 <a href="#" class="blueanchor">SolutionInn</a> All Right Reserved</span>
                </div>
             </div>  
             
            </div>
    
    
        
        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>
        
        <!--Angular Javascript-->
         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        
        
        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
       
        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" crossorigin="anonymous"></script>
        
        
        
        <!-- Theme JavaScript -->
        
        <script src="js/searchbar.js" type="text/javascript"></script>
        <script src="js/agency.js" type="text/javascript"></script>
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <script src="js/jquery.animateNumber.js" type="text/javascript"></script>
       <script src="js/customstats.js" type="text/javascript"></script>
        
        <!--Custom Script-->
        
        
        <script>
            
            </script>
        
        
            
        <script>
            $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[767,1],
        pagination: true,
        autoPlay:5000,
        dots: true
    });
     
});
            </script>
            
            
           
        
 
    </body>
</html>