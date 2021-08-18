<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 07/09/2018
 * Time: 9:03 SA
 **/
$discountPercent = $_POST["ProductDescription"];
$listPrice = $_POST["ListPrice"];
$discountPercents = $_POST["DiscountPercent"];
$Amount = $listPrice * $discountPercent * 0.1;
$VND = $listPrice - $Amount;
?>

<body>
<div style="margin-left: 450px; border: 2px solid navy; width: 435px; height: 245px">
    <form method="post" action="Discount%20Calculator.php">
        <h1 style=' color: navy; margin-bottom: 10px; float: left; padding-left: 1em;'>Product
            Discount Calculator</h1>
        <h5 style=' margin-bottom: -27px; padding-left: 1em; width: 100%; font-size: 15px '>Product
            Description:  <?php echo $discountPercent ?></h5><br>
        <h5 style=' margin-bottom: -27px; padding-left: 1em; width: 100%; font-size: 15px'>Price: <?php echo $listPrice ?> </h5><br>
        <h5 style=' margin-bottom: -27px; padding-left: 1em; width: 100%; font-size: 15px'>Discount Percent:<?php echo $discountPercents ?></h5>
        <br>
        <h5 style=' margin-bottom: -27px; padding-left: 1em; width: 100%; font-size: 15px'>Discount Amount:<?php echo $Amount ?></h5><br>
        <h5 style=' margin-bottom: -27px; padding-left: 1em; width: 100%; font-size: 15px'>Discount Price:<?php echo $VND ?></h5>
    </form>
</div>
</body>
