<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->Nombre : 'Menu de acceso'; ?>
</h1>


<div class="well well-sm text-center">
    <a class="btn btn-primary" href="?c=Usuario&a=Index">Usuarios</a>
</div>

<div class="well well-sm text-center">
    <a class="btn btn-primary" href="?c=Alumno&a=Index">Alumnos</a>
</div>

<div class="well well-sm text-center">
    <a class="btn btn-primary" href="?c=Alumno_curso&a=Index">Matriculas</a>
</div>

<div class="well well-sm text-center">
    <a class="btn btn-primary" href="?c=Curso&a=Index">Cursos</a>
</div>


<div class="well well-sm text-center">
    <a class="btn btn-danger" href="?c=Login&a=LogOut">Log Out</a>
</div>