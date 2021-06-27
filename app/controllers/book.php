<?php
namespace Controller;

class AddBook 
{
    public function get() 
    {
        if($_SESSION['role']=="admin")
        { 
           echo \View\Loader::make()->render("templates/addbook.twig", );
        }
        else
        {
            header("Location: /");  
        }         
    }
}

class AddBookToDB 
{
    public function post()
    {
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        \Model\Book::addBook($name, $genre);
        $host  = $_SERVER['HTTP_HOST'];
        header("Location: http://$host/ahome");
    }
}

class AHome 
{
    public function get() 
    {
        if($_SESSION['role']=="admin")
       {
            echo \View\Loader::make()->render("templates/ahome.twig", array(
                "books" => \Model\Book::showRequested(),
            ));
       }
       else
       {
           header("Location: /");
       }
    }

}

class Approve 
{
    public function get()
    {
        $id = $_GET['id'];
       \Model\Book::approve($id);
        $host  = $_SERVER['HTTP_HOST'];
        header("Location: http://$host/ahome");
    }
}

class CheckedIn 
{
    public function get() 
    {
        if($_SESSION['role']=="student")
        {
            echo \View\Loader::make()->render("templates/checkedin.twig", array(
                "books" => \Model\Book::showCheckedIn(),
            ));
        }
        else
        {
            header("Location: /");
        }
    }

}


class CheckIn 
{
    public function get()
    {
        $id = $_GET['id'];
        $uid= $_SESSION['uid'];
        \Model\Book::checkIn($uid,$id);
        $host  = $_SERVER['HTTP_HOST'];
        header("Location: http://$host/seecheckout");
    }
}


class Checkout 
{
    public function get()
    {
        $id = $_GET['id'];
        $uid= $_SESSION['uid'];
        \Model\Book::checkOut($uid,$id);
        $host  = $_SERVER['HTTP_HOST'];
        header("Location: http://$host/home");

    }
}


class Decline 
{
    public function get()
    {
        $id = $_GET['id'];
       \Model\Book::approve($id);
        $host  = $_SERVER['HTTP_HOST'];
        header("Location: http://$host/ahome");

    }
}

class Home 
{
    public function get() 
    {
        if($_SESSION['role']=="student")
        {
            echo \View\Loader::make()->render("templates/home.twig", array(
                "books" => \Model\Book::showAvailable(),
        ));
        }
        else
        {
            header("Location: /");
        }
    }   
}

class SeeCheckOut 
{
    public function get() 
    {
        if($_SESSION['role']=="student")
        {
            $uid=$_SESSION['uid'];
            echo \View\Loader::make()->render("templates/checkedout.twig", array(
                "books" => \Model\Book::seeCheckOut($uid),
            ));
        }
        else
        {
            header("Location: /");
        }
    }

}

class ViewRequest
{
    public function get() 
    {
        if($_SESSION['role']=="student")
        {
            $uid= $_SESSION['uid'];
            echo \View\Loader::make()->render("templates/viewrequest.twig", array(
                "books" => \Model\Book::showRequests($uid),
            ));
        }
        else
        {
            header("Location: /");
        }
    }

}



























class Approve 
{
    public function get()
    {
        $id = $_GET['id'];
       \Model\Book::approve($id);
        $host  = $_SERVER['HTTP_HOST'];
        header("Location: http://$host/ahome");
    }
}

class CheckedIn 
{
    public function get() 
    {
        if($_SESSION['role']=="student")
        {
            echo \View\Loader::make()->render("templates/checkedin.twig", array(
                "books" => \Model\Book::showCheckedIn(),
            ));
        }
        else
        {
            header("Location: /");
        }
    }

}



