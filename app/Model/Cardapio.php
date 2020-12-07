<?php

    namespace App\Model;

    class Cardapio {
        private $produtos;

        public function __construct($produtos=[]) {
            $this->produtos = $produtos;
        }

        public function getProdutos() {
            return $this->produtos;
        }

        public function salvarProduto(Produto $produto) {
           $this->produtos[] = $produto;
        }
    }