<template>
    <carousel :items="items" :autoplay="autoplay" :nav="nav" v-if="items != null">
        <div class="single-service">
            <img data-src="/assets/pictures/DCM_9932-pichi.png" class="object-cover service-card lazyload" style="" alt="" />
            <div class="service-hover">
                <img data-src="/assets/images/icons/1.png" class="lazyload" alt="" />
                <span>Pedicure</span>
            </div>
        </div>
        <div class="single-service">
            <img data-src="/assets/pictures/DCM_9962-pichi.png" class="object-cover service-card lazyload" alt="" />
            <div class="service-hover">
                <img data-src="/assets/images/icons/1.png" class="lazyload" alt="" />
                <span>Pedicure</span>
            </div>
        </div>
        <div class="single-service">
            <img data-src="/assets/pictures/DF2_2043-3-pichi.png" class="object-cover service-card lazyload" alt="" />
            <div class="service-hover">
                <img data-src="/assets/images/icons/1.png" class="lazyload" alt="" />
                <span>Pedicure</span>
            </div>
        </div>
        <div class="single-service">
            <img data-src="/assets/pictures/DF2_2051-pichi.png" class="object-cover service-card lazyload" alt="" />
            <div class="service-hover">
                <img data-src="/assets/images/icons/1.png" class="lazyload" alt="" />
                <span>Pedicure</span>
            </div>
        </div>


<!--        <div class="single-service">-->
<!--            <img data-src="/assets/images/service/spa3.png" class="object-cover service-card lazyload" alt="" />-->
<!--            <div class="service-hover">-->
<!--                <img data-src="/assets/images/icons/1.png" class="lazyload" alt="" />-->
<!--                <span>Behandeling 5</span>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="single-service">-->
<!--            <img data-src="/assets/images/service/spa2.png" class="object-cover service-card lazyload" alt="" />-->
<!--            <div class="service-hover">-->
<!--                <img data-src="/assets/images/icons/1.png" class="lazyload" alt="" />-->
<!--                <span>Behandeling 6</span>-->
<!--            </div>-->
<!--        </div>-->
    </carousel>
</template>
<script>
    import carousel from 'vue-owl-carousel2'

    export default {
        components: { carousel },

        data() {
            return {
                items: null,
                autoplay: true,
                nav: false,
                width: null,
            }
        },

        mounted() {
            this.width = $(window).width();
            this.getScreenWidth();
        },

        methods: {
            getScreenWidth() {
                if(this.width <= 600) {
                    this.items = 1;
                    return;
                }

                if(this.width <= 900) {
                    this.items = 2;
                    return;
                }

                if(this.width <= 1200) {
                    this.items = 3;
                    return;
                }

                if(this.width > 1200) {
                    this.items = 4;
                    return;
                }
            }
        }
    }
</script>
