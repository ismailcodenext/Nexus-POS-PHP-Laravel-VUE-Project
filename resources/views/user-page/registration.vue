<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-10 center-screen">
                <div class="card animated fadeIn w-100 p-3">
                    <div class="card-body">
                        <h4>Sign Up</h4>
                        <hr/>
                        <div class="container-fluid m-0 p-0">
                            <div class="row m-0 p-0">
                                <div class="col-md-4 p-2">
                                    <br/>
                                    <img class="w-15" :src="imagePreview" v-if="imagePreview" />
                                    <br/>
                                    <label class="form-label">Image</label>
                                    <input @change="previewImage" type="file" class="form-control" ref="img_url">
                                </div>
                                <div class="col-md-4 p-2">
                                    <label>Email Address</label>
                                    <input v-model="formData.email" placeholder="User Email" class="form-control" type="email"/>
                                </div>
                                <div class="col-md-4 p-2">
                                    <label>First Name</label>
                                    <input v-model="formData.firstName" placeholder="First Name" class="form-control" type="text"/>
                                </div>
                                <div class="col-md-4 p-2">
                                    <label>Last Name</label>
                                    <input v-model="formData.lastName" placeholder="Last Name" class="form-control" type="text"/>
                                </div>
                                <div class="col-md-4 p-2">
                                    <label>Mobile Number</label>
                                    <input v-model="formData.mobile" placeholder="Mobile" class="form-control" type="tel"/>
                                </div>
                                <div class="col-md-4 p-2">
                                    <label>Password</label>
                                    <input v-model="formData.password" placeholder="User Password" class="form-control" type="password"/>
                                </div>
                            </div>

                            <input v-model="formData.status" type="hidden"/>
                            <input v-model="formData.role" type="hidden"/>
                            <div class="row m-0 p-0">
                                <div class="col-md-4 p-2">
                                    <button @click="onRegistration" class="btn mt-3 w-100 bg-gradient-primary">Complete</button>
                                </div>
                            </div>
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
            formData: {
                email: '',
                firstName: '',
                lastName: '',
                mobile: '',
                password: '',
                status: 'approved',
                role: 'user'
            },
            imagePreview: null
        };
    },
    methods: {
        previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                this.imagePreview = URL.createObjectURL(file);
            }
        },
        async onRegistration() {
            let formData = new FormData();
            let imgInput = this.$refs.img_url;
            let imgFile = imgInput.files[0];
            if (imgFile) {
                formData.append('img', imgFile);
            }
            formData.append('firstName', this.formData.firstName);
            formData.append('lastName', this.formData.lastName);
            formData.append('email', this.formData.email);
            formData.append('password', this.formData.password);
            formData.append('mobile', this.formData.mobile);
            formData.append('status', this.formData.status);
            formData.append('role', this.formData.role);

            try {
                showLoader();
                let res = await axios.post("/user-registration", formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                });
                hideLoader();
                if (res.status === 200 && res.data.status === 'success') {
                    window.location.href = "/nexus-login-page";
                } else {
                    errorToast(res.data.message);
                }
            } catch (error) {
                hideLoader();
                errorToast('An error occurred during registration. Please try again later.');
                console.error(error);
            }
        }
    }
};
</script>
