<form method="post" action="edit">
    <input type="text" required name="task" placeholder="task" value=<?php if(isset($_GET['id'])){echo $param['task'];};?>>
    <br>
    <input type="text" required name="description" placeholder="description" value=<?php if(isset($_GET['id'])){echo $param['description'];};?>>
    <br>
    <input type="text" name="dateCreate" placeholder="YYYY-MM-DD" value=<?php if(isset($_GET['id'])){echo $param['dateCreate'];};?>>
    <br>
    <input type="submit">
</form>

<a href="/task/">на гланыную</a>