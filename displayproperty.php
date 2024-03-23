<?php
session_start();
include 'navigation.php'
?>

<div style="width:80%; margin: auto; margin-top: 50px;">
    <h1>Property, Apartments, Houses for rent in Sri Lanka</h1>
</div>
<table style="width:100%; margin: 50px 0;">
    <tr>
        <td style="padding-bottom: 2%;">
            <?php include 'propertyMin.php'; ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php include 'propertyMin.php'; ?>
        </td>
    </tr>
</table>
<?php include ('footer/footer.php')?>