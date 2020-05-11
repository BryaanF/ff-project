
<div class="row-mt-3">
  <h3>Data Pelanggan</h3>
  <div class="col-md-6">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nojar</th>
          <th scope="col">mrc</th>
          <th scope="col">Bandwidth</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?>
        <?php foreach ( $dapel as $dpl) : ?>
        <tr>
          <th scope="row"><?= $no;  ?></th>
          <td><?= $dpl['nojar']; ?></td>
          <td><?= $dpl['mrc']; ?></td>
          <td><?= $dpl['bandwidth'];  ?></td>
        </tr>
        <?php $no++; ?>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
