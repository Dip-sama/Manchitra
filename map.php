<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800"
    />

    <title>Manchitra Map</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div
      class="relative flex size-full min-h-screen flex-col bg-slate-50 justify-between group/design-root overflow-x-hidden"
      style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'
    >
      <div>
        <div class="flex items-center bg-slate-50 p-4 pb-2 justify-between">
          <h2 class="text-[#0d151c] text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center pl-12">Manchitra</h2>
          <div class="flex w-12 items-center justify-end">
            <button
              class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 bg-transparent text-[#0d151c] gap-2 text-base font-bold leading-normal tracking-[0.015em] min-w-0 p-0"
            >
              <div class="text-[#0d151c]" data-icon="List" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"
                  ></path>
                </svg>
              </div>
            </button>
          </div>
        </div>
        <div class="px-4 py-3">
          <label class="flex flex-col min-w-40 h-12 w-full">
            <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
              <div
                class="text-[#49779c] flex border-none bg-[#e7eef4] items-center justify-center pl-4 rounded-l-xl border-r-0"
                data-icon="MagnifyingGlass"
                data-size="24px"
                data-weight="regular"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                  <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                </svg>
              </div>
              <input
                placeholder="Search for mandaps, food, etc."
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d151c] focus:outline-0 focus:ring-0 border-none bg-[#e7eef4] focus:border-none h-full placeholder:text-[#49779c] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                value=""
              />
            </div>
          </label>
        </div>
        <div class="flex gap-3 p-3 overflow-x-hidden">
          <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e7eef4] pl-4 pr-4">
            <p class="text-[#0d151c] text-sm font-medium leading-normal">Mandaps</p>
          </div>
          <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e7eef4] pl-4 pr-4">
            <p class="text-[#0d151c] text-sm font-medium leading-normal">Food</p>
          </div>
          <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e7eef4] pl-4 pr-4">
            <p class="text-[#0d151c] text-sm font-medium leading-normal">Transport</p>
          </div>
          <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e7eef4] pl-4 pr-4">
            <p class="text-[#0d151c] text-sm font-medium leading-normal">Emergency</p>
          </div>
          <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e7eef4] pl-4 pr-4">
            <p class="text-[#0d151c] text-sm font-medium leading-normal">All</p>
          </div>
        </div>
        <div class="@container flex flex-col h-full flex-1">
          <div class="flex flex-1 flex-col @[480px]:px-4 @[480px]:py-3">
            <div
              class="bg-cover bg-center flex min-h-[320px] flex-1 flex-col justify-between px-4 pb-4 pt-5 @[480px]:rounded-xl @[480px]:px-8 @[480px]:pb-6 @[480px]:pt-8"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCdiwIW16kWjPUXWV-7G2Z1pw-9MtpWWgKsYNuIrMnAgosNCutSFFYEx9HJJF-RKzz7476TxGIhxGzMXKm3xrHEG0w3t6X1JwLbFsQqbvUZTcTcOUlNqVOfXAd0g5-gCiH_ljpG_arSPT_WWFW6gVcDzONgBld6wdofUY6yjAKDAIDsjo9N2hP3X5b_v8oh0BKojv-5hxWkAca39d0jIThUOkJzwjtSpr_ul1pEJDQAFCEWuXj-otK8MkCoIMdAAiw0UsYmT6c1RAK2");'
            >
              <label class="flex flex-col min-w-40 h-12">
                <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                  <div
                    class="text-[#49779c] flex border-none bg-slate-50 items-center justify-center pl-4 rounded-l-xl border-r-0"
                    data-icon="MagnifyingGlass"
                    data-size="24px"
                    data-weight="regular"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                      ></path>
                    </svg>
                  </div>
                  <input
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d151c] focus:outline-0 focus:ring-0 border-none bg-slate-50 focus:border-none h-full placeholder:text-[#49779c] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value=""
                  />
                </div>
              </label>
              <div class="flex flex-col items-end gap-3">
                <div class="flex flex-col gap-0.5">
                  <button class="flex size-10 items-center justify-center rounded-t-full bg-slate-50 shadow-[0_2px_4px_rgba(0,0,0,0.1)]">
                    <div class="text-[#0d151c]" data-icon="Plus" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z"></path>
                      </svg>
                    </div>
                  </button>
                  <button class="flex size-10 items-center justify-center rounded-b-full bg-slate-50 shadow-[0_2px_4px_rgba(0,0,0,0.1)]">
                    <div class="text-[#0d151c]" data-icon="Minus" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128Z"></path>
                      </svg>
                    </div>
                  </button>
                </div>
                <button class="flex size-10 items-center justify-center rounded-full bg-slate-50 shadow-[0_2px_4px_rgba(0,0,0,0.1)]">
                  <div class="text-[#0d151c]" data-icon="NavigationArrow" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256" transform="scale(-1, 1)">
                      <path
                        d="M229.33,98.21,53.41,33l-.16-.05A16,16,0,0,0,32.9,53.25a1,1,0,0,0,.05.16L98.21,229.33A15.77,15.77,0,0,0,113.28,240h.3a15.77,15.77,0,0,0,15-11.29l23.56-76.56,76.56-23.56a16,16,0,0,0,.62-30.38ZM224,113.3l-76.56,23.56a16,16,0,0,0-10.58,10.58L113.3,224h0l-.06-.17L48,48l175.82,65.22.16.06Z"
                      ></path>
                    </svg>
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="flex justify-end overflow-hidden px-5 pb-5">
          <button
            class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-14 bg-[#2094f3] text-slate-50 text-base font-bold leading-normal tracking-[0.015em] min-w-0 px-2 gap-4 pl-4 pr-6"
          >
            <div class="text-slate-50" data-icon="NavigationArrow" data-size="24px" data-weight="regular">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                <path
                  d="M229.33,98.21,53.41,33l-.16-.05A16,16,0,0,0,32.9,53.25a1,1,0,0,0,.05.16L98.21,229.33A15.77,15.77,0,0,0,113.28,240h.3a15.77,15.77,0,0,0,15-11.29l23.56-76.56,76.56-23.56a16,16,0,0,0,.62-30.38ZM224,113.3l-76.56,23.56a16,16,0,0,0-10.58,10.58L113.3,224h0l-.06-.17L48,48l175.82,65.22.16.06Z"
                ></path>
              </svg>
            </div>
          </button>
        </div>
      </div>
      <div><div class="h-5 bg-slate-50"></div></div>
    </div>
  </body>
</html>
