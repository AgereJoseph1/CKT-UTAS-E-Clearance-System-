<?php

class Fee{
    public static function addLevelFee($fee){
        $feeModel = R::dispense("fee");
        $feeModel['officer_id'] = $fee['oid'];
        $feeModel['level'] = $fee['lvl'];
        $feeModel['amount'] = $fee['amnt'];
        $feeModel['created_at'] = date_create("now");
        $feeModel['updated_at'] = date_create("now");

        try{
            return R::store($feeModel);
        }catch (Exception $e){
            return $e;
        }
    }

    public static function updateFee($fee){
        try{
            $feeModel = R::load("fee", $fee['pk']);
            $feeModel['level'] = $fee['lvl'];
            $feeModel['amount'] = $fee['amnt'];
            $feeModel['updated_at'] = date_create("now");
            return R::store($feeModel);
        }catch (Exception $e){
            return $e;
        }
    }
    
    public static function allFees(){

        try{
            return R::findAll("fee");

        }catch (Exception $e){
            return $e;
        }
      }
}
