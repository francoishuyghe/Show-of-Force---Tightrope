<div class="trailer-btn">
        <a><img src="@asset('images/play-button.svg')"></a> Watch the trailer
    </div>
    <div class="trailer-player">
        <div class="container">
            <div class="player-wrap">
            <?php

            // Load value.
            $iframe = $data['trailer'];
            
            // Use preg_match to find iframe src.
            preg_match('/src="(.+?)"/', $iframe, $matches);
            $src = $matches[1];
            
            // Add extra parameters to src and replace HTML.
            $params = array(
                'controls'  => 0,
                'hd'        => 1,
                'autohide'  => 1,
                'autoplay'  => 1
            );
            $new_src = add_query_arg($params, $src);
            $iframe = str_replace($src, $new_src, $iframe);
            $iframe = str_replace('src=', 'source=', $iframe);
            
            // Add extra attributes to iframe HTML.
            $attributes = 'frameborder="0"';
            $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
            
            // Display customized HTML.
            echo $iframe;
            ?>
        </div>
        </div>
    </div>