<?php

session_start();

require 'util.php';

save('coches');

printVD($_SESSION);

session_destroy();