
<div class="footer-wrapper">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-top">
                <div class="push40"></div>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-contacts">
                            <div class="title-h4 white">Контактная информация</div>
                            <div class="element">
                                <a href="tel:+79045278108"><?= $name['pfone']; ?></a>
                            </div>
                            <div class="element">
                              <a href="mailto:<?= $name['email']; ?>"><?= $name['email']; ?></a>
                            </div>
                            <div class="element">
                              <p>пн-пт с 9:00 до 18:00</p>
                            </div>
<?
$LocalBusiness = [
  '@context' => 'https://schema.org/',
  '@type' => 'LocalBusiness',
  'additionalType' => 'AutoRental',
    'address' => [      '@type' => 'PostalAddress',      'addressLocality' => 'Курск',      'streetAddress' => 'проспект Вячеслава Клыкова' ],
  'name' => 'Гильдия мастреров',
  'email' => 'mastters46.gmail.com',
  'openingHours' => [' 9:00-18:00'],
//  'priceRange' => '1100-4700RUB',
  'telephone' => [ '8 (904) 527-81-08' ],
  'image' => 'images/icon/logo_main.png',
  'url' => '//www.mastters.ru/',
    'geo' => [    '@type' => 'GeoCoordinates',    'latitude' => '51.721697',    'longitude' => '36.135424',    ],
];
$LocalBusiness = json_encode($LocalBusiness);
echo '<script type="application/ld+json">' .  $LocalBusiness .  '</script>';
?>
                        </div>
                        <div class="push30"></div>

                        <div class="footer-social">
                            <div class="title-h4 white">Мы в соцсетях</div>
                            <div class="social-links">
                                <!--a href="#"><i class="fa fa-facebook"></i></a-->
                                <a href="https://vk.com/gildenmeister"><i class="fa fa-vk"></i></a>
                                <!--a href="#"><i class="fa fa-odnoklassniki"></i></a-->
                                <!--a href="#"><i class="fa fa-twitter"></i></a-->
                                <!--a href="#"><i class="fa fa-instagram"></i></a-->
                                <!--a href="#"><i class="fa fa-youtube"></i></a-->
                            </div>
                        </div>
                        <div class="push30 visible-xs"></div>
                    </div>
                    <div class="col-lg-3 visible-lg visible-xlg">
                      <p>
                        Информация на этом сайте не является офертой, публичной офертой и предоставляется исключительно в информационно-ознакомительных целях.
                      </p>
                        <!--div class="footer-menu">
                            <div class="title-h4 white">Услуг и цены</div>
                            <ul class="">

                            </ul>
                        </div-->
                    </div>
                    <div class="col-lg-3 visible-lg visible-xlg">
                      <p>

                      </p>
                        <!--div class="footer-menu">
                            <div class="title-h4 white"></div>
                            <ul class="">
                            </ul>
                        </div-->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-form">
                            <div class="title-h4 white">Заявка на замер</div>
                            <div class="text">
                                Вызовите замерщика в любое удобное Вам время совершенно бесплатно!
                            </div>
                            <div class="push15"></div>

<?php
print '<a  class="btn block btn-info" href="https://api.whatsapp.com/send?phone=+79045278108"
            target="_blank" title="Написать в Whatsapp" rel="noopener noreferrer">Написать в Whatsapp</a>';
?>
                        </div>
                        <div class="push20"></div>
                        <div class="footer-payments">
                            <div class="title-h4 white">Мы принимаем к оплате</div>
                        <img src="/images/payments.png" alt="способы оплаты">

                        </div>
                    </div>
                </div>
                <div class="push25"></div>
            </div>

            <div class="footer-bottom">
                <div class="push25"></div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyright f12 white">© 2021. Все права защищены.</div>
                    </div>
                    <div class="col-sm-6 text-right-sm">
                    </div>
                </div>
                <div class="push20"></div>
            </div>
        </div>
    </div>
</div>
<span id="up"><i class="fa fa-angle-up"></i></span>
