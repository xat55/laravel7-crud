@extends('layouts.app')

@section('title', 'Все посты')

@section('content')
<a class="btn btn-success" href="{{ route('posts.create') }}">Create post</a>

@if(session()->get('success'))
  <div class="alert alert-success mt-3">
    {{ session()->get('success') }}
  </div>
@endif

<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Название</th>
      <th scope="col">Описание</th>
      <th scope="col">Цена</th>
      <th scope="col" class="th-view">Действия</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{ $post->description }}</td>
      <td>{{ $post->price }}$</td>
      <td class="table-buttons">
        <a href="{{ route('posts.show', $post) }}" class="btn btn-success">
          <i class="fa fa-eye"> View</i>
        </a>
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">
          <i class="fa fa-pencil"> Edit</i>
        </a>
        <form class="" action="{{ route('posts.destroy', $post) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">
            <i class="fa fa-trash"> Delete</i>
          </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
