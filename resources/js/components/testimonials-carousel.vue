<template>
    <carousel :items="items" :autoplay="autoplay" :nav="nav">
        <div class="single-tst" v-for="n in 3">
            <img data-src="/assets/images/quote.png" class="lazyload" style="width: 40px;" alt="" />
            <p>Ik werd zeer gastvrij ontvangen in een mooie, verzorgde spa.</p>
            <div class="client-info">
                <img data-src="/assets/images/person_1.jpg" alt="" class="thumb lazyload" />
                <p>Eric Landheer, <span>software-ontwikkelaar</span></p>
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
                items: 1,
                autoplay: true,
                nav: false,
            }
        }
    }
</script>
