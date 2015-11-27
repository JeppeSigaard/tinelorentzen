
<?php /*
// vi skal ikke bruger header, men WP's funktionsbibliotek
define('WP_USE_THEMES', false); 

// Vores retur encodes til json, så det er nemt at bruge i javascript.
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

// Hent wp-load, så vi får mulighed for at bruge wordpress' funktionsarkiv
require '../../../../../wp-load.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table>
    <tbody>
    <tr>
        <td>Nummer</td>
        <td>Kode</td>
        <td>Navn</td>
        <td>Email</td>
    </tr>
<?php
$codes = array();
$randomString;
$i = 0;

while(count($codes) < 100){
    $randomString = substr(str_shuffle("RABATKODE"), 0, 6);
    if(!in_array($randomString,$codes)){
        array_push($codes,$randomString); 
    }
}

foreach($codes as $code) : 
    $i++;

    $new = wp_insert_post(array(
        'post_type' => 'rabatkode',
        'post_title' => $code,
        'post_status' => 'publish',
    ),true);    
        
    if(is_wp_error($new)){
        die($new->get_error_message);
    }
        
    update_post_meta($new,'rabat_kode_nr',$i);
    update_post_meta($new,'rabat_kode',$code);
    update_post_meta($new,'rabat_navn','');
    update_post_meta($new,'rabat_email','');
?>
<tr>
   <td><?php echo $i; ?></td>
    <td><?php echo $code; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>

<?php endforeach; ?>
        
    </tbody>
</table>
</body>
</html>
<?php 
