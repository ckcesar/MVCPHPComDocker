<?php

namespace Application\Model;


class ModelClienteSite extends Service{

    public function getCliente(){
        $resultset = $this->listar("nome,sobrenome,idade");
        return $resultset->asArray();
    }

}