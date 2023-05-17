<?php

class Student{  
    public static function addStudent($student){
        $studentModel = R::dispense("student");
        $studentModel['course'] = $student['crs'];
        $studentModel['fullname'] = $student['fn'];
        $studentModel['index_number'] = $student['in'];
        $studentModel['requested_clearance'] = false;
        $studentModel['is_cleared'] = false;
        $studentModel['password'] = $student['pwd'];
        $studentModel['created_at'] = date_create("now");
        $studentModel['updated_at'] = date_create("now");

        try{
            R::store($studentModel);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }


    
    // // Added All cleared students model
    // public static function clearedStudents($info){
    //     $clearedStudModel = R::dispense('clearedstudents');
    //     $clearedStudModel['stud_id'] = $info['stud_id'];
    //     $clearedStudModel['officer_id'] = $info['officer_id'];
    //     $ClearedStudModel['date of clearace'] = date_create("now");

    //     try {
    //         R::store($clearedStudentModel);
    //         return 1;
    //     } catch (Exception $e) {
    //         return $e;
    //     }
    // }


    public static function allClearedStudents(){
        try{
            return R::findAll("clearedstudents");

        }catch (Exception $e){
            return $e;
        }
    }


    public static function getStudent($pk){
        try{
            return R::load('student', $pk);
        }catch (Exception $e){
            return  $e;
        }
    }

    // public static function getStudentByUserId($uid){
    //     try{
    //         return R::findOne('student', "user_id=:uid", [":uid"=>$uid]);
    //     }catch (Exception $e){
    //         return  $e;
    //     }
    // }

    // Get student by index number
    public static function getStudentByIndexNumber($index){
        try{
            return R::findOne('student', "index_number=:index", [":index"=>$index]);
        }catch (Exception $e){
            return  $e;
        }
    }

    public static function updateStudentClearanceStatus($pk){
        try{
            $studentModel =  R::load('student', $pk);
            $studentModel['is_cleared'] = true;
            return 1;
        }catch (Exception $e){
            return  $e;
        }
    }

    // Update clearance status (if requested)
    public static function updateClearanceRequest($pk){
        try{
            $studentModel =  R::load('student', $pk);
            $studentModel['requested_clearance'] = 1;
            R::store($studentModel);
            return 1;
        }catch (Exception $e){
            return  $e;
        }
    }

    public static function checkClearanceRequest($pk){
        try{
            $studentModel =  R::load('student', $pk);
           $value = $studentModel['requested_clearance'];
            return $value;
        }catch (Exception $e){
            return  $e;
        }
    }

    
    public static function markAsCompleted($pk){
        try{
            $studentModel =  R::load('student', $pk);
            $studentModel['has_completed'] = true;
            return 1;
        }catch (Exception $e){
            return  $e;
        }
    }

    // Authenticate Student
    public static function authenticateStudent($details){
        try{
            return R::findOne('student', 'index_number=:index AND password=:pass',
            [":index"=>$details['stid'], ":pass"=>$details['pass']]);

        }catch (Exception $e){
            return  $e;
        }
    }
    public static function clearanceRequested($pk){
        try{
            $studentModel =  R::findOne('student', $pk);
            return $studentModel['requested_clearance'];
        }catch (Exception $e){
            return  $e;
        }
    }

    public static function resetPassword($pk){
        try{
            $studentModel =  R::load('student', $pk);
            $studentModel['password'] = 123;
            R::store($studentModel);
            return 1;
        }catch (Exception $e){
            return  $e;
        }
    }


}