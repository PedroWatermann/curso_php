<?php

$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

class Funcionario
{
    protected string $nome;
    protected string $cpf;
    protected int $numero_dependentes;
    protected float $fgts;
    protected float $desconto_inss;
    // protected float $salario_descontado_inss;
    protected float $desconto_imposto_renda;
    protected float $salario_familia;
    protected float $desconto_vale_transporte;
    protected float $salario_bruto;
    protected float $salario_liquido;

    function calcular_fgts($salario_bruto): void
    {
        if (isset($_POST["submit"])) {
            $fgts = $salario_bruto * 0.08;
            $this->fgts = numfmt_format_currency($GLOBALS["padrao"], $fgts, "BRL");
        } else {
            $fgts = 0.00;
            $this->fgts = numfmt_format_currency($GLOBALS["padrao"], $fgts, "BRL");
        }
    }

    function calcular_inss($salario_bruto): void
    {
        if ($salario_bruto <= 1412.00) {
            $inss = $salario_bruto * 0.075;
            // $desconto = $salario_bruto - $inss;
            // $this->salario_descontado_inss = $desconto;
            $this->desconto_inss = $inss;
        } else if ($salario_bruto <= 2666.68) {
            $inss = ($salario_bruto - 1412.00) * 0.09;
            // $desconto = $salario_bruto - $inss;
            // $this->salario_descontado_inss = $desconto;
            $this->desconto_inss = $inss;
        } else if ($salario_bruto <= 4000.03) {
            $inss = ($salario_bruto - 2666.68) * 0.12;
            // $desconto = $salario_bruto - $inss;
            // $this->salario_descontado_inss = $desconto;
            $this->desconto_inss = $inss;
        } else if ($salario_bruto <= 7786.02) {
            $inss = ($salario_bruto - 4000.03) * 0.14;
            // $desconto = $salario_bruto - $inss;
            // $this->salario_descontado_inss = $desconto;
            $this->desconto_inss = $inss;
        } else {
            $inss = 0.00;
            // $desconto = $salario_bruto - $inss;
            // $this->salario_descontado_inss = $desconto;
            $this->desconto_inss = $inss;
        }
    }

    function calcular_imposto_renda(/*$salario_descontado_inss*/$desconto_inss): void
    {
        $base = $this->salario_bruto - $this->desconto_inss - $this->numero_dependentes * 189.59;
        if ($base <= 2112.00) {
            $valor = 0.00;
        } else if ($base <= 2826.65) {
            $valor = $base * 0.075 - 158.40;
        } else if ($base <= 3751.05) {
            $valor = $base * 0.15 - 370.40;
        } else if ($base <= 4664.68) {
            $valor = $base * 0.225 - 651.73;
        } else {
            $valor = $base * 0.275 - 884.96;
        }
        $this->desconto_imposto_renda = $valor;
    }

    function calcular_salario_familia($salario_bruto, $numero_dependentes): void
    {
        if ($salario_bruto <= 1819.26) {
            $valor = 56.47 * $numero_dependentes;
            $this->salario_familia = $valor;
        } else {
            $valor = 0.00;
            $this->salario_familia = $valor;
        }
    }

    function calcular_vale_transporte($salario_bruto): void
    {
        $passagem = $_POST["passagem"] ?? 0.00;
        $dias_trab = $_POST["dias_trab"] ?? 0;
        $valor = $passagem * $dias_trab;
        $porc = $valor * 100 / $salario_bruto;
        if ($porc > 6) {
            $this->desconto_vale_transporte = $salario_bruto * 0.06;
        } else {
            $this->desconto_vale_transporte = $valor;
        }
    }

    function calcular_salario_liquido(): void
    {
        $total = $this->salario_bruto - $this->desconto_vale_transporte - $this->desconto_imposto_renda - $this->desconto_inss + $this->salario_familia;
        $this->salario_liquido = $total;
    }
}

echo "<pre>";
$func = new Funcionario();
var_dump($func);
echo "</pre>";
