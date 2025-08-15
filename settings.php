<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800"
    />

    <title>Settings - Manchitra</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f4f1f0] px-10 py-3">
          <div class="flex items-center gap-4 text-[#181311]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M24 18.4228L42 11.475V34.3663C42 34.7796 41.7457 35.1504 41.3601 35.2992L24 42V18.4228Z"
                  fill="currentColor"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M24 8.18819L33.4123 11.574L24 15.2071L14.5877 11.574L24 8.18819ZM9 15.8487L21 20.4805V37.6263L9 32.9945V15.8487ZM27 37.6263V20.4805L39 15.8487V32.9945L27 37.6263ZM25.354 2.29885C24.4788 1.98402 23.5212 1.98402 22.646 2.29885L4.98454 8.65208C3.7939 9.08038 3 10.2097 3 11.475V34.3663C3 36.0196 4.01719 37.5026 5.55962 38.098L22.9197 44.7987C23.6149 45.0671 24.3851 45.0671 25.0803 44.7987L42.4404 38.098C43.9828 37.5026 45 36.0196 45 34.3663V11.475C45 10.2097 44.2061 9.08038 43.0155 8.65208L25.354 2.29885Z"
                  fill="currentColor"
                ></path>
              </svg>
            </div>
            <h2 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em]">Manchitra</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <button
              class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-[#f4f1f0] text-[#181311] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5"
            >
              <div class="text-[#181311]" data-icon="Gear" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm88-29.84q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.21,107.21,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3-3L186,40.54a8,8,0,0,0-3.94-6,107.71,107.71,0,0,0-26.25-10.87,8,8,0,0,0-7.06,1.49L130.16,40Q128,40,125.84,40L107.2,25.11a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.51a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.49-3,3L40.54,70a8,8,0,0,0-6,3.94,107.71,107.71,0,0,0-10.87,26.25,8,8,0,0,0,1.49,7.06L40,125.84Q40,128,40,130.16L25.11,148.8a8,8,0,0,0-1.48,7.06,107.21,107.21,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.49,1.56,3,3L70,215.46a8,8,0,0,0,3.94,6,107.71,107.71,0,0,0,26.25,10.87,8,8,0,0,0,7.06-1.49L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.21,107.21,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6l2.64-23.72q1.56-1.48,3-3L215.46,186a8,8,0,0,0,6-3.94,107.71,107.71,0,0,0,10.87-26.25,8,8,0,0,0-1.49-7.06Zm-16.1-6.5a73.93,73.93,0,0,1,0,8.68,8,8,0,0,0,1.74,5.48l14.19,17.73a91.57,91.57,0,0,1-6.23,15L187,173.11a8,8,0,0,0-5.1,2.64,74.11,74.11,0,0,1-6.14,6.14,8,8,0,0,0-2.64,5.1l-2.51,22.58a91.32,91.32,0,0,1-15,6.23l-17.74-14.19a8,8,0,0,0-5-1.75h-.48a73.93,73.93,0,0,1-8.68,0,8,8,0,0,0-5.48,1.74L100.45,215.8a91.57,91.57,0,0,1-15-6.23L82.89,187a8,8,0,0,0-2.64-5.1,74.11,74.11,0,0,1-6.14-6.14,8,8,0,0,0-5.1-2.64L46.43,170.6a91.32,91.32,0,0,1-6.23-15l14.19-17.74a8,8,0,0,0,1.74-5.48,73.93,73.93,0,0,1,0-8.68,8,8,0,0,0-1.74-5.48L40.2,100.45a91.57,91.57,0,0,1,6.23-15L69,82.89a8,8,0,0,0,5.1-2.64,74.11,74.11,0,0,1,6.14-6.14A8,8,0,0,0,82.89,69L85.4,46.43a91.32,91.32,0,0,1,15-6.23l17.74,14.19a8,8,0,0,0,5.48,1.74,73.93,73.93,0,0,1,8.68,0,8,8,0,0,0,5.48-1.74L155.55,40.2a91.57,91.57,0,0,1,15,6.23L173.11,69a8,8,0,0,0,2.64,5.1,74.11,74.11,0,0,1,6.14,6.14,8,8,0,0,0,5.1,2.64l22.58,2.51a91.32,91.32,0,0,1,6.23,15l-14.19,17.74A8,8,0,0,0,199.87,123.66Z"
                  ></path>
                </svg>
              </div>
            </button>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCJDH7EQ0darki6JfLdwxJOAwL93o-aB9sReUnrMfrjkmypK_Z4EMrDVnyVsc86mrwx8mTzRCfhVkPs4DfyB4TQmFm-qPlK8g-RpvJl85KKB9uhefOZBJ_WyNFYbv0nfAIAEzxYI2vkp-ykSn6TSDreCU3c6gVJM0vai6u9Y6DM0r49wVrvIK00OYayHysaU3hEaetky90g5iJQaRsESiH_X99tPbzjweyalINqQLrXQGKPYv5vHFvVFH41_ilt5sEObBFgm4mCPBfq");'
            ></div>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight min-w-72">Settings</p></div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Language</h3>
            <div class="flex flex-wrap gap-3 p-4">
              <label
                class="text-sm font-medium leading-normal flex items-center justify-center rounded-lg border border-[#e5dedc] px-4 h-11 text-[#181311] has-[:checked]:border-[3px] has-[:checked]:px-3.5 has-[:checked]:border-[#ea572a] relative cursor-pointer"
              >
                English
                <input type="radio" class="invisible absolute" name="0baeb817-b6ac-4a66-9b82-073d33439038" />
              </label>
              <label
                class="text-sm font-medium leading-normal flex items-center justify-center rounded-lg border border-[#e5dedc] px-4 h-11 text-[#181311] has-[:checked]:border-[3px] has-[:checked]:px-3.5 has-[:checked]:border-[#ea572a] relative cursor-pointer"
              >
                Hindi
                <input type="radio" class="invisible absolute" name="0baeb817-b6ac-4a66-9b82-073d33439038" />
              </label>
              <label
                class="text-sm font-medium leading-normal flex items-center justify-center rounded-lg border border-[#e5dedc] px-4 h-11 text-[#181311] has-[:checked]:border-[3px] has-[:checked]:px-3.5 has-[:checked]:border-[#ea572a] relative cursor-pointer"
              >
                Bengali
                <input type="radio" class="invisible absolute" name="0baeb817-b6ac-4a66-9b82-073d33439038" />
              </label>
            </div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Notifications</h3>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex flex-col justify-center">
                <p class="text-[#181311] text-base font-medium leading-normal line-clamp-1">Event Updates</p>
                <p class="text-[#886b63] text-sm font-normal leading-normal line-clamp-2">Receive updates about new events and recommendations.</p>
              </div>
              <div class="shrink-0">
                <label
                  class="relative flex h-[31px] w-[51px] cursor-pointer items-center rounded-full border-none bg-[#f4f1f0] p-0.5 has-[:checked]:justify-end has-[:checked]:bg-[#ea572a]"
                >
                  <div class="h-full w-[27px] rounded-full bg-white" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 8px, rgba(0, 0, 0, 0.06) 0px 3px 1px;"></div>
                  <input type="checkbox" class="invisible absolute" />
                </label>
              </div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex flex-col justify-center">
                <p class="text-[#181311] text-base font-medium leading-normal line-clamp-1">Schedule Changes</p>
                <p class="text-[#886b63] text-sm font-normal leading-normal line-clamp-2">Get notified about changes to event schedules or locations.</p>
              </div>
              <div class="shrink-0">
                <label
                  class="relative flex h-[31px] w-[51px] cursor-pointer items-center rounded-full border-none bg-[#f4f1f0] p-0.5 has-[:checked]:justify-end has-[:checked]:bg-[#ea572a]"
                >
                  <div class="h-full w-[27px] rounded-full bg-white" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 8px, rgba(0, 0, 0, 0.06) 0px 3px 1px;"></div>
                  <input type="checkbox" class="invisible absolute" />
                </label>
              </div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex flex-col justify-center">
                <p class="text-[#181311] text-base font-medium leading-normal line-clamp-1">Promotions</p>
                <p class="text-[#886b63] text-sm font-normal leading-normal line-clamp-2">Receive alerts for special offers and promotions.</p>
              </div>
              <div class="shrink-0">
                <label
                  class="relative flex h-[31px] w-[51px] cursor-pointer items-center rounded-full border-none bg-[#f4f1f0] p-0.5 has-[:checked]:justify-end has-[:checked]:bg-[#ea572a]"
                >
                  <div class="h-full w-[27px] rounded-full bg-white" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 8px, rgba(0, 0, 0, 0.06) 0px 3px 1px;"></div>
                  <input type="checkbox" class="invisible absolute" />
                </label>
              </div>
            </div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Appearance</h3>
            <div class="flex items-center gap-4 bg-white px-4 min-h-14 justify-between">
              <p class="text-[#181311] text-base font-normal leading-normal flex-1 truncate">Dark Mode</p>
              <div class="shrink-0">
                <label
                  class="relative flex h-[31px] w-[51px] cursor-pointer items-center rounded-full border-none bg-[#f4f1f0] p-0.5 has-[:checked]:justify-end has-[:checked]:bg-[#ea572a]"
                >
                  <div class="h-full w-[27px] rounded-full bg-white" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 8px, rgba(0, 0, 0, 0.06) 0px 3px 1px;"></div>
                  <input type="checkbox" class="invisible absolute" />
                </label>
              </div>
            </div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Account</h3>
            <div class="flex items-center gap-4 bg-white px-4 min-h-14 justify-between">
              <p class="text-[#181311] text-base font-normal leading-normal flex-1 truncate">Manage Account</p>
              <div class="shrink-0">
                <div class="text-[#181311] flex size-7 items-center justify-center" data-icon="CaretRight" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path>
                  </svg>
                </div>
              </div>
            </div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Support</h3>
            <div class="flex items-center gap-4 bg-white px-4 min-h-14 justify-between">
              <p class="text-[#181311] text-base font-normal leading-normal flex-1 truncate">Help &amp; FAQs</p>
              <div class="shrink-0">
                <div class="text-[#181311] flex size-7 items-center justify-center" data-icon="CaretRight" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path>
                  </svg>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-14 justify-between">
              <p class="text-[#181311] text-base font-normal leading-normal flex-1 truncate">Provide Feedback</p>
              <div class="shrink-0">
                <div class="text-[#181311] flex size-7 items-center justify-center" data-icon="CaretRight" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
