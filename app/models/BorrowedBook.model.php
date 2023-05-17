<?php
class BorrowedBook{
    
    public static function addRecord($record){
        $bookModel = R::dispense("borrowedbook");
        $bookModel['book_id'] = $record['bid'];
        $bookModel['student_id'] = $record['sid'];
        $bookModel['officer_id'] = $record['oid'];
        $bookModel['is_returned'] = false;
        $bookModel['created_at'] = date_create("now");
        $bookModel['updated_at'] = date_create("now");

        try{
            R::store($bookModel);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }

    public  static function allRecords(){
        try{
            return R::findAll("borrowedbook");
        }catch (Exception $e){
            return $e;
        }
    }

    public static function update_book_return($book){
        try{
            $bookModel = R::load("book", $book['pk']);
            $bookModel['is_returned'] = false;
            $bookModel['updated_at'] = date_create("now");
            R::store($bookModel);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }
    public static function deleteRecord($pk){
        try {
            R::trash('borrowedbook', $pk);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }
}