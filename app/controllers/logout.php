<?php
namespace Controller;

class LogOut {
    public function get() {
        session_destroy();
        header("Location: /");
    }
}