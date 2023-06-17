<template>
    <div>
        <!-- start main -->
        <section class="mt-4" :style="{ color: textColor }">
            <div class="text-center container">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100 me-0 me-lg-1 my-5">
                        <h4>We Help And Solve Your Business Problem</h4>
                        <h5>Vocational</h5>
                        <p class="mt-4">{{ api_user1.Name_Vocational }}</p>
                        <div>
                            <img :src="getImagePath(api_user1.Vocational_Image)" class="image_header" alt="">
                            <br>
                            <textarea class="mt-3 pt-2 ps-2 rounded-3 my_texteara" placeholder="Sent Message..." cols="60"
                                rows="7"></textarea>
                        </div>
                    </div>
                    <div class="w-100 ms-0 ms-lg-2 my-5">
                        <h4>We Help And Solve Your Business Problem</h4>
                        <h5>Customers</h5>
                        <div v-for="my_api in api_user" :key="my_api.Customer_Id">
                            <p class="mt-4">{{ my_api.Customer_Name }}</p>
                            <img :src="getImagePath(my_api.Customer_Image)" class="image_header" alt="">
                            <br>
                            <textarea class="mt-3 pt-2 ps-2 rounded-3 my_texteara" cols="60" rows="7"
                                readonly>Sent Message...</textarea>
                            <br>
                            <button type="button" :style="{ backgroundColor: buttonColor }"
                                class="button_color text-white border-0 btn rounded-5 px-5 bg-success mt-3">Reply</button>
                            <button type="button"
                                class="text-white border-0 btn rounded-5 px-5 ms-3 button_red bg-danger mt-3">delete</button>
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
        this.changePageTitle('COUNSELING CLIENTS');
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
