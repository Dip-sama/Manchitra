<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800"
    />

    <title>Edit Profile - Manchitra</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div
      class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
      style='--select-button-svg: url(&apos;data:image/svg+xml,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%2724px%27 height=%2724px%27 fill=%27rgb(136,107,99)%27 viewBox=%270 0 256 256%27%3e%3cpath d=%27M181.66,170.34a8,8,0,0,1,0,11.32l-48,48a8,8,0,0,1-11.32,0l-48-48a8,8,0,0,1,11.32-11.32L128,212.69l42.34-42.35A8,8,0,0,1,181.66,170.34Zm-96-84.68L128,43.31l42.34,42.35a8,8,0,0,0,11.32-11.32l-48-48a8,8,0,0,0-11.32,0l-48,48A8,8,0,0,0,85.66,85.66Z%27%3e%3c/path%3e%3c/svg%3e&apos;); font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'
    >
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
            <div class="flex items-center gap-9">
              <a class="text-[#181311] text-sm font-medium leading-normal" href="#">Explore</a>
              <a class="text-[#181311] text-sm font-medium leading-normal" href="#">Mandaps</a>
              <a class="text-[#181311] text-sm font-medium leading-normal" href="#">Events</a>
            </div>
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
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC1AJlGBcSerQOoA47JSI7jg5fK5zTF46iCn4reCI9XgaOB43ldWDmPcRf6NuCPhf8qfzuo3JMGz3YFuwfyJbYHnkAyuIq_7laZZs-IK5LORz-kIxvhqFx0ZBWHsC6GuYotXKcbWPEEhs9FU4RsO9USbZ0cApGodI-_29Vn6Mb9m-8AyHNVK6QAw7XOu1FLOO-njAKDmJBiG-ls18cio_A_5Nxbq22dAazAzkxs5cWnaLrlJjcV2EleoB_Yz0qg0XkZZ868Wzro3OUP");'
            ></div>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex p-4 @container">
              <div class="flex w-full flex-col gap-4 items-center">
                <div class="flex gap-4 flex-col items-center">
                  <div
                    class="bg-center bg-no-repeat aspect-square bg-cover rounded-full min-h-32 w-32"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCOWFZt1X67U3dGHRqRyxnTk-UXzHsrKxBxJ6xwFAgWQVr-bcCeVyZ6yMlEYelXC_MTYLg_pCftkB3ae1uH8L4EIata3GtsQXiM8IhY4W4lOuQknrS7oQr3miN7tD9TtkcStE8J-9pPsQuNUUVpV3xmwljs4_Ld-SeNlxC6Jz9RycvuLnc3SS9k0LyRyU31fGJ-m6dtbOjR0slr7nNh23IDfhJIByjZyozej4u5SEPSRhkyhuIW7YqSbYLutuUeGsI-cs48LEj1D4VT");'
                  ></div>
                  <div class="flex flex-col items-center justify-center justify-center">
                    <p class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] text-center">Anika Verma</p>
                    <p class="text-[#886b63] text-base font-normal leading-normal text-center">@anika_verma</p>
                    <p class="text-[#886b63] text-base font-normal leading-normal text-center">Joined in 2022</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="pb-3">
              <div class="flex border-b border-[#e5dedc] px-4 gap-8">
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-[#181311] text-[#181311] pb-[13px] pt-4" href="#">
                  <p class="text-[#181311] text-sm font-bold leading-normal tracking-[0.015em]">Profile</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#886b63] pb-[13px] pt-4" href="#">
                  <p class="text-[#886b63] text-sm font-bold leading-normal tracking-[0.015em]">Saved</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#886b63] pb-[13px] pt-4" href="#">
                  <p class="text-[#886b63] text-sm font-bold leading-normal tracking-[0.015em]">Visited</p>
                </a>
              </div>
            </div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Personal Information</h3>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#181311] text-base font-medium leading-normal pb-2">Name</p>
                <input
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e5dedc] bg-white focus:border-[#e5dedc] h-14 placeholder:text-[#886b63] p-[15px] text-base font-normal leading-normal"
                  value=""
                />
              </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#181311] text-base font-medium leading-normal pb-2">Username</p>
                <input
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e5dedc] bg-white focus:border-[#e5dedc] h-14 placeholder:text-[#886b63] p-[15px] text-base font-normal leading-normal"
                  value=""
                />
              </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#181311] text-base font-medium leading-normal pb-2">Email</p>
                <input
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e5dedc] bg-white focus:border-[#e5dedc] h-14 placeholder:text-[#886b63] p-[15px] text-base font-normal leading-normal"
                  value=""
                />
              </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#181311] text-base font-medium leading-normal pb-2">Phone</p>
                <input
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e5dedc] bg-white focus:border-[#e5dedc] h-14 placeholder:text-[#886b63] p-[15px] text-base font-normal leading-normal"
                  value=""
                />
              </label>
            </div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Preferences</h3>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#181311] text-base font-medium leading-normal pb-2">Default Distance</p>
                <select
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e5dedc] bg-white focus:border-[#e5dedc] h-14 bg-[image:--select-button-svg] placeholder:text-[#886b63] p-[15px] text-base font-normal leading-normal"
                >
                  <option value="one"></option>
                  <option value="two">two</option>
                  <option value="three">three</option>
                </select>
              </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#181311] text-base font-medium leading-normal pb-2">Accessibility Needs</p>
                <select
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border border-[#e5dedc] bg-white focus:border-[#e5dedc] h-14 bg-[image:--select-button-svg] placeholder:text-[#886b63] p-[15px] text-base font-normal leading-normal"
                >
                  <option value="one"></option>
                  <option value="two">two</option>
                  <option value="three">three</option>
                </select>
              </label>
            </div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Notifications</h3>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
              <div class="flex flex-col justify-center">
                <p class="text-[#181311] text-base font-medium leading-normal line-clamp-1">Event Notifications</p>
                <p class="text-[#886b63] text-sm font-normal leading-normal line-clamp-2">Receive notifications about new events and updates.</p>
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
                <p class="text-[#181311] text-base font-medium leading-normal line-clamp-1">Nearby Mandap Alerts</p>
                <p class="text-[#886b63] text-sm font-normal leading-normal line-clamp-2">Get alerts for mandaps near your location.</p>
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
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">App Settings</h3>
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
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Help &amp; Feedback</h3>
            <div class="flex items-center gap-4 bg-white px-4 min-h-14 justify-between">
              <p class="text-[#181311] text-base font-normal leading-normal flex-1 truncate">Help Center</p>
              <div class="shrink-0">
                <div class="text-[#181311] flex size-7 items-center justify-center" data-icon="CaretRight" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path>
                  </svg>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-14 justify-between">
              <p class="text-[#181311] text-base font-normal leading-normal flex-1 truncate">Send Feedback</p>
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
