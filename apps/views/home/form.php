<form method="post">
  <div class="form-group">
<?php if(isset($data['id'])) :?>
    <input type="hidden" name="id" value="<?php echo isset($data['id'])? $data['id']:""; ?>">
<?php endif ?>
    <label for="inputNama">nama barang</label>
    <input name="nama" type="text" class="form-control" id="inputNama" aria-describedby="namaHelp" placeholder="nama" value="<?php echo isset($data['nama'])? $data['nama']:""; ?>">
    <small id="namaHelp" class="form-text text-muted">isi nama barang</small>

    <label for="inputJumlah">jumlah barang</label>
    <input name="qty" type="text" class="form-control" id="inputJumlah" aria-describedby="jumlahHelp" placeholder="jumlah" value="<?php echo isset($data['qty'])? $data['qty']:""; ?>">
    <small id="jumlahHelp" class="form-text text-muted">isi jumlah barang</small>
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
