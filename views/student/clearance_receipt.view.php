<div class="main-content">
    <div class="container-fluid content-top-gap">
        <div class="card" style="border: none !important">
            <h1 class="text-center mt-3 mb-4"><?= $ctx['student']['institution']['i_name'] ?> Final Year <br> Clearance Form</h1>
            <div class="card-body">
                <div class="d-flex mb-2 justify-content-between">
                    <p>
                        <b>Student Name:</b> <?= $ctx['student']['fullname'] ?>
                    </p>
                    <p>
                        <b>Student ID:</b> <?= $ctx['student']['index_number'] ?>
                    </p>
                    <p>
                        <b>Class:</b> <?= $ctx['student']['class'] ?>
                    </p>
                </div>
                <table class="table table-bordered table-responsive-sm">
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
                        <?php foreach ($ctx['clearance_items'] as $clearance_item): ?>
                            <tr>
                                <td>
                                              <span class="fw-bold">
                                                  <?= $clearance_item['office']['name'] == "Classroom" ? "Class Master" : $clearance_item['office']['name'] ?>
                                              </span>
                                </td>
                                <td>
                                    <?php echo $clearance_item['officer'] != null ? $clearance_item['officer']['fullname'] : $clearance_item['formmaster']['fullname'] ?>
                                </td>
                                <td>
                                    <?php if ($clearance_item['status'] == "cleared"): ?>
                                        <b>Cleared</b>
                                    <?php elseif ($clearance_item['status'] == 'not cleared'): ?>
                                        <b>
                                            Not Cleared
                                        </b>
                                    <?php else: ?>
                                        <b>Pending</b>
                                    <?php endif ?>
                                </td>
                                <td>
                                    <p>
                                        <?= $clearance_item['remarks'] ?? "N/A" ?>
                                    </p>
                                </td>
                                <td>
                                    <?= $clearance_item['created_at'] ?>
                                </td>
                                <td>
                                    <?= $clearance_item['time_created'] ?>
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
                <div class="mt-5 d-flex justify-content-between">
                    <p>
                        Signature: ......................................................
                    </p>
                    <p>
                        Date: ................................................
                    </p>
                </div>
                <div class="mt-5 d-flex justify-content-between">
                    <p>
                        Signature/Stamp: ......................................................
                    </p>
                    <p>
                        Date: ................................................
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    window.print()
</script>