<?php

class indexController extends \classes\Controller\Controller {

    public $model_name = '';

    public function index() {
        $this->display(LINK . "/pagamento");
    }
    
     public function redirecionar() {
         Redirect('empresa/index/index');
    }

}

?>