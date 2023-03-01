<?php

require '../loader/autoloader.php';
require '../fragement/stafffunctions.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addpackage':
            extract($_POST);
            addpackage($item, $status, $origin, $current, $destination, $pickupdate, $pickuptime, $edeliverydate, $departuretime, $weight, $shippername, $shipperaddress, $recievername, $recieveraddress, $paymode, $shipmode, $remarks);
            break;

        case 'editpackage':
            extract($_POST);
            editpackage($id, $item, $status, $origin, $current, $destination, $pickupdate, $pickuptime, $edeliverydate, $departuretime, $weight, $shippername, $shipperaddress, $recievername, $recieveraddress, $paymode, $shipmode, $remarks, $trackid, $hdate, $htime);
            break;

        case 'editgold':
            extract($_POST);
            editgold($gold_id, $depositer, $dob, $nation, $nationality, $gender, $occupation, $address, $next_kin, $item, $weight, $purity, $carat, $charge, $date_added);
            break;
        case 'addgold':
            extract($_POST);
            addgold($depositer, $dob, $nation, $nationality, $gender, $occupation, $address, $next_kin, $item, $weight, $purity, $carat, $charge, $date_added);
            break;

        case 'editapp':
            extract($_POST);
            editapp($appname, $appfooter, $appcontact, $appemail, $appaddress, $appabout);
            break;
        case 'login':
            extract($_POST);
            login($email, $password);
            break;

        case 'vault':
            extract($_POST);
            vaultlogin($vault);
            break;

        case 'deletepackage':
            extract($_POST);
            deletepackage($id);
            // code...
            break;

        case 'deletegold':
            extract($_POST);
            deletegold($gold_id);
            // code...
            break;

        case 'addstatus':
            extract($_POST);
            addstatus($stname);

            // code...
            break;

        case 'deletestatus':
            extract($_POST);
            deletestatus($id);
            // code...
            break;
        case 'changepassword':
            extract($_POST);
            changepassword($id, $password);
            // code...
            break;

        case 'contact':
            extract($_POST);
            contact($name, $email, $subject, $message);
            // code...
            break;
        default:

        break;
    }
}
