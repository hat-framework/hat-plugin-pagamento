<?php 
class pagamento_statusData extends \classes\Model\DataModel{
    public $dados  = array(
         'cod' => array(
	    'name'     => 'Código',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'private' => true
        ),
         'dsnome' => array(
	    'name'     => 'Dsnome',
	    'type'     => 'varchar',
	    'size'     => '50',
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar Status'),);
}
?>