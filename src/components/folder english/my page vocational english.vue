<template>
    <div>
        <!-- start completed 1 -->
        <section class="container overflow-hidden" :style="{ color: textColor }">
            <div class="row">
                <div data-aos="fade-right" class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="mt-5 pt-5 text-center text-lg-start">
                        <p class="p_style d-inline p-2 px-4 fs-5 text-white button_color"
                            :style="{ backgroundColor: buttonColor }">hello, i am</p>
                        <h1 class="fw-bold mt-4 text_black">{{ api_user.Name_Vocational }}</h1>
                        <p class="mt-2 text-secondary">{{ api_user.Vocational_Job_Description }}</p>
                        <a :href="getLink(id_client)">
                            <button type="button" :style="{ backgroundColor: buttonColor }"
                                class="button_color text-white border-0 btn rounded-5 px-5">
                                link
                            </button>
                        </a>
                    </div>
                </div>
                <div data-aos="fade-left" class="col-12 col-lg-6 d-flex justify-content-center pt-0 mt-3 mt-md-5 pt-md-5">
                    <img :src="getImagePath(api_user.Vocational_Image)" alt="" class="rounded-4 w-50 h-100">
                </div>
            </div>
            <a href="#link_bottom" class="d-flex justify-content-center text-decoration-none my-3">
                <i class="fas fa-arrow-down fs-3 p-3 icon_arrow position-absolute"></i>
            </a>
        </section>
        <!-- end completed 1 -->
        <!-- start completed 2 -->
        <section :style="{ display: divWhiteDisplay1 }">
            <div class="d-flex justify-content-center">
                <div class="div_white shadow-lg p-3 mb-5 bg-body position-fixed">
                    <div class="text-end pe-3">
                        <div id="icon_close1">
                            <i class="fas fa-times fs-2" @click="hideDivWhite1"></i>
                        </div>
                        <div class="text-center container">
                            <h4 class="text-success">Link completed successfully</h4>
                            <img src="../../assets/verificationimage/imagetrue.png" class="py-5 w-75" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end completed 2 -->
        <!-- start read -->
        <section class="mt-5 pt-0 mt-lg-5 pt-lg-5" :style="{ color: textColor }" id="link_bottom">
            <div class="container overflow-hidden">
                <div class="row mt-5">
                    <div data-aos="fade-right" class="col-12 col-lg-6">
                        <img src="../../assets/imageaboutus/shutterstock_407505481.png" alt="" class="w-100">
                    </div>
                    <div data-aos="fade-left" class="col-12 col-lg-6 text-center text-lg-start mt-5 mt-lg-0 text_black">
                        <h1>Read About My Life<br>Struggle Story!</h1>
                        <p class="text-secondary mt-4">{{ api_user.Vocational_Specialization }}</p>
                        <div data-aos="fade-up">
                            <p class="mt-3">{{ api_user.Vocational_Experience }}</p>
                            <div class="div_about rounded-5">
                                <div class="div_hr_about" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div data-aos="fade-up">
                            <p class="mt-5">{{ api_user.Vocational_Experience1 }}</p>
                            <div class="div_about rounded-5">
                                <div class="div_hr_about" style="width: 80%;"></div>
                            </div>
                        </div>
                        <div data-aos="fade-up">
                            <p class="mt-5">{{ api_user.Vocational_Experience2 }}</p>
                            <div class="div_about rounded-5">
                                <div class="div_hr_about" style="width: 70%;"></div>
                            </div>
                        </div>
                        <div data-aos="fade-up">
                            <p class="mt-5">{{ api_user.Vocational_Experience }}</p>
                            <div class="div_about rounded-5">
                                <div class="div_hr_about" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end read -->
        <!-- start our -->
        <section class="mt-5 pt-5 text-center font_text">
            <div class="d-flex justify-content-center">
                <div class="div_our_hr"></div>
            </div>
            <div class="mt-3 text_black" :style="{ color: textColor }">
                <h2 data-aos="flip-right" class="fw-bold">Our Skills</h2>
                <p data-aos="flip-right" class="mt-3">{{ api_user.Vocational_String_Skill }}</p>
                <div class="container mt-5 text-white">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-down">
                            <div class="p-3 rounded-3 div_our_backgounrd">
                                <div class="d-flex">
                                    <p class="ms-2 mt-4">{{ api_user.Vocational_Skill1 }}</p>
                                    <i class="fas fa-arrow-right ms-auto mt-4"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-up">
                            <div class="p-3 rounded-3 div_our_backgounrd">
                                <div class="d-flex">
                                    <p class="ms-2 mt-4">{{ api_user.Vocational_Skill2 }}</p>
                                    <i class="fas fa-arrow-right ms-auto mt-4"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-down">
                            <div class="p-3 rounded-3 div_our_backgounrd">
                                <div class="d-flex">
                                    <p class="ms-2 mt-4">{{ api_user.Vocational_Skill3 }}</p>
                                    <i class="fas fa-arrow-right ms-auto mt-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end our -->
        <!-- start have -->
        <section class="mt-2 pt-5 font_text">
            <div
                class="text-white text-center d-flex justify-content-center align-items-center div_200_height pb-5 position-absolute w-100">
                <div data-aos="flip-right">
                    <p>My {{ api_user.Name_Vocational }} Name</p>
                    <h1 class="fw-bold">{{ api_user.Vocational_Job_Description }}</h1>
                </div>
            </div>
            <img src="../../assets/imageFreelancing/Group34877.png" alt="" class="w-100 image_z my_image">
        </section>
        <!-- end have -->
        <!-- start blog -->
        <section class="my-5 text_black" :style="{ color: textColor }">
            <div class="d-flex justify-content-center mt-5">
                <div class="div_our_hr"></div>
            </div>
            <div class="text_black text-center" data-aos="flip-right">
                <h2 class="fw-bold">Experience</h2>
                <p class="mt-3">{{ api_user.Vocational_Experience }}</p>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-up">
                        <div class="card card_black">
                            <article>
                                <figure class="overflow-hidden"><img src="../../assets/imageLatest/post-2.png" alt=""
                                        class="image_hover"></figure>
                            </article>
                            <div class="card-body text-black">
                                <div class="d-flex">
                                    <p class="card-text">{{ api_user.Vocational_Experience1 }}</p>
                                    <a class="arrow right mt-1 ms-2"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-down">
                        <div class="card card_black">
                            <article>
                                <figure class="overflow-hidden"><img src="../../assets/imageLatest/post-6.png" alt=""
                                        class="image_hover"></figure>
                            </article>
                            <div class="card-body text-black">
                                <div class="d-flex">
                                    <p class="card-text">{{ api_user.Vocational_Experience2 }}</p>
                                    <a class="arrow right mt-1 ms-2"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-up">
                        <div class="card card_black">
                            <article>
                                <figure class="overflow-hidden"><img src="../../assets/imageLatest/post-2.png" alt=""
                                        class="image_hover"></figure>
                            </article>
                            <div class="card-body text-black">
                                <div class="d-flex">
                                    <p class="card-text">{{ api_user.Vocational_Experience3 }}</p>
                                    <a class="arrow right mt-1 ms-2"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blog -->
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
        this.changePageTitle('PAGE VOICATIONAL');
    },
    data() {
        return {
            divWhiteDisplay1: 'none',
            api_user: {},
            divWhiteDisplay: 'none',
        };
    },
    mounted() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('mytrue') === 'true') {
            this.divWhiteDisplay1 = 'block';
        }
        const id = this.$route.params.id;
        this.id_client = this.$route.query.id;
        axios
            .get(`http://localhost/graduatproject-main/src/components/folder%20english/select%20page%20voicational%20english.php?id=${id}`)
            .then((response) => {
                this.api_user = response.data;
            });
    },
    methods: {
        getLink(my_id) {
            return `http://localhost/graduatproject-main/src/components/folder%20english/insert%20client%20vec.php?id=${my_id}_${this.$route.params.id}`;
        },
        getImagePath(imageName) {
            if (imageName) {
                return require(`../../assets/imagedatabase/${imageName}`);
            }
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
