<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Spline+Sans%3Awght%40400%3B500%3B700"
    />

    <title>Manchitra-Contact</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <?php
$message = '';
$messageClass = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $messageText = trim($_POST['message'] ?? '');

    // Validate inputs
    if (empty($name) || empty($email) || empty($subject) || empty($messageText)) {
        $message = "Please fill in all fields";
        $messageClass = "bg-red-100 text-red-600 p-4 rounded-xl mb-4";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Please enter a valid email address";
        $messageClass = "bg-red-100 text-red-600 p-4 rounded-xl mb-4";
    } else {
        // Email configuration
        $to = "your-email@manchitra.com"; // Replace with your email
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        $emailBody = "Name: $name\n";
        $emailBody .= "Email: $email\n";
        $emailBody .= "Subject: $subject\n\n";
        $emailBody .= "Message:\n$messageText";

        // Send email
        if (mail($to, $subject, $emailBody, $headers)) {
            $message = "Thank you for your message. We'll get back to you soon!";
            $messageClass = "bg-green-100 text-green-600 p-4 rounded-xl mb-4";
        } else {
            $message = "Oops! Something went wrong. Please try again later.";
            $messageClass = "bg-red-100 text-red-600 p-4 rounded-xl mb-4";
        }
    }
}
?>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: "Spline Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f3f3f1] px-10 py-3">
          <div class="flex items-center gap-4 text-[#161613]">
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
            <h2 class="text-[#161613] text-lg font-bold leading-tight tracking-[-0.015em]">Manchitra</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
              <a class="text-[#161613] text-sm font-medium leading-normal" href="dashboard.php">Home</a>
              <a class="text-[#161613] text-sm font-medium leading-normal" href="events.php">Events</a>
              <a class="text-[#161613] text-sm font-medium leading-normal" href="explore.php">Explore</a>
              <a class="text-[#161613] text-sm font-medium leading-normal" href="features.php">Features</a>
            </div>
            <button
              class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 bg-[#f3f3f1] text-[#161613] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5"
            >
              <div class="text-[#161613]" data-icon="Globe" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM101.63,168h52.74C149,186.34,140,202.87,128,215.89,116,202.87,107,186.34,101.63,168ZM98,152a145.72,145.72,0,0,1,0-48h60a145.72,145.72,0,0,1,0,48ZM40,128a87.61,87.61,0,0,1,3.33-24H81.79a161.79,161.79,0,0,0,0,48H43.33A87.61,87.61,0,0,1,40,128ZM154.37,88H101.63C107,69.66,116,53.13,128,40.11,140,53.13,149,69.66,154.37,88Zm19.84,16h38.46a88.15,88.15,0,0,1,0,48H174.21a161.79,161.79,0,0,0,0-48Zm32.16-16H170.94a142.39,142.39,0,0,0-20.26-45A88.37,88.37,0,0,1,206.37,88ZM105.32,43A142.39,142.39,0,0,0,85.06,88H49.63A88.37,88.37,0,0,1,105.32,43ZM49.63,168H85.06a142.39,142.39,0,0,0,20.26,45A88.37,88.37,0,0,1,49.63,168Zm101.05,45a142.39,142.39,0,0,0,20.26-45h35.43A88.37,88.37,0,0,1,150.68,213Z"
                  ></path>
                </svg>
              </div>
            </button>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBhvwoSG1waTAD48TzbMSxPJP7gIuRUXCU5CQtGPi7p0bP-MExTXC-V2rNKyyOsgkISqcTLhKa2bAK3HSTSex-Qtj2ud2NkzGgqImVIc6Rr-ngsReBU6L_ognIK0oU_KDDTEcTAi4g2IvE7GtSBwdHyEC1KXn6LEjN3acGdnximGwHmkm-f4fWftuYkNMp5va-UEz6HtI1x9bYyNVLFmZN7-BhD3pj0hWj7KoywcBLba29WILn7aJEBxIDRHLhSUAVkY8w30E8kUw");'
            ></div>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col w-[512px] max-w-[512px] py-5 max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-[#161613] tracking-light text-[32px] font-bold leading-tight min-w-72">Contact Us</p></div>
            <?php if ($message): ?>
        <div class="px-40 pt-4">
            <div class="<?php echo $messageClass; ?>">
                <?php echo $message; ?>
            </div>
        </div>
    <?php endif; ?>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                  <p class="text-[#161613] text-base font-medium leading-normal pb-2">Your Name</p>
                  <input
                    name="name"
                    placeholder="Enter your name"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#161613] focus:outline-0 focus:ring-0 border border-[#e3e3de] bg-white focus:border-[#e3e3de] h-14 placeholder:text-[#80806b] p-[15px] text-base font-normal leading-normal"
                    value="<?php echo htmlspecialchars($name ?? ''); ?>"
                  />
                </label>
              </div>

              <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                  <p class="text-[#161613] text-base font-medium leading-normal pb-2">Email Address</p>
                  <input
                    name="email"
                    type="email"
                    placeholder="Enter your email"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#161613] focus:outline-0 focus:ring-0 border border-[#e3e3de] bg-white focus:border-[#e3e3de] h-14 placeholder:text-[#80806b] p-[15px] text-base font-normal leading-normal"
                    value="<?php echo htmlspecialchars($email ?? ''); ?>"
                  />
                </label>
              </div>

              <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                  <p class="text-[#161613] text-base font-medium leading-normal pb-2">Subject</p>
                  <input
                    name="subject"
                    placeholder="Enter subject"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#161613] focus:outline-0 focus:ring-0 border border-[#e3e3de] bg-white focus:border-[#e3e3de] h-14 placeholder:text-[#80806b] p-[15px] text-base font-normal leading-normal"
                    value="<?php echo htmlspecialchars($subject ?? ''); ?>"
                  />
                </label>
              </div>

              <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                  <p class="text-[#161613] text-base font-medium leading-normal pb-2">Message</p>
                  <textarea
                    name="message"
                    placeholder="Type your message here"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#161613] focus:outline-0 focus:ring-0 border border-[#e3e3de] bg-white focus:border-[#e3e3de] min-h-36 placeholder:text-[#80806b] p-[15px] text-base font-normal leading-normal"
                  ><?php echo htmlspecialchars($messageText ?? ''); ?></textarea>
                </label>
              </div>
              <div class="flex px-4 py-3 justify-end">
                <button
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#f8f8ec] text-[#161613] text-sm font-bold leading-normal tracking-[0.015em]"
                >
                  <span class="truncate">Submit</span>
                </button>
              </div>
            </form>
            <h3 class="text-[#161613] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Other Ways to Reach Us</h3>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2">
              <div class="text-[#161613] flex items-center justify-center rounded-lg bg-[#f3f3f1] shrink-0 size-12" data-icon="Envelope" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"
                  ></path>
                </svg>
              </div>
              <div class="flex flex-col justify-center">
                <p class="text-[#161613] text-base font-medium leading-normal line-clamp-1">Email</p>
                <p class="text-[#80806b] text-sm font-normal leading-normal line-clamp-2">support@manchitra.com</p>
              </div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2">
              <div class="text-[#161613] flex items-center justify-center rounded-lg bg-[#f3f3f1] shrink-0 size-12" data-icon="Phone" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M222.37,158.46l-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L134.87,160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L97.54,33.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,32,80c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,222.37,158.46ZM176,208A128.14,128.14,0,0,1,48,80,40.2,40.2,0,0,1,82.87,40a.61.61,0,0,0,0,.12l21,47L83.2,111.86a6.13,6.13,0,0,0-.57.77,16,16,0,0,0-1,15.7c9.06,18.53,27.73,37.06,46.46,46.11a16,16,0,0,0,15.75-1.14,8.44,8.44,0,0,0,.74-.56L168.89,152l47,21.05h0s.08,0,.11,0A40.21,40.21,0,0,1,176,208Z"
                  ></path>
                </svg>
              </div>
              <div class="flex flex-col justify-center">
                <p class="text-[#161613] text-base font-medium leading-normal line-clamp-1">Phone</p>
                <p class="text-[#80806b] text-sm font-normal leading-normal line-clamp-2">+1-555-123-4567</p>
              </div>
            </div>
            <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2">
              <div class="text-[#161613] flex items-center justify-center rounded-lg bg-[#f3f3f1] shrink-0 size-12" data-icon="Hash" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M224,88H175.4l8.47-46.57a8,8,0,0,0-15.74-2.86l-9,49.43H111.4l8.47-46.57a8,8,0,0,0-15.74-2.86L95.14,88H48a8,8,0,0,0,0,16H92.23L83.5,152H32a8,8,0,0,0,0,16H80.6l-8.47,46.57a8,8,0,0,0,6.44,9.3A7.79,7.79,0,0,0,80,224a8,8,0,0,0,7.86-6.57l9-49.43H144.6l-8.47,46.57a8,8,0,0,0,6.44,9.3A7.79,7.79,0,0,0,144,224a8,8,0,0,0,7.86-6.57l9-49.43H208a8,8,0,0,0,0-16H163.77l8.73-48H224a8,8,0,0,0,0-16Zm-76.5,64H99.77l8.73-48h47.73Z"
                  ></path>
                </svg>
              </div>
              <div class="flex flex-col justify-center">
                <p class="text-[#161613] text-base font-medium leading-normal line-clamp-1">Social Media</p>
                <p class="text-[#80806b] text-sm font-normal leading-normal line-clamp-2">Follow us on social media for updates and news.</p>
              </div>
            </div>
            <div class="@container">
              <div class="gap-2 px-4 flex flex-wrap justify-start">
                <div class="flex flex-col items-center gap-2 bg-white py-2.5 text-center w-20">
                  <div class="rounded-full bg-[#f3f3f1] p-2.5">
                    <div class="text-[#161613]" data-icon="TwitterLogo" data-size="20px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M247.39,68.94A8,8,0,0,0,240,64H209.57A48.66,48.66,0,0,0,168.1,40a46.91,46.91,0,0,0-33.75,13.7A47.9,47.9,0,0,0,120,88v6.09C79.74,83.47,46.81,50.72,46.46,50.37a8,8,0,0,0-13.65,4.92c-4.31,47.79,9.57,79.77,22,98.18a110.93,110.93,0,0,0,21.88,24.2c-15.23,17.53-39.21,26.74-39.47,26.84a8,8,0,0,0-3.85,11.93c.75,1.12,3.75,5.05,11.08,8.72C53.51,229.7,65.48,232,80,232c70.67,0,129.72-54.42,135.75-124.44l29.91-29.9A8,8,0,0,0,247.39,68.94Zm-45,29.41a8,8,0,0,0-2.32,5.14C196,166.58,143.28,216,80,216c-10.56,0-18-1.4-23.22-3.08,11.51-6.25,27.56-17,37.88-32.48A8,8,0,0,0,92,169.08c-.47-.27-43.91-26.34-44-96,16,13,45.25,33.17,78.67,38.79A8,8,0,0,0,136,104V88a32,32,0,0,1,9.6-22.92A30.94,30.94,0,0,1,167.9,56c12.66.16,24.49,7.88,29.44,19.21A8,8,0,0,0,204.67,80h16Z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                  <p class="text-[#161613] text-sm font-medium leading-normal">Twitter</p>
                </div>
                <div class="flex flex-col items-center gap-2 bg-white py-2.5 text-center w-20">
                  <div class="rounded-full bg-[#f3f3f1] p-2.5">
                    <div class="text-[#161613]" data-icon="InstagramLogo" data-size="20px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                  <p class="text-[#161613] text-sm font-medium leading-normal">Instagram</p>
                </div>
                <div class="flex flex-col items-center gap-2 bg-white py-2.5 text-center w-20">
                  <div class="rounded-full bg-[#f3f3f1] p-2.5">
                    <div class="text-[#161613]" data-icon="FacebookLogo" data-size="20px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0,16h24v63.63a88,88,0,1,1,16,0Z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                  <p class="text-[#161613] text-sm font-medium leading-normal">Facebook</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
