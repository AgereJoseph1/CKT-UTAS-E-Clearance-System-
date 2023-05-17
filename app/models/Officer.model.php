<?php

class Officer{

    public static function allOfficers(){
        try{
            return R::findAll("officer");

        }catch (Exception $e){
            return $e;
        }
    }

    public static function addOfficer($officer){
        $officerModel = R::dispense("officer");
        $officerModel['office_id'] = $officer['oid'] ?? null;
        $officerModel['fullname'] = $officer['fn'];
        $officerModel['email'] = $officer['em'];
        $officerModel['phone'] = $officer['phn'];
        $officerModel['staffid'] = $officer['sid'];
        $officerModel['is_teacher'] = true;
        $officerModel['is_officer'] = true;
        $officerModel['is_active'] = true;
        $officerModel['password'] = $officer['pwd'];
        $officerModel['created_at'] = date_create("now");
        $officerModel['updated_at'] = date_create("now");

        try{
            R::store($officerModel);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }

    public static function getOfficerByUid($sid){
        try{
            return R::findOne("officer", "staffid=:sid", [":sid"=>$sid]);
        }catch (Exception $e){
            return $e;
        }
    }

    public static function updateOfficerDetails($officer){
        try{
            $officerModel = R::findOne("officer", $officer['pk']);
            $officerModel['email'] = $officer['em'];
            $officerModel['phone'] = $officer['phn'];
            $officerModel['updated_at'] = date_create("now");
            R::store($officerModel);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }

    public static function disableOfficerAccess($officer){
        try{
            $officerModel = R::findOne("officer", $officer['pk']);
            $officerModel['is_active'] = false;
            $officerModel['updated_at'] = date_create("now");
            R::store($officerModel);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }
}