<?php 
use classes\Classes\Actions;
class pagamentoActions extends Actions{
    protected $permissions = array(
        "pagamento" => array(
            "nome"      => "pagamento",
            "label"     => "Gerenciar Pagamento",
            "descricao" => "Permite acesso ao plugin",
            "default"   => "n",
        ),
        
        "pagamento_pagamento_operacao" => array(
            "nome"      => "pagamento_operacao",
            "label"     => "Gerenciar Operacao",
            "descricao" => "Permite gerenciar (adicionar, visualizar, editar e apagar) os dados do subplugin operacao",
            "default"   => "n",
        ),
    
        "pagamento_pagamento_produto" => array(
            "nome"      => "pagamento_produto",
            "label"     => "Gerenciar Produto",
            "descricao" => "Permite gerenciar (adicionar, visualizar, editar e apagar) os dados do subplugin produto",
            "default"   => "n",
        ),
        
        "pagamento_pagamento_assinatura" => array(
            "nome"      => "pagamento_assinatura",
            "label"     => "Visualizar Página de assinatura",
            "descricao" => "Permite visualizar página de assinatura",
            "default"   => "s",
        ),
    
    );
    
    protected $actions = array( 
        "pagamento/index/index" => array(
            "label" => "pagamento", "publico" => "n", "default_yes" => "s","default_no" => "n",
            "permission" => "pagamento",
            "menu" => array('pagamento/operacao/index','pagamento/produto/index',)
        ),
        
         "pagamento/index/redirecionar" => array(
            "label" => "Página Inicial", "publico" => "s", "default_yes" => "s","default_no" => "n",
            "permission" => "pagamento_assinatura",
            "menu" => array()
        ),
        
        
        
        'pagamento/operacao/index' => array(
            'label' => 'operacao', 'publico' => 'n', 'default_yes' => 's',"default_no" => "n",
            'permission' => 'pagamento_operacao',
            'menu' => array('Página Principal' => 'pagamento/index/index', 'pagamento/operacao/formulario')
        ),
        
        'pagamento/operacao/formulario' => array(
            'label' => 'Criar operacao', 'publico' => 'n', 'default_yes' => 's',"default_no" => "n",
            'permission' => 'pagamento_operacao',
            'menu' => array('Voltar' => 'pagamento/operacao/index')
        ),
        
        'pagamento/operacao/show' => array(
            'label' => 'Visualizar operacao', 'publico' => 'n', 'default_yes' => 's',"default_no" => "n",
            'permission' => 'pagamento_operacao', 'needcod' => true,
            'menu' => array('pagamento/operacao/index', 'Ações' => array('Editar' => 'pagamento/operacao/edit', 'Excluir' => 'pagamento/operacao/apagar'))
        ),
        
        'pagamento/operacao/edit' => array(
            'label' => 'Editar operacao', 'publico' => 'n', 'default_yes' => 's',"default_no" => "n", 
            'permission' => 'pagamento_operacao', 'needcod' => true,
            'menu' => array('pagamento/operacao/index', 'Voltar para operacao' => 'pagamento/operacao/show')
        ),

        'pagamento/operacao/apagar' => array(
            'label' => 'Excluir operacao', 'publico' => 'n', 'default_yes' => 's',"default_no" => "n",
            'permission' => 'pagamento_operacao', 'needcod' => true,
            'menu' => array()
        ),
        
         'pagamento/operacao/compraFinalizada' => array(
            'label' => 'Excluir operacao', 'publico' => 's', 'default_yes' => 's',"default_no" => "n",
            'permission' => 'pagamento_assinatura',
            'menu' => array('Voltar para Página Principal' => 'empresa/index/index')
        ),

        'pagamento/produto/index' => array(
            'label' => 'Assine', 'publico' => 's', 'default_yes' => 's',"default_no" => "n",
            'permission' => 'pagamento_assinatura',
            'menu' => array('pagamento/produto/formulario'),
             'breadscrumb' => array('pagamento/index/redirecionar', 'pagamento/produto/index')
        ),
        
        'pagamento/produto/formulario' => array(
            'label' => 'Criar produto', 'publico' => 'n', 'default_yes' => 's',"default_no" => "n",
            'permission' => 'pagamento_produto',
            'menu' => array('Voltar' => 'pagamento/produto/index')
        ),
        
        'pagamento/produto/show' => array(
            'label' => 'Visualizar produto', 'publico' => 'n', 'default_yes' => 's',"default_no" => "n",
            'permission' => 'pagamento_assinatura', 'needcod' => true,
            'menu' => array('pagamento/produto/index', 'Ações' => array('Editar' => 'pagamento/produto/edit', 'Excluir' => 'pagamento/produto/apagar'))
        ),
        
        'pagamento/produto/edit' => array(
            'label' => 'Editar produto', 'publico' => 'n', 'default_no' => 's',"default_no" => "n", 
            'permission' => 'pagamento_produto', 'needcod' => true,
            'menu' => array('pagamento/produto/index', 'Voltar para produto' => 'pagamento/produto/show')
        ),

        'pagamento/produto/apagar' => array(
            'label' => 'Excluir produto', 'publico' => 'n', 'default_no' => 's',"default_no" => "n",
            'permission' => 'pagamento_produto', 'needcod' => true,
            'menu' => array()
        ),

    
    );
    
}