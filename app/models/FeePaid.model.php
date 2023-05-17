<?php

class FeePaid{
    public static function addPayment($fee){
        $feeModel = R::dispense("feepaid");
        $feeModel['student_id'] = $fee['sid'];
        $feeModel['fee_id'] = $fee['fid'];
        $feeModel['amount_paid'] = $fee['amnt'];

        try{
            return R::store($feeModel);
        }catch (Exception $e){
            return $e;
        }
    }

    public static function allPayment(){

        try{
            return R::findAll("fee_paid");

        }catch (Exception $e){
            return $e;
        }
    }
    
    

}