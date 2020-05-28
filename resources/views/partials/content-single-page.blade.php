@php 
  $hero = get_field('hero');
@endphp


@include('partials.hero', ['data'=>$hero])
@include('partials.breadcramps')


<section class="section">
  <div class="container">
    <div class="row page-content">
      <div class="single-post__content col-12">
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




