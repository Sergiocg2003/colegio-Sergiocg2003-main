<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->Nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Alumno_curso">Matriculas</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-Alumno_curso" action="?c=Alumno_curso&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Id del Curso</label>
        <input type="text" name="Curso_id" value="<?php echo $alm->Curso_id; ?>" class="form-control" placeholder="Ingrese la id del curso" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Id del Alumno</label>
        <input type="text" name="Alumno_id" value="<?php echo $alm->Alumno_id; ?>" class="form-control" placeholder="Ingrese la id del alumno" data-validacion-tipo="requerido" />
    </div>

    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-Alumno_curso").submit(function(){
            return $(this).validate();
        });
    })
</script>