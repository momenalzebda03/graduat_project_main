<template>
    <div>
        <!-- start main -->
        <section class="mb-3">
            <div class="container rounded-3 position-relative overflow-hidden" id="container">
                <div class="form-container sign-up-container position-absolute">
                    <form
                        action="http://localhost/graduatproject-main/src/components/folder%20arap/Insert%20Client%20arap.php"
                        method="post" enctype="multipart/form-data"
                        class="my_form d-flex justify-content-center height_container height_up align-items-center flex-column text-center">
                        <h1 class="fw-bold">اشتراك</h1>
                        <span>يرجى تعبئة البيانات المطلوبة بصفتك صاحب المهنة</span>
                        <input type="text" required name="Name_Client" placeholder="اسم العميل"
                            class="my_input border border-0 w-100 my-2 text-end mt-3" />
                        <input type="text" required name="Profession_Client" placeholder="المهنة المطلوبة"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="text" required name="Problem_Client" placeholder="مشكلة موجودة"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="password" required name="Password_Client" placeholder="كلمة المرور"
                            class="my_input border border-0 w-100 my-2 text-end" v-model="password" />
                        <input type="password" required placeholder="تاكيد كلمة المرور" v-model="confirmPassword"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="file" required name="Image_Client"
                            class="my_input input_file border border-0 w-100 my-2 text-end">
                        <button :disabled="isFormDisabled" @click="activateDatabase"
                            class="my_button border border-0 button_color text-white fw-bold" type="submit">أنشاء حساب
                        </button>
                        <p v-if="passwordMismatch && password !== '' && confirmPassword !== ''" class="text-danger">
                            كلمات المرور غير متطابقة ويجب أن تحتوي على 5 أحرف</p>
                    </form>
                </div>
                <div class="form-container sign-in-container position-absolute">
                    <form
                        action="http://localhost/graduatproject-main/src/components/folder%20arap/Check%20registration%20client%20arap.php"
                        method="post" class="my_form height_in bg-white d-flex justify-content-center align-items-center flex-column
                            text-center">
                        <h1>تسجيل الدخول</h1>
                        <span class="text-secondary">أو استخدام حسابك</span>
                        <input type="text" placeholder="اسم العميل" required name="Name_Signin"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="password" placeholder="كلمة المرور" required name="Password_Signin"
                            class="my_input border border-0 w-100 my-2 text-end" />
                        <input type="submit" class="my_button mt-2 border border-0 button_color text-white fw-bold"
                            value="تسجيل الدخول">
                        <p v-if="invalidCredentials" class="mt-3 text-danger fw-bold">يرجى التحقق من اسمك وكلمة المرور
                        </p>
                    </form>
                </div>
                <div class="overlay-container position-absolute h-100 overflow-hidden">
                    <div class="overlay h-100 text-white position-relative">
                        <div
                            class="overlay-panel position-absolute d-flex justify-content-center align-items-center flex-column text-center h-100 w-50 overlay-left fw-bold">
                            <h1>مرحبًا بعودتك!</h1>
                            <p>للبقاء على اتصال معنا ، يرجى تسجيل الدخول باستخدام معلوماتك الشخصية</p>
                            <button class="ghost my_button my_button_hover text-white fw-bold" @click="signIn">تسجيل الدخول
                            </button>
                        </div>
                        <div
                            class="overlay-panel overlay-right position-absolute d-flex justify-content-center align-items-center flex-column text-center h-100 w-50 pb-5">
                            <h1>مرحبا يا صديقي!</h1>
                            <p class="fw-bold mt-2">أدخل بياناتك الشخصية وابدأ الرحلة معنا</p>
                            <button class="ghost my_button my_button_hover text-white fw-bold"
                                @click="signUp">اشتراك</button>
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
        this.changePageTitle('العميل');
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
            axios.get(`http://localhost/graduatproject-main/src/components/folder%20arap/check%20registration%20client%20arap.php`)
                .then(() => {
                    //
                })
                .catch(() => {
                    this.invalidCredentials = true;
                });
        },
        changePageTitle(newTitle) {
            document.title = newTitle;
        },
    },
}
</script>