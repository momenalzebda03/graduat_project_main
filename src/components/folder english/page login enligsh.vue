<template>
    <div>
        <section>
            <div
                class="div_body w-100 d-flex justify-content-center align-items-center overflow-hidden position-absolute my_top">
                <div class="loading-container w-100 text-center text-white position-relative">
                    <div class="container">
                        <div class="loading-text mb-4 d-flex flex-column flex-lg-row">
                            <span>L</span>
                            <span>O</span>
                            <span>A</span>
                            <span>D</span>
                            <span>I</span>
                            <span>N</span>
                            <span>G</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: "ComponentLogin",
    created() {
        this.changePageTitle('LOGIN');
    },
    methods: {
        changePageTitle(newTitle) {
            document.title = newTitle;
        }
    },
    mounted() {
        setTimeout(() => {
            window.open("/home_english", "_self");
        }, 3000);
    }
}
</script>