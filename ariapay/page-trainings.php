<?php

// Template Name: صفحه اصلی آموزش‌ها


get_header();



$terms = get_terms( array(
  'taxonomy' => 'category-trainings',
  // Set to true if you want to hide terms with no posts assigned to them
  'hide_empty' => false,
) );



?>



<section>
      <!-- International payment training Start  -->
      <section class="bg-blue-11 dark:bg-dark-50">
        <div class="container relative">
          <!-- BreadCrump Start -->
          <div class="flex items-center mt-[60px] md:mt-[116px] md:pt-[36px] pt-[11px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27" fill="none" class="hidden md:block dark:hidden">
              <path d="M2.86207 14.5145C2.46029 11.7222 2.25939 10.326 2.83167 9.13228C3.40396 7.93856 4.62205 7.21295 7.05823 5.76173L8.5246 4.88822C10.7369 3.57037 11.8431 2.91144 13.0653 2.91144C14.2876 2.91144 15.3938 3.57037 17.6061 4.88822L19.0724 5.76173C21.5086 7.21295 22.7267 7.93856 23.299 9.13228C23.8713 10.326 23.6704 11.7222 23.2686 14.5145L22.9734 16.5659C22.4573 20.1528 22.1992 21.9462 20.955 23.0176C19.7107 24.089 17.886 24.089 14.2365 24.089H11.8941C8.24465 24.089 6.41992 24.089 5.17567 23.0176C3.93142 21.9462 3.67336 20.1528 3.15725 16.5659L2.86207 14.5145Z" stroke="#4F4F4F" stroke-width="1.58831"></path>
              <path d="M9.88477 17.7355C10.7852 18.4029 11.8803 18.7944 13.0614 18.7944C14.2425 18.7944 15.3376 18.4029 16.238 17.7355" stroke="#4F4F4F" stroke-width="1.58831" stroke-linecap="round"></path>
            </svg>
            <svg class="block md:hidden dark:hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
              <path d="M1.57865 9.13871C1.32569 7.38067 1.19921 6.50166 1.55952 5.7501C1.91982 4.99853 2.68673 4.54169 4.22055 3.62801L5.14377 3.07805C6.53663 2.24833 7.23306 1.83347 8.0026 1.83347C8.77214 1.83347 9.46858 2.24833 10.8614 3.07804L11.7847 3.628C13.3185 4.54169 14.0854 4.99853 14.4457 5.7501C14.806 6.50166 14.6795 7.38068 14.4266 9.13871L14.2407 10.4303C13.9158 12.6886 13.7533 13.8177 12.9699 14.4923C12.1865 15.1668 11.0377 15.1668 8.73999 15.1668H7.26522C4.96752 15.1668 3.81867 15.1668 3.03529 14.4923C2.25191 13.8177 2.08944 12.6886 1.7645 10.4303L1.57865 9.13871Z" stroke="#4F4F4F"></path>
              <path d="M6 11.1667C6.56692 11.5869 7.25638 11.8333 8 11.8333C8.74362 11.8333 9.43308 11.5869 10 11.1667" stroke="#4F4F4F" stroke-linecap="round"></path>
            </svg>
            <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27" fill="none">
              <path d="M2.86207 14.5145C2.46029 11.7222 2.25939 10.326 2.83167 9.13228C3.40396 7.93856 4.62205 7.21295 7.05823 5.76173L8.5246 4.88822C10.7369 3.57037 11.8431 2.91144 13.0653 2.91144C14.2876 2.91144 15.3938 3.57037 17.6061 4.88822L19.0724 5.76173C21.5086 7.21295 22.7267 7.93856 23.299 9.13228C23.8713 10.326 23.6704 11.7222 23.2686 14.5145L22.9734 16.5659C22.4573 20.1528 22.1992 21.9462 20.955 23.0176C19.7107 24.089 17.886 24.089 14.2365 24.089H11.8941C8.24465 24.089 6.41992 24.089 5.17567 23.0176C3.93142 21.9462 3.67336 20.1528 3.15725 16.5659L2.86207 14.5145Z" stroke="#CDCDCD" stroke-width="1.58831"></path>
              <path d="M9.88477 17.7355C10.7852 18.4029 11.8803 18.7944 13.0614 18.7944C14.2425 18.7944 15.3376 18.4029 16.238 17.7355" stroke="#CDCDCD" stroke-width="1.58831" stroke-linecap="round"></path>
            </svg>
            <a class="mr-[10px] dark:text-gray-500 text-black-15 font-semibold text-[12px] md:text-[19px] leading-[27px]">
              آریا پی
            </a>
            <svg class="mr-[11px] hidden md:block dark:hidden" xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27" fill="none">
              <path d="M16.1775 6.08789L9.82422 13.5L16.1775 20.9122" stroke="#4F4F4F" stroke-width="1.58831" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <svg class="block md:hidden mr-[7px] dark:hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
              <path d="M10 3.83334L6 8.50001L10 13.1667" stroke="#4F4F4F" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <svg class="hidden dark:block mr-[7px] md:mr-[11px]" xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27" fill="none">
              <path d="M16.1775 6.08786L9.82422 13.5L16.1775 20.9121" stroke="#CDCDCD" stroke-width="1.58831" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <p class="mr-[14px] text-black-11 dark:text-dark-43 text-[12px] md:text-[19px] leading-[27px] font-semibold">
              آموزش های اریاپی
            </p>
          </div>
          <!-- BreadCrump End -->
          <div class="grid grid-cols-2 gap-x-8">
            <div class="md:pt-[76px] col-span-2 md:col-span-1 order-2 md:order-1">
              <h2 class="md:font-semibold font-bold text-[19px] md:text-[30px] text-center md:text-start dark:text-dark-21 leading-[25px] text-black-7 mt-[22px] md:mt-6">
                آموزش های تخصصی و عمومی آریا پی
              </h2>
              <div class="flex items-center justify-center mt-[20px] md:mt-6 pb-[80px] md:pb-[62px]">
                <p class="font-medium text-sm md:text-lg text-justify dark:text-dark-62 leading-[27px] text-black-350">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                  استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                  مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                  تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                  کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                  آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم
                  افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص
                  طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این
                  صورت می توان امید داشت که تمام و دشواری موجود
                </p>
              </div>
            </div>
            <div class="md:pb-5 col-span-2 md:col-span-1 order-1 md:order-2">
              <img src="<?=RTARIA_IMAGES?>/blog-17.png" class="block dark:hidden">
              <img src="<?=RTARIA_IMAGES?>/blog16.png" class="hidden dark:block">
            </div>
          </div>

          <div class="absolute w-[calc(100%-32px)] md:w-[calc(100%-100px)] md:right-[50px] lg:right-[100px] 2xl:right-[220px] lg:w-[calc(100%-200px)] 2xl:w-[calc(100%-440px)] bg-white-100 dark:bg-dark-11 py-3 md:py-5 px-2 md:px-6 rounded-lg bottom-[-80px] custom-box-shadow">
            <form action="<?=get_site_url();?>" class="flex items-stretch md:items-center gap-2 md:gap-[18px] flex-col md:flex-row">
              <div class="flex bg-dark-53 dark:bg-dark-1 items-center gap-5 flex-1 border dark:border-none rounded-lg border-dark-32 py-2 md:py-[10px] px-[14px]">
                <div class="bg-blue-12 p-2 md:p-3 rounded-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="31" class="hidden md:block" height="30" viewBox="0 0 31 30" fill="none">
                    <circle cx="14.875" cy="14.375" r="11.875" stroke="#2860E6" stroke-width="1.875"></circle>
                    <path d="M23.625 23.125L28 27.5" stroke="#2860E6" stroke-width="1.875" stroke-linecap="round"></path>
                  </svg>
                  <svg class="block md:hidden" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                    <circle cx="11.0253" cy="11.0253" r="9.02043" stroke="#2860E6" stroke-width="1.42428"></circle>
                    <path d="M17.6719 17.6719L20.9952 20.9952" stroke="#2860E6" stroke-width="1.42428" stroke-linecap="round"></path>
                  </svg>
                </div>
                <input name="s" type="text" class="flex-1 text-[13px] md:text-base bg-transparent focus:outline-none placeholder:text-dark-71 font-semibold placeholder:dark:text-dark-2" placeholder="مطلب مورد نظرتان را جستجو کنید">
              </div>
              <button type="submit" class="font-semibold hover-element-blue cursor-pointer text-sm md:text-lg leading-[27px] text-dark-53 bg-blue-500 py-3 md:py-[22px] px-10 rounded-lg">
                جستجو مطلب
              </button>
            </form>
          </div>
        </div>
      </section>
      <!-- International payment training End  -->
      <!-- Education category Start  -->
      <section class="bg-white-900 dark:bg-blue-800 md:pt-[106px] pt-[121px]">
        <div class="container">
          <div class="md:pt-[28px] pt-0 pb-[32px]">
            <p class="md:text-[28px] text-[20px] leading-[25px] text-center dark:text-white-100">
              <span class="text-blue-500">دسته بندی </span> آموزش های آریا پی
            </p>
          </div>
          <div class="md:bg-white-100 bg-white-900 dark:bg-transparent md:py-8 py-[24px] flex items-center">
            <div class="px-[29px] hidden md:block">
              <button class="px-3 py-[14px] bg-blue-100 dark:bg-dark-1 rounded-full" onclick="training.slidePrev()">
                <svg class="block dark:hidden" width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.93891 0.960226C10.2127 0.686435 10.6566 0.686435 10.9304 0.960226L16.5391 6.56892C16.8129 6.84271 16.8129 7.28662 16.5391 7.56041L10.9304 13.1691C10.6566 13.4429 10.2127 13.4429 9.93891 13.1691C9.66512 12.8953 9.66512 12.4514 9.93891 12.1776L14.3508 7.76575H1.08683C0.69963 7.76575 0.385742 7.45186 0.385742 7.06467C0.385742 6.67747 0.69963 6.36358 1.08683 6.36358H14.3508L9.93891 1.95171C9.66512 1.67792 9.66512 1.23402 9.93891 0.960226Z" fill="#525FE1"></path>
                </svg>
                <svg class="hidden dark:block" width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.939.96a.7.7 0 0 1 .991 0l5.61 5.609a.7.7 0 0 1 0 .991l-5.61 5.61a.701.701 0 1 1-.991-.992l4.412-4.412H1.087a.701.701 0 1 1 0-1.402H14.35L9.939 1.952a.7.7 0 0 1 0-.992" fill="#fff"></path>
                </svg>
              </button>
            </div>

            <div class="swiper training flex swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
              <div class="swiper-wrapper py-2" id="swiper-wrapper-ed5d78ddc11053d33" aria-live="polite">

              <?php 
              if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
                foreach ( $terms as $term ) {
              ?>
                <a href="<?=esc_url(get_term_link( $term ))?>" class="swiper-slide border hover-shadow border-dark-61 rounded-md swiper-slide-active" role="group" aria-label="1 / 6" data-swiper-slide-index="<?=$x?>" style="width: 320.286px; margin-left: 10px;">
                  <div class="flex flex-col items-center justify-center pt-[25px] pb-5">
                    <?php 
                    // For Later Icon Adding
                    $term_image = get_field('term_icon',$term->term_id);
                    if ($term_image) {
                      echo $term_image;
                    }else{
                    ?>
                    <svg class="block dark:hidden" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.913 4.666a6.9 6.9 0 0 1 5.913 0l8.921 4.183c1.941.91 1.941 4.06 0 4.969L19.826 18a6.9 6.9 0 0 1-5.913 0l-8.921-4.182c-1.941-.91-1.941-4.06 0-4.97z" stroke="#2860E6" stroke-width="2.063"></path>
                      <path opacity=".5" d="M3.536 11.333v7.333m22.667-3.333v6.834c0 1.344-.671 2.602-1.847 3.253-1.958 1.085-5.092 2.58-7.487 2.58-2.394 0-5.528-1.495-7.486-2.58-1.176-.65-1.847-1.91-1.847-3.253v-6.834" stroke="#2860E6" stroke-width="2.063" stroke-linecap="round"></path>
                    </svg>
                    <svg class="hidden dark:block" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.913 4.666a6.9 6.9 0 0 1 5.913 0l8.921 4.183c1.941.91 1.941 4.06 0 4.969L19.826 18a6.9 6.9 0 0 1-5.913 0l-8.921-4.182c-1.941-.91-1.941-4.06 0-4.97z" stroke="#fff" stroke-width="2.063"></path>
                      <path opacity=".5" d="M3.536 11.333v7.333m22.667-3.333v6.834c0 1.344-.671 2.602-1.847 3.253-1.958 1.085-5.092 2.58-7.487 2.58-2.394 0-5.528-1.495-7.486-2.58-1.176-.65-1.847-1.91-1.847-3.253v-6.834" stroke="#fff" stroke-width="2.063" stroke-linecap="round"></path>
                    </svg>
                    <?php } ?>
                    <p class="text-lg leading-[27px] dark:text-dark-14 pt-4">
                      <?=$term->name;?>
                    </p>
                  </div>
                </a>
                <?php
              }
            } else {
              ?>
              <a href="#" class="swiper-slide border hover-shadow border-dark-61 rounded-md swiper-slide-active" role="group" aria-label="1 / 6" data-swiper-slide-index="0" style="width: 320.286px; margin-left: 10px;">
                  <div class="flex flex-col items-center justify-center pt-[25px] pb-5">
                    <svg class="block dark:hidden" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.913 4.666a6.9 6.9 0 0 1 5.913 0l8.921 4.183c1.941.91 1.941 4.06 0 4.969L19.826 18a6.9 6.9 0 0 1-5.913 0l-8.921-4.182c-1.941-.91-1.941-4.06 0-4.97z" stroke="#2860E6" stroke-width="2.063"></path>
                      <path opacity=".5" d="M3.536 11.333v7.333m22.667-3.333v6.834c0 1.344-.671 2.602-1.847 3.253-1.958 1.085-5.092 2.58-7.487 2.58-2.394 0-5.528-1.495-7.486-2.58-1.176-.65-1.847-1.91-1.847-3.253v-6.834" stroke="#2860E6" stroke-width="2.063" stroke-linecap="round"></path>
                    </svg>
                    <svg class="hidden dark:block" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.913 4.666a6.9 6.9 0 0 1 5.913 0l8.921 4.183c1.941.91 1.941 4.06 0 4.969L19.826 18a6.9 6.9 0 0 1-5.913 0l-8.921-4.182c-1.941-.91-1.941-4.06 0-4.97z" stroke="#fff" stroke-width="2.063"></path>
                      <path opacity=".5" d="M3.536 11.333v7.333m22.667-3.333v6.834c0 1.344-.671 2.602-1.847 3.253-1.958 1.085-5.092 2.58-7.487 2.58-2.394 0-5.528-1.495-7.486-2.58-1.176-.65-1.847-1.91-1.847-3.253v-6.834" stroke="#fff" stroke-width="2.063" stroke-linecap="round"></path>
                    </svg>
                    <p class="text-lg leading-[27px] dark:text-dark-14 pt-4">
                      موردی یافت نشد
                    </p>
                  </div>
                </a>
              <?php
            }
            ?>

              </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="px-[29px] hidden md:block">
              <button class="px-3 py-[14px] bg-blue-100 dark:bg-dark-1 rounded-full" onclick="training.slideNext()">
                <svg class="hidden dark:block" width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.061 18.17a.7.7 0 0 1-.991 0l-5.61-5.608a.7.7 0 0 1 0-.992l5.61-5.608a.701.701 0 0 1 .991.991L5.65 11.365h13.264a.701.701 0 0 1 0 1.402H5.65l4.412 4.412a.7.7 0 0 1 0 .992" fill="#fff"></path>
                </svg>
                <svg class="block dark:hidden" width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.06109 13.1706C6.7873 13.4444 6.34339 13.4444 6.0696 13.1706L0.460904 7.56194C0.187114 7.28815 0.187114 6.84424 0.460904 6.57045L6.0696 0.961757C6.34339 0.687965 6.7873 0.687965 7.06109 0.961757C7.33488 1.23555 7.33488 1.67945 7.06109 1.95324L2.64922 6.36511L15.9132 6.36511C16.3004 6.36511 16.6143 6.67899 16.6143 7.06619C16.6143 7.45339 16.3004 7.76728 15.9132 7.76728L2.64922 7.76728L7.06109 12.1791C7.33488 12.4529 7.33488 12.8968 7.06109 13.1706Z" fill="#525FE1"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- Education category End-->

      <!-- Related training Start  -->
      <section class="bg-white-900 dark:bg-blue-800 md:pt-[31px] pt-[23px]">
        <div class="container md:pt-[23px] pt-0">
          <div class="md:grid grid-cols-3 items-center gap-[171px]">
            <p class="lg:text-[28px] md:text-xl lg:leading-[44px] font-medium text-center md:text-start dark:text-white-100 whitespace-nowrap">
              آموزش‌های <span class="text-blue-500">آریاپِی</span>
            </p>
            <div class="col-span-2 pt-[41px] md:pt-0">
              <div class="swiper tccount-training bg-dark-53 dark:bg-dark-11 rounded-md swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
                <div class="text-center swiper-wrapper md:py-3 py-[7px] px-2" id="swiper-wrapper-cdce12c69e62497d" aria-live="polite">
                    
                  <?php
                  if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
                    $x=1;
                    foreach ( $terms as $term ) { ?>
                      <div class="swiper-slide <?=($x == 1) ? 'swiper-slide-active' :'swiper-slide-next'?>" role="group" aria-label="<?=$x?> / <?count($terms)?>" data-swiper-slide-index="0" style="margin-left: 10px;">
                        <button id="btn-<?=$x?>" class="<?=($x == 1) ? 'active-table' :''?> table-click md:text-lg text-xs dark:text-white-100 whitespace-nowrap leading-[27px] md:leading-[19px] font-medium bg-transparent rounded-md md:py-[10px] py-[7px] md:px-[14px] px-[10px]">
                        <?=$term->name;?>
                        </button>
                      </div>
                      <?php
                      $x++;
                    }
                    
                  } ?>

                </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
          </div>
          <div class="grid grid-cols-5 pt-[33px] gap-[64px]">
            <div class="md:col-span-3 col-span-5 h-[443px] max-h-[443px] overflow-y-scroll submenu2 md:px-[19px] px-2" style="direction: ltr">
              
              <?php
              if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
                  $x = 1; // Initialize counter for content div ID
                  foreach ( $terms as $term ) { ?>
                      <div class="content <?=($x != 1)? 'hidden' : ''?>" id="content-<?=$x?>">
                          <?php
                          // Query the posts for the current term in the custom taxonomy
                          $args = array(
                              'post_type' => 'trainings', // Custom post type
                              'tax_query' => array(
                                  array(
                                      'taxonomy' => 'category-trainings', // Custom taxonomy
                                      'terms'    => $term->term_id, // Get the current term ID
                                      'per-page' => 15,
                                  ),
                              ),
                          );
              
                          $query = new WP_Query($args); // Execute the query
              
                          // Check if there are posts
                          if ( $query->have_posts() ) {
                              while ( $query->have_posts() ) {
                                  $query->the_post(); // Set up post data
                                  ?>
                                  <a href="<?php the_permalink(); ?>" class="flex justify-between items-center bg-blue-200 dark:bg-dark-11 py-[11px] px-[15px] rounded-md" dir="rtl">
                                      <p class="md:text-[17px] text-[13px] dark:text-white-30 md:leading-[35px] leading-[22px] font-medium">
                                          <?php the_title(); ?> <!-- Post title -->
                                      </p>
                                      <div class="bg-blue-17 dark:bg-dark-1 p-1 rounded-lg">
                                          <svg class="block dark:hidden" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path opacity=".5" d="M24.6 16.08a1.08 1.08 0 1 0 0-2.16zm0-2.16H5.4v2.16h19.2z" fill="#2860E6"></path>
                                              <path d="M12.6 7.8 5.4 15l7.2 7.2" stroke="#2860E6" stroke-width="2.16" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                          <svg class="hidden dark:block" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path opacity=".5" d="M24.6 16.08a1.08 1.08 0 1 0 0-2.16zm0-2.16H5.4v2.16h19.2z" fill="#F8F8F8"></path>
                                              <path d="M12.6 7.8 5.4 15l7.2 7.2" stroke="#F8F8F8" stroke-width="2.16" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                      </div>
                                  </a>
                                  <?php
                              } // End while loop for posts
                              wp_reset_postdata(); // Reset post data after the loop
                          }
                          ?>
                      </div>
                  <?php
                  $x++; // Increment counter for next content div ID
                  } // End foreach loop for terms
              } else {
                  echo '<p>هیچ دسته بندی برای آموزش ها پیدا نشد.</p>'; // Fallback message if no terms found
              }
              ?>
            </div>
            <div class="col-span-2 bg-white-100 dark:bg-dark-11 rounded-md py-[18px] px-[17px] max-h-[443px] hidden md:block">
              <p class="text-[17px] dark:text-dark-20 leading-[35px] font-medium">
                محبوب ترین آموزش این دسته
              </p>
              <img src="<?=RTARIA_IMAGES;?>/training-blog-1.png" class="w-full pt-[9px]">
              <a class="text-[17px] block dark:text-dark-70 leading-[27px] font-medium pt-[13px]">
                آپدیت جدید تلگرام؛ تحول همه‌جانبه Saved Messages
              </a>
              <p class="text-lg dark:text-white-100 leading-[24px] font-medium text-black-32 text-justify pt-[5px]">
                رشصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان
                را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                ای علی
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- Related training End -->
      
      <?php
        $x = 0;
        $terms[1] = $term;
        unset($terms[1]);
        $args = array(
            'post_type' => 'trainings',  // Replace with your custom post type
            'posts_per_page' => 5,                  // Number of posts to display per category
            'tax_query' => array(
                array(
                    'taxonomy' => 'category-trainings',   // Custom taxonomy
                    'field'    => 'slug',                 // Matching by term slug
                    'terms'    => $term->slug,            // The current term in the loop
                ),
            ),
        );
        $query = new WP_Query( $args );
        ?>
        <section class="bg-white-900 dark:bg-blue-800 pt-[54px] md:pb-[60px]">
          <div class="container">
            <div class="flex justify-between">
              <div class="flex items-center md:gap-5 gap-2">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x=".785" y=".929" width="14" height="14" rx="3" fill="#2860E6"></rect>
                </svg>
                <p class="md:text-[25px] text-sm md:leading-[31px] leading-[25px] text-black-550 dark:text-white-10 font-semibold">
                    <?=esc_html( $term->name ) ?>
                </p>
              </div>
              <a href="<?=esc_url( get_term_link( $term ) ) ?>" class="bg-dark-14 dark:bg-blue-500 dark:text-white-10 md:text-lg cursor-pointer hover-element-blue text-sm font-medium leading-[32px] text-black-27 md:px-[19px] px-3 md:py-[6px] py-1 rounded-md">
                مشاهده همه
              </a>
            </div>

            <div class="md:pt-6 pt-[9px]">
              <div class="swiper opening swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-8bafdde1010fc106c0c" aria-live="polite"></div>
        <?php
        // Step 4: Loop through posts for the current term
        if ( $query->have_posts() ) {
        ?>

        <!-- Related training start -->
          <?php
              while ( $query->have_posts() ) {
              $query->the_post();
              ?>
            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 8" data-swiper-slide-index="0" style="width: 322.5px; margin-left: 18px;">
              <div class="lg:col-span-1 md:col-span-2 dark:border-none border border-gray-300 rounded-md dark:bg-dark-1 bg-white-100">
                <div class="py-[15px] px-[11px]">
                  <div class="relative">
                    <a href="<?=get_permalink();?>">
                      <img src="<?=($post_thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'full' )) ? $post_thumbnail : RTARIA_IMAGES.'/training-blog-3-3.png' ?>" class="w-full h-full object-cover rounded-md">
                    </a>
                    <a href="<?=esc_url( get_term_link( $term ) ) ?>" class="text-white-10 md:text-sm text-[15px] md:leading-[23px] leading-[25px] bg-blue-500 rounded-md py-1 px-[13px] absolute bottom-3 right-3">
                      <?=esc_html( $term->name ) ?>
                    </a>
                  </div>
                  <p class="md:text-[15px] text-base md:leading-[27px] leading-[29px] text-justify pt-[14px] dark:text-white-100 font-semibold">
                      <?=get_the_title();?>
                  </p>
                  <p class="md:ext-[13px] text-sm md:leading-[27px] leading-[28px] pt-[10px] text-black-32 dark:text-white-100">
                    <?php echo get_the_excerpt(); ?>
                  </p>
                  <div class="flex justify-between items-center pt-2">
                    <p class="md:text-[11px] text-xs md:leading-[24px] leading-[25px] text-black-50 font-medium dark:text-white-100">
                      <?php echo human_time_diff(get_the_time('U'), current_time('U')) . ' قبل'; ?>
                    </p>
                    <a href="<?=get_permalink();?>" class="text-[13px] hover-element-white leading-[16px] font-medium text-blue-500 bg-blue-200 dark:bg-blue-600 dark:text-white-100 px-6 py-2 rounded-md">
                      خواندن مطلب
                    </a>
                  </div>
                </div>
              </div>
            <?php } ?>
        <!-- Related training End -->
        <?php              
            // Reset post data after the query
            wp_reset_postdata();
            } else {
                echo '<p>این دسته بندی محتوایی ندارد.</p>';
            }
        // }
        ?>
        </div>
                </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
          </div>
        </section>
      
      <!-- Account purchase Start  -->
      <section class="bg-white-900 dark:bg-blue-800 pt-[110px] hidden md:block">
        <div class="bg-blue-500 relative">
          <img src="<?=RTARIA_IMAGES?>/patern.png" class="w-full h-full absolute left-0 top-0 opacity-[0.015] object-cover" alt="">
          <div class="container relative flex justify-between">
            <div class="py-6">
              <p class="text-[20px] leading-[44px] text-white-100">
                بهترین قیمت و بالاترین کیفیت
              </p>
              <p class="text-[32px] leading-[44px] text-white-100 pb-[36px] pt-[13px]">
                خرید اکانت قانونی Chat GPT 4
              </p>
              <div class="flex">
                <a class="text-lg flex leading-[27px] hover-element-blue text-blue-500 bg-blue-200 rounded-md px-[22px] py-3">
                  اطلاعات بیشتر و خرید
                </a>
              </div>
            </div>
            <div>
              <img src="<?=RTARIA_IMAGES?>/training-blog2.png" class="absolute lg:-top-20 md:-top-10 md:left-[10px] lg:left-[83px] xl:left-[143px] md:w-[341px] md:h-[273px] lg:w-[441px] lg:h-[373px]">
            </div>
          </div>
        </div>
      </section>
      <!-- Account purchase End -->
      

      <?php
        $x = 0;
        foreach ($terms as $term) {
          $args = array(
            'post_type' => 'trainings',  // Replace with your custom post type
            'posts_per_page' => 5,                  // Number of posts to display per category
            'tax_query' => array(
                array(
                    'taxonomy' => 'category-trainings',   // Custom taxonomy
                    'field'    => 'slug',                 // Matching by term slug
                    'terms'    => $term->slug,            // The current term in the loop
                ),
            ),
        );
        $query = new WP_Query( $args );
        ?>
        <section class="bg-white-900 dark:bg-blue-800 pt-[54px] md:pb-[60px]">
          <div class="container">
            <div class="flex justify-between">
              <div class="flex items-center md:gap-5 gap-2">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x=".785" y=".929" width="14" height="14" rx="3" fill="#2860E6"></rect>
                </svg>
                <p class="md:text-[25px] text-sm md:leading-[31px] leading-[25px] text-black-550 dark:text-white-10 font-semibold">
                    <?=esc_html( $term->name ) ?>
                </p>
              </div>
              <a href="<?=esc_url( get_term_link( $term ) ) ?>" class="bg-dark-14 dark:bg-blue-500 dark:text-white-10 md:text-lg cursor-pointer hover-element-blue text-sm font-medium leading-[32px] text-black-27 md:px-[19px] px-3 md:py-[6px] py-1 rounded-md">
                مشاهده همه
              </a>
            </div>

            <div class="md:pt-6 pt-[9px]">
              <div class="swiper opening swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-8bafdde1010fc106c0c" aria-live="polite"></div>
        <?php
        // Step 4: Loop through posts for the current term
        if ( $query->have_posts() ) {
        ?>

        <!-- Related training start -->
          <?php
              while ( $query->have_posts() ) {
              $query->the_post();
              ?>
            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 8" data-swiper-slide-index="0" style="width: 322.5px; margin-left: 18px;">
              <div class="lg:col-span-1 md:col-span-2 dark:border-none border border-gray-300 rounded-md dark:bg-dark-1 bg-white-100">
                <div class="py-[15px] px-[11px]">
                  <div class="relative">
                    <a href="<?=get_permalink();?>">
                      <img src="<?=($post_thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'full' )) ? $post_thumbnail : RTARIA_IMAGES.'/training-blog-3-3.png' ?>" class="w-full h-full object-cover rounded-md">
                    </a>
                    <a href="<?=esc_url( get_term_link( $term ) ) ?>" class="text-white-10 md:text-sm text-[15px] md:leading-[23px] leading-[25px] bg-blue-500 rounded-md py-1 px-[13px] absolute bottom-3 right-3">
                      <?=esc_html( $term->name ) ?>
                    </a>
                  </div>
                  <p class="md:text-[15px] text-base md:leading-[27px] leading-[29px] text-justify pt-[14px] dark:text-white-100 font-semibold">
                      <?=get_the_title();?>
                  </p>
                  <p class="md:ext-[13px] text-sm md:leading-[27px] leading-[28px] pt-[10px] text-black-32 dark:text-white-100">
                    <?php echo get_the_excerpt(); ?>
                  </p>
                  <div class="flex justify-between items-center pt-2">
                    <p class="md:text-[11px] text-xs md:leading-[24px] leading-[25px] text-black-50 font-medium dark:text-white-100">
                      <?php echo human_time_diff(get_the_time('U'), current_time('U')) . ' قبل'; ?>
                    </p>
                    <a href="<?=get_permalink();?>" class="text-[13px] hover-element-white leading-[16px] font-medium text-blue-500 bg-blue-200 dark:bg-blue-600 dark:text-white-100 px-6 py-2 rounded-md">
                      خواندن مطلب
                    </a>
                  </div>
                </div>
              </div>
            <?php } ?>
        <!-- Related training End -->
        <?php              
            // Reset post data after the query
            wp_reset_postdata();
            } else {
                echo '<p>این دسته بندی محتوایی ندارد.</p>';
            }
            ?>
              </div>
          </div>
        </section>
            <?
        }
        ?>
      
      <!-- currency exchange End  -->





    <?php get_template_part('template-parts/links'); ?>


    </section>














<?php

get_footer();

?>
