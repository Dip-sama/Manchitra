<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800"
    />

    <title>Dashboard - Manchitra</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="flex items-center justify-between px-8 py-4 bg-white shadow sticky top-0 z-50">
      <div class="flex items-center gap-3">
        <span class="text-xl font-bold text-[#ea572a]">Manchitra</span>
      </div>
      <div class="flex items-center gap-9">
        <a class="text-[#181311] text-sm font-medium leading-normal" href="home.php">Home</a>
        <a class="text-[#181311] text-sm font-medium leading-normal" href="events.php">Events</a>
        <a class="text-[#181311] text-sm font-medium leading-normal" href="map.php">Map</a>
        <a class="text-[#181311] text-sm font-medium leading-normal" href="features.php">Features</a>
        <a class="text-[#181311] text-sm font-medium leading-normal" href="about.php">About</a>
        <a class="text-[#181311] text-sm font-medium leading-normal" href="contact.php">Contact</a>
         <a class="text-[#181311] text-sm font-medium leading-normal" href="login.php">Login</a>
      <!--   <a class="text-[#181311] text-sm font-medium leading-normal" href="contact.php"></a> -->
      </div>
    </nav>
    <!-- Navbar End -->
    <!-- <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      --> <div class="layout-container flex h-full grow flex-col">
        <div class="gap-1 px-6 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col w-80">
            <div class="flex p-4 @container">
              <div class="flex w-full flex-col gap-4 items-center">
                <div class="flex gap-4 flex-col items-center">
                  <div class="relative">
                    <div
                      class="bg-center bg-no-repeat aspect-square bg-cover rounded-full min-h-32 w-32"
                      style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDJIirexH1nbnk1XAHANJQqT1y-iTnwjztXyD8Ih_9fDm0uhHSp8usamtqSt2uGTWkpwhp3i4JN6BmE6PBJhng8eKfRa-JwvYG2IdNlTWTD6ltRakD3gBdH3VQynhpvpjg-JcpBFlr2bFonNfn_X01cUagmmL3fFukNUr1lm0JWpkET5XJGawa2g_H5y-AtHn64OEDOKYY-s6sy5YoNIcO2E9SVcVbUqTJIZKO8a2aeTNFe426NDOmPWXNpOC09LSli9fUjSvSyOfl-");'
                    ></div>
                    <label for="profile-pic-upload" class="absolute bottom-2 right-2 bg-[#ea572a] text-white rounded-full p-2 cursor-pointer shadow-lg hover:bg-[#c94a1f] transition-colors" title="Change profile picture">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 5a7 7 0 1 1 0 14 7 7 0 0 1 0-14zm0-2C6.477 3 2 7.477 2 13s4.477 10 10 10 10-4.477 10-10S17.523 3 12 3zm1 14h-2v-2h2v2zm0-4h-2V7h2v6z"/>
                      </svg>
                      <input id="profile-pic-upload" type="file" accept="image/*" class="hidden" />
                    </label>
                  </div>
                  <div class="flex flex-col items-center justify-center">
                    <p class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] text-center">Priya Sharma</p>
                    <p class="text-[#886b63] text-base font-normal leading-normal text-center">User ID: 12345</p>
                  </div>
                </div>
              </div>
            </div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Recently Viewed</h3>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2">
              <div
                class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-14"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCnfT9LMd5vHSW_HLnAnAyunXxdqDTNj8sKGYA4x2Ox86g07bxB9VLvUFIw62McVwbqifxdrUPdA1ZB3KxJVzvBGXtCOrbbrRQ_ULRugFyY9xC4cNYgXiABPuBmdRIU8ruDNJ_f-vNxjl_TU9Jwx42ucRONxVrmMH8a71wxzemxu7rWAn4fA7HQTeL1d22dZZZJgRUQgOhQPgaUpS09HzAnXIa0218LYb5zqofubt8BT6on9sVQ0p9hxc4DaNiHQP97QvlRLgl7N_CO");'
              ></div>
              <div class="flex flex-col justify-center">
                <p class="text-[#181311] text-base font-medium leading-normal line-clamp-1">Mandap A</p>
                <p class="text-[#886b63] text-sm font-normal leading-normal line-clamp-2">123 Puja Lane</p>
              </div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2">
              <div
                class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-14"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAVt0Csv2l9AxgCbqhGQdcC-RaxVQzCN3VdPkvV7eNcI-DBVKvxHolDtdtiufIi7aiLCGNrxtzolorovmdejGk-0gkH9nJmZj8UAxIiPaegKqpb0SQW7jB0Pm1rYEpKfj_rEiQ-_3AZejM0f6c5UCGsH86sg4KJFF1fmimHZNGF14amV2fNhsOvOVQKBk7xAuN6o4U9hdugUAOQ8lWkpWCqwUEhR29vs8B5hJ0nuxWoXLfWuQF0ffHJx-r8s2crKRqV94jfAy5i7Y78");'
              ></div>
              <div class="flex flex-col justify-center">
                <p class="text-[#181311] text-base font-medium leading-normal line-clamp-1">Mandap B</p>
                <p class="text-[#886b63] text-sm font-normal leading-normal line-clamp-2">456 Festival Road</p>
              </div>
            </div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Saved Mandaps</h3>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2">
              <div
                class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-14"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD6kaP37RIU1SMTg_8moF9vNpPF2rdL--Iz9m9SVdPz2LiycGIQIhqCrBkxMUtl69-AhCaNWKxYrubYAQ56BVohRmEV_VNg698yapWIVUUvMTkAG9tDHwtzzOZBHzXa_a9hZA1gwEzXBANX6Z2azQ0n4CHY5xkgIQ0y56Xz1RaMykWoKNhNI9IKhhCe4CxXm1wvkdg9PTrpTVI5Ximk6jqegI6YgFIKEJj6lutibjwZQHzrEGZQdQWK_F3564NFHVjBdILBpnCSvq6X");'
              ></div>
              <div class="flex flex-col justify-center">
                <p class="text-[#181311] text-base font-medium leading-normal line-clamp-1">Mandap C</p>
                <p class="text-[#886b63] text-sm font-normal leading-normal line-clamp-2">789 Celebration Avenue</p>
              </div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2">
              <div
                class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-14"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBWSMHeY3CxKieqeUFaRR-n11BRDb8nBVJpUqDC0TM416f8Zmsq07Q6HxxIV2iHGMHxmqd97Uo4VWuyBRIFLtLBgIPaA5yOjDC5s0a3h_kZQgjOkd-smxaEgZTx9QlGLwg6KyudbTftLKYkYlkYSfaO3npBmay9N6onI_zUW9-LnuKVfMmZbWfe-fKLXPZcs9lHby3IuHfsge05vWKyHDQvysDfmO7sGtSuTsrxCkuWivykQBicuKo9oir8PbcJCSwcrXpXFW3159Ya");'
              ></div>
              <div class="flex flex-col justify-center">
                <p class="text-[#181311] text-base font-medium leading-normal line-clamp-1">Mandap D</p>
                <p class="text-[#886b63] text-sm font-normal leading-normal line-clamp-2">101 Festive Street</p>
              </div>
            </div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Settings</h3>
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
            <div class="flex items-center gap-4 bg-white px-4 min-h-14 justify-between">
              <p class="text-[#181311] text-base font-normal leading-normal flex-1 truncate">Language</p>
              <div class="shrink-0"><p class="text-[#181311] text-base font-normal leading-normal">English</p></div>
            </div>
          </div>
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="px-4 py-3">
              <label class="flex flex-col min-w-40 h-12 w-full">
                <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                  <div
                    class="text-[#886b63] flex border-none bg-[#f4f1f0] items-center justify-center pl-4 rounded-l-lg border-r-0"
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
                    placeholder="Search for Mandaps, Restaurants, Cafes..."
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f1f0] focus:border-none h-full placeholder:text-[#886b63] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value=""
                  />
                </div>
              </label>
            </div>
            <div class="@container flex flex-col h-full flex-1">
              <div class="flex flex-1 flex-col @[480px]:px-4 @[480px]:py-3">
                <div
                  class="bg-cover bg-center flex min-h-[320px] flex-1 flex-col justify-between px-4 pb-4 pt-5 @[480px]:rounded-lg @[480px]:px-8 @[480px]:pb-6 @[480px]:pt-8"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD6Th1AaWd8RkIkRNk0MnYqIHY6f3OFIa55lv6egpxNZHxfwYUfrLK4KeI_IQXOOh-DwyEL9PWJg6sztADmNZlzGjJ2pEMDxmGCOEBOzaNOH6AgpvIl0-IEjQu3_N_-7sUVGdmpHWbmT_-4XBb2bHVI5zk1Bkasnk0rZRUxLXSncVMEaYTUA9yVUsOdbZuIEC8vNT-c2R-UBv5yx7xCx3S7nZ6WjQ-cHeD93jKxiuUe8HDdkgEkZL-cVsDkKCS0UfOCORw8bWAiJmVK");'
                >
                  <label class="flex flex-col min-w-40 h-12">
                    <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                      <div
                        class="text-[#886b63] flex border-none bg-white items-center justify-center pl-4 rounded-l-lg border-r-0"
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
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border-none bg-white focus:border-none h-full placeholder:text-[#886b63] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                        value=""
                      />
                    </div>
                  </label>
                  <div class="flex flex-col items-end gap-3">
                    <div class="flex flex-col gap-0.5">
                      <button class="flex size-10 items-center justify-center rounded-t-lg bg-white shadow-[0_2px_4px_rgba(0,0,0,0.1)]">
                        <div class="text-[#181311]" data-icon="Plus" data-size="24px" data-weight="regular">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z"></path>
                          </svg>
                        </div>
                      </button>
                      <button class="flex size-10 items-center justify-center rounded-b-lg bg-white shadow-[0_2px_4px_rgba(0,0,0,0.1)]">
                        <div class="text-[#181311]" data-icon="Minus" data-size="24px" data-weight="regular">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128Z"></path>
                          </svg>
                        </div>
                      </button>
                    </div>
                    <button class="flex size-10 items-center justify-center rounded-lg bg-white shadow-[0_2px_4px_rgba(0,0,0,0.1)]">
                      <div class="text-[#181311]" data-icon="NavigationArrow" data-size="24px" data-weight="regular">
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
            <div class="p-4">
              <div class="flex items-stretch justify-between gap-4 rounded-lg">
                <div class="flex flex-[2_2_0px] flex-col gap-4">
                  <div class="flex flex-col gap-1">
                    <p class="text-[#181311] text-base font-bold leading-tight">Mandap A</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">123 Puja Lane</p>
                  </div>
                  <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 flex-row-reverse bg-[#f4f1f0] text-[#181311] text-sm font-medium leading-normal w-fit"
                  >
                    <span class="truncate">View Details</span>
                  </button>
                </div>
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBYQO2cZkor0rqA34-qY02esBc9tnzzqz7TwZMCDS8oVNcASrh6aeSmGlraIgU1WS5zvVoRBczB-XzcjbZPmZWzqkh34n-74nMhjrWOt2PmdTV9l-V1yqMjGc00Y4sdWVm5JIB214oaCznSmz9OhjXtiQqm1HEXCMzoFeMO3-XRmenVlkH7GQWyzhsax3MT9EXzPdQRsELA2vsK-tT09n7Ig5csWx1ySMrsRqLNoRdtNlcHsAP4Xbp8MHSZLfAhL_i8cS3HOYPs-HxH");'
                ></div>
              </div>
            </div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Festival Events</h3>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2">
              <div class="text-[#181311] flex items-center justify-center rounded-lg bg-[#f4f1f0] shrink-0 size-12" data-icon="Calendar" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"
                  ></path>
                </svg>
              </div>
              <div class="flex flex-col justify-center">
                <p class="text-[#181311] text-base font-medium leading-normal line-clamp-1">Cultural Performance</p>
                <p class="text-[#886b63] text-sm font-normal leading-normal line-clamp-2">7 PM - 9 PM</p>
              </div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2">
              <div class="text-[#181311] flex items-center justify-center rounded-lg bg-[#f4f1f0] shrink-0 size-12" data-icon="Calendar" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"
                  ></path>
                </svg>
              </div>
              <div class="flex flex-col justify-center">
                <p class="text-[#181311] text-base font-medium leading-normal line-clamp-1">Aarti</p>
                <p class="text-[#886b63] text-sm font-normal leading-normal line-clamp-2">8 PM - 10 PM</p>
              </div>
            </div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Quick Stats</h3>
            <div class="flex flex-wrap gap-4 p-4">
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#e5dedc]">
                <p class="text-[#181311] text-base font-medium leading-normal">Mandaps Visited</p>
                <p class="text-[#181311] tracking-light text-2xl font-bold leading-tight">5</p>
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#e5dedc]">
                <p class="text-[#181311] text-base font-medium leading-normal">Top Trending Mandaps</p>
                <p class="text-[#181311] tracking-light text-2xl font-bold leading-tight">Mandap A, Mandap B</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
