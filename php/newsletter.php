<?php 
    // HTML Content for the newsletter section
    echo '
    <div class="background-color-lightgrey">
    <div class="container"> <!-- Contains the Email Newsletter Sign up block-->
      <div class="newsletter">
          <form method="POST" action="#" class="sign-up">
            <h2 class="newsletter-title">Email Newsletter Sign-Up</h2>
            <div class="form-input">
              <div class="sign-up-input">
                <label class="required">Your Name</label>
                <input id ="newsletter-name" name="name" type="text">
              </div>
              <div class="sign-up-input">
                <label class ="required">Your Email</label>
                <input id ="newsletter-email" name="name" type="text">
              </div>
            </div>
            
                
            <label class="newsletter-tickboxarea">
              
              <input type="checkbox" id="customCheckbox">
              <span class="label-checkbox icon-check_box"></span>
                <span class="media-body">
                  Please tick this box if you wish to receive marketing information from us. Please see our 
                  <a class="privacy-policy" href ="#" target="_blank">Privacy Policy</a>
                  for more information on how we keep your data safe.
                </span>
            </label>
            
            
            
              <button name="submit" class="btn btn-subscribe">Subscribe </button>
            
          </form>
      </div>
    </div>
  </div>
    ';

?>