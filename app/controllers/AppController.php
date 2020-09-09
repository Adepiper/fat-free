<?php

class AppController extends ParentController {
    function render(){

        $this->f3->set('view', 'dashboard.htm');
        $template = new Template;
        echo $template->render('layout.htm');
        
    }

        function displayMessages() {
            $messages = new Messages($this->db);

            $this->f3->set('messages', $messages->all());
            $this->f3->set('view', 'mesages.htm');
            $template = new Template;
            echo $template->render('layout.htm');
            
        }

    function apiMessages() {
        $messages = new Messages($this->db);
        $data = $messages->all();

        $json = array();
        foreach($data as $row) {
            $item = array();
            foreach($row as $key => $value) {
                $item[$key] = $value;
            }
            array_push($json, $item);
        }
        echo json_encode($json);
    }

    function displayAjaxView() {
        $this->f3->set('view', 'ajax.htm');
        $template = new Template;
        echo $template->render('layout.htm');
    }
  
    // function render(){

    //     $createmessage = new Messages($this->db);
    //     $createmessage->key ='Secondmessahe';
    //     $createmessage->message = 'This is the second message from the code';
    //     $createmessage->save();


    //     $messages = new Messages($this->db);
    //     $msg = $messages->getById(2)[0];

    //     $this->f3->set('msg', $msg);
    //     $template = new Template;
    //     echo $template->render('dashboard.htm');
        
    // }

    function hello() {
        echo 'Hello emma';
    }
}