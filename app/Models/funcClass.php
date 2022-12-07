<?php

class Funcionario {
    private $nome;
    private $salario;
    private $departamento;
    
    public function getNome() {
        return $this->nome;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function getDepto() {
        return $this->departamento;
    }

    public function setNome ($nome) {
        $this->nome = $nome;
    }

    public function setSalario ($salario) {
        if($salario > 600 ) $this->salario = $salario;
        else echo 'Salário inserido inválido... Tente novamente! <br><br>';
    }

    public function setDepto ($departamento) {
        $this->departamento = $departamento;
    }

    public function imprimeDadosFunc() {
        echo 'Nome: ' . $this->getNome() . '<br>';
        echo 'Salário: ' . $this->getSalario() . '<br>';
        echo 'Departamento: ' . $this->getDepto() . '<br>'. '<br>'. '<br>';
    }

    public function salarioDepto() {

        $salario = $_POST['salario'];
        $departamento = $_POST['departamento'];
        $nome = $_POST['nome'];
        if($salario > 600) {
            switch ($this->getDepto()) {
                case "T.I.":
                    $atualS = $salario + $salario * 15 / 100;
                    echo $nome . ' você que é do departamento ' . $departamento . ' teve um aumento de salário de 15% e seu salário agora é: ' . $atualS;
                    break;
                case "ADM":
                    $atualS = $salario + $salario * 5 / 100;
                    echo $nome . ' você que é do departamento ' . $departamento . ' teve um aumento de salário de 5% e seu salário agora é: ' . $atualS;
                    break;
                case "R.H.":
                    $atualS = $salario + $salario * 10 / 100;
                    echo $nome . ' você que é do departamento ' . $departamento . ' teve um aumento de salário de 10% e seu salário agora é: ' . $atualS;
                    break;
            }
        } else {
            echo 'Salário inválido!! Tente novamente!!';
        }
    }
}