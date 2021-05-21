<div class="text-right">
  <?php echo Html::anchor('/system/admin/admin/create', '新規追加', array('class' => 'btn bg-success text-white'),); ?>
</div>
<div class="table-responsive mt-3">
  <table class="table shadow-sm table-bordered table-sm">
     <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ユーザー名</th>
      <th scope="col">有効/無効</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $user) :?>
    <tr>
      <td class="align-middle" scope="row"><?php echo $user['id']?></td>
      <td class="align-middle"><?php echo $user['username']?></td>
      <td class="align-middle"><?php echo STATUS[$user['login_status']]?></td>
      <td class="align-middle text-center"><?php echo Html::anchor('system/admin/admin/edit?admin_id='.$user['id'], '編集',array('class' => 'btn btn-primary btn-sm text-center'));?></td>
      <td class="align-middle text-center"><?php echo Html::anchor('system/admin/admin/delete?admin_id='.$user['id'], '削除',array('class' => 'btn btn-danger btn-sm text-center'));?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
  </table>
</div>
