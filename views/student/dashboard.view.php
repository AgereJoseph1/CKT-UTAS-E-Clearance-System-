  <!-- BEGIN: Header-->
  <nav class="header-navbar navbar navbar-expand-lg align-items-center fixed-top navbar-light navbar-shadow container-xxl"
      style="position: relative; left: 0px; overflow-x: hidden;">
      <div class="navbar-container d-flex content">
          <di class="bookmark-wrapper d-flex align-items-center">
              <h4 class="mx-3"><b>ID: <?= $ctx['student']['index_number'] ?></b></h4>
      </div>
      <ul class="nav navbar-nav align-items-center ms-auto">
          <form action="../logout.php" method="POST">
              <button type="submit" name='userLogout' class='btn text-danger'><i class="fa fa-power-off"></i>
                  Logout</button>
          </form>
      </ul>

      </div>
  </nav>

  <!-- BEGIN: Content-->
  <div class="app-content content mx-3">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
          <div class="content-header row">
              <div class="content-header-left col-md-9 col-12 mb-2">
                  <div class="row breadcrumbs-top">
                      <div class="col-12">
                          <div class="col-12 offset-md-4 col-md-4">
                              <?php include_once VIEW_ROOT."includes/alerts.inc.php" ?>
                          </div>
                          <h2 class="content-header-title float-start mb-0">Clearance Form</h2>
                          <div class="breadcrumb-wrapper" style="z-index: 999;">
                              <ol class="breadcrumb d-flex">
                                  <li class="breadcrumb-item">
                                      <?php if(!$ctx['student']['clearance_started']): ?>
                                      <form method="POST">
                                          <button type="submit" name="reqClearance"
                                              onclick="return confirm('Proceed When ready ')"
                                              class="btn btn-primary waves-effect waves-float waves-light">Request
                                              Clearance</button>
                                      </form>
                                      <?php elseif ($ctx['totalClearedCount'] == $ctx['totalClearanceCount']): ?>
                                        <button class='btn btn-success'>All Cleared</button>
                                      <?php else: ?>
                                      <button class='btn btn-secondary'>Ongoing</button>
                                      <?php endif ?>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="content-header-right text-md-end col-md-3 col-12 d-md-block">
                  <div class="mb-1 breadcrumb-right">
                      <?php if ($ctx['student']['clearance_completed']) :?>
                      Status: <span class="badge bg-success">Completed</span>
                      <?php elseif ($ctx['student']['clearance_started']): ?>
                        Status: <span class="badge bg-info">Processing</span>
                      <?php else: ?>
                      Status: <span class="badge bg-secondary">Pending</span>
                      <?php endif ?>

                  </div>
              </div>
          </div>
          <div class="content-body">
              <div class="row">
                  <div class="col-12 mt-md-4">

                      <!-- profile -->
                      <div class="card">
                          <div class="card-header border-bottom">
                              <h4 class="card-title">Clearance Details</h4>
                          </div>

                          <div class="table-responsive">
                              <table class="table">
                                  <thead>
                                      <tr>
                                          <th>Office</th>
                                          <th>Officer</th>
                                          <th>Status</th>
                                          <th>Remarks</th>
                                          <th>Date</th>
                                          <th>Time</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php if ($ctx['student']['clearance_started']): ?>
                                      <?php foreach($ctx['clearance_items'] as $clearance_item): ?>
                                      <tr>
                                          <td>
                                              <span class="fw-bold">
                                                  <?= $clearance_item['office']['name'] == "Classroom" ? "Class Master" : $clearance_item['office']['name'] ?>
                                              </span>
                                          </td>
                                          <td>
                                              <?php echo $clearance_item['officer'] != null ? $clearance_item['officer']['fullname'] : $clearance_item['formmaster']['fullname']  ?>
                                          </td>
                                          <td>
                                              <?php if ($clearance_item['status'] == "cleared"): ?>
                                              <span class="badge rounded-pill badge-light-success me-1">Cleared</span>
                                              <?php elseif ($clearance_item['status']== 'not cleared'): ?>
                                              <span class="badge rounded-pill badge-light-danger me-1">
                                                  Not Cleared
                                              </span>
                                              <?php else: ?>
                                              <span class="badge rounded-pill badge-light-secondary me-1">Pending</span>
                                              <?php endif ?>
                                          </td>
                                          <td>
                                              <p>
                                                  <?= $clearance_item['remarks'] ?? "N/A" ?>
                                              </p>
                                          </td>
                                          <td>
                                              <?= $clearance_item['created_at']  ?>
                                          </td>
                                          <td>
                                              <?= $clearance_item['time_created']  ?>
                                          </td>
                                      </tr>
                                      <?php endforeach ?>
                                      <?php else: ?>
                                      <tr>
                                          <td colspan='5' class='text-center'>Clearance Not Started</td>
                                      </tr>
                                      <?php endif ?>
                                  </tbody>
                              </table>
                          </div>
                      </div>

                      <?php if ($ctx['student']['clearance_started']): ?>
                      <div class="col-12 mt-5">
                          <h2 class="float-start mb-0">
                              <?= $ctx['totalClearedCount'] ?>/<?= $ctx['totalClearanceCount'] ?> Cleared
                          </h2>
                      </div>
                      <?php endif ?>
                      <?php if ($ctx['student']['clearance_completed']): ?>
                      <div class="mb-1 breadcrumb-right float-end">
                          <a href="clearance_receipt.php"
                                  class="btn btn-primary waves-effect waves-float waves-light">
                              Print
                          </a>
                      </div>
                      <?php endif ?>

                  </div>
              </div>

          </div>
      </div>
  </div>