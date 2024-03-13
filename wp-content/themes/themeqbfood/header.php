<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">

    <?php if( substr(get_post_meta($post->ID, '_yoast_wpseo_title', true), 0, 100) ): ?>
        <title><?php echo substr(get_post_meta($post->ID, '_yoast_wpseo_title', true), 0, 100); ?></title>
    <?php else: ?>
        <title><?php echo get_the_title(); ?></title>
    <?php endif; ?>
	
  <?php wp_head() ?>
</head>

<body>
  <!-- partners-page start -->
  <!-- header start -->
  <header class="qbc-header sticky-top">
    <div class="content-wrapper">
      <nav class="qbc-header__nb navbar navbar-expand-lg">
        <div class="qbc-header__brandwrap">
          <a href="https://qbcorporate.strat-staging.com/" class="navbar-brand">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/qbfood.svg" alt="" srcset="">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
          aria-controls="menu" aria-expanded="false" aria-label="toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle" id="about-dropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                about
              </a>
              <ul class="dropdown-menu" aria-labelledby="about-dropdown">
                <li><a href="https://qbcorporate.strat-staging.com/index.php/about-overview/" class="dropdown-item">overview</a></li>
                <li><a href="https://qbcorporate.strat-staging.com/index.php/about-history/" class="dropdown-item">history</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle" id="products-dropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                categories
              </a>
              <ul class="dropdown-menu" aria-labelledby="products-dropdown">
                <div class="qbc-ffoods">
                  <a href="https://qbcorporate.strat-staging.com/chilled-beef/" class="qbc-ffood">
                    <div class="qbc-ffood__outer">
                      <div class="qbc-ffood__image">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/chilled-beef-bk.png" alt="" />
                      </div>
                      <span></span>
                    </div>
                    <div class="qbc-ffood__text">
                      <span>Chilled Beef<img src="<?= get_template_directory_uri(); ?>/assets/images/icon-down.svg" alt="" /></span>
                    </div>
                  </a>
                  <a href="https://qbcorporate.strat-staging.com/chilled-lamb/" class="qbc-ffood">
                    <div class="qbc-ffood__outer">
                      <div class="qbc-ffood__image">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/chilled-lamb-bk.png" alt="" />
                      </div>
                      <span></span>
                    </div>
                    <div class="qbc-ffood__text">
                      <span>Chilled Lamb<img src="<?= get_template_directory_uri(); ?>/assets/images/icon-down.svg" alt="" /></span>
                    </div>
                  </a>
                  <a href="https://qbcorporate.strat-staging.com/frozen-meat/" class="qbc-ffood">
                    <div class="qbc-ffood__outer">
                      <div class="qbc-ffood__image">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/frozen-meat-bk.png" alt="" />
                      </div>
                      <span></span>
                    </div>
                    <div class="qbc-ffood__text">
                      <span>Frozen Meat<img src="<?= get_template_directory_uri(); ?>/assets/images/icon-down.svg" alt="" /></span>
                    </div>
                  </a>
                  <a href="https://qbcorporate.strat-staging.com/sausages-and-bacon/" class="qbc-ffood">
                    <div class="qbc-ffood__outer">
                      <div class="qbc-ffood__image">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/sausages-bacon-bk.png" alt="" />
                      </div>
                      <span></span>
                    </div>
                    <div class="qbc-ffood__text">
                      <span>Sausages & <br>Bacon<img src="<?= get_template_directory_uri(); ?>/assets/images/icon-down.svg" alt="" /></span>
                    </div>
                  </a>
                  <a href="https://qbcorporate.strat-staging.com/cheese-and-diary/" class="qbc-ffood">
                    <div class="qbc-ffood__outer">
                      <div class="qbc-ffood__image">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cheese-dairy-bk.png" alt="" />
                      </div>
                      <span></span>
                    </div>
                    <div class="qbc-ffood__text">
                      <span>Cheese & <br> Dairy<img src="<?= get_template_directory_uri(); ?>/assets/images/icon-down.svg" alt="" /></span>
                    </div>
                  </a>
                  <a href="https://qbcorporate.strat-staging.com/seafood-2/" class="qbc-ffood">
                    <div class="qbc-ffood__outer">
                      <div class="qbc-ffood__image">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/seafood-bk.png" alt="" />
                      </div>
                      <span></span>
                    </div>
                    <div class="qbc-ffood__text">
                      <span>Seafood<img src="<?= get_template_directory_uri(); ?>/assets/images/icon-down.svg" alt="" /></span>
                    </div>
                  </a>
                  <a href="https://qbcorporate.strat-staging.com/panty-essentials/" class="qbc-ffood">
                    <div class="qbc-ffood__outer">
                      <div class="qbc-ffood__image">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/panty-essentials-bk.png" alt="" />
                      </div>
                      <span></span>
                    </div>
                    <div class="qbc-ffood__text">
                      <span>Panty<br> Essentials<img src="<?= get_template_directory_uri(); ?>/assets/images/icon-down.svg" alt="" /></span>
                    </div>
                  </a>
                  <a href="https://qbcorporate.strat-staging.com/plant-based-products/" class="qbc-ffood">
                    <div class="qbc-ffood__outer">
                      <div class="qbc-ffood__image">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/plant-based-bk.png" alt="" />
                      </div>
                      <span></span>
                    </div>
                    <div class="qbc-ffood__text">
                      <span>Plant Based Products<img src="<?= get_template_directory_uri(); ?>/assets/images/icon-down.svg" alt="" /></span>
                    </div>
                  </a>
                  <a href="https://qbcorporate.strat-staging.com/assorted-frozen/" class="qbc-ffood">
                    <div class="qbc-ffood__outer">
                      <div class="qbc-ffood__image">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/assorted-frozen-bk.png" alt="" />
                      </div>
                      <span></span>
                    </div>
                    <div class="qbc-ffood__text">
                      <span>Assorted Frozen<img src="<?= get_template_directory_uri(); ?>/assets/images/icon-down.svg" alt="" /></span>
                    </div>
                  </a>
                  <a href="https://qbcorporate.strat-staging.com/dessert/" class="qbc-ffood">
                    <div class="qbc-ffood__outer">
                      <div class="qbc-ffood__image">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/dessert-bk.png" alt="" />
                      </div>
                      <span></span>
                    </div>
                    <div class="qbc-ffood__text">
                      <span>Dessert<img src="<?= get_template_directory_uri(); ?>/assets/images/icon-down.svg" alt="" /></span>
                    </div>
                  </a>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle" role="button" id="brand-dropdown" data-bs-toggle="dropdown"
                aria-expanded="false">
                brands
              </a>
              <ul class="dropdown-menu" aria-labelledby="brand-dropdown">
                <li class="na-navlink">
                  <a class="dropdown-item">
                    <span class="dropdown-m-drop"></span><span class="dropdown-item-link">Our house brands</span> </a>
                  <ul class="dropdown-menu dropdown-submenu dropdown-submenu--level2 border-0">
                    <li>
                      <a class="dropdown-item"><span class="dropdown-m-drop"></span><span class="dropdown-item-link">QB
                          FOOD</span></a>
                    </li>
                    <li>
                      <a href="https://qbcorporate.strat-staging.com/johnsonville/" class="dropdown-item"><span class="dropdown-m-drop"></span><span
                          class="dropdown-item-link">johnsonville</span></a>
                    </li>
                    <li>
                      <a class="dropdown-item"><span class="dropdown-m-drop"></span><span
                          class="dropdown-item-link">Spring Cottage</span></a>
                    </li>
                    <li>
                      <a href="https://qbcorporate.strat-staging.com/tradition/" class="dropdown-item"><span class="dropdown-m-drop"></span><span
                          class="dropdown-item-link">TRADITION</span></a>
                    </li>
                  </ul>
                </li>
                <li class="na-navlink">
                  <a class="dropdown-item"><span class="dropdown-m-drop"></span><span class="dropdown-item-link">Partner
                      Brands</span></a>
                  <ul class="dropdown-menu dropdown-submenu dropdown-submenu--level2">
                    <li>
                      <a class="dropdown-item"><span class="dropdown-item-link">Our
                          Partners For</span></a>
                    </li>
                    <li>

                      <a class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                          class="dropdown-item-link">Chilled Beef</span></a>
                      <ul class="dropdown-menu dropdown-submenu dropdown-submenu--level2">
                        <li>
                          <a class="dropdown-item"><span class="dropdown-item-link">Brand Partners</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/kilcoy/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">KILCOY</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/swift/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">SWIFT</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/swift-black-angus/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">SWIFT BLACK ANGUS</span></a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                          class="dropdown-item-link">Chilled Lamb</span></a>
                      <ul class="dropdown-menu dropdown-submenu dropdown-submenu--level2">
                        <li>
                          <a class="dropdown-item"><span class="dropdown-item-link">Brand Partners</span></a>
                        </li>
                        <li>
                          <a class="dropdown-item"><span class="dropdown-item-link">No Partners Yet</span></a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                          class="dropdown-item-link">Frozen Meat</span></a>
                      <ul class="dropdown-menu dropdown-submenu dropdown-submenu--level2">
                        <li>
                          <a class="dropdown-item"><span class="dropdown-item-link">Brand Partners</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/tradition/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">TRADITION</span></a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                          class="dropdown-item-link">Sausages & Bacon</span></a>
                      <ul class="dropdown-menu dropdown-submenu dropdown-submenu--level2">
                        <li>
                          <a class="dropdown-item"><span class="dropdown-item-link">Brand Partners</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/butchers-pride/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">BUTCHER’S PRIDE</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/johnsonville/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">JOHNSONVILLE</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/tradition/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">TRADITION</span></a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                          class="dropdown-item-link">Cheese & Dairy</span></a>
                      <ul class="dropdown-menu dropdown-submenu dropdown-submenu--level2">
                        <li>
                          <a class="dropdown-item"><span class="dropdown-item-link">Brand Partners</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/ehrmann/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">EHRMANN</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/emina-dessert-cheese/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">EMINA DESSERT CHEESE</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/garcia-baquero/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">GARCIA BAQUERO</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/happy-cow/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">HAPPY COW</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/kolios/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">KOLIOS</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/lemnos/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">LEMNOS</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/paysan-breton/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">PAYSAN BRETON</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/tatua/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">TATUA</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/tine/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">TINE</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/tradition/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">TRADITION</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/granarolo-fresh-cheese/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">GRANAROLO FRESH CHEESE</span></a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                          class="dropdown-item-link">Seafood</span></a>
                      <ul class="dropdown-menu dropdown-submenu dropdown-submenu--level2">
                        <li>
                          <a class="dropdown-item"><span class="dropdown-item-link">Brand Partners</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/tradition/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">TRADITION</span></a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                          class="dropdown-item-link">Pantry Essentials</span></a>
                      <ul class="dropdown-menu dropdown-submenu dropdown-submenu--level2">
                        <li>
                          <a class="dropdown-item"><span class="dropdown-item-link">Brand Partners</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/cape-herb-spice/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">CAPE HERB & SPICE</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/filippo-berio/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">FILIPPO BERIO</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/jack-links/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">JACK LINK’S</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/la-corvinia/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">LA CORVINIA</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/nibbles/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">NIBBLES</span></a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                          class="dropdown-item-link">Plant Based Products</span></a>
                      <ul class="dropdown-menu dropdown-submenu dropdown-submenu--level2">
                        <li>
                          <a class="dropdown-item"><span class="dropdown-item-link">Brand Partners</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/quorn/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">QUORN</span></a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                          class="dropdown-item-link">Assorted Frozen</span></a>
                      <ul class="dropdown-menu dropdown-submenu dropdown-submenu--level2">
                        <li>
                          <a class="dropdown-item"><span class="dropdown-item-link">Brand Partners</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/hyfun-foods/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">HY FUN FOODS</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/knead-it-bakery/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">KNEAD IT BAKERY</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/tradition/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">TRADITION</span></a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                          class="dropdown-item-link">Dessert</span></a>
                      <ul class="dropdown-menu dropdown-submenu dropdown-submenu--level2"
                        style="transform: translateY(-65%);">
                        <li>
                          <a class="dropdown-item"><span class="dropdown-item-link">Brand Partners</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/creapan/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">CREAPAN</span></a>
                        </li>
                        <li>
                          <a href="https://qbcorporate.strat-staging.com/filippo-berio/" class="dropdown-item"><span class="dropdown-m-drop"></span> <span
                              class="dropdown-item-link">FILPPO BERIO</span></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="https://qbcorporate.strat-staging.com/index.php/catalogue/" class="nav-link">catalogue</a>
            </li>
            <li class="nav-item">
              <a href="https://qbcorporate.strat-staging.com/index.php/contact/" class="nav-link">contact</a>
            </li>
          </ul>
          <div class="qbc-header__actions">
            <a href="" class="qbc-header__action qbc-header__action-estore">
              <svg xmlns="http://www.w3.org/2000/svg" width="44" height="49" viewBox="0 0 44 49" fill="none">
                <path
                  d="M43.7625 34.5489C43.6229 35.0138 43.512 35.4895 43.3344 35.9367C42.9888 36.8062 42.4213 37.4664 41.6889 37.9456C41.2514 38.2331 40.9058 38.1656 40.6966 37.761C40.4937 37.367 40.5983 37.0263 41.0136 36.7317C42.4118 35.7415 42.8113 34.1052 42.1613 32.4122C41.7809 31.4255 41.5114 30.3785 41.2482 29.3421C40.668 27.0528 39.9388 24.8309 38.9687 22.712C38.2172 21.0686 37.4563 19.4289 36.6732 17.7997C36.074 16.5468 34.5173 16.5184 33.8736 17.7323C33.6359 18.1831 33.582 18.6374 33.8324 19.1307C34.1844 19.8228 34.5014 20.5363 34.828 21.2426C35.0689 21.7608 34.9928 22.1299 34.6156 22.3428C34.2446 22.5523 33.9276 22.4067 33.6866 21.8992C33.3664 21.2248 33.0303 20.5575 32.7418 19.8654C32.4818 19.2372 32.0411 19.0243 31.4704 19.042C30.7666 19.0633 30.1293 19.6028 29.9803 20.3694C29.9295 20.6392 29.9613 20.9764 30.0659 21.2284C30.3766 21.9773 30.7444 22.7013 31.0836 23.436C31.3214 23.9542 31.2516 24.3269 30.8807 24.5399C30.5034 24.7564 30.1895 24.6144 29.9517 24.1104C29.6442 23.4644 29.3176 22.8256 29.0481 22.1583C28.766 21.4662 28.3031 21.1929 27.6531 21.239C27.0317 21.2852 26.4452 21.7927 26.2454 22.4529C26.1123 22.9001 26.1408 23.3295 26.3405 23.7448C26.6481 24.3908 26.9524 25.0403 27.2536 25.6898C27.4883 26.2009 27.4153 26.5701 27.0444 26.7901C26.6703 27.0102 26.3596 26.8718 26.1186 26.3536C24.3938 22.6729 22.6691 18.9923 20.9475 15.3081C20.8873 15.1804 20.8302 15.0526 20.77 14.9284C20.3039 13.97 19.6096 13.6471 18.8328 14.0304C18.0021 14.4421 17.5931 15.4643 17.8943 16.412C17.9609 16.6214 18.056 16.8201 18.1511 17.0153C20.0915 21.1645 22.0318 25.3101 23.9753 29.4592C24.0229 29.5586 24.0673 29.658 24.1117 29.7573C24.2543 30.0732 24.2543 30.3785 24.0292 30.6411C23.7883 30.918 23.5061 30.9251 23.2081 30.7476C22.1903 30.1478 21.1694 29.5479 20.1485 28.9445C20.0725 28.8984 19.9964 28.8558 19.9203 28.8097C19.0008 28.2808 18.1575 28.5612 17.7231 29.5373C17.2856 30.5133 17.5709 31.4716 18.4745 31.9756C21.6197 33.7254 24.768 35.4753 27.9194 37.2109C28.8326 37.7149 29.5269 38.4354 30.0152 39.4398C30.8427 41.1506 32.4786 41.7149 34.029 40.8311C35.2338 40.1461 36.4196 39.4221 37.6244 38.7371C37.8114 38.6306 38.0936 38.5454 38.2585 38.6306C38.4423 38.7229 38.6389 39.0104 38.6579 39.234C38.677 39.4469 38.5216 39.7877 38.3567 39.8906C36.9681 40.7318 35.5921 41.6084 34.1527 42.329C32.2916 43.2589 30.0025 42.3538 29.0133 40.3555C28.5567 39.4327 27.9512 38.769 27.0888 38.3502C26.4927 38.0627 25.922 37.7149 25.2657 37.3528C25.2657 37.6332 25.2657 37.8178 25.2657 38.0059C25.2657 40.6217 25.2657 43.2376 25.2657 45.8499C25.2657 47.8659 24.2575 49.0016 22.4694 49.0016C15.9032 49.0016 9.33713 49.0016 2.76785 49.0016C1.01139 48.9981 0 47.8588 0 45.8747C0 31.7449 0 17.6152 0 3.48896C0 1.43037 0.386801 0.773747 2.05132 0.0070986H4.44504C4.75892 0.234254 4.94915 0.521747 4.81916 0.96541C4.69234 1.39842 4.37846 1.45166 4.02971 1.44457C3.51609 1.43392 3.00564 1.43037 2.49202 1.44457C1.89279 1.46586 1.37283 1.90242 1.3221 2.54485C1.26186 3.3115 1.30625 4.09234 1.30625 4.86254H23.988C23.988 4.27691 23.988 3.72322 23.988 3.16598C23.988 1.91662 23.5537 1.43747 22.4345 1.43747C17.6375 1.43747 12.8405 1.43747 8.04357 1.43747C7.69798 1.43747 7.38093 1.40552 7.24777 0.968959C7.11461 0.528846 7.30167 0.237803 7.60604 0H23.2461C24.7965 0.560789 25.3006 1.80304 25.2848 3.5564C25.2404 9.24593 25.2689 14.939 25.2689 20.6285C25.2689 20.8095 25.2689 20.9906 25.2689 21.3064C26.2169 19.9222 27.3583 19.5495 28.6994 19.9116C29.5618 17.9275 30.3449 17.4661 32.466 17.6933C32.5198 17.5584 32.5737 17.4129 32.634 17.2709C33.1222 16.1032 33.9783 15.5104 35.0943 15.4324C36.1976 15.3543 37.1615 15.7979 37.6846 16.9124C38.8989 19.5034 40.1766 22.0766 41.169 24.7741C42.1899 27.5426 42.9064 30.4494 43.7561 33.296V34.5382L43.7625 34.5489ZM23.988 39.4789C23.988 38.5631 23.9975 37.6758 23.9753 36.7885C23.9753 36.682 23.8136 36.5436 23.7027 36.4797C21.6831 35.3759 19.6603 34.2827 17.6058 33.1682C17.5456 33.2285 17.4441 33.3386 17.3395 33.4451C16.1188 34.698 14.6794 35.4114 13.0276 35.493C8.57621 35.7131 5.2028 31.5426 5.80836 26.602C6.32198 22.4174 10.0346 19.3898 13.7536 20.1281C16.8195 20.735 19.0737 23.3615 19.5018 26.8114C19.5176 26.9392 19.6 27.1131 19.6983 27.1663C20.3071 27.5035 20.9285 27.8159 21.5467 28.1353C21.6767 28.2027 21.8067 28.2737 22.0287 28.3944C21.905 28.114 21.8384 27.9578 21.7655 27.8052C20.2722 24.6179 18.7757 21.4342 17.2951 18.2399C17.1366 17.8956 16.9654 17.7678 16.6166 17.7713C12.5996 17.7855 8.58255 17.782 4.56552 17.7784C3.44634 17.7784 2.84711 17.1112 2.84394 15.8654C2.84077 14.3498 2.84394 12.8343 2.84394 11.3223C2.84394 9.92739 3.40195 9.29917 4.63527 9.29917C8.36696 9.29917 12.0986 9.29917 15.8303 9.29917C17.498 9.29917 19.1625 9.29562 20.8302 9.29917C21.794 9.29917 22.3996 9.98063 22.4155 11.0596C22.4218 11.5388 22.4598 12.0215 22.4091 12.4935C22.203 14.4563 22.5962 16.2416 23.5981 17.8636C23.7185 18.0588 23.801 18.2824 23.9024 18.4919C23.9214 18.4777 23.9436 18.4635 23.9627 18.4493V6.37099H1.31576V39.4789H23.9849H23.988ZM23.9722 40.9731H1.28088C1.28088 42.691 1.27771 44.3805 1.28088 46.0664C1.28405 46.9998 1.77865 47.5571 2.61249 47.5571C9.28957 47.5606 15.9667 47.5606 22.6437 47.5571C23.4903 47.5571 23.9785 47.0034 23.9849 46.0238C23.9975 44.4301 23.988 42.8365 23.9849 41.2429C23.9849 41.1648 23.9753 41.0867 23.9658 40.9731H23.9722ZM21.1346 13.0827C21.1346 12.4829 21.1092 11.915 21.1409 11.3471C21.1694 10.8715 21.0363 10.7153 20.5924 10.7189C15.2818 10.7331 9.9744 10.7295 4.66381 10.7295C4.13434 10.7295 4.12482 10.7402 4.12165 11.3578C4.12165 12.8094 4.12165 14.2575 4.12165 15.7092C4.12165 16.3303 4.13434 16.3445 4.70186 16.3445C8.47475 16.3445 12.2445 16.3445 16.0174 16.3445H16.4771C16.0776 13.6577 18.6965 11.301 21.1282 13.0827H21.1346Z"
                  fill="white" />
                <path
                  d="M12.6069 46.167C11.995 46.167 11.3799 46.1848 10.768 46.1635C9.73443 46.128 9.08448 45.3862 9.07814 44.2611C9.07497 43.1395 9.72492 42.3586 10.7522 42.3338C12.0045 42.3054 13.26 42.3054 14.5124 42.3338C15.5428 42.3586 16.1737 43.1253 16.1674 44.2646C16.161 45.4039 15.5301 46.128 14.4838 46.1599C13.8561 46.1812 13.2315 46.1635 12.6037 46.1599L12.6069 46.167ZM12.6386 44.7331C13.2347 44.7331 13.8339 44.7331 14.4299 44.7331C14.7248 44.7331 14.9467 44.6089 14.9404 44.2469C14.9372 43.8884 14.7121 43.7606 14.4204 43.7606C13.2252 43.7606 12.033 43.7606 10.8378 43.7606C10.5493 43.7606 10.3305 43.8777 10.3305 44.254C10.3305 44.6337 10.5588 44.7296 10.8473 44.7296C11.4433 44.7296 12.0426 44.7296 12.6386 44.7296V44.7331Z"
                  fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M14.2851 23.5469C14.2851 23.8841 14.2883 24.2212 14.2915 24.5584C14.2915 24.7962 14.2915 25.0305 14.2915 25.2718C13.4322 25.4599 12.8045 25.9888 12.3892 26.8655C12.3892 26.8193 12.3828 26.798 12.3828 26.7732V23.6037C12.3828 23.5859 12.3828 23.5646 12.3892 23.5469H14.2883"
                  fill="#147D41" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12.0883 29.3477V32.6734H10.1797V32.5775C10.1797 32.07 10.1797 31.5624 10.1797 31.0584C10.1797 30.9803 10.1955 30.9519 10.2716 30.9342C11.0801 30.739 11.6762 30.2279 12.063 29.4115C12.0693 29.3973 12.0756 29.3796 12.0915 29.3512"
                  fill="#147D41" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M9.76533 25.457C8.45274 25.457 7.39062 26.646 7.39062 28.1155C7.39062 29.5849 8.45274 30.7739 9.76533 30.7739C11.0779 30.7739 12.14 29.5813 12.14 28.1155C12.14 26.6496 11.0747 25.457 9.76533 25.457ZM9.76533 28.8573C9.39755 28.8573 9.1027 28.5236 9.1027 28.1119C9.1027 27.7002 9.40072 27.3701 9.76533 27.3701C10.1299 27.3701 10.428 27.7037 10.428 28.1119C10.428 28.5201 10.1299 28.8573 9.76533 28.8573Z"
                  fill="#147D41" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M14.7106 25.457C13.3981 25.457 12.3359 26.646 12.3359 28.1155C12.3359 29.5849 13.3981 30.7739 14.7106 30.7739C16.0232 30.7739 17.0854 29.5813 17.0854 28.1155C17.0854 26.6496 16.0201 25.457 14.7106 25.457ZM14.7106 28.8573C14.346 28.8573 14.048 28.5236 14.048 28.1119C14.048 27.7002 14.346 27.3701 14.7106 27.3701C15.0753 27.3701 15.3733 27.7037 15.3733 28.1119C15.3733 28.5201 15.0753 28.8573 14.7106 28.8573Z"
                  fill="#147D41" />
              </svg>
              <span class="label">eStore</span>
            </a>
            <a href="" class="qbc-header__action">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <g clip-path="url(#clip0_1962_15308)">
                  <path
                    d="M2.62979 2.20971C-0.0745149 4.92351 -0.0745149 9.32631 2.62979 12.0401C5.17279 14.5736 9.19605 14.7349 11.9193 12.524L18.979 19.5742L19.9943 18.5589L12.9346 11.4992C15.155 8.77596 14.9937 4.74322 12.4507 2.20971C9.73691 -0.504091 5.3341 -0.504091 2.62031 2.20971H2.62979ZM11.4449 3.22501C13.5989 5.37897 13.5989 8.87085 11.4449 11.0248C9.29093 13.1788 5.79906 13.1788 3.6451 11.0248C1.49114 8.87085 1.49114 5.37897 3.6451 3.22501C5.79906 1.07105 9.29093 1.08054 11.4449 3.22501Z"
                    fill="#E8F2EC" />
                </g>
                <defs>
                  <clipPath id="clip0_1962_15308">
                    <rect width="19.3951" height="19.3951" fill="white" transform="matrix(0 -1 1 0 0.601562 19.5742)" />
                  </clipPath>
                </defs>
              </svg>
            </a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- header end -->