<template>
    <div class="testimonial-carousel">
        <div ref="track" class="testimonial-track">
            <article
                v-for="(slide, index) in slides"
                :key="index"
                class="single-tst testimonial-slide"
                :class="{ 'is-active': index === activeIndex }"
            >
                <img data-src="/assets/images/quote.png" class="lazyload quote" alt="" />
                <p>{{ slide.quote }}</p>
                <div class="client-info">
                    <img data-src="/assets/images/person_1.jpg" alt="" class="thumb lazyload" />
                    <p>{{ slide.author }}, <span>{{ slide.role }}</span></p>
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
            autoplayMs: 5500,
            intervalId: null,
            slides: [
                {
                    quote: 'Ik werd zeer gastvrij ontvangen in een mooie, verzorgde spa.',
                    author: 'Eric Landheer',
                    role: 'software-ontwikkelaar',
                },
                {
                    quote: 'Rust, vakmanschap en persoonlijke aandacht in elke behandeling.',
                    author: 'Anonieme client',
                    role: 'vaste klant',
                },
                {
                    quote: 'Een fijne plek waar je echt met lichte voeten naar buiten loopt.',
                    author: 'Anonieme client',
                    role: 'bezoeker',
                },
            ],
        };
    },

    mounted() {
        this.startAutoplay();
    },

    beforeDestroy() {
        this.stopAutoplay();
    },

    methods: {
        startAutoplay() {
            if (this.slides.length <= 1) {
                return;
            }

            this.intervalId = window.setInterval(() => {
                this.activeIndex = this.activeIndex >= this.slides.length - 1 ? 0 : this.activeIndex + 1;
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
.testimonial-track {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    scroll-snap-type: x mandatory;
}

.testimonial-slide {
    flex: 0 0 100%;
    opacity: 0.45;
    scroll-snap-align: start;
    transition: opacity 0.25s ease;
}

.testimonial-slide.is-active {
    opacity: 1;
}

.single-tst {
    border-radius: 1rem;
    border: 1px solid #d6eaf1;
    background: #ffffff;
    padding: 2rem;
    text-align: center;
}

.quote {
    width: 40px;
    margin: 0 auto 1rem;
}

.client-info {
    margin-top: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
}

.thumb {
    width: 48px;
    height: 48px;
    border-radius: 9999px;
    object-fit: cover;
}

.testimonial-track::-webkit-scrollbar {
    display: none;
}
</style>
