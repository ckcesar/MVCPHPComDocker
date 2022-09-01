<?php

namespace Application\Controller;

use Application\Model\ModelClienteSite;

class Home extends AbstractController {

    public function index() {

        $cliente = new ModelClienteSite("cliente");
    	$dados['getCliente'] = $cliente->getCliente();

        $this->view("Home", $dados);
    }

}