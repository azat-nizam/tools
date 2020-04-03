<?php

namespace Azatnizam\Tools;

class Config
{
    protected static $instance;

    protected $config;

    protected $configFile;

    protected function __construct()
    {
        $this->configFile = $_SERVER['DOCUMENT_ROOT'] . '/config.ini';

        if ( file_exists($this->configFile) ) {
            $this->config = parse_ini_file($this->configFile, true);
        } else {
            throw new \Exception('Config file ' . $this->configFile . ' does not exist');
        }
    }


    protected function __clone()
    {
    }


    protected function __wakeup()
    {
    }

    protected function getConfigVal(string $param): array
    {
        return $this->config[$param];
    }

    /**
     * @param string $param
     * @return array
     * @throws \Exception
     */
    public static function get(string $param): array
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance->getConfigVal($param);
    }
}
