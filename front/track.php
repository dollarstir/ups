

<?php
involve('functions.php');
begin();
?>


<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <style>
    ::-webkit-scrollbar {
      width: 8px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

    .bs4-order-tracking {
      margin-bottom: 30px;
      overflow: hidden;
      color: #878788;
      padding-left: 0px;
      margin-top: 30px
    }

    .bs4-order-tracking li {
      list-style-type: none;
      font-size: 13px;
      width: 25%;
      float: left;
      position: relative;
      font-weight: 400;
      color: #878788;
      text-align: center
    }

    .bs4-order-tracking li:first-child:before {
      margin-left: 15px !important;
      padding-left: 11px !important;
      text-align: left !important
    }

    .bs4-order-tracking li:last-child:before {
      margin-right: 5px !important;
      padding-right: 11px !important;
      text-align: right !important
    }

    .bs4-order-tracking li>div {
      color: #fff;
      width: 29px;
      text-align: center;
      line-height: 29px;
      display: block;
      font-size: 12px;
      background: #878788;
      border-radius: 50%;
      margin: auto
    }

    .bs4-order-tracking li:after {
      content: '';
      width: 150%;
      height: 2px;
      background: #878788;
      position: absolute;
      left: 0%;
      right: 0%;
      top: 15px;
      z-index: -1
    }

    .bs4-order-tracking li:first-child:after {
      left: 50%
    }

    .bs4-order-tracking li:last-child:after {
      left: 0% !important;
      width: 0% !important
    }

    .bs4-order-tracking li.active {
      font-weight: bold;
      color: #ffb400
    }

    .bs4-order-tracking li.active>div {
      background: #ffb400
    }

    .bs4-order-tracking li.active:after {
      background:  #ffb400
    }

    .card-timeline {
      background-color: #fff;
      z-index: 0
    }
  </style>

<body itemscope="">
<div class="theme-layout">
<?php topnav(); ?>



    <div id="calculate-form-popup">
        <div class="calculate-form-popup">
            <div class="modal-dialog2">
                <div class="modal-content2">
                    <div class="modal-body2">
                        <button type="submit"><img src="front/images/close1.png" alt="" /></button>
                        <div class="cargo-shipment">
                            <div class="calculate-shipping">
                                <div class="dark-title">
                                    <span><i class="fa fa-steam"></i>Please Enter the tracking number to see the status of your item.</span>
                                    <h3>Track Shipment</h3>
                                </div>

                                <div class="calculate-shipping-form">
                                    <form method="get" action="track">
                                        <div class="row">



                                            <div class="col-md-12">
                                                <input type="text" name="tracking" required class="text-field" placeholder="WayBill Number" />
                                            </div>





                                            <div class="col-md-12">
                                                <button type="submit"  class="theme-btn"><i class="fa fa-paper-plane"></i> Track Shipment</button>
                                            </div>
                                            <!--<div class="col-md-12">
                                                <div class="total">
                                                    <div class="cargo-total"><h4>TOTAL:</h4> $345</div>
                                                </div>
                                            </div>-->
                                        </div>
                                    </form>
                                </div>
                            </div><!-- Calculate Shipping -->
                        </div><!-- Cargo Shipment -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="site-content">



<!-- /contact -->
<?php
if (isset($_GET['tracking'])) {
    if ($_GET['tracking'] == '') {
        echo '';
    } else {
        if (authenticate('package', [['trackid', '=', $_GET['tracking']]]) == 'success') {
            $rev = customfetch('package', [['trackid', '=', $_GET['tracking']]]);
            $rev = $rev[0];

            $rh = customfetch('history', [['trackid', '=', $_GET['tracking']]], '', ['id' => 'DESC']);
            if (in_array('Order Received', array_column($rh, 'status'))) {
                $iniorder = '<li class="step active"> <div><i class="fas fa-user"></i></div>Order Received</li> ';
            } else {
                $iniorder = '<li class="step"> <div><i class="fas fa-user"></i></div>Order Received </li> ';
            }

            if (in_array('In Transit For Delivery', array_column($rh, 'status'))) {
                $intransit = '<li class="step active"> <div><i class="fas fa-bread-slice"></i></div>In transit </li> ';
            } else {
                $intransit = '<li class="step"> <div><i class="fas fa-bread-slice"></i></div>In transit </li> ';
            }

            if (in_array('Delivered', array_column($rh, 'status'))) {
                $Delivered = '<li class="step active"> <div><i class="fas fa-birthday-cake"></i></div>Delivered </li> ';
            } else {
                $Delivered = '<li class="step"> <div><i class="fas fa-birthday-cake"></i></div>Delivered </li> ';
            }

            if (in_array('Out for delivery', array_column($rh, 'status'))) {
                $outfordelivery = '<li class="step active"> <div><i class="fas fa-truck"></i></div>Out for delivery </li> ';
            } else {
                $outfordelivery = '<li class="step"> <div><i class="fas fa-truck"></i></div>Out for delivery </li> ';
            }

            echo '<div style="margin: 5%" class="inner_main_agile_section">
            <div class="container">
                <div class="card card-timeline px-2 border-none"> 
                    <ul class="bs4-order-tracking"> 
                        '.$iniorder.'
                        '.$intransit.'
                        '.$outfordelivery.'
                        '.$Delivered.'
                    </ul> <!--<h5 class="text-center"><b>In transit</b>. The order has been shipped!</h5>-->
                </div>
                <h3 class="w3l_header w3_agileits_header">Shipment <span> Summary</span></h3>
                <p class="sub_para_agile two"></p>
                <div class="bs-docs-example">
        
                    <table class="table table-bordered table-hover table-striped">
                        
                        <tbody>
                        <tr>
                            <td>#</td>
                            <td>'.$rev['trackid'].'</td>
                            
                        </tr>
                        <tr>
                            <td>Item Description</td>
                            
                            <td> '.$rev['item'].'</td>
                            
                        </tr>
                        <tr>
                            <td>Origin Service Area</td>
                            <td>'.$rev['origin'].'</td>
                            
                        </tr>
                        <tr>
                            <td>Current location</td>
                            
                            <td>'.$rev['current'].'</td>
                            
                        </tr>
                        <tr>
                            <td>Destination Service Area</td>
                            <td>'.$rev['destination'].'</td>
                            
                        </tr>
                       

                        <tr>
                            <td>Weight</td>
                           
                            <td>'.$rev['weight'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Payment Mode</td>
                           
                            <td>'.$rev['paymode'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Shipping Mode</td>
                           
                            <td>'.$rev['shipmode'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Status</td>
                           
                            <td>'.$rev['status'].'</td>
                            
                        </tr>
                        <tr>
                            <td>Pickup Date</td>
                            <td>'.$rev['pickupdate'].'</td>
                        </tr>
                        <tr>
                            <td>Expected Delivery Date</td>
                           
                            <td>'.$rev['edeliverydate'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Departure Time</td>
                           
                            <td>'.$rev['departuretime'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Shipper Name</td>
                           
                            <td>'.$rev['shippername'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Shipper Address</td>
                           
                            <td>'.$rev['shipperaddress'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Receiver Name</td>
                           
                            <td>'.$rev['recievername'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Receiver Address</td>
                           
                            <td>'.$rev['recieveraddress'].'</td>
                            
                        </tr>
                        </tbody>
                    </table>

                   <!-- <h3 class="w3l_header w3_agileits_header">Shipment <span> History</span></h3></div>
                    
                    
                    <div class="table-responsive">
        
                        <table class="table table-bordered table-responsive table-hover table-striped">
                        <thead style="background-color:#ffb400">
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Updated By</th>
                                <th>Remarks</th>
                            </tr>

                            
                            </thead>
                            
                            <tbody>
                    ';

            foreach ($rh as $r) {
                echo '
                            
                                <tr>
                                    <td>'.$r['dateadded'].'</td>
                                    <td>'.$r['timeadded'].'</td>
                                    <td>'.$r['location'].'</td>
                                    <td>'.$r['status'].'</td>
                                    <td>'.app1('appname').'</td>
                                    <td>'.$r['remarks'].'</td>
                                </tr>
                           ';
            }

            echo ' 

            </tbody>
            </table>
            </div>-->
            </div>
        </div>';
        } else {
            echo '<div style="margin: 5%" class="inner_main_agile_section">
            <div class="container">
                <h3 class="w3l_header w3_agileits_header">Result <span> Summary</span></h3>
                <p class="sub_para_agile two"></p>
                <div class="bs-docs-example">
        
                    <table class="table table-bordered table-hover table-striped">
                        
                        <tbody>
                        <tr>
                            <td>Invalide Tracking NUmber</td>
                            
                            
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <section class="overlape track-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="track-form">
                    <div class="heading2">
                        <img src="front/images/resource/track-form.png" alt=""/>
                        
                    </div>
                    <form action="track" method="get">
                        <label><i class="fa fa-stumbleupon"></i><input name="tracking" type="text" placeholder="Track a Shipment: Enter Way Bill Number"/></label>
                        <button title=""  class="theme-btn"
                           ><i class="fa fa-paper-plane"></i>Track</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
        '

        ;
        }
    }
} else {
    echo '<section class="overlape track-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="track-form">
                    <div class="heading2">
                        <img src="front/images/resource/track-form.png" alt=""/>
                        <span>BY SEAFREIGHT</span>
                        <h3>SHIPMENT VISIBILITY</h3>
                    </div>
                    <form action="track" method="get">
                        <label><i class="fa fa-stumbleupon"></i><input name="tracking" type="text" placeholder="Track a Shipment: Enter Way Bill Number"/></label>
                        <button title=""  class="theme-btn"
                           ><i class="fa fa-paper-plane"></i>Track</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>';
}

?>
<!-- map -->

<!-- //contact -->
</div>

<?php foot(); ?>

</div>

<!-- Region Popup -->
<div class="modal fade region" id="region" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><img src="front/images/close.png" alt="" itemprop="image"/></span></button>
                <div class="region-detail">
                    <div class="row">
                        <div class="col-md-6 column">
                            <div class="region-contact-info">
                                <div class="heading2">
                                    <span>Fast And Safe</span>
                                    <h3>Office Address</h3>
                                </div>
                                <p>Transport logitec, ltd. 2258 millenioum Street Columbia, DK 85966</p>
                                <div class="contact-detail">
                                        <span class="contact">
                                            <i class="fa fa-mobile"></i>
                                            <strong>Phone No</strong>
                                            <span>+17325647820</span>
                                            <span>+1 73 25 64 7820</span>
                                        </span>
                                    <span class="contact">
                                            <i class="fa fa-email"></i>
                                            <strong>Email Address</strong>
                                            <span>info@MoveItFasts.co</span>
                                        </span>
                                    <span class="contact">
                                            <i class="fa fa-time"></i>
                                            <strong>Office Timing</strong>
                                            <span>10:00am - 06:00pm / Sunday: Close</span>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 column">
                            <div class="loc-thumb">
                                <img src="front/images/resource/contact.jpg" alt="" itemprop="image"/>
                                <p></p>
                                <a class="theme-btn" href="#" title="" itemprop="url">CONTACT US NOW</a>
                            </div>
                        </div>
                    </div>
                </div><!-- Region Detail -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="submission-message" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="submission-data">
                    <span><img src="front/images/resource/submission.png" alt=""/></span>
                    <h1>SUBMISSION SUCCESSFUL</h1>
                    <p>Thank You For Your Booking With Unload. We Have Sent you a Message Shortly.</p>
                    <a href="#" title="" class="theme-btn" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-paper-plane"></i>BACK TO MAIN</a>
                </div><!-- Submission-data -->
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<?php scripts(); ?>
<script>
    $(document).ready(function () {
        "use strict";

        //** Slider  **//
        $("#layerslider").layerSlider({
            responsive: true,
            responsiveUnder: 1170,
            layersContainer: 1170,
            skin: 'v5',
            hoverPrevNext: true,
            navPrevNext: true,
            navStartStop: false,
            navButtons: false,
            skinsPath: 'layerslider/skins/'
        });

        //** Reviews **//
        $("#customers-review-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 0,
            items: 1,
            singleItem: true,
            responsiveClass: true,
            responsive: {
                0: {
                    nav: false
                },
                900: {
                    nav: true
                }
            }
        });

        $("#modern-services-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 30,
            items: 3,
            responsiveClass: true,
            responsive: {
                1200: {items: 3},
                980: {items: 2},
                480: {items: 2},
                0: {items: 1}
            }
        });

        // Accordion //
        $('#toggle .content').hide();
        $('#toggle h3:first').addClass('active').next().slideDown(500).parent().addClass("activate");
        $('#toggle h3').on("click", function () {
            if ($(this).next().is(':hidden')) {
                $('.toggle h3').removeClass('active').next().slideUp(500).removeClass('animated zoomIn').parent().removeClass("activate");
                $(this).toggleClass('active').next().slideDown(500).addClass('animated zoomIn').parent().toggleClass("activate");
                return false;
            }
        });
    });
</script>
</body>


</html>
