<?php
namespace Model;

class User {
    public static function getuser($email, $pswd) {
        $db = \DB::get_instance();
        $stmt = $db->prepare("select * from users where email = ? and password = ?");
        $stmt->execute([$email, $pswd]);
        $rows = $stmt->fetch();
        return $rows;
    }

    public static function adduser($email, $pswd) {
        $db = \DB::get_instance();
        $stmt = $db->prepare("insert into users (email, password, role) values (?,?,'student')");
        $stmt->execute([$email, $pswd]);
        $rows = $stmt->fetch();
        return $rows;
    }
}