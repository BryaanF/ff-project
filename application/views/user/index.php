        <!-- Begin Page Content -->
        <div class="container-fluid">

            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class="row">
              <div class="col-lg-8">
                <?= $this->session->flashdata('message'); ?>
              </div>
            </div>

          <!-- Page Heading -->
          <div class="card mb-3 col-lg-8">
            <div class="row no-gutters">
              <div class="col-md-4 mt-2 mb-2">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img rounded-circle" style="width:210px;height:230px;" alt="My Profile!">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $user['name']; ?></h5>
                  <p class="card-text"><?= $user['email']; ?></p>
                  <p class="card-text"><small class="text-muted">User Since <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- /.container-fluid -->
