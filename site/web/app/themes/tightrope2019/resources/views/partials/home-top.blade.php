<section id="top">
    <div class="text">
        <div class="center fadeUp">
            <h6>
                <img src="{{$data['sof_logo']['url']}}"/> presents
            </h6>
            <div class="title">
                <h1>{{ get_bloginfo('name', 'display') }}</h1>
                <h3>{{ get_bloginfo('description') }}</h3>
            </div>
            <p>{{$data['website_intro']}}</p>
        </div>
        <div class="bottom fadeUp">
            @include('partials.trailer-button')
        </div>
    </div>
    <div class="image" style="background-image: url({{$data['banner_image']['url']}})">
        <div class="caption">{{ $data['banner_image']['caption'] }}</div>
    </div>
</section>