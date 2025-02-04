<!-- Mobile Header Start -->
<div class="container h-[60px] flex items-center justify-between md:hidden">
    <button id="open-drawer" class="">
        <svg class="dark:hidden open-icon-drawer" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
            viewBox="0 0 25 24" fill="none">
            <path d="M20.5498 7L4.5498 7" stroke="#272727" stroke-width="1.5" stroke-linecap="round" />
            <path d="M20.5498 12L4.5498 12" stroke="#272727" stroke-width="1.5" stroke-linecap="round" />
            <path d="M20.5498 17L4.5498 17" stroke="#272727" stroke-width="1.5" stroke-linecap="round" />
        </svg>
        <svg class="hidden dark:block open-icon-drawer" xmlns="http://www.w3.org/2000/svg" width="25" height="24"
            viewBox="0 0 25 24" fill="none">
            <path d="M20.5498 7L4.5498 7" stroke="#fff" stroke-width="1.5" stroke-linecap="round" />
            <path d="M20.5498 12L4.5498 12" stroke="#fff" stroke-width="1.5" stroke-linecap="round" />
            <path d="M20.5498 17L4.5498 17" stroke="#fff" stroke-width="1.5" stroke-linecap="round" />
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="close-icon-drawer">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M18 6l-12 12" />
            <path d="M6 6l12 12" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="close-icon-drawer-dark">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M18 6l-12 12" />
            <path d="M6 6l12 12" />
        </svg>
    </button>
    <a href="<?=site_url()?>">
        <img alt="آریاپی" src="<?= RTARIA_IMAGES ?>/logo-light.png" class="w-[113px] h-[23px] dark:hidden" />
        <img alt="آریاپی" src="<?= RTARIA_IMAGES ?>/logo-dark.png" class="w-[113px] h-[23px] hidden dark:block" />
    </a>
    <button id="open-modal-search">
        <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
            fill="none">
            <circle cx="12.2176" cy="11.7666" r="8.98856" stroke="#25324B" stroke-width="1.72595" stroke-linecap="round"
            stroke-linejoin="round" />
            <path d="M18.4692 18.4851L21.9933 22" stroke="#25324B" stroke-width="1.72595" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
        <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
            fill="none">
            <circle cx="12.2176" cy="11.7666" r="8.98856" stroke="#fff" stroke-width="1.72595" stroke-linecap="round"
            stroke-linejoin="round" />
            <path d="M18.4692 18.4851L21.9933 22" stroke="#fff" stroke-width="1.72595" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
    </button>
</div>
<?php get_template_part('template-parts/search', 'mobile'); ?>
<!-- Mobile Header End -->