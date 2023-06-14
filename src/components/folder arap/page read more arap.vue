<template>
    <div>
        <!-- start main -->
        <section class="pb-5 w-100">
            <img src="../../assets/imagereadmore/360_F_391461057_5P0BOWl4lY442Zoo9rzEeJU0S2c1WDZR.jpg"
                class="position-fixed w-100 section_backgoundimage" alt="">
            <div class="container pt-5 text-white">
                <div class="div_border_left p-1">
                    <img src="../../assets/imagereadmore/Group34875.png" class="image_commit_left" alt="">
                </div>
                <h2 class="h2_margin mt-5">{{ api_user.title }}</h2>
                <h2 class="p_style_color mt-3">{{ api_user.my_string }}</h2>
                <div class="d-flex justify-content-end">
                    <div class="div_border_right p-1">
                        <img src="../../assets/imagereadmore/Group34875.png" class="image_commit_right" alt="">
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
    created() {
        this.changePageTitle('قراءة المزيد');
    },
    data() {
        return {
            api_user: "",
            divWhiteDisplay: 'none',
            divWhiteDisplay1: 'none'
        };
    },
    mounted() {
        const id = this.$route.params.id;
        axios.get(`http://localhost/graduatproject-main/src/components/folder%20arap/read%20more%20arap.php?id=${id}`)
            .then((res) => {
                this.api_user = res.data;
            })
    },
    methods: {
        label(element) {
            var peson = element;
            var button_signup = document.getElementById("button_signup");
            if (peson == "vocational") {
                button_signup.onclick = () => {
                    location = "/page_vocational_arap";
                };
            } else if (peson == "Client") {
                button_signup.onclick = () => {
                    location = "/page_Client_arap";
                };
            }
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