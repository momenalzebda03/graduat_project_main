<template>
    <!-- start main -->
    <section class="container pt-4 my-5">
        <div class="text-center">
            <h2 class="fw-bold" :style="{ color: textColor }">أرسل رسالة إلى المهني الذي تريده
                <br><span class="p_color_blue">أسم العميل</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="d-flex justify-content-center position-relative">
                    <img src="../../assets/imagedatabase/ai-image-enlarger-1-before-2.jpg"
                        class="bg-white rounded-circle image_point border border-2 p-3" alt="">
                    <button @click="button_block"
                        class="position-absolute top-50 start-50 border border-2 text-white py-1 px-3 rounded-4 centered_button">ارسل
                        رسالة</button>
                    <textarea class="position-absolute text_top rounded-3 ps-1 pt-1" placeholder="أكتب الرسالة"></textarea>
                </div>
            </div>
            <div class="col-12 col-lg-8 mt-5">
                <div
                    class="div_left_table d-flex align-items-center justify-content-between flex-column flex-md-row text-white">
                    <span class="fs-4 fw-bold">المهني</span>
                    <span class="fs-4 fw-bold">ارسال</span>
                </div>
                <div class="overflow-y-auto overflow-x-hidden mt-4 div_overflow h-50">
                    <div class="d-flex justify-content-between align-items-center flex-column flex-md-row">
                        <div class="d-flex gap-0 gap-md-4 align-items-center flex-column flex-md-row">
                            <img src="../../assets/imagedatabase/ai-image-enlarger-1-before-2.jpg" alt=""
                                class="image_table rounded-circle">
                            <span :style="{ color: textColor }">أسم المهني</span>
                            <div class="d-flex flex-column">
                                <input type="text">
                            </div>
                        </div>
                        <a href="#">
                            <button type="submit" :style="{ backgroundColor: buttonColor }"
                                class="button_color text-white border-0 btn rounded-5 px-5 bg-success mt-3">أرسل</button>
                        </a>
                    </div>
                    <div class="div_hr_button my-2"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end main -->
</template>

<script>
export default {
    name: "ComponentHome",
    computed: {
        textColor() {
            return this.$root.textColor;
        },
    },
    created() {
        this.changePageTitle('استشارة العميل');
    },
    methods: {
        changePageTitle(newTitle) {
            document.title = newTitle;
        },
        button_block() {
            const text_top = document.querySelector(".text_top");
            text_top.style.width = "60%";
            text_top.style.height = "60%";
            text_top.style.zIndex = "1";
        }
    }
}
</script>

<!-- <template>
    <div>
        start main
        <section class="mt-4 text_black" :style="{ color: textColor }">
            <div class="text-center container">
                <div class="d-flex flex-column flex-lg-row my-5">
                    <div class="w-100 me-0 me-lg-1">
                        <h4>نحن نساعد ونحل مشكلة عملك</h4>
                        <h5>العميل</h5>
                        <p class="mt-4">{{ api_user1.Customer_Name }}</p>
                        <div>
                            <img :src="getImagePath(api_user1.Customer_Image)" class="image_header" alt="">
                            <div class="d-flex justify-content-center">
                                <div class="div_before_image"></div>
                            </div>
                            <br>
                            <textarea v-model="text_message" class="mt-3 pt-2 pe-2 rounded-3 my_texteara text-end"
                                placeholder="ارسل الرسالة" cols="60" rows="7"></textarea>
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
                        <div v-for="my_api in  api_user " :key="my_api.Customer_Id">
                            <p class="mt-4">{{ my_api.Name_Vocational }}</p>
                            <p class="d-none">{{ message_client(my_api.id) }}</p>
                            <img :src="getImagePath(my_api.Vocational_Image)" class="image_header" alt="">
                            <div class="d-flex justify-content-center">
                                <div class="div_before_image"></div>
                            </div>
                            <br>
                            <div v-for="select_message in getMessagesByApiUserId(my_api.id)" :key="select_message.id">
                                <input type="text" :value="select_message.message" readonly>
                                <br>
                                <br>
                            </div>
                            <a :href="getLink(my_api.id)">
                                <button type="button" :style="{ backgroundColor: buttonColor }"
                                    class="button_color text-white border-0 btn rounded-5 px-5 bg-success mt-3">ارسال</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        end main
        start completed 1
        <section :style="{ display: divWhiteDisplay1 }">
            <div class="d-flex justify-content-center">
                <div class="div_white shadow-lg p-3 mb-5 bg-body position-fixed">
                    <div class="text-end pe-3">
                        <div id="icon_close1">
                            <i class="fas fa-times fs-2" @click="hideDivWhite1"></i>
                        </div>
                        <div class="text-center container">
                            <h4 class="text-success">تم ارسال الرسالة</h4>
                            <img src="../../assets/verificationimage/imagetrue.png" class="py-5 w-75" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        end completed 1
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
            divWhiteDisplay1: 'none',
            api_user: {},
            api_user1: {},
            messages: {},
            messagesMap: new Map(),
            text_message: ""
        };
    },
    mounted() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('invalidCredentials') === 'true') {
            this.divWhiteDisplay1 = 'block';
        }
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
        hideDivWhite1() {
            this.divWhiteDisplay1 = 'none';
        },
        getLink(my_id) {
            const encodedTextMessage = encodeURIComponent(this.text_message);
            return `http://localhost/graduatproject-main/src/components/folder%20arap/insert%20counsling%20client%20arap.php?id=${this.$route.params.id}_${my_id}&text_message=${encodedTextMessage}`;
        },
        message_client(select_id) {
            if (!this.messagesMap.has(select_id)) {
                axios.get(`http://localhost/graduatproject-main/src/components/folder%20english/select%20message%20client.php?id=${this.$route.params.id}_${select_id}`)
                    .then(response => {
                        this.messagesMap.set(select_id, response.data);
                        console.log(this.messagesMap.get(select_id));
                    })
            }
        },
        getMessagesByApiUserId(apiUserId) {
            return this.messagesMap.get(apiUserId) || [];
        },
        getImagePath(imageName) {
            if (imageName) {
                return require(`../../assets/imagedatabase/${imageName}`);
            }
        },
        changePageTitle(newTitle) {
            document.title = newTitle;
        },
    },
}
</script> -->
