<section id="team">
    <h2>Team</h2>
    <div class="row">
        
        @while($team_loop->have_posts()) @php($team_loop->the_post())
            <div class="col-md-4">
                <img src="{{ the_post_thumbnail_url() }}" />
                <h3>{!! get_the_title() !!}</h3>
                <h5>{{ the_field('role') }}</h5>
            </div>
        @endwhile
        @php(wp_reset_postdata())
    </div>
</section>