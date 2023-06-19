<template>
    <div>
        <!-- start main -->
        <section class="text_black">
            <div class="container d-flex justify-content-end w-100">
                <div
                    class="d-none d-lg-flex align-items-end text-white text-end position-absolute h-50 div_backgound_index">
                    <div data-aos="fade-left">
                        <h2 class="fw-bold">المهني</h2>
                        <p>تم إنشاء الحساب الآن شئت <br>احصل على حق Bosee المحترفين</p>
                        <router-link :to="`/read_more_arap/${number = 12}`">
                            <button class="button_hover border border-0 py-2 px-4 fw-bold mt-3 rounded-3">قراءة
                                المزيد</button>
                        </router-link>
                    </div>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../assets/imagemain/image_main_tow.png" class="d-block w-100 image_margin" alt="error">
                    </div>
                    <div class="carousel-item">
                        <img src="../../assets/imagemain/Group34875.png" class="d-block w-100 image_margin" alt="error">
                    </div>
                    <div class="carousel-item">
                        <img src="../../assets/imagemain/image_three.png" class="d-block w-100 image_margin" alt="error">
                    </div>
                </div>
                <button class="carousel-control-prev me-5 pe-5" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next ms-5 ps-5" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </section>
        <!-- start section my -->
        <section class="container overflow-hidden">
            <div class="my_color_top rounded-3 p-3 w-100 d-flex flex-column flex-lg-row justify-content-between">
                <img data-aos="fade-right" src="../../assets/imagemain/welcome.png" alt="" class="mt-3 mt-lg-0">
                <div data-aos="fade-left" class="text-center text-lg-end">
                    <h4 class="fw-bold">مرحباً</h4>
                    <span class="mt-2 text-secondary">{{ api_user.Name_Vocational }}</span>
                    <div class="my-3">
                        <span class="fw-bold">الأسم: </span><span class="text-secondary">{{ api_user.Name_Vocational
                        }}</span>
                    </div>
                    <span class="fw-bold">الوظيفة: </span><span class="text-secondary">{{
                        api_user.Vocational_Job_Description }}</span>
                </div>
            </div>
        </section>
        <!-- end section my -->
        <!-- start table -->
        <section class="mt-5">
            <h3 class="text-center mb-4" data-aos="flip-right" :style="{ color: textColor }">العملاء</h3>
            <div data-aos="fade-down" class="projects p-20 rad-10 m-20 container">
                <div class="responsive-table">
                    <table class="fs-5 w-100 text-center">
                        <thead>
                            <tr>
                                <td>الأسم</td>
                                <td>الوظيفة</td>
                                <td>الصورة</td>
                                <td>الزر</td>
                            </tr>
                        </thead>
                        <tbody :style="{ color: textColor }">
                            <tr v-for="api in  api_user1 " :key="api.id">
                                <td>{{ api.Customer_Name }}</td>
                                <td>{{ api.Customer_Required_profession }}</td>
                                <td>
                                    <img :src="getImagePath(api.Customer_Image)" alt="" class="rounded-circle">
                                </td>
                                <td>
                                    <a :href="getLink(api.Customer_Id)">
                                        <button type="button" :style="{ backgroundColor: buttonColor }"
                                            class="button_color text-white border-0 btn rounded-5 px-5 mt-3">ربط</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <h3 class="text-center mb-4" data-aos="flip-right" :style="{ color: textColor }">العملاء الذين يرغبون في ربط عمك
            </h3>
            <div data-aos="fade-down" class="projects p-20 rad-10 m-20 container">
                <div class="responsive-table">
                    <table class="fs-5 w-100 text-center">
                        <thead>
                            <tr>
                                <td>الأسم</td>
                                <td>الوظيفة</td>
                                <td>الصورة</td>
                                <td>الزر</td>
                            </tr>
                        </thead>
                        <tbody v-for="my_api in api_user2" :key="my_api.Customer_Name" :style="{ color: textColor }">
                            <tr>
                                <td>{{ my_api.Customer_Name }}</td>
                                <td>{{ my_api.Customer_Required_profession }}</td>
                                <td>
                                    <img :src="getImagePath(my_api.Customer_Image)" alt="" class="rounded-circle">
                                </td>
                                <td>
                                    <a :href="my_delete(my_api.Customer_Id)">
                                        <button type="button" :style="{ backgroundColor: buttonColor }"
                                            class="text-white border-0 btn rounded-5 ms-2 px-4 bg-danger button_red mt-3">
                                            الحذف
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <h3 class="text-center mb-4" data-aos="flip-right" :style="{ color: textColor }">العملاء المرتبط بهم</h3>
            <div data-aos="fade-down" class="projects p-20 rad-10 m-20 container">
                <div class="responsive-table">
                    <table class="fs-5 w-100 text-center">
                        <thead>
                            <tr>
                                <td>الأسم</td>
                                <td>الوظيفة</td>
                                <td>الصورة</td>
                                <td>الزر</td>
                            </tr>
                        </thead>
                        <tbody v-for="my_api in api_user2" :key="my_api.Customer_Name" :style="{ color: textColor }">
                            <tr>
                                <td>{{ my_api.Customer_Name }}</td>
                                <td>{{ my_api.Customer_Required_profession }}</td>
                                <td>
                                    <img :src="getImagePath(my_api.Customer_Image)" alt="" class="rounded-circle">
                                </td>
                                <td>
                                    <router-link :to="`/page_counseling_voiactional_arap/${this.$route.query.id}`">
                                        <button type="button" :style="{ backgroundColor: buttonColor }"
                                            class="button_color text-white border-0 btn rounded-5 px-5 bg-success mt-3">
                                            استشارة او تواصل</button>
                                    </router-link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- end table -->
        <section class="container mt-5 text-center mb-4 overflow-hidden" :style="{ color: textColor }">
            <section class="container text-center">
                <h3 class="fw-bold mt-5" data-aos="flip-right">البعض من المنتجات</h3>
                <div class="row mt-2">
                    <div data-aos="fade-right" class="col-12 col-lg-6 mt-3">
                        <img src="../../assets/imageproducts/Group34878.png" alt="" class="w-100">
                    </div>
                    <div data-aos="fade-left" class="col-12 col-lg-6 mt-3">
                        <img src="../../assets/imageproducts/Group34877.png" alt="" class="w-100">
                    </div>
                </div>
            </section>
        </section>
        <!-- end main -->
        <!-- start completed 1 -->
        <section :style="{ display: true_delete }">
            <div class="d-flex justify-content-center">
                <div class="div_white shadow-lg p-3 mb-5 bg-body position-fixed">
                    <div class="text-end pe-3">
                        <div id="icon_close1" @click="button_delete">
                            <i class="fas fa-times fs-2"></i>
                        </div>
                        <div class="text-center container">
                            <h4 class="text-danger">حذف بنجاح</h4>
                            <img src="../../assets/verificationimage/imageerror.png" class="py-5 w-75" alt="">
                        </div>
                    </div>
                </div>
            </div>
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
                            <h4 class="text-success">تم الربط بنجاح</h4>
                            <img src="../../assets/verificationimage/imagetrue.png" class="py-5 w-75" alt="">
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
import axios from "axios";
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
        this.changePageTitle('أدمن المهنين');
    },
    data() {
        return {
            api_user: {},
            api_user1: {},
            api_user2: {},
            true_delete: 'none',
            divWhiteDisplay1: 'none',
        };
    },
    mounted() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('invalidCredentials') === 'true') {
            this.divWhiteDisplay1 = 'block';
        }
        if (urlParams.get('true_delete') === 'true') {
            this.true_delete = 'block';
        }
        const id = this.$route.query.id;
        axios
            .get(`http://localhost/graduatproject-main/src/components/folder%20english/select%20page%20voicational%20english.php?id=${id}`)
            .then((response) => {
                this.api_user = response.data;
            })
        axios
            .get(`http://localhost/graduatproject-main/src/components/folder%20english/select%20page%20client%20english.php`)
            .then((response) => {
                this.api_user1 = response.data;
            })
        axios
            .get(`http://localhost/graduatproject-main/src/components/folder%20english/page%20select%20client%20link%20join.php?id=${id}`)
            .then((response) => {
                this.api_user2 = response.data;
            })
    },
    methods: {
        getLink(id) {
            return `http://localhost/graduatproject-main/src/components/folder%20arap/insert%20link%20vocational%20arap.php?id=${id}_${this.$route.query.id}`;
        },
        my_delete(id) {
            return `http://localhost/graduatproject-main/src/components/folder%20arap/delete%20voicational%20arap.php?id=${id}_${this.$route.query.id}`;
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
        hideDivWhite1() {
            this.divWhiteDisplay1 = 'none';
        },
        button_delete() {
            this.true_delete = 'none';
        },
        changePageTitle(newTitle) {
            document.title = newTitle;
        },
    },
}
</script>
