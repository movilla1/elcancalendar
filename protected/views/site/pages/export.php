<?php
/* @var $this SiteController */

$this->pageTitle="Export " . Yii::app()->name;
$exporturl=Yii::app()->getBaseUrl(true)."/index.php?r=export/json";
require("protected/extensions/phpqrcode.php");
if (!file_exists("tmp/qrgen.png")) QRcode::png("$exporturl","tmp/qrgen.png",QR_ECLEVEL_L,5);
?>
To syncronize the calendar on this site, please type the following on your sync field available in your app:
<br/><br/>
<strong>
<?php echo $exporturl;?>
</strong>
<br/><br/>
Or scan the following QR code with your app:
<br/>
<img src="tmp/qrgen.png" alt="<?php echo $exporturl?>"/>