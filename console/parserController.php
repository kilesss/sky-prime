<?php


class ParserController
{
    private $filePath;
    public function __construct($filename, $className)
    {
        $this->filePath = '../data'.DIRECTORY_SEPARATOR.$filename;

        if (!file_exists('../data'.DIRECTORY_SEPARATOR.$filename)) {
            echo 'The file is not exists in `data` directory'.PHP_EOL;
            exit();
        }
        $parser = 'parsers'.DIRECTORY_SEPARATOR.$className.".php";
        if (!file_exists($parser)) {
            echo 'Parser class not exist '.PHP_EOL;
            exit();
        }
        $parsedData  = $this->readData();
        $this->loadClass($parser);
        $useProperty  =  'parsers\\'.$className;
        $parserInstance = new $useProperty;
        $parserInstance->parseData($parsedData, $this->makePDOConnection());
    }

    private function loadClass($className)
    {
        require $className;

    }
    public function makePDOConnection()
    {
        return new PDODb(['type' => 'mysql',
            'host' => '127.0.0.1',
            'username' => 'root',
            'password' => '',
            'dbname'=> 'sky-prime',
            'port' => 3306,
            'charset' => 'utf8']);
        //
    }
    private function readData()
    {
        return json_decode(file_get_contents($this->filePath, JSON_UNESCAPED_UNICODE));
    }
}