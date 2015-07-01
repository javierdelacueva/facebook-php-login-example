<?php

$login_url = 'YOUR_LOGIN_URL';

// start session
session_start();

// kill the session
session_destroy();

// redirect back to website home
header( 'Location: '.$login_url );
