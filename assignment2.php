<?php
    $hbg = 4.95;
    $cmilk = 1.95;
    $cocacola = 85;
    $cola = 85 / 100;
    $hbgs = $hbg * 2;
    $total = $hbgs + $cmilk + $cola;
    $stax = ($total * 7.5) / 100;
    $pretax = ($total * 16) / 100;
    $total = $hbgs + $cmilk + $cola + $stax + $pretax;
    $total_d = $total % 100;
    $totals = $total * 100;
    $total_c = $totals % 100;
    echo "<table border='1' cellspacing='0' cellpadding='20'>";
    echo "<thead>
        <th>No</th>
        <th>Name</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Amount</th>";
    echo "<tbody>
        <tr>
            <th>1</th>
            <th>Hamburgers</th>
            <th>2</th>
            <th>$ $hbg</th>
            <th>$ $hbgs</th>
        </tr>
        <tr>
            <th>2</th>
            <th>Chocolate Milkshake</th>
            <th>1</th>
            <th>$ $cmilk</th>
            <th>$ $cmilk</th>
        </tr>
        <tr>
            <th>3</th>
            <th>Cola</th>
            <th>1</th>
            <th>$cocacola cents</th>
            <th>$cocacola cents</th>
        </tr>
    </tbody>";
    echo "<tfooter>
        <tr>
            <th colspan='4'>Tax rate</th>
            <th>$ $stax</th>
        </tr>
        <tr>
            <th colspan='4'>Pre-tax tip</th>
            <th>$ $pretax</th>
        </tr>
        <tr>
            <th colspan='4'>Subtotal</th>
            <th>$total_d dollars, $total_c cents</th>
        </tr>
        </tfooter>";
    echo "</table>";
?>