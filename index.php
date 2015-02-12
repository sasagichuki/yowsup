<?php require_once( 'nkemi-admin/cms.php' ); ?>
<cms:template title='Home Page' />
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nkemi Consulting</title>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="css/flexslider.css" rel="stylesheet" >
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/queries.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body id="top">
        <header id="home">
          <nav>
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                <cms:editable name='menu' type='richtext'>
                  <nav class="pull">
                    <ul class="top-nav">
                      <li><a href="#intro">About Nkemi <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#features">What we do <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#portfolio">Portfolio <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#team">Our Team <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#contact">Get in Touch <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                    </ul>
                  </nav>
                </cms:editable>
                </div>
              </div>
            </div>
          </nav>
          <section class="hero" id="hero">
            <div class="container ">
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
              <div class="row ">
                <div class="col-md-8 col-md-offset-2 text-center inner">
                  <div class="logo-pad animated"><img src="img/nkemilogo.png" alt=""></div>
                  <cms:editable name='tag_line' type='richtext'>
                    <h2 class="tagline delay-05s">Ground breaking strategy, World class execution.</h2>
                  </cms:editable>
                </div>
              </div>
              <div class="row ">
                <!-- <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="#" class="learn-more-btn">Get in touch</a>
                </div> -->
              </div>
            </div>
          </section>
        </header>
        <section class="intro text-center section-padding " id="intro">
          <div class="container ">
            <div class="row">
              <cms:editable name='description' type='richtext'>
                <div class="col-md-8 col-md-offset-2 wp1">
                  <h1 class="arrow">In a nutshell</h1>
                  <p class="">
                  Nkemi is an African for Africa marketing consulting agency whose philosophy is entrenched in understanding client needs, deep understanding of the customer and working together with the client to deliver growth expectations.</p>
                </div>
              </cms:editable>
            </div>
          </div>
        </section>
        <section class=" features text-center section-padding" id="features">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <cms:editable name='section_title' type='richtext'>
                  <h1 class="arrow">What we can do for you</h1>
                </cms:editable>
                <div class="features-wrapper">
                  <div class="col-md-4 wp2">
                    <div class="icon">
                      <i class="fa fa-laptop shadow"></i>
                    </div>
                      <cms:editable name='section_content_1' type='richtext'>
                        <h2>Brand strategy and planning</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                        primis in faucibus.</p>
                      </cms:editable>
                  </div>
                  <div class="col-md-4 wp2 delay-05s">
                    <div class="icon">
                      <i class="fa fa-code shadow"></i>
                    </div>
                    <cms:editable name='section_content_2' type='richtext'>
                        <h2>Brand strategy and planning</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                        primis in faucibus.</p>
                    </cms:editable>
                  </div>
                  <div class="col-md-4 wp2 delay-1s">
                    <div class="icon">
                      <i class="fa fa-heart shadow"></i>
                    </div>
                    <cms:editable name='section_content_3' type='richtext'>
                        <h2>Brand strategy and planning</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                        primis in faucibus.</p>
                    </cms:editable>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- <section class="text-center" id="responsive">
          <div class="container-fluid nopadding responsive-services">
            <div class="wrapper">
              <div class="iphone">
                <div class="wp3"></div>
              </div>
              <div class="fluid-white"></div>
            </div>
            <div class="container designs">
              <div class="row">
                <div class="col-md-5 col-md-offset-7">
                  <div id="servicesSlider">
                    <ul class="slides">
                      <li>
                        <h1 class="arrow">Responsive Design Specialists</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero. </p>
                        <p>
                        Mauris ultrices odio vitae nulla ultrices iaculis. Nulla rhoncus odio eu lectus faucibus facilisis. Maecenas ornare augue vitae sollicitudin accumsan. </p>
                        <p>Etiam eget libero et erat eleifend consectetur a nec lectus. Sed id tellus lorem. Suspendisse sed venenatis odio, quis lobortis eros.</p>
                      </li>
                      <li>
                        <h1 class="arrow">Bootstrap Professionals</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero. </p>
                        <p>
                        Mauris ultrices odio vitae nulla ultrices iaculis. Nulla rhoncus odio eu lectus faucibus facilisis. Maecenas ornare augue vitae sollicitudin accumsan. </p>
                        <p>Etiam eget libero et erat eleifend consectetur a nec lectus. Sed id tellus lorem. Suspendisse sed venenatis odio, quis lobortis eros.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->
        <section class="swag text-center ">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <cms:editable name='client_quote' type='richtext'>
                  <h1> " Nkemi has delivered "<span> Aman Mohammed <em> Marketing Director </em> Example Company</span></h1>
                </cms:editable>
                <a href="#portfolio" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>
        <section class="portfolio text-center section-padding " id="portfolio">
        <h1 class="arrow">Some of our work</h1>
          <div class="container main_container">
            <div class="row">
              <div id="portfolioSlider">
                <ul class="slides">
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-01.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <cms:editable name='portfolio_1' type='richtext'>
                        <h2>Creative Minds</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                      </cms:editable>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-02.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <cms:editable name='portfolio_2' type='richtext'>  
                        <h2>Creative Hearts</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                      </cms:editable>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-03.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <cms:editable name='portfolio_3' type='richtext'>
                        <h2>Creative Ideas</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                      </cms:editable>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-01.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <cms:editable name='portfolio_4' type='richtext'>
                        <h2>Creative Minds</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                      </cms:editable>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-02.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <cms:editable name='portfolio_5' type='richtext'>
                        <h2>Creative Hearts</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                      </cms:editable>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/portfolio-03.jpg" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <cms:editable name='portfolio_6' type='richtext'>
                        <h2>Creative Ideas</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                      </cms:editable>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <div class=" ignite-cta text-center">
          <div class="container">
            <div class="row">
              <cms:editable name='our_team' type='richtext'>
                <div class="col-md-12">
                  <p href="#" class="ignite-btn">Meet our Team</p>
                </div>
              </cms:editable>
            </div>
          </div>
        </div>
        <section class=" team text-center section-padding" id="team">
          <div class="container">
            <div class="row">
              <cms:editable name='team_title' type='richtext'>
                <div class="col-md-12">
                  <h1 class="arrow">We're a team that Loves what we do</h1>
                </div>
              </cms:editable>
            </div>
            <div class="row">
              <div class="team-wrapper">
                <cms:editable name='team_profiles' type='richtext'>
                  <div id="teamSlider">
                    <ul class="slides">
                      <li>
                        <div class="col-md-4 wp5">
                          <img src="img/carol.png" alt="Team Member">
                          <h2>Caroline Mbui</h2>
                          <h3>Managing & Strategy Director</h3>
                          <p>Brand, Marketing & Communication Consultant. I love Africa. She oversees all aspects of the charity’s domestic and international fundraising efforts. She is also responsible for overall brand identity</p>
                          <div class="social">
                            <ul class="social-buttons">
                              <li><a href="mailto:caroline@nkemi.co.ke?subject=Great Website" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                              <li><a href="https://twitter.com/JustDes" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="http://ke.linkedin.com/in/carolinekmbui" class="social-btn"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-4 wp5 delay-05s">
                          <img src="img/gitahi.png" alt="Team Member">
                          <h2>Dr. Githinji Gitahi</h2>
                          <h3>Managing Director</h3>
                          <p>Before joining the pharmaceutical industry, he worked as a Head of Medical Quality in a Health Maintenance Organization where he also practiced as a General Practitioner.</p>
                          <div class="social">
                            <ul class="social-buttons">
                              <li><a href="mailto:githinji@nkemi.co.ke?subject=Great Website" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                              <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#" class="social-btn"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-4 wp5">
                          <img src="img/melissa.png" alt="Team Member">
                          <h2>Melissa Misio</h2>
                          <h3>Project Manager</h3>
                          <p>She oversees the charity’s mission and day-to-day operations after almost twenty years in operational roles, bringing a vast network and experiences to the team..</p>
                          <div class="social">
                            <ul class="social-buttons">
                              <li><a href="mailto:melissa@nkemi.co.ke?subject=Great Website" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                              <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#" class="social-btn"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="col-md-4 wp5 delay-05s">
                          <img src="img/ali.png" alt="Team Member">
                          <h2>Mahmoud Ali</h2>
                          <h3>Operations Manager</h3>
                          <p>Mahmoud Ali handles the company’s administrative duties. Mahmoud is a big believer in hard work and discipline.
Mahmoud is qualified in his field and holds a Bachelor’s degree in Business Information Technology from Jomo Kenyatta University Of Agriculture and Technology.
.</p>
                          <div class="social">
                            <ul class="social-buttons">
                              <li><a href="mailto:ali@nkemi.co.ke?subject=Great Website" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                              <li><a href="https://twitter.com/alimoud9" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#" class="social-btn"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-4 wp5 delay-1s">
                          <img src="img/mark.png" alt="Team Member">
                          <h2>Mark Ngoloma</h2>
                          <h3>Marketing Executive</h3>
                          <p>Mark's key strengths are strategic thinking, team work and ability to think on his feet. He previously worked for Mayfair insurance company as a marketing executive. He holds a Bachelor’s Degree in Commerce – Marketing option & is currently pursuing his Chartered Institute of Marketing (CIM) professional qualification.</p>
                          <div class="social">
                            <ul class="social-buttons">
                              <li><a href="mailto:mark@nkemi.co.ke?subject=Great Website" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                              <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#" class="social-btn"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </cms:editable>  
              </div>
            </div>
          </div>
        </section>
        <!-- <section class="subscribe text-center">
          <div class="container">
            <h1><i class="fa fa-paper-plane"></i><span>Subscribe to stay in the loop</span></h1>
            <form action="#">
              <input type="text" name="" value="" placeholder="" required>
              <input type="submit" name="" value="Send">
            </form>
          </div>
        </section> -->
        <section class="  dark-bg text-center section-padding contact-wrap" id="contact">
          <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <!--  <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Drop us a line</h1>
              </div>
            </div> -->
            <cms:editable name='contact_details' type='richtext'>
            <div class="row contact-details">
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                  <p>The Hub Westlands, Off Waiyaki Way</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                  <p>+254 722 393 913</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                  <p><a href="#">info@nkemi.co.ke</a></p>
                </div>
              </div>
            </div>
            </cms:editable>
            <div class="row">
              <div class="col-md-12">
                <ul class="social-buttons">
                  <li><a href="https://www.facebook.com/pages/Nkemi-Consulting/1542642302637883?fref=nf" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/nkemic" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                  <!-- <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </section>
        <footer>
          <div class=" container">
            <div class="row">
              <div class="col-md-6">
                <ul class="legals">
                  <li>Copyright  - Nkemi consulting</li>
                  <!-- <li><a href="#">Legals</a></li> -->
                </ul>
              </div>
              <div class="col-md-6 credit">
                <p>By <a href="http://www.chaos.co.ke/">Studio Chaos</a></p>
              </div>
            </div>
          </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/modernizr.js"></script>
      </body>
    </html>
    
<?php COUCH::invoke(); ?>