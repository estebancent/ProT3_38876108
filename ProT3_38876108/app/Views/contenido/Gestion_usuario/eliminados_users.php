<section>
<h2 class="text-center mt-3">Tabla de Usuarios dado de baja</h2>


    <?php if (!empty($search)) : ?>
        <a href="<?= site_url('/baja_usuario') ?>" class="btn btn-outline-secondary">Volver a Eliminados</a>
    <?php endif; ?>
    <a href="<?= site_url('/usuarios') ?>" class="btn btn-outline-secondary">Volver a Usuarios </a>
</section>



<div class="container mt-5">
    <div class="table-responsive">
        <table class="table  producto-table">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Perfil ID</th>
            <th>Baja</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) : ?>
        <?php if ($user['estado'] == 0) : ?>
        <tr>
            <td><?= $user['id_usuario'] ?></td>
            <td><?= $user['nombre'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['id_perfil'] ?></td>
            <td><?= $user['estado'] ?></td>
            <td>
            <form action="<?= base_url('user/change_baja/' . $user['id_usuario']) ?>" method="post" style="display: inline;">
                        <button type="submit" class="btn btn-sm btn-success">Cambiar Baja</button>
                    </form>
            </td>
        </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</tbody>
</table>
<div class="pagination">
    <?= $paginador->links(); ?>
</div>
</div>
 </div>

</section>