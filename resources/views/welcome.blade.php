<x-site-layout>
            <section class="p-6">
                <div id="splide" class="splide relative">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="/images/andrew-coelho-aL7SA1ASVdQ-unsplash.jpg" alt="slide 1" class="w-full h-96 object-cover rounded-lg">
                            </li>
                            <li class="splide__slide">
                                <img src="/images/ash-amplifies-NQ6Lh81BTRs-unsplash.jpg" alt="slide 2" class="w-full h-96 object-cover rounded-lg">
                            </li>
                            <li class="splide__slide">
                                <img src="/images/jeremy-cai-ucYWe5mzTMU-unsplash.jpg" alt="slide 3" class="w-full h-96 object-cover rounded-lg">
                            </li>
                        </ul>
                        <button class="bg-amber-50 rounded-lg p-2">
                            Explore
                        </button>
                    </div>
                </div>
            </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#splide', {
                type: 'loop',
                autoplay: true,
                interval: 3000,
                pauseOnHover: true,
            }).mount();
        });
    </script>
</x-site-layout>
