<div class="posts-project">
  @foreach ($posts as $post)
    <article class="posts-project__item">
      <a class="posts-project__elem" href="{{ get_permalink($post->ID) }}">
        <div class="posts-project__content">
          <h2 class="title title--small posts-project__title">
            {{ $post->post_title }}
          </h2>
          <p class="text text--small posts-project__desc">
            {{ $post->post_excerpt }}
          </p>
        </div>
        <div class="button button--corner button--dark button--small">
          @include('svg.arrow', ['class' => 'posts-project__svg'])
        </div>
      </a>
    </article>
  @endforeach
</div>