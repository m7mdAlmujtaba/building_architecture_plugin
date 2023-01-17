<?php
require_once( explode( "wp-content" , __FILE__ )[0] . "wp-load.php" );

$structures = [
    '01' => 'Reinforced concrete columns + Flat slab roof', 
    '02' => 'Reinforced concrete columns + Flat slab roof', 
    '03' => 'Reinforced concrete columns + Flat slab roof',
    '04' => 'Reinforced concrete columns + Flat slab roof', 
    '05' => 'Reinforced concrete columns + Flat slab roof', 
    '06' => 'Reinforced concrete columns + Flat slab roof', 
    '07' => 'Reinforced concrete columns + Flat slab roof', 
];

$finishings = [
    '01' => 'Reinforced concrete columns + Flat slab roof', 
    '02' => 'Reinforced concrete columns + Flat slab roof', 
    '03' => 'Reinforced concrete columns + Flat slab roof',
    '04' => 'Reinforced concrete columns + Flat slab roof', 
];

$finishing_types = [
    '01' => 'High', 
    '02' => 'Reinforced concrete columns + Flat slab roof', 
    '03' => 'Reinforced concrete columns + Flat slab roof',
   
];

// Design / Rehabilitation
$work_type = sanitize_text_field($_POST['workType']);
// Sketch
// Send as attachment
// Area
$building_area = sanitize_text_field( $_POST['area'] );
// Floors
$building_floors = sanitize_text_field( $_POST['floors'] );
// Structure 
$building_structure = sanitize_text_field( $_POST['structure'] );
// Finishing
$building_finishing = sanitize_text_field( $_POST['finishing'] );
// Finishing Type
$building_finishing_type = sanitize_text_field( $_POST['finishingType'] );
// Client Name
$client_name = sanitize_text_field( $_POST['name'] );
// Client Phone
$client_phone = sanitize_text_field( $_POST['phone'] );
// Client Email
$client_email = sanitize_email($_POST['email']);
// Client Message
$client_message = sanitize_text_field( $_POST['message'] );

$body = '

Work Type: ' . $work_type . '<br>
Building Area: ' . $building_area . '<br>
Building Floors: ' . $building_floors . '<br>
Building Structure: ' . $structures[$building_structure] . '<br>
Building Finishing: ' . $finishings[$building_finishing] . '<br>
Building Finishing Type: ' . $finishing_types[$building_finishing_type] . '<br>
Client Name: ' . $client_name . '<br> 
Client Phone Namber: ' .$client_phone . '<br>
Client Email: ' . $client_email. '<br>
Client Note: '. $client_message. '<br>'
;
// Echo Everything
echo $body;

//$to = 'xmanhunter12@gmail.com';
$to = get_option('admin_email');
$subject = 'New Service Order';
//$body = 'The email body content';
$headers = array('Content-Type: text/html; charset=UTF-8');

wp_mail( $to, $subject, $body, $headers );

?>