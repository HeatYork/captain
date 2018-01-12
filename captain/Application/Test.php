<?php

namespace Application;

class Test extends \Template\AMaster
{
    public function index()
    {
        $this->setTitle('首頁');
        $data = array(
            'test' => '首頁內容'
        );

        $this->display('test.php', $data);
    }

    public function echoTest()
    {
        $this->setTitle('我愛的人');
        $test = array('test'=>'雞龜骨滾羹');

        $this->display('test.php', $test);
    }
}