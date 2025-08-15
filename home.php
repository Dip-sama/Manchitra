<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800"
    />

    <title>Manchitra-Home page</title>
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
              <div class="text-[#181311]" data-icon="MapPin" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z"
                  ></path>
                </svg>
              </div>
            </button>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBY87K-6yoPlmANX1CfBZ1ck2D9i1gaz5RrIv1KuoW0EdlcSqXL0pDFwvNszaIbyx5xBQTZCmc4FbFVVdFS2JLl9mlH4ETn1v3aZMzt05krZgu_QUd_mhsz_RbICy6chroZ3FY0MmtnJVmhw0gIDs1SzvgvtnAeitezcYZ9ZXJAFYorpdS1VeXbi6zImEqfCzPc7gBzoIQTBUKMGtjefXJVRJooAL4UyFDHgHp67ZixMKMcOnuM3yihlko54FjDJV93wVpqsEko--UA");'
            ></div>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#181311] tracking-light text-[32px] font-bold leading-tight">Ananda Utsav Mandap</p>
                <p class="text-[#886b63] text-sm font-normal leading-normal">123 Festive Lane, Kolkata</p>
              </div>
            </div>
            <div class="pb-3">
              <div class="flex border-b border-[#e5dedc] px-4 gap-8">
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-[#181311] text-[#181311] pb-[13px] pt-4" href="#">
                  <p class="text-[#181311] text-sm font-bold leading-normal tracking-[0.015em]">Overview</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#886b63] pb-[13px] pt-4" href="#">
                  <p class="text-[#886b63] text-sm font-bold leading-normal tracking-[0.015em]">Events</p>
                </a>
              </div>
            </div>
            <div class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
              <div class="flex items-stretch p-4 gap-3">
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAJJoLaiTNbmWt5LPJSVEH8UZTX02GiM8JxKb_9qrf1d5ElmexbHtf1AddCTeMnpmt-BxYQtnfCG7hvGPXiO7eJDSYsbDyBkHd9TSFaPvrYOKej5FtB3cm_FRbo8UqtfgIjqpMGqa9aEoYk8fi_ZX6emdI_JvrMFDgLPTguaqZb8mO85G2GAJ-E4-T0w8zd1N9pIpS3rVCacNLOB24bLfp7NvGuxSaOySZOBT-L1GCsFdVYAWFSYHJE0Em8ZETtz9MiaVorSXvWpWHy");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">Ananda Utsav Mandap</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">Decorations</p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAsYvYR820I1LBWHw1OCx4B-2rtFBkPosVIV9LDbAHiH2usDsJlyR46GuObs-8oZF5xzuDxoL1fKrwyEwlr0aRt1tt6GgXUpBpMaJxxKZ-VVjBgI4G0U7ZZEtWWxqSFRRluYW4GZkY4kK3pmCK5XMQn3n6c-G0eO8jCulVkfsJw8Byrh14CGTAFjU4o9vGxIiEgkzOLc8ne0O6pEfiO0-4WqRM7eE6TFvkrCu7a0uTs-81SP5wS_ej9gqfBz5kXHb2flmeSJrUtkL-s");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">Ananda Utsav Mandap</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">Cultural Performances</p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA7_QF4pBNBjR-USnkmJZIQv1tpu_P0sHtuDN2757IoFZMyDZAlgo8syb1byROJnce-sr2tI1wrmY5GziT1WqIDvgkLMkCRmq6nT1l5-UNw7zXI3JeDRBf0uj3RARx0DiYI_8_ksi0TwvM5VS_TJFf0JsG9K_UZ8goqdzPxbCxcy--wqoLr9h3_lwVyIMutcGy8oNFLVi7Yq7XFov4Meydt-811X4z53K8t3tzDm75urt7NyI0ibvkhB6w6hZIUaOqIMUfGf5j4zbs_");'
                  ></div>
                  <div>
                    <p class="text-[#181311] text-base font-medium leading-normal">Ananda Utsav Mandap</p>
                    <p class="text-[#886b63] text-sm font-normal leading-normal">Idol Art</p>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">About</h2>
            <p class="text-[#181311] text-base font-normal leading-normal pb-3 pt-1 px-4">
              Established in 1950, Ananda Utsav Mandap is celebrated for its traditional idol craftsmanship and lively cultural shows. It draws thousands of visitors annually,
              highlighting the region's rich cultural legacy.
            </p>
            <h2 class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Timings</h2>
            <div class="p-4 grid grid-cols-[20%_1fr] gap-x-6">
              <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#e5dedc] py-5">
                <p class="text-[#886b63] text-sm font-normal leading-normal">Opening</p>
                <p class="text-[#181311] text-sm font-normal leading-normal">10:00 AM</p>
              </div>
              <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#e5dedc] py-5">
                <p class="text-[#886b63] text-sm font-normal leading-normal">Closing</p>
                <p class="text-[#181311] text-sm font-normal leading-normal">10:00 PM</p>
              </div>
            </div>
            <div class="flex px-4 py-3 justify-end">
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#ea572a] text-white text-sm font-bold leading-normal tracking-[0.015em]"
              >
                <span class="truncate">Navigate</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
