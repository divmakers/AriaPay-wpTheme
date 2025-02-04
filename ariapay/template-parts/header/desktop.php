<!-- Desktop Header Start -->
<div class="container hidden items-center h-full md:flex">
    <a href="<?=site_url()?>">
    <img alt="لوگو آریاپی" class="w-[90px] object-contain lg:w-[159px] h-[32px]" src="<?= RTARIA_IMAGES ?>/logo-light.png"
    id="logo-header" />
    </a>
    <button id="services" class="lg:mr-[37px] py-3 px-4 rounded-[9px] flex items-center gap-2">
    <span class="text-black-200 dark:text-white-100 lg:text-lg leading-[25px] whitespace-nowrap">لیست خدمات</span>
    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18"
        fill="none">
        <path
        d="M8.76276 11.7165L13.3171 7.01993C13.6013 6.72687 13.4291 6.16663 13.0548 6.16663H3.94602C3.57172 6.16663 3.39946 6.72687 3.68365 7.01993L8.23802 11.7165C8.38899 11.8722 8.61178 11.8722 8.76276 11.7165Z"
        fill="white" />
    </svg>
    <svg class="block dark:hidden" xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8"
        fill="none">
        <path d="M1.34424 1.57373L7.00547 6.42621L12.6667 1.57373" stroke="#2860E6" stroke-width="1.21312"
        stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    </button>
    <button id="blogs" class="lg:mr-[37px] py-3 px-4 rounded-[9px] flex items-center gap-2">
    <span class="text-black-200 lg:text-lg leading-[25px] dark:text-white-100">بلاگ</span>
    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18"
        fill="none">
        <path
        d="M8.76276 11.7165L13.3171 7.01993C13.6013 6.72687 13.4291 6.16663 13.0548 6.16663H3.94602C3.57172 6.16663 3.39946 6.72687 3.68365 7.01993L8.23802 11.7165C8.38899 11.8722 8.61178 11.8722 8.76276 11.7165Z"
        fill="white" />
    </svg>
    <svg class="block dark:hidden" xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8"
        fill="none">
        <path d="M1.34424 1.57373L7.00547 6.42621L12.6667 1.57373" stroke="#2860E6" stroke-width="1.21312"
        stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    </button>
    <a href="<?=get_site_url();?>/about-us" class="lg:mr-[37px] py-3 px-4 rounded-[9px] flex items-center gap-2 cursor-pointer relative">
    <span class="lg:text-lg text-black-200 dark:text-white-100 leading-[25px] whitespace-nowrap">درباره ما
    </span>
    <div class="main-shadow absolute"></div>
    </a>
    <a href="<?=get_site_url();?>/contact-us" class="lg:mr-[37px] py-3 px-4 rounded-[9px] flex items-center gap-2 cursor-pointer relative">
    <span class="lg:text-lg text-black-200 dark:text-white-100 leading-[25px] whitespace-nowrap">تماس با ما
    </span>
    <div class="main-shadow absolute"></div>
    </a>
    <div style="background: rgba(0, 0, 0, 0.15)" id="backdrop-search-box"
    class="backdrop-searchbox hidden z-[9999] fixed top-0 left-0 h-full w-full"></div>
    <button id="open-search-box" class="mr-auto w-[59px] h-[49px] flex items-center justify-center">
    <svg class="block dark:hidden" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
        fill="none">
        <circle cx="9.30427" cy="9.29854" r="7.75691" stroke="#25324B" stroke-width="1.72595" stroke-linecap="round"
        stroke-linejoin="round" />
        <path d="M14.6992 15.0965L17.7404 18.1297" stroke="#25324B" stroke-width="1.72595" stroke-linecap="round"
        stroke-linejoin="round" />
    </svg>
    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22"
        fill="none">
        <circle cx="10.2985" cy="10.7985" r="7.75691" stroke="white" stroke-width="1.72595" stroke-linecap="round"
        stroke-linejoin="round" />
        <path d="M15.6938 16.5965L18.7349 19.6297" stroke="white" stroke-width="1.72595" stroke-linecap="round"
        stroke-linejoin="round" />
    </svg>
    </button>
    <div
    class="mr-[17px] rounded-lg relative dark:border-none dark:bg-dark-10 border border-gray-100 py-3 px-[17px] flex items-center">
    <?php get_template_part('template-parts/search', 'desktop'); ?>
    <span class="w-6 h-6 flex items-center justify-center bg-blue-400 rounded-[4px]">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
        <path
            d="M8.00566 16.1041C12.2053 16.1041 15.6098 12.6996 15.6098 8.49998C15.6098 8.14814 15.0825 8.08999 14.9005 8.39112C14.035 9.82358 12.4629 10.7812 10.6671 10.7812C7.93733 10.7812 5.72441 8.5683 5.72441 5.83852C5.72441 4.04276 6.68206 2.47068 8.11451 1.6051C8.41565 1.42314 8.3575 0.895813 8.00566 0.895813C3.80599 0.895813 0.401489 4.30031 0.401489 8.49998C0.401489 12.6996 3.80599 16.1041 8.00566 16.1041Z"
            fill="#2860E6" />
        </svg>
    </span>
    <span class="text-sm dark:hidden leading-[20px] font-semibold mx-[15px] whitespace-nowrap">حالت تیره</span>
    <span
        class="hidden text-gray-400 dark:block text-sm leading-[20px] font-semibold mx-[15px] whitespace-nowrap">حالت
        روشن</span>
    <div class="flex items-center justify-center">
        <input type="checkbox" id="toggleSwitch" class="hidden" />
        <label for="toggleSwitch" class="cursor-pointer">
        <div class="w-[36px] h-5 bg-gray-400 rounded-full flex items-center pr-1">
            <div class="dot w-4 h-4 bg-white rounded-full translate-x-[-14px] transform transition bg-white-100">
            </div>
        </div>
        </label>
    </div>
    </div>
    <a href="<?=get_site_url();?>"
    class="mr-[17px] bg-blue-500 hover-element-blue flex items-center gap-2 px-[8px] py-2 lg:px-[18px] lg:py-3 rounded-lg cursor-pointer">
    <svg class="hidden lg:block" xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27"
        fill="none">
        <ellipse cx="13.0053" cy="6.99996" rx="4.16667" ry="4.33333" stroke="white" stroke-width="1.5" />
        <ellipse opacity="0.5" cx="13.0053" cy="18.9167" rx="7.29167" ry="4.33333" stroke="white"
        stroke-width="1.5" />
    </svg>
    <span class="font-medium text-sm lg:text-base leading-[26px] whitespace-nowrap text-white-100">ورود و ثبت
        نام</span>
    </a>
</div>
<!-- Desktop Header End -->