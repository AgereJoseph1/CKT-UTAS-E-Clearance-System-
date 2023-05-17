<?php

class Clearance{
    public static function addClearance($clear){
        $clearModel = R::dispense("clearance");
        $clearModel['student_id'] = $clear['sid'];
        $clearModel['is_completed'] = false;
        $clearModel['created_at'] = date_create("now");
        $clearModel['updated_at'] = date_create("now");
        try{
            return R::store($clearModel);

        }catch (Exception $e){
            return $e;
        }
    }

    public static function updateClearance($pk){
        try{
            $clearModel = R::load('clearance', $pk);
            $clearModel['is_completed'] = true;
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }


}