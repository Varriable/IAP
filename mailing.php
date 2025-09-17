<?php
require 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'Ramadhan Abdilatif',
    'mail_from' => 'ramadhanabdilatif@gmail.com',
    'name_to' => 'Ramadhan Abdilatif',
    'mail_to' => 'ramadhan.abdilatif@strathmore.edu',
    'subject' => 'Hello From ICS A',
    'body' => 'Welcome to ICS A! <br> This is a new semester. Let\'s have fun together.'
];

$ObjSendMail->Send_Mail($conf, $mailCnt);