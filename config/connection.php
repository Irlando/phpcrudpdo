<?php
class Connect extends PDO
{ 
    protected $driver = "";
    protected $host = "";
    protected $port = "";
    protected $schema = "";
    protected $username =  "";
    protected $password = "";
    public function __construct($file = './.ini')
    {
        if (!$settings = parse_ini_file($file, TRUE)) throw new exception('Unable to open ' . $file . '.');

            $this->driver = $settings['database']['driver'];
            $this->host = $settings['database']['host'];
            $this->port = $settings['database']['port'];
            $this->schema = $settings['database']['schema'];
            $this->username =  $settings['database']['username'];
            $this->password = $settings['database']['password'];

        $dns =  $this->driver .':host=' . $this->host . ((!empty($this->port)) ? (';port=' . $this->port ) : '') . ';dbname=' . $this->schema ;
            try 
            {
              //  $this->connection = new PDO($dns, $settings['database']['username'], $settings['database']['password']);
              $connection =  parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
             //$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            } catch (Exception $e) 
            {
                 throw new exception('error !' . $e->getMessage());
                 die();
            }
                
    }
}

 //$teste = new Connect();