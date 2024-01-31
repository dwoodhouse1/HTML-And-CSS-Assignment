<?php 
  // //load .env file
  // require_once realpath(__DIR__ . "/vendor/autoload.php");
  // use Dotenv\Dotenv;

  // $dotenv = Dotenv::createImmutable(__DIR__);
  // $dotenv->load();

  // //get app name from .env file
  // $appName = $_ENV['APP_NAME'];

  // //echo the app name
  // //echo $appName;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters</title>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/application.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;900&display=swap" rel="stylesheet">
    
  </head>
  <body>
    <?php include("php/cookies.php"); ?>

    
    
    <div id="greetingContainer">
      
      <span class="icon-speechbubble">
        <button id="chat-button" type="button">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"  viewBox="2 -6 20 36" class="icon-circle icon-circle-speechbubble">
              <path class ="speechbubble" d="M18 8.016v-2.016h-12v2.016h12zM18 11.016v-2.016h-12v2.016h12zM18 14.016v-2.016h-12v2.016h12zM20.016 2.016q0.797 0 1.383 0.586t0.586 1.383v18l-3.984-3.984h-14.016q-0.797 0-1.383-0.609t-0.586-1.406v-12q0-0.797 0.586-1.383t1.383-0.586h16.031z"></path>
            </svg>
            
        </button>
        
      </span>
    </div>


    <div id="container">
      <div class="main">
        <div class="main-outer">
          <div class="main-inner">
            <?php include("php/header.php"); ?> <!-- Header Content -->

            

            <div id="banner"> <!-- Carousell content added later on-->
              <div class="container-banner main-banner">
                <div>
                  <div class="img-container-header home-img main-img">
                    <img src="img/banner1.png" class="main-banner-image" alt="Home Page">
                    <div class="carousell-content">
                      <h1 class="h1">The East of England's Leading Technology Company</h1>
                      <p> Performance-driven digital and technology services<br> with complete transparency.</p>
                      <a href="#" class="btn btn-whyus">
                        Why Choose Us?
                        <span class="icon-arrow-right2"></span>
                      </a>
                    </div>
                    
                  </div>
                </div>
                
                <div>
                  <div class="img-container-header home-img">
                    <img src="img/banner2.jpg" alt="Bespoke Software">
                    <div class="carousell-content">
                      <h1 class="h1">Bespoke Software</h1>
                      <p>Delievering expert bespoke software solutions<br> across a range of industries.</p>
                      <a href="#" class="btn btn-bespokesoftware">
                        Find Out More
                        <span class="icon-arrow-right2"></span>
                      </a>
                    </div>
                    
                  </div>
                </div>
                
                <div>
                  <div class="img-container-header home-img">
                    <img src="img/banner3.png" alt="IT Support">
                    <div class="carousell-content">
                      <h1 class="h1">IT Support</h1>
                      <p>Fast and cost-effective IT support<br> services for your business.</p>
                      <a href="#" class="btn btn-itsupport">
                        Find Out More
                        <span class="icon-arrow-right2"></span>
                      </a>
                    </div>
                    
                  </div>
                </div>
                
                <div>
                  <div class="img-container-header home-img">
                    <img src="img/banner4.png" alt="Digital Marketing">
                    <div class="carousell-content">
                      <h1 class="h1">Digital Marketing</h1>
                      <p>Generating your new business through<br> results-driven marketing activities.</p>
                      <a href="#" class="btn btn-digitalmarketing">
                        Find Out More
                        <span class="icon-arrow-right2"></span>
                      </a>
                    </div>
                    
                  </div>
                </div>
               
                <div>
                  <div class="img-container-header home-img">
                    <img src="img/banner5.png" alt="Telecoms Services">
                    <div class="carousell-content">
                      <h1 class="h1">Telecoms Services</h1>
                      <p>A new approach to connectivity, see<br> how we can help your business.</p>
                      <a href="#" class="btn btn-telecomsservices">
                        Find Out More
                        <span class="icon-arrow-right2"></span>
                      </a>
                    </div>
                    
                  </div>
                </div>
                
                <div>
                  <div class="img-container-header home-img">
                    <img src="img/banner6.jpg" alt="Web Design">
                    <div class="carousell-content">
                      <h1 class="h1">Web Design</h1>
                      <p>For businesses looking to make a strong<br> and effective first impression.</p>
                      <a href="#" class="btn btn-webdesign">
                        Find Out More
                        <span class="icon-arrow-right2"></span>
                      </a>
                    </div>
                    
                  </div>
                </div>
                
                <div>
                  <div class="img-container-header home-img">
                    <img src="img/banner7.png" alt="Cyber Security">
                    <div class="carousell-content">
                      <h1 class="h1">Cyber Security</h1>
                      <p>Keeping businesses and their customers<br> sensitive information protected.</p>
                      <a href="#" class="btn btn-cybersecurity">
                        Find Out More
                        <span class="icon-arrow-right2"></span>
                      </a>
                    </div>
                    
                  </div>
                </div>
                
              </div>
              
                


            </div>

            <div id="middle"> <!-- All div's related to the middle content (everything between header and footer) goes here-->

              <div class="container container-section service"> <!-- Starting from the "Our Services" text all the way down to above the partners slideshow-->
                
                <div class="service-list">
                  <div class="row">
                    <div class="headings-bar">
                     <h2 class="h1">
                        <strong>Our Services</strong>
                      </h2>

                      <h3 class=" hidden-sm visible-md">
                        <a href="#">View Our Work
                          <span class="icon-arrow-right2"></span>
                        </a>
                      </h3>
                    </div>

                    
                    <div class="service-blocks">
                        
                        <span class="service-block-one"> 
                          <a class="service-link" href="#"></a>
                          <span class="icon-circle icon-circle-software">
                            <span class="icon-laptop icon-format-services"></span>
                          </span>
                          <span class="h2">Bespoke Software</span>
                          <span class="p text-align-md">
                            Bespoke software solutions for all your business needs including integrations and reporting.
                          </span>
                          <span class="btn btn-software">Read More</span>
            
                        </span>
                      
                   
                      
                    
                      <span class="service-block-two">
                        <a class="service-link" href="#"></a>
                        <span class="icon-circle icon-circle-it">
                          <span class="icon-display icon-format-services"></span>
                        </span>
                          <span class="h2">IT Support</span>
                          <span class="p text-align-md">
                            Fully managed IT support and consultancy packages tailored to meet your exact business needs.
                          </span>
                          <span class="btn btn-it">Read More</span>
                        
                        
                      </span>
                    

                    
                      <span class="service-block-three">
                        <a class="service-link" href="#"></a> 
                        <span class="icon-circle icon-circle-dm">
                         <span class="icon-bar-graph icon-format-services"></span>
                        </span>
                        <span class="h2">Digital Marketing</span>
                        <span class="p text-align-md">
                          Driven brand awareness & ROI through creative digital marketing campaigns.
                        </span>
                        <span class="btn btn-dm">Read More</span>
                      </span>
                    
                    </div>
                    <div class="service-blocks-bottom">
                      <span class="service-block-four">
                        <a class="service-link" href="#"></a> 
                        <span class="icon-circle icon-circle-ts">
                         <span class="icon-phone_in_talk icon-format-services"></span>
                        </span>
                        <span class="h2">Telecoms Service</span>
                        <span class="p text-align-md">
                          Business telephony solutions including mobile & connectivity solutions.
                        </span>
                        <span class="btn btn-ts">Read More</span>
                      </span>
                    

                    
                      <span class="service-block-five">
                        <a class="service-link" href="#"></a> 
                        <span class="icon-circle icon-circle-wd" >
                          <span class="icon-embed2 icon-format-services"></span>
                        </span>
                        <span class="h2">Web Design</span>
                        <span class="p text-align-md">
                          Use-centric design for business looking to make a lasting impression.
                        </span>
                        <span class="btn btn-wd">Read More</span>
                      </span>
                    

                    
                      <span class="service-block-six"> 
                        <a class="service-link" href="#"></a>
                        <span class="icon-circle icon-circle-cs">
                          <span class="icon-security icon-format-services"></span>
                        </span>
                        <span class="h2">Cyber Secruity</span>
                        <span class="p text-align-md">
                          Prevention, testing, consultancy & breach management services.
                        </span>
                        <span class="btn btn-cs">Read More</span>
                      </span>
                    

                    
                      <span class="service-block-seven">
                        <a class="service-link" href="#"></a> 
                        
                        <span class="icon-circle icon-circle-dt">
                          <span class="icon-graduation-cap icon-format-services"></span>
                        </span>
                        
                          <span class="h2">Developer Training</span>
                          <span class="p text-align-md">
                            Web design & software training courses designed to secure a job in tech.
                          </span>
                          <span class="btn btn-dt">Read More</span>
                        
                      </span>
                    </div>
                      
                    
                    
                    <h3 class="h2 view-work hidden-md hidden-lg hidden-xlg">
                      <a href="#">View Our Work
                        <span class="icon-arrow-right2"></span>
                      </a>
                    </h3>

                     
                  </div>
                </div>
                
              </div>

              <div class="carousell-partners-content"> <!--All div's related to the partner logo slideshow will go here-->

                
                  
                    <img src="img/investing-in-future-growth.jpg" alt="Investing in Future Growth Award" class="clients-searless-logo item partners">
                    <img src="img/norfolk-carbon-charter.jpg" alt="Norfolk Garbon Charter" class="clients-busseys-logo item partners">
                    <img src="img/PPC_logo.jpg" alt="Prompt Payment Code" class="clients-crane-logo item partners">
                    <img src="img/future-50.jpg" alt="Future 50 Member" class="clients-blackswan-logo item partners">
                    <img src="img/iso_9001.jpg" alt="ISO 9001 Registered" class="clients-xupes-logo item partners">
                    <img src="img/iso_27001.jpg" alt="ISO 27001 Registered" class="clients-beat-logo item partners">
                    <img src="img/skills-of-tomorrow.jpg" alt="Skills of Tomorrow Winner" class="clients-surveysolutions-logo item partners">
                    <img src="img/google-partner.jpg" alt="Google Partner" class="clients-girlsguidinganglia-logo item partners">
                    <img src="img/living_wage.png" alt="Living Wage Employer" class="clients-sweetzy-logo item partners">
                    <img src="img/norfolk_prohelp.png" alt="Norfolk Prohelp" class="clients-howespercival-logo item partners">
                  
                  
                
              </div>

              <div class="homepage-branded-text"> <!-- Block contains the "Welcome to Netmatters" text just below the partner logo slideshow-->
                <div class="background-color-grey" >
                  
                    <div class="container container-section">
                      <div class="row">
                        <div class="brand-bg"> <!-- Left side Text and buttons-->
                          <h2 class="h1"><strong>Welcome to Netmatters</strong> </h2>
                          <p>
                            <strong>Netmatters is a leading 
                              <a href="#">Bespoke Software</a>
                              ,
                              <a href="#">IT Support</a>
                              , and
                              <a href="#">Digital Marketing</a>
                              company based in the East of England with offices in 
                              <a href="#" target="_blank">London</a>
                              ,&nbsp;
                              <a href="#">Cambridge</a>
                              ,
                              <a href="#">Wymondham</a>
                              , and
                              <a href="#">Great Yarmouth</a>
                              .
                            </strong>
                          </p>
                          <p>We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in 
                            mind: to help improve your business with the most appropriate solutions. 
                          </p>
                          <p> We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship
                             in an upfront manner.
                          </p>

                          <div class="aboutus">
                            <a href="#" target="_blank" class="btn btn-aboutus btn-aboutus-whychooseus">Why Choose us?
                              <span class="icon-arrow-right2"></span>
                            </a>
                            
                            <a href="#" target="_blank" class="btn btn-aboutus btn-aboutus-ourculture">Our Culture
                              <span class="icon-arrow-right2"></span>
                            </a>
                          </div>
                          
                        </div>

                        <div class="reviews-bg"> <!-- Right side Text and buttons-->
                          <h2 class="h1">
                            <strong>What Our Clients Think</strong>
                          </h2>

                          <span class="icon-star star-format"></span>
                          <span class="icon-star star-format"></span>
                          <span class="icon-star star-format"></span>
                          <span class="icon-star star-format"></span>
                          <span class="icon-star star-format"></span>

                          <span class="client-quote p">
                            Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly skilled -they know their stuff!
                            They delivered a website to our (high!) expectations and went over and above to ensure we were satisfied clients - and we are!
                          </span>
                          <span class="client-quote-author p">
                            Eleanor Bishop, Head of Marketing -
                            <a href="#">Ashcroft Partnership LLP</a>
                          </span>
                         
                          <div class="reviews">
                            <a href="#" target="_blank" class="btn btn-reviews btn-reviews-google">Google Reviews
                              <span class="icon-arrow-right2 padding-arrow"></span>
                            </a>

                            <a href="#" target="_blank" class="btn btn-reviews btn-reviews-trustpilot">Trustpilot Reviews
                              <span class="icon-arrow-right2"></span>
                            </a>
                          
                        </div>
                      </div>
                    </div>
                  

                </div>
                
              </div>
              <div class="space-between"></div>
              <div class="container">
                <div class="latest-articles">
                  <div class="headings-bar">
                    <h2 class="h1">
                      <strong>Latest News</strong>
                    </h2>
                    <h3 class="float-right hidden-sm visible-md">
                      <a href="#">View All</a>
                      <span class="icon-arrow-right2"></span>
                    </h3>
                  </div>

                  <?php include("php/latestNews.php"); ?>
                  
                </div>
              </div>
      
              <h3 class="hidden-md hidden-lg hidden-xlg text-align-md">
                <a href="#">View All
                  <span class="icon-arrow-right2"></span>
                </a>
                
              </h3>
              

               <!--Client slideshow section --> 
               
                <div class="clients carousell-clients-content">
                  
                  <div class="clients-searless">
                    <img src="img/searles_logo.jpg" alt="Searless Logo" class="clients-searless-logo item">
                    <div class="description-searless">
                      <div class="box">
                        <h3>Searles Leisure Resort</h3>
                        <p>Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday resort for families.</p>
                        <a href="#" class="btn btn-searless">View Our Case Study<span class="pull-right icon-arrow-right2"></span></a>
                        <div class="arrow"></div>
                      </div>
                  
                    </div>
                    
                  </div>

                  <div class="clients-busseys">
                    <div class="description-busseys">
                     <div class="box">
                      <h3>Busseys</h3>
                      <p>One of the UK's leading Ford dealerships.</p>
                     </div>
                     <div class="arrow"></div>
                    </div>
                    <img src="img/busseys_logo.png" alt="Busseys Logo" class="clients-busseys-logo item">
                  </div>

                  <div class="clients-crane">
                    <div class="description-crane">
                     <div class="box">
                      <h3>Crane Garden Buildings</h3>
                      <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                     </div>
                     <div class="arrow"></div>
                    </div>
                    <img src="img/crane_logo.png" alt="Crane Garden Buildings Logo" class="clients-crane-logo item">
                  </div>

                  <div class="clients-swan">
                    <div class="description-swan">
                     <div class="box">
                      <h3>Black Swan Care Group</h3>
                      <p>Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on putting the needs of their residents first.</p>
                      <a href="#" class="btn btn-swan">View Our Case Study<span class="pull-right icon-arrow-right2"></span></a>
                     </div>
                     
                     <div class="arrow"></div>
                    </div>
                    <img src="img/black_swan_logo.png" alt="Black Swan Care Group Logo" class="clients-blackswan-logo item">
                  </div>

                  <div class="clients-xupes">
                    <div class="description-xupes">
                     <div class="box box-no-description">
                      <h3>Xupes</h3>
                     </div>
                     <div class="arrow"></div>
                    </div>
                    <img src="img/xupes_logo.png" alt="Xupes Logo" class="clients-xupes-logo item">
                  </div>

                  <div class="clients-beat">
                    <div class="description-beat">
                     <div class="box">
                      <h3>BEAT</h3>
                      <p>The UK's eating disorder charity founded in 1989.</p>
                     </div>
                     <div class="arrow"></div>
                    </div>
                    <img src="img/beat_logo.png" alt="BEAT Logo" class="clients-beat-logo item">
                  </div>
                  
                  <div class="clients-surveysolutions">
                    <div class="description-surveysolutions">
                     <div class="box box-no-description">
                      <h3>Survey Solutions</h3>
                     </div>
                     <div class="arrow"></div>
                    </div>
                    <img src="img/survey_solutions_logo.png" alt="Survey Solutions Logo" class="clients-surveysolutions-logo item">
                  </div>
                  
                  <div class="clients-girlsguidinganglia">
                    <div class="description-girlsguidinganglia">
                     <div class="box">
                      <h3>Girl Guiding Anglia</h3>
                      <p>Girl Guiding Anglia is part of Girlguiding, the UK's leading charity for girls and young women in the UK.</p>
                      <a href="#" class="btn btn-girlsguidinganglia">View Our Case Study<span class="pull-right icon-arrow-right2"></span></a>
                     </div>
                     
                     <div class="arrow"></div>
                    </div>
                    <img src="img/girl_guides_anglia_logo.png" alt="Girl Guiding Anglia Logo" class="clients-girlsguidinganglia-logo item">
                  </div>

                  <div class="clients-sweetzy">
                    <div class="description-sweetzy">
                     <div class="box">
                      <h3>Sweetzy</h3>
                      <p>Sweetzy are an online sweets retailer, based in Wymondham.</p>
                      <a href="#" class="btn btn-sweetzy">View Our Case Study<span class="pull-right icon-arrow-right2"></span></a>
                     </div>
                     
                     <div class="arrow"></div>
                    </div>
                    <img src="img/sweetzy_logo.png" alt="Sweetzy Logo" class="clients-sweetzy-logo item">
                  </div>
                  
                  <div class="clients-howespercival">
                    <div class="description-howespercival">
                     <div class="box box-no-description">
                      <h3>Howes Percival</h3>
                     </div>
                     <div class="arrow"></div>
                    </div>
                    <img src="img/howespercivallogo.png" alt="Howes Percival Logo" class="clients-howespercival-logo item">
                  </div>

                  <div class="clients-gdst">
                    <div class="description-gdst">
                     <div class="box">
                      <h3>GDST</h3>
                      <p>The <a href="#">Girls' Day School Trust (GDST)</a> is the UK's leading family of 25 independant girls' schools.</p>
                      <a href="#" class="btn btn-gdst">View Our Case Study<span class="pull-right icon-arrow-right2"></span></a>
                     </div>
                     
                     <div class="arrow"></div>
                    </div>
                    <img src="img/girls_day_school_trust_logob.png" alt="GDST Logo" class="clients-gdst-logo item">
                  </div>
                  
                  <div class="clients-ashcroft">
                    <div class="description-ashcroft">
                     <div class="box">
                      <h3>Ashcroft Partnership LLP</h3>
                      <p>Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and are one of the top chartered accountancy firms in 
                        Cambridge, advising entrepreneurs and families.</p>
                      <a href="#" class="btn btn-ashcroft">View Our Case Study<span class="pull-right icon-arrow-right2"></span></a>
                     </div>
                     
                     <div class="arrow"></div>
                    </div>
                    <img src="img/ashcroftlogo_landscape_goldblack_DP60P-small.png" alt="Ashcroft Logo" class="clients-ashcroft-logo item">
                  </div>
                  
                  <div class="clients-onetraveller">
                    <div class="description-onetraveller">
                     <div class="box">
                      <h3>One Traveller</h3>
                      <p><a href="#">One Traveller</a>, founded in 2007, is a leading provider of solo holidays for over 50s.</p>
                      <a href="#" class="btn btn-onetraveller">View Our Case Study<span class="pull-right icon-arrow-right2"></span></a>
                     </div>
                     
                     <div class="arrow"></div>
                    </div>
                    <img src="img/onetravellerlogo_white_figuire.png" alt="One Traveller Logo" class="clients-onetraveller-logo item">
                  </div>
                  
                  
                </div>
               
                
              

              <?php include("php/newsletter.php"); ?> <!-- Newsletter Content -->
              <?php include("php/dbConnection.php"); ?>
            </div>
            
            <?php include("php/footer.php"); ?> <!-- Footer Content -->
            
          </div>



        </div>


        </div> 
        
      </div> <!--End of main-->

      <?php include("php/sidebar.php"); ?> <!-- Sidebar Content -->

      <?php include("php/stickyHeader.php"); ?> <!-- Sticky Header Content -->
      
      
    </div>
    </div>
   <script src="js/jquery-3.7.1.min.js"></script>
   <script src="js/main.js"></script>
   <script src="js/slick-1.8.1/slick/slick.min.js"></script>
   <script src="js/cookies.js"></script>
   <script src="js/sidebar.js"></script>
   <script src="js/sticky.js"></script>
   <script src="js/banners.js"></script>
   
  </body>
</html>