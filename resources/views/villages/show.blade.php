@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <div class="border p-4">
    <div class="mb-4 text-right">
      <a class="btn btn-primary" href="{{ route('villages.edit', ['village' => $village]) }}">
        編集する
      </a>
      <form style="display: inline-block;" method="POST" action="{{ route('villages.destroy', ['village' => $village]) }}">
        @csrf
        @method('DELETE')

        <button class="btn btn-danger">削除する</button>
      </form>
    </div>
    <h1 class="h5 mb-4">
      {{ $village->title }}
    </h1>

    <p class="mb-5">
      {!! nl2br(e($village->body)) !!}
    </p>
    <form class="mb-4" method="POST" action="{{ route('comments.store') }}">
      @csrf

      <input name="village_id" type="hidden" value="{{ $village->id }}">

      <div class="form-group">
        <label for="body">
          本文
        </label>

        <textarea id="body" name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="4">{{ old('body') }}</textarea>
        @if ($errors->has('body'))
        <div class="invalid-feedback">
          {{ $errors->first('body') }}
        </div>
        @endif
      </div>

      <div class="mt-4">
        <button type="submit" class="btn btn-primary">
          コメントする
        </button>
      </div>
    </form>
    <section>
      <h2 class="h5 mb-4">
        コメント
      </h2>

      @forelse($village->comments as $comment)
      <div class="border-top p-4">
        <time class="text-secondary">
          {{ $comment->created_at->format('Y.m.d H:i') }}
        </time>
        <p class="mt-2">
          {!! nl2br(e($comment->body)) !!}
        </p>
      </div>
      @empty
      <p>コメントはまだありません。</p>
      @endforelse
    </section>
  </div>
</div>
@endsection