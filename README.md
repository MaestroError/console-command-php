# console-command-php
ccPHP is command processing class to provide CLI commands in Unix style (cmd - options - arg)

## installation
install with composer:
```
composer require maestroerror/console-command-php
```
### Usage example

```
use maestroerror\console\Command;

$command = new Command($argv);

print_r($command->get());
```
returns array like:  
```
[
    "command" => String,
    "argument" => Array,
    "options" => Array,
]
```