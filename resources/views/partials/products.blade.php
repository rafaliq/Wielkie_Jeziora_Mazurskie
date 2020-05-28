@php 
$site = $data['pozycja'];
$title = $data['title'];
$suptitle = $data['suptitle'];
$content = $data['content'];
$button_text = $data['button'];
$button_link = $data['button_link'];

$categories = get_categories(array(
    'parent' => 0,
    'order'   => 'ASC',
    'exclude' => array(1, 5)
  ));
@endphp

<section class="products @if ($site == 'prawo') products--rev @endif">
<div class="container">
    <div class="row products__wrapper">
        <div class="col-12 col-md-12 col-lg-6 @if ($site == 'prawo') offset-lg-2 products--rev @endif products__slider rotator">
            @foreach ($categories as $cat)
                @php 
                    $cat_title = $cat -> name;
                    $description = $cat -> description;
                    $id_image = 'category_'. $cat -> term_id ;
                    $img = get_field('image', 'category_' . $cat -> term_id);
                    $index = $loop->iteration;
                    if($index < 10) {
                        $index  = '0'.$index; 
                    }
                @endphp
                <div class="rotator__cell">
                    @if($img )
                    <img class="rotator__image" src="{{ $img['url'] }}" alt="{{ $img ['alt'] }}">
                    @endif
                    <article class="rotator__content" data-index="{{ $index }}.">
                        <header class="rotator__header">
                            <h3 class="heading subheader">
                                {{ $cat_title }}
                            </h3>
                        </header>
                        <p class="text secoundary-body">
                            {{ $description }}
                        </p>
                    </article>
                </div>
            @endforeach
        </div>
        <div class="col-12 col-md-12 col-lg-4  products__content content-block">
            <h2 class="content-block__header heading title">
              {{ $title }}
              <span class="heading subheader">
                {{ $suptitle }}
              </span>
            </h2>
            <div class="content-block__content text body">
              {!! $content !!}
            </div>
            @if ($button_text)
            <a href="{{ $button_link }}" class="button button--primary">
              {{ $button_text }}
            </a>
            @endif
        </div>
    </div>
</div>
</section>