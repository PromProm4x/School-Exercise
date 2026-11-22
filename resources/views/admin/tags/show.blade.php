@extends('admin.layouts.master_layout')

@section('pageTitle', 'Show tag')
@section('content-header-title','Show tag')
@section('content-header-home','Tags')
@section('content-header-list','Show tag')

@push('styles')
@endpush

@section('content')
<div class="row">
    <div class="col-8 offset-2">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tag Details</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $tag->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $tag->name }}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ $tag->slug }}</td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{ $tag->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{ $tag->updated_at->format('Y-m-d H:i') }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.tags.index') }}" class="btn btn-secondary">Back</a>
                <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection



