<table>
    <tr>
        <td>id</td>
        <td>task</td>
        <td>description</td>
        <td>dateCreate</td>
    </tr>
    <?php foreach ($allParam as $row) { ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['task']?></td>
            <td><?php echo $row['description']?></td>
            <td><?php echo $row['dateCreate']?></td>
            <td><a href="edit?id=<?php echo $row['id']?>">edit</a></td>
            <td><a href="delete?id=<?php echo $row['id']?>">delete</a></td>

<!--            <td><form method="post" action="/www/html/index.php"><button value=<?php /*echo $row['id']*/?> type="submit">edit</button></form></td>
--><!--            <td><form method="post" action="/www/html/index.php"><button name="delete" value=<?php /*echo $row['id']*/?> type="submit">delete</button></form></td>
-->        </tr>
    <?php } ?>
</table>

<a href="create">create</a>

