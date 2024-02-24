<?php

$hashChoice = readline("Would you like to use MD5 or SHA1 to encrypt your phrase?");

$md5 = "md5";
$sha1 = "sha1";

$sha1Check = strcasecmp($sha1, $hashChoice);
$md5Check = strcasecmp($md5, $hashChoice);


if ($sha1Check == 0){
    $phrase = readline("What phrase would you like to encrypt?");
    echo 'Your hashed phrase is: ';
    echo hash('sha1', $phrase);
}

else if ($md5Check == 0){
    $phrase = readline("What phrase would you like to encrypt?");
    echo 'Your hashed phrase is: ';
    echo hash('md5', $phrase);
}

else{
    echo 'Invalid choice.  Please try again.';
}






?>
