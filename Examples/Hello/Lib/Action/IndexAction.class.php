<?php
class IndexAction extends Action{
    public function index() {
        return 'testIn';
    }

    public function sunRise() {
        return 'sunRised';
    }

    public function showPost() {
        $_POST['user'] = 'bjzhush';
        if (isset($_POST['user'])) {
            return I('post.user');
        } else {
            return 'null';
        }
    }
}
?>
