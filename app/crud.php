<?php

class CRUD{
    public static function insert($tableName, $fields){
        $modelInstance = R::dispense($tableName);
        foreach ($fields as $key=>$value){
            $modelInstance[$key] = $value;
        }
        try{
            return R::store($modelInstance);
        }catch (Exception $e){
            return $e;
        }
    }

    public static function query($tableName, $query=null, $params=[]){
        try{
            return R::findAll($tableName, $query, $params);
        }catch (Exception $e){
            return $e;
        }
    }

    public static function querySingle($tableName, $query=null, $params=[]){
        try{
            return R::findOne($tableName, $query, $params);
        }catch (Exception $e){
            return $e;
        }
    }

    public static function delete($tableName, $id){
        try{
             R::trash($tableName, $id);
             return 1;
        }catch (Exception $e){
            return $e;
        }
    }

    public static function update($tableName, $fields, $pk){
        $modelInstance = R::load($tableName, $pk);
        foreach ($fields as $key=>$value){
            $modelInstance[$key] = $value;
        }
        try{
            R::store($modelInstance);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }
}