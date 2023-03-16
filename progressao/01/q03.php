<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border='1'>

        <thead>
            <tr>
                <td> Data Vencimento </td>
                <td> Núemro da Parcela </td>
                <td> Valor Parcela </td>
            </tr>
        </thead>

        <tbody>
            <?php
            $value = 1200;
            $installments = 12;
            $installmentsValue = $value / $installments;
            $firstInstallmentMounth = date("m");

            for ($i = 1; $i <= $installments; $i++) {
                $firstInstallmentMounth != 12
                    ? $firstInstallmentMounth++
                    : $firstInstallmentMounth = 1;
                echo "<tr>";
                echo "<td> $firstInstallmentMounth </td>";
                echo "<td> $i </td>";
                echo "<td> $installmentsValue </td>";
                echo "</tr>";
            }
            ?>
        </tbody>

    </table>
</body>

</html>