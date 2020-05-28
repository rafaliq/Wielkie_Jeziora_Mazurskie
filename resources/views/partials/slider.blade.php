@php 
    $silder = $data['slider'];
@endphp

<section class="slider">
    <div class="slider__carousel col-12"> 
        @foreach ( $silder as $img )
        <div class="slider__cell carousel-cell">
            <div class="slider__baner">
                <div class="slider__content">
                    <header class="slider__header">
                        @if($lopp->first)
                        <h1 class="heading headline">
                            {{ $img['title'] }}
                            <span class="heading title">
                                {{ $img['suptitle'] }}
                            </span>
                        </h1> 
                        @else
                        <h2 class="heading headline">
                            {{ $img['title'] }}
                            <span class="heading title">
                                {{ $img['suptitle'] }}
                            </span>
                        </h2> 
                        @endif
                    </header>
                </div>
            </div>
            <img  class="slider__img" src="{{ $img['image']['url'] }}" a lt="{{ $img['image']['alt'] }}">
        </div>
        @endforeach
    </div>
</section>