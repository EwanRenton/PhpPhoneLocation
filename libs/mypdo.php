<?php
namespace libs;
use \PDO;
    class mypdo
    {
        private $db;
        private $db_name = 'phonelocation';
        private $db_charset='utf8';
        private $db_user = 'root';
        private $db_pass = '123456';
        private $db_host = '127.0.0.1';
        //构造函数以及连接数据库
        public function __construct()
        {
            try {

                $this->db = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name,$this->db_user,$this->db_pass);
                $this->db->exec("SET CHARACTER SET".$this->db_charset);
                $this->db->exec("SET NAMES".$this->db_charset);
            } catch (PDOException $e) {
                print "Error!:".$e->getMessage()."<br>";
                die();
            }

        }
        //管理数据库，析构函数
        public function __destruct()
        {
            $this->db = null;
        }
        /**
         * 添加数据
         * @param  [string] $table [description]
         * @param  [array] $data  [description]
         * @return [bool]        [description]
         */
        public function insert($table,$data)
        {
            // print_r($data);

            $keys=join(",",array_keys($data));
            $vals = "'".join("','",array_values($data))."'";

            $sql="insert {$table} ($keys) values({$vals})";
            // echo $sql;
            $i=$this->db->exec($sql);
            if($i){
                return true;
            }else {
                return false;
            }
        }
        /**
         * 查询数据
         * @param  [string] $table [description]
         * @param  string $name  [description]
         * @param  [string] $where [description]
         * @return [type]        [description]
         */
        public function select($table,$name='*',$where=null)
        {
            $where=$where==null?null:"WHERE ".$where;
            $sql="select {$name} from {$table} {$where}";
            // echo $sql;
            $back=$this->db->query($sql);
            $back->setFetchMode(PDO::FETCH_ASSOC);
            $back=$back->fetchall();
            return $back;
        }


    }
