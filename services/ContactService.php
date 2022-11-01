<?php

namespace services;

use vendor\Validator;

class ContactService extends \vendor\Services
{
    protected array $whitelist = ['name', 'email', 'year', 'sex', 'title', 'content'];

    private function validate() : void
    {
        if(!(new Validator($this->data['name']))->numeric()) {
            $_SESSION['errors']['name'] = 'Имя может содержать только буквы';
            $_SESSION['fields']['name'] = $_POST['name'];
        }

        if(!(new Validator($this->data['email']))->email()) {
            $_SESSION['errors']['email'] = 'Неккоректно введёная электронная почта';
            $_SESSION['fields']['email'] = $_POST['email'];
        }

        if(strlen($this->data['title']) < 4) {
            $_SESSION['errors']['title'] = 'Слишком короткий заголовок';
            $_SESSION['fields']['title'] = $_POST['title'];
        }

        if(strlen($this->data['content']) < 4) {
            $_SESSION['errors']['content'] = 'Слишком короткое сообщение';
            $_SESSION['fields']['content'] = $_POST['content'];
        }
    }


    public function exc(): bool
    {
        $this->validate();

        if(!empty($_SESSION['errors'])) {
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }

        foreach ($this->data as $item) {
            
        }

        return true;
    }

}