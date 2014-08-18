<?php 
class pagamento_produtoModel extends \classes\Model\Model{
    public $tabela = "pagamento_produto";
    public $pkey   = 'cod';
    
    public function adquirir($item,$usuario){
     $redirect_url = 'http://finance-e.com/pagamento/operacao/compraFinalizada';
     $this->LoadResource('pagamento/pagseguro','pag');
     $this->pag->assinatura($item,$usuario,$redirect_url);
    }
    
    
}