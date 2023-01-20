<h1 class="page-header">Matriculas</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Alumno_curso&a=Crud">Nueva Matricula</a>
</div>

<ol class="breadcrumb">
    <li><a href="?c=login&a=Index">Menu de Acceso</a></li>
    <li class="active"><?php echo $alm->id != null ? $alm->Nombre : 'Matrículas'; ?></li>
</ol>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">id de Curso</th>
            <th style="width:180px;">id de Alumno</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Curso_id; ?></td>
            <td><?php echo $r->Alumno_id; ?></td>
            <td>
                <a href="?c=Alumno_curso&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Alumno_curso&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
