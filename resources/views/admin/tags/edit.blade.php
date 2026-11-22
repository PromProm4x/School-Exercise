@extends('admin.layouts.master_layout')

@section('pageTitle', 'Edit tags')
@section('content-header-title','Edit tags')
@section('content-header-home','Tags')
@section('content-header-list','Edit tags')

@push('styles')
@endpush

@section('content')
<div class="row">
    <div class="col-6 offset-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit tag</h3>
            </div>
            <form action="{{ route('admin.tags.update', $tag->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="tag_name">Name:</label>
                        <input type="text" class="form-control" id="tag_name" name="name" value="{{ old('name', $tag->name) }}" placeholder="Enter name">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.tags.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush