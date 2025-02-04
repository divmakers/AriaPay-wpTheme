<?php 


// Template Name: صفحه اصلی اخبار

get_header();

$excluded_newsIDs = [];

$terms = get_terms(array(
  'taxonomy' => 'category-news', // Custom taxonomy
  'hide_empty' => false, // Exclude empty terms
));
$sidebar_terms = $terms;

?>



<!-- slider Start -->
<section class="bg-dark-67 dark:bg-blue-16 mt-[60px] md:mt-[116px]">
      <div class="container">
        <div class="swiper top-services-slider !pt-6 !pb-12 swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
          <div class="swiper-wrapper" id="swiper-wrapper-2f051284da01a6c0" aria-live="off" style="transition-duration: 500ms; transform: translate3d(461.333px, 0px, 0px);">
            
            
            <?php
            $args = array(
                'post_type'      => 'news',
                'posts_per_page' => 5,
                'orderby'        => 'date',
                'order'          => 'DESC',

                'post__not_in' => $excluded_newsIDs,
            );
            $news_query = new WP_Query($args);

            // Loop through the posts
            if ($news_query->have_posts()) {
                while ($news_query->have_posts()) {
                    $news_query->the_post();

                    $excluded_newsIDs[] = get_the_ID();
                    $post_link = get_permalink();
                    $post_excerpt = wp_trim_words(get_the_excerpt(), 15);
                    $categories = get_the_terms(get_the_ID(), 'category-news');
                    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

                    if (!empty($categories) && !is_wp_error($categories)) {
                        $category = $categories[0];
                        $category_link = get_term_link($category);
                        $category_name = $category->name;
                    } else {
                        $category_link = '#';
                        $category_name = '';
                    }
            ?>
                    
                    <div href="<?=esc_url($post_link); ?>" class="swiper-slide /swiper-slide-prev" role="group" aria-label="<?= get_the_title(); ?> / <?= $news_query->found_posts; ?>" data-swiper-slide-index="0" style="width: 421.333px; margin-left: 40px;">
                        <div class="flex items-center gap-6 col-span-1">
                            <div class="rounded-full">
                                <a href="<?=esc_url($post_link); ?>">
                                    <img src="<?=($featured_image_url) ? $featured_image_url : RTARIA_IMAGES.'/open-account.png' ?>" class="md:w-20 md:h-20 w-16 h-16 object-contain">
                                </a>
                            </div>
                            <div>
                                <a href="<?=esc_url($category_link); ?>" class="md:text-sm leading-[23px] text-[13px] font-semibold text-blue-500 dark:text-white-10">
                                    <?=esc_html($category_name); ?>
                                </a>
                                <p class="md:text-base text-xs pt-3 font-semibold dark:text-white-10">
                                    <?=get_the_title();?>
                                </p>
                            </div>
                        </div>
                    </div>

            <?php
                }
            } else {
                echo 'اخبار یافت نشد';
            }
            // Reset post data
            wp_reset_postdata();
            ?>
            </div>
          <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" aria-current="true"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
      </div>
    </section>
    <!-- slider End -->

    <!-- BreadCrump Start -->
    <section class="bg-white-300 dark:bg-transparent mt-[19px] md:mt-[22px]">
      <div class="flex items-center container">
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
          اخبار آریا پی
        </p>
      </div>
    </section>
    <!-- BreadCrump End -->

<section class="dark-67 dark:bg-blue-900 pt-5 md:pt-10 pb-10">
      <div class="container md:grid grid-cols-4 gap-5">
        <!-- s1 -->
        <div class="col-span-1 lg:block hidden">
          <div class="top-[130px] sticky">


          <?php
  if (!empty($terms) && !is_wp_error($terms)) {
      if (count($terms) > 0) {
          $term = $terms[0]; // Get the second term safely
          // Get the link to the term archive
          $term_link = get_term_link($term);
          // Check if the link was retrieved successfully
          if (!is_wp_error($term_link)) {
            ?>
                      <!-- Open an account section start -->
                      <section>
                          <!-- <div class="flex justify-between">
                              <div class="flex items-center">
                                  <div class="w-1 h-7 bg-blue-500 rounded-[3px]"></div>
                                  <p class="text-[17px] leading-[25px] dark:text-white-10 font-semibold ps-2">
                                      <?= esc_html($term->name); ?>
                                  </p>
                              </div>
                              <a href="<?= esc_url($term_link); ?>" class="bg-dark-14 dark:bg-blue-500 cursor-pointer hover-element-blue dark:text-white-10 lg:text-sm leading-[25px] text-xs font-medium px-[15px] py-[5px] rounded-md">
                                  مشاهده همه
                              </a>
                          </div> -->
                          <?php
                          $args = array(
                              'post_type' => 'news',
                              'tax_query' => array(
                                  array(
                                      'taxonomy' => 'category-news',
                                      'field'    => 'term_id',
                                      'terms'    => $term->term_id,
                                  ),
                              ),
                              'posts_per_page' => 4,
                              'orderby' => 'date',
                              'order'   => 'DESC',
                          );
                          $posts_query = new WP_Query($args);
                          if ($posts_query->have_posts()) {
                              $x = 0;
                              while ($posts_query->have_posts()) {
                                  $x++;
                                  $posts_query->the_post();
                                  $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                  
                                  if ($x == 1) { ?>
                                      <div class="relative pt-4">
                                          <a href="<?=esc_url(get_permalink()); ?>">
                                              <img src="<?=($featured_image_url) ? $featured_image_url : RTARIA_IMAGES.'/blog-1-1.png' ;?>" class="w-full h-[223px] object-cover rounded-md">
                                          </a>
                                          <a href="<?=esc_url(get_permalink()); ?>" class="text-white-10 text-sm leading-[23px] bg-blue-500 rounded-md px-3 py-1 absolute bottom-3 right-3">
                                              <?=esc_html(get_the_title()); ?>
                                          </a>
                                      </div>
                                      <a href="<?=esc_url(get_permalink()); ?>" class="text-[15px] block leading-[18px] dark:text-white-10 pt-[11px] font-medium">
                                          <?=esc_html(get_the_excerpt()); ?>
                                      </a>
                                      <p class="text-sm dark:text-dark-5 font-medium pt-3 pb-[15px]">
                                          <?=human_time_diff(get_the_time('U'), current_time('U')) . ' قبل'; ?>
                                      </p>
                                  <?php } else { ?>

                                      <div class="grid grid-cols-5 border-t-2 border-dark-32 dark:border-dark-66 py-[15px]">
                                          <a href="<?=esc_url(get_permalink()); ?>">
                                              <img src="<?=($featured_image_url) ? $featured_image_url : RTARIA_IMAGES.'/blog-1-1-1.png' ;?>" class="col-span-2 w-full h-full rounded-md object-contain" alt="">
                                          </a>
                                          <div class="col-span-3 pr-3">
                                              <a href="<?=esc_url(get_permalink()); ?>" class="text-sm leading-[23px] font-medium text-blue-500">
                                                  <?=esc_html(get_the_title()); ?>
                                              </a>
                                              <a href="<?=esc_url(get_permalink()); ?>" class="text-sm block leading-[18px] dark:text-white-10 font-medium pt-[3px]">
                                                  <?=esc_html(get_the_excerpt()); ?>
                                              </a>
                                          </div>
                                      </div>
                                  <?php }
                              }
                              wp_reset_postdata(); // Important to reset after the custom query
                          } else {
                              echo '<p>خبری پیدا نشد.</p>';
                          }
                          ?>
                          <?php
                        } else {
                            echo 'خطا در دریافت لینک دسته بندی';
                        }
                    } else {
                        echo '<p>تعداد دسته بندی تمام شد</p>';
                    }
                } else {
                    echo '<p>خطا در واکشی دسته</p>';
                }
                ?>
                </section>







            <!-- Our social networks start-->
            <section class="py-8">
              <div class="flex items-center">
                <div class="w-1 h-7 bg-blue-500 rounded-[3px]"></div>
                <p class="text-[17px] leading-[25px] dark:text-white-10 font-semibold ps-2">
                  شبکه های اجتماعی ما
                </p>
              </div>

              <a class="flex hover-svg-move justify-between py-3 border-b-2 border-dark-32 dark:border-black-850">
                <div class="flex items-center gap-3">
                  <div class="bg-white-100 rounded-md block dark:hidden p-1">
                    <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M26.974 14.5c0 6.563-5.32 11.884-11.884 11.884-6.563 0-11.884-5.32-11.884-11.884S8.526 2.616 15.09 2.616 26.974 7.936 26.974 14.5m-11.458-3.11q-1.734.72-6.93 2.984-.844.336-.885.657c-.045.362.408.504 1.025.698l.26.083c.606.197 1.423.428 1.847.437q.577.012 1.289-.476 4.855-3.278 5.012-3.313c.075-.017.177-.038.247.023.069.062.062.179.055.21-.045.192-1.823 1.845-2.743 2.7-.287.266-.49.456-.532.499a11 11 0 0 1-.28.276c-.563.544-.986.951.024 1.617.486.32.874.584 1.261.848.423.288.845.575 1.391.933q.209.138.402.278c.492.351.934.667 1.481.616.318-.029.646-.328.812-1.218.394-2.105 1.168-6.665 1.347-8.544a2 2 0 0 0-.02-.468.5.5 0 0 0-.17-.322c-.142-.115-.362-.14-.46-.138-.447.008-1.133.246-4.433 1.62" fill="#2860E6"></path>
                    </svg>
                  </div>
                  <div class="bg-dark-11 hidden dark:block rounded-md p-1">
                    <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M26.974 14.5c0 6.563-5.32 11.884-11.884 11.884-6.563 0-11.884-5.32-11.884-11.884S8.526 2.616 15.09 2.616 26.974 7.936 26.974 14.5m-11.458-3.11q-1.734.72-6.93 2.984-.844.336-.885.657c-.045.362.408.504 1.025.698l.26.083c.606.197 1.423.428 1.847.437q.577.012 1.289-.476 4.855-3.278 5.012-3.313c.075-.017.177-.038.247.023.069.062.062.179.055.21-.045.192-1.823 1.845-2.743 2.7-.287.266-.49.456-.532.499a11 11 0 0 1-.28.276c-.563.544-.986.951.024 1.617.486.32.874.584 1.261.848.423.288.845.575 1.391.933q.209.138.402.278c.492.351.934.667 1.481.616.318-.029.646-.328.812-1.218.394-2.105 1.168-6.665 1.347-8.544a2 2 0 0 0-.02-.468.5.5 0 0 0-.17-.322c-.142-.115-.362-.14-.46-.138-.447.008-1.133.246-4.433 1.62" fill="#2860E6"></path>
                    </svg>
                  </div>
                  <p class="text-sm font-medium leading-[25px] dark:text-white-10">
                    تلگرام
                  </p>
                  <p class="text-sm font-medium leading-[23px] text-blue-500">
                    20k
                  </p>
                </div>
                <svg class="block dark:hidden main-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="m15 19-6-7 6-7" stroke="#3B3B3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <svg class="hidden dark:block main-svg" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="m15 19.5-6-7 6-7" stroke="#ECECEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </a>

              <a class="flex hover-svg-move justify-between py-3 border-b-2 border-dark-32 dark:border-black-850">
                <div class="flex items-center gap-3">
                  <div class="bg-white-100 rounded-md block dark:hidden p-1">
                    <svg class="block dark:hidden" width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M26.974 14.572c0-6.604-5.32-11.956-11.884-11.956S3.206 7.968 3.206 14.572c0 5.969 4.345 10.915 10.027 11.812v-8.355h-3.017V14.57h3.017v-2.633c0-2.997 1.774-4.653 4.489-4.653 1.3 0 2.66.234 2.66.234v2.943h-1.5c-1.475 0-1.935.922-1.935 1.868v2.242h3.296l-.527 3.456h-2.769v8.356c5.682-.897 10.027-5.843 10.027-11.812" fill="#2860E6"></path>
                    </svg>
                  </div>
                  <div class="bg-dark-11 hidden dark:block rounded-md p-1">
                    <svg class="hidden dark:block" width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M26.974 14.572c0-6.604-5.32-11.956-11.884-11.956S3.206 7.968 3.206 14.572c0 5.969 4.345 10.915 10.027 11.812v-8.355h-3.017V14.57h3.017v-2.633c0-2.997 1.774-4.653 4.489-4.653 1.3 0 2.66.234 2.66.234v2.943h-1.5c-1.475 0-1.935.922-1.935 1.868v2.242h3.296l-.527 3.456h-2.769v8.356c5.682-.897 10.027-5.843 10.027-11.812" fill="#2860E6"></path>
                    </svg>
                  </div>
                  <p class="text-sm font-medium leading-[25px] dark:text-white-10">
                    فیسبوک
                  </p>
                  <p class="text-sm font-medium leading-[23px] text-blue-500">
                    20k
                  </p>
                </div>
                <svg class="block dark:hidden main-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="m15 19-6-7 6-7" stroke="#3B3B3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <svg class="hidden dark:block main-svg" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="m15 19.5-6-7 6-7" stroke="#ECECEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </a>

              <a class="flex hover-svg-move justify-between py-3 border-b-2 border-dark-32 dark:border-black-850">
                <div class="flex items-center gap-3">
                  <div class="bg-white-100 block dark:hidden rounded-md p-1">
                    <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.09 3.804c-2.905 0-3.268.012-4.41.064-1.138.052-1.916.234-2.596.498A5.2 5.2 0 0 0 6.189 5.6a5.25 5.25 0 0 0-1.233 1.893c-.263.68-.445 1.46-.497 2.598-.052 1.14-.064 1.503-.064 4.409s.012 3.268.064 4.41c.052 1.138.233 1.916.497 2.596.269.713.69 1.36 1.234 1.895.534.544 1.18.965 1.894 1.233.68.264 1.458.445 2.597.497s1.504.064 4.41.064c2.904 0 3.268-.012 4.409-.064 1.138-.052 1.916-.233 2.596-.497a5.2 5.2 0 0 0 1.895-1.234 5.25 5.25 0 0 0 1.234-1.894c.263-.68.445-1.458.497-2.597s.064-1.504.064-4.41c0-2.904-.012-3.268-.064-4.409-.052-1.138-.234-1.916-.498-2.597A5.2 5.2 0 0 0 23.99 5.6a5.25 5.25 0 0 0-1.893-1.234c-.68-.263-1.46-.445-2.598-.497-1.14-.051-1.503-.064-4.409-.064m0 1.928c2.856 0 3.195.01 4.323.062 1.042.047 1.608.22 1.985.368.5.193.856.426 1.23.8.375.374.607.73.8 1.23.147.377.32.943.368 1.985.052 1.128.063 1.467.063 4.323s-.011 3.194-.063 4.322c-.047 1.043-.22 1.609-.368 1.986a3.3 3.3 0 0 1-.8 1.23 3.3 3.3 0 0 1-1.23.8c-.377.146-.943.32-1.985.368-1.128.052-1.466.062-4.323.062-2.856 0-3.194-.01-4.322-.062-1.043-.048-1.609-.22-1.986-.369a3.3 3.3 0 0 1-1.23-.799 3.3 3.3 0 0 1-.8-1.23c-.146-.377-.32-.943-.368-1.986-.051-1.128-.062-1.466-.062-4.322s.01-3.195.062-4.323c.048-1.042.221-1.608.369-1.985.193-.5.425-.856.799-1.23a3.3 3.3 0 0 1 1.23-.8c.377-.147.943-.32 1.986-.368 1.128-.052 1.466-.062 4.322-.062" fill="#2860E6"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.09 18.069a3.57 3.57 0 1 1 0-7.14 3.57 3.57 0 0 1 0 7.14m0-9.067a5.497 5.497 0 1 0 0 10.995 5.497 5.497 0 0 0 0-10.995m7.097-.1a1.3 1.3 0 1 1-2.599 0 1.3 1.3 0 0 1 2.6 0" fill="#2860E6"></path>
                    </svg>
                  </div>
                  <div class="bg-dark-11 hidden dark:block rounded-md p-1">
                    <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.09 3.804c-2.905 0-3.268.012-4.41.064-1.138.052-1.916.234-2.596.498A5.2 5.2 0 0 0 6.189 5.6a5.25 5.25 0 0 0-1.233 1.893c-.263.68-.445 1.46-.497 2.598-.052 1.14-.064 1.503-.064 4.409s.012 3.268.064 4.41c.052 1.138.233 1.916.497 2.596.269.713.69 1.36 1.234 1.895.534.544 1.18.965 1.894 1.233.68.264 1.458.445 2.597.497s1.504.064 4.41.064c2.904 0 3.268-.012 4.409-.064 1.138-.052 1.916-.233 2.596-.497a5.2 5.2 0 0 0 1.895-1.234 5.25 5.25 0 0 0 1.234-1.894c.263-.68.445-1.458.497-2.597s.064-1.504.064-4.41c0-2.904-.012-3.268-.064-4.409-.052-1.138-.234-1.916-.498-2.597A5.2 5.2 0 0 0 23.99 5.6a5.25 5.25 0 0 0-1.893-1.234c-.68-.263-1.46-.445-2.598-.497-1.14-.051-1.503-.064-4.409-.064m0 1.928c2.856 0 3.195.01 4.323.062 1.042.047 1.608.22 1.985.368.5.193.856.426 1.23.8.375.374.607.73.8 1.23.147.377.32.943.368 1.985.052 1.128.063 1.467.063 4.323s-.011 3.194-.063 4.322c-.047 1.043-.22 1.609-.368 1.986a3.3 3.3 0 0 1-.8 1.23 3.3 3.3 0 0 1-1.23.8c-.377.146-.943.32-1.985.368-1.128.052-1.466.062-4.323.062-2.856 0-3.194-.01-4.322-.062-1.043-.048-1.609-.22-1.986-.369a3.3 3.3 0 0 1-1.23-.799 3.3 3.3 0 0 1-.8-1.23c-.146-.377-.32-.943-.368-1.986-.051-1.128-.062-1.466-.062-4.322s.01-3.195.062-4.323c.048-1.042.221-1.608.369-1.985.193-.5.425-.856.799-1.23a3.3 3.3 0 0 1 1.23-.8c.377-.147.943-.32 1.986-.368 1.128-.052 1.466-.062 4.322-.062" fill="#2860E6"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.09 18.069a3.57 3.57 0 1 1 0-7.14 3.57 3.57 0 0 1 0 7.14m0-9.067a5.497 5.497 0 1 0 0 10.995 5.497 5.497 0 0 0 0-10.995m7.097-.1a1.3 1.3 0 1 1-2.599 0 1.3 1.3 0 0 1 2.6 0" fill="#2860E6"></path>
                    </svg>
                  </div>
                  <p class="text-sm font-medium leading-[25px] dark:text-white-10">
                    اینستاگرام
                  </p>
                  <p class="text-sm font-medium leading-[23px] text-blue-500">
                    20k
                  </p>
                </div>
                <svg class="block dark:hidden main-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="m15 19-6-7 6-7" stroke="#3B3B3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <svg class="hidden dark:block main-svg" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="m15 19.5-6-7 6-7" stroke="#ECECEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </a>

              <a class="flex justify-between py-3 hover-svg-move">
                <div class="flex items-center gap-3">
                  <div class="bg-white-100 rounded-md block dark:hidden p-1">
                    <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M24.54 9.651c.015.21.015.42.015.63 0 6.444-4.905 13.875-13.874 13.875v-.003a13.8 13.8 0 0 1-7.475-2.187q.579.07 1.16.07a9.8 9.8 0 0 0 6.057-2.09 4.88 4.88 0 0 1-4.556-3.387 4.86 4.86 0 0 0 2.202-.084 4.88 4.88 0 0 1-3.912-4.78v-.061a4.85 4.85 0 0 0 2.213.61 4.88 4.88 0 0 1-1.509-6.511 13.84 13.84 0 0 0 10.05 5.094 4.882 4.882 0 0 1 8.31-4.448 9.8 9.8 0 0 0 3.097-1.183 4.9 4.9 0 0 1-2.144 2.697 9.7 9.7 0 0 0 2.8-.768 9.9 9.9 0 0 1-2.433 2.526" fill="#2860E6"></path>
                    </svg>
                  </div>
                  <div class="bg-dark-11 hidden dark:block rounded-md p-1">
                    <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M24.54 9.651c.015.21.015.42.015.63 0 6.444-4.905 13.875-13.874 13.875v-.003a13.8 13.8 0 0 1-7.475-2.187q.579.07 1.16.07a9.8 9.8 0 0 0 6.057-2.09 4.88 4.88 0 0 1-4.556-3.387 4.86 4.86 0 0 0 2.202-.084 4.88 4.88 0 0 1-3.912-4.78v-.061a4.85 4.85 0 0 0 2.213.61 4.88 4.88 0 0 1-1.509-6.511 13.84 13.84 0 0 0 10.05 5.094 4.882 4.882 0 0 1 8.31-4.448 9.8 9.8 0 0 0 3.097-1.183 4.9 4.9 0 0 1-2.144 2.697 9.7 9.7 0 0 0 2.8-.768 9.9 9.9 0 0 1-2.433 2.526" fill="#2860E6"></path>
                    </svg>
                  </div>
                  <p class="text-sm font-medium leading-[25px] dark:text-white-10">
                    توییتر
                  </p>
                  <p class="text-sm font-medium leading-[23px] text-blue-500">
                    20k
                  </p>
                </div>
                <svg class="block dark:hidden main-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="m15 19-6-7 6-7" stroke="#3B3B3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <svg class="hidden dark:block main-svg" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="m15 19.5-6-7 6-7" stroke="#ECECEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </a>
            </section>
            <!-- Our social networks End-->
            <!--  latest news Start-->
            <section>
              <div class="flex justify-between">
                <div class="flex items-center">
                  <div class="w-1 h-7 bg-blue-500 rounded-[3px]"></div>
                  <p class="text-[17px] leading-[25px] dark:text-white-10 font-semibold ps-2">
                    اخرین خبر ها
                  </p>
                </div>
                <!-- <button class="bg-dark-14 dark:bg-blue-500 dark:text-white-10 cursor-pointer hover-element-blue lg:text-sm leading-[25px] text-xs font-medium px-[15px] py-[5px] rounded-md">
                  مشاهده همه
                </button> -->
              </div>

              <div class="swiper news-slider swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-f3edd4db4fd472ee" aria-live="polite">

              <?php
                $args = array(
                    'post_type'      => 'news',
                    'posts_per_page' => 5,
                    'orderby'        => 'date',
                    'order'          => 'DESC',

                    'post__not_in' => $excluded_newsIDs,
                    
                );
                $news_query = new WP_Query($args);

                // Loop through the posts
                if ($news_query->have_posts()) {
                    while ($news_query->have_posts()) {
                        $news_query->the_post();

                        $excluded_newsIDs[] = get_the_ID();
                        $post_link = get_permalink();
                        $post_excerpt = wp_trim_words(get_the_excerpt(), 15);
                        $categories = get_the_terms(get_the_ID(), 'category-news');
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // 'full' can be changed to desired size

                        if (!empty($categories) && !is_wp_error($categories)) {
                            $category = $categories[0];
                            $category_link = get_term_link($category);
                            $category_name = $category->name;
                        } else {
                            $category_link = '#';
                            $category_name = '';
                        }
                ?>
                      <a href="<?=esc_url($post_link); ?>" class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 3" data-swiper-slide-index="0" style="width: 321px;">
                          <img src="<?=($featured_image_url) ? $featured_image_url : RTARIA_IMAGES.'/blog-1-3-1.png' ?>" class="w-[369px] h-[277px] pt-4 pb-3" alt="<?=get_the_title(); ?>">
                          <p class="text-base leading-[18px] dark:text-dark-68">
                            <?=get_the_title(); ?>
                          </p>
                          <p class="text-sm leading-[23px] dark:text-dark-68 py-[10px]">
                            <?=human_time_diff(get_the_time('U'), current_time('U')) . ' قبل'; ?>
                          </p>
                        </a>
                <?php
                    }
                } else {
                    echo 'اخبار یافت نشد';
                }
                // Reset post data
                wp_reset_postdata();
                ?>

                </div>
                <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" aria-current="true"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </section>
            <!--  latest news End-->
          </div>
        </div>
        <!-- e1 -->
        <!-- s2 -->
        <div class="lg:col-span-2 col-span-4 rounded-md">
          <section class="relative h-[428px] w-full overflow-hidden rounded-md">
          <?php
            $args = array(
                'post_type'      => 'news',
                'posts_per_page' => 1,
                'orderby'        => 'date',
                'order'          => 'DESC',

                'post__not_in' => $excluded_newsIDs,
            );
            $news_query = new WP_Query($args);

            // Loop through the posts
            if ($news_query->have_posts()) {
                while ($news_query->have_posts()) {
                    $news_query->the_post();

                    $excluded_newsIDs[] = get_the_ID();
                    $post_link = get_permalink();
                    $post_excerpt = wp_trim_words(get_the_excerpt(), 15);
                    $categories = get_the_terms(get_the_ID(), 'category-news');
                    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // 'full' can be changed to desired size

                    if (!empty($categories) && !is_wp_error($categories)) {
                        $category = $categories[0];
                        $category_link = get_term_link($category);
                        $category_name = $category->name;
                    } else {
                        $category_link = '#';
                        $category_name = '';
                    } ?>
                    <a href="<?=esc_url($post_link); ?>">
                      <img src="<?=($featured_image_url) ? $featured_image_url : RTARIA_IMAGES.'/blog1.png' ?>" class="w-full h-full object-cover rounded-md">
                    </a>
                    <a href="<?=esc_url($post_link); ?>" class="main-new-gradient absolute bottom-0 left-0 w-full h-[300px]"></a>
                    <div class="px-4">
                      <a href="<?=esc_url($category_link); ?>" class="bg-blue-500 text-white-10 absolute lg:bottom-20 bottom-28 lg:text-sm text-xs font-medium py-2 px-3 rounded-md">
                        <?=esc_html($category_name); ?>
                      </a>
                      <p class="text-white-10 absolute lg:bottom-12 bottom-14 lg:text-base text-sm font-medium">
                        <?=get_the_title();?>
                      </p>
                      <p class="text-white-10 lg:text-sm text-xs absolute lg:bottom-5 bottom-6 font-medium">
                        <?=human_time_diff(get_the_time('U'), current_time('U')) . ' قبل'; // Display time since published ?>
                      </p>
                    </div>
                  
            <?php
                }
            } else {
                echo 'خبر یافت نشد';
            }
            // Reset post data
            wp_reset_postdata();
            ?>
          </section>
          <!-- latest video Start-->
          <!-- <section class="pt-6">
            <div class="flex items-center">
              <div class="w-1 h-7 bg-blue-500 rounded-[3px]"></div>
              <p class="text-[17px] leading-[25px] dark:text-white-10 font-semibold ps-2">
                جدیدترین ویدیو
              </p>
            </div>
            <div class="relative w-full md:pt-6 pt-3 overflow-hidden rounded-md">
              <img src="<?=RTARIA_IMAGES?>/blog-2-3-1.png" class="w-full md:h-full h-[428px] object-cover rounded-md">
              <div class="main-new-gradient absolute bottom-0 left-0 w-full h-[300px]"></div>
              <div class="bg-[#FFFFFF] p-2 absolute top-[50px] left-[28px] rounded-md">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="m17 9.5.658-.329c1.946-.973 2.92-1.46 3.63-1.02.712.44.712 1.528.712 3.703v.292c0 2.176 0 3.263-.711 3.703-.712.44-1.685-.047-3.63-1.02L17 14.5zm-3.44-2.06a1.5 1.5 0 1 1-2.121 2.12 1.5 1.5 0 0 1 2.122-2.12Z" stroke="#1C274C" stroke-width="1.5"></path>
                  <path d="M2 11.5c0-3.287 0-4.931.908-6.038a4 4 0 0 1 .554-.554C4.57 4 6.212 4 9.5 4c3.287 0 4.931 0 6.038.908a4 4 0 0 1 .554.554C17 6.57 17 8.212 17 11.5v1c0 3.287 0 4.931-.908 6.038a4 4 0 0 1-.554.554C14.43 20 12.788 20 9.5 20c-3.287 0-4.931 0-6.038-.908a4 4 0 0 1-.554-.554C2 17.43 2 15.788 2 12.5z" stroke="#1C274C" stroke-width="1.5"></path>
                </svg>
              </div>
              <div class="md:px-4 px-3">
                <a class="bg-blue-500 text-white-10 absolute md:bottom-20 bottom-28 text-sm leading-[23px] font-medium py-2 px-3 rounded-md">
                  پرداخت های درون برنامه ای
                </a>
                <a class="text-white-10 absolute lg:bottom-12 md:bottom-8 bottom-14 lg:text-[17px] leading-[25px] md:text-sm text-sm font-medium">
                  ایا برای پرداخت در گوگل پلی نیاز به اهراز هویت فیزیکی وجود
                  دارد
                </a>
                <p class="text-white-10 absolute md:bottom-1 lg:bottom-5 bottom-5 text-sm leading-[23px] font-medium">
                  24 دقیقه قبل
                </p>
              </div>
            </div>
          </section> -->
          <!-- latest video End-->
          <!-- open an account Start-->

          <?php 
          // Step 1: Get all terms from the custom taxonomy 'category-news'
// $terms = get_terms(array(
//   'taxonomy' => 'category-news', // Custom taxonomy
//   'hide_empty' => true, // Exclude empty terms
// ));

// Step 2: Check if there are any terms and loop through them
if (!empty($terms) && !is_wp_error($terms)) {
  foreach ($terms as $term) {
      // Get the link to the term archive
      $term_link = get_term_link($term);
      // Check if the link was retrieved successfully
      if (!is_wp_error($term_link)) {
          ?>
          <section class="md:pt-8 pt-5">
              <div class="flex items-center">
                  <div class="w-1 h-7 bg-blue-500 rounded-[3px]"></div>
                  <a href="<?= esc_url($term_link); ?>" class="text-[17px] leading-[25px] dark:text-white-10 font-semibold ps-2">
                      <?= esc_html($term->name); ?>
                  </a>
              </div>

              <?php
              // Step 3: Query the posts associated with the current term
              $args = array(
                  'post_type' => 'news', // Custom post type
                  'tax_query' => array(
                      array(
                          'taxonomy' => 'category-news', // Custom taxonomy
                          'field'    => 'term_id',
                          'terms'    => $term->term_id, // Get posts related to the current term
                      ),
                  ),
                  'posts_per_page' => 12, // Adjust this number as needed
                  'orderby' => 'date', // Order by post date
                  'order'   => 'DESC', // Get the most recent posts first
              );

              $posts_query = new WP_Query($args);

              // Step 4: Loop through the posts related to the current term
              if ($posts_query->have_posts()) {
                  echo '<ul class="posts-list">';
                  while ($posts_query->have_posts()) {
                      $posts_query->the_post();

                      $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                      ?>
                      <li class="md:grid grid-cols-5 lg:gap-5 gap-2 pt-4">
                          <div class="col-span-2 relative">
                            <a href="<?=esc_url(get_permalink()); ?>">
                              <img src="<?=($featured_image_url) ? $featured_image_url : RTARIA_IMAGES.'/blog-2-4-4.png';?>" class="w-full h-full object-cover rounded-md" alt="<?=esc_attr(get_the_title()); ?>">
                            </a>
                              <a href="<?=esc_url($term_link); ?>" class="text-white-10 bg-blue-500 rounded-md px-2 py-1 absolute bottom-3 right-3">
                                <?= esc_html($term->name); ?>
                              </a>
                          </div>

                          <div class="flex flex-col justify-center col-span-3 lg:pt-3">
                              <a href="<?=esc_url(get_permalink()); ?>" class="lg:text-[17px] text-[15px] leading-[23px] dark:text-white-10 text-justify font-semibold mt-3">
                                  <?=esc_html(get_the_title()); ?>
                              </a>
                              <p class="lg:text-sm leading-[27px] text-[11px] dark:text-white-10 font-medium py-4">
                                  <?=esc_html(get_the_excerpt()); ?>
                              </p>
                              <div class="flex items-center xl:gap-3 gap-1">
                                  <a class="lg:text-sm leading-[23px] text-[13px] dark:text-white-10 font-medium">
                                      <?=esc_html(get_the_author()); // Display the author name ?>
                                  </a>
                                  <div>
                                      <svg class="block dark:hidden" width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="1.5" cy="1.5" r="1.5" fill="#181818"></circle>
                                      </svg>
                                      <svg class="hidden dark:block" width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="1.5" cy="1.5" r="1.5" fill="#ECECEC"></circle>
                                      </svg>
                                  </div>
                                  <p class="lg:text-sm leading-[23px] text-[13px] dark:text-white-10 font-medium">
                                      <?=human_time_diff(get_the_time('U'), current_time('U')) . ' قبل'; // Display time since published ?>
                                  </p>
                                  <div>
                                      <svg class="block dark:hidden" width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="1.5" cy="1.5" r="1.5" fill="#181818"></circle>
                                      </svg>
                                      <svg class="hidden dark:block" width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="1.5" cy="1.5" r="1.5" fill="#ECECEC"></circle>
                                      </svg>
                                  </div>
                                  <a href="<?=esc_url(get_permalink()); ?>" class="lg:text-sm leading-[23px] text-[13px] font-medium text-blue-500">
                                      ادامه مطلب
                                  </a>
                              </div>
                          </div>
                      </li>
                      <?php
                  }
                  echo '</ul>';
              } else {
                  echo '<p>در این دسته بندی هیچ پستی یافت نشد.</p>';
              }

              // Restore original Post Data
              wp_reset_postdata();
              ?>
          </section>
          <?php
      } else {
          echo 'خطا در دریافت لینک دسته بندی';
      }
  }
} else {
  echo 'این دسته بندی هیچ پستی ندارد';
}
?>
          <!-- Digital currency Start-->
          <!-- <section class="pt-8 md:block hidden">
            <div class="flex items-center">
              <div class="w-1 h-7 bg-blue-500 rounded-[3px]"></div>
              <p class="text-[17px] leading-[25px] dark:text-white-10 font-semibold ps-2">
                ارز دیجیتال
              </p>
            </div>
            <div class="pt-[28px]">
              <div class="grid grid-cols-4 gap-5">



                  <div class="pt-3 pb-10">
                    <p class="lg:text-[17px] leading-[25px] text-sm text-justify dark:text-white-10 font-semibold">
                      ایا خرید بین کویین میتواند باعث سود در طولانی مدت شود؟ راه
                      کار های خرید
                    </p>
                    <p class="lg:text-[18px] leading-[27px] text-xs text-justify dark:text-white-10 font-medium py-[17px]">
                      با خرید تلگرام پرمیوم بسیاری از محدودیت&zwnj;ها حذف و به دنبال
                      آن قابلیت&zwnj;های جدید و کاربردی در اختیار
                    </p>
                    <div class="flex items-center xl:gap-3 gap-1">
                      <a class="lg:text-sm leading-[23px] text-[13px] dark:text-white-10 font-medium">
                        سروش نوروزی
                      </a>
                      <div>
                        <svg class="block dark:hidden" width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle cx="1.5" cy="1.5" r="1.5" fill="#181818"></circle>
                        </svg>
                        <svg class="hidden dark:block" width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle cx="1.5" cy="1.5" r="1.5" fill="#ECECEC"></circle>
                        </svg>
                      </div>
                      <p class="lg:text-sm leading-[23px] text-[13px] dark:text-white-10 font-medium">
                        3 سال قبل
                      </p>
                      <div>
                        <svg class="block dark:hidden" width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle cx="1.5" cy="1.5" r="1.5" fill="#181818"></circle>
                        </svg>
                        <svg class="hidden dark:block" width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle cx="1.5" cy="1.5" r="1.5" fill="#ECECEC"></circle>
                        </svg>
                      </div>
                      <a class="lg:text-sm leading-[23px] text-[13px] font-medium text-blue-500">
                        ادامه مطلب
                      </a>
                    </div>
                  </div>



                </div>
              </div>
            </div>
          </section> -->
          <!-- Digital currency End-->
        </div>
        <!-- e2 -->
        <!-- s3 -->
        <div class="col-span-1 lg:block hidden">
          <div class="top-[130px] sticky">
            <!-- International payment Start-->
            

          <?php
  if (!empty($terms) && !is_wp_error($terms)) {
      if (count($terms) > 0 ) {
          $term = $terms[1];
          // Get the link to the term archive
          $term_link = get_term_link($term);
          // Check if the link was retrieved successfully
          if (!is_wp_error($term_link)) {
            ?>
                      <!-- Open an account section start -->
                      <section>
                          <div class="flex justify-between">
                              <div class="flex items-center">
                                  <div class="w-1 h-7 bg-blue-500 rounded-[3px]"></div>
                                  <p class="text-[17px] leading-[25px] dark:text-white-10 font-semibold ps-2">
                                      <?= esc_html($term->name); ?>
                                  </p>
                              </div>
                              <a href="<?= esc_url($term_link); ?>" class="bg-dark-14 dark:bg-blue-500 cursor-pointer hover-element-blue dark:text-white-10 lg:text-sm leading-[25px] text-xs font-medium px-[15px] py-[5px] rounded-md">
                                  مشاهده همه
                              </a>
                          </div>
                          <?php
                          $args = array(
                              'post_type' => 'news',
                              'tax_query' => array(
                                  array(
                                      'taxonomy' => 'category-news',
                                      'field'    => 'term_id',
                                      'terms'    => $term->term_id,
                                  ),
                              ),
                              'posts_per_page' => 4,
                              'orderby' => 'date',
                              'order'   => 'DESC',
                          );
                          $posts_query = new WP_Query($args);
                          if ($posts_query->have_posts()) {
                              $x = 0;
                              while ($posts_query->have_posts()) {
                                  $x++;
                                  $posts_query->the_post();
                                  $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                  
                                  if ($x == 1) { ?>
                                      <div class="relative pt-4">
                                          <a href="<?=esc_url(get_permalink()); ?>">
                                              <img src="<?=($featured_image_url) ? $featured_image_url : RTARIA_IMAGES.'/blog-1-1.png' ;?>" class="w-full h-[223px] object-cover rounded-md">
                                          </a>
                                          <a href="<?=esc_url(get_permalink()); ?>" class="text-white-10 text-sm leading-[23px] bg-blue-500 rounded-md px-3 py-1 absolute bottom-3 right-3">
                                              <?=esc_html(get_the_title()); ?>
                                          </a>
                                      </div>
                                      <a href="<?=esc_url(get_permalink()); ?>" class="text-[15px] block leading-[18px] dark:text-white-10 pt-[11px] font-medium">
                                          <?=esc_html(get_the_excerpt()); ?>
                                      </a>
                                      <p class="text-sm dark:text-dark-5 font-medium pt-3 pb-[15px]">
                                          <?=human_time_diff(get_the_time('U'), current_time('U')) . ' قبل'; ?>
                                      </p>
                                  <?php } else { ?>

                                      <div class="grid grid-cols-5 border-t-2 border-dark-32 dark:border-dark-66 py-[15px]">
                                          <a href="<?=esc_url(get_permalink()); ?>">
                                              <img src="<?=($featured_image_url) ? $featured_image_url : RTARIA_IMAGES.'/blog-1-1-1.png' ;?>" class="col-span-2 w-full h-full rounded-md object-contain" alt="">
                                          </a>
                                          <div class="col-span-3 pr-3">
                                              <a href="<?=esc_url(get_permalink()); ?>" class="text-sm leading-[23px] font-medium text-blue-500">
                                                  <?=esc_html(get_the_title()); ?>
                                              </a>
                                              <a href="<?=esc_url(get_permalink()); ?>" class="text-sm block leading-[18px] dark:text-white-10 font-medium pt-[3px]">
                                                  <?=esc_html(get_the_excerpt()); ?>
                                              </a>
                                          </div>
                                      </div>
                                  <?php }
                              }
                              wp_reset_postdata(); // Important to reset after the custom query
                          } else {
                              echo '<p>خبری پیدا نشد.</p>';
                          }
                          ?>
                          <?php
                        } else {
                            echo 'خطا در دریافت لینک دسته بندی';
                        }
                    } else {
                        echo '<p>تعداد دسته بندی تمام شد</p>';
                    }
                } else {
                    echo '<p>خطا در واکشی دسته</p>';
                }
                ?>
                </section>
            <!-- International payment End-->
            <!-- Latest comments Start-->
            <section class="pt-7">
              <div class="flex items-center">
                <div class="w-1 h-7 bg-blue-500 rounded-[3px]"></div>
                <p class="text-[17px] leading-[25px] dark:text-white-100 font-semibold ps-2">
                  جدیدترین نظرات
                </p>
              </div>
              <?php
              // Query the latest 5 top-level comments (not replies)
              $recent_comments = get_comments( array(
                  'number'      => 5,           // Number of comments to retrieve
                  'status'      => 'approve',   // Only show approved comments
                  'post_status' => 'publish',   // Only from published posts
                  'parent'      => 0,           // Only top-level comments
              ) );
              
              if ( ! empty( $recent_comments ) ) {
                $x = 0;
                  foreach ( $recent_comments as $comment ) {
                    $x++;
                      // Get the post ID and its permalink
                      $post_id = $comment->comment_post_ID;
                      $post_title = get_the_title( $post_id );
                      $post_link = get_permalink( $post_id );
                      $comment_text = esc_html( wp_trim_words( $comment->comment_content, 15 ) );
                      $comment_date = get_comment_date( '', $comment );

                      $comment_time = get_comment_time('U', $comment);
                      $human_time_diff = human_time_diff($comment_time, current_time('timestamp')) . ' قبل';
                    ?>
                    <a href="<?=$post_link;?>" class="pt-[18px] block hover-svg-move">
                      <div class="flex items-center <?=($x != 1) ? 'border-t-2' : ''?> border-dark-32 dark:border-dark-66 pt-[19px] gap-3">
                        <p class="text-[17px] leading-[25px] dark:text-white-10 font-medium">
                          <?=esc_html( $comment->comment_author )?>
                        </p>
                        <p class="text-sm leading-[24px] dark:text-white-10 font-medium">
                        <?=esc_html( $human_time_diff )?> در "<?=$post_title;?>"
                        </p>
                      </div>
                      <div class="flex items-center gap-[10px] pt-[12px]">
                        <p class="text-sm text-justify leading-[27px] dark:text-white-10 font-medium">
                          <?=$comment_text;?>
                        </p>
                        <div>
                          <svg class="block dark:hidden main-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="m15 19-6-7 6-7" stroke="#3B3B3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                          <svg class="hidden dark:block main-svg" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="m15 19.5-6-7 6-7" stroke="#ECECEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </div>
                    </a>
                    <?php
                    } 
                }else {
                }
              ?>

            </section>
            <!-- Latest comments End-->

            <!-- virtual server Start-->
            <?php
  if (!empty($terms) && !is_wp_error($terms)) {
      if (count($terms) > 0 ) {
          $term = $terms[2];
          // Get the link to the term archive
          $term_link = get_term_link($term);
          // Check if the link was retrieved successfully
          if (!is_wp_error($term_link)) {
            ?>
                      <!-- Open an account section start -->
                      <section>
                          <div class="flex justify-between mt-10">
                              <div class="flex items-center">
                                  <div class="w-1 h-7 bg-blue-500 rounded-[3px]"></div>
                                  <p class="text-[17px] leading-[25px] dark:text-white-10 font-semibold ps-2">
                                      <?= esc_html($term->name); ?>
                                  </p>
                              </div>
                              <a href="<?= esc_url($term_link); ?>" class="bg-dark-14 dark:bg-blue-500 cursor-pointer hover-element-blue dark:text-white-10 lg:text-sm leading-[25px] text-xs font-medium px-[15px] py-[5px] rounded-md">
                                  مشاهده همه
                              </a>
                          </div>
                          <?php
                          $args = array(
                              'post_type' => 'news',
                              'tax_query' => array(
                                  array(
                                      'taxonomy' => 'category-news',
                                      'field'    => 'term_id',
                                      'terms'    => $term->term_id,
                                  ),
                              ),
                              'posts_per_page' => 4,
                              'orderby' => 'date',
                              'order'   => 'DESC',
                          );
                          $posts_query = new WP_Query($args);
                          if ($posts_query->have_posts()) { 
                            $x = 0;
                              while ($posts_query->have_posts()) {
                                $x++;
                                  $posts_query->the_post();
                                  $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>


                                  <div class="<?=($x != 1) ? 'border-t-2' : '' ?> grid grid-cols-5 gap-[11px] items-center border-dark-32 dark:border-dark-66 py-4">
                                    <a href="<?=esc_url(get_permalink()); ?>">
                                      <img src="<?=($featured_image_url) ? $featured_image_url : RTARIA_IMAGES.'/blog-3-3-3.png' ;?>" class="col-span-2 w-full h-full rounded-md object-cover" alt="<?=get_the_title();?>">
                                    </a>
                                    <div class="col-span-3">
                                      <a href="<?=esc_url(get_permalink()); ?>" class="block text-sm text-start font-medium leading-[23px] text-blue-500">
                                        <?=esc_html(get_the_title()); ?>
                                      </a>
                                      <a class="block lg:text-sm leading-[18px] dark:text-white-10 text-xs text-justify font-medium pt-[3px]">
                                        <?=esc_html(get_the_excerpt()); ?>
                                      </a>
                                    </div>
                                  </div>

                                  <?php }
                              }
                              wp_reset_postdata(); // Important to reset after the custom query
                          } else {
                              echo '<p>خبری پیدا نشد.</p>';
                          }
                          ?>
                          <?php
                        } else {
                            echo 'خطا در دریافت لینک دسته بندی';
                        }
                    } else {
                        echo '<p>تعداد دسته بندی تمام شد</p>';
                    }
                // } else {
                //     echo '<p>خطا در واکشی دسته</p>';
                // }
                ?>
              
            </section>
            <!-- virtual server End-->
            <!-- sentence of the day Start-->
            <section class="bg-white-100 dark:bg-dark-11">
              <div class="px-3 py-4">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <div class="w-1 h-7 bg-blue-500 rounded-[3px]"></div>
                    <p class="text-[17px] leading-[25px] dark:text-white-10 font-semibold ps-2">
                      جمله روز
                    </p>
                  </div>
                  <div class="flex items-center gap-2">
                    <button onclick="swiperSentence.slidePrev()">
                      <svg class="hidden dark:block" width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m1 1 6 7-6 7" stroke="#ECECEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                      <svg class="block dark:hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m9 5 6 7-6 7" stroke="#3B3B3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </button>
                    <button onclick="swiperSentence.slideNext()">
                      <svg class="block dark:hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m15 19-6-7 6-7" stroke="#3B3B3B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                      <svg class="hidden dark:block" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m15 19.5-6-7 6-7" stroke="#ECECEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="swiper sentence-slider swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
                  <div class="swiper-wrapper" id="swiper-wrapper-7224dc1ced6103b93" aria-live="off" style="transition-duration: 500ms; transform: translate3d(297px, 0px, 0px);">
                    
                    
                  <div class="swiper-slide swiper-slide-next swiper-slide-prev" role="group" aria-label="1 / 2" data-swiper-slide-index="0" style="width: 297px;">
                      <div>
                 <div class="flex justify-between items-center gap-3 py-5">
                          <div class="w-[49px] h-[32px]">
                            <svg width="58" height="45" viewBox="0 0 58 45" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <mask id="b" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="58" height="45">
                                <path transform="rotate(15 9.255 .5)" fill="url(#a)" d="M9.255.5h49.531v32.28H9.255z"></path>
                              </mask>
                              <g mask="url(#b)">
                                <path fill="#2860E6" d="m9.255.5 47.843 12.82-8.354 31.18L.9 31.68z"></path>
                              </g>
                              <defs>
                                <pattern id="a" patternContentUnits="objectBoundingBox" width="1" height="1">
                                  <use xlink:href="#c" transform="matrix(.00526 0 0 .00806 -.293 -1.306)"></use>
                                </pattern>
                                <image id="c" width="247" height="286" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPcAAAEeCAYAAABWsIOtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAA1sSURBVHgB7d3fbpNHGsfxZ+Z1HJqyVXoFdc+qqs3GqvYYc7ASDYUmh1WomlwBcAVJrgC4ggR1A4cJ0ALSHmCOV7s2UK16hu8AV4WAEntmZxyHBeH8cfza77yT70eK0lKICuT3PvPvfUYEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABESQkQqVKlNnnq1JvJghRKez9m2ra5tTPWaFTLTYkc4UYUfJBPn2pNK1X83kV4WmmZFiuT+/4CJU1rpK6UeWyMqf728G9ViQzhRq59de5fFaUKS4eG+XANK1LdMbLy+8NyQyJAuJE7vkp/MiGX3XfvlQED3ZML+VoMISfcyJWpmZoP9fIwQt3D8tP75RXJKcKNXPjiXK00pmRVKanIaDW2jZzNYxXXAgRu6nztp2IitQyC7ZWKWmpff1ublZwh3AiaG4YvuSH42oiG4fuZdA+Wjc7/S44wLEewumFalrDkZh5OuBGkQIO9y5qrTx98c10CR7gRnC9natMFkZoEzFqZe/agvCkBI9wIil8VdwtYj9w/liRsTbeKXg55FZ0FNQRlTCs/HC9J+CbdQ2hDAka4EQxftZXYBcmP6amZfy9LoAg3gtGt2jmjl778e21aAkS4EYQcVu23koJckwARbgShqM0VySl/cu6rc7WKBIZwIwxKn5EccwEPbkrBVhgy193+ei45Z4yc/e1huSqBoHIjc2OqHeSCVL9Cq96EG5lTSlUkAqHNvQk3Mmet/qtEQisTzKuhhBuZUzrT1znTpfRPEgjCjezZiMItMhnK0JxwAykLZWheEAzd6sbr0riYaZPYktb6MyvqbaVSYpvttv0jMVK3Yhvzc6frgnzbHZpnfiiHfe4hWN14MVlMxmZFJ2esNbPqnTAfxgW8qUVV3a+7s93e2Vyc+zT6mzGmZmp+j7skEdE7Uq7/s5zpg5rKnaKfN/6s6EJy2QW0Ij7Q1tXoPp+f/kFgRWbd0392rFC8tv7Lq83tne0VF/KGxEpJ0zcLj4kpmIr7lGm4mXOnwIf61r3Xj1ywfZOBvir1QTpfx6qFYmH8uQv5qhsRlCRGxj6R2Njs9+4J9wB82PZCvVuth8iHfGz80frdlwsSG2UbEhutMt+7J9zHdOuX1z+5YXNt6KF+l3XzUqVXu1U8mu0ja22Mi4il8sx/PpMMEe5juHV365r7hlxLa/jdt90qXotlmJ6MJ1WJUKtlypIhwt2n265qWpX9Noev4n6YHkPA65udu7IbEhmVqJJkiHD3wQfbuKopoYgo4G5V7Y5ERqlsz8wT7iO6fe/1UlDB3hNJwI3RQfcAPw5r7KeSIcJ9BH6F2ohdllD5gBfGN/K8yNZtchDXwlrGK+aE+xC7FVHnoSvn9HgynsPuoe+Kbmie6cOWcB+iOFZcEpWPo5F+oe/W3Ve5u2p2jy7q653TavEg3KHqVO0Q59kHsErldg+8s2puzQ2JSJZ73YT7AJ2qnT+TeR6ed6q3jW9bLAuEex95rNp7/PD853t/ViSHfPU2VhYFAyPc+ygmYxXJsUQKua3euyvncQzP7Y7KbDuMcO9DqSSYXljH4c+857V6e0/vf+NPAeZ+a0yN2ReSEcLdg1+QGukLIUOS5+rtaSNzzL+Pj3D3UJBCFE3y/QMqzyfX6g/LDW3lLAE/HsLdg0pUFOH2Crq4IDnWCfi4lK3IaI6nWrnhPm5KSuyW+kMyQrh7sDaefl5aq8uSc34F/dn9sh+iXx3WIRf3d171d309fVC+YqWd2oOkXi1ndiiHcPeQ2XvawzGZ54W1d7ngXddtKadaWbuhfvag/PYSv8QmaS3kNSRDNEjsYbf9cDwd+7Qq+JX/qkTAD9Pdp4Xpc7Vls/te/ffHOB7sw3tn28ja77tf732n3OhgWwZmLeHGsFnrz5tHdTCkG3If7itfztSmEyPTSsm0eyR33sRS3VbJ1ldPJQ1l5Q8XtnryRjYPGyr7acDUTE0GpRXhDo7VtilGYtIZmv944S9VidB/73f6gwe3J26tybSrK3PuHmzLZrbCOTRGVwQjZaymb3lo/K0fEplE6zOCI/HDfElB4Q2XEgTHzZWia7XrHljR7N0PmzatwXdL3GJalttgHuHuYTuJL9zO5PrGSwJ+BG63pCIDcot7VckY4e5le6chEWonQriPwNrBpzDGmMeSMcLdg79ZU4mqSmQSS7gP88W5WslV3YoMKBFdlYwR7n20A3jypk6pkuBAY3rwYPtTb/Veh2NGjHDvR5uqxCaAy+lCp0QGfk1WBdLFlXDvo3PgI7ZXDSN6IWYYvp6pLYgM/mekbRgXLBDuAxhrU3tBIRTrv9pMb54MWRpVO5QhuUe4D9Ay29ejO9Cy/SrTK25CNTVT86/GlmRQ1gRTEAj3AfyquTUSVR9tU7Axvc6aCr9C7sr2sgzKTeOePfxmTQJBuA8RW/W2VpUE7ylqeeSCmcZDL6hCQLgP4au320JaEURp6nztmqQyHBff7y2om0oJ9xFc+m7ieoyHWk46N89ecqG8ImlQcjOUhbQ9hPuIVEsWY3xb7KTqBFtSmGd7vmobWZPAEO4j+mHuo4YVMyfIvVSDLZ2mDCuhVW2PcPdh92CL4R6rHOvOsZclLYGtkL+LcPdp/uLpNWNbcyMeoqf2CqpStiEnkN/uchW7ltocu6tzaUKgCPcx/Hjxk82kpctDP56qpGGkfdZ9XBUc29ff1maLifiOh2m/FRfkcHwP4T4mPwefvzjxuRGb+jaZHxX4r7u981HZTwVarVZqlVvr08/lhPDV+uuZ2oZSspHSPvb/uQf70/vlZQmYEgzs9sbrUjsxy0qpgW4Gtb63uDV3dtofry3OqfeG/et3t54foz/3B+YvTET/d16q1CY/mZDL4vuapx3qXU23Ol4OuWp7tDZOga/i7tOCC/mySdoV27n+10wfdnPJ7rxd1d3nx1rbzUvnT+9foVXn58qAot/K66yE74V6WPdK2LCH43sId4q6IV/rfsj6ry+njbGT2qqS+z6bVN1wGTHNVnusvjg30Tjq11aim4PegmLdg0QiNj1bmzQ7Q6vWe1b8tUaSA4R7iOYPqsQZUKadaZP8YfM3hbjFs3oabZJ6cQ/nzSeBz7PfxYJaTlhrSzIgq3RDIjfELih1tZWvK5kId16ksJhmVTvqYbk3pFs+6npLzmbdh7xfrJbnwKqbuxeNHvRmuqZbKT8RjRqmztdepDjvzmWwPSp3DhTbgx++iH0x7T3GpjI09y2T8hpsjwW1PNDqzMDbOtYG0ZFzNKx7kA125sD9ed989qC8IDlG5c4BV0FmZUCqHWGr5n2k0H3Ub3ctSM4R7sCt3325cNhhmEMpaczPhbUtN0zdAyYN6ZeVhjFyNvRjpUdFuIOnB263K+0wmuSPVn+/58782srZ3x6WqxIJ5twB81U7jS0wbZJcnKhKkxVdP+JWUNMfJ32Wk1Nn/aByBy2Fqu1Gqd1jsSdKUjy8WaE/ceZfAMnLcdJ+Ee5A3b73eimNqi3WRNV3/aj8UVQ/1O713/yP+7n1k/vluTy8AHJcDMsDtLrxomTELsug/ELahdNrckIpZZ64+lXZ+3cfavexEtO8+iCEOzA+2MVk/JGkIMa7zvphjN7UWi6ftFDvIdyBKRbGNySNJvmuahd29JqcYIVTUm+9iWsFvB+cLQ/I7V9erRqrFiQFvk3Tjxc+XhacWCyoBSLNYHeqdutkV20wLM+cm2NPFgtFH+yBj5i+ZczKD3OnG4ITjWF5hjqLZ7tz7PRa7voV8u8mPheceAzLM3Lr7qvZsUIx9V7aekcF2yQfo8WwfMT8MHw8GV+ySq6kPWzyi2jzfTRdRNwYlo+Qr9ZW1LVUTp59qD5/YaIsQBeVewR+3vizkhQKS1ZsRYbBzbPdcJwbSPEeKveQrd/b8gtm6a2E9+DvE+vcQAq8gwW1IRu40cIhdg+rEGx8iHAPmbHtoTVK4BQaDkK4hyxpJ4P289qHuUGwcRDm3CPwj3uvXqQ5PLfW3Lx08fSCAAegco+CkdSG5gQbR0W4R0ApW5UU+Dk2wcZREe4R2G7vDDzvtkquMsdGPwj3CCzOfdrcvQXjGJQ0/D72pe8mTlwHUwyGcI+IMfax9MmKVP2LIOxj4zg4fjoq2vqh+eWj/FQrtukm6itUawyCcI9Iq9WqjxV087AtMV+tk5ZePIm9xpEu9rlH6Na914/2e3mEao20MeceobYxH8y7faj9FtdOa+Jzgo00MSwfJe2v0U06VwT5ULsh+I1Wa+L64pzK5eXuCBvD8hFbv7v13Ch7k1ADAAAAQPT+B/mgsP7fx6TfAAAAAElFTkSuQmCC"></image>
                              </defs>
                            </svg>
                          </div>

                          <p class="text-sm dark:text-white-10 leading-[23px] font-medium">
                            خداوند همه چیز را در یک روز نیافرید. پس چه چیز باعث
                            شد که من بیندیشم می&zwnj;توانم همه چیز را در یک روز به
                            دست بیاورم؟
                          </p>
                        </div>
                      </div>
                      <div class="flex items-center gap-5">
                        <div class="w-10 h-1 bg-blue-500 rounded-[5px]"></div>
                        <p class="text-sm dark:text-white-10 leading-[23px] font-medium">
                          چارلی چاپلین
                        </p>
                      </div>
                    </div><div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 2" data-swiper-slide-index="1" style="width: 297px;">
                      <div>
                        <div class="flex justify-between items-center gap-3 py-5">
                          <div class="w-[49px] h-[32px]">
                            <svg width="58" height="45" viewBox="0 0 58 45" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <mask id="b" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="58" height="45">
                                <path transform="rotate(15 9.255 .5)" fill="url(#a)" d="M9.255.5h49.531v32.28H9.255z"></path>
                              </mask>
                              <g mask="url(#b)">
                                <path fill="#2860E6" d="m9.255.5 47.843 12.82-8.354 31.18L.9 31.68z"></path>
                              </g>
                              <defs>
                                <pattern id="a" patternContentUnits="objectBoundingBox" width="1" height="1">
                                  <use xlink:href="#c" transform="matrix(.00526 0 0 .00806 -.293 -1.306)"></use>
                                </pattern>
                                <image id="c" width="247" height="286" xlink:href="data:image/png;base64,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"></image>
                              </defs>
                            </svg>
                          </div>

                          <p class="text-sm dark:text-white-10 leading-[23px] font-medium">
                            خداوند همه چیز را در یک روز نیافرید. پس چه چیز باعث
                            شد که من بیندیشم می&zwnj;توانم همه چیز را در یک روز به
                            دست بیاورم؟
                          </p>
                        </div>
                      </div>
                      <div class="flex items-center gap-5">
                        <div class="w-10 h-1 bg-blue-500 rounded-[5px]"></div>
                        <p class="text-sm dark:text-white-10 leading-[23px] font-medium">
                          چارلی چاپلین
                        </p>
                      </div>
                    </div></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
              </div>
            </section>
            <!-- sentence of the day End-->
          </div>
        </div>
        <!-- e3 -->
      </div>
    </section>
    <!-- Main news page End-->


    <?php get_template_part('template-parts/links'); ?>
    <?php get_footer();?>