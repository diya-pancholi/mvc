<?php
namespace Model;

class Book {

    public static function showAvailable() {
        $db = \DB::get_instance();
        $stmt = $db->prepare("SELECT * FROM books WHERE available = 'yes'");
        $stmt->execute();
        $rows = $stmt->fetchAll();
        return $rows;
    }

    public static function showRequested() {
        $db = \DB::get_instance();
        $stmt = $db->prepare("SELECT b.name, b.id, s.email FROM books b,users s WHERE b.available = 'no' and b.approved = 'no' and b.requested = 'yes' and b.lender = s.id");
        $stmt->execute();
        $rows = $stmt->fetchAll();
        return $rows;

    }

    public static function seeCheckOut($uid) {
        $db = \DB::get_instance();
        $stmt = $db->prepare("SELECT * FROM books WHERE available = 'no' and lender = ? and approved = 'yes' and requested = 'no'");
        $stmt->execute([$uid]);
        $rows = $stmt->fetchAll();
        return $rows;
    }

    public static function showRequests($uid) {
        $db = \DB::get_instance();
        $stmt = $db->prepare("SELECT * FROM books WHERE available = 'no' and requested = 'yes' and lender = ? and approved = 'no'");
        $stmt->execute([$uid]);
        $rows = $stmt->fetchAll();
        return $rows;
    }

    public static function addBook($name, $genre) {
        $db = \DB::get_instance();
        $stmt = $db->prepare("INSERT INTO books (name , genre, available) VALUES (?, ?, 'yes')");
        $stmt->execute([$name, $genre]);
    }

    public static function checkOut($uid,$id) {
        $db = \DB::get_instance();
        $stmt = $db->prepare("update books set available = 'no', requested ='yes', approved ='no', lender = ? where id = ?");
        $stmt->execute([$uid, $id]);
    }

    public static function checkIn($uid,$id) {
        $db = \DB::get_instance();
        $stmt = $db->prepare("update books set available = 'yes', requested =NULL, approved =NULL ,lender = NULL where id = ?");
        $stmt->execute([$id]);
    }

    public static function approve($id) {
        $db = \DB::get_instance();
        $stmt = $db->prepare("update books set available = 'no' ,requested ='no', approved ='yes'  where id = ?");
        $stmt->execute([$id]);
    }

    public static function decline($id) {
        $db = \DB::get_instance();
        $stmt = $db->prepare("update books set available = 'yes' ,requested =NULL , approved =NULL ,lender = NULL where id = ?");
        $stmt->execute([ $id]);
    }
}