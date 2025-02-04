<!-- Comments Start -->
<div class="mt-[56px]">
    <div class="flex items-center mb-[38px]">
        <div class="w-1 h-7 bg-blue-500 rounded-[3px]"></div>
        <p class="text-black-550 mr-2 md:text-[25px] text-xl leading-[39px] dark:text-white-100 font-bold">
            نظرات کاربران
        </p>
        <a class="open-modal-comment mr-auto bg-blue-500 text-white-100 text-[17px] font-medium leading-[21px] md:px-[46px] px-8 md:py-4 py-3 rounded-lg">
            ثبت نظر
        </a>
    </div>

    <div class="bg-white-100 flex flex-col gap-5 dark:bg-dark-1 rounded-[20px] py-[36px] px-[26px]">

    <?php
    $post_id = get_the_ID();

// Fetch comments for the current post
$comments = get_comments(array(
    'post_id' => $post_id,
    'status' => 'approve',
    'hierarchical' => 'threaded',
));

// Check if there are comments
if (!empty($comments)) :
    foreach ($comments as $comment) :
        // Only process top-level comments
        if ($comment->comment_parent == 0) :
?>
            <div class="border comment-wrapper rounded-lg border-dark-28 dark:border-dark-59 py-4 px-[30px]">
                <div class="flex items-center">
                    <img src="<?= esc_url(get_avatar_url($comment->user_id)); ?>" class="w-[26px] h-[26px] rounded-full" alt="">
                    <p class="mr-2 text-xs leading-[14px] font-medium text-black-100 dark:text-dark-58">
                        <?= esc_html($comment->comment_author); ?>
                    </p>
                    <svg class="mx-[22px] dark:hidden hidden md:block" xmlns="http://www.w3.org/2000/svg" width="2" height="22" viewBox="0 0 2 22" fill="none">
                        <line x1="0.945332" y1="0.509521" x2="0.945331" y2="21.4907" stroke="#464646" stroke-width="0.45707"></line>
                    </svg>
                    <svg class="mx-[22px] hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="2" height="22" viewBox="0 0 2 22" fill="none">
                        <line x1="0.946308" y1="0.509521" x2="0.946307" y2="21.4907" stroke="#999999" stroke-width="0.45707"></line>
                    </svg>
                    <p class="hidden md:block mr-[9px] text-[11px] leading-[14px] font-medium text-black-26 dark:text-dark-58">
                        <?= esc_html(get_comment_date('l, j F Y | H:i', $comment)); ?>
                    </p>
                    <button class="add-comment border-gray-24 dark:border-dark-61 dark:text-dark-60 text-black-100 border-[0.5px] px-[25px] py-3 rounded-lg font-medium text-xs leading-[15px] mr-auto" disabled>
                        پاسخ دادن
                    </button>
                </div>
                <p class="mt-4 text-black-22 text-xs leading-[15px] text-justify dark:text-white-400">
                    <?= esc_html($comment->comment_content); ?>
                </p>

                <!-- Render Replies -->
                <?php
                $replies = get_comments(array(
                    'post_id' => $post_id,
                    'status' => 'approve',
                    'parent' => $comment->comment_ID,
                ));
                if (!empty($replies)) :
                ?>
                    <div class="ml-5 mt-4 border-gray-200 pl-4">
                        <?php foreach ($replies as $reply) : ?>
                            <div class="border rounded-lg border-dark-28 dark:border-dark-59 py-2 px-4 mb-2">
                                <div class="flex items-center">
                                    <img src="<?= esc_url(get_avatar_url($reply->user_id)); ?>" class="w-[22px] h-[22px] rounded-full" alt="">
                                    <p class="mr-2 text-xs leading-[14px] font-medium text-black-100 dark:text-dark-58">
                                        <?= esc_html($reply->comment_author); ?>
                                    </p>
                                    <svg class="mx-[14px] dark:hidden hidden md:block" xmlns="http://www.w3.org/2000/svg" width="2" height="22" viewBox="0 0 2 22" fill="none">
                                        <line x1="0.945332" y1="0.509521" x2="0.945331" y2="21.4907" stroke="#464646" stroke-width="0.45707"></line>
                                    </svg>
                                    <p class="text-[11px] leading-[14px] text-black-26 dark:text-dark-58">
                                        <?= esc_html(get_comment_date('l, j F Y | H:i', $reply)); ?>
                                    </p>
                                </div>
                                <p class="mt-2 text-black-22 text-xs leading-[15px] text-justify dark:text-white-400">
                                    <?= esc_html($reply->comment_content); ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
<?php
        endif;
    endforeach;
else:
    echo '<p class="text-center text-black-100 dark:text-dark-58">اولین نفری باشید که نظری ثبت می‌کند.</p>'; // Message when no comments
endif;
?>
</div>
</div>
<!-- Comments End -->
<?php get_template_part('template-parts/comments-modal') ?>