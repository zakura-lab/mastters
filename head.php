<?php
//header('Content-Type: text/html; charset=utf-8');
print '<meta charset="utf-8">'."\n";
print '<meta name="robots" content="'. $id['robots'].'">'."\n";
print '<title>' . $id['title']  . '</title>' . "\n";
print '<meta ' . 'name="description" '. 'content="'.  $id['description'] . '">' . "\n";
print '<base href="'.$_SERVER['REQUEST_URI'].'">'."\n";
print '<meta ' . 'name="keywords" '.'content="'. $id['keywords'].'">'."\n";
print '<meta http-equiv="X-UA-Compatible" content="IE=edge" />'."\n";
print '<meta name="viewport" content="width=device-width, initial-scale=1">'."\n";

$style = [
  '1' => ['href' => '/assets/css/style.css'],
  '2' => ['href' => '/bootstrap/css/bootstrap.css'],
  '3' => ['href' => '/assets/font/css/font-awesome.css'],
  '4' => ['href' => '/assets/css/lightgallery.min.css'],
  '5' => ['href' => '/assets/css/settings.css' ]
];

$script = [
  '1' => ['src' => '/assets/js/jquery.min.js'],
  '2' => ['src' => '/bootstrap/js/bootstrap.bundle.js'],
  '3' => ['src' => '/assets/js/modernizr.js'],
  '4' => ['src' => '/assets/js/jquery.fancybox.js'],
  '5' => ['src' => '/assets/js/slick.min.js'],
  '6' => ['src' => '/assets/js/lightgallery-all.min.js'],
  '7' => ['src' => '/assets/js/jquery.animateNumber.min.js'],
  '8' => ['src' => '/assets/js/jquery.viewportchecker.js'],
  '9' => ['src' => '/assets/js/scripts.js']
];

 foreach($style as $key =>  $element):
  print '<link'.' rel="stylesheet"'.' href=' . $element['href'] .'>'."\n";
 endforeach
?>
<!--- источник  https://snipp.ru/jquery/modal-fancybox-3-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">

<link rel="apple-touch-icon" sizes="57x57" href="/images/icon/head/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/images/icon/head/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/images/icon/head/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/images/icon/head/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/images/icon/head/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/images/icon/head/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/images/icon/head/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152"  href="/images/icon/head/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180"  href="/images/icon/head/apple-icon-180x180.png">

<link rel="icon" type="image/png" sizes="192x192"  href="/images/icon/head/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/icon/head/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/images/icon/head/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/icon/head/favicon-16x16.png">

<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#1C1C1C">
<meta name="msapplication-TileImage" content="/images/icon/head/ms-icon-144x144.png">
<meta name="theme-color" content="#1C1C1C">
<meta name="yandex-verification" content="faa11ef69f31de71" />
<meta name="msvalidate.01" content="A1C64575A13104B7A46CA2E93CAC4ECE" />
