<?php
// O número escolhido (pode vir de um formulário via $ POST ou ser fixo)
$numero = 9;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabuada do <?php echo $numero; ?> </title>
        <style>
            table { border-colleapse: collapse; width: 200px;
                font-family: sans-serif;}
            td { border: 1px solid #333; padding: 8px;text-aling: center; }
            tr:nth-child(even) { background-color: #f2f2f2; }
        </style>
    </head>

    <body>
        <h2>Tabuada do número <?php echo $numero; ?></h2>
        <table>
            <?php
            //laço for para gerar 10 linhas (de 1 a 10)
                for ($i = 1; $i <= 10; $i++)
                {
                    $resultado = $numero * $i;
                    echo  "<tr>";
                    echo "<td>", $numero, "x", $i, "</td>";
                    echo "<td><strong>$resultado </ strong></td>";
                    echo "</tr>";
                }
            ?>

        </table>
    </body>
</html>