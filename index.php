<?php 

// php index.php migrate -table:Users --force fromDle toNet

require "src/console/Command.php";

use maestroerror\console\Command;

$command = new Command($argv);

print_r($command->get());