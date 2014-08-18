<?php
class produtoComponent extends classes\Component\Component{
   
    public function format_link($var, $arr, $item){
        $this->Html->MakeLink($var, "Acesse este Curso", "btn", true);
    }
    
}
?>