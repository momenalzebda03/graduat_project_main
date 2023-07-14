<template>
    <div>
        <!-- start main -->
        <section class="mt-4" :style="{ color: textColor }">
            <div class="text-center container">
                <div class="d-flex flex-column flex-lg-row my-5">
                    <div class="w-100 me-0 me-lg-1">
                        <h4>We Help And Solve Your Business Problem</h4>
                        <h5>Vocational</h5>
                        <p class="mt-4">{{ api_user1.Name_Vocational }}</p>
                        <div>
                            <img :src="getImagePath(api_user1.Vocational_Image)" class="image_header mt-3" alt="">
                            <div class="d-flex justify-content-center">
                                <div class="div_before_image"></div>
                            </div>
                            <br>
                            <textarea v-model="text_message" class="mt-3 pt-2 ps-2 rounded-3 my_texteara"
                                placeholder="Sent Message..." cols="60" rows="7"></textarea>
                        </div>
                    </div>
                    <div class="w-100 ms-0 ms-lg-2">
                        <h4>We Help And Solve Your Business Problem</h4>
                        <h5>Customers</h5>
                        <div v-for="my_api in api_user" :key="my_api.Customer_Id">
                            <p class="mt-4">{{ my_api.Customer_Name }}</p>
                            <img :src="getImagePath(my_api.Customer_Image)" class="image_header mt-2" alt="">
                            <div class="d-flex justify-content-center">
                                <div class="div_before_image"></div>
                            </div>
                            <br>
                            <textarea :value="my_api.communication_customer" class="mt-3 pt-2 ps-2 rounded-3 my_texteara"
                                cols="60" rows="7" readonly>Sent Message...</textarea>
                            <br>
                            <a :href="getLink(my_api.Customer_Id)">
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
        this.changePageTitle('COUNSELING CLIENTS');
    },
    data() {
        return {
            divWhiteDisplay1: 'none',
            api_user: {},
            api_user1: {},
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
            .get(`http://localhost/graduatproject-main/src/components/folder%20english/page%20select%20client%20link%20join.php/?id=${id}`)
            .then((response) => {
                this.api_user = response.data;
            });
        axios
            .get(`http://localhost/graduatproject-main/src/components/folder%20english/select%20page%20voicational%20english.php/?id=${id}`)
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
            return `http://localhost/graduatproject-main/src/components/folder%20english/insert%20counseling%20vocational.php?id=${my_id}_${this.$route.params.id}&text_message=${encodedTextMessage}`;
        },
        getImagePath(imageName) {
            if (imageName) {
                return require(`../../assets/imagedatabase/${imageName}`);
            }
        },
        changePageTitle(newTitle) {
            document.title = newTitle;
        }
    }
};
</script>