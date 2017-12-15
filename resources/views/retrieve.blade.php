<?php
//$password = bcrypt(md5(uniqid(rand(), true)));
$password = uniqid(str_random(1));
echo $password;