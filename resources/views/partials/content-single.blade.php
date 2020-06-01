@php
  $postid = get_the_ID();
  $hero = get_field('hero');
  $date = get_the_date('d/m/Y');
  $sidebar = get_field('show_sidebar');
  $image = get_field('sidebar_image');
  $projectInfo = get_field('project-info');

  $args = array(
    'numberposts' => -1,
    'post_type' => 'post',
    'meta_key' => 'project',
    'meta_value' => $postid,
  );

  $posts = get_posts($args);
@endphp

@include('partials.hero', ['data'=>$hero, 'date'=> $date])
@include('partials.breadcramps')

<section class="section">
  <div class="container">
    <div class="row single-post">
      @if($sidebar)
      <div class="single-post__sidebar col-sm-4 col-xl-3">
        @if(get_post_type() == 'projekty')
          @include('partials.project-info', ['info' => $projectInfo])
        @endif
        @if($image && (get_post_type() !== 'projekty'))
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
            @if($posts)
              @include('partials.posts-project', ['posts' => $posts])
            @endif
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

@include('partials.partners')




