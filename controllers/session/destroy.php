<?php

// log the user out.

use function Core\logout;

logout();

header('location: /');
exit();