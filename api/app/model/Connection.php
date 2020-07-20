<?php


    namespace App\model;
    use PDO;
    use PDOException;

    class Connection{
         private static $host = "localhost";
         private static $username = "root";
         private static $password = "";
         private static $driver = "mysql";
         private static $database = "mensageiro";
         public  static $conn ;


        public static function start(){
                try{    
                        self::$conn = new PDO(self::$driver.":host=".self::$host.";dbname=".self::$database, self::$username, self::$password);
                        // set the PDO error mode to exception
                        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                }
                catch (PDOException $e) {
                        //echo 'Connection failed: ' . $e->getMessage();
                        self::$conn = null;
                }

                    return self::$conn;
            
        }
    }

    


   
    