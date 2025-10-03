@extends('layouts.app')

@section('content')
<h2>ini berasal dari kodingan page promo</h2>
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
