<?php
mainchecker('vaultuser', 'vaultauthenticator');

involve('stafffunctions');

begin('Vault'); ?>

<body class="crm_body_bg">



<?php

// staffsidebar();
 ?>


    <section class="main_content dashboard_part">

    <?php
    // staffheader();
     ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4 style="text-align:center; margin-top:10px !important; ">VAULT NUMBER : <span style="color:#FFB400;"><?php gdetail($_SESSION['vaultuser']['gold_id'], 'vaultnumber'); ?> </span> <a href="" style="margin-left:7px;" class="btn btn-danger">Logout</a></h4>
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                        <!-- <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search content here...">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form>
                                        </div> -->
                                    </div>
                                    <!-- <div class="add_button ms-2">
                                        <a href="back/#" data-bs-toggle="modal" data-bs-target="#addcategory"
                                            class="btn_1">Add New</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active">
                                    <tr>
                                        <td>VAULT NUMBER </td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'vaultnumber'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>ITEM </td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'item'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>CARAT </td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'carat'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>WEIGHT </td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'weight'); ?></td>

                                    </tr>
                                    <tr>
                                        <td>PURITY </td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'purity'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>DATE  DEPOSITED</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'date_added'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>DEMURAGE CHARGE</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'charge'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>NAME OF DEPOSITOR</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'depositer'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>DATE OF BIRTH</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'dob'); ?></td>
                                    </tr>

                                    <tr>
                                        <td>ADDRESS</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'address'); ?></td>
                                    </tr>

                                    <tr>
                                        <td>COUNTRY</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'nation'); ?></td>
                                    </tr>

                                    <tr>
                                        <td>NATIONALITY</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'nationality'); ?></td>
                                    </tr>

                                    <tr>
                                        <td>SEX</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'gender'); ?></td>
                                    </tr>

                                    <tr>
                                        <td>OCCUPATION</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'occupation'); ?></td>
                                    </tr>

                                    <tr>
                                        <td>NEXT OK KIN</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'next_kin'); ?></td>
                                    </tr>
                                
                                        </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_part">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Vault <a href="back/#"> <i class="ti-heart"></i> </a><a
                                    href="back/#"> Admin</a></p>
                        </div>
                    </div> -->
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