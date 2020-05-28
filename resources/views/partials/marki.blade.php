@php
    $brands = get_categories(array(
        'parent' => 5,
        'order'   => 'ASC',
        'exclude' => array(1)
    ));
@endphp

<section class="section brands">
    <div class="container">
        <div class="row">
            <header class="col-12 section__header">
                <h2 class="headeding title">
                    WSPÓŁPRACA
                </h2>
            </header>
            @if($brands)
            @foreach ($brands as $item)
            @php
                $name = $item -> name;
                $image = get_field('image', 'category_'.$item -> term_id );
                $link = get_field('link', 'category_'.$item -> term_id );
            @endphp

            <div class="col-4 col-sm brands__item">
                <a href="{{ $link }}" target="_blank">
                    @if($image) 
                        <img src="{{ $image['url'] }}" alt="{{ $name }}">
                    @else
                        <h3 class="brands__title">{{ $name }}</h3>
                    @endif
                </a>
            </div>
            @endforeach
            @else 
            @endif
        </div>
    </div>
</section>