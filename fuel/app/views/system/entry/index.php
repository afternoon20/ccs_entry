<?php var_dump($entries);?>
<div class="table-responsive">
  <table class="table shadow-sm table-bordered table-sm">
    <thead>
    <tr>
      <th scope="col">名前(ふりがな)</th>
      <th scope="col">生年月日</th>
      <th scope="col">住所</th>
      <th scope="col">電話番号</th>
      <th scope="col">メールアドレス</th>
      <th scope="col">メルマガ</th>
      <th scope="col">転送</th>
      <th scope="col">登録日</th>
      <th scope="col">操作</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($entries as $entry) ?>
    <tr>
      <th scope="row"><?php echo $entry['entry_name']?>(<?php echo $entry['entry_ruby']?>)</th>
      <td><?php echo $entry['entry_birthday']?></td>
      <td><?php echo $entry['entry_prefecture']?><?php echo $entry['entry_address']?></td>
      <td><?php echo $entry['entry_telephone_h']?>-<?php echo $entry['entry_telephone_m']?>-<?php echo $entry['entry_telephone_l']?></td>
      <td><?php echo $entry['entry_email']?></td>
      <td><?php echo $entry['entry_magazine']?></td>
      <td><?php echo $entry['entry_transfer']?></td>
      <td><?php echo $entry['entry_register_time']?></td>
      <td>
        <?php echo Html::anchor('#', '編集',); ?>
        <?php echo Html::anchor('#', '削除',); ?>
      </td>
    </tr>
  </tbody>
  </table>
</div>
