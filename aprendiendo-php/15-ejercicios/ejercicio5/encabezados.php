<tr>
    <?php foreach ($categorias as $categoria): #Es buena práctica poner semicolon (continua) y cerrar el loop al final?>
    <th><?=$categoria?></th>
    <?php endforeach; #Se cierra el loop, el end... existe en todos los loops?>
</tr>