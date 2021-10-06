<?php
namespace Funfare\MigrationAnalyzer\Parser;

use PhpParser\Error;
use PhpParser\NodeDumper;
use PhpParser\ParserFactory;

class FileParser {

    protected string $file;


    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function parse()
    {
        $code = \File::get($this->file);
        $parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
        try {
            $ast = $parser->parse($code);
        } catch (Error $error) {
            echo "Parse error: {$error->getMessage()}\n";
            return;
        }
        
        $dumper = new NodeDumper;
        echo $dumper->dump($ast) . "\n";

    }

}