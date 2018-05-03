<?php

namespace Application;

class Backstage extends \Template\AMaster
{
    public function index()
    {
        $this->setTitle('首頁');
        $data = array(
            'test' => '首頁內容'
        );

        $this->display('/push.php', $data);
    }

    public function push()
    {
        $this->setTitle('建立推播活動');
        $this->addCss('/assets/css/notification.css');
        $this->display('/push.php');
    }
}