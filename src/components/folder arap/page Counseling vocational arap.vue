<template>
    <div>
        <!-- start main -->
        <section class="mt-4 text_black" :style="{ color: textColor }">
            <div class="text-center container">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100 me-0 me-lg-1">
                        <h4>نحن نساعد ونحل مشكلة عملك</h4>
                        <h5>المهني</h5>
                        <p class="mt-4">محمد احمد</p>
                        <div>
                            <img src="../../assets/imageheader/professional-headshots-nyc-043.png" class="image_header"
                                alt="">
                            <br>
                            <textarea class="mt-3 pt-2 pe-2 rounded-3 text-end my_texteara" placeholder="ارسال رسالة"
                                cols="60" rows="7"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <div :style="{ backgroundColor: buttonColor }"
                            class="position-absolute div_wh div_wh_arap d-flex justify-content-center align-items-center">
                        </div>
                    </div>
                    <div class="w-100 mt-5 pt-5 ms-0 ms-lg-2 pt-lg-0 mt-lg-0">
                        <h4>نحن نساعد ونحل مشكلة عملك</h4>
                        <h5>العميل</h5>
                        <p class="mt-4">محمد احمد</p>
                        <div>
                            <img src="../../assets/imageheader/professional-headshots-nyc-043.png" class="image_header"
                                alt="">
                            <br>
                            <textarea class="mt-3 pt-2 pe-2 rounded-3 text-end my_texteara text-black" cols="60" rows="7"
                                readonly>ارسل رسالة</textarea>
                            <br>
                            <button type="button" @:click="showDivWhite" :style="{ backgroundColor: buttonColor }"
                                @click="changeButtonColor"
                                class="button_color text-white border-0 btn rounded-5 px-5 bg-success mt-3">ارسال</button>
                            <button type="button" @:click="showDivWhite1" @click="changeButtonColor"
                                class="text-white border-0 btn rounded-5 px-5 button_red bg-danger mt-3">حذف</button>
                        </div>
                        <p class="mt-4">محمد احمد</p>
                        <div>
                            <img src="../../assets/imageheader/professional-headshots-nyc-043.png" class="image_header"
                                alt="">
                            <br>
                            <textarea class="mt-3 pt-2 pe-2 rounded-3 text-end my_texteara text-black" cols="60" rows="7"
                                readonly>ارسل رسالة</textarea>
                            <br>
                            <button type="button" @:click="showDivWhite" :style="{ backgroundColor: buttonColor }"
                                @click="changeButtonColor"
                                class="button_color text-white border-0 btn rounded-5 px-5 bg-success mt-3">ارسال</button>
                            <button type="button" @:click="showDivWhite1" @click="changeButtonColor"
                                class="text-white border-0 btn rounded-5 px-5 button_red bg-danger mt-3">حذف</button>
                        </div>
                        <p class="mt-4">محمد احمد</p>
                        <div class="mb-3">
                            <img src="../../assets/imageheader/professional-headshots-nyc-043.png" class="image_header"
                                alt="">
                            <br>
                            <textarea class="mt-3 pt-2 pe-2 rounded-3 text-end my_texteara text-black" cols="60" rows="7"
                                readonly>ارسل رسالة</textarea>
                            <br>
                            <button type="button" @:click="showDivWhite" :style="{ backgroundColor: buttonColor }"
                                @click="changeButtonColor"
                                class="button_color text-white border-0 btn rounded-5 px-5 bg-success mt-3">ارسال</button>
                            <button type="button" @:click="showDivWhite1" @click="changeButtonColor"
                                class="text-white border-0 btn rounded-5 px-5 button_red bg-danger mt-3">حذف</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end main -->
        <!-- start completed 1 -->
        <section>
            <div class="d-flex justify-content-center">
                <div class="div_white shadow-lg p-3 mb-5 bg-body position-fixed" :style="{ display: divWhiteDisplay }">
                    <div class="text-end pe-3">
                        <div id="icon_close1" @click="hideDivWhite">
                            <i class="fas fa-times fs-2"></i>
                        </div>
                        <div class="text-center container">
                            <h4 class="text-success">تم إرسال الرسالة بنجاح</h4>
                            <img src="../../assets/verificationimage/imagetrue.png" class="py-5 w-75" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end completed 1 -->
        <!-- start completed 2 -->
        <section>
            <div class="d-flex justify-content-center">
                <div class="div_white shadow-lg p-3 mb-5 bg-body position-fixed" :style="{ display: divWhiteDisplay1 }">
                    <div class="text-end pe-3">
                        <div id="icon_close1" @click="hideDivWhite1">
                            <i class="fas fa-times fs-2"></i>
                        </div>
                        <div class="text-center container">
                            <h4 class="text-danger">حذف</h4>
                            <img src="../../assets/verificationimage/imageerror.png" class="py-5 w-75" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end completed 2 -->
    </div>
</template>

<script>
import "../../App.vue";
export default {
    name: "ComponentHome",
    computed: {
        textColor() {
            return this.$root.textColor;
        },
        buttonColor() {
            return this.$root.buttonColor;
        },
    },
    created() {
        this.changePageTitle('استشارة العميل');
    },
    data() {
        return {
            divWhiteDisplay: 'none',
            divWhiteDisplay1: 'none',
        };
    },
    methods: {
        signIn() {
            const container = document.getElementById("container");
            container.classList.remove("right-panel-active");
        },
        signUp() {
            const container = document.getElementById("container");
            container.classList.add("right-panel-active");
        },
        showDivWhite() {
            this.divWhiteDisplay = 'block';
        },
        hideDivWhite() {
            this.divWhiteDisplay = 'none';
        },
        showDivWhite1() {
            this.divWhiteDisplay1 = 'block';
        },
        hideDivWhite1() {
            this.divWhiteDisplay1 = 'none';
        },
        changePageTitle(newTitle) {
            document.title = newTitle;
        },
    },
}
</script>
