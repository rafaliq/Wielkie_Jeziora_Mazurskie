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
    @includeWhen($sectionName == 'marki', 'partials.marki')
  @endforeach

@endsection