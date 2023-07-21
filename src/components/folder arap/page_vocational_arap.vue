<template>
    <div>
        <!-- start main -->
        <section class="mb-3">
            <div class="container rounded-3 position-relative overflow-hidden div_con_he" id="container">
                <div class="form-container sign-up-container position-absolute">
                    <form
                        action="http://localhost/graduatproject-main/src/components/folder%20arap/Insert%20Vocational%20arap.php"
                        method="post" enctype="multipart/form-data"
                        class="my_form bg-white d-flex justify-content-center align-items-center flex-column text-center">
                        <h1 class="fw-bold">اشتراك</h1>
                        <span>يرجى تعبئة البيانات المطلوبة بصفتك صاحب المهنة</span>
                        <div class="d-flex gap-1 flex-column flex-md-row">
                            <div>
                                <input type="text" placeholder="الأسم" name="Name_vocational" required
                                    class="my_input border border-0 w-100 my-2 mt-3" />
                                <input type="text" placeholder="المسمى الوظيفي" name="Job_vocational" required
                                    class="my_input border border-0 w-100 my-2" />
                                <input type="text" placeholder="تخصص" name="Specialization_vocational" required
                                    class="my_input border border-0 w-100 my-2" />
                                <input type="text" placeholder="خبرة" required name="Experience_vocational"
                                    class="my_input border border-0 w-100 my-2" />
                                <input type="text" placeholder="خبرة 1" name="Experience_vocational1" required
                                    class="my_input border border-0 w-100 my-2" />
                                <input type="text" placeholder="خبرة 2" name="Experience_vocational2" required
                                    class="my_input border border-0 w-100 my-2" />
                                <input type="text" placeholder="خبرة 3" name="Experience_vocational3" required
                                    class="my_input my_input_1 border border-0 w-100 my-2" />
                            </div>
                            <div>
                                <input type="text" placeholder="مهارة السلسلة" name="String_Skill_vocational" required
                                    class="my_input border border-0 w-100 my-2 mt-3" />
                                <input type="text" placeholder="مهارة" name="Skill_vocational" required
                                    class="my_input border border-0 w-100 my-2" />
                                <input type="text" placeholder="مهارة 1" name="Skill_vocational1" required
                                    class="my_input border border-0 w-100 my-2" />
                                <input type="text" placeholder="مهارة 2" name="Skill_vocational2" required
                                    class="my_input border border-0 w-100 my-2" />
                                <input type="password" placeholder="كلمة المرور" required
                                    class="my_input border border-0 w-100 my-2" name="Password_vocational"
                                    v-model="password" />
                                <input type="password" placeholder="تاكيد كلمة المرور" required
                                    class="my_input border border-0 w-100 my-2" v-model="confirmPassword" />
                                <input type="file" name="Image_vocational" required @change="handleImageUpload"
                                    class="my_input border border-0 w-100 my-2 input_file">
                            </div>
                        </div>
                        <p v-if="passwordMismatch && password !== '' && confirmPassword !== ''" class="text-danger">
                            كلمات المرور غير متطابقة ويجب أن تحتوي على 5 أحرف</p>
                        <button :disabled="isFormDisabled" class="my_button border border-0 button_color text-white fw-bold"
                            type="submit">أنشاء حساب
                        </button>
                    </form>
                </div>
                <div class="form-container sign-in-container position-absolute">
                    <form
                        action="http://localhost/graduatproject-main/src/components/folder%20arap/check%20registration%20vocational%20arap.php"
                        method="post" class="my_form height_in bg-white d-flex justify-content-center align-items-center flex-column
                            text-center">
                        <h1>تسجيل الدخول</h1>
                        <span class="text-secondary">أو استخدام حسابك</span>
                        <input type="text" placeholder="الأسم" required name="Name_Signin"
                            class="my_input border border-0 w-100 my-2 text-center text-md-end" />
                        <input type="password" placeholder="كلمة المرور" required name="Password_Signin"
                            class="my_input border border-0 w-100 my-2 text-center text-md-end" />
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
