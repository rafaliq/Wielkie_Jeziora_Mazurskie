@php

$args = array(
  'posts_per_page'   => 3,
  'offset'           => 0,
  'orderby' => 'date',
  'order'    => 'ASC',
  'post_type'        => 'projekty',
  'post_status'      => 'publish',
  'suppress_filters' => true,
);

$projects = get_posts($args);

@endphp

<section class="section section--home">
  <div class="container">
    <div class="col-12 section__header">
      <h2 class="title">
        Projekty
      </h2>
    </div>
    <ul class="projects">
      @foreach($projects as $project)
        <li class="projects__item">
          <a class="projects__elem" href="{{ get_permalink($project->ID) }}">
            <div class="project__content">
              <h2 class="subheeader">
                {{ $project->post_title }}
              </h2>
              <p class="text text--small projects__desc">
                {{ $project->post_excerpt }}
              </p>
            </div>
            <div class="button button--corner button--dark">
              @include('svg.arrow', ['class' => 'projects__svg'])
            </div>
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</section>