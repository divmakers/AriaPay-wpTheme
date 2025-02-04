<?php
$current_post_id = get_the_ID(); // Get the current post ID
$current_post_type = get_post_type( $current_post_id );
// Get the categories of the current post
$current_categories = get_the_category($current_post_id);
$category_ids = wp_list_pluck($current_categories, 'term_id');

$args = array(
    'post_type'      => $current_post_type, // Query for both 'news' and 'blog' post types
    'post_status'    => 'publish',
    'posts_per_page' => 10,
    'post__not_in'   => array($current_post_id), // Exclude the current post
    'meta_query'     => array(
        array(
            'key'     => '_thumbnail_id', // Key for featured image
            'compare' => 'EXISTS' // Ensure the featured image exists
        )
    ),
);

$related_posts_query = new WP_Query($args);

if ($related_posts_query->have_posts()) {
  $results = array();
  while ($related_posts_query->have_posts()) {
    $related_posts_query->the_post();
      
      // Get categories
      $categories = get_the_category();
      $category_links = array();
      
      if (!empty($categories)) {
          foreach ($categories as $category) {
              $category_links[] = array(
                  'name' => $category->name,
                  'link' => get_category_link($category->term_id)
              );
          }
      }

      $results[] = array(
          'title'         => get_the_title(),
          'link'          => get_permalink(),
          'img_link'      => get_the_post_thumbnail_url(),
          'categories'    => $category_links
      );
  }
  wp_reset_postdata();
}

if ($results) {
?>
<!-- Blogs  Start -->
<section class="md:mt-[76px] mt-[49px] md:mb-[165px] mb-[60px]">
    <div class="flex items-center mb-[30px]">
      <div class="bg-blue-500 rounded-[3px] w-[14px] h-[14px]"></div>
      <p class="text-black-550 leading-[32px] dark:text-dark-25 md:text-[25px] font-bold mr-5">
        مقالات مرتبط
      </p>
      <div class="mr-auto flex items-center gap-[10px]">
        <button id="prev-blogsNews" onclick="blogsNewsSwiper.slidePrev()"
          class="w-[37px] h-[37px] flex items-center bg-blue-100 dark:bg-dark-26 justify-center rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none"
            class="hidden md:block dark:hidden">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M11.7131 5.24764C11.9614 4.99932 12.364 4.99932 12.6123 5.24764L17.6993 10.3346C17.9476 10.5829 17.9476 10.9855 17.6993 11.2339L12.6123 16.3208C12.364 16.5691 11.9614 16.5691 11.7131 16.3208C11.4648 16.0725 11.4648 15.6699 11.7131 15.4216L15.7145 11.4201H3.68445C3.33327 11.4201 3.04858 11.1354 3.04858 10.7842C3.04858 10.433 3.33327 10.1484 3.68445 10.1484H15.7145L11.7131 6.1469C11.4648 5.89858 11.4648 5.49597 11.7131 5.24764Z"
              fill="#525FE1" />
          </svg>
          <svg class="block md:hidden dark:hidden" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
            viewBox="0 0 15 15" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M8.50925 3.74373C8.67479 3.57818 8.9432 3.57818 9.10875 3.74373L12.5001 7.13503C12.6656 7.30058 12.6656 7.56899 12.5001 7.73454L9.10875 11.1258C8.9432 11.2914 8.67479 11.2914 8.50925 11.1258C8.3437 10.9603 8.3437 10.6919 8.50925 10.5263L11.1769 7.8587H3.15682C2.9227 7.8587 2.73291 7.66891 2.73291 7.43479C2.73291 7.20066 2.9227 7.01087 3.15682 7.01087H11.1769L8.50925 4.34323C8.3437 4.17768 8.3437 3.90928 8.50925 3.74373Z"
              fill="#525FE1" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none"
            class="hidden dark:block">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M8.71302 0.247643C8.96134 -0.000679257 9.36395 -0.000679257 9.61227 0.247643L14.6992 5.3346C14.9476 5.58292 14.9476 5.98553 14.6992 6.23385L9.61227 11.3208C9.36395 11.5691 8.96134 11.5691 8.71302 11.3208C8.46469 11.0725 8.46469 10.6699 8.71302 10.4216L12.7145 6.4201H0.684385C0.333204 6.4201 0.0485153 6.13541 0.0485153 5.78423C0.0485153 5.43305 0.333204 5.14836 0.684385 5.14836H12.7145L8.71302 1.1469C8.46469 0.898576 8.46469 0.495966 8.71302 0.247643Z"
              fill="#FEFEFE" />
          </svg>
        </button>
        <button id="next-blogsNews" onclick="blogsNewsSwiper.slideNext()"
          class="w-[37px] h-[37px] flex items-center bg-blue-500 justify-center rounded-full">
          <svg class="hidden md:block" xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12"
            fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M6.28691 11.3208C6.03859 11.5692 5.63598 11.5692 5.38766 11.3208L0.300702 6.23388C0.05238 5.98556 0.05238 5.58295 0.300702 5.33463L5.38766 0.247672C5.63598 -0.000650622 6.03859 -0.000650657 6.28691 0.247672C6.53524 0.495994 6.53524 0.898605 6.28691 1.14693L2.28545 5.14839L14.3155 5.14839C14.6667 5.14839 14.9514 5.43307 14.9514 5.78425C14.9514 6.13544 14.6667 6.42012 14.3155 6.42012L2.28545 6.42013L6.28691 10.4216C6.53524 10.6699 6.53524 11.0725 6.28691 11.3208Z"
              fill="white" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="11" height="9" viewBox="0 0 11 9" fill="none"
            class="block md:hidden">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M4.97806 8.12584C4.81251 8.29139 4.5441 8.29139 4.37856 8.12584L0.987251 4.73454C0.821703 4.56899 0.821703 4.30058 0.987251 4.13503L4.37856 0.743727C4.5441 0.578179 4.81251 0.578179 4.97806 0.743727C5.14361 0.909275 5.14361 1.17768 4.97806 1.34323L2.31042 4.01087L10.3305 4.01087C10.5646 4.01087 10.7544 4.20066 10.7544 4.43478C10.7544 4.6689 10.5646 4.8587 10.3305 4.8587L2.31042 4.8587L4.97806 7.52634C5.14361 7.69188 5.14361 7.96029 4.97806 8.12584Z"
              fill="white" />
          </svg>
        </button>
      </div>
    </div>
    <div class="swiper home-blogs-news-slider">
      <div class="swiper-wrapper">


<?php foreach ($results as $result): ?>
    <div class="swiper-slide">
        <div class="rounded-[9px] overflow-hidden">
        <div class="h-[180px] relative">
                <a href="<?php echo esc_url($result['link']); ?>">
                <img src="<?php echo esc_url($result['img_link']); ?>" class="w-full h-full rounded-tr-[9px] rounded-tl-[9px]" alt="<?php echo esc_attr($result['title']); ?>" />
                </a>
                <?php if (!empty($result['categories'])): ?>
                <div class="absolute px-3 py-2 text-white-100 top-[14px] right-[11px] bg-blue-40 rounded-[9px]">
                    <p class="font-bold text-xs leading-[16px]"><?php echo esc_html($result['categories'][0]['name']); ?></p>
                </div>
                <?php endif; ?>
            </div>
            <div class="bg-white-100 pt-[35px] px-[14px] pb-[22px] dark:bg-dark-1">
                <a href="<?php echo esc_url($result['link']); ?>" class="font-medium mb-[21px] text-black-9 text-[15px] leading-[19px] text-justify dark:text-dark-14">
                <?php echo esc_html($result['title']); ?>
                </a>
                <div class="flex items-center">
                <!-- Author and Date SVGs -->
                <svg class="hidden md:block" xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.28691 11.3208C6.03859 11.5692 5.63598 11.5692 5.38766 11.3208L0.300702 6.23388C0.05238 5.98556 0.05238 5.58295 0.300702 5.33463L5.38766 0.247672C5.63598 -0.000650622 6.03859 -0.000650657 6.28691 0.247672C6.53524 0.495994 6.53524 0.898605 6.28691 1.14693L2.28545 5.14839L14.3155 5.14839C14.6667 5.14839 14.9514 5.43307 14.9514 5.78425C14.9514 6.13544 14.6667 6.42012 14.3155 6.42012L2.28545 6.42013L6.28691 10.4216C6.53524 10.6699 6.53524 11.0725 6.28691 11.3208Z" fill="white" />
                </svg>
                <a class="text-black-11 dark:text-dark-5 mr-2 font-semibold leading-[17px] text-[13px]"><?php the_author(); ?></a>
                <div class="w-[5px] h-[5px] mx-3 bg-gray-10 rounded-full"></div>
                <p class="text-black-11 dark:text-dark-5 font-semibold leading-[17px] text-[13px]"><?php echo get_the_date(); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
      
        
      </div>
    </div>
  </section>
  <!-- Blogs  End -->
<?php
   }
   
   
   ?>