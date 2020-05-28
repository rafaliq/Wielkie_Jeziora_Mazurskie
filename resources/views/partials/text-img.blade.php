@php 
    $site = $data['pozycja'];
    $image = $data['image'];
    $title = $data['title'];
    $suptitle = $data['suptitle'];
    $content = $data['content'];
    $button_text = $data['button'];
    $button_link = $data['button_link'];
@endphp

<section class="text-img @if ($site == 'prawo') text-img--rev @endif">
    <div class="container">
        <div class="row text-img__wrapper">
            <div class="col-12 col-md-12 col-lg-6 text-img__image-wrapper">
                <img class="text-img__image" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
            </div>
            <div class="col-12 col-md-12 col-lg-6 text-img__content content-block">
                <h2 class="content-block__header heading title">
                    {{ $title }}
                    <span class="heading subheader">
                        {{ $suptitle }}
                    </span>
                </h2>
                <div class="content-block__content text body">
                    {!! $content !!}
                </div>
                @if($button_text) 
                <a href="{{ $button_link }}" class="button button--primary">
                    {{ $button_text }}
                </a>
                @endif
            </div>
        </div>
    </div>
</section>