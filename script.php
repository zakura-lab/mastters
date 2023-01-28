

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php
 foreach($script as $key =>  $element):
  print '<script'.' src="'.$element['src'].'">'.'</script>'."\n";
 endforeach
 ?>


<script>
        $(function(){
            $('.num1').viewportChecker({
    classToAdd: 'visible animated fadeInUp',
    offset: 100,
    callbackFunction: function(){
        $('#num1').animateNumber({ number: 9 },1500);
    }
});$('.num2').viewportChecker({
    classToAdd: 'visible animated fadeInUp',
    offset: 100,
    callbackFunction: function(){
        $('#num2').animateNumber({ number: 144560 },1500);
    }
});$('.num3').viewportChecker({
    classToAdd: 'visible animated fadeInUp',
    offset: 100,
    callbackFunction: function(){
        $('#num3').animateNumber({ number: 14754 },1500);
    }
});$('.num4').viewportChecker({
    classToAdd: 'visible animated fadeInUp',
    offset: 100,
    callbackFunction: function(){
        $('#num4').animateNumber({ number: 122 },1500);
    }
});
        });
    </script>

<!-- Yandex.Metrika counter -->
<script>
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(68268913, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133671829-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133671829-2');
</script>
<!-- сегмент  контакта -->
<script>
    !function(){
      var t=document.createElement("script");
      t.type="text/javascript",
      t.async=!0,t.src='https://vk.com/js/api/openapi.js?169',
      t.onload=function(){
        VK.Retargeting.Init("VK-RTRG-1366922-2rziA"),VK.Retargeting.Hit()
      },document.head.appendChild(t)}();
  </script>
  <!-- Rating Mail.ru counter -->
  <script>
  var _tmr = window._tmr || (window._tmr = []);
  _tmr.push({id: "3205515", type: "pageView", start: (new Date()).getTime()});
  (function (d, w, id) {
    if (d.getElementById(id)) return;
    var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
    ts.src = "https://top-fwz1.mail.ru/js/code.js";
    var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
  })(document, window, "topmailru-code");
  </script>
  <!-- //Rating Mail.ru counter -->
