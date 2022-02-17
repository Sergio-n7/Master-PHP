<h1 style="color:darkslategrey">Listado de usuarios</h1>

<?php while ($usuario = $todos_los_usuarios->fetch_object()): #Significa que saque un array de objectos ?>
<?=$usuario->nombre?> - <?=$usuario->email?><br>
<?php endwhile;?>