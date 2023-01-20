<h1 class="page-header">Cursos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Curso&a=Crud">Nuevo curso</a>
</div>

<ol class="breadcrumb">
    <li><a href="?c=login&a=Index">Menu de Acceso</a></li>
    <li class="active"><?php echo $alm->id != null ? $alm->Nombre : 'Cursos'; ?></li>
</ol>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Nombre</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Nombre; ?></td>
            <td>
                <a href="?c=Curso&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Curso&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>