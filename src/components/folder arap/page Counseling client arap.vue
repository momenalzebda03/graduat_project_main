<template>
    <div>
        <!-- start main -->
        <section class="mt-4 text_black" :style="{ color: textColor }">
            <div class="text-center container">
                <div class="d-flex flex-column flex-lg-row my-5">
                    <div class="w-100 me-0 me-lg-1">
                        <h4>نحن نساعد ونحل مشكلة عملك</h4>
                        <h5>العميل</h5>
                        <p class="mt-4">{{ api_user1.Customer_Name }}</p>
                        <div>
                            <img :src="getImagePath(api_user1.Customer_Image)" class="image_header" alt="">
                            <br>
                            <textarea class="mt-3 pt-2 ps-2 rounded-3 my_texteara" placeholder="Sent Message..." cols="60"
                                rows="7"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <div :style="{ backgroundColor: buttonColor }"
                            class="position-absolute div_wh div_wh_arap d-flex justify-content-center align-items-center">
                        </div>
                    </div>
                    <div class="w-100 mt-5 pt-5 ms-0 ms-lg-2 pt-lg-0 mt-lg-0">
                        <h4>نحن نساعد ونحل مشكلة عملك</h4>
                        <h5>المهني</h5>
                        <div v-for="my_api in api_user" :key="my_api.Customer_Id">
                            <p class="mt-4">{{ my_api.Name_Vocational }}</p>
                            <img :src="getImagePath(my_api.Vocational_Image)" class="image_header" alt="">
                            <br>
                            <textarea class="mt-3 pt-2 pe-2 rounded-3 text-end my_texteara text-black" cols="60" rows="7"
                                readonly>ارسل رسالة</textarea>
                            <br>
                            <button type="button" :style="{ backgroundColor: buttonColor }"
                                class="button_color text-white border-0 btn rounded-5 px-5 bg-success mt-3">ارسال</button>
                            <button type="button" @:click="showDivWhite1" @click="changeButtonColor"
                                class="text-white border-0 btn rounded-5 px-5 ms-3 button_red bg-danger mt-3">حذف</button>
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
import axios from 'axios';
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
        this.changePageTitle('استشارة المهني');
    },
    data() {
        return {
            api_user: {},
            api_user1: {}
        };
    },
    mounted() {
        const id = this.$route.params.id;
        axios
            .get(`http://localhost/graduatproject-main/src/components/folder%20english/page%20select%20links%20join.php/?id=${id}`)
            .then((response) => {
                this.api_user = response.data;
            });
        axios
            .get(`http://localhost/graduatproject-main/src/components/folder%20english/select%20page%20client%20english%20id.php/?id=${id}`)
            .then((response) => {
                this.api_user1 = response.data;
            });
    },
    methods: {
        getImagePath(imageName) {
            if (imageName) {
                return require(`../../assets/imagedatabase/${imageName}`);
            }
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
