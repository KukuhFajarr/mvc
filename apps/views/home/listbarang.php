
<a href="<?php echo BASE_URL.'index.php?r=home/insertbarang'; ?>">tambah barang</a>
<br>
<table class="table">
        <tr>
          <th>id</th>
          <th>nama barang</th>
          <th>quantity</th>
        </tr>
<?php foreach ($data as $item) : ?>
  <tr>
    <td><?php echo $item['id']; ?></td>
    <td><?php echo $item['nama']; ?></td>
    <td><?php echo $item['qty']; ?></td>
    <td> <a href="<?php echo BASE_URL.'index.php?r=home/updatebarang/'.$item['id']; ?>" class="badge">update</a> </td>
  </tr>
<?php endforeach ?>

      </table>
