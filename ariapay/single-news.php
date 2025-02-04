<?php
get_header();





$post_id = get_the_ID();
if (have_posts()) {
  while (have_posts()){
    the_post();


$comments = get_comment_count($post_id);
$comments_count = $comments['approved'];

switch ($post_type = get_post_type()) {

    case 'blog':
    $current_postType = 'بلاگ';
    $current_postType_url = get_site_url().'/'.$post_type;
    $categories = get_the_terms(get_the_ID(), 'category-blog');
    break;

    case 'trainings':
    $current_postType = 'آموزش‌ها';
    $current_postType_url = get_site_url().'/'.$post_type;
    $categories = get_the_terms(get_the_ID(), 'category-trainings');
    break;

    case 'news':
    $current_postType = 'اخبار آریا پی';
    $current_postType_url = get_site_url().'/'.$post_type;
    $categories = get_the_terms(get_the_ID(), 'category-news');
    break;
    
    default:
    $current_postType = null;
    break;
}
?>


<!-- BreadCrumb Start  -->
<section class="bg-white-900 dark:bg-blue-800 md:mt-[110px] mt-[50px]">
      <div class="flex items-center container md:pt-[27px] pt-5">
        <div class="flex items-center">
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
        </div>
        <div class="flex items-center">
          <a href="<?=get_site_url()?>" alt="آریا پِی" class="mr-[10px] dark:text-gray-500 text-black-15 font-semibold text-xs md:text-[19px] leading-[27px]">
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
        </div>
        <div class="flex items-center">
          <?php if ($current_postType) { ?>
            <a href="<?=$current_postType_url?>" class="mr-2 md:mr-[14px] whitespace-nowrap text-black-11 dark:text-dark-43 text-[12px] md:text-[19px] leading-[27px] font-semibold">
                <?=$current_postType?>
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
          <?php } ?>
        </div>
        <div class="flex items-center">
        <?php

            if ( ! empty( $categories ) ) {
            $current_postCategory = $categories[0]; // Get the first category ID
            }
            // print_r($categories[0]);
            
            if ($current_postCategory) { ?>
            <a href="<?=esc_url( get_category_link( $current_postCategory->term_id ) )?>" class="mr-2 md:mr-[14px] whitespace-nowrap text-black-11 dark:text-dark-43 text-[12px] md:text-[19px] leading-[27px] font-semibold">
                <?=esc_html( $current_postCategory->name );?>
            </a>
            <?php } ?>
        </div>
        <div class="hidden md:flex">
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
            <?=get_the_title();?>
          </p>
        </div>
      </div>
    </section>
<!-- BreadCrumb End -->


<section class="bg-white-900 dark:bg-blue-800 pt-[15px] md:pt-[17px] md:pb-[42px] pb-[39px]">
      <div class="container md:grid grid-cols-8 gap-x-9">
        <div class="col-span-8">
          <p class="md:text-[21px] text[15px] md:leading-[44px] leading-[31px] dark:text-white-100 text-justify font-semibold">
            <?=get_the_title();?>
          </p>
          <div class="flex items-center gap-[10px]">
            <p class="md:text-[15px] text-[13px] leading-[25px] dark:text-dark-69">
              <?=get_the_author();?>
            </p>
            <div>
              <svg class="block dark:hidden" width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.5" cy="1.5" r="1.5" fill="#181818"></circle>
              </svg>
              <svg class="hidden dark:block" width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.5" cy="1.5" r="1.5" fill="#ECECEC"></circle>
              </svg>
            </div>
            <p class="md:text-[15px] text-[13px] leading-[25px] dark:text-dark-69">
                <?php echo human_time_diff(get_the_time('U'), current_time('U')) . ' قبل'; ?>
            </p>
            <!-- <div>
              <svg class="block dark:hidden" width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.5" cy="1.5" r="1.5" fill="#181818"></circle>
              </svg>
              <svg class="hidden dark:block" width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.5" cy="1.5" r="1.5" fill="#ECECEC"></circle>
              </svg>
            </div>
            <p class="md:text-[15px] text-[13px] leading-[25px] dark:text-dark-69">
              79 بازید
            </p> -->
            <div>
              <svg class="block dark:hidden" width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.5" cy="1.5" r="1.5" fill="#181818"></circle>
              </svg>
              <svg class="hidden dark:block" width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.5" cy="1.5" r="1.5" fill="#ECECEC"></circle>
              </svg>
            </div>
            <p class="md:text-[15px] text-[13px] leading-[25px] dark:text-dark-69">
                <?= $comments_count; ?> کامنت
            </p>
          </div>
        </div>
        <!-- sr Start-->
        <article class="col-span-6 md:pt-[27px] pt-[21px]">
          <section>
            <div class="relative">
              <img src="<?= (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : RTARIA_ASSETS . '/images/blog-1.jpeg'; ?>" alt="<?the_title();?>" class="w-full md:h-[529px] h-[179px] object-cover rounded-md">
              <a <?=esc_url( get_category_link( $current_postCategory->term_id ) );?> class="text-white-10 text-sm leading-[23px] bg-blue-500 rounded-md px-[21px] py-[6px] absolute md:top-[45px] top-[18px] md:right-4 right-[14px]"><?=esc_html( $current_postCategory->name );?></a>
            </div>
            <div class="pt-[27px]">
                
                <?php the_content();?>
                
            </div>
          </section>
          <?php get_template_part('template-parts/comments'); ?>
        </article>
        <!-- sr End-->
        <!-- sl Start-->
        <div class="col-span-2 pt-[27px] hidden md:block">
          <div class="sticky top-[130px]">
            <!-- latest news Start-->
            <section>
              <div class="flex items-center">
                <div class="w-1 h-7 bg-blue-500 rounded-[3px]"></div>
                <p class="text-[17px] leading-[25px] dark:text-white-10 font-semibold ps-2">
                  اخرین خبر ها
                </p>
              </div>
              <div class="swiper singleNews swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-35d43959d71968d6" aria-live="off" style="transition-duration: 500ms; transform: translate3d(618px, 0px, 0px);">
                  
                  
                  
                <div class="swiper-slide swiper-slide-next" role="group" aria-label="1 / 3" data-swiper-slide-index="0" style="width: 309px;">
                    <img src="<?=RTARIA_IMAGES?>/singleNews3.png" class="w-full h-full object-cover pt-[15px] rounded-md">
                    <a class="lg:text-[16px] block md:text-sm leading-[18px] dark:text-dark-69 pt-[10px] font-medium">
                      افتتاح حساب بایننس و چالش های پیش روی شما
                    </a>
                    <p class="lg:text-sm md:text-xs leading-[23px] dark:text-dark-69 pt-[10px]">
                      24 دقیقه قبل
                    </p>
                  </div><div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 3" data-swiper-slide-index="1" style="width: 309px;">
                    <img src="<?=RTARIA_IMAGES?>/singleNews3.png" class="w-full h-full object-cover pt-[15px] rounded-md">
                    <p class="lg:text-[16px] md:text-sm leading-[18px] dark:text-dark-69 pt-[10px] font-medium">
                      افتتاح حساب بایننس و چالش های پیش روی شما
                    </p>
                    <p class="lg:text-sm md:text-xs leading-[23px] dark:text-dark-69 pt-[10px]">
                      24 دقیقه قبل
                    </p>
                  </div><div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 3" data-swiper-slide-index="2" style="width: 309px;">
                    <img src="<?=RTARIA_IMAGES?>/singleNews3.png" class="w-full h-full object-cover pt-[15px] rounded-md">
                    <p class="lg:text-[16px] md:text-sm leading-[18px] dark:text-dark-69 pt-[10px] font-medium">
                      افتتاح حساب بایننس و چالش های پیش روی شما
                    </p>
                    <p class="lg:text-sm md:text-xs leading-[23px] dark:text-dark-69 pt-[10px]">
                      24 دقیقه قبل
                    </p>
                  </div></div>
                <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" aria-current="true"></span></div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </section>
            <!-- latest news End-->
          </div>
        </div>
        <!-- sl End-->
      </div>
    </section>




<?php get_template_part('template-parts/links'); ?>
<?php
  }
}
get_footer();