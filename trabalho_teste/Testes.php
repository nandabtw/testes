<?php
// Testes para a classe de desconto

// Inclui o arquivo com a classe que vamos testar
require_once 'CalcDescontos.php';

// Classe de teste
class CalcDescontosTest {

    // Função para testar valores inválidos
    public function testValorInvalido() {
        $resultado = CalcDescontos::calcularDesconto(-100, 'regular');
        if ($resultado == "Valor inválido") {
            echo "testValorInvalido: OK\n";
        } else {
            echo "testValorInvalido: FALHOU\n";
        }
    }

    // Função para testar categoria premium
    public function testPremium() {
        $resultado = DescontoCalculator::calcularDesconto(100, 'premium');
        if ($resultado == 80) {
            echo "testPremium: OK\n";
        } else {
            echo "testPremium: FALHOU\n";
        }
    }

    // Função para testar categoria vip
    public function testVip() {
        $resultado = CalcDescontos::calcularDesconto(100, 'vip');
        if ($resultado == 90) {
            echo "testVip: OK\n";
        } else {
            echo "testVip: FALHOU\n";
        }
    }

    // Função para testar categoria regular
    public function testRegular() {
        $resultado = CalcDescontos::calcularDesconto(100, 'regular');
        if ($resultado == 95) {
            echo "testRegular: OK\n";
        } else {
            echo "testRegular: FALHOU\n";
        }
    }

    // Função para testar categoria desconhecida
    public function testCategoriaDesconhecida() {
        $resultado = CalcDescontos::calcularDesconto(100, 'outra');
        if ($resultado == 100) {
            echo "testCategoriaDesconhecida: OK\n";
        } else {
            echo "testCategoriaDesconhecida: FALHOU\n";
        }
    }
}

// Executa os testes
$teste = new CalcDescontos();
$teste->testValorInvalido();
$teste->testPremium();
$teste->testVip();
$teste->testRegular();
$teste->testCategoriaDesconhecida();
?>