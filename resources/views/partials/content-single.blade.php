@php 
  $hero = get_field('hero');
  $date = get_the_date('d/m/Y');
  $authors = get_field('author');
  $sidebar = get_field('show_sidebar');
  $image = get_field('sidebar_image');
@endphp


@include('partials.hero', ['data'=>$hero, 'date'=> $date])
@include('partials.breadcramps')


<section class="section">
  <div class="container">
    <div class="row single-post">
      @if($sidebar)
      <div class="single-post__sidebar col-sm-4 col-xl-3">
        @if($authors)
          @foreach ($authors as $author )
          <div class="single-post__avatar @if( $loop -> last ) single-post__avatar--last @endif">
            @include('components.avatar', ['member'=>$author])
          </div>
          @endforeach
        @endif
        @if($image)
          <img class="single-post__image" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
        @endif
        @include('partials.taglist')
        @include('partials.share')
      </div>
      @endif
      <div class="single-post__content @if(!$sidebar) single-post__content--full col-12 @else col-sm-8 col-xl-8 offset-xl-1 @endif">
        <article>
          <div class="entry-content">
            @php the_content() @endphp
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

@include('partials.partners')




