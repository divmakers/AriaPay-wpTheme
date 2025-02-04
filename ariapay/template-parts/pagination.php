<!-- Pagination Start -->
<section class="md:mt-[68px] mt-[43px] mb-[47px]">
    <div class="flex items-center justify-center gap-4">
        <?php 
        $current_page = max(1, get_query_var('paged'));
        $total_pages = $wp_query->max_num_pages;
        $prev_link = get_previous_posts_page_link();
        $is_first_page = ($current_page == 1);
        if ($prev_link) : ?>
            <a href="<?php echo $is_first_page ? '#' : esc_url($prev_link); ?>" class="w-10 h-10 flex items-center justify-center rounded-lg">
                <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                    <g opacity="0.5" clip-path="url(#clip0_801_10592)">
                        <path d="M8.25 5.5L13.25 10.5L8.25 15.5" stroke="#1F1F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_801_10592">
                            <rect width="20" height="20" fill="white" transform="translate(0.75 0.5)"></rect>
                        </clipPath>
                    </defs>
                </svg>
                <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                    <g opacity="0.5" clip-path="url(#clip0_879_37700)">
                        <path d="M8.25 5.5L13.25 10.5L8.25 15.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_879_37700">
                            <rect width="20" height="20" fill="white" transform="translate(0.75 0.5)"></rect>
                        </clipPath>
                    </defs>
                </svg>
            </a>
        <?php endif; ?>

        <?php 
        // Pagination Links
        $args = array(
            'prev_next' => false, // Disable default prev/next links
            'end_size' => 1,      // Number of links to show at the ends
            'mid_size' => 1,      // Number of links to show around the current page
            'current' => max(1, get_query_var('paged')), // Current page
            'total' => $wp_query->max_num_pages, // Total number of pages
            'format' => '?paged=%#%', // URL format
            'show_all' => false, // Show all pages or not
            'type' => 'array', // Return an array of links
        );

        // Get pagination links
        $links = paginate_links($args);

        // Check if there are links and loop through them
        if ($links) {
            foreach ($links as $link) {
                if (strpos($link, '<a') !== false) {
                    echo '<div class="w-10 h-10 flex items-center justify-center rounded-lg">' . $link . '</div>';
                } elseif (strpos($link, 'dots') !== false) {
                    echo '<div class="w-10 h-10 flex items-center justify-center rounded-lg gap-4 font-bold text-lg leading-[27px] text-black-33 dark:text-white-300">' . $link . '</div>';
                } elseif (strpos($link, 'current') !== false) {
                    echo '<div class="w-10 h-10 flex items-center justify-center rounded-lg gap-4 font-bold text-lg leading-[27px] bg-blue-500 text-white-100">' . $link . '</div>';
                }
            }
        } else {
            echo '<div class="w-10 h-10 flex items-center justify-center rounded-lg gap-4 font-bold text-lg leading-[27px] bg-blue-500 text-white-100">1</div>';
        }
        ?>

        <?php 
        // Next Page Link
        $next_link = get_next_posts_page_link();
        $is_last_page = ($current_page == $total_pages);
        if ($next_link) : ?>
            <a href="<?php echo $is_last_page ? '#' : esc_url($next_link); ?>" class="w-10 h-10 flex items-center justify-center rounded-lg">
                <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                    <g opacity="0.5" clip-path="url(#clip0_801_10575)">
                        <path d="M12.75 5.5L7.75 10.5L12.75 15.5" stroke="#1F1F1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_801_10575">
                            <rect width="20" height="20" fill="white" transform="translate(0.25 0.5)"></rect>
                        </clipPath>
                    </defs>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none" class="hidden dark:block">
                    <g opacity="0.5" clip-path="url(#clip0_879_37683)">
                        <path d="M12.75 5.5L7.75 10.5L12.75 15.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_879_37683">
                            <rect width="20" height="20" fill="white" transform="translate(0.25 0.5)"></rect>
                        </clipPath>
                    </defs>
                </svg>
            </a>
        <?php endif; ?>
    </div>
</section>
<!-- Pagination End -->



