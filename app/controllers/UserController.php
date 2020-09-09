<?php

class UserController extends ParentController {
  
    function render(){
        $template = new Template;
        echo $template->render('login.htm');
    }

    function beforeroute() {
        
    }

    function authenticate() {
        $username = $this->f3->get('POST.username');
        $password = $this->f3->get('POST.password');

        $user = new User($this->db);
        $user->getUserByName($username);

        if ($user->dry()) {
            $this->f3->reroute('/login');
        }

        if(password_verify($password, $user->Password)) {
            $this->f3->set('SESSION.user', $user->Username);
            $this->f3->reroute('/');
        } else {
            $this->f3->reroute('/login');
        }
    }
}