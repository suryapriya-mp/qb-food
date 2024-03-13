<?php
/*
Template Name: Template Brands
*/
get_header();
$page_post_id = get_the_ID();
$selected_color = get_field('page_color');
?>

<div class="qbc-clr <?php echo esc_attr(empty($selected_color) ? 'johnsonville' : $selected_color); ?>">
<?php
    $brand_story_title = get_field('brand_story_title',$page_post_id);
    $brand_story_content = get_field('brand_story_content',$page_post_id);
    $button_text = get_field('button_text',$page_post_id);
    $button_url = get_field('button_url',$page_post_id);
    $left_logo = get_field('left_logo',$page_post_id);
    $brand_story_image = get_field('brand_story_image',$page_post_id);
    $get_inspired_title = get_field('get_inspired_title',$page_post_id);
    $get_inspired_content = get_field('get_inspired_content',$page_post_id);
    $product_range_title = get_field('product_range_title',$page_post_id);
    $product_range_description = get_field('product_range_description',$page_post_id);
    $latest_update_title = get_field('latest_update_title',$page_post_id);
    $latest_update_description = get_field('latest_update_description',$page_post_id);
    $product_banner = get_field('product_banner',$page_post_id);
    $news_title = get_field('news_title',$page_post_id);
    $news_description = get_field('news_description',$page_post_id);
    $date = get_field('date',$page_post_id);
    $news_content = get_field('news_content',$page_post_id);
    $video_thumbnail = get_field('video_thumbnail',$page_post_id);
    $video_url = get_field('video_url',$page_post_id);

?>
    <!-- slick banner start -->
    <?php 
if (have_rows('brand_carousel')) :
    $carousel_count = count(get_field('brand_carousel'));

    if ($carousel_count > 1) : // Check if there's more than one carousel
?>
    <div class="qbc-mainbanner-slick">
<?php
    endif;

    while (have_rows('brand_carousel')) : the_row();
        $carousel_desk = get_sub_field('carousel_desk'); 
        $carousel_mob = get_sub_field('carousel_mob'); 
        $carousel_tab = get_sub_field('carousel_tab'); 
?>
        <div class="qbc-mainbanner-slickitem">
            <div class="qbc-mainbanner partners">
                <div class="qbc-mainbanner__bg">
                    <div class="qbc-mainbanner__bgimg desk-visible hide-mobile-tablet"
                        style="background-image: url('<?php echo esc_url($carousel_desk['url']); ?>');"
                        alt="<?php echo esc_attr($carousel_desk['alt']); ?>)"></div>
                    <div class="qbc-mainbanner__bgimg only-mobile-tablet"
                        style="background-image: url('<?php echo esc_url($carousel_tab['url']); ?>');"
                        alt="<?php echo esc_attr($carousel_tab['alt']); ?>)"></div>
                    <div class="qbc-mainbanner__bgimg only-mobile"
                        style="background-image: url('<?php echo esc_url($carousel_mob['url']); ?>');"
                        alt="<?php echo esc_attr($carousel_mob['alt']); ?>)"></div>
                </div>
                <div class="content-wrapper">
                    <!-- <div class="qbc-mainbanner__cnt">
                    <h3 class="qbc-mainbanner__head">we are a Johnsonville company<span></span></h3>
                    </div> -->
                </div>
            </div>
        </div>
<?php
    endwhile;

    if ($carousel_count > 1) : // Check if there's more than one carousel
?>
    </div>
<?php
    endif;
endif;
?>

  <!-- slick banner end -->
  <!-- brand story start -->
  <div class="qbc-brand-story">
    <div class="content-wrapper">
      <div class="qbc-brand-story__outer">
        <div class="qbc-brand-story__left">
          <div>
            <h2 class="qbc-heading">
            <?php echo esc_html( (!empty($brand_story_title ))?$brand_story_title :'' ); ?>
              <svg viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4.34227 16.2605L4.02052 12.7986L11.8549 12.1758L0.0546875 3.31015L2.54643 0.625L14.3915 9.49737L13.7031 2.43965L17.5792 2.15172L18.8662 15.1489L4.34227 16.2605Z"
                  fill=""></path>
              </svg>
            </h2>
            <?php echo ( (!empty($brand_story_content ))?$brand_story_content :'' ); ?>
            <?php if(!empty($button_text)): ?>
            <a href="<?php echo esc_html( (!empty($button_url ))?$button_url :'' ); ?>" class="qbc-brand-story__link"><?php echo esc_html( (!empty($button_text ))?$button_text :'' ); ?> >></a>
            <?php endif ?>
          </div>
          <?php if(!empty($left_logo)): ?>
          <div class="qbc-brand-story__logo">
            <img src="<?php echo esc_url($left_logo['url']); ?>" alt="<?php echo esc_attr($left_logo['alt']); ?>">
          </div>
          <?php endif ?>
        </div>
        <?php if(!empty($brand_story_image)): ?>
        <div class="qbc-brand-story__right">
          <img src="<?php echo esc_url($brand_story_image['url']); ?>" alt="<?php echo esc_attr($brand_story_image['alt']); ?>">
        </div>
        <?php endif ?>
      </div>
    </div>
  </div>
  <?php
  $get_inspired_icon_section = get_field('get_inspired_icon_section',$page_post_id);
  $video_sec_url = $get_inspired_icon_section['video_sec_url'];
  $video_title = $get_inspired_icon_section['video_title'];
  $recipe_url = $get_inspired_icon_section['recipe_url'];
  $recipe_title = $get_inspired_icon_section['recipe_title'];
  $article_url = $get_inspired_icon_section['article_url'];
  $article_title = $get_inspired_icon_section['article_title'];
  $catalogue_url = $get_inspired_icon_section['catalogue_url'];
  $catalogue_title = $get_inspired_icon_section['catalogue_title'];
  $disable = 'disable';
  ?>
  <!-- brand story end -->
  <!-- get inspired start -->
  <div class="qbc-inspired">
    <div class="content-wrapper">
      <div class="qbc-inspired__outer">
      <?php if(!empty($video_thumbnail)): ?>
        <div class="qbc-inspired__left">
          <img src="<?php echo esc_url($video_thumbnail['url']); ?>" alt="">
        </div>
        <?php endif ?>
        <div class="qbc-inspired__right">
          <h2 class="qbc-heading"><?php echo esc_html( (!empty($get_inspired_title ))?$get_inspired_title :'' ); ?></h2>
          <?php echo ( (!empty($get_inspired_content ))?$get_inspired_content :'' ); ?>
          <div class="qbc-inspired__iconouter">
            <!--  -->
            <div class="qbc-inspired__icontile">
              <a href="<?php echo ( (!empty($video_sec_url ))?$video_sec_url :'' ); ?>" class="qbc-inspired__icon <?php echo (!empty($video_sec_url)? '' : $disable) ?>">
                <!-- svg -->
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <path d="M28.4086 50.486H16.7817C14.2207 50.486 12.1406 48.257 12.1406 45.5127V27.2349"
                      stroke="#A20C33" stroke-width="2.43137" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M14.2576 25.7126H11.2807C10.373 25.7126 9.63281 24.8558 9.63281 23.7962C9.63281 22.7367 10.3676 21.8799 11.2807 21.8799H46.5072C47.4149 21.8799 48.1551 22.7367 48.1551 23.7962C48.1551 24.8558 47.4203 25.7126 46.5072 25.7126H43.1899"
                      stroke="#A20C33" stroke-width="2.43137" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M11.0117 19.8063C13.416 16.5004 20.5099 14.1035 28.8843 14.1035C37.2587 14.1035 44.3905 16.512 46.7785 19.8352"
                      stroke="#A20C33" stroke-width="2.43137" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M28.028 11.3425C27.1852 11.3425 26.499 10.6072 26.499 9.70403V9.35087C26.499 8.44768 27.1852 7.7124 28.028 7.7124H29.7623C30.6052 7.7124 31.2913 8.44768 31.2913 9.35087V9.70403C31.2913 10.6072 30.6052 11.3425 29.7623 11.3425"
                      stroke="#A20C33" stroke-width="2.43137" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M39.631 52.2878C45.56 52.2878 50.3664 47.1372 50.3664 40.7838C50.3664 34.4303 45.56 29.2798 39.631 29.2798C33.7019 29.2798 28.8955 34.4303 28.8955 40.7838C28.8955 47.1372 33.7019 52.2878 39.631 52.2878Z"
                      stroke="#A20C33" stroke-width="2.43137" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M39.6309 32.0771V40.7847H44.6447" stroke="#A20C33" stroke-width="2.43137"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <p><?php echo esc_html( (!empty($video_title ))?$video_title :'' ); ?></p>
              </a>
            </div>
            <!--  -->
            <div class="qbc-inspired__icontile">
              <a href="<?php echo ( (!empty($recipe_url ))?$recipe_url :'' ); ?>" class="qbc-inspired__icon <?php echo (!empty($recipe_url)? '' : $disable) ?>">
                <!-- svg -->
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                    <g>
                      <path d="M38.8291 24.3918V14.4424" stroke="#A20C33" stroke-width="2.17011" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M42.0957 14.4365V24.3921" stroke="#A20C33" stroke-width="2.17011" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M17.8477 39.9748V13.8784C17.8477 13.8784 21.1178 14.4109 21.2507 18.9491C21.3085 20.9551 21.3143 23.1158 21.3027 24.9113C21.3027 25.5181 21.3143 29.4991 21.3027 29.9448" stroke="#A20C33" stroke-width="2.17011" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M52.6366 31.8894V7.7124C36.8346 7.82385 30.4965 11.0557 30.4965 11.0557C30.4965 11.0557 23.9504 7.82385 8.14844 7.7124V42.6933C23.9504 42.8047 30.3925 46.7052 30.3925 46.7052C30.3925 46.7052 36.8346 42.8047 52.6366 42.6933V31.8956" stroke="#A20C33" stroke-width="2.17011" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M7.18555 48.0667C24.819 48.1781 29.499 51.4595 30.3483 52.2272C30.435 52.3077 30.5678 52.3077 30.6545 52.2272C31.4692 51.4409 35.9815 48.0667 53.6093 47.9614" stroke="#A20C33" stroke-width="2.17011" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M45.2347 14.4365V25.197C45.2347 26.2124 44.4662 27.0358 43.5187 27.0358C42.5712 27.0358 41.8027 27.8593 41.8027 28.8746V39.9818" stroke="#A20C33" stroke-width="2.17011" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M30.499 11.0571V46.7005" stroke="#A20C33" stroke-width="2.17011" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                  </svg>
                </div>
                <p><?php echo esc_html( (!empty($recipe_title ))?$recipe_title :'' ); ?></p>
              </a>
            </div>
            <!--  -->
            <div class="qbc-inspired__icontile">
              <a href="<?php echo ( (!empty($article_url ))?$article_url :'' ); ?>" class="qbc-inspired__icon <?php echo (!empty($article_url)? '' : $disable) ?>">
                <!-- svg -->
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                    <path
                      d="M6.4354 47.8721V48.9868C6.4354 50.8365 7.83573 52.3371 9.56186 52.3371H51.2518C52.9779 52.3371 54.3782 50.8365 54.3782 48.9868V47.8721H6.42969H6.4354Z"
                      stroke="#A20C33" stroke-width="2.14681" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9.56055 19.8647H14.7732" stroke="#A20C33" stroke-width="2.14681" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M9.56055 47.7865V18.7487C9.56055 16.899 10.9609 15.3984 12.687 15.3984H14.7732"
                      stroke="#A20C33" stroke-width="2.14681" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M35.863 40.4669L48.1916 27.2618L43.3847 22.1108L31.0618 35.3221L29.3643 42.286L35.863 40.4669Z"
                      stroke="#A20C33" stroke-width="2.14681" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M51.8568 23.3361L47.0557 18.1912L48.7075 16.4212C49.9649 15.0614 52.0797 15.1472 53.3886 16.5559C54.7032 17.9707 54.7604 20.2247 53.5029 21.5844L51.8625 23.3422L51.8568 23.3361Z"
                      stroke="#A20C33" stroke-width="2.14681" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M47.0602 18.1851L43.3945 22.1133L48.2 27.2627L51.8657 23.3346L47.0602 18.1851Z"
                      stroke="#A20C33" stroke-width="2.14681" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M31.0635 35.3218L35.8646 40.4666" stroke="#A20C33" stroke-width="2.14681"
                      stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M46.0467 19.2696V7.66309H14.7764V47.8725" stroke="#A20C33" stroke-width="2.14681"
                      stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M46.0469 47.8715V29.5645" stroke="#A20C33" stroke-width="2.14681" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M19.9863 14.3633H40.8313" stroke="#A20C33" stroke-width="2.14681" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M19.9863 22.186H35.6186" stroke="#A20C33" stroke-width="2.14681" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M19.9863 26.6499H31.4519" stroke="#A20C33" stroke-width="2.14681" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M19.9863 31.1201H27.2795" stroke="#A20C33" stroke-width="2.14681" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </div>
                <p><?php echo ( (!empty($article_title ))?$article_title :'' ); ?></p>
              </a>
            </div>
            <!--  -->
            <div class="qbc-inspired__icontile">
              <a href="<?php echo ( (!empty($catalogue_url ))?$catalogue_url :'' ); ?>" class="qbc-inspired__icon <?php echo (!empty($catalogue_url)? '' : $disable) ?>">
                <!-- svg -->
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <path d="M17.7129 34.0724V11.475C17.7129 10.8051 18.219 10.2681 18.8392 10.2681H39.0239"
                      stroke="#A20C33" stroke-width="1.86367" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M44.859 16.5161V48.5299C44.859 49.1998 44.3529 49.7369 43.7326 49.7369H18.8392C18.214 49.7369 17.7129 49.1945 17.7129 48.5299V45.01"
                      stroke="#A20C33" stroke-width="1.86367" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M40.1616 16.3086L44.8605 16.516L39.0254 10.2632L39.2933 15.4207C39.3181 15.9152 39.7002 16.298 40.1567 16.3033L40.1616 16.3086Z"
                      stroke="#A20C33" stroke-width="1.86367" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M25.3461 34.0718H37.1056C37.1056 40.1066 32.5308 45.0089 26.8992 45.0089H15.1396C15.1396 38.9741 19.7144 34.0718 25.3461 34.0718Z"
                      stroke="#A20C33" stroke-width="1.86367" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M21.6936 39.8881H20.7806V41.3822C20.7806 41.5949 20.7359 41.7597 20.6367 41.8661C20.5424 41.9777 20.4233 42.0309 20.2795 42.0309C20.1356 42.0309 20.0066 41.9777 19.9173 41.8661C19.823 41.7544 19.7783 41.5949 19.7783 41.3875V37.32C19.7783 37.0861 19.8279 36.9159 19.9272 36.8149C20.0264 36.7139 20.1901 36.666 20.4085 36.666H21.6886C22.0657 36.666 22.3585 36.6979 22.5619 36.7617C22.7653 36.8202 22.939 36.9212 23.0829 37.0595C23.2317 37.1977 23.3409 37.3679 23.4153 37.5699C23.4897 37.772 23.5294 38.0006 23.5294 38.2505C23.5294 38.7875 23.3756 39.1969 23.068 39.4734C22.7604 39.7499 22.2989 39.8881 21.6886 39.8881H21.6936ZM21.4504 37.4689H20.7806V39.0799H21.4504C21.6837 39.0799 21.8821 39.0534 22.0409 39.0002C22.1997 38.947 22.3188 38.8619 22.4031 38.7397C22.4875 38.6174 22.5272 38.4632 22.5272 38.2664C22.5272 38.0325 22.4627 37.8464 22.3337 37.6975C22.1898 37.5433 21.897 37.4636 21.4504 37.4636V37.4689Z"
                      fill="#A20C33" />
                    <path
                      d="M24.9941 36.666H26.2941C26.6315 36.666 26.9242 36.6979 27.1624 36.767C27.4055 36.8362 27.6238 36.9585 27.8223 37.1445C28.3334 37.6124 28.5914 38.3302 28.5914 39.2926C28.5914 39.6116 28.5666 39.8988 28.512 40.1593C28.4624 40.4198 28.383 40.6591 28.2738 40.8665C28.1647 41.0738 28.0307 41.2652 27.862 41.4301C27.7281 41.5577 27.5842 41.6587 27.4303 41.7385C27.2716 41.8129 27.1029 41.8714 26.9242 41.898C26.7456 41.9299 26.5422 41.9458 26.3139 41.9458H25.0139C24.8353 41.9458 24.6964 41.9192 24.6021 41.8554C24.5128 41.7969 24.4483 41.7119 24.4235 41.6055C24.3937 41.4992 24.3838 41.3609 24.3838 41.1908V37.32C24.3838 37.0914 24.4334 36.9212 24.5277 36.8202C24.6269 36.7192 24.7807 36.666 24.9941 36.666ZM25.3811 37.5114V41.0951H26.1353C26.299 41.0951 26.433 41.0951 26.5273 41.0791C26.6216 41.0685 26.7208 41.0472 26.82 41.0047C26.9193 40.9675 27.0086 40.9143 27.083 40.8452C27.4155 40.5421 27.5841 40.0211 27.5841 39.282C27.5841 38.7609 27.5097 38.3728 27.3658 38.1122C27.217 37.8517 27.0384 37.6869 26.825 37.6178C26.6116 37.5486 26.3487 37.5114 26.046 37.5114H25.3861H25.3811Z"
                      fill="#A20C33" />
                    <path
                      d="M32.4104 37.4902H30.4455V38.8407H32.0878C32.2417 38.8407 32.3558 38.8779 32.4302 38.9523C32.5046 39.0268 32.5443 39.1225 32.5443 39.2448C32.5443 39.3671 32.5046 39.4628 32.4302 39.5372C32.3558 39.6116 32.2417 39.6435 32.0928 39.6435H30.4504V41.3822C30.4504 41.6055 30.4058 41.765 30.3115 41.8714C30.2172 41.9777 30.0982 42.0309 29.9543 42.0309C29.8104 42.0309 29.6863 41.9777 29.5921 41.8714C29.4978 41.765 29.4531 41.6002 29.4531 41.3822V37.32C29.4531 37.1658 29.473 37.0435 29.5176 36.9425C29.5623 36.8468 29.6268 36.7724 29.7161 36.7298C29.8054 36.6873 29.9245 36.666 30.0634 36.666H32.4153C32.5741 36.666 32.6932 36.7032 32.7676 36.7777C32.847 36.8521 32.8817 36.9531 32.8817 37.0754C32.8817 37.1977 32.842 37.2987 32.7676 37.3732C32.6882 37.4476 32.5741 37.4848 32.4153 37.4848L32.4104 37.4902Z"
                      fill="#A20C33" />
                  </svg>
                </div>
                <p><?php echo esc_html( (!empty($catalogue_title ))?$catalogue_title :'' ); ?></p>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- heading starts -->
      <div class="qbc-head">
        <div class="qbc-head__left">
          <p><?php echo esc_html( (!empty($product_range_title ))?$product_range_title :'' ); ?>
          </p>
        </div>
        <div class="qbc-head__right">
          <p><?php echo esc_html( (!empty($product_range_description ))?$product_range_description :'' ); ?></p>
        </div>
      </div>
      <!-- headingt end -->
    </div>
  </div>
  <!-- get inspired end -->
  <!-- tab start -->
  <div class="qbc-product-tab">
    <div class="content-wrapper">

      <div class="qbc-product-tab__slick-out">
        <div class="qbc-product-tab__arrowl">
          <img src="<?= get_template_directory_uri(); ?>/assets/images/tab-arrow.png" alt="">
        </div>
        <div class="qbc-product-tab__tab-out">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <?php
            $index = 0;
            while (have_rows('tabs')) {
            the_row();
            $tab_name = get_sub_field('tab_name');
            $tab_name_cleaned = preg_replace("/[\[\]()&]+/", "", $tab_name);
            $tab_image = get_sub_field('tab_image');
            $tabId = 'myTab-' . strtolower(str_replace(" ", "-", $tab_name_cleaned));
            $isActive = $index === 0 ? 'active' : '';
            ?>
            <li class="nav-item" role="presentation">
              <a href="#<?php echo $tabId; ?>" class="nav-link <?php echo $isActive; ?>" id="<?php echo $tabId; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $tabId; ?>"
                type="button" role="tab" aria-controls="<?php echo $tabId; ?>" aria-selected="<?php echo $isActive ? 'true' : 'false'; ?>">
                <?php if(!empty($tab_image)): ?>
                <div class="qbc-product-tab__prdct">
                  <img src="<?php echo esc_url($tab_image['url']); ?>" alt="<?php echo esc_attr($tab_image['alt']); ?>">
                </div>
                <?php endif ?>
                <p><?php echo ( (!empty($tab_name ))?$tab_name :'' ); ?></p>
                </a>
            </li>  
            <?php
            $index++;
            }
            ?>
          </ul>
        </div>
        <div class="qbc-product-tab__arrowr">
          <img src="<?= get_template_directory_uri(); ?>/assets/images/tab-arrow.png" alt="">
        </div>
      </div>
      <div class="tab-content" id="myTabContent">
        <?php
            $index = 0;
            while (have_rows('tabs')) {
                the_row();
                $tab_name = get_sub_field('tab_name');
                $tab_name_cleaned = preg_replace("/[\[\]()&]+/", "", $tab_name);
                $tab_content = get_sub_field('tab_content');
                $product_thumbnail = $tab_content['product_thumbnail'];
                $product_main_title = $tab_content['product_main_title'];
                $product_sub_title = $tab_content['product_sub_title'];
                $product_description = $tab_content['product_description'];
                $product_read_more_text = $tab_content['product_read_more_text'];
                $product_read_more_link = $tab_content['product_read_more_link'];
                $first_link_title = $tab_content['first_link_title'];
                $second_link_title = $tab_content['second_link_title'];
                $first_link_url = $tab_content['first_link_url'];
                $second_link_url = $tab_content['second_link_url'];
                $all_products_title = $tab_content['all_products_title'];
                $tabId = 'myTab-' . strtolower(str_replace(" ", "-", $tab_name_cleaned));
                $isActive = $index === 0 ? 'active show' : ''; // Check if it's the first tab
            ?>
        <div class="tab-pane fade <?php echo $isActive; ?>" id="<?php echo $tabId; ?>" role="tabpanel" aria-labelledby="<?php echo $tabId; ?>-tab">
          <div class="qbc-product-tab__out">
          <?php if(!empty($product_thumbnail)): ?>
            <div class="qbc-product-tab__left">
              <img src="<?php echo esc_url($product_thumbnail['url']); ?>" alt="<?php echo esc_attr($tab_image['alt']); ?>">
            </div>
            <?php endif ?>
            <div class="qbc-product-tab__right">
              <div class="qbc-product-tab__heading">
                <p><?php echo esc_html( (!empty($all_products_title ))?$all_products_title :'' ); ?> </p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                  <g clip-path="url(#clip0_992_2699)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M4.52974 18.3452L4.18982 14.2833L12.4667 13.5527L0 3.1505L2.63247 0L15.1466 10.41L14.4193 2.12914L18.5142 1.79131L19.874 17.041L4.52974 18.3452Z"
                      fill="#A20C33" />
                  </g>
                  <defs>
                    <clipPath id="clip0_992_2699">
                      <rect width="19.874" height="18.3452" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <h2 class="qbc-product-tab__title"><?php echo esc_html( (!empty($product_main_title ))?$product_main_title :'' ); ?></h2>
              <?php if(!empty($product_sub_title)) : ?>
              <h5 class="qbc-product-tab__sub-red"><?php echo esc_html( (!empty($product_sub_title ))?$product_sub_title :'' ); ?></h5> 
              <?php endif ?>
              <div class="qbc-product-tab__txt">
              <?php echo ( (!empty($product_description ))?$product_description :'' ); ?>
              </div>
              <?php if(!empty($product_read_more_text)): ?>
              <a href="<?php echo esc_html( (!empty($product_read_more_link ))?$product_read_more_link :'' ); ?>" class="qbc-brand-story__link"><?php echo esc_html( (!empty($product_read_more_text ))?$product_read_more_text :'' ); ?> &gt;&gt;</a>
              <?php endif ?>
              <?php
                $tabs = get_field('tabs'); // Assuming 'tabs' is the repeater field name

                if ($tabs) :
                ?>
                <ul class="nav nav-tabs qbc-product-tab__list" role="tablist">
                    <?php
                    foreach ($tabs as $tab) :
                    $tab_name = $tab['tab_name'];
                    $tab_name_cleaned = preg_replace("/[\[\]()&]+/", "", $tab_name);
                    $tabId = 'myTab-' . strtolower(str_replace(" ", "-", $tab_name_cleaned));
                    ?>
                    <li class="nav-item" role="presentation">
                        <a href="#<?php echo $tabId; ?>"><?php echo ($tab_name); ?></a>
                    </li>
                    <?php
                    endforeach;
                    ?>
                </ul>
                <?php
                endif;
                ?>

            </div>
          </div>
        </div>
        <?php 
        $index++;
        } ?>
      </div>
    </div>
  </div>
  <!-- tab end -->
  <!-- atest-news start -->
  <div class="qbc-latest-news">
    <div class="content-wrapper">
      <!-- heading starts -->
      <div class="qbc-head">
        <div class="qbc-head__left">
          <p><?php echo esc_html( (!empty($latest_update_title ))?$latest_update_title :'' ); ?>
          </p>
        </div>
        <div class="qbc-head__right">
        <?php echo esc_html( (!empty($latest_update_description ))?$latest_update_description :'' ); ?>
        </div>
      </div>
      <!-- headingt end -->
      <?php if(!empty($product_banner)): ?>
      <div class="qbc-latest-news__imgsec">
        <img src="<?php echo esc_url($product_banner['url']); ?>" alt="<?php echo esc_attr($product_banner['alt']); ?>">
      </div>
      <?php endif ?>
      <div class="qbc-latest-news__textsec">
        <div class="qbc-latest-news__textleft">
          <p class="qbc-latest-news__subtitle"><?php echo esc_html( (!empty($news_title ))?$news_title :'' ); ?></p>
          <?php echo ( (!empty($news_description ))?$news_description :'' ); ?>
          <span class="qbc-latest-news__smalltitle"><?php echo esc_html( (!empty($date ))?$date :'' ); ?></span>
        </div>
        <div class="qbc-latest-news__textright">
          <p><?php echo ( (!empty($news_content ))?$news_content :'' ); ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- atest-news end -->
</div>

  <?php
if( have_posts() ) : 

     the_content();
    //echo get_the_content();
    
endif;
?>

  <?php get_footer(); ?>