<?php
class pagamentoInstall extends classes\Classes\InstallPlugin{
    
    protected $dados = array(
        'pluglabel' => 'Pagamento',
        'isdefault' => 'n',
        'detalhes'  => 'Para usuário realizar compras',
    );
    
    public function install(){
        return true;
    }
    
    public function unstall(){
        return true;
    }
}