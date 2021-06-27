<?php

namespace Controller;

class Utils
{
    public static function loggedInUser()
    {
        if(!((isset($_SESSION["uid"]))&& $_SESSION["role"]==="student"))
        {
            header("Location: /");
        }
    }

    public static function loggedInAdmin()
    {
        if(!((isset($_SESSION["uid"]))&& $_SESSION["role"]==="admin"))
        {
            header("Location: /");
        }
    }
    public static function isSetAll(...$values)
    {
        $flag=true;
        foreach($values as $v)
           { if(!isset($v))
                $flag=false;}
        return ($flag);
    }
}
