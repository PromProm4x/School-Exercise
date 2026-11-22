@extends('admin.layouts.master_layout')

@section('pageTitle', 'Create tags')
@section('content-header-title','Create tags')
@section('content-header-home','Tags')
@section('content-header-list','Create tags')
 

@push('styles')
@endpush
 



@section('content')
 

    <div class="row">
        <div class="col-6 offset-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create a new tag</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin.tags.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="tag_name">Name:</label>
                    <input type="text" class="form-control" id="tag_name" name="name" placeholder="Enter name">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush




