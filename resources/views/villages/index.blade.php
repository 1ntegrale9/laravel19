@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <div class="mb-4">
    <a href="{{ route('villages.create') }}" class="btn btn-primary">
      村を新規作成する
    </a>
  </div>
  @foreach ($villages as $village)
  <div class="card mb-4">
    <div class="card-header">
      {{ $village->title }}
    </div>
    <div class="card-body">
      <p class="card-text">
        {!! nl2br(e(str_limit($village->body, 200))) !!}
      </p>

      <a class="card-link" href="{{ route('villages.show', ['village' => $village]) }}">
        村に入る
      </a>
    </div>
    <div class="card-footer">
      <span class="mr-2">
        作成日時 {{ $village->created_at->format('Y.m.d') }}
      </span>

      @if ($village->remarks->count())
      <span class="badge badge-primary">
        発言 {{ $village->remarks->count() }}件
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