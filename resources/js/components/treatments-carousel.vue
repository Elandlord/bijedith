<template>
    <div class="carousel-shell">
        <div ref="track" class="carousel-track" :style="trackStyle">
            <a
                v-for="slide in slides"
                :key="slide.image"
                :href="slide.href"
                class="single-service carousel-slide"
            >
                <img
                    :data-src="slide.image"
                    class="object-cover service-card lazyload"
                    alt=""
                />
                <div class="service-hover">
                    <img
                        data-src="/assets/images/icons/1.png"
                        class="lazyload"
                        alt=""
                    />
                    <span>{{ slide.title }}</span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="service-hover-arrow"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </div>
            </a>
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
                {
                    image: "/assets/pictures/DCM_9932-pichi.png",
                    title: "Pedicure",
                    href: "/behandelingen",
                },
                {
                    image: "/assets/pictures/DCM_9962-pichi.png",
                    title: "Behandeling",
                    href: "/behandelingen",
                },
                {
                    image: "/assets/pictures/DF2_2043-3-pichi.png",
                    title: "Voetzorg",
                    href: "/behandelingen",
                },
                {
                    image: "/assets/pictures/DF2_2051-pichi.png",
                    title: "Medische pedicure",
                    href: "/behandelingen",
                },
            ],
        };
    },

    computed: {
        maxIndex() {
            return Math.max(this.slides.length - this.itemsPerView, 0);
        },

        trackStyle() {
            return {
                "--carousel-items": this.itemsPerView,
            };
        },
    },

    mounted() {
        this.setItemsPerView();
        window.addEventListener("resize", this.setItemsPerView);
        this.startAutoplay();
    },

    beforeDestroy() {
        this.stopAutoplay();
        window.removeEventListener("resize", this.setItemsPerView);
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
                this.activeIndex =
                    this.activeIndex >= this.maxIndex
                        ? 0
                        : this.activeIndex + 1;
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
                behavior: "smooth",
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
    flex: 0 0
        calc(
            (100% - (var(--carousel-items, 1) - 1) * 1.5rem) /
                var(--carousel-items, 1)
        );
    scroll-snap-align: start;
}

.single-service {
    overflow: hidden;
    position: relative;
    border-radius: 1rem;
    cursor: pointer;
    text-decoration: none;
    color: inherit;
    display: block;
}

.service-card {
    display: block;
    width: 100%;
    height: 320px;
    transition: transform 0.3s ease-out;
}

.single-service:hover .service-card {
    transform: scale(1.1);
}

.service-hover {
    position: absolute;
    bottom: 1rem;
    left: 1rem;
    right: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    border-radius: 9999px;
    background: rgba(255, 255, 255, 0.9);
    padding: 0.5rem 1rem;
}

.service-hover img {
    height: 28px;
    width: 28px;
}

.service-hover span {
    font-size: 0.95rem;
    font-weight: 600;
}

.service-hover-arrow {
    height: 16px;
    width: 16px;
    margin-left: auto;
    transition: transform 0.2s ease;
}

.single-service:hover .service-hover-arrow {
    transform: translateX(3px);
}

.carousel-track::-webkit-scrollbar {
    display: none;
}
</style>
