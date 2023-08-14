<?php

use function Laravel\Folio\{middleware};

middleware("auth");

?>

<h1>This is a secret page! Only visible for authenticated users.</h1>
