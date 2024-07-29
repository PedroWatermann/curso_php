<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Testes de Tipos Primitivoos</h1>
    <?php 
        echo "<h2>Tipos primitivos: ESCALAR</h2>";

        // $num = 300;
        // $num = 0x1A;      //0x - Hexadecimal
        // $num = 0b1011;    //0b - Binário
        // $num = 010;       //0  - Octal
        // echo "O valor da variável é $num";

        // $v = 300;
        // $v = 45.2;
        // $v = true;
        // $v = "Pedro";
        // var_dump($v);

        // $num = 3e2;          //3e2 = 3*10^2
        // $num = (int) 3e2;    //Coerção
        // $num = (float) "950";
        // echo "O valor é $num";
        // var_dump($num);

        $casado = false;
        var_dump($casado);
        print "<br>O valor para casado é $casado";

        echo "<h2>Tipos primitivos: COMPOSTO</h2>";

        // $vet = [6, 2, 9, 3, 5];
        // $vet = [6, 2.5, "Pedro", 3, false];
        // echo "O vetor é $vet";
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);

        echo "<h2>Tipos primitivos: ESPECIAIS</h2>";
    ?>
</body>
</html>