<template>
    <div>
        <!-- start main -->
        <section class="mt-4 text_black" :style="{ color: textColor }">
            <div class="text-center container">
                <div class="d-flex flex-column flex-lg-row my-5">
                    <div class="w-100 me-0 me-lg-1">
                        <h4>We Help And Solve Your Business Problem</h4>
                        <h5>Customers</h5>
                        <p class="mt-4">{{ api_user1.Customer_Name }}</p>
                        <div>
                            <img :src="getImagePath(api_user1.Customer_Image)" class="image_header" alt="">
                            <div class="d-flex justify-content-center">
                                <div class="div_before_image"></div>
                            </div>
                            <br>
                            <textarea v-model="text_message" class="mt-3 pt-2 ps-2 rounded-3 my_texteara"
                                placeholder="Sent Message..." cols="60" rows="7"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <div :style="{ backgroundColor: buttonColor }"
                            class="position-absolute div_wh div_wh_english d-flex justify-content-center align-items-center">
                        </div>
                    </div>
                    <div class="w-100 mt-5 pt-5 ms-0 ms-lg-2 pt-lg-0 mt-lg-0">
                        <h4>We Help And Solve Your Business Problem</h4>
                        <h5>Vocational</h5>
                        <div v-for="my_api in api_user" :key="my_api.Customer_Id">
                            <p class="mt-4">{{ my_api.Name_Vocational }}</p>
                            <img :src="getImagePath(my_api.Vocational_Image)" class="image_header" alt="">
                            <div class="d-flex justify-content-center">
                                <div class="div_before_image"></div>
                            </div>
                            <div v-for="my_message in messages" :key="my_message.message">
                                <p>{{ my_message.message }}</p>
                            </div>
                            <br>
                            <!-- <textarea v-for="my_link in api_link" :key="my_link.message_vocationa"
                                class="mt-3 pt-2 ps-2 rounded-3 my_textarea" cols="60" rows="7" readonly
                                :value="my_link.message_vocationa"></textarea> -->
                            <br>
                            <a :href="getLink(my_api.id)">
                                <button type="submit" :style="{ backgroundColor: buttonColor }"
                                    class="button_color text-white border-0 btn rounded-5 px-5 bg-success mt-3">Reply</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end main -->
        <!-- start completed 1 -->
        <section :style="{ display: divWhiteDisplay1 }">
            <div class="d-flex justify-content-center">
                <div class="div_white shadow-lg p-3 mb-5 bg-body position-fixed">
                    <div class="text-end pe-3">
                        <div id="icon_close1">
                            <i class="fas fa-times fs-2" @click="hideDivWhite1"></i>
                        </div>
                        <div class="text-center container">
                            <h4 class="text-success">Message has been sent</h4>
                            <img src="../../assets/verificationimage/imagetrue.png" class="py-5 w-75" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end completed 1 -->
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
    data() {
        return {
            divWhiteDisplay1: 'none',
            api_user: {},
            api_user1: {},
            messages: {},
            text_message: ""
        };
    },
    created() {
        this.changePageTitle('COUNSELING VOICATIONAL');
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
            return `http://localhost/graduatproject-main/src/components/folder%20english/insert%20counsling%20client.php?id=${this.$route.params.id}_${my_id}&text_message=${encodedTextMessage}`;
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
</script>
