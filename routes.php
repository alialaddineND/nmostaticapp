<?php

require_once __DIR__.'/router.php';

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'views/index.php');
get('/about', 'views/about.php');
get('/roles', 'views/roles.php');
get('/the-uae', 'views/the-uae.php');
get('/mediacenter', 'views/media-center.php');
get('/media-center', 'views/media-centerv2.php');
get('/contact', 'views/contact.php');
get('/disclaimer', 'views/disclaimer.php');
get('/terms-conditions', 'views/terms-conditions.php');
get('/privacy-policy', 'views/privacy-policy.php');
get('/chairman', 'views/chairman-msg.php');
get('/the-uae', 'views/the-uae.php');
get('/initiatives', 'views/initiatives.php');

get('/initiatives/climate-ambassadors', 'views/climate-ambassadors.php');

get('/news/$nid', 'views/news-inner.php');



get('/$lang', 'views/index.php');
get('/$lang/about', 'views/about.php');
get('/$lang/roles', 'views/roles.php');
get('/$lang/the-uae', 'views/the-uae.php');
get('/$lang/mediacenter', 'views/media-center.php');
get('/$lang/media-center', 'views/media-centerv2.php');
get('/$lang/contact', 'views/contact.php');
get('/$lang/disclaimer', 'views/disclaimer.php');
get('/$lang/terms-conditions', 'views/terms-conditions.php');
get('/$lang/privacy-policy', 'views/privacy-policy.php');
get('/$lang/chairman', 'views/chairman-msg.php');
get('/$lang/the-uae', 'views/the-uae.php');
get('/$lang/initiatives', 'views/initiatives.php');

get('/$lang/initiatives/climate-ambassadors', 'views/climate-ambassadors.php');

get('/$lang/news/$nid', 'views/news-inner.php');


post('/submitcontactform', 'ajx/submitCForm.php');

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','views/404.php');
