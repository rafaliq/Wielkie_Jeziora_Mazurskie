{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

  @section('content')

  @php $sections = get_field('components') @endphp
  
  
  @foreach ($sections as $section)
    @php ($sectionName = $section['acf_fc_layout']) @endphp

    {{-- SLIDER --}} 
    @includeWhen($sectionName == 'slider', 'partials.slider', ['data' => $section])

    {{-- HERO --}} 
    @includeWhen($sectionName == 'Hero', 'partials.hero', ['data' => $section])

    {{-- TEXT IMG --}} 
    @includeWhen($sectionName == 'textImg', 'partials.text-img', ['data' => $section])

    {{-- ASORTYMENT --}}
    @includeWhen($sectionName == 'products', 'partials.products', ['data' => $section])

    {{-- Kontakt --}}
    @includeWhen($sectionName == 'contact', 'partials.contact')

    {{-- Marki --}}
    @includeWhen($sectionName == 'partners', 'partials.partners')

    {{-- BLUE BOX --}}
    @includeWhen($sectionName == 'blueBox', 'partials.blue-box', ['data' => $section])
   
    {{-- Opinions --}}
    @includeWhen($sectionName == 'opinie', 'partials.opinions')
    
    {{-- Breadcramps --}}
    @includeWhen($sectionName == 'breadcramps', 'partials.breadcramps')
    
    {{-- Team --}}
    @includeWhen($sectionName == 'team', 'partials.team', ['data' => $section])
    
    {{-- Content --}}
    @includeWhen($sectionName == 'content', 'partials.my-content', ['data' => $section])

    {{-- News --}}
    @includeWhen($sectionName == 'news', 'partials.news')


  @endforeach

@endsection