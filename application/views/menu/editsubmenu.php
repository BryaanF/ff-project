<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
<!-- /.container-fluid -->

  <div class="row">
    <div class="col-lg-8">
      <form class="" action="<?= base_url('menu/update'); ?>" method="post">
      <div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label">Sub Menu Title</label>
    <div class="col-sm-9">
      <input type="text" class="form-control " id="subMenuTitle" name="subMenuTitle" value="<?= $edit->title; ?>">
    </div>
    <label for="email" class="col-sm-3 mt-3 col-form-label">Pilih Menu</label>
      <select class="form-control col-sm-9 mt-3" name="menu_id" id="menu_id">
        <?php foreach ($menu as $m) : ?>
          <option value="<?= $m['id'];  ?>"><?= $m['menu']; ?></option>
        <?php endforeach; ?>
      </select>
      <label for="email" class="col-sm-3 mt-3 col-form-label">Sub Menu URL</label>
      <div class="col-sm-9 mt-3">
        <input type="text" class="form-control" id="name" name="name" value="<?= $edit->url; ?>">
      </div>
      <label for="email" class="col-sm-3 mt-3 col-form-label">Sub Menu Icon</label>
      <div class="col-sm-9 mt-3">
        <input type="text" class="form-control" id="name" name="name" value="<?= $edit->icon; ?>">
      </div>
    </div>

    <div class="form-group row justify-content-end">
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary col-lg-12">Edit</button>
      </div>
    </div>
      </form>
    </div>

  </div>

</div>

</div>
<!-- End of Main Content -->
