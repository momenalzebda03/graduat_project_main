<template>
    <div>
        <!-- start main -->
        <section class="text_black">
            <div class="container d-flex justify-content-start w-100">
                <div class="d-none d-lg-flex align-items-end text-white position-absolute h-50 div_backgound_index">
                    <div data-aos="fade-right">
                        <h2 class="fw-bold">clients</h2>
                        <p>The Account Has Been Created Now You Will<br>Have The Right Bosee The Professionals</p>
                        <router-link :to="`/read_more_arap/${number = 12}`">
                            <button class="button_hover border border-0 py-2 px-4 fw-bold mt-3 rounded-3">READ MORE</button>
                        </router-link>
                    </div>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img loading="lazy" src="../../assets/imagemain/image_main_tow.png"
                            class="d-block w-100 image_margin" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img loading="lazy" src="../../assets/imagemain/Group34875.png" class="d-block w-100 image_margin"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img loading="lazy" src="../../assets/imagemain/image_three.png" class="d-block w-100 image_margin"
                            alt="...">
                    </div>
                </div>
                <div class="carousel-control-prev my_none" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <div class="position-absolute start-0">
                        <i data-bs-target="#carouselExampleControls" data-bs-slide="prev"
                            class="fas fa-chevron-left fs-4 icon_black text-white px-4"></i>
                    </div>
                </div>
                <div class="carousel-control-next my_none" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <div class="position-absolute end-0">
                        <i data-bs-target="#carouselExampleControls" data-bs-slide="next"
                            class="fas fa-chevron-right fs-4 icon_black text-white px-4"></i>
                    </div>
                </div>
            </div>
        </section>
        <!-- start section my -->
        <section class="container overflow-hidden">
            <div class="my_color_top rounded-3 p-3 w-100 d-flex flex-column flex-lg-row justify-content-between">
                <div data-aos="fade-right" class="text-center text-lg-start">
                    <h4 class="fw-bold">welcome</h4>
                    <span class="mt-2 text-secondary">{{ api_user.Customer_Name }}</span>
                    <div class="my-3">
                        <span class="fw-bold">Name: </span><span class="text-secondary">{{ api_user.Customer_Name }}</span>
                    </div>
                    <span class="fw-bold">job: </span><span class="text-secondary">{{ api_user.Customer_Required_profession
                    }}</span>
                </div>
                <img data-aos="fade-left" src="../../assets/imagemain/welcome.png" alt="" class="mt-3 mt-lg-0">
            </div>
        </section>
        <!-- end section my -->
        <!-- start table -->
        <section class="mt-5">
            <h3 class="text-center mb-4" data-aos="flip-right" :style="{ color: textColor }">Vocational</h3>
            <div class="container my-5">
                <div class="d-flex justify-content-end position-relative pt-3 container">
                    <i class="fa fa-search icon_search ms-3 position-absolute top-50 start-0 text-muted"></i>
                    <input type="input" class="form__field w-100" name="name" id='name' v-model="search_model" />
                    <label for="name" class="form__label text-secondary position-absolute d-block text-nowrap">search
                        name</label>
                </div>
            </div>
            <div data-aos="fade-down" class="projects p-20 rad-10 m-20 container">
                <div class="responsive-table">
                    <table class="fs-5 w-100 text-center">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Function</td>
                                <td>image</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody :style="{ color: textColor }">
                            <tr v-for="api in filteredResults" :key="api.id">
                                <td>{{ api.Name_Vocational }}</td>
                                <td>{{ api.Vocational_Job_Description }}</td>
                                <td>
                                    <img :src="getImagePath(api.Vocational_Image)" alt="" class="rounded-circle">
                                </td>
                                <td>
                                    <a :href="'my_page_voictional_english/' + `${api.id}?id=${this.$route.query.id}`">
                                        <button @click="showDivWhite" :style="{ backgroundColor: buttonColor }"
                                            class="button_color text-white border-0 btn rounded-5 px-5 mt-3">Professional
                                            page</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <h3 class="text-center mb-4" data-aos="flip-right" :style="{ color: textColor }">Professionals Who Want To Hook
                Up Your Uncle</h3>
            <div data-aos="fade-down" class="projects p-20 rad-10 m-20 container">
                <div class="responsive-table">
                    <table class="fs-5 w-100 text-center">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Function</td>
                                <td>image</td>
                                <td>communication</td>
                                <td>delete</td>
                            </tr>
                        </thead>
                        <tbody v-for="my_api in filteredResultslink" :key="my_api.Name_Vocational" :style="{ color: textColor }">
                            <tr>
                                <td>{{ my_api.Name_Vocational }}</td>
                                <td>{{ my_api.Vocational_Job_Description }}</td>
                                <td>
                                    <img :src="getImagePath(my_api.Vocational_Image)" alt="" class="rounded-circle">
                                </td>
                                <td>
                                    <a :href="my_delete(my_api.id)">
                                        <button type="button" :style="{ backgroundColor: buttonColor }"
                                            class="text-white border-0 btn rounded-5 ms-2 px-4 bg-danger button_red mt-3">
                                            To Reject
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <router-link :to="`/page_Counseling_client_english/${this.$route.query.id}`">
                                        <button type="button" :style="{ backgroundColor: buttonColor }"
                                            class="button_color text-white border-0 btn rounded-5 px-5 bg-success mt-3">
                                            Advice
                                            Or Work</button>
                                    </router-link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- end table -->
        <section class="container text-center mb-4 overflow-hidden">
            <h3 class="fw-bold mt-5" data-aos="flip-right" :style="{ color: textColor }">some products</h3>
            <div class="row mt-2">
                <div data-aos="fade-right" class="col-12 col-lg-6 mt-3">
                    <img src="../../assets/imageproducts/Group34875.png" alt="" class="w-100">
                </div>
                <div data-aos="fade-left" class="col-12 col-lg-6 mt-3">
                    <img src="../../assets/imageproducts/Group34876.png" alt="" class="w-100">
                </div>
            </div>
        </section>
        <!-- end main -->
        <!-- start completed 2 -->
        <section :style="{ display: true_delete }">
            <div class="d-flex justify-content-center">
                <div class="div_white shadow-lg p-3 mb-5 bg-body position-fixed">
                    <div class="text-end pe-3">
                        <div id="icon_close1" @click="hideDivWhite">
                            <i class="fas fa-times fs-2"></i>
                        </div>
                        <div class="text-center container">
                            <h4 class="text-danger">The person has been deleted</h4>
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
import axios from 'axios';
export default {
    name: "ComponentHome",
    computed: {
        filteredResults() {
            if (this.search_model) {
                return this.api_user1.filter(api => api.Name_Vocational.toLowerCase().includes(this.search_model.toLowerCase()));
            }
            return this.api_user1;
        },
        filteredResultslink() {
            if (this.search_model) {
                return this.api_user2.filter(api => api.Name_Vocational.toLowerCase().includes(this.search_model.toLowerCase()));
            }
            return this.api_user2;
        },
        textColor() {
            return this.$root.textColor;
        },
        buttonColor() {
            return this.$root.buttonColor;
        },
    },
    created() {
        this.changePageTitle('ADMIN CLIEN');
    },
    data() {
        return {
            search_model: '',
            api_user: {},
            api_user1: {},
            api_user2: {},
            true_delete: 'none',
        };
    },
    mounted() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('true_delete') === 'true') {
            this.true_delete = 'block';
        }
        const id = this.$route.query.id;
        axios
            .get(`http://localhost/graduatproject-main/src/components/folder%20english/select%20page%20client%20english%20id.php?id=${id}`)
            .then((response) => {
                this.api_user = response.data;
            });
        axios
            .get(`http://localhost/graduatproject-main/src/components/folder%20english/select%20page%20voicational%20english%20all.php`)
            .then((response) => {
                this.api_user1 = response.data;
            })
        axios
            .get(`http://localhost/graduatproject-main/src/components/folder%20english/page%20select%20links%20join.php?id=${id}`)
            .then((response) => {
                this.api_user2 = response.data;
            })
    },
    methods: {
        my_delete(id) {
            return `http://localhost/graduatproject-main/src/components/folder%20english/delete%20client.php?id=${this.$route.query.id}_${id}`;
        },
        getImagePath(imageName) {
            return require(`../../assets/imagedatabase/${imageName}`);
        },
        signIn() {
            const container = document.getElementById("container");
            container.classList.remove("right-panel-active");
        },
        signUp() {
            const container = document.getElementById("container");
            container.classList.add("right-panel-active");
        },
        hideDivWhite() {
            this.true_delete = 'none';
        },
        changePageTitle(newTitle) {
            document.title = newTitle;
        },
    },
}
</script>
