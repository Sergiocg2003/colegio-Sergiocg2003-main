<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->Nombre : 'Log In'; ?>
</h1>

<form id="frm-Usuario" action="?c=login&a=Verificar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Nombre de usuario</label>
        <input type="text" name="Nombre" value="<?php echo $alm->Nombre; ?>" class="form-control" placeholder="Usuario" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="Contraseña" value="<?php echo $alm->Contraseña; ?>" class="form-control" placeholder="Contraseña" data-validacion-tipo="requerido|min:8" />
    </div>

    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Iniciar Sesion</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-Usuario").submit(function(){
            return $(this).validate();
        });
    })
</script>