<template>
  
  
      <!-- Left Sidebar Start -->
      <div class="vertical-menu">
      <button
        type="button"
        class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn vertical-menu-btn2"
      >
        <i class="fa-solid fa-angles-right"></i>
      </button>
      <!-- LOGO Box -->
      <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
          <span class="logo-sm">
            <img
              :src="NexusPOSLOGO"
              alt=""
              width="38"
              height="38"
            />
          </span>
          <span class="logo-sm2">
            <img :src="NexusPOSLOGO" alt="" />
          </span>
          <span class="logo-lg">
            <img :src="NexusPOSLOGO" alt="" />
            <span class="brand-name">NEXUS <span>POS</span></span>
          </span>
        </a>
      </div>
      <!-- Logo Box End -->

      <!--- Sidemenu -->
      <div data-simplebar class="sidebar-menu-scroll">
        <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
            <li>
                <router-link to="/dashboard">
                <svg
                  width="25"
                  height="25"
                  viewBox="0 0 27 27"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M3.17391 26L23.8261 26C25.0267 26 26 25.0267 26 23.8261L26 3.17391C26 1.9733 25.0267 1 23.8261 1L3.17391 1C1.9733 1 1 1.9733 1 3.17391L1 23.8261C1 25.0267 1.9733 26 3.17391 26Z"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M7.43472 11.4131H3.63037V23.3696H7.43472V11.4131Z"
                    stroke="#008AEE"
                    stroke-width="0.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M12.739 14.6739H8.93469V23.3695H12.739V14.6739Z"
                    stroke="#008AEE"
                    stroke-width="0.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M18.0434 9.78262H14.239V23.3696H18.0434V9.78262Z"
                    stroke="#008AEE"
                    stroke-width="0.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M23.3477 11.9565H19.5433V23.3696H23.3477V11.9565Z"
                    stroke="#008AEE"
                    stroke-width="0.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M4.26085 8.15215C4.86116 8.15215 5.3478 7.66551 5.3478 7.0652C5.3478 6.46489 4.86116 5.97824 4.26085 5.97824C3.66054 5.97824 3.17389 6.46489 3.17389 7.0652C3.17389 7.66551 3.66054 8.15215 4.26085 8.15215Z"
                    stroke="#008AEE"
                    stroke-width="0.815217"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M10.7826 11.413C11.3829 11.413 11.8696 10.9264 11.8696 10.3261C11.8696 9.72578 11.3829 9.23914 10.7826 9.23914C10.1823 9.23914 9.69568 9.72578 9.69568 10.3261C9.69568 10.9264 10.1823 11.413 10.7826 11.413Z"
                    stroke="#008AEE"
                    stroke-width="0.815217"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M16.7608 6.52175C17.3612 6.52175 17.8478 6.03511 17.8478 5.4348C17.8478 4.83449 17.3612 4.34784 16.7608 4.34784C16.1605 4.34784 15.6739 4.83449 15.6739 5.4348C15.6739 6.03511 16.1605 6.52175 16.7608 6.52175Z"
                    stroke="#008AEE"
                    stroke-width="0.815217"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M22.7392 8.69567C23.3395 8.69567 23.8261 8.20903 23.8261 7.60872C23.8261 7.00841 23.3395 6.52176 22.7392 6.52176C22.1389 6.52176 21.6522 7.00841 21.6522 7.60872C21.6522 8.20903 22.1389 8.69567 22.7392 8.69567Z"
                    stroke="#008AEE"
                    stroke-width="0.815217"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M5.34778 7.60867L9.6956 9.78259"
                    stroke="#008AEE"
                    stroke-width="0.815217"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M11.8696 9.78259L15.674 5.97824"
                    stroke="#008AEE"
                    stroke-width="0.815217"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M17.8478 5.97824L21.6521 7.0652"
                    stroke="#008AEE"
                    stroke-width="0.815217"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>

                <span class="menu-item" data-key="t-dashboard">Dashboard</span>
              </router-link>
            </li>

            <li>
              <a href="layouts-horizontal.html">
                <svg
                  width="25"
                  height="25"
                  viewBox="0 0 27 27"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M18.9795 26H2.5411C1.68493 26 1 25.3333 1 24.5V2.5C1 1.66667 1.68493 1 2.5411 1H18.9795C19.8356 1 20.5206 1.66667 20.5206 2.5V24.5C20.5206 25.3333 19.8356 26 18.9795 26Z"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M4.51025 4.41669H12.1301"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M4.51025 7.75H14.6986"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M4.51025 11.1667H17.0103"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M4.51025 14.5833H17.0103"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M26 3.5V22.1667L24.4589 25.3333L22.9178 22.1667V3.5H26Z"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M22.9178 3.5V2C22.9178 1.5 23.3459 1 23.9452 1H24.9726C25.572 1 26 1.5 26 2V3.5H22.9178Z"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M6.90752 22.5833C8.23149 22.5833 9.30478 21.5387 9.30478 20.25C9.30478 18.9613 8.23149 17.9167 6.90752 17.9167C5.58354 17.9167 4.51025 18.9613 4.51025 20.25C4.51025 21.5387 5.58354 22.5833 6.90752 22.5833Z"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M14.6986 22.5833C16.0226 22.5833 17.0959 21.5387 17.0959 20.25C17.0959 18.9613 16.0226 17.9167 14.6986 17.9167C13.3746 17.9167 12.3013 18.9613 12.3013 20.25C12.3013 21.5387 13.3746 22.5833 14.6986 22.5833Z"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>

                <span class="menu-item" data-key="t-horizontal">Projects</span>
              </a>
            </li>

           
            <li>
    <router-link to="/modal">
      <svg
        width="25"
        height="25"
        viewBox="0 0 27 27"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M18.9795 26H2.5411C1.68493 26 1 25.3333 1 24.5V2.5C1 1.66667 1.68493 1 2.5411 1H18.9795C19.8356 1 20.5206 1.66667 20.5206 2.5V24.5C20.5206 25.3333 19.8356 26 18.9795 26Z"
          stroke="#008AEE"
          stroke-width="1.5"
          stroke-miterlimit="10"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M26 3.5V22.1667L24.4589 25.3333L22.9178 22.1667V3.5H26Z"
          stroke="#008AEE"
          stroke-width="1.5"
          stroke-miterlimit="10"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M22.9178 3.5V2C22.9178 1.5 23.3459 1 23.9452 1H24.9726C25.572 1 26 1.5 26 2V3.5H22.9178Z"
          stroke="#008AEE"
          stroke-width="1.5"
          stroke-miterlimit="10"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M6.90752 22.5833C8.23149 22.5833 9.30478 21.5387 9.30478 20.25C9.30478 18.9613 8.23149 17.9167 6.90752 17.9167C5.58354 17.9167 4.51025 18.9613 4.51025 20.25C4.51025 21.5387 5.58354 22.5833 6.90752 22.5833Z"
          stroke="#008AEE"
          stroke-width="1.5"
          stroke-miterlimit="10"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M14.6986 22.5833C16.0226 22.5833 17.0959 21.5387 17.0959 20.25C17.0959 18.9613 16.0226 17.9167 14.6986 17.9167C13.3746 17.9167 12.3013 18.9613 12.3013 20.25C12.3013 21.5387 13.3746 22.5833 14.6986 22.5833Z"
          stroke="#008AEE"
          stroke-width="1.5"
          stroke-miterlimit="10"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
      <span class="menu-item" data-key="t-horizontal">Modals</span>
    </router-link>
  </li>

            <li>
              <a href="#">
                <svg
                  width="26"
                  height="32"
                  viewBox="0 0 55 66"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M31.5043 12.1989L29.4362 13.0606C28.5744 -3.48481 17.5441 -1.76133 14.2695 16.8523L12.029 17.714C14.5943 2.57869 22.8871 -3.58358 27.885 2.06889C33.3348 -0.886685 38.2259 2.71972 39.0876 11.1648C38.1921 9.92557 37.624 9.39999 36.5024 8.75191C35.6407 2.06889 31.784 1.97627 28.9741 3.58146C30.1587 5.57882 31.0593 8.43328 31.5043 12.1989Z"
                    fill="#004F88"
                  />
                  <path
                    d="M25.5325 4.10095C22.172 9.36544 20.8072 13.1579 19.44 19.9924L21.5081 20.8541C22.3038 13.7959 23.6309 10.264 26.5907 5.54405C26.7521 5.28676 26.7849 4.96132 26.6385 4.6952C26.4225 4.3024 26.2051 4.09083 25.8442 3.9768C25.7258 3.93935 25.5994 3.99621 25.5325 4.10095Z"
                    fill="#004F88"
                  />
                  <path
                    d="M14.0972 57.5264L2.28035 55.163C1.65626 55.0382 1.236 54.4507 1.31951 53.8197L5.72741 20.5156C5.78698 20.0655 6.09386 19.6868 6.52184 19.5352L14.0972 16.8523L17.0271 18.5757L23.5763 35.6382H26.3339L26.831 14.5943C26.843 14.0872 27.1704 13.6416 27.6507 13.4786L36.5024 10.4754L34.0979 61.1421C34.0935 61.2346 34.0077 61.3014 33.917 61.283L23.921 59.2499L16.5101 40.981H14.0972V57.5264Z"
                    fill="url(#paint0_linear_165_101)"
                  />
                  <path
                    d="M40.6388 14.2671L36.5024 10.5132L34.0895 61.1836L42.8793 58.2158L50.9262 57.3217C51.612 57.2455 52.0948 56.6114 51.9858 55.93L45.4611 15.1508C45.3647 14.5479 44.8335 14.1117 44.2234 14.1343L40.6388 14.2671Z"
                    fill="#008AEE"
                  />
                  <path
                    d="M24.5338 22.2695L17.0271 18.6136L23.6402 35.8484H26.6786V26.9699L24.5338 22.2695Z"
                    fill="#008AEE"
                  />
                  <path
                    d="M16.51 40.981H14.0972V57.5643L22.5422 55.6306L16.51 40.981Z"
                    fill="#008AEE"
                  />
                  <path
                    d="M41.8452 51.3219L34.6066 60.6287L42.7043 56.6362L51.3244 56.8371L43.224 50.9772L41.3282 14.6118H40.6388L41.8452 51.3219Z"
                    fill="#004F88"
                  />
                  <path
                    d="M34.1002 64.0055L0.478644 56.8647C0.290755 56.8248 0.113831 56.9681 0.113831 57.1602V58.5059C0.113831 58.6486 0.213611 58.7718 0.353137 58.8014L34.1723 65.9842C34.221 65.9946 34.2716 65.9927 34.3195 65.9788L54.2669 60.1732C54.3959 60.1357 54.4845 60.0175 54.4845 59.8832V58.6971C54.4845 58.4967 54.2929 58.3518 54.1001 58.4065L34.3905 63.9958C34.296 64.0226 34.1963 64.026 34.1002 64.0055Z"
                    fill="url(#paint1_linear_165_101)"
                  />
                  <defs>
                    <linearGradient
                      id="paint0_linear_165_101"
                      x1="1.17108"
                      y1="10.3409"
                      x2="36.6748"
                      y2="61.3559"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#008AEE" />
                      <stop offset="1" stop-color="#004F88" />
                    </linearGradient>
                    <linearGradient
                      id="paint1_linear_165_101"
                      x1="0.113831"
                      y1="62.1488"
                      x2="54.4845"
                      y2="62.1488"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="#008AEE" />
                      <stop offset="1" stop-color="#004F88" />
                    </linearGradient>
                  </defs>
                </svg>
                <span class="menu-item" data-key="t-horizontal">Pos</span>
              </a>
            </li>

            <li>
              <a href="layouts-horizontal.html">
                <svg
                  width="25"
                  height="25"
                  viewBox="0 0 27 27"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.5 26C20.4036 26 26 20.4036 26 13.5C26 6.59644 20.4036 1 13.5 1C6.59644 1 1 6.59644 1 13.5C1 20.4036 6.59644 26 13.5 26Z"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M13.5 17.6667C16.3765 17.6667 18.7084 15.3348 18.7084 12.4583C18.7084 9.58185 16.3765 7.25 13.5 7.25C10.6235 7.25 8.29169 9.58185 8.29169 12.4583C8.29169 15.3348 10.6235 17.6667 13.5 17.6667Z"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M5.14062 22.7969C5.92436 21.2531 7.12026 19.9566 8.59576 19.0509C10.0713 18.1453 11.7687 17.6659 13.5 17.6659C15.2313 17.6659 16.9287 18.1453 18.4042 19.0509C19.8797 19.9566 21.0756 21.2531 21.8594 22.7969"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>

                <span class="menu-item" data-key="t-horizontal">User</span>
              </a>
            </li>

            <li>
              <a href="layouts-horizontal.html">
                <svg
                  width="25"
                  height="25"
                  viewBox="0 0 27 27"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.65384 19.75H1.72115C1.52989 19.75 1.34646 19.6677 1.21122 19.5212C1.07598 19.3747 1 19.1759 1 18.9687V10.375C1 7.88859 1.91174 5.50403 3.53465 3.74587C5.15756 1.98772 7.3587 1 9.65384 1C11.949 1 14.1501 1.98772 15.773 3.74587C17.3959 5.50403 18.3077 7.88859 18.3077 10.375C18.3077 12.8614 17.3959 15.246 15.773 17.0041C14.1501 18.7623 11.949 19.75 9.65384 19.75Z"
                    stroke="#008AEE"
                    stroke-width="1.44471"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M9.18506 19.75C9.7817 21.5782 10.887 23.161 12.3486 24.2803C13.8102 25.3997 15.5562 26.0005 17.3461 26H25.2788C25.4701 26 25.6535 25.9177 25.7887 25.7712C25.924 25.6247 26 25.426 26 25.2188V16.625C26.0031 14.2255 25.1555 11.9162 23.6324 10.1741C22.1092 8.43191 20.0267 7.38985 17.8149 7.26303"
                    stroke="#008AEE"
                    stroke-width="1.44471"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <rect x="5" y="9" width="2" height="2" fill="#008AEE" />
                  <rect x="9" y="9" width="2" height="2" fill="#008AEE" />
                  <rect x="13" y="9" width="2" height="2" fill="#008AEE" />
                </svg>

                <span class="menu-item" data-key="t-horizontal">Chat</span>
              </a>
            </li>

            <li>
              <a href="layouts-horizontal.html">
                <svg
                  width="27"
                  height="27"
                  viewBox="0 0 27 27"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.4997 17.3461C15.7958 17.3461 17.6572 15.6242 17.6572 13.5C17.6572 11.3758 15.7958 9.65384 13.4997 9.65384C11.2036 9.65384 9.34222 11.3758 9.34222 13.5C9.34222 15.6242 11.2036 17.3461 13.4997 17.3461Z"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M25.7207 8.08269L24.6813 6.41731C24.1076 5.49712 22.8365 5.18269 21.8418 5.71346L21.2951 6.00577C19.2163 7.11538 16.6179 5.72788 16.6179 3.50769V2.92308C16.6179 1.86058 15.6876 1 14.5391 1H12.4604C11.3119 1 10.3817 1.86058 10.3817 2.92308V3.50769C10.3817 5.72788 7.78322 7.11635 5.70447 6.00577L5.15776 5.71346C4.16308 5.18269 2.89193 5.49712 2.3182 6.41731L1.27882 8.08269C0.705088 9.00288 1.04496 10.1788 2.03964 10.7096L2.58635 11.0019C4.6651 12.1125 4.6651 14.8875 2.58635 15.9981L2.03964 16.2904C1.04496 16.8212 0.705088 17.9971 1.27882 18.9173L2.3182 20.5827C2.89193 21.5029 4.16308 21.8173 5.15776 21.2865L5.70447 20.9942C7.78322 19.8837 10.3817 21.2721 10.3817 23.4923V24.0769C10.3817 25.1394 11.3119 26 12.4604 26H14.5391C15.6876 26 16.6179 25.1394 16.6179 24.0769V23.4923C16.6179 21.2721 19.2163 19.8837 21.2951 20.9942L21.8418 21.2865C22.8365 21.8173 24.1076 21.5029 24.6813 20.5827L25.7207 18.9173C26.2944 17.9971 25.9546 16.8212 24.9599 16.2904L24.4132 15.9981C22.3344 14.8875 22.3344 12.1125 24.4132 11.0019L24.9599 10.7096C25.9546 10.1788 26.2955 9.00288 25.7207 8.08269Z"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
                <span class="menu-item" data-key="t-horizontal">Setting</span>
              </a>
            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow">
                <svg
                  width="25"
                  height="25"
                  viewBox="0 0 27 27"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.5 6.20833V8.29166"
                    stroke="#008AEE"
                    stroke-width="1.54688"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M13.5 18.7083V20.7917"
                    stroke="#008AEE"
                    stroke-width="1.54688"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M13.5 26C20.4036 26 26 20.4036 26 13.5C26 6.59644 20.4036 1 13.5 1C6.59644 1 1 6.59644 1 13.5C1 20.4036 6.59644 26 13.5 26Z"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M10.375 18.7083H15.0625C15.7531 18.7083 16.4155 18.434 16.9039 17.9456C17.3923 17.4572 17.6666 16.7948 17.6666 16.1042C17.6666 15.4135 17.3923 14.7511 16.9039 14.2627C16.4155 13.7744 15.7531 13.5 15.0625 13.5H11.9375C11.2468 13.5 10.5844 13.2256 10.0961 12.7373C9.60768 12.2489 9.33331 11.5865 9.33331 10.8958C9.33331 10.2052 9.60768 9.54279 10.0961 9.05441C10.5844 8.56604 11.2468 8.29167 11.9375 8.29167H16.625"
                    stroke="#008AEE"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>

                <span class="menu-item" data-key="t-apps">Finance</span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li>
                  <a href="#">
                    <i class="fa-solid fa-circle"></i
                    ><span data-key="t-calendar">Invoices</span>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="fa-solid fa-circle"></i
                    ><span data-key="t-chat">Payments</span>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="fa-solid fa-circle"></i
                    ><span data-key="t-gallery">Expenses</span>
                  </a>
                </li>

                <li>
                  <a href="javascript: void(0);" class="has-arrow">
                    <i class="fa-solid fa-circle"></i
                    ><span data-key="t-email">Bank Account</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                    <a href="apps-gallery.html">
                      <i class="fa-solid fa-circle"></i
                      ><span data-key="t-gallery">Bkash</span>
                    </a>
                    <a href="apps-gallery.html">
                      <i class="fa-solid fa-circle"></i
                      ><span data-key="t-gallery">Nagad</span>
                    </a>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
    <a href="#" @click="userLogout">
      <svg
        width="27"
        height="27"
        viewBox="0 0 27 27"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M19.0556 2.76261H23.2222C24.7564 2.76261 26 3.96443 26 5.44695V6.78912M19.0556 24.2374H23.2222C24.7564 24.2374 26 23.0356 26 21.553V20.2108M2.97958 23.4691L11.3129 25.885C13.0951 26.4018 14.8889 25.1121 14.8889 23.3138V3.6861C14.8889 1.88797 13.0951 0.598274 11.3129 1.11497L2.97958 3.53088C1.80464 3.87151 1 4.91658 1 6.10201V20.8979C1 22.0834 1.80464 23.1285 2.97958 23.4691Z"
          stroke="#008AEE"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M9.33431 13.5H9.33331"
          stroke="#008AEE"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M19.0555 13.5H26M26 13.5L23.2222 10.8156M26 13.5L23.2222 16.1843"
          stroke="#008AEE"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
      <span class="menu-item" data-key="t-horizontal">Log Out</span>
    </a>
  </li>

          </ul>
        </div>
        <!-- Sidebar -->
      </div>
    </div>
    <!-- Left Sidebar End -->

</template>


<script>
import axios from 'axios';
import { useRouter } from 'vue-router';

export default {
  props: {
    NexusPOSLOGO: {
      type: String,
      default: './front-end/assets/icons/nexus-pos-logo.svg',
    },
    FlagsUs: {
      type: String,
      default: './front-end/assets/img/flags/us.jpg',
    },
    FlagsSpain: {
      type: String,
      default: './front-end/assets/img/flags/spain.jpg',
    },
    FlagsGermany: {
      type: String,
      default: './front-end/assets/img/flags/germany.jpg',
    },
    FlagsItaly: {
      type: String,
      default: './front-end/assets/img/flags/italy.jpg',
    },
    FlagsRussia: {
      type: String,
      default: './front-end/assets/img/flags/russia.jpg',
    },
    ProfileLogo: {
      type: String,
      default: './front-end/assets/img/navbar-profile-logo.png',
    },
    CardEmployer: {
      type: String,
      default: './front-end/assets/icons/card-employe.svg',
    },
    CardClint: {
      type: String,
      default: './front-end/assets/icons/card-client.svg',
    },
    CardReports: {
      type: String,
      default: './front-end/assets/icons/card-reports.svg',
    },
    TableClint: {
      type: String,
      default: './front-end/assets/img/table-client-img.png',
    },
    CardProject: {
      type: String,
      default: './front-end/assets/icons/card-projects.svg',
    },
  },
};
</script>

<style>

</style>