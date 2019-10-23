<section id="team">
    <h2>Team</h2>
    <div class="row">
        
        @while($team_loop->have_posts()) @php($team_loop->the_post())
            <div class="col-md-4 person">
                <a href="{{ the_permalink() }}">
                    <img class="portrait" src="{{ the_post_thumbnail_url() }}" />
                </a>
                <h5>{!! get_the_title() !!}</h5>
                <p>{{ the_field('role') }}</p>
            </div>
        @endwhile
        @php(wp_reset_postdata())
    </div>
</section>