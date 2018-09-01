<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Membuat Custom Tombol Share Facebook, Twitter, Google +, LinkedIn</title>
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22%2F%2Fajax.googleapis.com%2Fajax%2Flibs%2Fjquery%2F1.10.2%2Fjquery.min.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="&lt;script&gt;" title="&lt;script&gt;" />
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%3E%0AjQuery(document).ready(function(%24)%20%7B%0A%20%24('.popup').click(function(event)%20%7B%0A%20var%20width%20%3D%20575%2C%0A%20height%20%3D%20400%2C%0A%20left%20%3D%20(%24(window).width()%20-%20width)%20%2F%202%2C%0A%20top%20%3D%20(%24(window).height()%20-%20height)%20%2F%202%2C%0A%20url%20%3D%20this.href%2C%0A%20opts%20%3D%20'status%3D1'%20%2B%0A%20'%2Cwidth%3D'%20%2B%20width%20%2B%0A%20'%2Cheight%3D'%20%2B%20height%20%2B%0A%20'%2Ctop%3D'%20%2B%20top%20%2B%0A%20'%2Cleft%3D'%20%2B%20left%3B%0A%20%0A%20window.open(url%2C%20'twitter'%2C%20opts)%3B%0A%20%0A%20return%20false%3B%0A%20%7D)%3B%0A%20%7D)%3B%0A%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="&lt;script&gt;" title="&lt;script&gt;" />
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cstyle%3E%0A.facebook%2C.twitter%20%7B%20margin-left%3A3px%20!important%3B%7D%0A.facebook%2C%20.twitter%2C%20.google%2C%20.linkedin%2C%20.pinterest%20%7B%0A%20float%3Aleft%3B%0A%20position%3Arelative%3B%0A%20margin-left%3A5px%3B%0A%7D%0A.container%20%7B%0A%20width%3A400px%3B%0A%20margin%3Aauto%3B%0A%20text-align%3Acenter%3B%0A%7D%0A.social-share%20%7B%0A%20width%3A190px%3B%0A%20margin%3A15px%20auto%200%3B%0A%7D%0A%3C%2Fstyle%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="&lt;style&gt;" title="&lt;style&gt;" />
</head>

<body>
    <?php 
    	$title = 'Membuat Custom Tombol Share Facebook, Twitter, Google +, LinkedIn' ; 
    	$summary = 'Tombol share untuk sosial media merupakan sebuah plugin untuk membagikan artikel terbaru anda dengan orang-orang yang berteman dengan 			anda di sosial media'; 
    	$image='http://demo.pindexain.com/black-white-img/img/1.jpg'; 
    	$url = "http://demo.pindexain.com/black-white-img/"; ?>
        <div class="container">
            <h1>Membuat Custom Tombol Share Facebook, Twitter, Google +, LinkedIn</h1>
            <img src="<?php echo $image;?>" />
            <div style="clear:both;"></div>
            <div class="social-share">
                <div class="facebook">
                    <a id="button" onclick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title; ?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=550,height=400');" target="_parent" href="javascript: void(0)">
                        <img src="images/f.jpg" /></a>
                </div>
                <div class="twitter">
                    <a class="twitter popup" href="http://twitter.com/share?source=sharethiscom&text=<?php echo $title;?>&url=<?php echo $url; ?>&via=berbagiyuks"><img src="images/tw.jpg" /></a>
                </div>
                <div class="google">
                    <a href="javascript:void(0);" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo $url; ?> ','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false"><img src="images/g.jpg" /></a>
                </div>
                <div class="linkedin">
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?> &title=<?php echo $title;?>&summary=<?php echo $summary;?>&source=BerbagiYuks.con" class="popup" rel="nofollow"><img src="images/in.jpg" /></a>
                </div>
                <div class="pinterest">
                    <a href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());'><img src="images/pin.jpg" /></a>
                </div>
            </div>
        </div>
</body>
</html>