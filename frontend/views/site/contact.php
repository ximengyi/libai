<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newsletter wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
    <div class="container">
        <h3>sign up for our newsletter</h3>
        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.</p>
        <form action="#" method="post">
            <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
            <input type="submit" value="Subscribe">
        </form>
    </div>
</div>
<!--/newsletter-->
<!--contact-->
<div class="contact_w3agile" id="contact">
    <div class="container wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
        <h2 class="title">Contact</h2>

        <form action="#" method="post">
            <input type="text" value="Name" name="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
            <input type="email address" value="Email" name="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
            <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" required>Message</textarea>
            <div class="con-form text-center">
                <input type="submit" value="Send">
            </div>
        </form>

    </div>
</div>
<!--/contact-->
<div class="map wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
    <iframe src="" style="border:0"></iframe>
</div>





<!--footer-->
<div class="footer">
    <div class="footer-info">
        <div class="container">
            <div class="icons wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <ul>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><img src="images/i1.png" alt=""></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><img src="images/i2.png" alt=""> </a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google+"><img src="images/i3.png" alt=""></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="LinkedIn"><img src="images/i4.png" alt=""> </a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><img src="images/i5.png" alt=""> </a></li>
                </ul>
                <script>$(function () {
                        $('[data-toggle="tooltip"]').tooltip()
                    })</script>
            </div>
            <p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
        </div>
    </div>
</div>
