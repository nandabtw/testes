<?php
// Classe que calcula descontos para diferentes tipos de clientes
class CalcDescontos {

    // Função que calcula o desconto
    public static function calcularDesconto($valor, $categoria) {
        
        // Verifica se o valor é válido
        if ($valor <= 0) {
            return "Valor inválido";
        }
        
        // Calcula desconto conforme a categoria
        if ($categoria == 'regular') {
            // 5% de desconto
            return $valor * 0.95;
        } 
        elseif ($categoria == 'vip') {
            // 10% de desconto
            return $valor * 0.90;
        } 
        elseif ($categoria == 'premium') {
            // 20% de desconto
            return $valor * 0.80;
        } 
        else {
            // Nenhum desconto para categorias desconhecidas
            return $valor;
        }
    }
}
?>