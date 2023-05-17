<?php

class ClearanceItem{
    public static function addClearanceItem($clearItem){
     
        $clearItemModel = R::dispense("clearance_item");
        $clearItemModel['clearance_id'] = $clearItem['clid'];
        $clearItemModel['office_id'] = $clearItem['oid'];
        $clearItemModel['officer_id'] = $clearItem['ofid'];
        $clearItemModel['student_id'] = $clearItem['stid'];
        $clearItemModel['remarks'] = null;
        
        $clearItemModel['created_at'] = date_create("now");
        $clearItemModel['updated_at'] = date_create("now");

        try{
            R::store($clearItemModel);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }

    public static function unclearedStudents(){
        try{
            $beans = R::findMulti( 'student,clearance_item', '
            SELECT student.*, clearance_item.* FROM student
            LEFT JOIN clearance_item ON clearance_item.student_id = student.id 
            WHERE student.requested_clearance = 1 AND clearance_item.student_id Is null
            AND clearance_item.officer_id ='.$_SESSION['user_id']
            );
             return $beans;
       }catch (Exception $e){
         return $e;
       
        
     }
    }
    


    //     $clearItemModel = R::dispense("clearance_item");
    //     $clearItemModel['clearance_id'] = $clearItem['clid'];
    //     $clearItemModel['office_id'] = $clearItem['oid'];
    //     $clearItemModel['officer_id'] = $clearItem['ofid'];
    //     $clearItemModel['is_cleared'] = false;
    //     $clearItemModel['remarks'] = null;
    //     $clearItemModel['created_at'] = date_create("now");
    //     $clearItemModel['updated_at'] = date_create("now");

    //     try{
    //         R::store($clearItemModel);
    //         return 1;
    //     }catch (Exception $e){
    //         return $e;
    //     }
    // }

    
    public static function updateClearanceItem($clearItem){
        try{
            $clearItemModel = R::load("clearance_item", $clearItem['pk']);
            $clearItemModel['officer_id'] = $clearItem['ofid'];
            $clearItemModel['is_cleared'] = $clearItem['is_clear'];
            $clearItemModel['remarks'] = $clearItem['remarks'];
            R::store($clearItemModel);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }
}