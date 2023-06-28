<div class="content">
    <div class="container-fluid pt-5">
        <div class="card" style="border: none !important">
            <div class="justify-content-center text-center">
                <h1 class="text-center mb-4 font-weight-bold">
                    CKT UNIVERSITY FOR OF TECHNOLOGY AND APPLIED SCIENCES
                </h1>
                <div class="text-center"> 
                    <img class="" src="../assets/images/ckt-logo.png" alt="" width="150px">
                </div>
                <p>CLEARANCE FORM</p>
            </div>
            
            <!-- STUDENT INFO TABLE -->
            <div class="row mt-5 mx-2">

                <div class="col-10 px-0 receipt">
                    <div class="table-responsive">
                        <table class="table m-0 table-borderless">
                            <tr>
                                <td>Rgistration No.: <?= strtoupper($ctx['student']['index_number']) ?></td>
                                <td>Student Name: <?= $ctx['student']['fullname'] ?></td>
                            </tr>
                            <tr>
                                <td>Gender: <?=ucfirst($ctx['student']['gender'])?> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Department: <?=ucwords($ctx['student']['department'])?></td>
                                <td>Programme: <?=ucwords($ctx['student']['programme'])?></td>
                            </tr>
                            <tr>
                                <td>Signature: ................................................</td>
                                <td>Date: ...........................................................</td>
                            </tr>
                        </table>
                    </div>
                    <!-- <div class="d-flex justify-content-between pn-18">
                        <p>Rgistration No.: <?=strtoupper($ctx['student']['index_number'])?> </p>
                        <p>Student Name:<?=$ctx['student']['fullname']?> </p>
                    </div>
                    <p>Gender: <?=ucfirst($ctx['student']['gender'])?> </p>
                    <div class="d-flex justify-content-between">
                        <p>Department: <?=ucwords($ctx['student']['department'])?></p>
                        <p>Programme: <?=ucwords($ctx['student']['programme'])?></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Signature: ................................................</p>
                        <p>Date: ...........................................................
                        </p>
                    </div> -->
                </div>

                <div class="col-2">
                    <div class="imgage-holder text-center justify-content-center">
                        <!-- // FETCH IMAGE HERE -->
                        Passport Picture
                    </div>
                </div>

            </div><hr>


            <div class="card-body px-0">
                <div>

                    <?php if ($ctx['student']['clearance_started']): ?>
                    <!-- // CONTENT GOES HERE  -->

                        <!-- 
                        ##  The ff are the Default officers 
                        ##  1. Accountant
                        ##  2. Dean
                        ##  3. Computer Lab
                        ##  4. Sports Coach
                        ##  5. Hall master/mistress
                        -->

                        <?php foreach ($ctx[0] as $clearance_item): ?>
                            <?php if($clearance_item['officer_id'] == 10): ?>
                                <!--  ACCOUNTANT  -->
                                <p>CAMPUS ACCOUNTANT</p>
                                <P>
                                    I certify that the bearer of this form has paid fully all monie to the university school
                                </P>
                                <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                                    <p>Signature/stamp: .............................................
                                    <img class="sign" src="../assets/uploads/<?=$clearance_item['signature'] ?>" alt="">
                                    </p>
                                    <p>Date: .............................................
                                    <span class="date"><?=$clearance_item['date']?></span>
                                    </p>
                                </div><br>


                            <?php elseif($clearance_item['officer_id'] == 15): ?>
                                <!-- LIBRARIAN -->
                                <p>CAMPUS LIBRARIAN</p>
                                <P>
                                    I testify that the bearer of this form returned all books, pamphlets
                                    and any other reading materials borrowed from the library or where
                                    penalties were imposed for delay, the bearer has cleared his/her name.
                                </P>
                                <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                                    <p>Signature/stamp:  .............................................
                                    <img class="sign" src="../assets/uploads/<?=$clearance_item['signature'] ?>" alt="">
                                    </p>
                                    <p>Date: .............................................
                                    <span class="date"><?=$clearance_item['date']?></span>
                                    </p>
                                </div><br>


                            <?php elseif($clearance_item['officer_id'] == 14): ?>
                                <!-- COMPUTER LAB -->
                                <p>COMPUTER LABORATORY</p>
                                <P>
                                    I testify that the bearer of this form has fulfilled all his financial
                                    and scholarly obligations to the computer laboratory.
                                </P>
                                <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                                    <p>Signature/stamp:  .............................................
                                    <img class="sign" src="../assets/uploads/<?=$clearance_item['signature'] ?>" alt="">
                                    </p>
                                    <p>Date: .............................................
                                    <span class="date"><?=$clearance_item['date']?></span>
                                    </p>
                                </div><br>


                            <?php elseif($clearance_item['officer_id'] ==13 ): ?>
                                <!-- DEAN -->
                                <p>DEAN IN CHARGE</p>
                                <P>
                                    I certify that the student has discharged all his financial obligations 
                                    to the University school.
                                </P>
                                <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                                    <p>Signature/stamp:  .............................................
                                    <img class="sign" src="../assets/uploads/<?=$clearance_item['signature'] ?>" alt="">
                                    </p>
                                    <p>Date: .............................................
                                    <span class="date"><?=$clearance_item['date']?></span>
                                    </p>
                                </div><br>


                            <?php elseif($clearance_item['officer_id'] == 11): ?>
                                <!-- SPORTS COACH -->
                                <p>CAMPUS SPORTS COARCH</p>
                                <P>
                                    The bearer of this form has submitted all sports equipment in his/her 
                                    possession.
                                </P>
                                <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                                    <p>Signature/stamp:  .............................................
                                    <img class="sign" src="../assets/uploads/<?=$clearance_item['signature'] ?>" alt="">
                                    </p>
                                    <p>Date: .............................................
                                    <span class="date"><?=$clearance_item['date']?></span>
                                    </p>
                                </div><br>



                            <!-- || Non-Default Officers || -->
                            <?php elseif ($clearance_item['officer_id'] == 5): ?>

                                <!-- BIO LAB -->
                                <p>LABORATORY BIO</p>
                                <P>
                                    The bearer of this form has fulfilled all his financial obligations including
                                    replcacing and repair of broken and damaged laboratory equipment.
                                </P>
                                <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                                    <p>Signature/stamp:  .............................................
                                    <img class="sign" src="../assets/uploads/<?=$clearance_item['signature'] ?>" alt="">
                                    </p>
                                    <p>Date: .............................................
                                    <?=$clearance_item['date'];?>
                                    </p>
                                </div><br>

                            <?php elseif ($clearance_item['officer_id'] ==  6): ?>

                                <!-- CHEMISTRY LAB -->
                                <p>LABORATORY CHEM</p>
                                <P>
                                    The bearer of this form has fulfilled all his financial obligations including
                                    replcacing and repair of broken and damaged laboratory equipment.
                                </P>
                                <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                                    <p>Signature/stamp:  .............................................
                                    <img class="sign" src="../assets/uploads/<?=$clearance_item['signature'] ?>" alt="">
                                    </p>
                                <p>Date: .............................................
                                <span class="date"><?=$clearance_item['date']?></span>
                                </p>
                                </div><br>

                            <?php elseif ($clearance_item['officer_id'] ==  7): ?>

                                <!-- PHYSICS LAB -->
                                <p>LABORATORY PHY</p>
                                <P>
                                    The bearer of this form has fulfilled all his financial obligations including
                                    replcacing and repair of broken and damaged laboratory equipment.
                                </P>
                                <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                                    <p>Signature/stamp:  .............................................
                                    <img class="sign" src="../assets/uploads/<?=$clearance_item['signature'] ?>" alt="">
                                    </p>
                                <p>Date: .............................................
                                <span class="date"><?=$clearance_item['date']?></span>
                                </p>
                                </div><br>

                            <?php elseif ($clearance_item['officer_id'] ==  8): ?>

                                <!-- MALE HALL TUTOR -->
                                <p>SENIOR HALL TUTOR 8</p>
                                <P>
                                    The bearer of this form has fulfilled all his financial obligations in
                                    his/her Hall of Residence.
                                </P>
                                <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                                    <p>Signature/stamp:  .............................................
                                    <img class="sign" src="../assets/uploads/<?=$clearance_item['signature'] ?>" alt="">
                                    </p>
                                <p>Date: .............................................
                                <span class="date"><?=$clearance_item['date']?></span>
                                </p>
                                </div><br>

                            <?php elseif ($clearance_item['officer_id'] ==  9): ?>

                                <!-- FEMALE HALL TUTOR -->
                                <p>SENIOR HALL TUTOR 9</p>
                                <P>
                                    The bearer of this form has fulfilled all his financial obligations in
                                    his/her Hall of Residence.
                                </P>
                                <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                                    <p>Signature/stamp:  .............................................
                                    <img class="sign" src="../assets/uploads/<?=$clearance_item['signature'] ?>" alt="">
                                    </p>
                                <p>Date: .............................................
                                <span class="date"><?=$clearance_item['date']?></span>
                                </p>
                                </div><br>

                            <?php endif ?>

                        <?php endforeach ?>

                        
                           
                    
                    <!-- // CONTENT ENDS HERE  -->
                    <?php else: ?>
                            <tr>
                                <h3 class='text-center'>Clearance Not Started</h3>
                            </tr>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    window.print();
</script>