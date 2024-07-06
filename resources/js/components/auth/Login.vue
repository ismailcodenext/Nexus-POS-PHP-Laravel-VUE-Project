<template>
    <div class="container">
        <!-- Sign in Form Start -->
      <div class="card">
        <div class="card-wrapper">
          <div class="card-image">
            <img src="./assets/img/sign-in-card-img.png" alt="" />
          </div>

          <div class="card-item">
            <div class="brand-logo">
              <img src="./assets/img/pos-nav-logo.svg" alt="" />
            </div>
            <h2>Welcome to NEXUS POS</h2>

            <form>
              <input type="text" id="username" placeholder="Enter a mail" />

              <label for="password">
                <input
                  type="password"
                  id="password"
                  placeholder="Enter password"
                />
                <a href="#"
                  ><img
                    class="hide-icon"
                    src="./assets/icons/password-eye-icon.svg"
                    alt=""
                /></a>
              </label>
              <a href="#" class="forgot-password">Forgot Password?</a>

              <button type="submit">SIGN IN</button>
            </form>

            <div class="switch">
              Dont have an account?
              <a href="#" onclick="switchCard()">SIGN UP</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Sign in Form End -->

    </div>
</template>

