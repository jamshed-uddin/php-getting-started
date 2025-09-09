<?php

use http\Forms\Authenticator;

$auth = new Authenticator();

$auth->logout();




redirect('/website/public');
