<div class="content">
    <div class="container-fluid content-top-gap">
        <div class="card" style="border: none !important">
            <div class="justify-content-center text-center">
                <h2 class="text-center mb-4">
                    CKT UNIVERSITY FOR OF TECHNOLOGY AND APPLIED SCIENCES
                </h2>
                <div class="text-center"> 
                    <img class="" src="../assets/images/ckt-logo.png" alt="" width="150px">
                </div>
                <p>CLEARANCE FORM</p>
            </div>
            
            <!-- STUDENT INFO TABLE -->
            <div class="row mt-5 mx-2">

                <div class="col-10 px-0">
                    <div class="d-flex justify-content-between pn-18">
                        <p>Rgistration No.:<?=$ctx['student']['index_number']?> </p>
                        <p>Student Name:<?=$ctx['student']['fullname']?> </p>
                    </div>
                    <p>Gender:<?=$ctx['student']['gender']?> </p>
                    <div class="d-flex justify-content-between">
                        <p>Department: <?=$ctx['student']['department']?></p>
                        <p>Programme: <?=$ctx['student']['programme']?></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Signature: </p>
                        <p>Date: .............................................................................
                        </p>
                    </div>
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

                        <!--  ACCOUNTANT  -->
                        <p>CAMPUS ACCOUNTANT</p>
                        <P>
                            I certify that the bearer of this form has paid fully all monie to the university school
                        </P>
                        <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                            <p>Signature/stamp: .............................................
                            <img class="sign" src="../assets/uploads/accountant.png" alt="">
                            </p>
                            <p>Date: .............................................</p>
                        </div><br>

                        
                        <!-- LIBRARIAN -->
                        <p>CAMPUS LIBRARIAN</p>
                        <P>
                            I testify that the bearer of this form returned all books, pamphlets
                            and any other reading materials borrowed from the library or where
                            penalties were imposed for delay, the bearer has cleared his/her name.
                        </P>
                        <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                            <p>Signature/stamp:  .............................................
                            <img class="sign" src="../assets/uploads/6494540775caa.png" alt="">
                            </p>
                            <p>Date: .............................................</p>
                        </div><br>


                        <!-- COMPUTER LAB -->
                        <p>COMPUTER LABORATORY</p>
                        <P>
                            I testify that the bearer of this form has fulfilled all his financial
                            and scholarly obligations to the computer laboratory.
                        </P>
                        <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                            <p>Signature/stamp:  .............................................
                            <img class="sign" src="../assets/uploads/comp-lab.png" alt="">
                            </p>
                            <p>Date: .............................................</p>
                        </div><br>


                        <!-- DEAN -->
                        <p>DEAN IN CHARGE</p>
                        <P>
                            I certify that the student has discharged all his financial obligations 
                            to the University school.
                        </P>
                        <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                            <p>Signature/stamp:  .............................................
                            <img class="sign" src="../assets/uploads/dean.png" alt="">
                            </p>
                            <p>Date: .............................................</p>
                        </div><br>


                        <!-- SPORTS COACH -->
                        <p>CAMPUS SPORTS COARCH</p>
                        <P>
                            The bearer of this form has submitted all sports equipment in his/her 
                            possession.
                        </P>
                        <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                            <p>Signature/stamp:  .............................................
                            <img class="sign" src="../assets/uploads/sports-coach.png" alt="">
                            </p>
                            <p>Date: .............................................</p>
                        </div><br>



                        <!-- || Non-Default Officers || -->
                        <?php foreach ($ctx['clearance_items'] as $clearance_item): ?>
                            <?php if ($clearance_item['officer_id'] == 5): ?>

                                <!-- BIO LAB -->
                                <p>LABORATORY</p>
                                <P>
                                    The bearer of this form has fulfilled all his financial obligations including
                                    replcacing and repair of broken and damaged laboratory equipment.
                                </P>
                                <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                                    <p>Signature/stamp:  .............................................
                                    <img class="sign" src="../assets/uploads/bio-lab.png" alt="">
                                    </p>
                                <p>Date: .............................................</p>
                                </div><br>

                            <?php elseif ($clearance_item['officer_id'] ==  6): ?>

                                <!-- CHEMISTRY LAB -->
                                <p>LABORATORY</p>
                                <P>
                                    The bearer of this form has fulfilled all his financial obligations including
                                    replcacing and repair of broken and damaged laboratory equipment.
                                </P>
                                <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                                    <p>Signature/stamp:  .............................................
                                    <img class="sign" src="../assets/uploads/chem-lab.png" alt="">
                                    </p>
                                <p>Date: .............................................</p>
                                </div><br>

                            <?php elseif ($clearance_item['officer_id'] ==  7): ?>

                                <!-- PHYSICS LAB -->
                                <p>LABORATORY</p>
                                <P>
                                    The bearer of this form has fulfilled all his financial obligations including
                                    replcacing and repair of broken and damaged laboratory equipment.
                                </P>
                                <div class="d-flex mt-4 mb-2 justify-content-between position-relative">
                                    <p>Signature/stamp:  .............................................
                                    <img class="sign" src="../assets/uploads/phy-lab.png" alt="">
                                    </p>
                                <p>Date: .............................................</p>
                                </div><br>

                            <?php endif ?>

                        <?php endforeach ?>

                        
                            <div>

                                <p>SENIOR HALL TUTOR</p>
                                <P>
                                    The bearer of this form has fulfilled all his financial obligations in
                                    his/her Hall of Residence.
                                </P>
                                <div class="d-flex mt-4 mb-2 justify-content-between">
                                    <p>Signature/stamp:  .............................................</p>
                                <p>Date: .............................................</p>
                                </div><br>

                                

                                
                            </div>
                    
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
    window.print()
</script>