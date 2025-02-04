<!-- Comment Modal Desktop Start -->
<div class="comment-modal hidden items-center justify-center fixed top-0 left-0 w-full h-full z-[1000000]">
      <div class="flex items-center justify-center h-full">
        <div class="bg-white-100 dark:bg-dark-83 rounded-[18px] content-comment-modal w-[549px] h-[545px] px-[30px] py-[25px]">
          <div class="flex justify-between">
            <p class="text-[20px] dark:text-white-10 leading-[24px] font-semibold">
              ارسال نظر
            </p>
            <button class="close-comment-modal">
              <svg
                class="block dark:hidden"
                class="btn"
                width="23"
                height="23"
                viewBox="0 0 23 23"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M2.334 11.5c0-4.321 0-6.482 1.342-7.824C5.02 2.333 7.18 2.333 11.501 2.333s6.482 0 7.824 1.343 1.342 3.503 1.342 7.824 0 6.482-1.342 7.824c-1.342 1.343-3.503 1.343-7.824 1.343-4.322 0-6.482 0-7.825-1.343S2.334 15.821 2.334 11.5Z"
                  stroke="#484848"
                  stroke-width="1.375"
                />
                <path
                  d="M13.792 9.208 9.21 13.792m0-4.584 4.583 4.584"
                  stroke="#484848"
                  stroke-width="1.375"
                  stroke-linecap="round"
                />
              </svg>
              <svg
                class="hidden dark:block"
                width="23"
                height="23"
                viewBox="0 0 23 23"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M2.334 11.5c0-4.321 0-6.482 1.342-7.824C5.02 2.333 7.18 2.333 11.501 2.333s6.482 0 7.824 1.343 1.342 3.503 1.342 7.824 0 6.482-1.342 7.824c-1.342 1.343-3.503 1.343-7.824 1.343-4.322 0-6.482 0-7.825-1.343S2.334 15.821 2.334 11.5Z"
                  stroke="#ECECEC"
                  stroke-width="1.375"
                />
                <path
                  d="M13.792 9.208 9.21 13.792m0-4.584 4.583 4.584"
                  stroke="#ECECEC"
                  stroke-width="1.375"
                  stroke-linecap="round"
                />
              </svg>
            </button>
          </div>
          <div class="mt-[28px]">
            <lable
              class="text-[14px] font-medium leading-[16px] dark:text-dark-28"
              >شماره تماس</lable
            >
            <div
              class="flex border rounded-[8px] border-white-70 dark:border-dark-84 py-[18px] px-[16px] mt-[7px]"
            >
              <svg
                class="block dark:hidden"
                width="25"
                height="24"
                viewBox="0 0 25 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M4.5 10c0-3.771 0-5.657 1.172-6.828S8.729 2 12.5 2s5.657 0 6.828 1.172S20.5 6.229 20.5 10v4c0 3.771 0 5.657-1.172 6.828S16.271 22 12.5 22s-5.657 0-6.828-1.172S4.5 17.771 4.5 14z"
                  stroke="#232323"
                  stroke-width="1.5"
                />
                <path
                  opacity=".5"
                  d="M15.5 19h-6"
                  stroke="#232323"
                  stroke-width="1.5"
                  stroke-linecap="round"
                />
              </svg>
              <svg
                class="hidden dark:block"
                width="25"
                height="24"
                viewBox="0 0 25 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M4.5 10c0-3.771 0-5.657 1.172-6.828S8.729 2 12.5 2s5.657 0 6.828 1.172S20.5 6.229 20.5 10v4c0 3.771 0 5.657-1.172 6.828S16.271 22 12.5 22s-5.657 0-6.828-1.172S4.5 17.771 4.5 14z"
                  stroke="#E4E4E4"
                  stroke-width="1.5"
                />
                <path
                  opacity=".5"
                  d="M15.5 19h-6"
                  stroke="#E4E4E4"
                  stroke-width="1.5"
                  stroke-linecap="round"
                />
              </svg>
              <input
                class="placeholder:text-dark-65 bg-transparent placeholder:text-[16px] placeholder:dark:text-dark-13 placeholder:font-medium mr-2 focus:outline-none w-full"
                placeholder="شماره تماس خود را وارد نمایید..."
              />
            </div>
          </div>
          <div class="flex flex-col mt-[16px]">
            <label
              class="text-[14px] font-medium leading-[16px] dark:text-dark-28"
              >پیام</label
            >
            <textarea
              class="border py-[13px] px-[16px] mt-[7px] rounded-[8px] bg-transparent h-[222px] border-white-70 dark:border-dark-84 placeholder:text-dark-65 placeholder:text-[16px] placeholder:dark:text-dark-13 placeholder:font-medium focus:outline-none"
              placeholder="متن دیدگاه"
            ></textarea>
          </div>
          <button
            class="bg-blue-500 dark:bg-dark-85 text-white-100 text-[17px] py-[19px] mt-[28px] rounded-[8px] leading-[20px] font-bold w-full"
          >
            ارسال پیام
          </button>
        </div>
      </div>
    </div>
    <!-- Comment Modal Desktop End -->

    <!-- Comment Modal Mobile Start -->
    <div
      id="modal-backdrop"
      class="comment-modal hidden fixed top-0 left-0 w-full h-full z-[1000000]"
    ></div>
    <div
      id="modal-mobile-container"
      class="fixed bottom-0 left-0 bg-white-100 translate-y-[100%] dark:bg-dark-83 rounded-[18px] content-comment-modal w-full px-[30px] py-[25px] z-[1000001]"
    >
      <div class="flex justify-between">
        <p class="text-[17px] dark:text-white-10 leading-[21px] font-semibold">
          ارسال نظر
        </p>
        <button class="close-comment-modal">
          <svg
            class="block dark:hidden"
            class="btn"
            width="23"
            height="23"
            viewBox="0 0 23 23"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M2.334 11.5c0-4.321 0-6.482 1.342-7.824C5.02 2.333 7.18 2.333 11.501 2.333s6.482 0 7.824 1.343 1.342 3.503 1.342 7.824 0 6.482-1.342 7.824c-1.342 1.343-3.503 1.343-7.824 1.343-4.322 0-6.482 0-7.825-1.343S2.334 15.821 2.334 11.5Z"
              stroke="#484848"
              stroke-width="1.375"
            />
            <path
              d="M13.792 9.208 9.21 13.792m0-4.584 4.583 4.584"
              stroke="#484848"
              stroke-width="1.375"
              stroke-linecap="round"
            />
          </svg>
          <svg
            class="hidden dark:block"
            width="23"
            height="23"
            viewBox="0 0 23 23"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M2.334 11.5c0-4.321 0-6.482 1.342-7.824C5.02 2.333 7.18 2.333 11.501 2.333s6.482 0 7.824 1.343 1.342 3.503 1.342 7.824 0 6.482-1.342 7.824c-1.342 1.343-3.503 1.343-7.824 1.343-4.322 0-6.482 0-7.825-1.343S2.334 15.821 2.334 11.5Z"
              stroke="#ECECEC"
              stroke-width="1.375"
            />
            <path
              d="M13.792 9.208 9.21 13.792m0-4.584 4.583 4.584"
              stroke="#ECECEC"
              stroke-width="1.375"
              stroke-linecap="round"
            />
          </svg>
        </button>
      </div>
      <div class="mt-[28px]">
        <lable class="text-[14px] font-medium leading-[16px] dark:text-dark-28"
          >شماره تماس</lable
        >
        <div
          class="flex border rounded-[8px] border-white-70 dark:border-dark-84 py-[18px] px-[16px] mt-[7px]"
        >
          <svg
            class="block dark:hidden"
            width="25"
            height="24"
            viewBox="0 0 25 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M4.5 10c0-3.771 0-5.657 1.172-6.828S8.729 2 12.5 2s5.657 0 6.828 1.172S20.5 6.229 20.5 10v4c0 3.771 0 5.657-1.172 6.828S16.271 22 12.5 22s-5.657 0-6.828-1.172S4.5 17.771 4.5 14z"
              stroke="#232323"
              stroke-width="1.5"
            />
            <path
              opacity=".5"
              d="M15.5 19h-6"
              stroke="#232323"
              stroke-width="1.5"
              stroke-linecap="round"
            />
          </svg>
          <svg
            class="hidden dark:block"
            width="25"
            height="24"
            viewBox="0 0 25 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M4.5 10c0-3.771 0-5.657 1.172-6.828S8.729 2 12.5 2s5.657 0 6.828 1.172S20.5 6.229 20.5 10v4c0 3.771 0 5.657-1.172 6.828S16.271 22 12.5 22s-5.657 0-6.828-1.172S4.5 17.771 4.5 14z"
              stroke="#E4E4E4"
              stroke-width="1.5"
            />
            <path
              opacity=".5"
              d="M15.5 19h-6"
              stroke="#E4E4E4"
              stroke-width="1.5"
              stroke-linecap="round"
            />
          </svg>
          <input
            class="placeholder:text-dark-65 bg-transparent placeholder:text-[16px] placeholder:dark:text-dark-13 placeholder:font-medium mr-2 focus:outline-none w-full"
            placeholder="شماره تماس خود را وارد نمایید..."
          />
        </div>
      </div>
      <div class="flex flex-col mt-[23px]">
        <label class="text-[14px] font-medium leading-[16px] dark:text-dark-28"
          >پیام</label
        >
        <textarea
          class="border py-[13px] px-[16px] mt-[7px] rounded-[8px] bg-transparent h-[222px] border-white-70 dark:border-dark-84 placeholder:text-dark-65 placeholder:text-[16px] placeholder:dark:text-dark-13 placeholder:font-medium focus:outline-none"
          placeholder="متن دیدگاه"
        ></textarea>
      </div>
      <button class="bg-blue-500 dark:bg-dark-85 text-white-100 text-[17px] py-[19px] mt-[28px] rounded-[8px] leading-[20px] font-bold w-full">
        ارسال پیام
      </button>
    </div>
    <!-- Comment Modal Mobile End -->