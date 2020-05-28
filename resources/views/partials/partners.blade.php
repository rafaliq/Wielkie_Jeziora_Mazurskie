@php
    $args = array(
        'posts_per_page'   => 999,
        'offset'           => 0,
        'orderby' => 'date',
        'order'    => 'ASC',
        'post_type'        => 'partnerzy',
        'post_status'      => 'publish',
        'suppress_filters' => true,
    );

    $partners = get_posts( $args );
@endphp

@if($partners)
<section class="section section--special">
    <div class="container">
        <div class="row">
            <div class="col-12 section__wrapper">
                <div class="partners">
                <ul class="partners__wrapper" style="width: {{ 4 * 2 * 300}}px">
                    @for ($i = 0; $i < 2; $i++)
                        @foreach ($partners as $partner)
                        <li class="partners__item">
                            <a class="partners__link" href="{{ get_permalink($partner -> ID) }}">
                                {!! get_the_post_thumbnail($partner -> ID, 'full', ['class' => 'partners__image']) !!}
                                <span class="partners__name">
                                    {{ $partner -> post_title }}
                                </span>
                            </a>
                        </li>
                        @endforeach
                    @endfor
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endif