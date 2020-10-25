<?php
require_once CORE.'/Connection.php';

 abstract class Model {
    protected static $table ='';
    protected static $pk = '';

    public static function all(){
        // $pdo = Connection::connect();
        $stmt = Connection::connect()->preparedStmt("SELECT * FROM ".
        static::$table);
        $stmt->execute();
        return $stmt->fetchAll();
        }
    public function getById($id){
        $stmt = Connection::connect()->preparedStmt("SELECT * FROM ".
        static::$table." WHERE ".static::$pk."=".$id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public static function save($params){
        $pdo = Connection::connect();
        $sql =sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",
            static::$table,
            implode(', ', array_keys($params)),
            ':'.implode(', :', array_keys($params))
        );
        // var_dump($sql);
        // exit();
            try{
                $stmt = $pdo->preparedStmt($sql);
                $stmt->execute($params);
            }catch(Exception $e){
                error_log ($e->getMessage());
            }
    }

    public static function update($id, $params){
        $keys = [];
        foreach($params as $key=>$value){
            array_push($keys, $key."= '".$value."'");
        }
        $sql = sprintf("UPDATE %s SET %s WHERE %s=%s",
        static::$table, 
        implode(',', $keys),
        static::$pk, $id);
        $pdo =Connection::connect();
        try { 
            $stmt = $pdo->preparedStmt($sql);
            $stmt = execute($params);
        } catch(Exception $e){
            error_log($e->getMessage());
        }
    }
    public static function destroy($id){
        $stmt = Connection::connect()->preparedStmt("DELETE FROM ".
        static::$table." WHERE ".static::$pk."=? LIMIT 1");
        $stmt ->execute([$id]);      
    }
}
   