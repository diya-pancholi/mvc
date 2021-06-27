<?php
namespace Controller;

class AddBook 
{
    public function get() 
    {
        \Controller\Utils::loggedInAdmin();

           echo \View\Loader::make()->render("templates/addbook.twig", );
               
    }
}

class AddBookToDB 
{
    public function post()
    {
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        \Model\Book::addBook($name, $genre);
        header("Location: /ahome");
    }
}

class AHome 
{
    public function get() 
    {
        \Controller\Utils::loggedInAdmin();

            echo \View\Loader::make()->render("templates/ahome.twig", array(
                "books" => \Model\Book::showRequested(),
            ));
      
            
    }

}

class Approve 
{
    public function get()
    {
        $id = $_GET['id'];
       \Model\Book::approve($id);
        header("Location: /ahome");
    }
}

class CheckedIn 
{
    public function get() 
    {
        \Controller\Utils::loggedInUser();

            echo \View\Loader::make()->render("templates/checkedin.twig", array(
                "books" => \Model\Book::showCheckedIn(),
            ));
        
    }

}


class CheckIn 
{
    public function get()
    {
        $id = $_GET['id'];
        $uid= $_SESSION['uid'];
        \Model\Book::checkIn($uid,$id);
        header("Location: /seecheckout");
    }
}


class Checkout 
{
    public function get()
    {
        $id = $_GET['id'];
        $uid= $_SESSION['uid'];
        \Model\Book::checkOut($uid,$id);
        header("Location: /home");

    }
}


class Decline 
{
    public function get()
    {
        $id = $_GET['id'];
       \Model\Book::approve($id);
        header("Location: /ahome");

    }
}

class Home 
{
    public function get() 
    {
        \Controller\Utils::loggedInUser();

            echo \View\Loader::make()->render("templates/home.twig", array(
                "books" => \Model\Book::showAvailable(),
        ));
        
    }   
}

class SeeCheckOut 
{
    public function get() 
    {
        \Controller\Utils::loggedInUser();

            $uid=$_SESSION['uid'];
            echo \View\Loader::make()->render("templates/checkedout.twig", array(
                "books" => \Model\Book::seeCheckOut($uid),
            ));
       
    }

}

class ViewRequest
{
    public function get() 
    {
            \Controller\Utils::loggedInUser();
            $uid= $_SESSION['uid'];
            echo \View\Loader::make()->render("templates/viewrequest.twig", array(
                "books" => \Model\Book::showRequests($uid),
            ));
        
    }

}




