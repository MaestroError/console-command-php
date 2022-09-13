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

--------------------------------
### To Do
- fix current class and rename/use as command read class
- add new global class ConsoleCommandPhp with static methods Run (reads and runs command) and Read (read command and returns array value)
- add main class to extend and use as parent class for class commands with livewire style: bool types for --options, string types for -valued=option and think out how to add arguments
- Make helper function which initialates parent class and help you create command in the fly, without static class writing (use chain)
- Seo, Documentation and Examples