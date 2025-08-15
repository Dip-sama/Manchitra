<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800"
    />

    <title>Explore - Manchitra</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f4f1f0] px-10 py-3">
          <div class="flex items-center gap-8">
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
            <div class="flex items-center gap-9">
              <a class="text-[#181311] text-sm font-medium leading-normal" href="home.php">Home</a>
              <a class="text-[#181311] text-sm font-medium leading-normal" href="features.php">Features</a>
              <a class="text-[#181311] text-sm font-medium leading-normal" href="about.php">About</a>
              <a class="text-[#181311] text-sm font-medium leading-normal" href="events.php">Events</a>
              <a class="text-[#181311] text-sm font-medium leading-normal" href="insights.php">Insights</a>
            </div>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <label class="flex flex-col min-w-40 !h-10 max-w-64">
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
                  placeholder="Search"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f1f0] focus:border-none h-full placeholder:text-[#886b63] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                  value=""
                />
              </div>
            </label>
            <button
              class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-[#f4f1f0] text-[#181311] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5"
            >
              <div class="text-[#181311]" data-icon="Bell" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"
                  ></path>
                </svg>
              </div>
            </button>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuARorZ3mJ9_O8WPfuiihERHMMzU6wIj0QBcxegT-EhzGVfKSTO3tuAxQI08jMv__mlFk2ociHYMUwzJwmMjQuF54VFluk8MWsWlPFQoCSJUc3hYcr64dfQOPQSTo2zYQJu7sONDG1CXbSDUvdZBbmnH-IVHXG-9c0sCOAHeN7bGOO-guSdJGfSBo15wIhG2COB-ROXp6TF1RbwnR6-04z0oMKHN14uPU_OMheGKffFVhDP9TVtsGi7w9p52r4i2-vZmhe-EF2o3kbFK");'
            ></div>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
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
                    placeholder="Search for mandaps, routes, offers..."
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f1f0] focus:border-none h-full placeholder:text-[#886b63] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value=""
                  />
                </div>
              </label>
            </div>
            <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">New Mandaps to Explore</h2>
            <div class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
              <div class="flex items-stretch p-4 gap-3">
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAsx5zrJOaviuIYFJkde_t3DyG5YgQiRb6TuiIwNY9y7dOb2dDUOA_YuZi_8lskt0WNjohc1AQmhhlAnb_cv2EE4FQf0w3vUELqTAkAN3OB83BHYXeu2RCemjei8hyCU4az4t__KamiL-ZBkzCW5lOv4D2Y_HaOd6Wm42lGaRgekdCmDc_cm6NCZSZe0G7ibEuxgQyuEKgE1dgKGNE4lvGvK1ySvUrprbn6GvwI5CdJDdSInRxYqKCBzfn7CItGRqwmdNe9iBg37aq9");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">Mandap of Unity</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">A modern take on traditional art</p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC6igrtiiUZ8vO6n4oNGccHLwHpJiWJ-_xtYVB_Hov_DZmUKhTUkqkbI5m8kZGGZv7Nk6EFM1gjoRWdssa16RFSnsxKNrXEe31_EH6BwIbgIK8u_cXs8jqJ0PKbXQAARhX0rk1S0WKW72C5ccHVujGR2fZR9J-nvsY2k-WvaXugxBeppBR44ewSItHdlYy9D9-7s6j_YZPzLlO_G6HnvkDNzbzrDPNZfAN0qH3vq8LbzPL9mIY72dL7Plpvwp7LcpyM_pG3H6GDIYth");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">The Golden Pavilion</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">Experience the grandeur of gold</p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBvS2L1nzJw7blnPfQGxQ-2f_56GPFWkUUbjCRm75aY6IYulHWsvWRsNNRFUrqt75ijYb8bH-BN2P1pRHrB61pntEuyvSorg0eI3dIRg_X9SESNenrmZj3Tecv_Zj13MkQ_bV3qR7lvwbb-nH-TpZhPWGbHH26pcpCdjQ21l5WzpUVJDmRNtak2zVT_aq1fWjXUESY8K_aWv8r82mdsnumXefzmQk0ufUey9McKRwTikYViMjBBQrKxE19Ypqeb3M6LZwk3jOPP1G0r");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">The Heritage Enclave</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">A journey through time and culture</p>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Popular Mandap Routes</h2>
            <div class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
              <div class="flex items-stretch p-4 gap-3">
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBuhVoaKsrEI8ZWylC0Pp9PMNZJ-lzQiP_uv3Iyve9xz6nZ48xEzglffz24Bed3xS1tLc-bawVJzRz3CKYe84L_tiCGVkzmskj3EnwFrhSb54XeKF7NQMg09lT3F0MrFvneDEHoXrRUpkF0S8Pv5QPQuIBcLwkc9W4EZdRsRD18AoC1u26Reno_mcUVic_t65tInZLbvhjN4icCB766fnweUGiMIUbVHk8xPtSSo5OZemFzS7JVEKqmD8h0dqvtUkQlXdxfP3UDJEKo");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">The Classic Circuit</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">A tour of the most iconic mandaps</p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAg4BN0qiv8tBrdpYsALmSl9wx776o4DilVVTv6PGHjEPHK8dMywFYfEJxr0vEOxVm5Se2CShHoYjgUjSu92bsKaDnOW6rdsXDoDKerzj0WlRi_sSwTCEcyUiJaPBcvXVy_DTF2fjhq3wj037UIFjtAkjIt2ghqSEWgpHVn_-h4nyiE3W3o9E-PcQfDe7x8Z77QYPvYntOw_tpawHkQtkExFJ3xtazjum1zR35ri8Ca4eym9995koMXRy0UAz_LmHTIyjBTv_NL1Bi4");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">The Artistic Trail</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">Discover mandaps with unique art installations</p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBy-Kd06pPip5acco3RGIt72nzFsqwmTME2rccXGUGiS-x3Fr2C3BsF1lascH9xjkFosg8-E2GWwPdt9YSXHezmQCGzRdQ_ChCCfq9V3pl3VPZNbOl2QwiCD7vjKmUHbLsFNf_oIzuxa7UmLe4vuWgZ9sstQcq7sx_mo9YiHyHA8jr8f7nH-QKOl-Nha9VapPWIvGtijdMZYcn1L27OnSKc6qhw85cyVfYSGwLIE-t_uXZFhDmNgPgea-bvw-cCrlIYbFmrPOMa1dpG");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">The Heritage Walk</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">Explore mandaps with historical significance</p>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Special Offers &amp; Discounts</h2>
            <div class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
              <div class="flex items-stretch p-4 gap-3">
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDEn4-5HLVwMBa9gv1-CYI7eqYypvwGXT8v6PcfpysuPe1FAj13eEGtMdSdAwn0aRzFpYeQ7Z7cSp6kOXUK4w5qlFvTs-9s_GIwAIcaxJB1LvlqWnNl2RAVXV4W-bRGfanrewHeFdf0xIfgHFXxMYA3-LgNwPA4ghOhuMtsgiv9scOAKSAPNDjtTTLpcSEun1Eym6k-SZTwWHtzaJXTyt9U3QTW5QjP1jz0q0y7HFPvly1gIus4qW580_s_FikbR0RFhs9LPN-3zW49");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">Food Festival Discounts</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">Enjoy discounts at select food stalls</p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA9JDNWw9Tz_I1Mu6q7Xtv73xastyzMpAc4WCETl8kmoJvlYHyVo_PmKnQm4OhPVBtaRnJCA6t1i5N-43iVCnbA2RMrIT_TMgx-mPmNPn7Zuw9wCkMrHr_2ClTaw75_SZwdK7n5pyV0qJoTj7XGhx1doThsKhQ3Uz6fmHEaIqTmedy_a7cCu1AlRyBIWIL_RRxoOtsv7HEVXNfx25V4T6yn5x5LTl9PjcOgqiasavIfFaKXteSXelqWsDi2Wk1fEfRkQvgvWzcO6KAR");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">Shopping Spree Deals</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">Get exclusive deals at local shops</p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBVS_vAACPOqwd_eKeuENErOCXp4SuvXOV9s9oH4gF3XXgVMlo0xet5ZNROJCdNd7Y2NBpvq4HE1IJ7WaMDqkEzeezxw8h968bv5tQVi1TSxFsDWThD4yVNUiY2p63_e47wUfQKp6-rRfMEaaqPno_hXIrim8RA7Nqmay8jkGMjrgmM_6eVMEjYMgCbsFHt4jHbvYjNeAllEUuvQRtUmoa6bOYYZoUk5XMF2OdI1RnOlhBzq31qeKmKLaL-afxM5WIdGmD8JF1wqzXc");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">Cultural Event Passes</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">Access cultural events at discounted prices</p>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Cultural Insights</h2>
            <div class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
              <div class="flex items-stretch p-4 gap-3">
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCafJBZcXSlgHEKX569W-84BZX5rDwiEKZL7ES1LrSvc9KC7TO56JaxBbdaVcIfPNh2KQ-sv2M8MZtRXHMr_332VxYOtT-NwaQ_o5MKVav3zpIHVSpHuBzzIk0MkQSBNKui0B8Lpv-WPMDrMhOFkD3Bkf3EmWgEGozkcca2Zo8KKxewAA75cCCD2pe2-dfUh_Fanov-NXUWXjEc-cgzos5jcIC_KiOwEa6DIUt1dcKRqNA4R038ql0pDLRU5eop5IknECRUG_ZE-ilJ");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">The Story of Durga</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">Learn about the mythology behind the festival</p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDBy-Zi-MJHfk7Pr2k6crq0b97mfwU5alr9H_OdQrPeraOCC0OPdOoz9WPyIfmExd1tOjaS6uOPDPm9Xo6h5tvDhST0e4rRw_LybRKs-9RGUpJF9mLPFS7uI-mE11USU9_d3YtJtMM-9tXsXUaUr32xVofKoni1rA2NwMatGl82EySdTHmGsexmMV6uJV-UMzRst1je00sezVIg6n7BqFqcqPCShXMowK3ruBnV9cKHAUXXkju6cN43r0k438gVBae9pCKZAZ0qLFe_");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">Traditional Dance Performances</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">Witness captivating dance performances</p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCtTqx_wpCXgr9Clu5FXIeiprt30pPv5X1Kb5ymJqydGwoaUN1l6hIHqxfKGhQNCfRrbgHvyUXIldAszSUOXnWQi2YOPg2zmXid-4bRruaIA6DJHwe12K22QFL4UMQYAW4X97VGZ6dY8HqT3c6uJVgrLzinK1EkP2mP3TOs6hqGhLwPXpdUmVqbyBF4jEkNhqKvyjqC66iSKl88WkiNA35khs6gQmGCfCGIf--uKGG5pnYbvqIzE984k83RaTRyfjnM0Y9QecIGqcN8");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">Artisan Workshops</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">Participate in workshops by local artisans</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
