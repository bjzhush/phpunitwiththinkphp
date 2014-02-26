<?php
class firstTest extends BaseActionTest
{
    function testSunRise() {
        $a = new IndexAction();
        $res = $a->sunRise();
        $this->assertEquals('sunRised',$res);
    }

    function testShowPost() {
        require_once( THINK_PATH.'/ThinkPHP.php');
        $a = new IndexAction();
        $result = $a->showPost();
        $this->assertEquals('bjzhush', $result);
    }
}
