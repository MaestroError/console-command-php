<?php 
namespace maestroerror\console;

class Command {

    public static $VERSION = "0.0.1";

    protected string $file;
    protected string $command;
    protected array $arguments = [];
    protected array $options = [];

    public static $separatedOptions = true;


    public function __construct($argv) {
        $this->process($argv);
    }

    public function get() {
        return [
            "command" => $this->command,
            "argument" => $this->arguments,
            "options" => $this->options,
        ];
    }

    private function process($argv) {
        if(is_array($argv)) {
            $this->file = $argv[0];
            if(isset($argv[1])) {
                $this->command = $argv[1];
            }
            if(count($argv)>2) {
                unset($argv[0]);
                unset($argv[1]);
                $options = [];
                foreach($argv as $input) {
                    if(str_starts_with($input, "-")) {
                        $options[] = $input;
                    } else {
                        $this->arguments[] = $input;
                    }
                }
                if($this::$separatedOptions) {
                    foreach($options as $opt) {
                        if(str_starts_with($opt, "--")) {
                            $this->options['double_dashed'][] = $opt;
                        } elseif (str_contains($opt, ':')) {
                            $this->options['valued'][] = $opt;
                        } else {
                            $this->options['dashed'][] = $opt;
                        }
                    }
                } else {
                    $this->options = $options;
                }
            }
        }
    }

}