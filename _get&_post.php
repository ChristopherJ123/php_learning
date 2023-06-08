<?php
// $_GET : - NOT SECURE
//         - Better for search page
//         - Data is appended to the URL
//         - Char limit
//         - GET request can be cached
//         - Bookmark is possible w/ values
// Contoh Get: http://localhost/website/form/login_method.php?username_get=admin&password_get=Adminsi12366
//         
// $_POST : - MORE SECURE
//          - Better for submitting credentials
//          - Data is packaged inside the body of the HTTP request
//          - No data limit
//          - GET request are not cached
//          - Cannot bookmark
