<link rel="stylesheet" href="css/style_alumno.css">
<body>
<div class="content">
<div class="container">
<table class="highlight centered responsive-table" width="700" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
<thead class ="pink lighten-4 black-text">
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Sexo</th>
<th></th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
<?php
foreach ($sqlAlumnos as $alumnoview) { ?>
<tr>
<td><?php echo $alumnoview->id; ?></td>
<td><?php echo $alumnoview->nombre; ?></td>
<td><?php echo $alumnoview->sexo; ?></td>
<td>
<?php if ($alumnoview->sexo == 'M') { ?>
<i class = "material-icons prefix blue-text">male</i>
<?php } else { ?>
<i class = "material-icons prefix red-text">female</i>
<?php } ?>
</td>
<td>
<button class="btn waves-effect waves-light lime darken-2" type="submit" name="action">
<a href="?menu=editalumno&idalumno=<?php echo $alumnoview->id; ?>">
<i class="material-icons right white-text">mode_edit</i></a>
</button>
<button class="btn waves-effect waves-light deep-purple accent-1" type="submit" name="action">
<a href="?menu=deletealumno&idalumno=<?php echo $alumnoview->id; ?>">
<i class="material-icons right white-text">delete_forever</i></a>
</button>

</td>
</tr>
<?php } ?>
</tbody>

</table>
<table class="nuevo">
<button class=" btn-floating btn-large waves-light blue darken-3" type="submit" name="action">
<a href="?menu=insertalumno">
<i class="material-icons white-text">add</i></a>
</butto>
</table>
</div>
</div>
</body>