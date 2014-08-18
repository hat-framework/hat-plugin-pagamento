<?php 
 use classes\Controller\CController;
class operacaoController extends CController{
    public $model_name = 'pagamento/operacao';
    
     public function compraFinalizada(){
        $this->LoadResource('pagamento/pagseguro', 'pag');
        $this->pag->retorno();
        $this->setVars($this->pag->getMessages());
        $this->display('');
    }
}