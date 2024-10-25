<?php
include './classes/User.php';
include 'config.php';

$user = new User("Peter", "Kvokačka", "p.kvokacka@ostrovskeho.com", "heslo12345", "0902111111", "1991-1-1");

$user->insert();
