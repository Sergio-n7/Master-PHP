<h1 style="color:darkslategrey">Listado de notas</h1>

<?php while ($nota = $notas->fetch_object()): #Significa que saque un array de objectos ?>
<?=$nota->titulo?> - <?=$nota->fecha?><br>
<?php endwhile;?>