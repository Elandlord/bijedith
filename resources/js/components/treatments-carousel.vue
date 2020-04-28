<template>
    <carousel :items="items" :autoplay="autoplay" :nav="nav">
        <div class="single-service">
            <img src="/assets/images/service/spa.png" class="object-cover service-card" style="" alt="" />
            <div class="service-hover">
                <img src="/assets/images/icons/1.png" alt="" />
                <span>Behandeling 1</span>
            </div>
        </div>
        <div class="single-service">
            <img src="/assets/images/service/spa2.jpg" class="object-cover service-card" alt="" />
            <div class="service-hover">
                <img src="/assets/images/icons/1.png" alt="" />
                <span>Behandeling 2</span>
            </div>
        </div>
        <div class="single-service">
            <img src="/assets/images/service/spa3.jpg" class="object-cover service-card" alt="" />
            <div class="service-hover">
                <img src="/assets/images/icons/1.png" alt="" />
                <span>Behandeling 3</span>
            </div>
        </div>
        <div class="single-service">
            <img src="/assets/images/service/spa4.jpg" class="object-cover service-card" alt="" />
            <div class="service-hover">
                <img src="/assets/images/icons/1.png" alt="" />
                <span>Behandeling 4</span>
            </div>
        </div>
    </carousel>
</template>
<script>
    import carousel from 'vue-owl-carousel2'

    export default {
        components: { carousel },

        data() {
            return {
                items: 3,
                autoplay: true,
                nav: false,
            }
        }
    }
</script>
