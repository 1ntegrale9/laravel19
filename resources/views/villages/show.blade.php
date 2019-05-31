@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <div class="border p-4">

    @if ($is_standby)
    <div class="mb-4">
      <div class="text-right">
        @if ($is_joined)
        <form style="display: inline-block;" method="POST" action="{{ route('inhabitants.destroy', ['inhabitant' => $inhabitant]) }}">
          @csrf
          @method('DELETE')

          <input type="hidden" name="village_id" value="{{ $village->id }}">
          <button class="btn btn-danger">退村</button>
        </form>
        @else
        <form style="display: inline-block;" method="POST" action="{{ route('inhabitants.store') }}">
          @csrf

          <input type="hidden" name="village_id" value="{{ $village->id }}">
          <button class="btn btn-primary">入村</button>
        </form>
        @endif

        @if ($is_author)
        <a class="btn btn-primary" href="{{ route('villages.edit', ['village' => $village]) }}">
          村の編集
        </a>
        <form style="display: inline-block;" method="POST" action="{{ route('villages.destroy', ['village' => $village]) }}">
          @csrf
          @method('DELETE')

          <button class="btn btn-danger">村の削除</button>
        </form>
      </div>
      @endif
    </div>
    @endif

    <h1 class="h5 mb-4">
      {{ $village->title }}
    </h1>

    <p class="mb-5">
      {!! nl2br(e($village->body)) !!}
    </p>

    <section>
      <p>
        <span class="text-success">
          【生存者】
          @forelse($survivors as $survivor)
          {{ $survivor->user->name }}
          @empty
          住人はまだいません。
          @endforelse
        </span>
      </p>
      <p>
        <span class="text-danger">
          【犠牲者】
          @forelse($deads as $dead)
          {{ $dead->user->name }}
          @empty
          人狼なんていませんよ。
          @endforelse
        </span>
      </p>
    </section>

    @if ($is_joined)
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
    @endif

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
      <p>発言はまだありません。</p>
      @endforelse
      <div class="d-flex justify-content-center mb-5">
        {{ $remarks->links() }}
      </div>
    </section>
  </div>
</div>
@endsection