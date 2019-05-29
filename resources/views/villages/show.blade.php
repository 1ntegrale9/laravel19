@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <div class="border p-4">
    @if ($is_editable)
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
    @endif
    <h1 class="h5 mb-4">
      {{ $village->title }}
    </h1>

    <p class="mb-5">
      {!! nl2br(e($village->body)) !!}
    </p>
    <form class="mb-4" method="POST" action="{{ route('remarks.store') }}">
      @csrf

      <input name="village_id" type="hidden" value="{{ $village->id }}">

      <div class="form-group">
        <textarea id="body" name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="4">{{ old('body') }}</textarea>
        @if ($errors->has('body'))
        <div class="invalid-feedback">
          {{ $errors->first('body') }}
        </div>
        @endif
      </div>

      <div class="mt-4">
        <button type="submit" class="btn btn-primary">
          発言
        </button>
      </div>
    </form>
    <section>

      @forelse($remarks as $remark)
      <div class="border-top p-3">
        <time class="text-secondary">
          {{ $remark->created_at->format('Y.m.d H:i') }}
        </time>
        <span class="text-secondary">
          {{ $remark->inhabitant->user->name }}
        </span>
        <p class="mt-2">
          {!! nl2br(e($remark->body)) !!}
        </p>
      </div>
      @empty
      <p>コメントはまだありません。</p>
      @endforelse
      <div class="d-flex justify-content-center mb-5">
        {{ $remarks->links() }}
      </div>
    </section>
  </div>
</div>
@endsection