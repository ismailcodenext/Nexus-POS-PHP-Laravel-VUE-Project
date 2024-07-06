<template>
    <div class="container">
      <!-- Sign in Form Start -->
      <div class="card" v-if="showSignIn">
        <div class="card-wrapper">
          <div class="card-image">
            <img :src="signInImage" alt="Sign In Image" />
          </div>
          <div class="card-item">
            <div class="brand-logo">
              <img :src="brandLogo" alt="Brand Logo" />
            </div>
            <h2>Welcome to NEXUS POS</h2>
            <form @submit.prevent="handleSignIn">
              <input type="email" v-model="email" placeholder="Enter email" required />
              <label for="password">
                <input
                  type="password"
                  v-model="password"
                  placeholder="Enter password"
                  required
                />
                <a href="#">
                  <img class="hide-icon" :src="passwordEyeIcon" alt="Show/Hide Password" />
                </a>
              </label>
              <a href="#" class="forgot-password">Forgot Password?</a>
              <button type="submit">SIGN IN</button>
            </form>
            <div class="switch">
              Don't have an account?
              <a href="#" @click="switchCard">SIGN UP</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Sign in Form End -->

      <!-- Registration Form Start -->
      <div class="card" v-else>
        <div class="card-wrapper">
          <div class="card-image">
            <img :src="signUpImage" alt="Sign Up Image" />
          </div>
          <div class="card-item">
            <h2>Create an account</h2>
            <form @submit.prevent="handleSignUp">
              <input type="text" v-model="fullname" placeholder="Name" required />
              <input type="email" v-model="email" placeholder="Enter email" required />
              <input type="number" v-model="phone" placeholder="Phone number" required />
              <label for="signupPassword">
                <input
                  type="password"
                  v-model="signupPassword"
                  placeholder="Enter password"
                  required
                />
                <a href="#">
                  <img class="hide-icon" :src="passwordEyeIcon" alt="Show/Hide Password" />
                </a>
              </label>
              <label for="checkbox" class="checkbox">
                <input type="checkbox" v-model="acceptPolicy" required />
                <h6>
                  I accept the <a href="#">Privacy Policy.</a>
                </h6>
              </label>
              <button type="submit">SIGN UP</button>
            </form>
            <div class="switch">
              Already have an account?
              <a href="#" @click="switchCard">SIGN IN</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Registration Form End -->
    </div>
  </template>

  <script>
  import axios from 'axios';
  import { useRouter } from 'vue-router';

  export default {
    props: {
      signInImage: {
        type: String,
        default: './front-end/assets/img/sign-in-card-img.png',
      },
      signUpImage: {
        type: String,
        default: './front-end/assets/img/sign-up-card-bg.png',
      },
      brandLogo: {
        type: String,
        default: './front-end/assets/img/pos-nav-logo.svg',
      },
      passwordEyeIcon: {
        type: String,
        default: './front-end/assets/icons/password-eye-icon.svg',
      },
    },
    data() {
      return {
        showSignIn: true,
        email: '',
        password: '',
        fullname: '',
        phone: '',
        signupPassword: '',
        acceptPolicy: false,
      };
    },
    methods: {
      switchCard() {
        this.showSignIn = !this.showSignIn;
      },
      async handleSignUp() {
        if (!this.acceptPolicy) {
          alert('Please accept the privacy policy.');
          return;
        }

        try {
          const response = await axios.post('/api/register', {
            firstName: this.fullname,
            email: this.email,
            mobile: this.phone,
            password: this.signupPassword,
          });

          if (response.data.status === 'success') {
            alert('Registration successful!');
            this.switchCard(); // Switch to sign-in form
          } else {
            alert('Registration failed: ' + response.data.message);
          }
        } catch (error) {
          alert('An error occurred during registration. Please try again later.');
          console.error(error);
        }
      },
      async handleSignIn() {
        try {
          const response = await axios.post('/api/login', {
            email: this.email,
            password: this.password,
          });

          if (response.data.status === 'success') {
            // Store token in localStorage
            localStorage.setItem('authToken', response.data.token);

            // Navigate to dashboard
            this.$router.push({ name: 'dashboard' });
          } else {
            alert('Login failed: ' + response.data.message);
          }
        } catch (error) {
          alert('An error occurred during login. Please try again later.');
          console.error(error);
        }
      },
    },
  };
  </script>

  <style>
  /* Add your styles here */
  </style>
