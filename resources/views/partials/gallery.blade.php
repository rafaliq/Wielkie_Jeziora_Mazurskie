@php
    // print_r($data);
    $gallery = $data['gallery'];
@endphp

<section class="section section--gallery">
    <div class="container">
        <div class="row">
            <div class="section__header">
                @includeWhen(true == true, 'partials.section-header', ['title' => $data['title'], 'content'=> $data['text']])
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="gallery">
                   @php
                    $galleryName = rand(1, 999);    
                   @endphp
                   @foreach ($gallery as $img)
                    <a 
                        data-fancybox="gallery{{$galleryName}}" 
                        href="{{ $img['url'] }}"
                    >
                        <img class="gallery__image" src="{{ $img['sizes']['medium'] }}">
                    </a>   
                   @endforeach
               </div>
            </div>
        </div>
    </div>
</section>