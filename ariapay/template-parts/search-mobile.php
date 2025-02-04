<!-- Mobile Search Box Start -->
<div style="background: rgba(0, 0, 0, 0.15)" id="mobile-search-box"
    class="fixed top-0 left-0 hidden w-full h-full flex items-center justify-center">
    <div id="mobile-search-box-content" class="bg-white-100 z-[99999] rounded-lg max-w-[80vw] py-4 px-3">
        <div class="flex items-center gap-2">
            <form action="<?=site_url();?>" id="search-box_mobile" class="flex flex-1 items-center px-[10px] h-[48px] border rounded-[4px] border-gray-23">
                <input name="s" class="flex-1" placeholder="جستجو خدمات و مقاله" />
                <button class="flex items-center justify-center">
                    <svg class="block dark:hidden" xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                        viewBox="0 0 19 19" fill="none">
                        <circle cx="9.30427" cy="9.29854" r="7.75691" stroke="#25324B" stroke-width="1.72595"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.6992 15.0965L17.7404 18.1297" stroke="#25324B" stroke-width="1.72595"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="21" height="22"
                        viewBox="0 0 21 22" fill="none">
                        <circle cx="10.2985" cy="10.7985" r="7.75691" stroke="white" stroke-width="1.72595"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.6938 16.5965L18.7349 19.6297" stroke="white" stroke-width="1.72595"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </form>
            <button id="close-mobile-search" class="border rounded-[4px] px-[10px] h-[48px] border-gray-23">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                    <path
                        d="M12.3791 12.3788L9.4679 9.46754M9.4679 9.46754L6.55664 6.55627M9.4679 9.46754L12.3792 6.55627M9.4679 9.46754L6.55664 12.3788"
                        stroke="black" stroke-width="1.45563" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>

        <div class="bg-dark-76 flex gap-x-[11px] my-[17px] rounded-md px-[5px] py-[7px]">
            <button id="search-searvice_mobile"
                class="search-click active-search text-[13px] leading-[16px] font-semibold text-[#363636] px-[46.5px] py-3 rounded-md">
                خدمات
            </button>
            <button id="search-news_mobile"
                class="search-click text-[13px] leading-[16px] font-semibold text-[#363636] px-[53.5px] py-3 rounded-md">
                اخبار
            </button>
            <button id="search-educational_mobile"
                class="search-click text-[13px] leading-[16px] font-semibold text-[#363636] px-[47.5px] py-3 rounded-md">
                آموزش
            </button>
        </div>
        <div id="item-searvice_mobile" class="suggestion-search">
            <div class="flex items-center gap-4">
                <div class="bg-dark-76 p-2 rounded-full">
                </div>
                <p>چیزی جستجو کنید...</p>
            </div>
        </div>
        <div id="item-news_mobile" class="suggestion-search hidden">
            <div class="flex items-center gap-4 mt-[17px]">
                <div class="bg-dark-76 p-2 rounded-full">
                </div>
                <p>چیزی جستجو کنید...</p>
            </div>
        </div>
        <div id="item-educational_mobile" class="suggestion-search hidden">
            <div class="flex items-center gap-4 mt-[17px]">
                <div class="bg-dark-76 p-2 rounded-full">
                </div>
                <p>چیزی جستجو کنید...</p>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Search Box End -->