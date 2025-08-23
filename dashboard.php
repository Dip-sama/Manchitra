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

    <!-- Add Leaflet CSS and JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

    <style>
        #map {
            height: 320px;
            width: 100%;
            border-radius: 0.5rem;
            position: relative;
            z-index: 1;
        }

        .map-container {
            position: relative;
            width: 100%;
            height: 320px;
            margin-bottom: 1rem;
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .map-controls {
            position: absolute;
            right: 1rem;
            top: 1rem;
            z-index: 999;
        }

        .leaflet-control-container .leaflet-top,
        .leaflet-control-container .leaflet-bottom {
            z-index: 998;
        }

        /* Add these new styles */
        .search-input {
            transition: all 0.3s ease;
        }

        .search-input.loading {
            background-color: #f8f8f8;
        }

        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 1000;
            margin-top: 0.5rem;
        }
    </style>
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="flex items-center justify-between px-8 py-4 bg-white shadow sticky top-0 z-50">
      <div class="flex items-center gap-3">
        <span class="text-xl font-bold text-[#ea572a]">Manchitra</span>
      </div>
      <div class="flex items-center gap-9">
        <!-- <a class="text-[#181311] text-sm font-medium leading-normal" href="home.php">Home</a> -->
        <a class="text-[#181311] text-sm font-medium leading-normal" href="events.php">Events</a>
        <!-- <a class="text-[#181311] text-sm font-medium leading-normal" href="map.php">Map</a> -->
        <a class="text-[#181311] text-sm font-medium leading-normal" href="features.php">Features</a>
        <a class="text-[#181311] text-sm font-medium leading-normal" href="about.php">About</a>
        <a class="text-[#181311] text-sm font-medium leading-normal" href="contact.php">Contact</a>
        <a class="text-[#181311] text-sm font-medium leading-normal" href="settings.php">Settings</a>
         <!-- <a class="text-[#181311] text-sm font-medium leading-normal" href="login.php">Login</a> -->
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
                    <p class="text-[#181311] text-[22px] font-bold leading-tight tracking-[-0.015em] text-center">Dip Bhattacharjee</p>
                    <p class="text-[#886b63] text-base font-normal leading-normal text-center">User ID: 12345</p>
                  </div>
                </div>
              </div>
            </div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Recently Viewed</h3>
            <div class="flex flex-col space-y-1">
              <div class="flex items-center gap-3 bg-white px-4 py-2 hover:bg-gray-50 cursor-pointer">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-12"
                    style='background-image: url("path/to/mandap-a-image.jpg");'></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#181311] text-base font-medium leading-tight">Mandap A</p>
                  <p class="text-[#886b63] text-sm leading-snug">123 Puja Lane</p>
                </div>
              </div>
              <div class="flex items-center gap-3 bg-white px-4 py-2 hover:bg-gray-50 cursor-pointer">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-12"
                    style='background-image: url("path/to/mandap-b-image.jpg");'></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#181311] text-base font-medium leading-tight">Mandap B</p>
                  <p class="text-[#886b63] text-sm leading-snug">456 Festival Road</p>
                </div>
              </div>
            </div>
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Saved Mandaps</h3>
            <div class="flex flex-col space-y-1">
              <div class="flex items-center gap-3 bg-white px-4 py-2 hover:bg-gray-50 cursor-pointer">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-12"
                    style='background-image: url("path/to/mandap-c-image.jpg");'></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#181311] text-base font-medium leading-tight">Mandap C</p>
                  <p class="text-[#886b63] text-sm leading-snug">789 Celebration Avenue</p>
                </div>
              </div>
              <div class="flex items-center gap-3 bg-white px-4 py-2 hover:bg-gray-50 cursor-pointer">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-12"
                    style='background-image: url("path/to/mandap-d-image.jpg");'></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#181311] text-base font-medium leading-tight">Mandap D</p>
                  <p class="text-[#886b63] text-sm leading-snug">101 Festive Street</p>
                </div>
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
                    class="search-input form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#181311] focus:outline-0 focus:ring-0 border-none bg-[#f4f1f0] focus:border-none h-full placeholder:text-[#886b63] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value=""
                  />
                </div>
              </label>
            </div>
            <div class="@container flex flex-col h-full flex-1">
              <div class="flex flex-1 flex-col @[480px]:px-4 @[480px]:py-3">
                <div class="@[480px]:rounded-lg">
                  <div class="map-container relative">
                    <div id="map"></div>
                    <!-- Map controls -->
                    <div class="map-controls">
                      <div class="flex flex-col gap-0.5">
                        <button id="zoomIn" class="flex size-10 items-center justify-center rounded-t-lg bg-white shadow-[0_2px_4px_rgba(0,0,0,0.1)]">
                          <div class="text-[#181311]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                              <path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z"></path>
                            </svg>
                          </div>
                        </button>
                        <button id="zoomOut" class="flex size-10 items-center justify-center rounded-b-lg bg-white shadow-[0_2px_4px_rgba(0,0,0,0.1)]">
                          <div class="text-[#181311]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                              <path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128Z"></path>
                            </svg>
                          </div>
                        </button>
                      </div>
                      <button id="currentLocation" class="flex size-10 items-center justify-center rounded-lg bg-white shadow-[0_2px_4px_rgba(0,0,0,0.1)] mt-3">
                        <div class="text-[#181311]">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256" transform="scale(-1, 1)">
                            <path d="M229.33,98.21,53.41,33l-.16-.05A16,16,0,0,0,32.9,53.25a1,1,0,0,0,.05.16L98.21,229.33A15.77,15.77,0,0,0,113.28,240h.3a15.77,15.77,0,0,0,15-11.29l23.56-76.56,76.56-23.56a16,16,0,0,0,.62-30.38Z"></path>
                          </svg>
                        </div>
                      </button>
                    </div>
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
          <div class="layout-content-container flex flex-col w-80">
            <!-- Recently Viewed Section -->
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pt-2 pb-1">Recently Viewed</h3>
            <div class="flex flex-col space-y-1">
              <div class="flex items-center gap-3 bg-white px-4 py-2 hover:bg-gray-50 cursor-pointer">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-12"
                    style='background-image: url("path/to/mandap-a-image.jpg");'></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#181311] text-base font-medium leading-tight">Mandap A</p>
                  <p class="text-[#886b63] text-sm leading-snug">123 Puja Lane</p>
                </div>
              </div>
              <div class="flex items-center gap-3 bg-white px-4 py-2 hover:bg-gray-50 cursor-pointer">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-12"
                    style='background-image: url("path/to/mandap-b-image.jpg");'></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#181311] text-base font-medium leading-tight">Mandap B</p>
                  <p class="text-[#886b63] text-sm leading-snug">456 Festival Road</p>
                </div>
              </div>
            </div>
            <!-- Saved Mandaps Section -->
            <h3 class="text-[#181311] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pt-3 pb-1">Saved Mandaps</h3>
            <div class="flex flex-col space-y-1">
              <div class="flex items-center gap-3 bg-white px-4 py-2 hover:bg-gray-50 cursor-pointer">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-12"
                    style='background-image: url("path/to/mandap-c-image.jpg");'></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#181311] text-base font-medium leading-tight">Mandap C</p>
                  <p class="text-[#886b63] text-sm leading-snug">789 Celebration Avenue</p>
                </div>
              </div>
              <div class="flex items-center gap-3 bg-white px-4 py-2 hover:bg-gray-50 cursor-pointer">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-12"
                    style='background-image: url("path/to/mandap-d-image.jpg");'></div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#181311] text-base font-medium leading-tight">Mandap D</p>
                  <p class="text-[#886b63] text-sm leading-snug">101 Festive Street</p>
                </div>
              </div>


    <!-- Replace the existing Ananda Utsav Mandap section with this -->
<div class="px-4 md:px-8 py-5 max-w-7xl  mx-auto gap-10 ">
    <div class="layout-content-container flex flex-col w-full">
        <!-- Mandap Header -->
        <div class="flex flex-wrap justify-between gap-4 mb-6">
            <div class="flex flex-col gap-2">
                <h1 class="text-[#181311] text-2xl md:text-3xl font-bold leading-tight tracking-tight">
                    Ananda Utsav Mandap
                </h1>
                <p class="text-[#886b63] text-sm md:text-base leading-normal">
                    123 Festive Lane, Kolkata
                </p>
            </div>
        </div>

        <!-- Navigation Tabs -->
        <div class="border-b border-[#e5dedc] mb-6">
            <nav class="flex gap-8">
                <a class="pb-3 border-b-[3px] border-[#181311] text-[#181311] font-bold" href="#">
                    Overview
                </a>
                <a class="pb-3 border-b-[3px] border-transparent text-[#886b63] font-bold" href="#">
                    Events
                </a>
            </nav>
        </div>

        <!-- Image Gallery -->
        <div class="mb-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Gallery Item 1 -->
                <div class="flex flex-col gap-3">
                    <div class="aspect-video rounded-lg overflow-hidden">
                        <img
                            src="path/to/mandap-image1.jpg"
                            alt="Ananda Utsav Mandap Decorations"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <div>
                        <p class="text-[#181311] font-medium">Ananda Utsav Mandap</p>
                        <p class="text-[#886b63] text-sm">Decorations</p>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="flex flex-col gap-3">
                    <div class="aspect-video rounded-lg overflow-hidden">
                        <img
                            src="path/to/mandap-image2.jpg"
                            alt="Cultural Performances"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <div>
                        <p class="text-[#181311] font-medium">Ananda Utsav Mandap</p>
                        <p class="text-[#886b63] text-sm">Cultural Performances</p>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="flex flex-col gap-3">
                    <div class="aspect-video rounded-lg overflow-hidden">
                        <img
                            src="path/to/mandap-image3.jpg"
                            alt="Idol Art"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <div>
                        <p class="text-[#181311] font-medium">Ananda Utsav Mandap</p>
                        <p class="text-[#886b63] text-sm">Idol Art</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="mb-8">
            <h2 class="text-xl font-bold mb-4">About</h2>
            <p class="text-[#181311] leading-relaxed">
                Established in 1950, Ananda Utsav Mandap is celebrated for its traditional
                idol craftsmanship and lively cultural shows. It draws thousands of visitors
                annually, highlighting the region's rich cultural legacy.
            </p>
        </div>

        <!-- Timings Section -->
        <div class="mb-8">
            <h2 class="text-xl font-bold mb-4">Timings</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex justify-between items-center py-3 border-t border-[#e5dedc]">
                    <span class="text-[#886b63]">Opening</span>
                    <span class="text-[#181311]">10:00 AM</span>
                </div>
                <div class="flex justify-between items-center py-3 border-t border-[#e5dedc]">
                    <span class="text-[#886b63]">Closing</span>
                    <span class="text-[#181311]">10:00 PM</span>
                </div>
            </div>
        </div>

        <!-- Navigation Button -->
        <div class="flex justify-end">
            <button class="bg-[#ea572a] text-white px-6 py-2 rounded-lg font-bold hover:bg-[#d24d25] transition-colors">
                Navigate
            </button>
        </div>
    </div>
</div>
    <!-- Add this script before closing body tag -->
    <script>
        // Initialize map
        const map = L.map('map').setView([22.5726, 88.3639], 13); // Coordinates for Kolkata

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Add sample markers for mandaps
        const mandaps = [
            {lat: 22.5726, lng: 88.3639, name: "Mandap A"},
            {lat: 22.5826, lng: 88.3739, name: "Mandap B"},
            {lat: 22.5626, lng: 88.3539, name: "Mandap C"}
        ];

        mandaps.forEach(mandap => {
            L.marker([mandap.lat, mandap.lng])
                .bindPopup(mandap.name)
                .addTo(map);
        });

        // Zoom controls
        document.getElementById('zoomIn').addEventListener('click', () => {
            map.zoomIn();
        });

        document.getElementById('zoomOut').addEventListener('click', () => {
            map.zoomOut();
        });

        // Current location
        document.getElementById('currentLocation').addEventListener('click', () => {
            if ("geolocation" in navigator) {
                navigator.geolocation.getCurrentPosition((position) => {
                    const lat = position.coords.latitude;
                    const lng = position.coords.longitude;
                    map.setView([lat, lng], 15);
                    L.marker([lat, lng])
                        .bindPopup("You are here")
                        .addTo(map);
                });
            }
        });

const searchInput = document.querySelector('input[placeholder="Search for Mandaps, Restaurants, Cafes..."]');
let searchMarker = null;

async function searchLocation(query) {
    try {
        const response = await fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(query)}`);
        const data = await response.json();

        if (data.length > 0) {
            const { lat, lon } = data[0];

            // Remove previous search marker if it exists
            if (searchMarker) {
                map.removeLayer(searchMarker);
            }

            // Add new marker
            searchMarker = L.marker([lat, lon])
                .addTo(map)
                .bindPopup(data[0].display_name)
                .openPopup();

            // Center map on search result
            map.setView([lat, lon], 16);
        }
    } catch (error) {
        console.error('Error searching location:', error);
    }
}

// Add debounce function to prevent too many API calls
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Add event listener for search input
const debouncedSearch = debounce((query) => {
    if (query.length > 2) {
        searchLocation(query);
    }
}, 500);

searchInput.addEventListener('input', (e) => {
    const query = e.target.value.trim();
    debouncedSearch(query);
});

// Add event listener for Enter key
searchInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
        const query = e.target.value.trim();
        if (query) {
            searchLocation(query);
        }
    }
});
    </script>
  </body>
</html>
