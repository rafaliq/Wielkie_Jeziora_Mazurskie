@php
    $title = get_field('opinions_title', 'options');

    $args = array(
    'posts_per_page'   => 999,
    'offset'           => 0,
    'orderby' => 'date',
    'order'    => 'ASC',
    'post_type'        => 'opinie',
    'post_status'      => 'publish',
    'suppress_filters' => true,
    );

    $opinions = get_posts( $args );
@endphp



<section class="section">
    <div class="container">
        <div class="row">
            @include('partials.section-header', ['title'=> $title])
            <div class="col-12 section__content">
                <ul class="opinions">
                    @foreach($opinions as $opinion)
                    <li class="opinions__elem @if($loop -> index == 0) -is-active @endif" opinion="{{ $loop -> index }}">
                        
                        {!! get_the_post_thumbnail($opinion -> ID, 'full', ['class' => 'opinions__image']) !!}
                        <div class="opinions__content">
                            <p class="opinions__text large-body">
                                "{!! wp_strip_all_tags($opinion -> post_content) !!}"
                            </p>
                            <span class="opinions__name large-body">
                                {{ $opinion -> post_title }}
                            </span>
                        </div>

                    </li>
                    @endforeach
                    <li class="opinions__nav">
                        <button class="opinions__button opinions__button--prev" opinion-button data-direction="prev">
                            <span class="fas fa-angle-left"></span>
                        </button>
                        <button class="opinions__button opinions__button--next" opinion-button data-direction="next">
                            <span class="fas fa-angle-right"></span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>