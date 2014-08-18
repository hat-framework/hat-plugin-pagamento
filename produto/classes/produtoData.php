<?php 
class pagamento_produtoData extends \classes\Model\DataModel{
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
         'dsnome' => array(
	    'name'     => 'Nome',
	    'type'     => 'varchar',
	    'size'     => '50',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'nrvalor' => array(
	    'name'     => 'Valor',
	    'type'     => 'decimal',
            'especial' => 'monetary',
	    'size'     => '5,2',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'dsdescricao' => array(
	    'name'     => 'Descrição',
	    'type'     => 'varchar',
	    'size'     => '255',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'lsperiodo' => array(
	    'name'     => 'Período',
	    'type'     => 'enum',
	    'default' => 'monthly',
	    'options' => array(
	    	'monthly'       => 'Mensal',
	    	'bimonthly'     => 'Bimestral',
	    	'trimonthly'    => 'Trimestral',
	    	'semiannually'  => 'Semestral',
	    	'yearly'        => 'Anual',
	    ),
	    'grid'    => true,
	    'display' => true,
        ),
         'codperfil' => array(
	    'name'     => 'Perfil',
	    'type'     => 'int',
	    'size'     => '11',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'fkey' => array(
	        'model' => 'usuario/perfil',
	        'cardinalidade' => '1n',
	        'keys' => array('usuario_perfil_cod', 'usuario_perfil_nome'),
	    ),
        ),
	    'button'     => array('button' => 'Gravar Produto'),);
}