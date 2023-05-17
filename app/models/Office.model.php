<?php

class Office{

    public  static function allOffices(){
        try{
            return R::findAll("office");
        }catch (Exception $e){
            return $e;
        }
    }
    public static function addOffice($office){
        $officeModel = R::dispense("office");
        $officeModel['name'] = $office['name'];
        $officeModel['is_active'] = true;
        $officeModel['created_at'] = date_create("now");
        $officeModel['updated_at'] = date_create("now");

        try{
            R::store($officeModel);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }

    public static function closeOffice($pk){
        try{
            $officeModel = R::load("office", $pk);
            $officeModel['is_active'] = false;
            $officeModel['updated_at'] = date_create("now");
            R::store($officeModel);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }

    public static function getClassMaster (){
        try {
            return R::findOne('office', "name=:name", [":name" => "Form Teacher"]);
        }catch (Exception $e){
            return $e;
        }
    }
    public static function deleteOffice($pk){
        try{
            R::trash('office', $pk);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }
}