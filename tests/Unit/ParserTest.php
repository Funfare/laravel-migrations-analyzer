<?php

namespace Funfare\MigrationAnalyzer\Tests\Unit;
use Funfare\MigrationAnalyzer\Tests\TestCase;
use Funfare\MigrationAnalyzer\Parser\FileParser;

class ParserTest extends TestCase
{
    

    public function test_it_parses_a_file() {

       $stub = __DIR__.'/../stubs/2021_01_01_010101_create_tests_table.php';

       $parser = new FileParser($stub);
       $data = $parser->parse();
    }
}