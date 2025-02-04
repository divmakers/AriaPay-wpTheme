<?php
get_header();
$post_id = get_the_ID();
if (have_posts()) {
    while (have_posts()) {
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
        <section class="container mt-[87px] md:mt-[133px]">
            <div class="hidden md:flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27" fill="none"
                    class="hidden md:block dark:hidden">
                    <path
                        d="M2.86207 14.5145C2.46029 11.7222 2.25939 10.326 2.83167 9.13228C3.40396 7.93856 4.62205 7.21295 7.05823 5.76173L8.5246 4.88822C10.7369 3.57037 11.8431 2.91144 13.0653 2.91144C14.2876 2.91144 15.3938 3.57037 17.6061 4.88822L19.0724 5.76173C21.5086 7.21295 22.7267 7.93856 23.299 9.13228C23.8713 10.326 23.6704 11.7222 23.2686 14.5145L22.9734 16.5659C22.4573 20.1528 22.1992 21.9462 20.955 23.0176C19.7107 24.089 17.886 24.089 14.2365 24.089H11.8941C8.24465 24.089 6.41992 24.089 5.17567 23.0176C3.93142 21.9462 3.67336 20.1528 3.15725 16.5659L2.86207 14.5145Z"
                        stroke="#4F4F4F" stroke-width="1.58831"></path>
                    <path
                        d="M9.88477 17.7355C10.7852 18.4029 11.8803 18.7944 13.0614 18.7944C14.2425 18.7944 15.3376 18.4029 16.238 17.7355"
                        stroke="#4F4F4F" stroke-width="1.58831" stroke-linecap="round"></path>
                </svg>
                <svg class="block md:hidden dark:hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                    viewBox="0 0 16 17" fill="none">
                    <path
                        d="M1.57865 9.13871C1.32569 7.38067 1.19921 6.50166 1.55952 5.7501C1.91982 4.99853 2.68673 4.54169 4.22055 3.62801L5.14377 3.07805C6.53663 2.24833 7.23306 1.83347 8.0026 1.83347C8.77214 1.83347 9.46858 2.24833 10.8614 3.07804L11.7847 3.628C13.3185 4.54169 14.0854 4.99853 14.4457 5.7501C14.806 6.50166 14.6795 7.38068 14.4266 9.13871L14.2407 10.4303C13.9158 12.6886 13.7533 13.8177 12.9699 14.4923C12.1865 15.1668 11.0377 15.1668 8.73999 15.1668H7.26522C4.96752 15.1668 3.81867 15.1668 3.03529 14.4923C2.25191 13.8177 2.08944 12.6886 1.7645 10.4303L1.57865 9.13871Z"
                        stroke="#4F4F4F"></path>
                    <path d="M6 11.1667C6.56692 11.5869 7.25638 11.8333 8 11.8333C8.74362 11.8333 9.43308 11.5869 10 11.1667"
                        stroke="#4F4F4F" stroke-linecap="round"></path>
                </svg>
                <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27"
                    fill="none">
                    <path
                        d="M2.86207 14.5145C2.46029 11.7222 2.25939 10.326 2.83167 9.13228C3.40396 7.93856 4.62205 7.21295 7.05823 5.76173L8.5246 4.88822C10.7369 3.57037 11.8431 2.91144 13.0653 2.91144C14.2876 2.91144 15.3938 3.57037 17.6061 4.88822L19.0724 5.76173C21.5086 7.21295 22.7267 7.93856 23.299 9.13228C23.8713 10.326 23.6704 11.7222 23.2686 14.5145L22.9734 16.5659C22.4573 20.1528 22.1992 21.9462 20.955 23.0176C19.7107 24.089 17.886 24.089 14.2365 24.089H11.8941C8.24465 24.089 6.41992 24.089 5.17567 23.0176C3.93142 21.9462 3.67336 20.1528 3.15725 16.5659L2.86207 14.5145Z"
                        stroke="#CDCDCD" stroke-width="1.58831"></path>
                    <path
                        d="M9.88477 17.7355C10.7852 18.4029 11.8803 18.7944 13.0614 18.7944C14.2425 18.7944 15.3376 18.4029 16.238 17.7355"
                        stroke="#CDCDCD" stroke-width="1.58831" stroke-linecap="round"></path>
                </svg>
                <a href="<?=get_site_url()?>" alt="آریا پی" class="mr-[10px] dark:text-gray-500 text-black-15 font-semibold text-[12px] md:text-[19px] leading-[27px]">
                    آریا پی
                </a>
                <svg class="mr-[11px] hidden md:block dark:hidden" xmlns="http://www.w3.org/2000/svg" width="26" height="27"
                    viewBox="0 0 26 27" fill="none">
                    <path d="M16.1775 6.08789L9.82422 13.5L16.1775 20.9122" stroke="#4F4F4F" stroke-width="1.58831"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <svg class="block md:hidden mr-[7px] dark:hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                    viewBox="0 0 16 17" fill="none">
                    <path d="M10 3.83334L6 8.50001L10 13.1667" stroke="#4F4F4F" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
                <svg class="hidden dark:block mr-[7px] md:mr-[11px]" xmlns="http://www.w3.org/2000/svg" width="26" height="27"
                    viewBox="0 0 26 27" fill="none">
                    <path d="M16.1775 6.08786L9.82422 13.5L16.1775 20.9121" stroke="#CDCDCD" stroke-width="1.58831"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <?php if ($current_postType) { ?>
                    <a href="<?=$current_postType_url?>"
                        class="mr-2 md:mr-[14px] whitespace-nowrap text-black-11 dark:text-dark-43 text-[12px] md:text-[19px] leading-[27px] font-semibold">
                        <?=$current_postType?>
                    </a>
                    <svg class="mr-[11px] hidden md:block dark:hidden" xmlns="http://www.w3.org/2000/svg" width="26" height="27"
                        viewBox="0 0 26 27" fill="none">
                        <path d="M16.1775 6.08789L9.82422 13.5L16.1775 20.9122" stroke="#4F4F4F" stroke-width="1.58831"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <svg class="block md:hidden mr-[7px] dark:hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                        viewBox="0 0 16 17" fill="none">
                        <path d="M10 3.83334L6 8.50001L10 13.1667" stroke="#4F4F4F" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                    <svg class="hidden dark:block mr-[7px] md:mr-[11px]" xmlns="http://www.w3.org/2000/svg" width="26" height="27"
                        viewBox="0 0 26 27" fill="none">
                        <path d="M16.1775 6.08786L9.82422 13.5L16.1775 20.9121" stroke="#CDCDCD" stroke-width="1.58831"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                <?php
                }
                if ( ! empty( $categories ) ) {
                    $current_postCategory = $categories[0]; // Get the first category ID
                  }
                  // print_r($categories[0]);
                    
                    if ($current_postCategory) { ?>
                <a href="<?=esc_url( get_category_link( $current_postCategory->term_id ) )?>"
                  class="mr-2 md:mr-[14px] whitespace-nowrap text-black-11 dark:text-dark-43 text-[12px] md:text-[19px] leading-[27px] font-semibold">
                  <?=esc_html( $current_postCategory->name );?>
                </a>
                <?php }?>
                <svg class="mr-[11px] hidden md:block dark:hidden" xmlns="http://www.w3.org/2000/svg" width="26" height="27"
                    viewBox="0 0 26 27" fill="none">
                    <path d="M16.1775 6.08789L9.82422 13.5L16.1775 20.9122" stroke="#4F4F4F" stroke-width="1.58831"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <svg class="block md:hidden mr-[7px] dark:hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                    viewBox="0 0 16 17" fill="none">
                    <path d="M10 3.83334L6 8.50001L10 13.1667" stroke="#4F4F4F" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
                <svg class="hidden dark:block mr-[7px] md:mr-[11px]" xmlns="http://www.w3.org/2000/svg" width="26" height="27"
                    viewBox="0 0 26 27" fill="none">
                    <path d="M16.1775 6.08786L9.82422 13.5L16.1775 20.9121" stroke="#CDCDCD" stroke-width="1.58831"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="mr-2 md:mr-[14px] whitespace-nowrap text-black-11 dark:text-dark-43 text-[12px] md:text-[19px] leading-[27px] font-semibold">
                    <?the_title();?>
                </span>
                
            </div>


            <div class="flex md:hidden items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27" fill="none"
                    class="hidden md:block dark:hidden">
                    <path
                        d="M2.86207 14.5145C2.46029 11.7222 2.25939 10.326 2.83167 9.13228C3.40396 7.93856 4.62205 7.21295 7.05823 5.76173L8.5246 4.88822C10.7369 3.57037 11.8431 2.91144 13.0653 2.91144C14.2876 2.91144 15.3938 3.57037 17.6061 4.88822L19.0724 5.76173C21.5086 7.21295 22.7267 7.93856 23.299 9.13228C23.8713 10.326 23.6704 11.7222 23.2686 14.5145L22.9734 16.5659C22.4573 20.1528 22.1992 21.9462 20.955 23.0176C19.7107 24.089 17.886 24.089 14.2365 24.089H11.8941C8.24465 24.089 6.41992 24.089 5.17567 23.0176C3.93142 21.9462 3.67336 20.1528 3.15725 16.5659L2.86207 14.5145Z"
                        stroke="#4F4F4F" stroke-width="1.58831"></path>
                    <path
                        d="M9.88477 17.7355C10.7852 18.4029 11.8803 18.7944 13.0614 18.7944C14.2425 18.7944 15.3376 18.4029 16.238 17.7355"
                        stroke="#4F4F4F" stroke-width="1.58831" stroke-linecap="round"></path>
                </svg>
                <svg class="block md:hidden dark:hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                    viewBox="0 0 16 17" fill="none">
                    <path
                        d="M1.57865 9.13871C1.32569 7.38067 1.19921 6.50166 1.55952 5.7501C1.91982 4.99853 2.68673 4.54169 4.22055 3.62801L5.14377 3.07805C6.53663 2.24833 7.23306 1.83347 8.0026 1.83347C8.77214 1.83347 9.46858 2.24833 10.8614 3.07804L11.7847 3.628C13.3185 4.54169 14.0854 4.99853 14.4457 5.7501C14.806 6.50166 14.6795 7.38068 14.4266 9.13871L14.2407 10.4303C13.9158 12.6886 13.7533 13.8177 12.9699 14.4923C12.1865 15.1668 11.0377 15.1668 8.73999 15.1668H7.26522C4.96752 15.1668 3.81867 15.1668 3.03529 14.4923C2.25191 13.8177 2.08944 12.6886 1.7645 10.4303L1.57865 9.13871Z"
                        stroke="#4F4F4F"></path>
                    <path d="M6 11.1667C6.56692 11.5869 7.25638 11.8333 8 11.8333C8.74362 11.8333 9.43308 11.5869 10 11.1667"
                        stroke="#4F4F4F" stroke-linecap="round"></path>
                </svg>
                <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27"
                    fill="none">
                    <path
                        d="M2.86207 14.5145C2.46029 11.7222 2.25939 10.326 2.83167 9.13228C3.40396 7.93856 4.62205 7.21295 7.05823 5.76173L8.5246 4.88822C10.7369 3.57037 11.8431 2.91144 13.0653 2.91144C14.2876 2.91144 15.3938 3.57037 17.6061 4.88822L19.0724 5.76173C21.5086 7.21295 22.7267 7.93856 23.299 9.13228C23.8713 10.326 23.6704 11.7222 23.2686 14.5145L22.9734 16.5659C22.4573 20.1528 22.1992 21.9462 20.955 23.0176C19.7107 24.089 17.886 24.089 14.2365 24.089H11.8941C8.24465 24.089 6.41992 24.089 5.17567 23.0176C3.93142 21.9462 3.67336 20.1528 3.15725 16.5659L2.86207 14.5145Z"
                        stroke="#CDCDCD" stroke-width="1.58831"></path>
                    <path
                        d="M9.88477 17.7355C10.7852 18.4029 11.8803 18.7944 13.0614 18.7944C14.2425 18.7944 15.3376 18.4029 16.238 17.7355"
                        stroke="#CDCDCD" stroke-width="1.58831" stroke-linecap="round"></path>
                </svg>
                <p class="mr-[10px] dark:text-gray-500 text-black-15 font-semibold text-[12px] md:text-[19px] leading-[27px]">
                    بلاگ آریاپی
                </p>
                <svg class="mr-[11px] hidden md:block dark:hidden" xmlns="http://www.w3.org/2000/svg" width="26" height="27"
                    viewBox="0 0 26 27" fill="none">
                    <path d="M16.1775 6.08789L9.82422 13.5L16.1775 20.9122" stroke="#4F4F4F" stroke-width="1.58831"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <svg class="block md:hidden mr-[7px] dark:hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                    viewBox="0 0 16 17" fill="none">
                    <path d="M10 3.83334L6 8.50001L10 13.1667" stroke="#4F4F4F" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
                <svg class="hidden dark:block mr-[7px] md:mr-[11px]" xmlns="http://www.w3.org/2000/svg" width="26" height="27"
                    viewBox="0 0 26 27" fill="none">
                    <path d="M16.1775 6.08786L9.82422 13.5L16.1775 20.9121" stroke="#CDCDCD" stroke-width="1.58831"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <p class="mr-[14px] text-black-11 dark:text-dark-43 text-[12px] md:text-[19px] leading-[27px] font-semibold">
                    اخبار آریاپی
                </p>
            </div>
        </section>







        <section class="container mb-5">
            <div class="grid grid-cols-7 gap-x-5 mt-[31px]">
                <article class="col-span-7 md:col-span-5">
                    <div class="md:bg-white-100 rounded-[10px] md:py-[30px] md:px-[19px] dark:bg-dark-1">
                        <div class="flex items-center dark:bg-transparent bg-blue-13 py-1 px-2 md:p-[10px] rounded-lg">
                            <div class="bg-blue-500 py-1 md:py-[10px] px-[14px] rounded-lg">
                                <a href="<?=esc_url( get_category_link( $current_postCategory->term_id ) )?>" class="text-white-100 whitespace-nowrap text-xs md:text-base leading-[25px] font-medium">
                                    <?=esc_html( $current_postCategory->name );?>
                                </a>
                            </div>
                            <div class="flex items-center mr-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <path d="M11.0049 7.5V11L13.1924 13.1875" stroke="#2860E6" stroke-width="1.3125"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path opacity="0.5"
                                        d="M2.25488 11C2.25488 6.87521 2.25488 4.81282 3.53629 3.53141C4.8177 2.25 6.88009 2.25 11.0049 2.25C15.1297 2.25 17.1921 2.25 18.4735 3.53141C19.7549 4.81282 19.7549 6.87521 19.7549 11C19.7549 15.1248 19.7549 17.1872 18.4735 18.4686C17.1921 19.75 15.1297 19.75 11.0049 19.75C6.88009 19.75 4.8177 19.75 3.53629 18.4686C2.25488 17.1872 2.25488 15.1248 2.25488 11Z"
                                        stroke="#2860E6" stroke-width="1.3125"></path>
                                </svg>
                                <p class="mr-[6px] font-medium dark:text-white-100 text-xs md:text-sm leading-[18px]">
                                    7 دقیقه
                                </p>
                                <svg class="mr-2 md:mr-[20px]" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path
                                        d="M1.78516 11C1.78516 7.70017 1.78516 6.05025 2.81028 5.02513C3.83541 4 5.48532 4 8.78516 4H12.2852C15.585 4 17.2349 4 18.26 5.02513C19.2852 6.05025 19.2852 7.70017 19.2852 11V12.75C19.2852 16.0498 19.2852 17.6997 18.26 18.7249C17.2349 19.75 15.585 19.75 12.2852 19.75H8.78515C5.48532 19.75 3.83541 19.75 2.81028 18.7249C1.78516 17.6997 1.78516 16.0498 1.78516 12.75V11Z"
                                        stroke="#2860E6" stroke-width="1.3125"></path>
                                    <path opacity="0.5" d="M6.16016 4V2.6875" stroke="#2860E6" stroke-width="1.3125"
                                        stroke-linecap="round"></path>
                                    <path opacity="0.5" d="M14.9102 4V2.6875" stroke="#2860E6" stroke-width="1.3125"
                                        stroke-linecap="round"></path>
                                    <path opacity="0.5" d="M1.78516 8.375H19.2852" stroke="#2860E6" stroke-width="1.3125"
                                        stroke-linecap="round"></path>
                                </svg>
                                <p class="mr-[6px] font-medium text-xs dark:text-white-100 md:text-sm leading-[18px]">
                                    <?=get_the_date( 'j F Y' )?>
                                </p>
                            </div>
                        </div>

                        <h1 class="border-b border-gray-27 dark:text-white-100 font-semibold md:font-bold text-base md:text-[25px] leading-[25px] text-black-50 mt-3 md:mt-6 pb-3 md:pb-6">
                            <?the_title();?>
                        </h1>
                        <div class="hidden md:block h-[400px] rounded-[21px] mt-6 overflow-hidden relative">
                            <video class="w-full h-full object-cover" src="<?=RTARIA_ASSETS?>/videos/1.mp4" controls=""
                                poster="<?= RTARIA_IMAGES ?>/blog-1.png" id="video"></video>
                            <div id="video-player-container"
                                class="absolute z-20 w-full top-[50%] translate-y-[-50%] flex gap-10 items-center flex-col justify-center">
                                <button id="video-player"
                                    class="w-[51px] h-[51px] bg-blue-14 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M28.7519 15.5039C28.7519 14.2099 28.0889 12.9158 26.7627 12.1946L10.7477 3.48575C8.16989 2.08393 5.00195 3.90851 5.00195 6.79503L5.00195 15.5039H28.7519Z"
                                            fill="white"></path>
                                        <path opacity="0.5"
                                            d="M10.7477 27.5182L26.7627 18.8093C28.0889 18.0881 28.7519 16.794 28.7519 15.5H5.00195L5.00195 24.2089C5.00195 27.0954 8.16989 28.92 10.7477 27.5182Z"
                                            fill="white"></path>
                                    </svg>
                                </button>
                                <!-- <p class="text-white-100 text-[25px] leading-[25px] font-semibold">
                                    ویدیو کامل آموزش غیر فعال کردن فایروال
                                </p> -->
                            </div>
                        </div>

                        <div class="leading-[27px] mt-3 md:mt-6 text-black-34 dark:text-dark-72">
                            <?the_title();?>
                        </div>
                    </div>
                </article>

                        
                <div class="col-span-7 md:col-span-2">
                    <div class="hidden md:block bg-white-100 px-3 py-4 rounded-[6px] dark:bg-dark-11">
                        <div class="flex items-center gap-1">
                            <div class="h-5 rounded-full bg-blue-500 w-1 dark:bg-dark-2"></div>
                            <h5 class="font-semibold leading-[24px] text-[15px] text-black-12 dark:text-white-60">
                                خدمات محبوب آریا پی
                            </h5>
                        </div>
                        <div class="mt-4 flex items-center">
                            <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                viewBox="0 0 29 29" fill="none">
                                <path
                                    d="M11.9138 4.58292C13.5717 3.80569 15.4295 3.80569 17.0874 4.58292L24.8938 8.24274C26.5918 9.03883 26.5918 11.7946 24.8938 12.5906L17.0875 16.2504C15.4296 17.0276 13.5718 17.0276 11.9139 16.2504L4.10752 12.5906C2.40947 11.7945 2.40948 9.03877 4.10752 8.24269L11.9138 4.58292Z"
                                    stroke="#2860E6" stroke-width="2.0625"></path>
                                <path opacity="0.5" d="M2.83398 10.417V16.8337" stroke="#2860E6" stroke-width="2.0625"
                                    stroke-linecap="round"></path>
                                <path opacity="0.5"
                                    d="M22.6673 13.917V19.8967C22.6673 21.0727 22.0799 22.1737 21.0511 22.7435C19.338 23.6922 16.596 25.0003 14.5007 25.0003C12.4053 25.0003 9.6633 23.6922 7.95021 22.7435C6.9214 22.1737 6.33398 21.0727 6.33398 19.8967V13.917"
                                    stroke="#2860E6" stroke-width="2.0625" stroke-linecap="round"></path>
                            </svg>
                            <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                viewBox="0 0 29 29" fill="none">
                                <path
                                    d="M11.9138 4.58292C13.5717 3.80569 15.4295 3.80569 17.0874 4.58292L24.8938 8.24274C26.5918 9.03883 26.5918 11.7946 24.8938 12.5906L17.0875 16.2504C15.4296 17.0276 13.5718 17.0276 11.9139 16.2504L4.10752 12.5906C2.40947 11.7945 2.40948 9.03877 4.10752 8.24269L11.9138 4.58292Z"
                                    stroke="#EDEDED" stroke-width="2.0625"></path>
                                <path opacity="0.5" d="M2.83398 10.417V16.8337" stroke="#EDEDED" stroke-width="2.0625"
                                    stroke-linecap="round"></path>
                                <path opacity="0.5"
                                    d="M22.6673 13.917V19.8967C22.6673 21.0727 22.0799 22.1737 21.0511 22.7435C19.338 23.6922 16.596 25.0003 14.5007 25.0003C12.4053 25.0003 9.6633 23.6922 7.95021 22.7435C6.9214 22.1737 6.33398 21.0727 6.33398 19.8967V13.917"
                                    stroke="#EDEDED" stroke-width="2.0625" stroke-linecap="round"></path>
                            </svg>
                            <p class="mr-3 font-semibold text-[15px] leading-[24px] dark:text-dark-43">
                                آزمون زبان
                            </p>
                            <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17" fill="none">
                                <circle opacity="0.5" cx="8.49967" cy="8.49967" r="6.66667" stroke="#2860E6"></circle>
                                <path d="M8.5 5.16699V9.16699" stroke="#2860E6" stroke-linecap="round"></path>
                                <circle cx="8.49967" cy="11.1667" r="0.666667" fill="#2860E6"></circle>
                            </svg>
                            <svg class="hidden mr-auto dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17" fill="none">
                                <circle opacity="0.5" cx="8.49967" cy="8.49967" r="6.66667" stroke="#EDEDED"></circle>
                                <path d="M8.5 5.16699V9.16699" stroke="#EDEDED" stroke-linecap="round"></path>
                                <circle cx="8.49967" cy="11.1667" r="0.666667" fill="#EDEDED"></circle>
                            </svg>
                        </div>
                        <div class="mt-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none"
                                class="dark:hidden">
                                <path opacity="0.5"
                                    d="M8.66439 21.4986C6.12686 21.4845 4.75263 21.372 3.85618 20.4755C2.83106 19.4504 2.83106 17.8005 2.83105 14.5007L2.83105 9.83399C2.83105 6.53415 2.83105 4.88424 3.85618 3.85911C4.88131 2.83399 6.53122 2.83398 9.83105 2.83398L19.1644 2.83398C22.4642 2.83398 24.1141 2.83398 25.1393 3.85911C26.1644 4.88424 26.1644 6.53415 26.1644 9.83399V14.5007C26.1644 17.8005 26.1644 19.4504 25.1393 20.4755C24.2878 21.327 23.0052 21.4712 20.704 21.4957L19.7477 21.4986"
                                    stroke="#2860E6" stroke-width="1.58594"></path>
                                <path opacity="0.5" d="M11 7.5L18 7.5" stroke="#2860E6" stroke-width="1.58594"
                                    stroke-linecap="round"></path>
                                <path opacity="0.5" d="M8.66602 11.584H20.3327" stroke="#2860E6" stroke-width="1.58594"
                                    stroke-linecap="round"></path>
                                <path
                                    d="M13.2038 16.7696C13.9496 16.1341 15.0465 16.1341 15.7923 16.7696C16.1119 17.042 16.5093 17.2066 16.9278 17.24C17.9046 17.3179 18.6802 18.0935 18.7581 19.0703C18.7915 19.4889 18.9561 19.8862 19.2285 20.2058C19.864 20.9516 19.864 22.0485 19.2285 22.7943C18.9561 23.1138 18.7915 23.5112 18.7581 23.9298C18.6802 24.9065 17.9046 25.6821 16.9278 25.7601C16.5093 25.7935 16.1119 25.9581 15.7923 26.2304C15.0465 26.866 13.9496 26.866 13.2038 26.2304C12.8843 25.9581 12.4869 25.7935 12.0683 25.7601C11.0916 25.6821 10.316 24.9065 10.238 23.9298C10.2046 23.5112 10.04 23.1138 9.76768 22.7943C9.13213 22.0485 9.13213 20.9516 9.76768 20.2058C10.04 19.8862 10.2046 19.4889 10.238 19.0703C10.316 18.0935 11.0916 17.3179 12.0683 17.24C12.4869 17.2066 12.8843 17.042 13.2038 16.7696Z"
                                    stroke="#2860E6" stroke-width="1.58594"></path>
                                <path d="M12.75 21.734L13.75 22.6673L16.25 20.334" stroke="#2860E6" stroke-width="1.58594"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                viewBox="0 0 29 29" fill="none">
                                <path opacity="0.5"
                                    d="M8.66536 21.4986C6.12783 21.4845 4.75361 21.372 3.85716 20.4755C2.83203 19.4504 2.83203 17.8005 2.83203 14.5007L2.83203 9.83399C2.83203 6.53415 2.83203 4.88424 3.85716 3.85911C4.88228 2.83399 6.5322 2.83398 9.83203 2.83398L19.1654 2.83398C22.4652 2.83398 24.1151 2.83398 25.1402 3.85911C26.1654 4.88424 26.1654 6.53415 26.1654 9.83399V14.5007C26.1654 17.8005 26.1654 19.4504 25.1402 20.4755C24.2887 21.327 23.0061 21.4712 20.705 21.4957L19.7487 21.4986"
                                    stroke="#EDEDED" stroke-width="1.58594"></path>
                                <path opacity="0.5" d="M11 7.5L18 7.5" stroke="#EDEDED" stroke-width="1.58594"
                                    stroke-linecap="round"></path>
                                <path opacity="0.5" d="M8.66602 11.584H20.3327" stroke="#EDEDED" stroke-width="1.58594"
                                    stroke-linecap="round"></path>
                                <path
                                    d="M13.2038 16.7696C13.9496 16.1341 15.0465 16.1341 15.7923 16.7696C16.1119 17.042 16.5093 17.2066 16.9278 17.24C17.9046 17.3179 18.6802 18.0935 18.7581 19.0703C18.7915 19.4889 18.9561 19.8862 19.2285 20.2058C19.864 20.9516 19.864 22.0485 19.2285 22.7943C18.9561 23.1138 18.7915 23.5112 18.7581 23.9298C18.6802 24.9065 17.9046 25.6821 16.9278 25.7601C16.5093 25.7935 16.1119 25.9581 15.7923 26.2304C15.0465 26.866 13.9496 26.866 13.2038 26.2304C12.8843 25.9581 12.4869 25.7935 12.0683 25.7601C11.0916 25.6821 10.316 24.9065 10.238 23.9298C10.2046 23.5112 10.04 23.1138 9.76768 22.7943C9.13213 22.0485 9.13213 20.9516 9.76768 20.2058C10.04 19.8862 10.2046 19.4889 10.238 19.0703C10.316 18.0935 11.0916 17.3179 12.0683 17.24C12.4869 17.2066 12.8843 17.042 13.2038 16.7696Z"
                                    stroke="#EDEDED" stroke-width="1.58594"></path>
                                <path d="M12.75 21.734L13.75 22.6673L16.25 20.334" stroke="#EDEDED" stroke-width="1.58594"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <p class="mr-3 font-semibold text-[15px] leading-[24px] dark:text-dark-43">
                                افتتاح انواع حساب
                            </p>
                            <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17" fill="none">
                                <circle opacity="0.5" cx="8.49967" cy="8.49967" r="6.66667" stroke="#2860E6"></circle>
                                <path d="M8.5 5.16699V9.16699" stroke="#2860E6" stroke-linecap="round"></path>
                                <circle cx="8.49967" cy="11.1667" r="0.666667" fill="#2860E6"></circle>
                            </svg>
                            <svg class="hidden mr-auto dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17" fill="none">
                                <circle opacity="0.5" cx="8.49967" cy="8.49967" r="6.66667" stroke="#EDEDED"></circle>
                                <path d="M8.5 5.16699V9.16699" stroke="#EDEDED" stroke-linecap="round"></path>
                                <circle cx="8.49967" cy="11.1667" r="0.666667" fill="#EDEDED"></circle>
                            </svg>
                        </div>
                        <div class="mt-4 flex items-center">
                            <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                viewBox="0 0 29 29" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.5007 3.70801C8.54058 3.70801 3.70898 8.5396 3.70898 14.4997C3.70898 20.4597 8.54058 25.2913 14.5007 25.2913C20.4607 25.2913 25.2923 20.4597 25.2923 14.4997C25.2923 8.5396 20.4607 3.70801 14.5007 3.70801ZM1.95898 14.4997C1.95898 7.5731 7.57408 1.95801 14.5007 1.95801C21.4272 1.95801 27.0423 7.5731 27.0423 14.4997C27.0423 21.4262 21.4272 27.0413 14.5007 27.0413C7.57408 27.0413 1.95898 21.4262 1.95898 14.4997ZM8.43768 13.6247C8.3968 13.9105 8.37565 14.2026 8.37565 14.4997C8.37565 14.7968 8.3968 15.0889 8.43768 15.3747H12.1673C12.6506 15.3747 13.0423 15.7664 13.0423 16.2497C13.0423 16.7329 12.6506 17.1247 12.1673 17.1247H8.96508C9.94811 19.194 12.0573 20.6247 14.5007 20.6247C15.6177 20.6247 16.6625 20.3264 17.5625 19.8058C17.9808 19.5638 18.5161 19.7068 18.7581 20.1251C19 20.5434 18.8571 21.0786 18.4388 21.3206C17.2796 21.9912 15.9336 22.3747 14.5007 22.3747C11.0718 22.3747 8.15482 20.1833 7.07375 17.1247H6.33398C5.85073 17.1247 5.45898 16.7329 5.45898 16.2497C5.45898 15.7664 5.85073 15.3747 6.33398 15.3747H6.67371C6.64196 15.0874 6.62565 14.7954 6.62565 14.4997C6.62565 14.2039 6.64196 13.912 6.67371 13.6247H6.33398C5.85073 13.6247 5.45898 13.2329 5.45898 12.7497C5.45898 12.2664 5.85073 11.8747 6.33398 11.8747H7.07375C8.15482 8.81604 11.0718 6.62467 14.5007 6.62467C15.9336 6.62467 17.2796 7.00818 18.4388 7.67874C18.8571 7.92072 19 8.45598 18.7581 8.87429C18.5161 9.29259 17.9808 9.43553 17.5625 9.19355C16.6625 8.67292 15.6177 8.37467 14.5007 8.37467C12.0573 8.37467 9.94811 9.80535 8.96508 11.8747H12.1673C12.6506 11.8747 13.0423 12.2664 13.0423 12.7497C13.0423 13.2329 12.6506 13.6247 12.1673 13.6247H8.43768Z"
                                    fill="#2860E6"></path>
                            </svg>
                            <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                viewBox="0 0 29 29" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.5007 3.70801C8.54058 3.70801 3.70898 8.5396 3.70898 14.4997C3.70898 20.4597 8.54058 25.2913 14.5007 25.2913C20.4607 25.2913 25.2923 20.4597 25.2923 14.4997C25.2923 8.5396 20.4607 3.70801 14.5007 3.70801ZM1.95898 14.4997C1.95898 7.5731 7.57408 1.95801 14.5007 1.95801C21.4272 1.95801 27.0423 7.5731 27.0423 14.4997C27.0423 21.4262 21.4272 27.0413 14.5007 27.0413C7.57408 27.0413 1.95898 21.4262 1.95898 14.4997ZM8.43768 13.6247C8.3968 13.9105 8.37565 14.2026 8.37565 14.4997C8.37565 14.7968 8.3968 15.0889 8.43768 15.3747H12.1673C12.6506 15.3747 13.0423 15.7664 13.0423 16.2497C13.0423 16.7329 12.6506 17.1247 12.1673 17.1247H8.96508C9.94811 19.194 12.0573 20.6247 14.5007 20.6247C15.6177 20.6247 16.6625 20.3264 17.5625 19.8058C17.9808 19.5638 18.5161 19.7068 18.7581 20.1251C19 20.5434 18.8571 21.0786 18.4388 21.3206C17.2796 21.9912 15.9336 22.3747 14.5007 22.3747C11.0718 22.3747 8.15482 20.1833 7.07375 17.1247H6.33398C5.85073 17.1247 5.45898 16.7329 5.45898 16.2497C5.45898 15.7664 5.85073 15.3747 6.33398 15.3747H6.67371C6.64196 15.0874 6.62565 14.7954 6.62565 14.4997C6.62565 14.2039 6.64196 13.912 6.67371 13.6247H6.33398C5.85073 13.6247 5.45898 13.2329 5.45898 12.7497C5.45898 12.2664 5.85073 11.8747 6.33398 11.8747H7.07375C8.15482 8.81604 11.0718 6.62467 14.5007 6.62467C15.9336 6.62467 17.2796 7.00818 18.4388 7.67874C18.8571 7.92072 19 8.45598 18.7581 8.87429C18.5161 9.29259 17.9808 9.43553 17.5625 9.19355C16.6625 8.67292 15.6177 8.37467 14.5007 8.37467C12.0573 8.37467 9.94811 9.80535 8.96508 11.8747H12.1673C12.6506 11.8747 13.0423 12.2664 13.0423 12.7497C13.0423 13.2329 12.6506 13.6247 12.1673 13.6247H8.43768Z"
                                    fill="#EDEDED"></path>
                            </svg>
                            <p class="mr-3 font-semibold text-[15px] leading-[24px] dark:text-dark-43">
                                ارزهای دیجیتال
                            </p>
                            <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17" fill="none">
                                <circle opacity="0.5" cx="8.49967" cy="8.49967" r="6.66667" stroke="#2860E6"></circle>
                                <path d="M8.5 5.16699V9.16699" stroke="#2860E6" stroke-linecap="round"></path>
                                <circle cx="8.49967" cy="11.1667" r="0.666667" fill="#2860E6"></circle>
                            </svg>
                            <svg class="hidden mr-auto dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17" fill="none">
                                <circle opacity="0.5" cx="8.49967" cy="8.49967" r="6.66667" stroke="#EDEDED"></circle>
                                <path d="M8.5 5.16699V9.16699" stroke="#EDEDED" stroke-linecap="round"></path>
                                <circle cx="8.49967" cy="11.1667" r="0.666667" fill="#EDEDED"></circle>
                            </svg>
                        </div>
                        <div class="mt-4 flex items-center">
                            <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                viewBox="0 0 29 29" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.5007 3.70801C8.54058 3.70801 3.70898 8.5396 3.70898 14.4997C3.70898 20.4597 8.54058 25.2913 14.5007 25.2913C20.4607 25.2913 25.2923 20.4597 25.2923 14.4997C25.2923 8.5396 20.4607 3.70801 14.5007 3.70801ZM1.95898 14.4997C1.95898 7.5731 7.57408 1.95801 14.5007 1.95801C21.4272 1.95801 27.0423 7.5731 27.0423 14.4997C27.0423 21.4262 21.4272 27.0413 14.5007 27.0413C7.57408 27.0413 1.95898 21.4262 1.95898 14.4997ZM8.43768 13.6247C8.3968 13.9105 8.37565 14.2026 8.37565 14.4997C8.37565 14.7968 8.3968 15.0889 8.43768 15.3747H12.1673C12.6506 15.3747 13.0423 15.7664 13.0423 16.2497C13.0423 16.7329 12.6506 17.1247 12.1673 17.1247H8.96508C9.94811 19.194 12.0573 20.6247 14.5007 20.6247C15.6177 20.6247 16.6625 20.3264 17.5625 19.8058C17.9808 19.5638 18.5161 19.7068 18.7581 20.1251C19 20.5434 18.8571 21.0786 18.4388 21.3206C17.2796 21.9912 15.9336 22.3747 14.5007 22.3747C11.0718 22.3747 8.15482 20.1833 7.07375 17.1247H6.33398C5.85073 17.1247 5.45898 16.7329 5.45898 16.2497C5.45898 15.7664 5.85073 15.3747 6.33398 15.3747H6.67371C6.64196 15.0874 6.62565 14.7954 6.62565 14.4997C6.62565 14.2039 6.64196 13.912 6.67371 13.6247H6.33398C5.85073 13.6247 5.45898 13.2329 5.45898 12.7497C5.45898 12.2664 5.85073 11.8747 6.33398 11.8747H7.07375C8.15482 8.81604 11.0718 6.62467 14.5007 6.62467C15.9336 6.62467 17.2796 7.00818 18.4388 7.67874C18.8571 7.92072 19 8.45598 18.7581 8.87429C18.5161 9.29259 17.9808 9.43553 17.5625 9.19355C16.6625 8.67292 15.6177 8.37467 14.5007 8.37467C12.0573 8.37467 9.94811 9.80535 8.96508 11.8747H12.1673C12.6506 11.8747 13.0423 12.2664 13.0423 12.7497C13.0423 13.2329 12.6506 13.6247 12.1673 13.6247H8.43768Z"
                                    fill="#2860E6"></path>
                            </svg>
                            <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                viewBox="0 0 29 29" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.5007 3.70801C8.54058 3.70801 3.70898 8.5396 3.70898 14.4997C3.70898 20.4597 8.54058 25.2913 14.5007 25.2913C20.4607 25.2913 25.2923 20.4597 25.2923 14.4997C25.2923 8.5396 20.4607 3.70801 14.5007 3.70801ZM1.95898 14.4997C1.95898 7.5731 7.57408 1.95801 14.5007 1.95801C21.4272 1.95801 27.0423 7.5731 27.0423 14.4997C27.0423 21.4262 21.4272 27.0413 14.5007 27.0413C7.57408 27.0413 1.95898 21.4262 1.95898 14.4997ZM8.43768 13.6247C8.3968 13.9105 8.37565 14.2026 8.37565 14.4997C8.37565 14.7968 8.3968 15.0889 8.43768 15.3747H12.1673C12.6506 15.3747 13.0423 15.7664 13.0423 16.2497C13.0423 16.7329 12.6506 17.1247 12.1673 17.1247H8.96508C9.94811 19.194 12.0573 20.6247 14.5007 20.6247C15.6177 20.6247 16.6625 20.3264 17.5625 19.8058C17.9808 19.5638 18.5161 19.7068 18.7581 20.1251C19 20.5434 18.8571 21.0786 18.4388 21.3206C17.2796 21.9912 15.9336 22.3747 14.5007 22.3747C11.0718 22.3747 8.15482 20.1833 7.07375 17.1247H6.33398C5.85073 17.1247 5.45898 16.7329 5.45898 16.2497C5.45898 15.7664 5.85073 15.3747 6.33398 15.3747H6.67371C6.64196 15.0874 6.62565 14.7954 6.62565 14.4997C6.62565 14.2039 6.64196 13.912 6.67371 13.6247H6.33398C5.85073 13.6247 5.45898 13.2329 5.45898 12.7497C5.45898 12.2664 5.85073 11.8747 6.33398 11.8747H7.07375C8.15482 8.81604 11.0718 6.62467 14.5007 6.62467C15.9336 6.62467 17.2796 7.00818 18.4388 7.67874C18.8571 7.92072 19 8.45598 18.7581 8.87429C18.5161 9.29259 17.9808 9.43553 17.5625 9.19355C16.6625 8.67292 15.6177 8.37467 14.5007 8.37467C12.0573 8.37467 9.94811 9.80535 8.96508 11.8747H12.1673C12.6506 11.8747 13.0423 12.2664 13.0423 12.7497C13.0423 13.2329 12.6506 13.6247 12.1673 13.6247H8.43768Z"
                                    fill="#EDEDED"></path>
                            </svg>
                            <p class="mr-3 font-semibold text-[15px] leading-[24px] dark:text-dark-43">
                                ارزهای دیجیتال
                            </p>
                            <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17" fill="none">
                                <circle opacity="0.5" cx="8.49967" cy="8.49967" r="6.66667" stroke="#2860E6"></circle>
                                <path d="M8.5 5.16699V9.16699" stroke="#2860E6" stroke-linecap="round"></path>
                                <circle cx="8.49967" cy="11.1667" r="0.666667" fill="#2860E6"></circle>
                            </svg>
                            <svg class="hidden mr-auto dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17" fill="none">
                                <circle opacity="0.5" cx="8.49967" cy="8.49967" r="6.66667" stroke="#EDEDED"></circle>
                                <path d="M8.5 5.16699V9.16699" stroke="#EDEDED" stroke-linecap="round"></path>
                                <circle cx="8.49967" cy="11.1667" r="0.666667" fill="#EDEDED"></circle>
                            </svg>
                        </div>
                        <div class="mt-4 flex items-center">
                            <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                viewBox="0 0 29 29" fill="none">
                                <path
                                    d="M11.9138 4.58292C13.5717 3.80569 15.4295 3.80569 17.0874 4.58292L24.8938 8.24274C26.5918 9.03883 26.5918 11.7946 24.8938 12.5906L17.0875 16.2504C15.4296 17.0276 13.5718 17.0276 11.9139 16.2504L4.10752 12.5906C2.40947 11.7945 2.40948 9.03877 4.10752 8.24269L11.9138 4.58292Z"
                                    stroke="#2860E6" stroke-width="2.0625"></path>
                                <path opacity="0.5" d="M2.83398 10.417V16.8337" stroke="#2860E6" stroke-width="2.0625"
                                    stroke-linecap="round"></path>
                                <path opacity="0.5"
                                    d="M22.6673 13.917V19.8967C22.6673 21.0727 22.0799 22.1737 21.0511 22.7435C19.338 23.6922 16.596 25.0003 14.5007 25.0003C12.4053 25.0003 9.6633 23.6922 7.95021 22.7435C6.9214 22.1737 6.33398 21.0727 6.33398 19.8967V13.917"
                                    stroke="#2860E6" stroke-width="2.0625" stroke-linecap="round"></path>
                            </svg>
                            <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                viewBox="0 0 29 29" fill="none">
                                <path
                                    d="M11.9138 4.58292C13.5717 3.80569 15.4295 3.80569 17.0874 4.58292L24.8938 8.24274C26.5918 9.03883 26.5918 11.7946 24.8938 12.5906L17.0875 16.2504C15.4296 17.0276 13.5718 17.0276 11.9139 16.2504L4.10752 12.5906C2.40947 11.7945 2.40948 9.03877 4.10752 8.24269L11.9138 4.58292Z"
                                    stroke="#EDEDED" stroke-width="2.0625"></path>
                                <path opacity="0.5" d="M2.83398 10.417V16.8337" stroke="#EDEDED" stroke-width="2.0625"
                                    stroke-linecap="round"></path>
                                <path opacity="0.5"
                                    d="M22.6673 13.917V19.8967C22.6673 21.0727 22.0799 22.1737 21.0511 22.7435C19.338 23.6922 16.596 25.0003 14.5007 25.0003C12.4053 25.0003 9.6633 23.6922 7.95021 22.7435C6.9214 22.1737 6.33398 21.0727 6.33398 19.8967V13.917"
                                    stroke="#EDEDED" stroke-width="2.0625" stroke-linecap="round"></path>
                            </svg>
                            <p class="mr-3 font-semibold text-[15px] dark:text-dark-43 leading-[24px]">
                                آزمون زبان
                            </p>
                            <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17" fill="none">
                                <circle opacity="0.5" cx="8.49967" cy="8.49967" r="6.66667" stroke="#2860E6"></circle>
                                <path d="M8.5 5.16699V9.16699" stroke="#2860E6" stroke-linecap="round"></path>
                                <circle cx="8.49967" cy="11.1667" r="0.666667" fill="#2860E6"></circle>
                            </svg>
                            <svg class="hidden mr-auto dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17" fill="none">
                                <circle opacity="0.5" cx="8.49967" cy="8.49967" r="6.66667" stroke="#EDEDED"></circle>
                                <path d="M8.5 5.16699V9.16699" stroke="#EDEDED" stroke-linecap="round"></path>
                                <circle cx="8.49967" cy="11.1667" r="0.666667" fill="#EDEDED"></circle>
                            </svg>
                        </div>
                        <div class="mt-4 flex items-center">
                            <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                viewBox="0 0 29 29" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.5007 3.70801C8.54058 3.70801 3.70898 8.5396 3.70898 14.4997C3.70898 20.4597 8.54058 25.2913 14.5007 25.2913C20.4607 25.2913 25.2923 20.4597 25.2923 14.4997C25.2923 8.5396 20.4607 3.70801 14.5007 3.70801ZM1.95898 14.4997C1.95898 7.5731 7.57408 1.95801 14.5007 1.95801C21.4272 1.95801 27.0423 7.5731 27.0423 14.4997C27.0423 21.4262 21.4272 27.0413 14.5007 27.0413C7.57408 27.0413 1.95898 21.4262 1.95898 14.4997ZM8.43768 13.6247C8.3968 13.9105 8.37565 14.2026 8.37565 14.4997C8.37565 14.7968 8.3968 15.0889 8.43768 15.3747H12.1673C12.6506 15.3747 13.0423 15.7664 13.0423 16.2497C13.0423 16.7329 12.6506 17.1247 12.1673 17.1247H8.96508C9.94811 19.194 12.0573 20.6247 14.5007 20.6247C15.6177 20.6247 16.6625 20.3264 17.5625 19.8058C17.9808 19.5638 18.5161 19.7068 18.7581 20.1251C19 20.5434 18.8571 21.0786 18.4388 21.3206C17.2796 21.9912 15.9336 22.3747 14.5007 22.3747C11.0718 22.3747 8.15482 20.1833 7.07375 17.1247H6.33398C5.85073 17.1247 5.45898 16.7329 5.45898 16.2497C5.45898 15.7664 5.85073 15.3747 6.33398 15.3747H6.67371C6.64196 15.0874 6.62565 14.7954 6.62565 14.4997C6.62565 14.2039 6.64196 13.912 6.67371 13.6247H6.33398C5.85073 13.6247 5.45898 13.2329 5.45898 12.7497C5.45898 12.2664 5.85073 11.8747 6.33398 11.8747H7.07375C8.15482 8.81604 11.0718 6.62467 14.5007 6.62467C15.9336 6.62467 17.2796 7.00818 18.4388 7.67874C18.8571 7.92072 19 8.45598 18.7581 8.87429C18.5161 9.29259 17.9808 9.43553 17.5625 9.19355C16.6625 8.67292 15.6177 8.37467 14.5007 8.37467C12.0573 8.37467 9.94811 9.80535 8.96508 11.8747H12.1673C12.6506 11.8747 13.0423 12.2664 13.0423 12.7497C13.0423 13.2329 12.6506 13.6247 12.1673 13.6247H8.43768Z"
                                    fill="#2860E6"></path>
                            </svg>
                            <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                viewBox="0 0 29 29" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.5007 3.70801C8.54058 3.70801 3.70898 8.5396 3.70898 14.4997C3.70898 20.4597 8.54058 25.2913 14.5007 25.2913C20.4607 25.2913 25.2923 20.4597 25.2923 14.4997C25.2923 8.5396 20.4607 3.70801 14.5007 3.70801ZM1.95898 14.4997C1.95898 7.5731 7.57408 1.95801 14.5007 1.95801C21.4272 1.95801 27.0423 7.5731 27.0423 14.4997C27.0423 21.4262 21.4272 27.0413 14.5007 27.0413C7.57408 27.0413 1.95898 21.4262 1.95898 14.4997ZM8.43768 13.6247C8.3968 13.9105 8.37565 14.2026 8.37565 14.4997C8.37565 14.7968 8.3968 15.0889 8.43768 15.3747H12.1673C12.6506 15.3747 13.0423 15.7664 13.0423 16.2497C13.0423 16.7329 12.6506 17.1247 12.1673 17.1247H8.96508C9.94811 19.194 12.0573 20.6247 14.5007 20.6247C15.6177 20.6247 16.6625 20.3264 17.5625 19.8058C17.9808 19.5638 18.5161 19.7068 18.7581 20.1251C19 20.5434 18.8571 21.0786 18.4388 21.3206C17.2796 21.9912 15.9336 22.3747 14.5007 22.3747C11.0718 22.3747 8.15482 20.1833 7.07375 17.1247H6.33398C5.85073 17.1247 5.45898 16.7329 5.45898 16.2497C5.45898 15.7664 5.85073 15.3747 6.33398 15.3747H6.67371C6.64196 15.0874 6.62565 14.7954 6.62565 14.4997C6.62565 14.2039 6.64196 13.912 6.67371 13.6247H6.33398C5.85073 13.6247 5.45898 13.2329 5.45898 12.7497C5.45898 12.2664 5.85073 11.8747 6.33398 11.8747H7.07375C8.15482 8.81604 11.0718 6.62467 14.5007 6.62467C15.9336 6.62467 17.2796 7.00818 18.4388 7.67874C18.8571 7.92072 19 8.45598 18.7581 8.87429C18.5161 9.29259 17.9808 9.43553 17.5625 9.19355C16.6625 8.67292 15.6177 8.37467 14.5007 8.37467C12.0573 8.37467 9.94811 9.80535 8.96508 11.8747H12.1673C12.6506 11.8747 13.0423 12.2664 13.0423 12.7497C13.0423 13.2329 12.6506 13.6247 12.1673 13.6247H8.43768Z"
                                    fill="#EDEDED"></path>
                            </svg>
                            <p class="mr-3 font-semibold text-[15px] dark:text-dark-43 leading-[24px]">
                                ارزهای دیجیتال
                            </p>
                            <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17" fill="none">
                                <circle opacity="0.5" cx="8.49967" cy="8.49967" r="6.66667" stroke="#2860E6"></circle>
                                <path d="M8.5 5.16699V9.16699" stroke="#2860E6" stroke-linecap="round"></path>
                                <circle cx="8.49967" cy="11.1667" r="0.666667" fill="#2860E6"></circle>
                            </svg>
                            <svg class="hidden mr-auto dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 17 17" fill="none">
                                <circle opacity="0.5" cx="8.49967" cy="8.49967" r="6.66667" stroke="#EDEDED"></circle>
                                <path d="M8.5 5.16699V9.16699" stroke="#EDEDED" stroke-linecap="round"></path>
                                <circle cx="8.49967" cy="11.1667" r="0.666667" fill="#EDEDED"></circle>
                            </svg>
                        </div>
                    </div>
                    <div class="hidden /md:block bg-white-100 px-3 py-4 rounded-[6px] mt-4 dark:bg-dark-11">
                        <div class="flex items-center gap-1 mb-[10px]">
                            <div class="h-5 rounded-full bg-blue-500 w-1 dark:bg-dark-2"></div>
                            <h5 class="font-semibold leading-[24px] text-[15px] text-black-12 dark:text-white-60">
                                آموزش های مرتبط
                            </h5>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-semibold text-sm leading-[21px] text-black-50 dark:text-dark-25">
                                چگونه فایروال ویندوز ۷، ۸، ۱۰ و ۱۱ را غیر فعال کنیم؟
                            </p>
                            <a>
                                <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path opacity="0.5"
                                        d="M17.9316 11.7798C18.3623 11.7798 18.7115 11.4307 18.7115 11C18.7115 10.5693 18.3623 10.2202 17.9316 10.2202V11.7798ZM17.9316 10.2202H4.06836V11.7798H17.9316V10.2202Z"
                                        fill="#2860E6"></path>
                                    <path d="M9.26709 5.80176L4.06836 11.0005L9.26709 16.1992" stroke="#2860E6"
                                        stroke-width="1.55962" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path opacity="0.5"
                                        d="M17.9316 11.7798C18.3623 11.7798 18.7115 11.4307 18.7115 11C18.7115 10.5693 18.3623 10.2202 17.9316 10.2202V11.7798ZM17.9316 10.2202H4.06836V11.7798H17.9316V10.2202Z"
                                        fill="#EDEDED"></path>
                                    <path d="M9.26709 5.80176L4.06836 11.0005L9.26709 16.1992" stroke="#EDEDED"
                                        stroke-width="1.55962" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="flex items-center justify-between mt-[14px]">
                            <p class="font-semibold text-sm leading-[21px] text-black-50 dark:text-dark-25">
                                چگونه فایروال ویندوز ۷، ۸، ۱۰ و ۱۱ را غیر فعال کنیم؟
                            </p>
                            <a>
                                <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path opacity="0.5"
                                        d="M17.9316 11.7798C18.3623 11.7798 18.7115 11.4307 18.7115 11C18.7115 10.5693 18.3623 10.2202 17.9316 10.2202V11.7798ZM17.9316 10.2202H4.06836V11.7798H17.9316V10.2202Z"
                                        fill="#2860E6"></path>
                                    <path d="M9.26709 5.80176L4.06836 11.0005L9.26709 16.1992" stroke="#2860E6"
                                        stroke-width="1.55962" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path opacity="0.5"
                                        d="M17.9316 11.7798C18.3623 11.7798 18.7115 11.4307 18.7115 11C18.7115 10.5693 18.3623 10.2202 17.9316 10.2202V11.7798ZM17.9316 10.2202H4.06836V11.7798H17.9316V10.2202Z"
                                        fill="#EDEDED"></path>
                                    <path d="M9.26709 5.80176L4.06836 11.0005L9.26709 16.1992" stroke="#EDEDED"
                                        stroke-width="1.55962" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="flex items-center justify-between mt-[14px]">
                            <p class="font-semibold text-sm leading-[21px] text-black-50 dark:text-dark-25">
                                چگونه فایروال ویندوز ۷، ۸، ۱۰ و ۱۱ را غیر فعال کنیم؟
                            </p>
                            <a>
                                <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path opacity="0.5"
                                        d="M17.9316 11.7798C18.3623 11.7798 18.7115 11.4307 18.7115 11C18.7115 10.5693 18.3623 10.2202 17.9316 10.2202V11.7798ZM17.9316 10.2202H4.06836V11.7798H17.9316V10.2202Z"
                                        fill="#2860E6"></path>
                                    <path d="M9.26709 5.80176L4.06836 11.0005L9.26709 16.1992" stroke="#2860E6"
                                        stroke-width="1.55962" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path opacity="0.5"
                                        d="M17.9316 11.7798C18.3623 11.7798 18.7115 11.4307 18.7115 11C18.7115 10.5693 18.3623 10.2202 17.9316 10.2202V11.7798ZM17.9316 10.2202H4.06836V11.7798H17.9316V10.2202Z"
                                        fill="#EDEDED"></path>
                                    <path d="M9.26709 5.80176L4.06836 11.0005L9.26709 16.1992" stroke="#EDEDED"
                                        stroke-width="1.55962" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="flex items-center justify-between mt-[14px]">
                            <p class="font-semibold text-sm leading-[21px] text-black-50 dark:text-dark-25">
                                چگونه فایروال ویندوز ۷، ۸، ۱۰ و ۱۱ را غیر فعال کنیم؟
                            </p>
                            <a>
                                <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path opacity="0.5"
                                        d="M17.9316 11.7798C18.3623 11.7798 18.7115 11.4307 18.7115 11C18.7115 10.5693 18.3623 10.2202 17.9316 10.2202V11.7798ZM17.9316 10.2202H4.06836V11.7798H17.9316V10.2202Z"
                                        fill="#2860E6"></path>
                                    <path d="M9.26709 5.80176L4.06836 11.0005L9.26709 16.1992" stroke="#2860E6"
                                        stroke-width="1.55962" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path opacity="0.5"
                                        d="M17.9316 11.7798C18.3623 11.7798 18.7115 11.4307 18.7115 11C18.7115 10.5693 18.3623 10.2202 17.9316 10.2202V11.7798ZM17.9316 10.2202H4.06836V11.7798H17.9316V10.2202Z"
                                        fill="#EDEDED"></path>
                                    <path d="M9.26709 5.80176L4.06836 11.0005L9.26709 16.1992" stroke="#EDEDED"
                                        stroke-width="1.55962" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="flex items-center justify-between mt-[14px]">
                            <p class="font-semibold text-sm leading-[21px] text-black-50 dark:text-dark-25">
                                چگونه فایروال ویندوز ۷، ۸، ۱۰ و ۱۱ را غیر فعال کنیم؟
                            </p>
                            <a>
                                <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path opacity="0.5"
                                        d="M17.9316 11.7798C18.3623 11.7798 18.7115 11.4307 18.7115 11C18.7115 10.5693 18.3623 10.2202 17.9316 10.2202V11.7798ZM17.9316 10.2202H4.06836V11.7798H17.9316V10.2202Z"
                                        fill="#2860E6"></path>
                                    <path d="M9.26709 5.80176L4.06836 11.0005L9.26709 16.1992" stroke="#2860E6"
                                        stroke-width="1.55962" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path opacity="0.5"
                                        d="M17.9316 11.7798C18.3623 11.7798 18.7115 11.4307 18.7115 11C18.7115 10.5693 18.3623 10.2202 17.9316 10.2202V11.7798ZM17.9316 10.2202H4.06836V11.7798H17.9316V10.2202Z"
                                        fill="#EDEDED"></path>
                                    <path d="M9.26709 5.80176L4.06836 11.0005L9.26709 16.1992" stroke="#EDEDED"
                                        stroke-width="1.55962" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="bg-yellow-300 py-[33px] mt-4 rounded-[6px]">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="92" height="93" viewBox="0 0 92 93" fill="none">
                                <g clip-path="url(#clip0_801_10838)">
                                    <path
                                        d="M27.7927 39.2697L45.6042 21.4589L63.4251 39.2791L73.7891 28.9151L45.6042 0.729492L17.4287 28.9057L27.7927 39.2697Z"
                                        fill="white"></path>
                                    <path d="M20.4732 46.5855L10.1094 36.2217L-0.254924 46.586L10.1089 56.9498L20.4732 46.5855Z"
                                        fill="white"></path>
                                    <path
                                        d="M27.7923 53.9061L45.6038 71.7169L63.424 53.8975L73.7937 64.2556L73.7887 64.2614L45.6038 92.4463L17.4276 64.2708L17.4131 64.2564L27.7923 53.9061Z"
                                        fill="white"></path>
                                    <path d="M81.0996 56.9551L91.4639 46.5908L81.1001 36.227L70.7358 46.5913L81.0996 56.9551Z"
                                        fill="white"></path>
                                    <path
                                        d="M56.1164 46.5822H56.1207L45.6039 36.0654L37.8318 43.8375H37.8311L36.9387 44.7307L35.0965 46.5728L35.082 46.5873L35.0965 46.6025L45.6039 57.1099L56.1207 46.5931L56.1258 46.5873L56.1164 46.5822Z"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_801_10838">
                                        <rect width="91.7168" height="91.7168" fill="white"
                                            transform="translate(0.141602 0.729492)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="">
                            <p class="text-center text-black-2 text-lg font-semibold mt-6 leading-[32px]">
                                افتتاح حساب بایننس
                            </p>
                            <p class="text-center text-black-2 text-sm font-medium leading-[32px]">
                                افتتاح رایگان و سریع حساب بایننس
                            </p>
                            <div class="flex justify-center items-center mt-6">
                                <button class="bg-white-100 rounded-lg py-[10px] px-4 text-sm font-semibold">
                                    اطلاعات بیشتر و خرید
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-19 py-[33px] mt-4 rounded-[6px]">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="178" height="114" viewBox="0 0 178 114" fill="none">
                                <path
                                    d="M102.336 57.0885C102.336 79.4948 84.1726 97.6555 61.7672 97.6555C39.3618 97.6555 21.2002 79.4939 21.2002 57.0885C21.2002 34.6844 39.362 16.5215 61.7672 16.5215C84.1722 16.5215 102.336 34.6853 102.336 57.0885Z"
                                    fill="#D9222A"></path>
                                <path
                                    d="M116.231 16.5195C105.749 16.5195 96.1972 20.4962 88.9975 27.0211C87.5308 28.352 86.1617 29.7866 84.9013 31.3142H93.0976C94.2197 32.6785 95.2527 34.1136 96.1904 35.6109H81.8089C80.944 36.9945 80.1634 38.4289 79.4716 39.9067H98.5264C99.1804 41.3045 99.7538 42.7385 100.244 44.2016H77.7542C77.2819 45.6105 76.8882 47.0447 76.5752 48.4974H101.422C102.029 51.3201 102.336 54.1996 102.335 57.0872C102.335 61.5925 101.6 65.9265 100.244 69.974H77.7538C78.2429 71.4378 78.816 72.8722 79.4705 74.2698H98.5259C97.8337 75.748 97.0526 77.1827 96.1875 78.5667H81.8082C82.7454 80.0628 83.7787 81.497 84.901 82.8598H93.0956C91.8368 84.3903 90.4672 85.8265 88.9982 87.1567C96.1979 93.6804 105.749 97.6553 116.231 97.6553C138.637 97.6553 156.8 79.4938 156.8 57.0883C156.8 34.6852 138.637 16.5213 116.231 16.5213"
                                    fill="#EE9F2D"></path>
                                <path
                                    d="M151.392 79.7009C151.392 78.9779 151.978 78.3899 152.702 78.3899C153.426 78.3899 154.012 78.9779 154.012 79.7009C154.012 80.4239 153.426 81.0119 152.702 81.0119C151.978 81.0119 151.392 80.4239 151.392 79.7009ZM152.702 80.6971C153.252 80.6969 153.698 80.251 153.698 79.7009C153.698 79.1513 153.253 78.706 152.703 78.7056H152.702C152.153 78.7049 151.708 79.1492 151.707 79.6979V79.7011C151.706 80.251 152.152 80.6969 152.701 80.6973C152.701 80.6971 152.702 80.6971 152.702 80.6971ZM152.525 80.2767H152.257V79.125H152.743C152.844 79.125 152.948 79.125 153.037 79.1824C153.131 79.2455 153.183 79.3567 153.183 79.4715C153.183 79.6005 153.107 79.721 152.984 79.768L153.196 80.2765H152.898L152.722 79.8207H152.526L152.525 80.2767ZM152.525 79.6236H152.674C152.729 79.6236 152.788 79.6283 152.838 79.601C152.882 79.5728 152.905 79.5199 152.905 79.469C152.904 79.4218 152.88 79.3782 152.84 79.3519C152.793 79.3228 152.719 79.3291 152.668 79.3291H152.525V79.6236ZM52.2941 61.5294C51.8317 61.4756 51.6286 61.4613 51.311 61.4613C48.8146 61.4613 47.5509 62.3172 47.5509 64.0079C47.5509 65.05 48.1676 65.7131 49.1299 65.7131C50.9241 65.7131 52.2169 64.0047 52.2941 61.5294ZM55.4968 68.9865H51.8478L51.9316 67.2517C50.8184 68.6224 49.3335 69.2742 47.3154 69.2742C44.9281 69.2742 43.2917 67.4097 43.2917 64.7024C43.2917 60.629 46.1384 58.2521 51.0247 58.2521C51.5237 58.2521 52.1642 58.2971 52.8194 58.381C52.9559 57.8293 52.9918 57.5927 52.9918 57.2959C52.9918 56.1867 52.2243 55.7734 50.1668 55.7734C48.0123 55.749 46.2353 56.2866 45.5056 56.5266C45.5517 56.2489 46.1158 52.7617 46.1158 52.7617C48.3107 52.1185 49.758 51.8764 51.3872 51.8764C55.1686 51.8764 57.1719 53.5744 57.1681 56.7834C57.1755 57.6433 57.0331 58.7044 56.8112 60.099C56.429 62.5249 55.6089 67.72 55.4968 68.9865ZM41.4491 68.9865H37.045L39.5676 53.1671L33.9346 68.9865H30.9335L30.5624 53.2575L27.9108 68.9865H23.7881L27.2316 48.4078H33.5644L33.9486 59.9266L37.8114 48.4078H44.8551L41.4491 68.9865ZM121.672 61.5294C121.212 61.4756 121.008 61.4613 120.691 61.4613C118.196 61.4613 116.932 62.3172 116.932 64.0079C116.932 65.05 117.548 65.7131 118.51 65.7131C120.304 65.7131 121.598 64.0047 121.672 61.5294ZM124.878 68.9865H121.229L121.312 67.2517C120.198 68.6224 118.713 69.2742 116.696 69.2742C114.309 69.2742 112.673 67.4097 112.673 64.7024C112.673 60.629 115.518 58.2521 120.406 58.2521C120.905 58.2521 121.544 58.2971 122.199 58.381C122.335 57.8293 122.371 57.5927 122.371 57.2959C122.371 56.1867 121.604 55.7734 119.547 55.7734C117.393 55.749 115.618 56.2866 114.885 56.5266C114.931 56.2489 115.497 52.7617 115.497 52.7617C117.692 52.1185 119.138 51.8764 120.766 51.8764C124.549 51.8764 126.552 53.5744 126.548 56.7834C126.556 57.6433 126.414 58.7044 126.192 60.099C125.811 62.5249 124.989 67.72 124.878 68.9865ZM75.0697 68.7322C73.8645 69.1117 72.9248 69.2742 71.9057 69.2742C69.6543 69.2742 68.4256 67.9803 68.4256 65.5978C68.3935 64.8586 68.7494 62.9129 69.0292 61.1373C69.2835 59.574 70.9387 49.7177 70.9387 49.7177H75.3165L74.8051 52.2507H77.4491L76.852 56.2726H74.1983C73.6898 59.4554 72.9657 63.4198 72.9573 63.9453C72.9573 64.8077 73.4177 65.1845 74.465 65.1845C74.9669 65.1845 75.3554 65.1332 75.6524 65.0263L75.0697 68.7322ZM88.4923 68.5966C86.9885 69.0563 85.5374 69.2784 83.9997 69.2746C79.0991 69.2699 76.5446 66.7104 76.5446 61.8094C76.5446 56.0886 79.7945 51.8774 84.2058 51.8774C87.8152 51.8774 90.1204 54.2352 90.1204 57.9332C90.1204 59.1602 89.9622 60.358 89.5807 62.0492H80.863C80.5681 64.4766 82.1218 65.4882 84.6682 65.4882C86.2355 65.4882 87.6487 65.1652 89.2203 64.4344L88.4923 68.5966ZM86.0317 58.6752C86.0558 58.3265 86.4961 55.6882 83.9947 55.6882C82.6001 55.6882 81.603 56.7513 81.1968 58.6752H86.0317ZM58.1387 57.5414C58.1387 59.6583 59.1652 61.118 61.493 62.2141C63.2766 63.0524 63.5523 63.3012 63.5523 64.0606C63.5523 65.104 62.7661 65.575 61.0232 65.575C59.7094 65.575 58.4872 65.3698 57.0777 64.9146C57.0777 64.9146 56.4984 68.6032 56.472 68.7797C57.4732 68.9982 58.3659 69.2003 61.055 69.2746C65.7023 69.2746 67.8484 67.5052 67.8484 63.6811C67.8484 61.3816 66.9498 60.0321 64.7438 59.0178C62.8972 58.1703 62.6854 57.9812 62.6854 57.1997C62.6854 56.2947 63.417 55.8333 64.8408 55.8333C65.7052 55.8333 66.8861 55.9255 68.0048 56.0846L68.6319 52.203C67.4915 52.0222 65.7626 51.8771 64.756 51.8771C59.829 51.8774 58.1236 54.4508 58.1387 57.5414ZM109.913 52.3171C111.136 52.3171 112.277 52.6383 113.848 53.4293L114.569 48.9629C113.924 48.7095 111.652 47.2227 109.728 47.2227C106.781 47.2227 104.29 48.6851 102.537 51.0986C99.9813 50.252 98.9306 51.963 97.6426 53.6675L96.4984 53.934C96.5849 53.3728 96.6631 52.8153 96.6367 52.2512H92.5922C92.0396 57.4304 91.0604 62.6761 90.2935 67.8621L90.0938 68.9867H94.4999C95.2353 64.2084 95.6382 61.149 95.8832 59.0784L97.5423 58.1554C97.7902 57.2338 98.5658 56.9219 100.123 56.9596C99.9132 58.0914 99.8086 59.2402 99.81 60.3912C99.81 65.8661 102.764 69.2748 107.505 69.2748C108.727 69.2748 109.775 69.1139 111.397 68.6741L112.172 63.9826C110.713 64.7015 109.515 65.0396 108.43 65.0396C105.87 65.0396 104.32 63.1496 104.32 60.0258C104.32 55.4943 106.625 52.3171 109.913 52.3171Z"
                                    fill="black"></path>
                                <path
                                    d="M42.7174 67.763H38.3124L40.8371 51.9457L35.2038 67.763H32.2019L31.8308 52.0361L29.1791 67.763H25.0566L28.5002 47.1875H34.8329L35.011 59.9253L39.2833 47.1875H46.1237L42.7174 67.763Z"
                                    fill="white"></path>
                                <path
                                    d="M147.199 48.4102L146.223 54.356C145.018 52.771 143.725 51.6241 142.016 51.6241C139.794 51.6241 137.772 53.3089 136.447 55.7882C134.604 55.4058 132.696 54.7569 132.696 54.7569L132.696 54.7721C132.844 53.3858 132.904 52.5403 132.89 52.2531H128.845C128.294 57.4323 127.315 62.678 126.549 67.864L126.348 68.9886H130.753C131.348 65.1249 131.803 61.9168 132.139 59.3721C133.644 58.0124 134.397 56.8259 135.918 56.905C135.245 58.5334 134.85 60.4087 134.85 62.3329C134.85 66.5168 136.967 69.2767 140.168 69.2767C141.783 69.2767 143.021 68.7203 144.229 67.4301L144.023 68.9859H148.189L151.543 48.4104L147.199 48.4102ZM141.691 65.1208C140.192 65.1208 139.435 64.0116 139.435 61.8221C139.435 58.5327 140.853 56.2004 142.851 56.2004C144.364 56.2004 145.183 57.3539 145.183 59.4794C145.183 62.7969 143.743 65.1208 141.691 65.1208Z"
                                    fill="black"></path>
                                <path
                                    d="M53.5614 60.3102C53.1 60.2569 52.8956 60.2426 52.5793 60.2426C50.0829 60.2426 48.82 61.0985 48.82 62.7888C48.82 63.8293 49.4367 64.4944 50.3972 64.4944C52.1932 64.4942 53.4862 62.786 53.5614 60.3102ZM56.7657 67.7646H53.1167L53.1996 66.0328C52.0875 67.401 50.6006 68.0555 48.5845 68.0555C46.1963 68.0555 44.5605 66.191 44.5605 63.4837C44.5605 59.4085 47.4063 57.0332 52.2936 57.0332C52.7926 57.0332 53.4331 57.0784 54.0876 57.1623C54.2241 56.6106 54.26 56.3742 54.26 56.0757C54.26 54.9662 53.4934 54.5549 51.4359 54.5549C49.2806 54.5305 47.5044 55.0681 46.7738 55.3054C46.8199 55.0286 47.384 51.5455 47.384 51.5455C49.578 50.8996 51.0271 50.6575 52.6543 50.6575C56.4368 50.6575 58.4408 52.3564 58.4372 55.5626C58.4437 56.4262 58.3007 57.4866 58.0792 58.8792C57.6979 61.3028 56.8771 66.5008 56.7657 67.7646ZM115.838 47.7428L115.116 52.2102C113.546 51.4201 112.404 51.0982 111.182 51.0982C107.894 51.0982 105.589 54.2753 105.589 58.8062C105.589 61.9297 107.139 63.8191 109.698 63.8191C110.783 63.8191 111.98 63.4819 113.44 62.7625L112.667 67.452C111.043 67.8943 109.996 68.0555 108.774 68.0555C104.033 68.0555 101.078 64.6465 101.078 59.1716C101.078 51.8153 105.16 46.6738 110.997 46.6738C112.919 46.6741 115.192 47.4895 115.838 47.7428ZM122.944 60.3102C122.482 60.2569 122.279 60.2426 121.961 60.2426C119.466 60.2426 118.202 61.0985 118.202 62.7888C118.202 63.8293 118.819 64.4944 119.78 64.4944C121.574 64.4942 122.868 62.786 122.944 60.3102ZM126.148 67.7646H122.498L122.582 66.0328C121.469 67.401 119.983 68.0555 117.967 68.0555C115.579 68.0555 113.943 66.191 113.943 63.4837C113.943 59.4085 116.79 57.0332 121.675 57.0332C122.175 57.0332 122.814 57.0784 123.47 57.1623C123.605 56.6106 123.642 56.3742 123.642 56.0757C123.642 54.9662 122.875 54.5549 120.818 54.5549C118.664 54.5305 116.887 55.0681 116.156 55.3054C116.202 55.0286 116.767 51.5455 116.767 51.5455C118.961 50.8996 120.409 50.6575 122.036 50.6575C125.82 50.6575 127.823 52.3564 127.818 55.5626C127.825 56.4262 127.683 57.4866 127.461 58.8792C127.081 61.3028 126.258 66.5008 126.148 67.7646ZM76.3398 67.5113C75.1334 67.8907 74.1937 68.0555 73.1758 68.0555C70.9244 68.0555 69.6956 66.7614 69.6956 64.3789C69.6644 63.6378 70.0206 61.694 70.3001 59.9186C70.5533 58.3533 72.2087 48.4979 72.2087 48.4979H76.5859L76.0751 51.0318H78.3218L77.7238 55.0519H75.4694C74.9609 58.2367 74.2348 62.198 74.2273 62.7246C74.2273 63.5902 74.6886 63.9635 75.735 63.9635C76.2369 63.9635 76.625 63.9147 76.9224 63.8073L76.3398 67.5113ZM89.7621 67.3775C88.2592 67.8369 86.8063 68.0582 85.2695 68.0555C80.3687 68.0507 77.8144 65.4913 77.8144 60.59C77.8144 54.8675 81.0641 50.6573 85.4756 50.6573C89.085 50.6573 91.3902 53.0143 91.3902 56.7141C91.3902 57.9422 91.232 59.1398 90.8514 60.83H82.1337C81.8386 63.2575 83.3923 64.2702 85.9389 64.2702C87.5051 64.2702 88.9194 63.9459 90.4901 63.2132L89.7621 67.3775ZM87.3008 57.4534C87.327 57.1058 87.7663 54.4663 85.2638 54.4663C83.8701 54.4663 82.873 55.5324 82.4671 57.4534H87.3008ZM59.4078 56.3222C59.4078 58.4392 60.4343 59.8971 62.7621 60.9948C64.5457 61.833 64.8214 62.0823 64.8214 62.8416C64.8214 63.8849 64.0343 64.3556 62.293 64.3556C60.9785 64.3556 59.7561 64.1504 58.3454 63.6955C58.3454 63.6955 57.7682 67.384 57.7418 67.5603C58.7409 67.7788 59.6345 67.9784 62.3239 68.0555C66.9718 68.0555 69.1173 66.2861 69.1173 62.4629C69.1173 60.1622 68.2198 58.813 66.0127 57.7989C64.1669 56.9494 63.9532 56.7629 63.9532 55.9805C63.9532 55.0765 64.6868 54.6112 66.1096 54.6112C66.9732 54.6112 68.154 54.7063 69.2746 54.8654L69.9008 50.983C68.7613 50.8022 67.0324 50.6573 66.0258 50.6573C61.0981 50.6573 59.3936 53.229 59.4078 56.3222ZM149.458 67.7646H145.291L145.498 66.2068C144.289 67.4988 143.051 68.0555 141.437 68.0555C138.236 68.0555 136.12 65.2953 136.12 61.1114C136.12 55.545 139.401 50.8528 143.286 50.8528C144.994 50.8528 146.287 51.5505 147.49 53.1345L148.468 47.1889H152.812L149.458 67.7646ZM142.961 63.898C145.012 63.898 146.453 61.574 146.453 58.2586C146.453 56.1331 145.632 54.9796 144.119 54.9796C142.122 54.9796 140.703 57.3107 140.703 60.6013C140.703 62.7903 141.462 63.898 142.961 63.898ZM130.115 51.032C129.563 56.2113 128.584 61.4574 127.818 66.6403L127.616 67.7648H132.021C133.597 57.5327 133.978 55.5344 136.448 55.7848C136.842 53.6904 137.574 51.8562 138.12 50.9305C136.276 50.5463 135.246 51.5889 133.897 53.5691C134.003 52.713 134.198 51.8815 134.16 51.0322L130.115 51.032ZM93.8597 51.032C93.3069 56.2113 92.3277 61.4574 91.562 66.6403L91.3613 67.7648H95.7683C97.3419 57.5327 97.7223 55.5344 100.191 55.7848C100.587 53.6904 101.319 51.8562 101.863 50.9305C100.02 50.5463 98.9893 51.5889 97.6418 53.5691C97.7483 52.713 97.9411 51.8815 97.9045 51.0322L93.8597 51.032ZM151.393 66.4545C151.392 65.7315 151.977 65.1448 152.7 65.1439H152.702C153.425 65.143 154.012 65.7283 154.012 66.4509V66.4545C154.012 67.1779 153.426 67.7641 152.702 67.7646C151.979 67.7641 151.393 67.1779 151.393 66.4545ZM152.702 67.45C153.252 67.4505 153.697 67.005 153.698 66.4558V66.4549C153.698 65.9051 153.253 65.4592 152.703 65.4587H152.702C152.152 65.4589 151.706 65.9048 151.706 66.4549C151.707 67.0046 152.153 67.45 152.702 67.45ZM152.525 67.0272H152.257V65.8786H152.743C152.844 65.8786 152.949 65.8807 153.036 65.936C153.13 66 153.184 66.1094 153.184 66.224C153.184 66.3539 153.108 66.4753 152.983 66.5216L153.196 67.0269H152.898L152.722 66.5729H152.525L152.525 67.0272ZM152.525 66.3765H152.673C152.728 66.3765 152.789 66.3808 152.838 66.3539C152.882 66.3257 152.904 66.2723 152.904 66.221C152.902 66.1736 152.879 66.1297 152.84 66.1028C152.794 66.0764 152.717 66.0838 152.667 66.0838H152.525L152.525 66.3765Z"
                                    fill="white"></path>
                            </svg>
                        </div>
                        <div class="">
                            <p class="text-center text-white-100 text-lg font-semibold mt-6 leading-[32px]">
                                خرید مستر کارت فیزیکی
                            </p>
                            <p class="text-center text-white-100 text-sm font-medium leading-[32px]">
                                با بهترین و مناسب ترین قیمت
                            </p>
                            <div class="flex justify-center items-center mt-6">
                                <button class="bg-white-100 text-blue-19 rounded-lg py-[10px] px-4 text-sm font-semibold">
                                    اطلاعات بیشتر و خرید
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comments Start -->
                <div class="mt-[56px] col-span-7 md:col-span-5">
                    <?php get_template_part('template-parts/comments'); ?>
                </div>
                <!-- Comments End -->
            </div>
        </section>







        <section class="container my-[60px]">
            <div class="flex items-center mb-[30px]">
                <div class="bg-blue-500 rounded-[3px] w-[14px] h-[14px]"></div>
                <p class="text-black-550 leading-[32px] dark:text-dark-25 md:text-[25px] font-bold mr-5">
                    آموزش های مرتبط
                </p>
                <div class="mr-auto flex items-center gap-[10px]">
                    <button id="prev-blogsNews" onclick="blogsNewsSwiper.slidePrev()"
                        class="w-[37px] h-[37px] flex items-center bg-blue-100 dark:bg-dark-26 justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none"
                            class="hidden md:block dark:hidden">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.7131 5.24764C11.9614 4.99932 12.364 4.99932 12.6123 5.24764L17.6993 10.3346C17.9476 10.5829 17.9476 10.9855 17.6993 11.2339L12.6123 16.3208C12.364 16.5691 11.9614 16.5691 11.7131 16.3208C11.4648 16.0725 11.4648 15.6699 11.7131 15.4216L15.7145 11.4201H3.68445C3.33327 11.4201 3.04858 11.1354 3.04858 10.7842C3.04858 10.433 3.33327 10.1484 3.68445 10.1484H15.7145L11.7131 6.1469C11.4648 5.89858 11.4648 5.49597 11.7131 5.24764Z"
                                fill="#525FE1"></path>
                        </svg>
                        <svg class="block md:hidden dark:hidden" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                            viewBox="0 0 15 15" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.50925 3.74373C8.67479 3.57818 8.9432 3.57818 9.10875 3.74373L12.5001 7.13503C12.6656 7.30058 12.6656 7.56899 12.5001 7.73454L9.10875 11.1258C8.9432 11.2914 8.67479 11.2914 8.50925 11.1258C8.3437 10.9603 8.3437 10.6919 8.50925 10.5263L11.1769 7.8587H3.15682C2.9227 7.8587 2.73291 7.66891 2.73291 7.43479C2.73291 7.20066 2.9227 7.01087 3.15682 7.01087H11.1769L8.50925 4.34323C8.3437 4.17768 8.3437 3.90928 8.50925 3.74373Z"
                                fill="#525FE1"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none"
                            class="hidden dark:block">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.71302 0.247643C8.96134 -0.000679257 9.36395 -0.000679257 9.61227 0.247643L14.6992 5.3346C14.9476 5.58292 14.9476 5.98553 14.6992 6.23385L9.61227 11.3208C9.36395 11.5691 8.96134 11.5691 8.71302 11.3208C8.46469 11.0725 8.46469 10.6699 8.71302 10.4216L12.7145 6.4201H0.684385C0.333204 6.4201 0.0485153 6.13541 0.0485153 5.78423C0.0485153 5.43305 0.333204 5.14836 0.684385 5.14836H12.7145L8.71302 1.1469C8.46469 0.898576 8.46469 0.495966 8.71302 0.247643Z"
                                fill="#FEFEFE"></path>
                        </svg>
                    </button>
                    <button id="next-blogsNews" onclick="blogsNewsSwiper.slideNext()"
                        class="w-[37px] h-[37px] flex items-center bg-blue-500 justify-center rounded-full">
                        <svg class="hidden md:block" xmlns="http://www.w3.org/2000/svg" width="15" height="12"
                            viewBox="0 0 15 12" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.28691 11.3208C6.03859 11.5692 5.63598 11.5692 5.38766 11.3208L0.300702 6.23388C0.05238 5.98556 0.05238 5.58295 0.300702 5.33463L5.38766 0.247672C5.63598 -0.000650622 6.03859 -0.000650657 6.28691 0.247672C6.53524 0.495994 6.53524 0.898605 6.28691 1.14693L2.28545 5.14839L14.3155 5.14839C14.6667 5.14839 14.9514 5.43307 14.9514 5.78425C14.9514 6.13544 14.6667 6.42012 14.3155 6.42012L2.28545 6.42013L6.28691 10.4216C6.53524 10.6699 6.53524 11.0725 6.28691 11.3208Z"
                                fill="white"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="9" viewBox="0 0 11 9" fill="none"
                            class="block md:hidden">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.97806 8.12584C4.81251 8.29139 4.5441 8.29139 4.37856 8.12584L0.987251 4.73454C0.821703 4.56899 0.821703 4.30058 0.987251 4.13503L4.37856 0.743727C4.5441 0.578179 4.81251 0.578179 4.97806 0.743727C5.14361 0.909275 5.14361 1.17768 4.97806 1.34323L2.31042 4.01087L10.3305 4.01087C10.5646 4.01087 10.7544 4.20066 10.7544 4.43478C10.7544 4.6689 10.5646 4.8587 10.3305 4.8587L2.31042 4.8587L4.97806 7.52634C5.14361 7.69188 5.14361 7.96029 4.97806 8.12584Z"
                                fill="white"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="swiper home-blogs-news-slider swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-5fa8a6d72dfa521e" aria-live="off"
                    style="transition-duration: 1000ms; transform: translate3d(681.5px, 0px, 0px);">






                    <div class="swiper-slide" role="group" aria-label="5 / 6" data-swiper-slide-index="4"
                        style="width: 321.75px; margin-left: 19px;">
                        <div class="bg-white-100 dark:border-none rounded-lg p-3 border border-gray-300 dark:bg-dark-11">
                            <div class="h-[165px] relative">
                                <img src="<?= RTARIA_IMAGES ?>/blog-1.png" class="rounded-[6px] h-full">
                                <div class="absolute rounded-lg right-4 bottom-5 py-2 px-[14px] bg-blue-500">
                                    <p class="text-sm leading-[25px] font-semibold text-blue-200">
                                        پرداخت های بین المللی
                                    </p>
                                </div>
                            </div>
                            <div class="mt-5">
                                <p class="font-bold text-[15px] leading-[28px] text-justify dark:text-dark-14">
                                    رفع مشکل صفحه سیاه بعد از نصب کالی لینوکس و بالا نیامدن آن
                                </p>
                                <p class="text-black-32 text-[13px] font-medium leading-[27px] mt-3 dark:text-dark-63">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                    مجله در
                                </p>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <p class="text-sm leading-[25px] text-black-50 dark:text-dark-14">
                                    24 دقیقه قبل
                                </p>
                                <a
                                    class="bg-blue-200 rounded-lg text-blue-500 px-6 py-2 dark:bg-blue-600 dark:text-white-100 hover-element-white">خواندن
                                    مطلب</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="6 / 6" data-swiper-slide-index="5"
                        style="width: 321.75px; margin-left: 19px;">
                        <div class="bg-white-100 dark:border-none rounded-lg p-3 border border-gray-300 dark:bg-dark-11">
                            <div class="h-[165px] relative">
                                <img src="<?= RTARIA_IMAGES ?>/blog-1.png" class="rounded-[6px] h-full">
                                <div class="absolute rounded-lg right-4 bottom-5 py-2 px-[14px] bg-blue-500">
                                    <p class="text-sm leading-[25px] font-semibold text-blue-200">
                                        پرداخت های بین المللی
                                    </p>
                                </div>
                            </div>
                            <div class="mt-5">
                                <p class="font-bold text-[15px] leading-[28px] text-justify dark:text-dark-14">
                                    رفع مشکل صفحه سیاه بعد از نصب کالی لینوکس و بالا نیامدن آن
                                </p>
                                <p class="text-black-32 text-[13px] font-medium leading-[27px] mt-3 dark:text-dark-63">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                    مجله در
                                </p>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <p class="text-sm leading-[25px] text-black-50 dark:text-dark-14">
                                    24 دقیقه قبل
                                </p>
                                <a
                                    class="bg-blue-200 rounded-lg text-blue-500 px-6 py-2 dark:bg-blue-600 dark:text-white-100 hover-element-white">خواندن
                                    مطلب</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></>
        </section>




        <?php get_template_part('template-parts/links'); ?>
    <?php
    }
}

get_footer();