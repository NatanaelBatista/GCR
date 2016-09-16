<?php

  // Lista os usuários
  $lista = $model->get_user_list();

?>

<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">

  <thead>
    <tr>
      <th>ID</th>
      <th class="mdl-data-table__cell--non-numeric">Nome</th>
      <th class="mdl-data-table__cell--non-numeric">Permissão</th>
      <th class="mdl-data-table__cell--non-numeric"></th>
    </tr>
  </thead>

  <?php foreach ($lista as $fetch_userdata): ?>

  <tbody>
    <tr>
      <td><?php echo $fetch_userdata['user_id'] ?></td>
      <td class="mdl-data-table__cell--non-numeric"><a href="<?php echo HOME_URI; ?>/usuarios/visualizar/<?php echo $fetch_userdata['user_id'] ?>"><?php echo $fetch_userdata['user'] ?></td>
      <td>Administrador</td>
      <td>
        <a class="btn btn-warning btn-xs" href="<?php echo HOME_URI; ?>/usuarios/editar/<?php echo $fetch_userdata['user_id'] ?>">Editar</a>
      </td>
    </tr>
  </tbody>

<?php endforeach; ?>

</table>