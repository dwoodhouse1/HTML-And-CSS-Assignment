<?php
    // HTML Content for the header section
    echo '
    <div id="header">
              <header> 
              <!-- Header class properties goes here-->
              <div class="inner">
                <div class="container container-header">
                  <div class="header-row">

                    <div class="logo-container">
                      <a class="logo" href="index.php">
                        <img src="img/netmatters-logo-black.png" alt="Netmatters Logo">
                      </a>
                    </div>
                    
                      <div class="hidden-sm hidden-md">
                        <button type="button" class="btn btn-help btn-help-support">
                          <span class="pull-left">
                           <span class="icon-mouse mouse"></span>
                          </span>
                          Support
                        </button>
                      </div>

                      <div class="hidden-sm hidden-md">
                        <a href="contact-us.php">
                          <button type="button" class="btn btn-help btn-help-contact">
                            <span class="pull-left">
                              <span class="icon-paperplane plane"></span>
                            </span>
                            Contact
                          </button>
                        </a>
                      </div>
                      
                      <div class="hidden-sm visible-md">
                        <form method="GET"  class="search-form search-form-header">
                          <!-- <label for="search-input" class="hidden">Search:</label> -->
                          <input class="search-bar-tablet hidden-lg hidden-xlg" placeholder="Search..."  name="keyword" type="text" value>
                          <button type="submit" class="search-form-tablet-btn">
                            <span class="icon-search icon-format-search"></span>
                          </button>
                        </form>
                      </div>
                      
                      

                    <div class="flex-space-between">
                        <div class="hidden-md hidden-lg hidden-xlg">
                          <div class="container-mobile">
                            <a class="mobile" href="#">
                              <span class="icon-phone_in_talk"></span>
                            </a>
                          </div>
                        </div>

                        <div class="visible-md">
                          
                        </div>
                        <div class="actions">
                          <div class="container-hamburger">
                            <button type="button" id="header-hamburger" class="btn btn-hamburger hamburger  is-active">
                              <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                              </span>
                            </button>
                          </div>
                        </div>     
                      
                    </div>
                     
                    
                  
                  </div>
                  <!-- Hamburger button-->
                  <div class="mobile-viewport">
                    <form method="GET"  class="search-form">
                      <!-- <label for="search-input" class="hidden">Search:</label> -->
                      <input class="search-bar-mobile" placeholder="Search..."  name="keyword" type="text" value>
                      <button type="submit" class="search-form-mobile-btn">
                        <span class="icon-search icon-format-search"></span>
                      </button>
                    </form>
                  </div>
                </div>

              </div>
              <div class="main-navigation hidden-sm hidden-md background-color-grey"> <!-- Navigation bar -->
                <div class="container">
                  <ul>
                    <li class="nav-item nav-item-software">
                      <a href="#">
                        <span class="icon-laptop icon-format-nav icon-format-nav-laptop"></span>
                        <small>Bespoke</small>
                        Software
                      </a>
                        <div class="sub-menu-banner-software">
                          <ul class="container sub-menu" role="menu">
                            <li class="sub-menu-banner-title">Our Bespoke Software Services</li>
                            
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-cogs"></span>
                                <span class="link-text">Bespoke CRM</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-briefcase"></span>
                                <span class="link-text">Business Automation</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-shuffle"></span>
                                <span class="link-text">Software Integrations</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-mobile"></span>
                                <span class="link-text">Mobile App Development</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-folder-open"></span>
                                <span class="link-text">Bespoke Databases</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-transfer"></span> <!--NEEDS TO BE TRANSFER ICON-->
                                <span class="link-text">Sharepoint Development</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-download3"></span>
                                <span class="link-text">Operational Systems</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-users"></span>
                                <span class="link-text">Business Central Implementation</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-laptop"></span>
                                <span class="link-text">Internet Of Things (IOT) Software</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-cloud"></span>
                                <span class="link-text">Intranet Development</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-cloud-download"></span>
                                <span class="link-text">Customer Portal Development</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-earth"></span>  
                                <span class="link-text">Reporting Hub</span>
                              </a>
                            </li>
                            
                          </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-item-it">
                      <a href="#">
                        <span class="icon-display icon-format-nav icon-format-nav-monitor"></span>
                        <small>it</small>
                        Support
                      </a>
                        <div class="sub-menu-banner-it">
                          <ul class="container sub-menu" role="menu">
                            <li class="sub-menu-banner-title">Our IT Support Services</li>
                            
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-headphones"></span>
                                <span class="link-text">Managed IT Support</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-briefcase"></span>
                                <span class="link-text">Business IT Support</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-laptop"></span>
                                <span class="link-text">Office 365 for Business</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-graduation-cap"></span> 
                                <span class="link-text">IT Consultancy</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-cloud"></span>
                                <span class="link-text">Cloud Service Provider</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-drive"></span>
                                <span class="link-text">Data Backup & Diaster Recovery</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      
                    </li>
                    <li class="nav-item nav-item-dm">
                      <a href="#">
                        <span class="icon-bar-graph icon-format-nav icon-format-nav-graph"></span>
                        <small>Digital</small>
                        Marketing
                      </a>
                        <div class="sub-menu-banner-dm">
                          <ul class="container sub-menu" role="menu">
                            <li class="sub-menu-banner-title">Our Digital Marketing Services</li>
                            
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-search"></span>
                                <span class="link-text">Search Engine Optimisation (SEO)</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-money"></span> 
                                <span class="link-text">Pay Per Click Advertising (PPC)</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-trending_up"></span> 
                                <span class="link-text">Conversion Rate Optimisation (CRO)</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-envelope"></span> 
                                <span class="link-text">Email Marketing</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-users"></span>
                                <span class="link-text">Social Media Marketing</span>
                              </a>
                            </li>
                            <li class="sub-menu-banner-item">
                              <a href="#">
                                <span class="link-icon-container icon-pencil"></span>
                                <span class="link-text">Content Marketing</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      
                    </li>
                      <li class="nav-item nav-item-ts">
                        <a href="#">
                          <span class="icon-phone_in_talk icon-format-nav icon-format-nav-telephone"></span>
                          <small>Telecoms</small>
                          Services
                        </a>
                          <div class="sub-menu-banner-ts">
                            <ul class="container sub-menu" role="menu">
                              <li class="sub-menu-banner-title">Our Telecoms Services</li>
                              
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-ticket"></span>
                                  <span class="link-text">Business Mobile</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-call"></span>
                                  <span class="link-text">Hosted VoIP Provider</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-phone-square"></span>
                                  <span class="link-text">Business VoIP Systems</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-tachometer"></span>
                                  <span class="link-text">Business Broadband</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-handshake-o"></span>
                                  <span class="link-text">Leased Lines Provider</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-phone_in_talk"></span>
                                  <span class="link-text">3CX Systems</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        
                      </li>
                      <li class="nav-item nav-item-wd">
                        <a href="#">
                          <span class="icon-embed2 icon-format-nav icon-format-nav-code"></span>
                          <small>Web</small>
                          Design
                        </a>
                          <div class="sub-menu-banner-wd">
                            <ul class="container sub-menu" role="menu">
                              <li class="sub-menu-banner-title">Our Web Design Services</li>
                              
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-pencil"></span>
                                  <span class="link-text">Bespoke Website Design</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-cart"></span> 
                                  <span class="link-text">eCommerce Website Design</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-monitor"></span>
                                  <span class="link-text">Pay Monthly Websites</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-bullhorn"></span>
                                  <span class="link-text">Branding & Design</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-mobile"></span>
                                  <span class="link-text">Mobile App Development</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-cloud"></span>
                                  <span class="link-text">Web Hosting</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        
                      </li>
                      <li class="nav-item nav-item-cs">
                        <a href="#">
                          <span class="icon-security icon-format-nav icon-format-nav-security"></span>
                          <small>Cyber</small>
                          Security
                        </a>
                          <div class="sub-menu-banner-cs">
                            <ul class="container sub-menu" role="menu">
                              <li class="sub-menu-banner-title">Our Cyber Security Services</li>
                              
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-clipboard"></span>
                                  <span class="link-text">Cyber Security Assessment</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-clock"></span>
                                  <span class="link-text">Cyber Security Management</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-flask"></span> 
                                  <span class="link-text">Cyber Penetration Testing</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-graduation-cap"></span>
                                  <span class="link-text">Cyber Essentials Certification</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-security"></span>
                                  <span class="link-text">PCI Compliance</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-lock"></span> 
                                  <span class="link-text">Hacking Prevention</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        
                      </li>
                      <li class="nav-item nav-item-dc">
                        <a href="#">
                          <span class="icon-graduation-cap icon-format-nav icon-format-nav-school"></span>
                          <small>Developer</small>
                          Course
                        </a>
                          <div class="sub-menu-banner-dc">
                            <ul class="container sub-menu" role="menu">
                              <li class="sub-menu-banner-title">Our Developer Course Services</li>
                              
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-laptop"></span>
                                  <span class="link-text">Train For A Career In Tech</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-embed2"></span>
                                  <span class="link-text">Skills Bootcamp</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-help"></span> <!--NEEDS TO BE CIRCLE QUESTION ICON-->
                                  <span class="link-text">Scion Scheme Frequently Asked Questions</span>
                                </a>
                              </li>
                              <li class="sub-menu-banner-item">
                                <a href="#">
                                  <span class="link-icon-container icon-handshake-o"></span>
                                  <span class="link-text">Scion Collaborations</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        
                      </li>
                  </ul>
                </div>
              </div>
              </header> 
            </div>
    
    
    '

?>
