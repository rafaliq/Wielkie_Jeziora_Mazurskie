<section class="section section--home">
  <div class="container">
    <div class="col-12 section__header">
      <h2 class="title">
        Aktualności
      </h2>
    </div>
    <div class="row">
      <ul class="posts">
        @foreach (news(4) as $post) 
          <li class="posts__list">
            <article class="post">
              <a class="post__wrapper" href="{{ get_permalink($post->ID) }}">
                <div class="post__image-wrapper">
                  @if(get_the_post_thumbnail_url($post->ID))
                    <img class="post__image" src="{{ get_the_post_thumbnail_url($post->ID) }}" alt="{{ $post->post_title }}">
                  @else
                    <img class="post__image" src="https://placeimg.com/640/480/nature" alt="{{ $post->post_title }}">
                  @endif
                  <div class="post__hover">
                      <span class="post__icon subtitle">
                          @include('svg.glasses')
                          CZYTAJ WIĘCEJ
                      </span>
                  </div>
                </div>
                <div class="post__content">
                  <header class="post__header">
                    <h2 class="subheeader">
                      {{ $post->post_title }}
                    </h2>
                  </header>
                  <p class="text text--small post__excerpt">
                    {{ esc_html($post->post_excerpt) }}
                  </p>
                  <footer class="post__footer">
                      <p class="post__date">
                        {{ format_date($post->post_date) }}
                      </p>
                  </footer>
                </div>
              </a>
              <a href="{{ get_permalink($post->ID) }}" class="button button--primary button--corner post__button">
                @include('svg.arrow', ['class' => 'post__svg'])
              </a>
            </article>
          </li>
        @endforeach
      </ul>
  </div>
  </div>
</section>
@include('partials.projects')
@include('partials.orders')