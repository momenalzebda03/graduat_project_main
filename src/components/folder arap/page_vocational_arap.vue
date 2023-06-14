<template>
    <div>
        <!-- start main -->
        <section class="mb-4">
            <div class="container rounded-3 position-relative overflow-hidden" id="container">
                <div class="form-container sign-up-container position-absolute">
                    <form
                        action="http://localhost/graduatproject-main/src/components/folder%20arap/Insert%20Vocational%20arap.php"
                        method="post" enctype="multipart/form-data"
                        class="my_form bg-white d-flex justify-content-center align-items-center flex-column text-center">
                        <h1 class="fw-bold">انشاء حساب</h1>
                        <span>الرجاء قم بإدخال البيانات بصفتك صاحب المهنة</span>
                        <input type="text" placeholder="الأسم" required name="Name_vocational"
                            class="my_input border border-0 w-100 my-2 mt-3 text-end" />
                        <input type="text" placeholder="وصف الوظيفة" required name="Job_vocational"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="text" placeholder="التخصص" required name="Specialization_vocational"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="text" placeholder="الخبرة" required name="Experience_vocational"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="text" placeholder="الخبرة 1" required name="Experience_vocational1"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="text" placeholder="الخبرة 2" required name="Experience_vocational2"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="text" placeholder="الخبرة 3" required name="Experience_vocational3"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="text" placeholder="نص المهارة" required name="String_Skill_vocational"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="text" placeholder="المهارة" required name="Skill_vocational"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="text" placeholder="المهارة 1" required name="Skill_vocational1"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="text" placeholder="المهارة 2" required name="Skill_vocational2"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="password" placeholder="كلمة المرور" v-model="password" required
                            name="Password_vocational" class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="password" placeholder="تاكيد كلمة المرور" v-model="confirmPassword" required
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="file" name="Image_vocational" class="my_input border border-0 w-100 my-2 input_file"
                            required>
                        <button :disabled="isFormDisabled" @click="activateDatabase"
                            class="my_button border border-0 button_color text-white fw-bold mt-4" type="submit">انشاء
                            حساب</button>
                        <p v-if="passwordMismatch && password !== '' && confirmPassword !== ''" class="text-danger">تاكد من
                            ان كلمة المرور متطابقة ويجب ان يحتوي على 5 خانات</p>
                    </form>
                </div>
                <div class="form-container sign-in-container position-absolute">
                    <form
                        action="http://localhost/graduatproject-main/src/components/folder%20arap/check%20registration%20vocational%20arap.php"
                        method="post"
                        class="my_form bg-white d-flex justify-content-center align-items-center flex-column text-center">
                        <h1>تسجيل الدخول</h1>
                        <span class="text-secondary">من فضلك قم بتسجيل الدخول</span>
                        <input type="text" placeholder="الأسم" class="my_input border border-0 w-100 my-2 text-end" required
                            name="Name_Signin" />
                        <input type="password" placeholder="كلمة المرور" name="Password_Signin" required
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <button class="my_button border border-0 button_color text-white fw-bold">تسجيل الدخول</button>
                        <p v-if="invalidCredentials" class="mt-3 text-danger fw-bold">الرجاء التاكد من الاسم وكلمة المرور
                        </p>
                    </form>
                </div>
                <div class="overlay-container position-absolute h-100 overflow-hidden">
                    <div class="overlay h-100 text-white position-relative">
                        <div
                            class="overlay-panel position-absolute d-flex justify-content-center align-items-center flex-column text-center h-100 w-50 overlay-left">
                            <h1>اهلا بعودتك</h1>
                            <p>للبقاء على اتصال معنا من فضلك قم بعمل تسجيل الدخول بالمعلومات الشخصية</p>
                            <button class="ghost my_button my_button_hover text-white fw-bold" @click="signIn">تسجيل
                                الدخول</button>
                        </div>
                        <div
                            class="overlay-panel overlay-right position-absolute d-flex justify-content-center align-items-center flex-column text-center h-100 w-50 pb-5">
                            <h1>مرحبا يا صديقي</h1>
                            <p class="mt-2 fw-bold">أدخل بياناتك الشخصية وابداء رحلتك معنا</p>
                            <button class="ghost my_button my_button_hover text-white fw-bold" @click="signUp">انشاء
                                حساب</button>
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
        this.changePageTitle('صاحب المهنة');
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
            axios.post("http://localhost/graduatproject-main/src/components/folder%20arap/Check%20registration%20vocational%20arap.php")
                .then(() => {
                    //
                })
                .catch(() => {
                    this.invalidCredentials = true;
                })
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
