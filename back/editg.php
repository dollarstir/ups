<?php
mainchecker('admin', 'login');
involve('stafffunctions');

begin('Edit Gold'); ?>

<body class="crm_body_bg">



<?php staffsidebar(); ?>


    <section class="main_content dashboard_part">

    <?php staffheader(); ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="box_header ">
                                <div class="main-title">

                                <?php
                                $myid = $_GET['id'];

                                ?>
                                    <h3 class="mb-0">Edit <?php gdetail($myid, 'item'); ?></h3>
                                </div>
                            </div>
                            
                            <form class="editgold">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Item </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="item" value="<?php gdetail($myid, 'item'); ?>">

                                        <input type="hidden" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="gold_id" value="<?php gdetail($myid, 'gold_id'); ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Weight </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="weight" value="<?php gdetail($myid, 'weight'); ?>">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Purity </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="purity" value="<?php gdetail($myid, 'purity'); ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Carat </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="carat" value="<?php gdetail($myid, 'carat'); ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Demurage Charge </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="charge" value="<?php gdetail($myid, 'charge'); ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Date  Deposited </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="date_added" value="<?php gdetail($myid, 'date_added'); ?>">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Owner's Full Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="depositer" value="<?php gdetail($myid, 'depositer'); ?>">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Date of Birth</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="dob" value="<?php gdetail($myid, 'dob'); ?>">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Country</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="nation" value="<?php gdetail($myid, 'nation'); ?>">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Nationality</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="nationality" value="<?php gdetail($myid, 'nationality'); ?>">

                                </div>

                                <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                                            <select class="form-select" id="inputGroupSelect01" name="gender">
                                                <option value="<?php gdetail($myid, 'gender'); ?>" ><?php gdetail($myid, 'gender'); ?></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>

                                                
                                                
                                            </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Occupation</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="occupation" value="<?php gdetail($myid, 'occupation'); ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Address</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="address" value="<?php gdetail($myid, 'address'); ?>">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Next of Kin</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="next_kin" value="<?php gdetail($myid, 'next_kin'); ?>">
                                </div>

                                


                                <button type="submit" class="btn btn-primary"> Save </button>
                                
                            </form>
                        </div>
                    </div>
                    
                    
                </div>
            </div>

            <div class="footer_part">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer_iner text-center">
                            <p>2020 © Moveit <a href="#"> <i class="ti-heart"></i> </a><a href="#">
                                    Admin</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <script src="back/js/jquery1-3.4.1.min.js"></script>

    <script src="back/js/popper1.min.js"></script>

    <script src="back/js/bootstrap1.min.js"></script>

    <script src="back/js/metisMenu.js"></script>

    <script src="back/vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="back/vendors/chartlist/Chart.min.js"></script>

    <script src="back/vendors/count_up/jquery.counterup.min.js"></script>

    <script src="back/vendors/swiper_slider/js/swiper.min.js"></script>

    <script src="back/vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="back/vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="back/vendors/gijgo/gijgo.min.js"></script>

    <script src="back/vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="back/vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="back/vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="back/vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="back/vendors/datatable/js/jszip.min.js"></script>
    <script src="back/vendors/datatable/js/pdfmake.min.js"></script>
    <script src="back/vendors/datatable/js/vfs_fonts.js"></script>
    <script src="back/vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="back/vendors/datatable/js/buttons.print.min.js"></script>
    <script src="back/js/chart.min.js"></script>

    <script src="back/vendors/progressbar/jquery.barfiller.js"></script>

    <script src="back/vendors/tagsinput/tagsinput.js"></script>

    <script src="back/vendors/text_editor/summernote-bs4.js"></script>
    <script src="back/vendors/apex_chart/apexcharts.js"></script>
    
    <?php echo Yolk::uicore('jsa'); ?>
    <script src="back/js/custom.js"></script>
    <script src="processor/processor.js"></script>
</body>

</html>