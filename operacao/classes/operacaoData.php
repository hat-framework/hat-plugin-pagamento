<?php 
class pagamento_operacaoData extends \classes\Model\DataModel{
    public $dados  = array(
         'cod' => array(
	    'name'     => 'Código',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'ai'      => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'private' => true
        ),
         'cod_usuario' => array(
	    'name'     => 'Usuario',
	    'type'     => 'int',
	    'size'     => '11',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'fkey' => array(
	        'model' => 'usuario/login',
	        'cardinalidade' => '1n',
	        'keys' => array('cod_usuario', 'cod_usuario'),
	    ),
        ),
         'codproduto' => array(
	    'name'     => '',
	    'type'     => 'int',
	    'size'     => '11',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'especial' => 'session',
	    'session'  => 'pagamento/produto',
	    'fkey' => array(
	        'model' => 'pagamento/produto',
	        'cardinalidade' => '1n',
	        'keys' => array('cod', 'cod'),
	    ),
        ),
         'dtdata' => array(
	    'name'     => 'DtData',
	    'type'     => 'date',
	    'especial' => 'calendar',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'lstipo' => array(
	    'name'     => 'LsTipo',
	    'type'     => 'enum',
	    'default' => 'pagseguro',
	    'options' => array(
	    	'pagseguro' => 'pagseguro',
	    	'moip' => 'moip',
	    	'transferencia' => 'transferencia',
	    ),
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'codstatus' => array(
	    'name'     => '',
	    'type'     => 'int',
	    'size'     => '2',
	    'grid'    => true,
	    'display' => true,
	    'especial' => 'session',
	    'session'  => 'pagamento/status',
	    'fkey' => array(
	        'model' => 'pagamento/status',
	        'cardinalidade' => '1n',
	        'keys' => array('cod', 'cod'),
	    ),
        ),
	    'button'     => array('button' => 'Gravar Operacao'),);
}
?>