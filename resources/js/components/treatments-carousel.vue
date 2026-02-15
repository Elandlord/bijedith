<template>
    <div class="carousel-shell">
        <div
            ref="track"
            class="carousel-track"
            :style="trackStyle"
        >
            <article v-for="slide in slides" :key="slide.image" class="single-service carousel-slide">
                <img :data-src="slide.image" class="object-cover service-card lazyload" alt="" />
                <div class="service-hover">
                    <img data-src="/assets/images/icons/1.png" class="lazyload" alt="" />
                    <span>{{ slide.title }}</span>
                </div>
            </article>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            activeIndex: 0,
            autoplayMs: 4500,
            intervalId: null,
            itemsPerView: 1,
            slides: [
                { image: '/assets/pictures/DCM_9932-pichi.png', title: 'Pedicure' },
                { image: '/assets/pictures/DCM_9962-pichi.png', title: 'Pedicure' },
                { image: '/assets/pictures/DF2_2043-3-pichi.png', title: 'Pedicure' },
                { image: '/assets/pictures/DF2_2051-pichi.png', title: 'Pedicure' },
            ],
        };
    },

    computed: {
        maxIndex() {
            return Math.max(this.slides.length - this.itemsPerView, 0);
        },

        trackStyle() {
            return {
                '--carousel-items': this.itemsPerView,
            };
        },
    },

    mounted() {
        this.setItemsPerView();
        window.addEventListener('resize', this.setItemsPerView);
        this.startAutoplay();
    },

    beforeDestroy() {
        this.stopAutoplay();
        window.removeEventListener('resize', this.setItemsPerView);
    },

    methods: {
        setItemsPerView() {
            const width = window.innerWidth;

            if (width <= 600) {
                this.itemsPerView = 1;
                return;
            }

            if (width <= 900) {
                this.itemsPerView = 2;
                return;
            }

            if (width <= 1200) {
                this.itemsPerView = 3;
                return;
            }

            this.itemsPerView = 4;
        },

        startAutoplay() {
            if (this.slides.length <= this.itemsPerView) {
                return;
            }

            this.intervalId = window.setInterval(() => {
                this.activeIndex = this.activeIndex >= this.maxIndex ? 0 : this.activeIndex + 1;
                this.scrollToActive();
            }, this.autoplayMs);
        },

        stopAutoplay() {
            if (!this.intervalId) {
                return;
            }

            window.clearInterval(this.intervalId);
            this.intervalId = null;
        },

        scrollToActive() {
            const track = this.$refs.track;

            if (!track) {
                return;
            }

            const firstChild = track.children[0];

            if (!firstChild) {
                return;
            }

            track.scrollTo({
                behavior: 'smooth',
                left: firstChild.clientWidth * this.activeIndex,
            });
        },
    },
};
</script>

<style scoped>
.carousel-shell {
    overflow: hidden;
}

.carousel-track {
    display: flex;
    gap: 1.5rem;
    overflow-x: auto;
    scroll-behavior: smooth;
    scroll-snap-type: x mandatory;
}

.carousel-slide {
    flex: 0 0 calc((100% - (var(--carousel-items, 1) - 1) * 1.5rem) / var(--carousel-items, 1));
    scroll-snap-align: start;
}

.carousel-track::-webkit-scrollbar {
    display: none;
}
</style>
