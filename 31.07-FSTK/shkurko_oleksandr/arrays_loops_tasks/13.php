<p>Вывести таблицу умножения</p>
<?php for($a = 1; $a <=10; $a++) : ?>
    <table>
        <?php for($b = 1; $b <=10; $b++) : ?>
            <tr>
                <td><?php echo $a; ?></td>
                <td>*</td>
                <td><?php echo $b; ?></td>
                <td>=</td>
                <td><?php echo $a * $b; ?></td>
            </tr>
        <?php endfor; ?>
    </table>
<?php endfor; ?>