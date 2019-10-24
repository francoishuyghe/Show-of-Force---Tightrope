<section id="carousel">
    <div class="prevArrow arrow"><i class="fal fa-arrow-left"></i></div>
    <div class="nextArrow arrow"><i class="fal fa-arrow-right"></i></div>
    <div class="slides">
        @foreach ($data['images'] as $image)
            <div class="slide">
                <img src="{{ $image['url'] }}" />
            </div>
        @endforeach
    </div>
</section>