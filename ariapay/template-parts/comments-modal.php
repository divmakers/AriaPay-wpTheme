<?php

?>



<div class="comment-modal items-center justify-center fixed top-0 left-0 w-full h-full z-[1000000] hidden">
    <div class="flex items-center justify-center h-full">
        <div
            class="bg-white-100 dark:bg-dark-83 rounded-[18px] content-comment-modal w-[549px] /h-[545px] px-[30px] py-[25px]">
            <div class="flex justify-between">
                <p class="text-[20px] dark:text-white-10 leading-[24px] font-semibold">
                    ارسال نظر
                </p>
                <button class="close-comment-modal">
                    <svg class="block dark:hidden" width="23" height="23" viewBox="0 0 23 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.334 11.5c0-4.321 0-6.482 1.342-7.824C5.02 2.333 7.18 2.333 11.501 2.333s6.482 0 7.824 1.343 1.342 3.503 1.342 7.824 0 6.482-1.342 7.824c-1.342 1.343-3.503 1.343-7.824 1.343-4.322 0-6.482 0-7.825-1.343S2.334 15.821 2.334 11.5Z"
                            stroke="#484848" stroke-width="1.375"></path>
                        <path d="M13.792 9.208 9.21 13.792m0-4.584 4.583 4.584" stroke="#484848" stroke-width="1.375"
                            stroke-linecap="round"></path>
                    </svg>
                    <svg class="hidden dark:block" width="23" height="23" viewBox="0 0 23 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.334 11.5c0-4.321 0-6.482 1.342-7.824C5.02 2.333 7.18 2.333 11.501 2.333s6.482 0 7.824 1.343 1.342 3.503 1.342 7.824 0 6.482-1.342 7.824c-1.342 1.343-3.503 1.343-7.824 1.343-4.322 0-6.482 0-7.825-1.343S2.334 15.821 2.334 11.5Z"
                            stroke="#ECECEC" stroke-width="1.375"></path>
                        <path d="M13.792 9.208 9.21 13.792m0-4.584 4.583 4.584" stroke="#ECECEC" stroke-width="1.375"
                            stroke-linecap="round"></path>
                    </svg>
                </button>
            </div>
            <div class="mt-[28px]">
            <form id="comment-form">
            <?php wp_nonce_field(); ?>
            <?php if (is_user_logged_in()):
            $current_user = wp_get_current_user(); ?>
            <p class="text-base text-black-100 dark:text-white-50 leading-[19px] font-medium">
                <span class="font-semibold"><?= esc_html($current_user->display_name) ?></span> نظر خود را ثبت کنید
                <input type="hidden" name="user_id" value="<?= get_current_user_id(); ?>">
                <input type="hidden" id="name" name="user_name" value="<?= esc_html($current_user->display_name); ?>">
                <input type="hidden" id="post_id" name="post_id" value="<?= get_the_ID(); ?>">
            </p>
            <?php else: ?>
                <label class="text-[14px] font-medium leading-[16px] dark:text-dark-28">نام شما</label>
                <div class="flex border rounded-[8px] border-white-70 dark:border-dark-84 py-[8px] px-[16px] mt-[7px]">
                    <svg class="block dark:hidden" width="25" height="24" viewBox="0 0 25 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.5 10c0-3.771 0-5.657 1.172-6.828S8.729 2 12.5 2s5.657 0 6.828 1.172S20.5 6.229 20.5 10v4c0 3.771 0 5.657-1.172 6.828S16.271 22 12.5 22s-5.657 0-6.828-1.172S4.5 17.771 4.5 14z"
                            stroke="#232323" stroke-width="1.5"></path>
                        <path opacity=".5" d="M15.5 19h-6" stroke="#232323" stroke-width="1.5" stroke-linecap="round">
                        </path>
                    </svg>
                    <svg class="hidden dark:block" width="25" height="24" viewBox="0 0 25 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.5 10c0-3.771 0-5.657 1.172-6.828S8.729 2 12.5 2s5.657 0 6.828 1.172S20.5 6.229 20.5 10v4c0 3.771 0 5.657-1.172 6.828S16.271 22 12.5 22s-5.657 0-6.828-1.172S4.5 17.771 4.5 14z"
                            stroke="#E4E4E4" stroke-width="1.5"></path>
                        <path opacity=".5" d="M15.5 19h-6" stroke="#E4E4E4" stroke-width="1.5" stroke-linecap="round">
                        </path>
                    </svg>
                    <input id="name" name="name" class="placeholder:text-dark-65 bg-transparent placeholder:text-[16px] placeholder:dark:text-dark-13 placeholder:font-medium mr-2 focus:outline-none w-full" placeholder="نام خود را وارد کنید...">
                </div>
                <div class="mt-3">
                    <lable class="text-[14px] font-medium leading-[16px] dark:text-dark-28">شماره تماس</lable>
                    <div class="flex border rounded-[8px] border-white-70 dark:border-dark-84 py-[8px] px-[16px] mt-[7px]">
                        <svg class="block dark:hidden" width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.5 10c0-3.771 0-5.657 1.172-6.828S8.729 2 12.5 2s5.657 0 6.828 1.172S20.5 6.229 20.5 10v4c0 3.771 0 5.657-1.172 6.828S16.271 22 12.5 22s-5.657 0-6.828-1.172S4.5 17.771 4.5 14z"
                                stroke="#232323" stroke-width="1.5"></path>
                            <path opacity=".5" d="M15.5 19h-6" stroke="#232323" stroke-width="1.5" stroke-linecap="round">
                            </path>
                        </svg>
                        <svg class="hidden dark:block" width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.5 10c0-3.771 0-5.657 1.172-6.828S8.729 2 12.5 2s5.657 0 6.828 1.172S20.5 6.229 20.5 10v4c0 3.771 0 5.657-1.172 6.828S16.271 22 12.5 22s-5.657 0-6.828-1.172S4.5 17.771 4.5 14z"
                                stroke="#E4E4E4" stroke-width="1.5"></path>
                            <path opacity=".5" d="M15.5 19h-6" stroke="#E4E4E4" stroke-width="1.5" stroke-linecap="round">
                            </path>
                        </svg>
                        <input id="phone" name="phone" class="placeholder:text-dark-65 bg-transparent placeholder:text-[16px] placeholder:dark:text-dark-13 placeholder:font-medium mr-2 focus:outline-none w-full" placeholder="شماره تماس خود را وارد نمایید...">
                    </div>
                </div>
                <?php endif; ?>
                <div class="flex items-center mt-3">
                <label class="text-[14px] font-medium leading-[16px] dark:text-dark-28">امتیاز شما به این مطلب:</label>    
                    <div class="flex items-center md:mr-4 mr-1">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <svg class="star" data-value="<?= $i; ?>" xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                viewBox="0 0 27 27" fill="none">
                                <path
                                    d="M11.5101 4.08057C12.3785 2.25114 14.8875 2.25114 15.7559 4.08056L17.2567 7.24228C17.6016 7.96874 18.2682 8.47227 19.0392 8.58877L22.3951 9.09577C24.3369 9.38913 25.1123 11.8702 23.7072 13.2942L21.2788 15.7552C20.7209 16.3207 20.4663 17.1354 20.598 17.9339L21.1712 21.4089C21.5029 23.4197 19.473 24.953 17.7363 24.0037L14.7346 22.363C14.045 21.986 13.221 21.986 12.5314 22.363L9.52975 24.0037C7.79296 24.953 5.76308 23.4197 6.09477 21.4089L6.66803 17.9339C6.79975 17.1354 6.54514 16.3207 5.98718 15.7552L3.55882 13.2942C2.15373 11.8702 2.92908 9.38913 4.87086 9.09577L8.22677 8.58877C8.99785 8.47227 9.66443 7.96874 10.0093 7.24228L11.5101 4.08057Z"
                                    fill="#FFCB05"></path>
                            </svg>
                        <?php endfor; ?>
                        <p id="rating-text" class="text-black-100 font-medium leading-[20px] md:mr-4 mr-1 dark:text-white-50">
                        </p>
                        <input type="hidden" id="rated_comment" name="rated-comment">
                    </div>
                </div>
            </div>
            <div class="flex flex-col /mt-[16px]">
                <label class="text-[14px] font-medium leading-[16px] dark:text-dark-28">پیام</label>
                <textarea id="comment"
                    class="border py-[13px] px-[16px] mt-[7px] rounded-[8px] bg-transparent h-[180px] border-white-70 dark:border-dark-84 placeholder:text-dark-65 placeholder:text-[16px] placeholder:dark:text-dark-13 placeholder:font-medium focus:outline-none"
                    placeholder="متن دیدگاه"></textarea>
            </div>
            <button
                class="bg-blue-500 dark:bg-dark-85 text-white-100 text-[17px] py-[19px] mt-[28px] rounded-[8px] leading-[20px] font-bold w-full">
                ارسال پیام
            </button>

            <p id="comment_submit_result" class="text-center mt-3 font-bold"></p>
            </div>
        </form>
    </div>
</div>