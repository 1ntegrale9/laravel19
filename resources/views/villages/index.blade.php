@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <div class="mb-4">
    <a href="{{ route('villages.create') }}" class="btn btn-primary">
      新しい村を作る
    </a>
  </div>
  @foreach ($villages as $village)
  <div class="card mb-4">
    <div class="card-header">
      <a class="card-link" href="{{ route('villages.show', ['village' => $village]) }}">
        {{ $village->title }}
      </a>
    </div>
    <div class="card-body">
      <p class="card-text">
        {!! nl2br(e(str_limit($village->body, 200))) !!}
      </p>

    </div>
    <div class="card-footer">
      <span class="badge badge-primary">
        Author = {{ $village->user->name }}
      </span>
      <span class="badge badge-primary">
        Created = {{ $village->created_at->format('Y.m.d') }}
      </span>

      @if ($village->inhabitants->count())
      <span class="badge badge-primary">
        Inhabitants = {{ $village->inhabitants->count() }}
      </span>
      @endif
    </div>
  </div>
  @endforeach
  <div class="d-flex justify-content-center mb-5">
    {{ $villages->links() }}
  </div>
</div>
@endsection