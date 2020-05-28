@php
    $content = $data['content'];
    $title = $data['title'];
@endphp

<section class="section">
    <div class="container">
        <div class="row">
            @include('partials.section-header', ['title'=> $title])
            <div class="col-12 col-sm-8 offset-sm-2 section__content">
               {!! $content !!}
            </div>
        </div>
    </div>
</section>