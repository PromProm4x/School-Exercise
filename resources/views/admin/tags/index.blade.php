@extends('admin.layouts.master_layout')

@section('pageTitle', 'List all tags')
@section('content-header-title','List all tags')
@section('content-header-home','Tags')
@section('content-header-list','List all tags')

@push('styles')
@endpush

@section('content')

<div class="row">
    <div class="col-md-10 offset-1">
        <div class="card">
            {{-- Add New Tag left side button --}}
            <div class="card-header bg-primary justify-content-between align-items-center">
                <h3 class="card-title">All Tags</h3>
                <a href="{{ route('admin.tags.create') }}" class="btn-success btn-sm float-right">
                    <i class="fas fa-plus "></i> Add New Tag
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                </div>
                @endif

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tag Name</th>
                            <th>Create AT</th>
                            <th>Update At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tags as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->created_at->format('Y-m-d H:i') }}</td>
                            <td>{{ $row->updated_at->format('Y-m-d H:i') }}</td>
                            <td>
                                <a href="{{ route('admin.tags.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('admin.tags.show', $row->id) }}" class="btn btn-success">View</a>
                                <form action="{{ route('admin.tags.destroy', $row->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this tag?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">No tags found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                    <!-- <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tag Name</th>
                            <th>Create AT</th>
                            <th>Update At</th>
                            <th>Action</th>
                        </tr>
                    </tfoot> -->
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection

@push('scripts')
@endpush