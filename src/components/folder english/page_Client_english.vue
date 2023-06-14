<template>
    <div>
        <!-- start main -->
        <section class="mb-3">
            <div class="container rounded-3 position-relative overflow-hidden div_con_he" id="container">
                <div class="form-container sign-up-container position-absolute">
                    <form
                        action="http://localhost/graduatproject-main/src/components/folder%20english/Insert%20Client%20English.php"
                        method="post" enctype="multipart/form-data"
                        class="my_form d-flex justify-content-center height_container height_up align-items-center flex-column text-center">
                        <h1 class="fw-bold">sign up</h1>
                        <span class="">Please fill in the required data as the owner of the profession</span>
                        <input type="text" required name="Name_Client" placeholder="Name"
                            class="my_input border border-0 w-100 my-2 mt-3" />
                        <input type="text" required name="Profession_Client" placeholder="Required Profession"
                            class="my_input border border-0 w-100 my-2" />
                        <input type="text" required name="Problem_Client" placeholder="Existing Problem"
                            class="my_input border border-0 w-100 my-2" />
                        <input type="password" required name="Password_Client" placeholder="Password"
                            class="my_input border border-0 w-100 my-2" v-model="password" />
                        <input type="password" required placeholder="Confirm Password" v-model="confirmPassword"
                            class="my_input border border-0 w-100 my-2" />
                        <input type="file" required name="Image_Client" class="my_input border border-0 w-100 my-2">
                        <button :disabled="isFormDisabled" @click="activateDatabase"
                            class="my_button border border-0 button_color text-white fw-bold" type="submit">Sign up
                        </button>
                        <p v-if="passwordMismatch && password !== '' && confirmPassword !== ''" class="text-danger">
                            Passwords do not match and must contain 5 characters</p>
                    </form>
                </div>
                <div class="form-container sign-in-container position-absolute">
                    <form
                        action="http://localhost/graduatproject-main/src/components/folder%20english/Check%20registration%20client%20english.php"
                        method="post" class="my_form height_in bg-white d-flex justify-content-center align-items-center flex-column
                            text-center">
                        <h1>Sign in</h1>
                        <span class="text-secondary">or use your account</span>
                        <input type="text" placeholder="Name" required name="Name_Signin"
                            class="my_input border border-0 w-100 my-2" />
                        <input type="password" placeholder="Password" required name="Password_Signin"
                            class="my_input border border-0 w-100 my-2" />
                        <input type="submit" class="my_button mt-2 border border-0 button_color text-white fw-bold"
                            value="Sign In">
                        <p v-if="invalidCredentials" class="mt-3 text-danger fw-bold">Please verify your name and password
                        </p>
                    </form>
                </div>
                <div class="overlay-container position-absolute h-100 overflow-hidden">
                    <div class="overlay h-100 text-white position-relative">
                        <div
                            class="overlay-panel position-absolute d-flex justify-content-center align-items-center flex-column text-center h-100 w-50 overlay-left">
                            <h1>Welcome Back!</h1>
                            <p>To keep connected with us please login with your personal info</p>
                            <button class="ghost my_button my_button_hover text-white fw-bold" @click="signIn">Sign
                                In</button>
                        </div>
                        <div
                            class="overlay-panel overlay-right position-absolute d-flex justify-content-center align-items-center flex-column text-center h-100 w-50 pb-5">
                            <h1>Hello, Friend!</h1>
                            <p class="fw-bold mt-2">Enter your personal details and start journey with us</p>
                            <button class="ghost my_button my_button_hover text-white fw-bold" @click="signUp">Sign
                                Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end main -->
    </div>
</template>

<script>
import "../../App.vue";
import axios from "axios";
export default {
    name: "ComponentHome",
    created() {
        this.changePageTitle('CLIENT');
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('invalidCredentials') === 'true') {
            this.invalidCredentials = true;
        }
    },
    data() {
        return {
            invalidCredentials: false,
            password: '',
            confirmPassword: '',
        };
    },
    computed: {
        passwordMismatch() {
            return this.password !== this.confirmPassword || this.password.length !== 5;
        },
        isFormDisabled() {
            return this.passwordMismatch;
        },
    },
    methods: {
        click_vild() {
            axios.get(`http://localhost/graduatproject-main/src/components/folder%20english/Check%20registration%20client%20english.php`)
                .then(() => {
                    //
                })
                .catch(() => {
                    this.invalidCredentials = true;
                });
        },
        signIn() {
            const container = document.getElementById("container");
            container.classList.remove("right-panel-active");
        },
        signUp() {
            const container = document.getElementById("container");
            container.classList.add("right-panel-active");
        },
        changePageTitle(newTitle) {
            document.title = newTitle;
        },
    },
}
</script>