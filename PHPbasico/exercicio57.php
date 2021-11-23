<?php
function nome($name){
    if($name == null){
        throw new Exception("Não pode ser nulo",1);
    }
    return $name;

}try{
    nome("Mateus");
    nome("");
}catch (\Exception $erro){
    echo json_encode(["mensagem"=>$erro->getMessage(),"codigo"=>$erro->getCode()],true);
}finally{
    echo "feito";
}
?>
