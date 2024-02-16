# HTML-And-CSS-Assignment

Assessment Review for JS section:

- Added the scroll bar for the page when the side menu is displayed.
- Fixed all console errors.
- Fixed all HTML errors using the W3C HTML Validator extension.
- Fixed sticky header's nav buttons scrolling the page to the top when clicked.
- Fixed cookie not displaying on refresh:
    - Orginally the cookie had a duration of 1 minute. I've upped it to 1 day.
    - If running locally without a localhost server or webserver, document.cookie doesn't work with Chrome / Edge security protocols (it does work with Firefox).
     

Assessment PHP section:

- 'contact-us.php' file displays empty error message box once loaded for the first time (on cPanel, on local it doesn't) - FIXED.

Setting up db.env file locally:

- Import the database-dump.sql file to your MySQL admin system (recommend using XAMPP alongside phpMyAdmin) 
- set MySQL_DB_HOST to localhost or 127.0.0.1
- set MySQL_DB_NAME to netmatters
- set MySQL_DB_USER_NAME to whatever user you have linked to the database (I used the default username: root)
- set MySQL_DB_PASSWORD to the password of the username you entered into MySQL_DB_USER_NAME

Don't forget to enable all privileges to the netmatters database for the user you choose to use for it.
