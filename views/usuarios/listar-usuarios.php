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
      <td class="mdl-data-table__cell--non-numeric"><a href=""><?php echo $fetch_userdata['user_name'] ?></td>
      <td>Administrador</td>
      <td>
        <button type="button" class="btn btn-warning btn-xs">Editar</button>
      </td>
    </tr>
  </tbody>

<?php endforeach; ?>

</table>