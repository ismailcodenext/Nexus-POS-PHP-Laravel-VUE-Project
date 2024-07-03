<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 animated fadeIn col-lg-6 center-screen">
                <div class="card w-90 p-4">
                    <div class="card-body">
                        <h4>SIGN IN</h4>
                        <img class="nav-logo mx-5" :src="logoSrc" style="width: 250px; height:auto;" alt="logo">
                        <br/>
                        <input v-model="email" placeholder="User Email" class="form-control" type="email"/>
                        <br/>
                        <input v-model="password" placeholder="User Password" class="form-control" type="password"/>
                        <br/>
                        <button @click="submitLogin" class="btn w-100 bg-gradient-primary">Next</button>
                        <hr/>
                        <div class="float-end mt-3">
                            <span>
                                <a class="text-center ms-3 h6" :href="registrationUrl">Sign Up</a>
                                <span class="ms-1">|</span>
                                <a class="text-center ms-3 h6" :href="forgotPasswordUrl">Forget Password</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            email: '',
            password: ''
        };
    },
    mounted() {
        this.logoSrc = this.asset('images/logo.jpg');
        this.registrationUrl = this.url('/registration');
        this.forgotPasswordUrl = this.url('/sendOtp');
    },
    methods: {
        asset(path) {
            return `${window.location.origin}/${path}`;
        },
        url(path) {
            return `${window.location.origin}${path}`;
        },
        async submitLogin() {
            try {
                const response = await axios.post('/user-login', {
                    email: this.email,
                    password: this.password
                }, {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                });

                if (response.status === 200 && response.data.status === 'success') {
                    localStorage.setItem('authToken', response.data.token); // Store token
                    window.location.href = '/dashboard';
                } else {
                    alert(response.data.message);
                }
            } catch (error) {
                console.error(error);
                alert('An error occurred during login. Please try again.');
            }
        }
    }
};
</script>

