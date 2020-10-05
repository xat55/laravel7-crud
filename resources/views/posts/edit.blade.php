@extends('layouts.app')

@section('title', 'Редактирование поста ' . $post->id)

@section('content')
<div class="row">
  <div class="col-lg-6 mx-auto">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div><br />
    @endif
    <form method="post" action="{{ route('posts.update', $post) }}">
      @method('PATCH')
      @csrf
      <div class="form-group">
        <label for="post-title">Название</label>
        <input name="title" type="text" class="form-control" value="{{ $post->title }}" id="exampleFormControlInput1">
      </div>
      <div class="form-group">
        <label for="post-description">Описание</label>
        <textarea name="description" type="text" class="form-control" id="exampleFormControlInput1">{{ $post->description }}</textarea>
      </div>
      <div class="form-group">
        <label for="post-price">Цена</label>
        <input name="price" type="text" class="form-control" value="{{ $post->price }}" id="exampleFormControlInput1">
      </div>
      <button type="submit" name="button" class="btn btn-success">Редактировать пост</button>
    </form>
  </div>
</div>
@endsection
