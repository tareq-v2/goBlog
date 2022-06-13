@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
     Blogs
@endsection

{{-- Active Menu --}}
@section('blog')
    active
@endsection

@section('blogSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">Blog</li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
@endsection

{{-- Main Content --}}
@section('content')
<div class="row" id="basic-table">
    <div class="col-md-12 col-12 m-auto">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Category Name <span class="text-danger"> *</span></label>
                        <select name="category_id" class="form-control">
                            <option value>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $blog->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label">Title <span class="text-danger"> *</span></label>
                        <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label">Quote <span class="text-danger"> *</span></label>
                        <input type="text" name="quote" class="form-control" value="{{ $blog->quote }}">
                        @error('quote')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label">Editor Comment</label>
                        <input type="text" name="editor_comment" class="form-control" value="{{ $blog->editor_comment }}">
                        @error('editor_comment')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label">Blog Photo <span class="text-danger"> *</span></label>
                        <input type="file" name="blog_photo" class="form-control">
                        @error('blog_photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label">Editor Photo</label>
                        <input type="file" name="editor_photo" class="form-control">
                        @error('editor_photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Long Description <span class="text-danger"> *</span></label>
                        <input type="hidden" name="description" id="description" class="form-control" value="{!! $blog->description !!}">
                        <trix-editor input="description" style="min-height: 12rem !important"></trix-editor>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
