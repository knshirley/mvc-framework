<?php

class Home_Controller extends Base_Controller{

    public function main(){

        $home = new Home_Model();

        $message = $home->getMessage();

        $this->assign('message', $message);

        $this->render();
    }

}

?>
