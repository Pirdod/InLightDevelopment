<?php
Yii::import("ext.imagegallery.ImageGallery", true);

$images = array(
		//Yii::app()->baseUrl."/images/Home/Features/free_website_promo.png",
		Yii::app()->baseUrl."/images/Home/sample_aziz_reno.png",
		Yii::app()->baseUrl."/images/Home/sample_inlight_dev.png",
		Yii::app()->baseUrl."/images/Home/sample_aziz_reno.png",
		Yii::app()->baseUrl."/images/Home/sample_inlight_dev.png",
		Yii::app()->baseUrl."/images/Home/sample_aziz_reno.png",
		Yii::app()->baseUrl."/images/Home/sample_inlight_dev.png",
		Yii::app()->baseUrl."/images/Home/sample_aziz_reno.png",
		Yii::app()->baseUrl."/images/Home/sample_inlight_dev.png",
		Yii::app()->baseUrl."/images/Home/sample_aziz_reno.png",
		Yii::app()->baseUrl."/images/Home/sample_inlight_dev.png",
		//Yii::app()->baseUrl."/images/inLightLogo.png"
);
$this->widget("ext.imagegallery.ImageGallery", array(
	ImageGallery::$COLUMNS =>4, ImageGallery::$ROWS=>6, ImageGallery::$IMAGES=>$images));

	?>
