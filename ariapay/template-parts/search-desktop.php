<div id="search-box" class="bg-white-100 z-[999999] rounded-lg absolute top-0 w-[450px] left-0 py-4 px-3 hidden">
    <form id="search-form" action="<?=site_url();?>" method="GET">
        <div class="flex items-center px-[10px] h-[48px] border rounded-[4px] border-gray-23" id="search-box">
            <input name="s" class="flex-1" placeholder="جستجو خدمات و مقاله" type="text"/>
            <input class="hidden" type="hidden" id="search-category" value="services"/>
            <button type="submit" class="flex items-center justify-center">
                <svg class="block dark:hidden" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                    <circle cx="9.30427" cy="9.29854" r="7.75691" stroke="#25324B" stroke-width="1.72595" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M14.6992 15.0965L17.7404 18.1297" stroke="#25324B" stroke-width="1.72595" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
                    <circle cx="10.2985" cy="10.7985" r="7.75691" stroke="white" stroke-width="1.72595" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.6938 16.5965L18.7349 19.6297" stroke="white" stroke-width="1.72595" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </form>
    <div class="bg-dark-76 flex gap-x-[11px] my-[17px] rounded-md px-[5px] py-[7px]">
        <button id="search-searvice" class="search-click active-search text-[13px] leading-[16px] font-semibold text-[#363636] px-[46.5px] py-3 rounded-md">
        خدمات
        </button>
        <button id="search-news" class="search-click text-[13px] leading-[16px] font-semibold text-[#363636] px-[53.5px] py-3 rounded-md"
        >
        اخبار
        </button>
        <button
        id="search-educational"
        class="search-click text-[13px] leading-[16px] font-semibold text-[#363636] px-[47.5px] py-3 rounded-md"
        >
        آموزش
        </button>
    </div>
    <div id="item-searvice" class="suggestion-search">
        <div class="flex items-center gap-4 mt-[17px]">
            <div class="bg-dark-76 p-2 rounded-full">
                <svg
                width="18"
                height="19"
                viewBox="0 0 18 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <circle
                    cx="8.824"
                    cy="9.328"
                    r="6.633"
                    stroke="#585858"
                    stroke-width="1.726"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    d="m13.438 14.286 2.6 2.593"
                    stroke="#585858"
                    stroke-width="1.726"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                </svg>
            </div>
            <p>چیزی جستجو کنید</p>
        </div>
    </div>
    <div id="item-news" class="suggestion-search hidden">
        <div class="flex items-center gap-4 mt-[17px]">
            <div class="bg-dark-76 p-2 rounded-full">
                <svg
                width="18"
                height="19"
                viewBox="0 0 18 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <circle
                    cx="8.824"
                    cy="9.328"
                    r="6.633"
                    stroke="#585858"
                    stroke-width="1.726"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    d="m13.438 14.286 2.6 2.593"
                    stroke="#585858"
                    stroke-width="1.726"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                </svg>
            </div>
            <p>چیزی جستجو کنید</p>
        </div>
    </div>
    <div id="item-educational" class="suggestion-search hidden">
        <div class="flex items-center gap-4 mt-[17px]">
            <div class="bg-dark-76 p-2 rounded-full">
                <svg
                width="18"
                height="19"
                viewBox="0 0 18 19"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <circle
                    cx="8.824"
                    cy="9.328"
                    r="6.633"
                    stroke="#585858"
                    stroke-width="1.726"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    d="m13.438 14.286 2.6 2.593"
                    stroke="#585858"
                    stroke-width="1.726"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                </svg>
            </div>
            <p>چیزی جستجو کنید</p>
        </div>
    </div>
    </div>