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
            <td><a href="edit.php?id=<?php echo $row['id']?>">edit</a></td>
            <td><a href="/delete.php?id=<?php echo $row['id']?>">delete</a></td>
        </tr>
    <?php } ?>
</table>

<a href="/create.php">create</a>

