<section id="read">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                {!! $data['about_book'] !!}
            <a class="btn" href="{{ $data['book_link'] }}">Buy Now</a>
                <a class="btn" href="/book" >Learn More</a>
            </div>
            <div class="col-md-6">
                <img src="{{ $data['book_image']['url'] }}"/>
            </div>
        </div>
    </div>
</section>