<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados brasileiros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Estados brasileiros</h1>
    </header>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <table>
                <tr>
                    <td>Selecione seu estado</td>
                    <td>
                        <select name="ufs" id="ufs">
                            <?php
                                $estados = [
                                    "AC" => "Acre",
                                    "AL" => "Alagoas",
                                    "AP" => "Amapá",
                                    "AM" => "Amazonas",
                                    "BA" => "Bahia",
                                    "CE" => "Ceará",
                                    "DF" => "Distrito Federal",
                                    "ES" => "Espírito Santo",
                                    "GO" => "Goiás",
                                    "MA" => "Maranhão",
                                    "MT" => "Mato Grosso",
                                    "MS" => "Mato Grosso do Sul",
                                    "MG" => "Minas Gerais",
                                    "PA" => "Pará",
                                    "PB" => "Paraíba",
                                    "PR" => "Paraná",
                                    "PE" => "Pernambuco",
                                    "PI" => "Piauí",
                                    "RJ" => "Rio de Janeiro",
                                    "RN" => "Rio Grande do Norte",
                                    "RS" => "Rio Grande do Sul",
                                    "RO" => "Rondônia",
                                    "RR" => "Roraima",
                                    "SC" => "Santa Catarina",
                                    "SP" => "São Paulo",
                                    "SE" => "Sergipe",
                                    "TO" => "Tocantins"
                                ];

                                $uf = $_POST["ufs"] ?? "";

                                foreach ($estados as $key => $value) {
                                    $selected = ($uf == $value) ? 'selected' : '';
                                    
                                    echo "
                                        <option value='$value' $selected>
                                            $key - $value
                                        </option>
                                    ";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Enviar" id="btn">
        </form>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo "
                    <p>Você mora no estado de: $uf</p>
                ";
            }
        ?>
    </main>
</body>
</html>