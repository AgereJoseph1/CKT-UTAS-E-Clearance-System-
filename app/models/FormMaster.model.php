<?php

class FormMaster{
    public static function addClassMaster($master){
        $masterModel = R::dispense("formmasters");
        $masterModel['class'] = $master['cl'];
        $masterModel['fullname'] = $master['fn'];
        $masterModel['email'] = $master['em'];
        $masterModel['phone'] = $master['phn'];
        $masterModel['office_id'] = $master['oid'];
        $masterModel['password'] = $master['pwd'];
        $masterModel['created_at'] = date_create("now");
        $masterModel['updated_at'] = date_create("now");

        try{
            R::store($masterModel);
            return 1;

        }catch (Exception $e){
            return $e;
        }
    }

    public static function getAllMasters(){
        try{
            return R::findAll('formmasters');
        }catch (Exception $e){
            return $e;
        }
    }

    public static function deleteMaster($pk){
        try{
            return R::trash('formmasters', $pk);
        }catch (Exception $e){
            return $e;
        }
    }
}