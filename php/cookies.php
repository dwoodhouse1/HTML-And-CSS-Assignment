<?php 
    // HTML Content for the cookie section
    echo '
    <div id="cookie-app">
    <button type="button" class="cookie-settings-btn">Manage Consent</button>
    
    <div id="cookie-consent" class="modal fade in">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Cookies Policy</h3>
          </div>
          <div class="modal-body">
            <p>Our website uses cookies. This helps us provide you with a good experience on our website. To see what cookies we use and what they do, 
              and to opt-in on non-essential cookies click "change settings". For a detailed explanation, click on "<a href="#">Privacy Policy</a>"
              otherwise click "Accept Cookies" to enter. 
            </p>
        </div>
        <div class="modal-footer">
          
            <a class="btn btn-cookie btn-changesettings">Change Settings</a>
            <div class="space-between"></div>
            <a class="btn btn-cookie btn-acceptcookies">Accept Cookies</a>
          
        </div>
        </div>
      </div>
    </div>
  </div>
 ';

?>