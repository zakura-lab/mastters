<!DOCTYPE html>
<html lang="ru">
<?
require_once  $_SERVER['DOCUMENT_ROOT'].'/core.php';
$id = [
  'robots' => 'index, follow',
  'title' => 'Укладка кафельной и керамической плитки в Курске',
  'description' => 'Предоставляем услуги по укладке кафельной и керамической плитки быстро, качественно и выгодно.',
  'keywords' =>'профессионал мастер курск',
  'h1' => ['title' => '' ],
  'h2' => ['title' => '' ],
  'h3' => ['title' => '' ],
  'h4' => ['title' => '' ]
];
$slider = [
  '1' => [ 'title' => '', 'img' =>'/images/slider/1111.jpg' ],
  '2' => [ 'title' => '', 'img' =>'/images/slider/2222.jpg' ],
  '3' => [ 'title' => '', 'img' =>'/images/slider/3333.jpeg' ],
];
$catalog = [
  '1' => [
   'title' => 'УКЛАДКА ПЛИТКИ',
   'link' =>'',
   'text' =>'',
   'img' =>'/images/slider/slide1_1400x820.jpg'
  ],
  '2' => [
    'title' => 'УКЛАДКА ГИПСОВОЙ ПЛИТКИ',
    'link' =>'',
    'text' =>'',
    'img' =>'/images/slider/slide2_1400x820.jpg'
  ],
  '3' => [
    'title' => 'УКЛАДКА КРУПНОГАБАРИТНОЙ ПЛИТКИ',
    'link' =>'',
    'text' =>'',
    'img' =>'/images/slider/slide3_1400x820.jpg'
  ]
];
$price = [
  '1' => [ 'title' => 'Строительные работы', 'link' =>'/quiz/1/1.php' ],
  '2' => [ 'title' => 'Фасадные работы', 'link' =>'/quiz/2/2.php' ],
  '3' => [ 'title' => 'Отделочные работы', 'link' =>'/quiz/3/3.php' ],
  '4' => [ 'title' => 'Прочие услуги', 'link' =>'/quiz/4/4.php' ]
];
// источник http://code.mu/ru/php/book/prime/
//
print  '<head>' . "\n";
require_once  $_SERVER['DOCUMENT_ROOT'].'/php/head.php';
print  '</head>' . "\n";
print  '<body class="index-template">' . "\n";
print  '<div class="main-wrapper">' . "\n";
require_once   $_SERVER['DOCUMENT_ROOT'].'/php/mobile_menu.php';
require_once   $_SERVER['DOCUMENT_ROOT'].'/php/header.php';
?>
<div class="container">
 <div class="top-slider-wrapper relative">
  <?php if ($slider == true): ?>
  <div class="top-slider">
<?php foreach ($slider as $key => $item): ?>
  <?php print '<div class="item" '.'style="background-image:'.' url('.$item['img'] . ')">' ."\n"; ?>
      <div class="table">
         <div class="table-cell">
           <div class="container-inner">
             <div class="slide-content">
               <?php if ($item['title']): ?> <span><?php print $item['title']; ?></span> <?php endif; ?>
             </div>
           </div>
         </div>
       </div>
      <?php print '</div>'; ?>
<?php endforeach; ?>
  </div>
<?php endif; ?>
 </div>
</div>
<div class="middle-section">
            <div class="container">
                <div class="container-inner">
                    <div class="container-inner-figure">
                        <svg version="1.1" width="100%" height="200px"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        xml:space="preserve" viewBox="0 0 100 100" preserveAspectRatio="none">
                            <polygon points="0 100, 40 0, 90 0, 100 50, 100 100" fill="#232222"></polygon>
                        </svg>
                    </div>

                    <div class="relative">
                        <div class="main-categories-block">
                            <div class="block-content">
                                <div class="title">
                                    Оказываем услуги для частных лиц и организаций
                                </div>
                                <div class="text">
                                    <p>
                                      <span>

                                      <br />
                                      <br />
                                       </span>
                                      </p>
                                </div>
                            </div>
                              <div class="row no-padding">

                                <div class="col-md-4">
                                    <div class="element">
                                      <a href="<?php print $catalog['1']['link']; ?>" class="absolute"></a>
                                        <div class="img-wrapper" style="background-image: url(<?php print $catalog['1']['img']; ?>);">
                                            <div class="img-wrapper-content">
                                                <div class="table">
                                                    <div class="table-cell text-center">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="figure">
                                                <svg version="1.1" width="100%" height="50px"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xml:space="preserve" viewBox="0 0 100 100" preserveAspectRatio="none">
                                                    <polygon points="0 100,100 0,100 100" fill="#FFFFFF"></polygon>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="element-content">
                                            <div class="title"><?  print $catalog['1']['title']; ?></div>
                                            <div class="text"><?  print $catalog['1']['text']; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="element center">
                                        <a href="<?php print $catalog['2']['link']; ?>" class="absolute"></a>
                                        <div class="element-content">
                                          <div class="title"><?  print $catalog['2']['title']; ?></div>
                                          <div class="text"><?  print $catalog['2']['text']; ?></div>
                                        </div>
                                        <div class="img-wrapper" style="background-image: url(<?php print $catalog['2']['img']; ?>);">
                                            <div class="img-wrapper-content">
                                                <div class="table">
                                                    <div class="table-cell text-center">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="figure">
                                                <svg version="1.1" width="100%" height="50px"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xml:space="preserve" viewBox="0 0 100 100" preserveAspectRatio="none">
                                                    <polygon points="0 0,100 0,100 100" fill="#FFFFFF"></polygon>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="element">
                                        <a href="<?php print $catalog['3']['link']; ?>" class="absolute"></a>
                                        <div class="img-wrapper" style="background-image: url(<?php print $catalog['3']['img']; ?>);">
                                            <div class="img-wrapper-content">
                                                <div class="table">
                                                    <div class="table-cell text-center">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="figure">
                                                <svg version="1.1" width="100%" height="50px"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xml:space="preserve" viewBox="0 0 100 100" preserveAspectRatio="none">
                                                    <polygon points="0 100,100 0,100 100" fill="#FFFFFF"></polygon>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="element-content">
                                          <div class="title"><?  print $catalog['3']['title']; ?></div>
                                          <div class="text"><?  print $catalog['3']['text']; ?></div>
                                        </div>
                                    </div>
                                </div>

                              </div>
                              <div class="push20 visible-xs visible-sm"></div>
                        </div>


                    </div>

                        <div class="index-about-block-wrapper">
                          <div class="row no-padding">
                              <div class="col-sm-6">
                                  <div class="index-video-block" style="background-image: url(/images/video-banner.jpg)">
                                      <div class="table">
                                          <div class="table-cell text-center">
                                              <!--a href="https://youtube.com/embed/saVmuCSM8Tw?autoplay=1&amp;showinfo=0&amp;controls=1&amp;rel=0" class="fancyboxvideo" data-fancybox-type="iframe">
                                                  <span></span>
                                              </a-->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="index-about-block">
                                      <div class="element-content">
                                          <div class="table">
                                              <div class="table-cell">
                                                  <div class="title">

                                                  </div>
                                                  <div class="text">
                                          <p>

                                          </p>
                        <p>
                        <!--a class="btn btn-transparent min" href="/">Узнать больше</a-->
                        </p>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                        <div class="img-wrapper hidden-xs hidden-sm" style="background-image: url(images/other/remont-kvartir.jpg)"></div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <!--- колькулятор-->
  <?php if ($price == false): ?>
                        <div class="num-section" id="numsection">

                            <div class="push70"></div>

                            <div class="title-h2 text-center">Пасчитать стоимость</div>
                            <div class="container text-center">
                                <div class="row">
<?php foreach ($price as $key => $element): ?>
  <div class="col-sm-3">
    <div class="element">
  <a href="#" class="btn btn-transparent min" role="button"  data-fancybox data-type="ajax"  data-src="<?php print $element['link']; ?>">
    <?php print $element['title']; ?>
  </a>
    </div>
  <div class="push30 visible-xs"></div>
  </div>
<?php endforeach; ?>


                                </div>
                            </div>
                            <div class="push60"></div>
                        </div>
<?php endif; ?>
                      <!---/ колькулятор-->
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-push"></div>
                              </div>

<?php
require_once  $_SERVER['DOCUMENT_ROOT'].'/php/footer.php';
require_once   $_SERVER['DOCUMENT_ROOT'].'/php/script.php';
# require_once   $_SERVER['DOCUMENT_ROOT'].'/php/modal.php';
print '</body>' . "\n";
?>
</html>
