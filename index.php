<?php
    /*

    $text = "holaasdasdasasd,sa";
    $pos = strpos($text,',');
    echo substr($text,0,$pos).substr($text, $pos);

    */
    echo "Hola :v";
    class Conexion{
        public static function con(){
            define("host","localhost");
            define("user","root");
            define("pass","123456");
            define("db","framework");

            $con = mysql_connect(host, user, pass);
            mysql_select_db(db);

            return $con;
        }
    }

    class Mysql
    {
        public static function ejecutar($var1){
            return mysql_query($var1, Conexion::con());
    	}

        public static function arreglo($var1){
            return mysql_fetch_array($var1);
        }
    }

    $sql="select * from users";
    $res = Mysql::ejecutar($sql);

    while($reg=Mysql::arreglo($res)){
        echo $reg["nombre"]."<br>";
    }
?>
