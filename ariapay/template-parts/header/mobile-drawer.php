<!-- Drawer Start -->
<div id="drawer" class="fixed top-0 right-0 w-[249px] max-h-screen h-screen z-50 dark:bg-dark-1 bg-white-100 drawer">
  <div class="flex justify-between items-center p-3">
    <img alt="آریاپی" class="w-[100px] h-5 dark:hidden" src="<?= RTARIA_ASSETS ?>/images/logo-light.png" />
    <img alt="آریاپی" class="w-[100px] h-5 hidden dark:block" src="<?= RTARIA_ASSETS ?>/images/logo-dark.png" />
    <button id="close-drawer">
      <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
        fill="none">
        <path
          d="M12.3791 12.3788L9.4679 9.46754M9.4679 9.46754L6.55664 6.55627M9.4679 9.46754L12.3792 6.55627M9.4679 9.46754L6.55664 12.3788"
          stroke="black" stroke-width="1.45563" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
        fill="none">
        <path
          d="M12.3791 12.3788L9.4679 9.46754M9.4679 9.46754L6.55664 6.55627M9.4679 9.46754L12.3792 6.55627M9.4679 9.46754L6.55664 12.3788"
          stroke="white" stroke-width="1.45563" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </button>
  </div>
  <div class="my-4 border-t-[0.5px] flex items-center border-b-[0.5px] dark:border-dark-48 border-gray-400 p-3">
    <div class="bg-blue-500 w-6 h-6 flex items-center justify-center rounded-full">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
        <ellipse cx="8.0002" cy="4.02025" rx="2.55489" ry="2.65315" stroke="white" stroke-width="0.636757" />
        <ellipse opacity="0.5" cx="8.00035" cy="11.3164" rx="4.47106" ry="2.65315" stroke="white"
          stroke-width="0.636757" />
      </svg>
    </div>
    <a href="<?=get_site_url()?>/" class="font-medium text-[13px] dark:text-dark-17 text-black-600 leading-[21px] mr-[10px]">ورود و ثبت نام</a>
  </div>
  <div class="">
    <div id="drawer-content" class="overflow-y-scroll">
      <div class="menu-item">
        <div class="flex items-center menu-item-header py-[17px] px-[14px] cursor-pointer">
          <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
            fill="none">
            <path
              d="M10.5948 2.75466L11.9281 3.45436C13.3626 4.20712 14.0798 4.5835 14.478 5.25984C14.8763 5.93618 14.8763 6.77779 14.8763 8.46102V8.539C14.8763 10.2222 14.8763 11.0638 14.478 11.7402C14.0798 12.4165 13.3626 12.7929 11.9281 13.5457L10.5948 14.2454C9.42436 14.8596 8.83915 15.1667 8.20964 15.1667C7.58012 15.1667 6.99491 14.8596 5.8245 14.2454L4.49116 13.5457C3.05672 12.7929 2.3395 12.4165 1.94123 11.7402C1.54297 11.0638 1.54297 10.2222 1.54297 8.539V8.46102C1.54297 6.77779 1.54297 5.93618 1.94123 5.25984C2.3395 4.5835 3.05672 4.20712 4.49116 3.45436L5.8245 2.75465C6.99491 2.14045 7.58012 1.83334 8.20964 1.83334C8.83915 1.83334 9.42436 2.14045 10.5948 2.75466Z"
              stroke="#1D1D1D" stroke-linecap="round" />
            <path opacity="0.5" d="M14.2051 5.5L8.20508 8.5M8.20508 8.5L2.20508 5.5M8.20508 8.5V14.8333"
              stroke="#1D1D1D" stroke-linecap="round" />
          </svg>

          <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
            fill="none">
            <path
              d="M10.5948 2.75462L11.9281 3.45433C13.3626 4.20709 14.0798 4.58347 14.478 5.25981C14.8763 5.93614 14.8763 6.77776 14.8763 8.46099V8.53897C14.8763 10.2222 14.8763 11.0638 14.478 11.7402C14.0798 12.4165 13.3626 12.7929 11.9281 13.5456L10.5948 14.2453C9.42436 14.8595 8.83915 15.1666 8.20964 15.1666C7.58012 15.1666 6.99491 14.8595 5.8245 14.2453L4.49116 13.5456C3.05672 12.7929 2.3395 12.4165 1.94123 11.7402C1.54297 11.0638 1.54297 10.2222 1.54297 8.53897V8.46099C1.54297 6.77776 1.54297 5.93614 1.94123 5.25981C2.3395 4.58347 3.05672 4.20709 4.49116 3.45432L5.8245 2.75462C6.99491 2.14042 7.58012 1.83331 8.20964 1.83331C8.83915 1.83331 9.42436 2.14042 10.5948 2.75462Z"
              stroke="#E6E6E6" stroke-linecap="round" />
            <path opacity="0.5" d="M14.2051 5.5L8.20508 8.5M8.20508 8.5L2.20508 5.5M8.20508 8.5V14.8333"
              stroke="#E6E6E6" stroke-linecap="round" />
          </svg>
          <p class="mr-[5px] dark:text-white-50 text-black-14 font-semibold text-xs leading-[20px]">
            لیست خدمات
          </p>
          <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17"
            fill="none">
            <path d="M4.21484 6.44872L9.00118 10.5513L13.7875 6.44872" stroke="#474747" stroke-width="1.02564"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <svg class="dark:block hidden mr-auto" xmlns="http://www.w3.org/2000/svg" width="18" height="17"
            viewBox="0 0 18 17" fill="none">
            <path d="M4.21484 6.44869L9.00118 10.5513L13.7875 6.44869" stroke="#E6E6E6" stroke-width="1.02564"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
        <div class="max-h-0 menu-item-content overflow-hidden bg-white-800 dark:bg-dark-49">
          <div class="px-[14px] py-[11px] border-t-[0.5px] border-b-[0.5px] dark:border-none border-gray-300">
            <div>
              <div class="flex justify-between items-center h-[30px] nested-menu-item-header">
                <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                  پی پال
                </p>
                <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                  viewBox="0 0 18 17" fill="none">
                  <path d="M4.21484 6.44872L9.00118 10.5513L13.7875 6.44872" stroke="#474747" stroke-width="1.02564"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg class="mr-auto hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                  viewBox="0 0 17 17" fill="none">
                  <path d="M3.71484 6.44869L8.50118 10.5513L13.2875 6.44869" stroke="#CDCDCD" stroke-width="1.02564"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="max-h-0 overflow-hidden nested-menu-item-content">
                <div class="mx-[14px] h-[30px]">
                  <a href="<?=get_site_url()?>/" class="flex items-center justify-between">
                    <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                      خدمات پی پال
                    </p>
                    <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39749" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39746" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
                <div class="mx-[14px] h-[30px]">
                  <a href="<?=get_site_url()?>/" class="flex items-center justify-between">
                    <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                      خدمات پی پال
                    </p>
                    <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39749" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39746" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
                <div class="mx-[14px] h-[30px]">
                  <a href="<?=get_site_url()?>/" class="flex items-center justify-between">
                    <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                      خدمات پی پال
                    </p>
                    <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39749" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39746" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
                <div class="mx-[14px] h-[30px]">
                  <a href="<?=get_site_url()?>/" class="flex items-center justify-between">
                    <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                      خدمات پی پال
                    </p>
                    <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39749" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39746" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
                <div class="mx-[14px] h-[30px]">
                  <a href="<?=get_site_url()?>/" class="flex items-center justify-between">
                    <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                      خدمات پی پال
                    </p>
                    <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39749" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39746" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <div class="flex justify-between items-center h-[30px]">
              <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                پاپییر
              </p>
              <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                viewBox="0 0 18 17" fill="none">
                <path d="M4.21484 6.44872L9.00118 10.5513L13.7875 6.44872" stroke="#474747" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <svg class="mr-auto hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                viewBox="0 0 17 17" fill="none">
                <path d="M3.71484 6.44869L8.50118 10.5513L13.2875 6.44869" stroke="#CDCDCD" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="flex justify-between items-center h-[30px]">
              <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                وریفای صرافی
              </p>
              <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                viewBox="0 0 18 17" fill="none">
                <path d="M4.21484 6.44872L9.00118 10.5513L13.7875 6.44872" stroke="#474747" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <svg class="mr-auto hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                viewBox="0 0 17 17" fill="none">
                <path d="M3.71484 6.44869L8.50118 10.5513L13.2875 6.44869" stroke="#CDCDCD" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="flex justify-between items-center h-[30px]">
              <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                آی پی ثابت VPN
              </p>
              <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                viewBox="0 0 18 17" fill="none">
                <path d="M4.21484 6.44872L9.00118 10.5513L13.7875 6.44872" stroke="#474747" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <svg class="mr-auto hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                viewBox="0 0 17 17" fill="none">
                <path d="M3.71484 6.44869L8.50118 10.5513L13.2875 6.44869" stroke="#CDCDCD" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="flex justify-between items-center h-[30px]">
              <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                خرید شماره مجازی
              </p>
              <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                viewBox="0 0 18 17" fill="none">
                <path d="M4.21484 6.44872L9.00118 10.5513L13.7875 6.44872" stroke="#474747" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <svg class="mr-auto hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                viewBox="0 0 17 17" fill="none">
                <path d="M3.71484 6.44869L8.50118 10.5513L13.2875 6.44869" stroke="#CDCDCD" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="flex justify-between items-center h-[30px]">
              <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                سایر خدمات
              </p>
              <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                viewBox="0 0 18 17" fill="none">
                <path d="M4.21484 6.44872L9.00118 10.5513L13.7875 6.44872" stroke="#474747" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <svg class="mr-auto hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                viewBox="0 0 17 17" fill="none">
                <path d="M3.71484 6.44869L8.50118 10.5513L13.2875 6.44869" stroke="#CDCDCD" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="menu-item">
        <div class="flex items-center menu-item-header py-[17px] px-[14px] cursor-pointer">
          <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
            fill="none">
            <circle opacity="0.5" cx="8.20573" cy="8.5" r="6.66667" stroke="#1D1D1D" />
            <path d="M8.20508 11.8333V12.1667V12.5" stroke="#1D1D1D" stroke-linecap="round" />
            <path d="M8.20508 4.5V4.83333V5.16667" stroke="#1D1D1D" stroke-linecap="round" />
            <path
              d="M10.2051 6.83333C10.2051 5.91286 9.30965 5.16666 8.20508 5.16666C7.10051 5.16666 6.20508 5.91286 6.20508 6.83333C6.20508 7.75381 7.10051 8.5 8.20508 8.5C9.30965 8.5 10.2051 9.24619 10.2051 10.1667C10.2051 11.0871 9.30965 11.8333 8.20508 11.8333C7.10051 11.8333 6.20508 11.0871 6.20508 10.1667"
              stroke="#1D1D1D" stroke-linecap="round" />
          </svg>
          <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
            fill="none">
            <circle opacity="0.5" cx="8.20573" cy="8.50004" r="6.66667" stroke="#E6E6E6" />
            <path d="M8.20508 11.8334V12.1667V12.5" stroke="#E6E6E6" stroke-linecap="round" />
            <path d="M8.20508 4.5V4.83333V5.16667" stroke="#E6E6E6" stroke-linecap="round" />
            <path
              d="M10.2051 6.83329C10.2051 5.91282 9.30965 5.16663 8.20508 5.16663C7.10051 5.16663 6.20508 5.91282 6.20508 6.83329C6.20508 7.75377 7.10051 8.49996 8.20508 8.49996C9.30965 8.49996 10.2051 9.24615 10.2051 10.1666C10.2051 11.0871 9.30965 11.8333 8.20508 11.8333C7.10051 11.8333 6.20508 11.0871 6.20508 10.1666"
              stroke="#E6E6E6" stroke-linecap="round" />
          </svg>
          <p class="mr-[5px] text-black-14 dark:text-white-50 font-semibold text-xs leading-[20px]">
            لیست پرداخت های بین المللی
          </p>
          <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17"
            fill="none">
            <path d="M4.21484 6.44872L9.00118 10.5513L13.7875 6.44872" stroke="#474747" stroke-width="1.02564"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <svg class="dark:block hidden mr-auto" xmlns="http://www.w3.org/2000/svg" width="18" height="17"
            viewBox="0 0 18 17" fill="none">
            <path d="M4.21484 6.44869L9.00118 10.5513L13.7875 6.44869" stroke="#E6E6E6" stroke-width="1.02564"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
        <div class="max-h-0 menu-item-content overflow-hidden bg-white-800 dark:bg-dark-49">
          <div class="px-[14px] py-[11px] border-t-[0.5px] border-b-[0.5px] dark:border-none border-gray-300">
            <div>
              <div class="flex justify-between items-center h-[30px] nested-menu-item-header">
                <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                  پی پال
                </p>
                <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                  viewBox="0 0 18 17" fill="none">
                  <path d="M4.21484 6.44872L9.00118 10.5513L13.7875 6.44872" stroke="#474747" stroke-width="1.02564"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg class="mr-auto hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                  viewBox="0 0 17 17" fill="none">
                  <path d="M3.71484 6.44869L8.50118 10.5513L13.2875 6.44869" stroke="#CDCDCD" stroke-width="1.02564"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="max-h-0 overflow-hidden nested-menu-item-content">
                <div class="mx-[14px] h-[30px]">
                  <a href="<?=get_site_url()?>/" class="flex items-center justify-between">
                    <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                      خدمات پی پال
                    </p>
                    <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39749" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39746" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
                <div class="mx-[14px] h-[30px]">
                  <a href="<?=get_site_url()?>/" class="flex items-center justify-between">
                    <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                      خدمات پی پال
                    </p>
                    <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39749" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39746" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
                <div class="mx-[14px] h-[30px]">
                  <a href="<?=get_site_url()?>/" class="flex items-center justify-between">
                    <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                      خدمات پی پال
                    </p>
                    <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39749" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39746" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
                <div class="mx-[14px] h-[30px]">
                  <a href="<?=get_site_url()?>/" class="flex items-center justify-between">
                    <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                      خدمات پی پال
                    </p>
                    <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39749" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39746" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
                <div class="mx-[14px] h-[30px]">
                  <a href="<?=get_site_url()?>/" class="flex items-center justify-between">
                    <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                      خدمات پی پال
                    </p>
                    <svg class="dark:hidden" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39749" stroke="#292D32" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                    <svg class="hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                      viewBox="0 0 17 17" fill="none">
                      <path d="M4.39844 8.5H12.6034" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                      <path d="M8.5 12.6025V4.39746" stroke="#CDCDCD" stroke-width="1.02562" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <div class="flex justify-between items-center h-[30px]">
              <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                پاپییر
              </p>
              <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                viewBox="0 0 18 17" fill="none">
                <path d="M4.21484 6.44872L9.00118 10.5513L13.7875 6.44872" stroke="#474747" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <svg class="mr-auto hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                viewBox="0 0 17 17" fill="none">
                <path d="M3.71484 6.44869L8.50118 10.5513L13.2875 6.44869" stroke="#CDCDCD" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="flex justify-between items-center h-[30px]">
              <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                وریفای صرافی
              </p>
              <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                viewBox="0 0 18 17" fill="none">
                <path d="M4.21484 6.44872L9.00118 10.5513L13.7875 6.44872" stroke="#474747" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <svg class="mr-auto hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                viewBox="0 0 17 17" fill="none">
                <path d="M3.71484 6.44869L8.50118 10.5513L13.2875 6.44869" stroke="#CDCDCD" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="flex justify-between items-center h-[30px]">
              <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                آی پی ثابت VPN
              </p>
              <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                viewBox="0 0 18 17" fill="none">
                <path d="M4.21484 6.44872L9.00118 10.5513L13.7875 6.44872" stroke="#474747" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <svg class="mr-auto hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                viewBox="0 0 17 17" fill="none">
                <path d="M3.71484 6.44869L8.50118 10.5513L13.2875 6.44869" stroke="#CDCDCD" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="flex justify-between items-center h-[30px]">
              <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                خرید شماره مجازی
              </p>
              <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                viewBox="0 0 18 17" fill="none">
                <path d="M4.21484 6.44872L9.00118 10.5513L13.7875 6.44872" stroke="#474747" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <svg class="mr-auto hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                viewBox="0 0 17 17" fill="none">
                <path d="M3.71484 6.44869L8.50118 10.5513L13.2875 6.44869" stroke="#CDCDCD" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="flex justify-between items-center h-[30px]">
              <p class="text-black-14 dark:text-gray-500 text-xs leading-[20px] font-semibold">
                سایر خدمات
              </p>
              <svg class="mr-auto dark:hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="17"
                viewBox="0 0 18 17" fill="none">
                <path d="M4.21484 6.44872L9.00118 10.5513L13.7875 6.44872" stroke="#474747" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <svg class="mr-auto hidden dark:block" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                viewBox="0 0 17 17" fill="none">
                <path d="M3.71484 6.44869L8.50118 10.5513L13.2875 6.44869" stroke="#CDCDCD" stroke-width="1.02564"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <a href="<?=get_site_url();?>/about-us/" class="flex items-center py-[17px] px-[14px] hover-element-blue">
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none"
          class="dark:hidden">
          <path
            d="M9.53711 1.83334C9.53711 1.83334 11.0038 1.96668 12.8704 3.83334C14.7371 5.70001 14.8704 7.16668 14.8704 7.16668"
            stroke="#1D1D1D" stroke-linecap="round" />
          <path
            d="M9.67773 4.19043C9.67773 4.19043 10.3377 4.37899 11.3277 5.36894C12.3176 6.35889 12.5062 7.01886 12.5062 7.01886"
            stroke="#1D1D1D" stroke-linecap="round" />
          <path opacity="0.5"
            d="M6.89811 4.0441L7.33078 4.81939C7.72125 5.51904 7.5645 6.43687 6.94952 7.05185C6.94952 7.05186 6.94952 7.05186 6.94952 7.05186C6.94944 7.05194 6.20363 7.79789 7.55606 9.15031C8.90804 10.5023 9.65397 9.75739 9.65451 9.75685C9.65453 9.75683 9.65452 9.75684 9.65454 9.75683C10.2695 9.14186 11.1873 8.98512 11.887 9.37559L12.6623 9.80826C13.7188 10.3979 13.8435 11.8795 12.9149 12.8081C12.3569 13.3661 11.6733 13.8003 10.9177 13.829C9.64556 13.8772 7.48523 13.5552 5.31818 11.3882C3.15113 9.22114 2.82919 7.06081 2.87741 5.78871C2.90606 5.03306 3.34025 4.34948 3.89825 3.79148C4.82688 2.86284 6.3085 2.98761 6.89811 4.0441Z"
            stroke="#1D1D1D" stroke-linecap="round" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none" stroke="#fff"
          class="hidden dark:block">
          <path
            d="M9.53711 1.83334C9.53711 1.83334 11.0038 1.96668 12.8704 3.83334C14.7371 5.70001 14.8704 7.16668 14.8704 7.16668"
            stroke="#fff" stroke-linecap="round" />
          <path
            d="M9.67773 4.19043C9.67773 4.19043 10.3377 4.37899 11.3277 5.36894C12.3176 6.35889 12.5062 7.01886 12.5062 7.01886"
            stroke="#fff" stroke-linecap="round" />
          <path opacity="0.5"
            d="M6.89811 4.0441L7.33078 4.81939C7.72125 5.51904 7.5645 6.43687 6.94952 7.05185C6.94952 7.05186 6.94952 7.05186 6.94952 7.05186C6.94944 7.05194 6.20363 7.79789 7.55606 9.15031C8.90804 10.5023 9.65397 9.75739 9.65451 9.75685C9.65453 9.75683 9.65452 9.75684 9.65454 9.75683C10.2695 9.14186 11.1873 8.98512 11.887 9.37559L12.6623 9.80826C13.7188 10.3979 13.8435 11.8795 12.9149 12.8081C12.3569 13.3661 11.6733 13.8003 10.9177 13.829C9.64556 13.8772 7.48523 13.5552 5.31818 11.3882C3.15113 9.22114 2.82919 7.06081 2.87741 5.78871C2.90606 5.03306 3.34025 4.34948 3.89825 3.79148C4.82688 2.86284 6.3085 2.98761 6.89811 4.0441Z"
            stroke="#fff" stroke-linecap="round" />
        </svg>
        <span class="mr-[5px] dark:text-white-50 text-black-14 font-semibold text-xs leading-[20px]">
          درباره ما
        </span>
      </a>

      <a href="<?=get_site_url();?>/contact-us/" class="flex items-center py-[17px] px-[14px] hover-element-blue">
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none"
          class="dark:hidden">
          <path
            d="M9.53711 1.83334C9.53711 1.83334 11.0038 1.96668 12.8704 3.83334C14.7371 5.70001 14.8704 7.16668 14.8704 7.16668"
            stroke="#1D1D1D" stroke-linecap="round" />
          <path
            d="M9.67773 4.19043C9.67773 4.19043 10.3377 4.37899 11.3277 5.36894C12.3176 6.35889 12.5062 7.01886 12.5062 7.01886"
            stroke="#1D1D1D" stroke-linecap="round" />
          <path opacity="0.5"
            d="M6.89811 4.0441L7.33078 4.81939C7.72125 5.51904 7.5645 6.43687 6.94952 7.05185C6.94952 7.05186 6.94952 7.05186 6.94952 7.05186C6.94944 7.05194 6.20363 7.79789 7.55606 9.15031C8.90804 10.5023 9.65397 9.75739 9.65451 9.75685C9.65453 9.75683 9.65452 9.75684 9.65454 9.75683C10.2695 9.14186 11.1873 8.98512 11.887 9.37559L12.6623 9.80826C13.7188 10.3979 13.8435 11.8795 12.9149 12.8081C12.3569 13.3661 11.6733 13.8003 10.9177 13.829C9.64556 13.8772 7.48523 13.5552 5.31818 11.3882C3.15113 9.22114 2.82919 7.06081 2.87741 5.78871C2.90606 5.03306 3.34025 4.34948 3.89825 3.79148C4.82688 2.86284 6.3085 2.98761 6.89811 4.0441Z"
            stroke="#1D1D1D" stroke-linecap="round" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none" stroke="#fff"
          class="hidden dark:block">
          <path
            d="M9.53711 1.83334C9.53711 1.83334 11.0038 1.96668 12.8704 3.83334C14.7371 5.70001 14.8704 7.16668 14.8704 7.16668"
            stroke="#fff" stroke-linecap="round" />
          <path
            d="M9.67773 4.19043C9.67773 4.19043 10.3377 4.37899 11.3277 5.36894C12.3176 6.35889 12.5062 7.01886 12.5062 7.01886"
            stroke="#fff" stroke-linecap="round" />
          <path opacity="0.5"
            d="M6.89811 4.0441L7.33078 4.81939C7.72125 5.51904 7.5645 6.43687 6.94952 7.05185C6.94952 7.05186 6.94952 7.05186 6.94952 7.05186C6.94944 7.05194 6.20363 7.79789 7.55606 9.15031C8.90804 10.5023 9.65397 9.75739 9.65451 9.75685C9.65453 9.75683 9.65452 9.75684 9.65454 9.75683C10.2695 9.14186 11.1873 8.98512 11.887 9.37559L12.6623 9.80826C13.7188 10.3979 13.8435 11.8795 12.9149 12.8081C12.3569 13.3661 11.6733 13.8003 10.9177 13.829C9.64556 13.8772 7.48523 13.5552 5.31818 11.3882C3.15113 9.22114 2.82919 7.06081 2.87741 5.78871C2.90606 5.03306 3.34025 4.34948 3.89825 3.79148C4.82688 2.86284 6.3085 2.98761 6.89811 4.0441Z"
            stroke="#fff" stroke-linecap="round" />
        </svg>
        <span class="mr-[5px] dark:text-white-50 text-black-14 font-semibold text-xs leading-[20px]">
          تماس با ما
        </span>
      </a>
    </div>
    <div class="px-[14px]">
      <div class="">
        <p class="text-black-14 text-sm font-bold text-center dark:text-white-50">
          شبکه های مجازی
        </p>
        <div class="flex justify-evenly mt-[5px]">
          <a href="<?=get_site_url()?>/"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M23.2602 13C23.2602 18.763 18.5884 23.4348 12.8254 23.4348C7.06244 23.4348 2.39062 18.763 2.39062 13C2.39062 7.23703 7.06244 2.56522 12.8254 2.56522C18.5884 2.56522 23.2602 7.23703 23.2602 13ZM13.1993 10.2686C12.1844 10.6908 10.1559 11.5645 7.11399 12.8899C6.62003 13.0863 6.36126 13.2785 6.33771 13.4664C6.2979 13.7839 6.69557 13.909 7.2371 14.0793C7.31076 14.1024 7.38709 14.1264 7.46533 14.1518C7.99812 14.325 8.7148 14.5276 9.08738 14.5357C9.42534 14.543 9.80254 14.4037 10.219 14.1177C13.0612 12.1991 14.5283 11.2294 14.6204 11.2085C14.6854 11.1938 14.7755 11.1752 14.8365 11.2294C14.8975 11.2837 14.8915 11.3864 14.885 11.4139C14.8456 11.5819 13.2846 13.0331 12.4768 13.7842C12.225 14.0183 12.0463 14.1844 12.0098 14.2223C11.928 14.3073 11.8446 14.3876 11.7645 14.4649C11.2695 14.942 10.8984 15.2999 11.7851 15.8842C12.2112 16.165 12.5521 16.3972 12.8923 16.6288C13.2638 16.8818 13.6343 17.1342 14.1137 17.4484C14.2359 17.5285 14.3525 17.6117 14.4662 17.6927C14.8985 18.0009 15.2869 18.2778 15.7668 18.2336C16.0456 18.208 16.3336 17.9458 16.4799 17.1638C16.8256 15.3158 17.5051 11.3117 17.6621 9.66173C17.6759 9.51717 17.6585 9.33216 17.6447 9.25094C17.6308 9.16973 17.6017 9.05402 17.4961 8.96836C17.3711 8.86691 17.1781 8.84552 17.0918 8.84704C16.6993 8.85395 16.0972 9.06333 13.1993 10.2686Z"
                fill="#2860E6" />
            </svg></a>
          <a href="<?=get_site_url()?>/">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
              <path
                d="M12.999 3.91164C7.84413 3.91164 3.64894 7.95232 3.64713 12.9182C3.64591 14.5062 4.07731 16.0561 4.89526 17.4212L3.56836 22.0884L8.52636 20.836C9.9055 21.5574 11.439 21.9337 12.9954 21.9326H12.999C18.154 21.9326 22.3491 17.8913 22.351 12.9255C22.3522 10.5201 21.3803 8.25587 19.6142 6.55393C17.8486 4.85137 15.5008 3.91224 12.999 3.91164ZM12.999 20.4112H12.996C11.6013 20.4112 10.2332 20.0501 9.03955 19.3679L8.75478 19.2055L5.81379 19.9483L6.59902 17.1855L6.41423 16.9025C5.63802 15.7187 5.22482 14.3338 5.22547 12.9182C5.22729 8.79027 8.71479 5.43303 13.0021 5.43303C15.0779 5.43363 17.0294 6.21341 18.4975 7.62817C19.9656 9.04292 20.7732 10.9242 20.772 12.9249C20.7702 17.0528 17.2833 20.4112 12.9984 20.4112H12.999ZM17.2627 14.8037C17.0288 14.6916 15.8801 14.1469 15.6656 14.0712C15.4517 13.9967 15.296 13.9579 15.1403 14.1833C14.9852 14.4087 14.5368 14.9158 14.4011 15.0655C14.2641 15.2157 14.1278 15.2339 13.8939 15.1218C13.6601 15.0091 12.907 14.7716 12.0151 14.0046C11.3201 13.4084 10.8512 12.6716 10.7148 12.4456C10.5785 12.2208 10.7003 12.099 10.8172 11.9869C10.9221 11.887 11.0511 11.7246 11.1674 11.5931C11.2838 11.4616 11.3225 11.3677 11.4013 11.2175C11.4789 11.0678 11.4401 10.9357 11.3813 10.8236C11.3225 10.7103 10.856 9.60277 10.6603 9.15259C10.4713 8.71392 10.2786 8.7727 10.135 8.76543C9.99868 8.75937 9.84357 8.75755 9.68664 8.75755C9.53214 8.75755 9.27827 8.8139 9.06379 9.03929C8.84991 9.26468 8.24583 9.80877 8.24583 10.9163C8.24583 12.0245 9.08318 13.0945 9.20011 13.2448C9.31705 13.3944 10.8481 15.6683 13.1923 16.6438C13.7497 16.8747 14.1848 17.0134 14.5247 17.1176C15.0845 17.2891 15.5941 17.2643 15.9964 17.2067C16.4447 17.1419 17.379 16.6626 17.5729 16.1373C17.768 15.612 17.768 15.1612 17.7098 15.0673C17.6529 14.9734 17.4966 14.917 17.2627 14.8037V14.8037Z"
                fill="#2860E6" />
            </svg>
          </a>
          <a href="<?=get_site_url()?>/">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
              <path
                d="M21.3912 8.74269C21.4039 8.92667 21.4039 9.11065 21.4039 9.29633C21.4039 14.954 17.0969 21.4789 9.22133 21.4789V21.4755C6.89486 21.4789 4.61671 20.8125 2.6582 19.556C2.99649 19.5967 3.33647 19.6171 3.67731 19.6179C5.60529 19.6196 7.47817 18.9727 8.99495 17.7815C7.16277 17.7467 5.55612 16.5521 4.99485 14.8081C5.63666 14.9319 6.29798 14.9065 6.92792 14.7344C4.93041 14.3308 3.49332 12.5758 3.49332 10.5376C3.49332 10.5189 3.49332 10.5011 3.49332 10.4833C4.08851 10.8148 4.75491 10.9988 5.43657 11.0191C3.55522 9.76179 2.9753 7.25897 4.1114 5.30215C6.28526 7.97709 9.49264 9.60324 12.9357 9.77535C12.5906 8.28824 13.062 6.72992 14.1744 5.68453C15.8989 4.06346 18.6111 4.14655 20.2322 5.87021C21.1911 5.68114 22.1102 5.32929 22.9512 4.83076C22.6316 5.82188 21.9627 6.66378 21.069 7.19877C21.9177 7.09873 22.7469 6.87151 23.5278 6.52474C22.9529 7.38614 22.2289 8.13648 21.3912 8.74269Z"
                fill="#2860E6" />
            </svg>
          </a>
          <a href="<?=get_site_url()?>/"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
              <path
                d="M23.6625 13.0633C23.6625 7.26504 18.9912 2.56522 13.2278 2.56522C7.46427 2.56522 2.79297 7.26504 2.79297 13.0633C2.79297 18.3043 6.60793 22.6473 11.5971 23.4348V16.0984H8.9481V13.0626H11.5971V10.7503C11.5971 8.1193 13.1547 6.66539 15.5387 6.66539C16.6796 6.66539 17.8747 6.87061 17.8747 6.87061V9.45426H16.5578C15.2618 9.45426 14.8584 10.264 14.8584 11.0946V13.0633H17.7523L17.2897 16.0977H14.8584V23.4348C19.8476 22.6473 23.6625 18.3043 23.6625 13.0633Z"
                fill="#2860E6" />
            </svg></a>
          <a href="<?=get_site_url()?>/">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M13.3601 3.60869C10.8094 3.60869 10.4901 3.61933 9.48833 3.66504C8.48847 3.71074 7.80541 3.86977 7.20812 4.10204C6.58204 4.33745 6.01418 4.70684 5.54461 5.18518C5.06705 5.6542 4.69743 6.22166 4.46148 6.84806C4.23045 7.44535 4.0708 8.12904 4.0251 9.1289C3.98002 10.13 3.96875 10.4487 3.96875 13C3.96875 15.5513 3.97939 15.87 4.0251 16.8717C4.0708 17.8716 4.22983 18.5546 4.46211 19.1519C4.69752 19.778 5.06691 20.3459 5.54524 20.8154C6.01427 21.293 6.58173 21.6626 7.20812 21.8986C7.80541 22.1302 8.48847 22.2892 9.48833 22.3349C10.4901 22.3807 10.8094 22.3913 13.3601 22.3913C15.9107 22.3913 16.23 22.3807 17.2318 22.3349C18.2316 22.2892 18.9147 22.1302 19.512 21.8979C20.1381 21.6625 20.7059 21.2931 21.1755 20.8148C21.6531 20.3458 22.0227 19.7783 22.2586 19.1519C22.4903 18.5546 22.6493 17.8716 22.695 16.8717C22.7407 15.87 22.7514 15.5507 22.7514 13C22.7514 10.4493 22.7407 10.13 22.695 9.12827C22.6493 8.12841 22.4903 7.44535 22.258 6.84806C22.0222 6.22139 21.6526 5.65369 21.1749 5.18455C20.7058 4.70698 20.1384 4.33736 19.512 4.10142C18.9147 3.87039 18.231 3.71074 17.2312 3.66504C16.23 3.61996 15.9114 3.60869 13.3601 3.60869ZM13.3601 5.301C15.8675 5.301 16.1649 5.31039 17.1554 5.35547C18.0707 5.39742 18.5678 5.54956 18.899 5.67916C19.3373 5.84883 19.6504 6.05293 19.979 6.381C20.3077 6.7097 20.5112 7.02274 20.6809 7.461C20.8099 7.7922 20.9626 8.28931 21.0046 9.20465C21.0497 10.1951 21.059 10.4925 21.059 13C21.059 15.5075 21.0497 15.8049 21.0046 16.7953C20.9626 17.7107 20.8105 18.2078 20.6809 18.539C20.5306 18.9469 20.2908 19.316 19.979 19.619C19.6761 19.9308 19.307 20.1706 18.899 20.3208C18.5678 20.4498 18.0707 20.6026 17.1554 20.6445C16.1649 20.6896 15.8682 20.699 13.3601 20.699C10.8519 20.699 10.5552 20.6896 9.56471 20.6445C8.64938 20.6026 8.15226 20.4504 7.82106 20.3208C7.41314 20.1705 7.04409 19.9307 6.74106 19.619C6.42938 19.3159 6.18956 18.9469 6.03922 18.539C5.91025 18.2078 5.75748 17.7107 5.71553 16.7953C5.67045 15.8049 5.66106 15.5075 5.66106 13C5.66106 10.4925 5.67045 10.1951 5.71553 9.20465C5.75748 8.28931 5.90962 7.7922 6.03922 7.461C6.20889 7.02274 6.41299 6.7097 6.74106 6.381C7.04405 6.06924 7.41311 5.8294 7.82106 5.67916C8.15226 5.55018 8.64938 5.39742 9.56471 5.35547C10.5552 5.31039 10.8526 5.301 13.3601 5.301Z"
                fill="#2860E6" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M13.3603 16.1336C12.9488 16.1336 12.5413 16.0525 12.1612 15.895C11.781 15.7376 11.4355 15.5067 11.1446 15.2158C10.8536 14.9248 10.6228 14.5793 10.4653 14.1992C10.3078 13.819 10.2268 13.4115 10.2268 13C10.2268 12.5885 10.3078 12.181 10.4653 11.8008C10.6228 11.4206 10.8536 11.0752 11.1446 10.7842C11.4355 10.4933 11.781 10.2624 12.1612 10.105C12.5413 9.94748 12.9488 9.86643 13.3603 9.86643C14.1914 9.86643 14.9884 10.1966 15.5761 10.7842C16.1638 11.3719 16.4939 12.1689 16.4939 13C16.4939 13.8311 16.1638 14.6281 15.5761 15.2158C14.9884 15.8034 14.1914 16.1336 13.3603 16.1336ZM13.3603 8.17286C12.0801 8.17286 10.8523 8.68143 9.94704 9.5867C9.04177 10.492 8.5332 11.7198 8.5332 13C8.5332 14.2802 9.04177 15.508 9.94704 16.4133C10.8523 17.3186 12.0801 17.8271 13.3603 17.8271C14.6406 17.8271 15.8684 17.3186 16.7736 16.4133C17.6789 15.508 18.1875 14.2802 18.1875 13C18.1875 11.7198 17.6789 10.492 16.7736 9.5867C15.8684 8.68143 14.6406 8.17286 13.3603 8.17286ZM19.5918 8.08521C19.5918 8.38784 19.4716 8.67806 19.2576 8.89205C19.0436 9.10604 18.7534 9.22625 18.4507 9.22625C18.1481 9.22625 17.8579 9.10604 17.6439 8.89205C17.4299 8.67806 17.3097 8.38784 17.3097 8.08521C17.3097 7.78259 17.4299 7.49236 17.6439 7.27837C17.8579 7.06439 18.1481 6.94417 18.4507 6.94417C18.7534 6.94417 19.0436 7.06439 19.2576 7.27837C19.4716 7.49236 19.5918 7.78259 19.5918 8.08521Z"
                fill="#2860E6" />
            </svg>
          </a>
        </div>
      </div>
      <div
        class="mt-[17px] rounded-lg dark:border-none dark:bg-dark-10 border border-gray-100 py-3 px-[17px] flex items-center">
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
        <div class="flex items-center justify-center mr-auto">
          <input type="checkbox" id="toggleSwitch2" class="hidden mode-toggler" />
          <label for="toggleSwitch2" class="cursor-pointer">
            <div class="w-[36px] h-5 bg-gray-400 rounded-full flex items-center pr-1">
              <div class="dot2 w-4 h-4 bg-white rounded-full translate-x-[-14px] transform transition bg-white-100">
              </div>
            </div>
          </label>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="drawer-back-drop" class="fixed top-0 right-0 w-full h-screen z-40 hidden bg-drawerBackdrop"></div>
<!-- Drawer End -->