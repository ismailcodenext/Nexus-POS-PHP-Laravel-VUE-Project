<template>
   <!------------------------------------ Navbar Start ------------------------------------>
 <nav id="page-topbar" class="isvertical-topbar">
    <div class="navbar-header">
      <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box">
          <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
              <img
              :src="passwordEyeIcon"
                alt=""
                width="38"
                height="38"
              />
            </span>
          </a>
        </div>

        <button
          type="button"
          class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn"
        >
          <i class="fa-solid fa-bars-staggered"></i>
        </button>

        <!-- navbar searchbar -->
        <div class="search-bar-box d-flex align-items-center">
          <input type="text" placeholder="Search..." />
          <button class="nav-src-btn">
            <svg
              width="22"
              height="22"
              viewBox="0 0 27 27"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M19.2967 16.9811H18.0695L17.6449 16.5566C19.1578 14.8045 20.0686 12.5274 20.0686 10.0343C20.0686 4.49228 15.5763 0 10.0343 0C4.49228 0 0 4.49228 0 10.0343C0 15.5763 4.49228 20.0686 10.0343 20.0686C12.5274 20.0686 14.8045 19.1578 16.5566 17.6527L16.9811 18.0772V19.2967L24.6998 27L27 24.6998L19.2967 16.9811ZM10.0343 16.9811C6.19811 16.9811 3.08748 13.8705 3.08748 10.0343C3.08748 6.19811 6.19811 3.08748 10.0343 3.08748C13.8705 3.08748 16.9811 6.19811 16.9811 10.0343C16.9811 13.8705 13.8705 16.9811 10.0343 16.9811Z"
                fill="#192045"
              />
            </svg>
          </button>
        </div>
        <!-- end navbar searchbar -->
      </div>

      <div class="d-flex align-items-center">
        <button
          class="light-mode-button"
          aria-label="Toggle Light Mode"
          onclick="toggle_light_mode()"
        >
          <span></span>
          <span></span>
        </button>

        <div class="dropdown d-inline-block">
          <button
            type="button"
            class="btn header-item search-icon"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <svg
              width="25"
              height="25"
              viewBox="0 0 27 27"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M19.2967 16.9811H18.0695L17.6449 16.5566C19.1578 14.8045 20.0686 12.5274 20.0686 10.0343C20.0686 4.49228 15.5763 0 10.0343 0C4.49228 0 0 4.49228 0 10.0343C0 15.5763 4.49228 20.0686 10.0343 20.0686C12.5274 20.0686 14.8045 19.1578 16.5566 17.6527L16.9811 18.0772V19.2967L24.6998 27L27 24.6998L19.2967 16.9811ZM10.0343 16.9811C6.19811 16.9811 3.08748 13.8705 3.08748 10.0343C3.08748 6.19811 6.19811 3.08748 10.0343 3.08748C13.8705 3.08748 16.9811 6.19811 16.9811 10.0343C16.9811 13.8705 13.8705 16.9811 10.0343 16.9811Z"
                fill="#192045"
              />
            </svg>
          </button>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
            <form class="p-2">
              <div class="search-box">
                <div class="position-relative">
                  <input
                    type="text"
                    class="form-control rounded border-0"
                    placeholder="Search..."
                  />
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="d-flex align-items-center toggle-full-screen">
          <button
            class="js-toggle-fullscreen-btn toggle-fullscreen-btn"
            aria-label="Enter fullscreen mode"
            hidden
          >
            <svg
              width="27"
              height="27"
              class="toggle-fullscreen-svg"
              viewBox="0 0 30 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g class="icon-fullscreen-enter">
                <path
                  d="M2 7.5H0V3C0 2.20435 0.31607 1.44129 0.87868 0.87868C1.44129 0.31607 2.20435 0 3 0H7.5V2H2V7.5Z"
                  fill="#192045"
                />
                <path
                  d="M30 7.5H28V2H22.5V0H27C27.7956 0 28.5587 0.31607 29.1213 0.87868C29.6839 1.44129 30 2.20435 30 3V7.5Z"
                  fill="#192045"
                />
                <path
                  d="M7.5 30H3C2.20435 30 1.44129 29.6839 0.87868 29.1213C0.31607 28.5587 0 27.7956 0 27V22.5H2V28H7.5V30Z"
                  fill="#192045"
                />
                <path
                  d="M27 30H22.5V28H28V22.5H30V27C30 27.7956 29.6839 28.5587 29.1213 29.1213C28.5587 29.6839 27.7956 30 27 30Z"
                  fill="#192045"
                />
                <path
                  d="M9.00052 10.5C8.80311 10.5011 8.60742 10.4633 8.42466 10.3887C8.24191 10.314 8.07568 10.204 7.93552 10.065L6.43552 8.565C6.15307 8.28255 5.99438 7.89946 5.99438 7.5C5.99438 7.10055 6.15307 6.71746 6.43552 6.435C6.71798 6.15255 7.10107 5.99387 7.50052 5.99387C7.89998 5.99387 8.28307 6.15255 8.56552 6.435L10.0655 7.935C10.2061 8.07445 10.3177 8.24035 10.3939 8.42314C10.47 8.60593 10.5092 8.80199 10.5092 9C10.5092 9.19802 10.47 9.39408 10.3939 9.57687C10.3177 9.75966 10.2061 9.92556 10.0655 10.065C9.92536 10.204 9.75914 10.314 9.57638 10.3887C9.39363 10.4633 9.19793 10.5011 9.00052 10.5Z"
                  fill="#192045"
                />
                <path
                  d="M20.9995 10.5C20.8021 10.5011 20.6064 10.4633 20.4237 10.3887C20.2409 10.314 20.0747 10.204 19.9345 10.065C19.7939 9.92556 19.6824 9.75966 19.6062 9.57687C19.5301 9.39408 19.4908 9.19802 19.4908 9C19.4908 8.80199 19.5301 8.60593 19.6062 8.42314C19.6824 8.24035 19.7939 8.07445 19.9345 7.935L21.4345 6.435C21.717 6.15255 22.1001 5.99387 22.4995 5.99387C22.899 5.99387 23.2821 6.15255 23.5645 6.435C23.847 6.71746 24.0057 7.10055 24.0057 7.5C24.0057 7.89946 23.847 8.28255 23.5645 8.565L22.0645 10.065C21.9244 10.204 21.7582 10.314 21.5754 10.3887C21.3926 10.4633 21.197 10.5011 20.9995 10.5Z"
                  fill="#192045"
                />
                <path
                  d="M7.49991 24C7.3025 24.0011 7.10681 23.9633 6.92405 23.8887C6.74129 23.814 6.57507 23.704 6.43491 23.565C6.29432 23.4256 6.18272 23.2597 6.10657 23.0769C6.03042 22.8941 5.99121 22.698 5.99121 22.5C5.99121 22.302 6.03042 22.1059 6.10657 21.9231C6.18272 21.7403 6.29432 21.5744 6.43491 21.435L7.93491 19.935C8.21736 19.6525 8.60046 19.4939 8.99991 19.4939C9.39936 19.4939 9.78245 19.6525 10.0649 19.935C10.3474 20.2175 10.506 20.6006 10.506 21C10.506 21.3995 10.3474 21.7825 10.0649 22.065L8.56491 23.565C8.42475 23.704 8.25852 23.814 8.07577 23.8887C7.89301 23.9633 7.69732 24.0011 7.49991 24Z"
                  fill="#192045"
                />
                <path
                  d="M22.5 24C22.3026 24.0011 22.1069 23.9633 21.9242 23.8887C21.7414 23.814 21.5752 23.704 21.435 23.565L19.935 22.065C19.6526 21.7825 19.4939 21.3995 19.4939 21C19.4939 20.8022 19.5329 20.6064 19.6085 20.4236C19.6842 20.2409 19.7952 20.0749 19.935 19.935C20.0749 19.7951 20.2409 19.6842 20.4237 19.6085C20.6064 19.5328 20.8022 19.4939 21 19.4939C21.3995 19.4939 21.7826 19.6525 22.065 19.935L23.565 21.435C23.7056 21.5744 23.8172 21.7403 23.8934 21.9231C23.9695 22.1059 24.0087 22.302 24.0087 22.5C24.0087 22.698 23.9695 22.8941 23.8934 23.0769C23.8172 23.2597 23.7056 23.4256 23.565 23.565C23.4249 23.704 23.2587 23.814 23.0759 23.8887C22.8931 23.9633 22.6974 24.0011 22.5 24Z"
                  fill="#192045"
                />
              </g>
              <g class="icon-fullscreen-leave">
                <path
                  d="M9.00052 10.5C8.80311 10.5011 8.60742 10.4633 8.42466 10.3887C8.24191 10.314 8.07568 10.204 7.93552 10.065L6.43552 8.565C6.15307 8.28255 5.99438 7.89946 5.99438 7.5C5.99438 7.10055 6.15307 6.71746 6.43552 6.435C6.71798 6.15255 7.10107 5.99387 7.50052 5.99387C7.89998 5.99387 8.28307 6.15255 8.56552 6.435L10.0655 7.935C10.2061 8.07445 10.3177 8.24035 10.3939 8.42314C10.47 8.60593 10.5092 8.80199 10.5092 9C10.5092 9.19802 10.47 9.39408 10.3939 9.57687C10.3177 9.75966 10.2061 9.92556 10.0655 10.065C9.92536 10.204 9.75914 10.314 9.57638 10.3887C9.39363 10.4633 9.19793 10.5011 9.00052 10.5Z"
                  fill="#192045"
                />
                <path
                  d="M20.9995 10.5C20.8021 10.5011 20.6064 10.4633 20.4237 10.3887C20.2409 10.314 20.0747 10.204 19.9345 10.065C19.7939 9.92556 19.6824 9.75966 19.6062 9.57687C19.5301 9.39408 19.4908 9.19802 19.4908 9C19.4908 8.80199 19.5301 8.60593 19.6062 8.42314C19.6824 8.24035 19.7939 8.07445 19.9345 7.935L21.4345 6.435C21.717 6.15255 22.1001 5.99387 22.4995 5.99387C22.899 5.99387 23.2821 6.15255 23.5645 6.435C23.847 6.71746 24.0057 7.10055 24.0057 7.5C24.0057 7.89946 23.847 8.28255 23.5645 8.565L22.0645 10.065C21.9244 10.204 21.7582 10.314 21.5754 10.3887C21.3926 10.4633 21.197 10.5011 20.9995 10.5Z"
                  fill="#192045"
                />
                <path
                  d="M7.49991 24C7.3025 24.0011 7.10681 23.9633 6.92405 23.8887C6.74129 23.814 6.57507 23.704 6.43491 23.565C6.29432 23.4256 6.18272 23.2597 6.10657 23.0769C6.03042 22.8941 5.99121 22.698 5.99121 22.5C5.99121 22.302 6.03042 22.1059 6.10657 21.9231C6.18272 21.7403 6.29432 21.5744 6.43491 21.435L7.93491 19.935C8.21736 19.6525 8.60046 19.4939 8.99991 19.4939C9.39936 19.4939 9.78245 19.6525 10.0649 19.935C10.3474 20.2175 10.506 20.6006 10.506 21C10.506 21.3995 10.3474 21.7825 10.0649 22.065L8.56491 23.565C8.42475 23.704 8.25852 23.814 8.07577 23.8887C7.89301 23.9633 7.69732 24.0011 7.49991 24Z"
                  fill="#192045"
                />
                <path
                  d="M22.5 24C22.3026 24.0011 22.1069 23.9633 21.9242 23.8887C21.7414 23.814 21.5752 23.704 21.435 23.565L19.935 22.065C19.6526 21.7825 19.4939 21.3995 19.4939 21C19.4939 20.8022 19.5329 20.6064 19.6085 20.4236C19.6842 20.2409 19.7952 20.0749 19.935 19.935C20.0749 19.7951 20.2409 19.6842 20.4237 19.6085C20.6064 19.5328 20.8022 19.4939 21 19.4939C21.3995 19.4939 21.7826 19.6525 22.065 19.935L23.565 21.435C23.7056 21.5744 23.8172 21.7403 23.8934 21.9231C23.9695 22.1059 24.0087 22.302 24.0087 22.5C24.0087 22.698 23.9695 22.8941 23.8934 23.0769C23.8172 23.2597 23.7056 23.4256 23.565 23.565C23.4249 23.704 23.2587 23.814 23.0759 23.8887C22.8931 23.9633 22.6974 24.0011 22.5 24Z"
                  fill="#192045"
                />
              </g>
            </svg>
          </button>
        </div>

        <div class="dropdown d-inline-block">
          <button
            type="button"
            class="btn header-item noti-icon right-bar-toggle notification-icon"
            id="right-bar-toggle-v"
          >
            <svg
              class="topbar-setting"
              width="30"
              height="30"
              viewBox="0 0 32 32"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M15.9998 20.6154C18.7551 20.6154 20.9888 18.549 20.9888 16C20.9888 13.451 18.7551 11.3846 15.9998 11.3846C13.2444 11.3846 11.0108 13.451 11.0108 16C11.0108 18.549 13.2444 20.6154 15.9998 20.6154Z"
                stroke="#192045"
                stroke-width="1.5"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M30.6649 9.49923L29.4176 7.50077C28.7291 6.39654 27.2037 6.01923 26.0101 6.65615L25.3541 7.00692C22.8596 8.33846 19.7415 6.67346 19.7415 4.00923V3.30769C19.7415 2.03269 18.6252 1 17.247 1H14.7525C13.3743 1 12.258 2.03269 12.258 3.30769V4.00923C12.258 6.67346 9.13986 8.33962 6.64537 7.00692L5.98931 6.65615C4.7957 6.01923 3.27031 6.39654 2.58183 7.50077L1.33459 9.49923C0.646106 10.6035 1.05396 12.0146 2.24757 12.6515L2.90362 13.0023C5.39812 14.335 5.39812 17.665 2.90362 18.9977L2.24757 19.3485C1.05396 19.9854 0.646106 21.3965 1.33459 22.5008L2.58183 24.4992C3.27031 25.6035 4.7957 25.9808 5.98931 25.3438L6.64537 24.9931C9.13986 23.6604 12.258 25.3265 12.258 27.9908V28.6923C12.258 29.9673 13.3743 31 14.7525 31H17.247C18.6252 31 19.7415 29.9673 19.7415 28.6923V27.9908C19.7415 25.3265 22.8596 23.6604 25.3541 24.9931L26.0101 25.3438C27.2037 25.9808 28.7291 25.6035 29.4176 24.4992L30.6649 22.5008C31.3533 21.3965 30.9455 19.9854 29.7519 19.3485L29.0958 18.9977C26.6013 17.665 26.6013 14.335 29.0958 13.0023L29.7519 12.6515C30.9455 12.0146 31.3546 10.6035 30.6649 9.49923Z"
                stroke="#192045"
                stroke-width="1.5"
                stroke-miterlimit="10"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
        </div>

        <div class="dropdown d-inline-block language-switch">
          <button
            type="button"
            class="btn header-item language-switch-icon"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <svg
              width="30"
              height="30"
              viewBox="0 0 30 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M15 0C6.72937 0 0 6.72937 0 15C0 23.2706 6.72937 30 15 30C23.2706 30 30 23.2706 30 15C30 6.72937 23.2706 0 15 0ZM16.25 1.30938V2.86625L14.1163 5H13.3837L10.4206 2.03687C11.8538 1.52875 13.3944 1.25 15 1.25C15.4219 1.25 15.8381 1.27188 16.25 1.30938ZM1.25 15C1.25 11.9625 2.24187 9.15312 3.91625 6.875H9.11625L10.625 8.38375V10.9913L8.49125 13.125L10.3663 15L9.11625 16.25H4.7025L6.4525 20.625H11.875V24.1162L8.75 27.2412C4.3025 24.9612 1.25 20.3319 1.25 15ZM15 28.75C13.2238 28.75 11.5269 28.4075 9.96688 27.7919L13.125 24.6338V19.375H7.29813L6.54813 17.5H9.63438L12.1344 15L10.2594 13.125L11.8756 11.5087V7.86625L9.63375 5.625H4.95438C6.14437 4.35063 7.5725 3.3025 9.16813 2.55188L12.8663 6.25H14.6337L17.5 3.38375V1.48188C19.1644 1.78875 20.7256 2.39313 22.1231 3.2425L17.5 7.86625V13.125H20.625V20.2588L24.8969 24.5306C22.3944 27.1287 18.8838 28.75 15 28.75ZM25.7244 23.5906L21.875 19.7412V11.875H18.75V8.38375L23.1787 3.955C26.5569 6.4625 28.75 10.4794 28.75 15C28.75 18.2488 27.615 21.235 25.7244 23.5906Z"
                fill="#192045"
              />
            </svg>
          </button>
          <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a
              href="javascript:void(0);"
              class="dropdown-item notify-item language"
              data-lang="eng"
            >
              <img
              :src="FlagsUs"
                alt="user-image"
                class="me-1"
                height="12"
              />
              <span class="align-middle">English</span>
            </a>

            <!-- item-->
            <a
              href="javascript:void(0);"
              class="dropdown-item notify-item language"
              data-lang="sp"
            >
              <img
              :src="FlagsSpain"
                alt="user-image"
                class="me-1"
                height="12"
              />
              <span class="align-middle">Spanish</span>
            </a>

            <!-- item-->
            <a
              href="javascript:void(0);"
              class="dropdown-item notify-item language"
              data-lang="gr"
            >
              <img
              :src="FlagsGermany"
                alt="user-image"
                class="me-1"
                height="12"
              />
              <span class="align-middle">German</span>
            </a>

            <!-- item-->
            <a
              href="javascript:void(0);"
              class="dropdown-item notify-item language"
              data-lang="it"
            >
              <img
              :src="FlagsItaly"
                alt="user-image"
                class="me-1"
                height="12"
              />
              <span class="align-middle">Italian</span>
            </a>

            <!-- item-->
            <a
              href="javascript:void(0);"
              class="dropdown-item notify-item language"
              data-lang="ru"
            >
              <img
              :src="FlagsRussia"
                alt="user-image"
                class="me-1"
                height="12"
              />
              <span class="align-middle">Russian</span>
            </a>
          </div>
        </div>

        <div class="dropdown d-inline-block">
          <button
            type="button"
            class="btn header-item noti-icon"
            id="page-header-notifications-dropdown-v"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <svg
              width="26"
              height="26"
              viewBox="0 0 26 26"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M9.45455 3.4881C6.04947 4.61889 3.63669 7.33014 3.63653 10.5164V16.7253L0.375499 19.3629C0.144442 19.5409 0 19.7945 0 20.0759V20.2035C0 21.2802 1.05824 22.153 2.36364 22.153H8.30287C8.56913 24.0982 10.5705 25.6098 13 25.6098C15.4295 25.6098 17.4309 24.0982 17.6971 22.153H23.6364C24.9418 22.153 26 21.2802 26 20.2035V20.0761C26.0001 19.7947 25.8557 19.541 25.6245 19.3629L22.3638 16.7256V10.5167C22.3637 7.33036 19.9507 4.61872 16.5455 3.48799V2.43688C16.5455 1.16681 15.3593 0.540947 14.8932 0.348687C14.2864 0.0983808 13.6138 0 13 0C12.3862 0 11.7136 0.0983808 11.1068 0.348687C10.6407 0.540947 9.45455 1.16681 9.45455 2.43688V3.4881ZM14.0955 2.92425C14.0894 2.94107 14.083 2.95765 14.0764 2.97398C13.723 2.94113 13.364 2.92425 13.0001 2.92425C12.6362 2.92425 12.2771 2.94114 11.9237 2.97401C11.917 2.95767 11.9106 2.94108 11.9045 2.92425H11.8182V2.43688C11.8182 2.16773 12.3468 1.9495 13 1.9495C13.6532 1.9495 14.1818 2.16773 14.1818 2.43688V2.92425H14.0955ZM15.3025 22.153H10.6975C10.9403 23.0167 11.879 23.6603 13 23.6603C14.121 23.6603 15.0597 23.0167 15.3025 22.153ZM6.00016 10.5164C6.00035 7.41792 9.11241 4.87375 13.0001 4.87375C16.8879 4.87375 20 7.41792 20.0001 10.5164H6.00016ZM6.00016 10.5164H20.0001V16.7256C20.0001 17.2493 20.2555 17.7509 20.7089 18.1175L23.288 20.2035H2.71208L5.6376 17.8373C5.86065 17.6605 6.00016 17.4119 6.00016 17.1347V10.5164Z"
                fill="#192045"
              />
            </svg>

            <span class="noti-dot"></span>
          </button>
          <div
            class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 page-header-notifications-dropdown-v"
            aria-labelledby="page-header-notifications-dropdown-v"
          >
            <div class="p-3">
              <div class="row align-items-center">
                <div class="col">
                  <h5 class="m-0 font-size-15">Notifications</h5>
                </div>
                <div class="col-auto">
                  <a
                    href="#!"
                    class="small fw-semibold text-decoration-underline"
                  >
                    Mark all as read</a
                  >
                </div>
              </div>
            </div>
            <div data-simplebar style="max-height: 250px">
              <a href="#!" class="text-reset notification-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <img
                    :src="ProfileLogo"
                      class="rounded-circle avatar-sm"
                      alt="user-pic"
                    />
                  </div>
                  <div class="flex-grow-1">
                    <p class="text-muted font-size-13 mb-0 float-end">
                      1 hour ago
                    </p>
                    <h6 class="mb-1">James Lemire</h6>
                    <div>
                      <p class="mb-0">
                        It will seem like simplified English.
                      </p>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#!" class="text-reset notification-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 avatar-sm me-3">
                    <span
                      class="avatar-title bg-primary rounded-circle font-size-18"
                    >
                      <i class="fa-regular fa-user"></i>
                    </span>
                  </div>
                  <div class="flex-grow-1">
                    <p class="text-muted font-size-13 mb-0 float-end">
                      3 min ago
                    </p>
                    <h6 class="mb-1">Your order is placed</h6>
                    <div>
                      <p class="mb-0">
                        If several languages coalesce the grammar
                      </p>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#!" class="text-reset notification-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 avatar-sm me-3">
                    <span
                      class="avatar-title bg-success rounded-circle font-size-18"
                    >
                      <i class="fa-regular fa-user"></i>
                    </span>
                  </div>
                  <div class="flex-grow-1">
                    <p class="text-muted font-size-13 mb-0 float-end">
                      8 min ago
                    </p>
                    <h6 class="mb-1">Your item is shipped</h6>
                    <div>
                      <p class="mb-0">
                        If several languages coalesce the grammar
                      </p>
                    </div>
                  </div>
                </div>
              </a>

              <a href="#!" class="text-reset notification-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <img
                    :src="ProfileLogo"
                      class="rounded-circle avatar-sm"
                      alt="user-pic"
                    />
                  </div>
                  <div class="flex-grow-1">
                    <p class="text-muted font-size-13 mb-0 float-end">
                      1 hour ago
                    </p>
                    <h6 class="mb-1">Salena Layfield</h6>
                    <div>
                      <p class="mb-1">
                        As a skeptical Cambridge friend of mine occidental.
                      </p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="p-2 border-top d-grid">
              <a
                class="btn btn-sm btn-link font-size-14 btn-block text-center"
                href="javascript:void(0)"
              >
                <i class="uil-arrow-circle-right me-1"></i>
                <span>View More..</span>
              </a>
            </div>
          </div>
        </div>

        <div class="dropdown d-inline-block">
          <button
            type="button"
            class="btn header-item user text-start d-flex align-items-center"
            id="page-header-user-dropdown-v"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <img
              class="rounded-circle header-profile-user"
               :src="ProfileLogo"
              alt="Header Avatar"
            />
          </button>
          <div class="dropdown-menu dropdown-menu-end pt-0 profile-dropdown">
            <div class="p-3 border-bottom">
              <h6 class="mb-0">Martin Gurley</h6>
              <a href="# " class="mb-0 font-size-11 text-muted">
                martin.gurley@email.com
              </a>
            </div>
            <a class="dropdown-item" href="contacts-profile.html"
              ><i
                class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"
              ></i>
              <span class="align-middle">Profile</span></a
            >
            <a class="dropdown-item" href="apps-chat.html"
              ><i
                class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-2"
              ></i>
              <span class="align-middle">Messages</span></a
            >
            <a class="dropdown-item" href="pages-faqs.html"
              ><i
                class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-2"
              ></i>
              <span class="align-middle">Help</span></a
            >
            <a class="dropdown-item d-flex align-items-center" href="#"
              ><i
                class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-2"
              ></i>
              <span class="align-middle me-3">Settings</span
              ><span class="badge badge-soft-success ms-auto">New</span></a
            >
            <a class="dropdown-item" href="auth-lock-screen.html"
              ><i
                class="mdi mdi-lock text-muted font-size-16 align-middle me-2"
              ></i>
              <span class="align-middle">Lock screen</span></a
            >
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" @click="userLogout" href="auth-logout.html"
              ><i
                class="mdi mdi-logout text-muted font-size-16 align-middle me-2"
              ></i>
              <span class="align-middle">Logout</span></a
            >
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!---------------------------------------------- navbar end  ---------------------------------------------->



  <nav class="ishorizontal-topbar topnav"></nav>
    <!-- Navbar End -->

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