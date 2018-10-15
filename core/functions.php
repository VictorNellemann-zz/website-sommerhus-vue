<?php

$appname = 'Victors PHP & Vue site';

function destroySession()
{
    $_SESSION = arrary();

    if (session_id() != '' || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time()-2592000, '/');
    
    session_destroy();
};
