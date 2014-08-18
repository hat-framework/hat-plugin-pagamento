<?php 
 use classes\Controller\CController;
class produtoController extends CController{
    public $model_name = 'pagamento/produto';
        public function __construct($vars) {
        parent::__construct($vars);
    }
    
    public function index($display = true, $link = "") {
        $this->LoadModel('usuario/login', 'uobj');
        $this->setListType("ListInTable");
        $this->registerVar('title', 'Produtos');
        $titulo = 'Assine Finance-e';
        $descricao = 'Assinaturas disponíveis para quem deseja lucrar mais no mercado financeiro';
        $keywords = 'Analisar investimentos melhor,pacote de assinatura Finance-e, invista consciete, investir melhor';
        $this->genTags($titulo, $descricao, $keywords);
        parent::index($display, $link = 'pagamento/produto/produto');
    }
    
    public function show($display = true, $link = ""){
          $this->LoadModel('usuario/login', 'log');
          $cod = $this->log->getCodUsuario();
          $usuario = $this->log->getItem($cod, "", true);
          $this->model->adquirir($this->item,$usuario); 
          parent::show($display, $link);
    }
    
    
}