<?php

class Book{
    public static function addBook($book){
        $bookModel = R::dispense("book");
        $bookModel['title'] = $book['title'];
        $bookModel['author'] = $book['aut'];
        $bookModel['officer_id'] = $book['oid'];
        $bookModel['is_available'] = $book['is_avail'];
        $bookModel['created_at'] = date_create("now");
        $bookModel['updated_at'] = date_create("now");

        try {
            R::store($bookModel);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }
   
    public  static function allBooks(){
        try{
            return R::findAll("book");
        }catch (Exception $e){
            return $e;
        }
    }
    public static function updateBookStatus($book){
        try {
            $bookModel = R::load('book', $book['pk']);
            $bookModel['is_available'] = $book['is_avail'];
            $bookModel['updated_at'] = date_create("now");
            R::store($bookModel);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }
    public static function deleteBook($bid){
        try {
            R::trash('book', $bid);
            return 1;
        }catch (Exception $e){
            return $e;
        }
    }

    public static function updateBookDetails($book){
        try{
        $bookModel=R::findOne('book',$book['id']);
        $bookModel['title'] = $book['title'];
        $bookModel['author'] = $book['aut'];
        $bookModel['updated_at'] = date_create("now");
        R::store($bookModel);
    }catch(Exception $e){
        return $e;
    }
}

}