<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypermarket Product Pricing Calculator</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Hypermarket Product Pricing Calculator</h1>
    <form method="post">
        <table>
            <tr>
                <th>Product</th>
                <th>Buying Price (Ksh)</th>
            </tr>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
            <tr>
                <td>Product <?php echo $i; ?></td>
                <td><input type="number" step="0.01" name="price<?php echo $i; ?>" required></td>
            </tr>
            <?php } ?>
            <tr>
                <td>VAT (%)</td>
                <td><input type="number" step="0.01" name="vat" value="16" required></td>
            </tr>
            <tr>
                <td>General Expenses (%)</td>
                <td><input type="number" step="0.01" name="expenses" value="10" required></td>
            </tr>
            <tr>
                <td>Profit Margin (%)</td>
                <td><input type="number" step="0.01" name="profit" value="20" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Calculate</button></td>
            </tr>
        </table>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $vat = $_POST['vat'] / 100;
            $expenses = $_POST['expenses'] / 100;
            $profit = $_POST['profit'] / 100;

            echo "<h2>Product Pricing Details</h2>";
            echo "<table>";
            echo "<tr><th>Product</th><th>VAT (Ksh)</th><th>General Expense (Ksh)</th><th>Profit (Ksh)</th><th>Selling Price (Ksh)</th></tr>";

            for ($i = 1; $i <= 10; $i++) {
                $price = $_POST["price$i"];
                $vat_amount = $price * $vat;
                $expense_amount = $price * $expenses;
                $profit_amount = $price * $profit;
                $selling_price = $price + $vat_amount + $expense_amount + $profit_amount;

                echo "<tr>";
                echo "<td>Product $i</td>";
                echo "<td>" . number_format($vat_amount, 2) . "</td>";
                echo "<td>" . number_format($expense_amount, 2) . "</td>";
                echo "<td>" . number_format($profit_amount, 2) . "</td>";
                echo "<td>" . number_format($selling_price, 2) . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
    ?>
</body>
</html>