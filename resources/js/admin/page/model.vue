<template>
    <section  class="modal" @click.self="closeModal">
      <div class="modal-content">
        <div id="popup-modal">
          <form @submit.prevent="submitForm" id="signup">
            <div class="modal-title">
              <h1>Create Modal</h1>
              <span class="close-btn close" @click="closeModal">
                <i class="fa-solid fa-xmark"></i>
              </span>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label class="data">
                  <input
                    type="text"
                    name="firstName"
                    placeholder="Enter your full name"
                    v-model="form.firstName"
                    required
                  /><br />
                </label>
                <label class="data">
                  <input
                    type="email"
                    name="email"
                    placeholder="Enter your email"
                    v-model="form.email"
                    required
                  /><br />
                </label>
                <label class="data">
                  <input
                    type="text"
                    name="Username"
                    placeholder="Enter your email or username"
                    v-model="form.username"
                    required
                  /><br />
                </label>
                <label class="country">
                  <select name="country" v-model="form.country" required>
                    <option value="" disabled>Select Your Country</option>
                    <option>Bangladesh</option>
                    <option>Saudi Arabia</option>
                    <option>America</option>
                    <option>Brazil</option>
                  </select>
                  <br />
                </label>
                <div class="datepicker-wrapper">
                  <label class="input-header">Choose a Date</label>
                  <div class="controls datepick_wrap">
                    <input
                      id="datepicks"
                      class="datepicker form-control"
                      placeholder="Select date"
                      type="text"
                      v-model="form.date"
                    />
                    <label class="calendar-icon" for="datepicks">
                      <!-- <img src="./assets/icons/calender.svg" alt="" /> -->
                    </label>
                  </div>
                </div>
                <fieldset class="radioOrCheckboxes">
                  <label class="input-header">Programming Skills</label>
                  <div class="skills">
                    <div class="skill-item">
                      <label>
                        <input
                          type="checkbox"
                          value="HTML"
                          v-model="form.skills"
                        />
                        HTML
                      </label>
                      <label>
                        <input
                          type="checkbox"
                          value="CSS"
                          v-model="form.skills"
                        />
                        CSS
                      </label>
                      <label>
                        <input
                          type="checkbox"
                          value="JavaScript"
                          v-model="form.skills"
                        />
                        JavaScript
                      </label>
                    </div>
                    <div class="skill-item">
                      <label>
                        <input
                          type="checkbox"
                          value="React"
                          v-model="form.skills"
                        />
                        React
                      </label>
                      <label>
                        <input
                          type="checkbox"
                          value="Angular"
                          v-model="form.skills"
                        />
                        Angular
                      </label>
                    </div>
                  </div>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <label class="data">
                  <input
                    type="number"
                    name="secondName"
                    placeholder="Enter your phone number"
                    v-model="form.phoneNumber"
                    required
                  />
                </label>
                <label class="data">
                  <input
                    type="password"
                    name="password"
                    placeholder="Enter your password"
                    v-model="form.password"
                    required
                  /><br />
                </label>
                <fieldset class="radioOrCheckboxes">
                  <label class="input-header">Gender</label>
                  <div class="gender">
                    <label class="male">
                      <input
                        type="radio"
                        name="gender"
                        value="male"
                        v-model="form.gender"
                      />
                      <span>Male </span>
                    </label>
                    <label class="female">
                      <input
                        type="radio"
                        name="gender"
                        value="female"
                        v-model="form.gender"
                      />
                      <span>Female</span>
                    </label>
                  </div>
                </fieldset>
                <label class="data textarea">
                  <textarea
                    name="bio"
                    rows="6"
                    placeholder="Type Your Messages..."
                    v-model="form.bio"
                  ></textarea
                  ><br />
                </label>
                <div class="upload-profile">
                  <div class="item">
                    <div class="img-box">
                      <svg
                        width="32"
                        height="32"
                        viewBox="0 0 50 50"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                      >
                        <rect
                          width="50"
                          height="50"
                          fill="url(#pattern0_1204_6)"
                          fill-opacity="0.5"
                        />
                        <defs>
                          <pattern
                            id="pattern0_1204_6"
                            patternContentUnits="objectBoundingBox"
                            width="1"
                            height="1"
                          >
                            <use
                              xlink:href="#image0_1204_6"
                              transform="scale(0.005)"
                            />
                          </pattern>
                          <image
                            id="image0_1204_6"
                            width="200"
                            height="200"
                            xlink:href="data:image/png;base64,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"
                          />
                        </defs>
                      </svg>
                    </div>
                    <div class="upload-btn">
                      <input type="file" @change="handleFileUpload" />
                      <button type="button" class="primary-btn">
                        Upload Profile
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <button class="primary-btn" type="submit">Register</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </template>

  <script>
  export default {
    data() {
      return {
        isModalVisible: false,
        form: {
          firstName: '',
          email: '',
          username: '',
          country: '',
          date: '',
          skills: [],
          phoneNumber: '',
          password: '',
          gender: '',
          bio: '',
        },
      };
    },
    methods: {
      openModal() {
        this.isModalVisible = true;
      },
      closeModal() {
        this.isModalVisible = false;
      },
      handleFileUpload(event) {
        const file = event.target.files[0];
        // Handle file upload logic here
      },
      submitForm() {
        console.log('Form submitted:', this.form);
        // Handle form submission logic here
        this.closeModal();
      },
    },
  };
  </script>
