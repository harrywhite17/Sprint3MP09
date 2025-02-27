@extends('layouts.videos-app-layout')

@section('content')
    @can('create videos')
        <h1>Create Video</h1>
        <form action="{{ route('videos.manage.store') }}" method="POST" data-qa="form-create-video" class="create-video-form">
            @csrf
            <div class="form-group">
                <label for="title" data-qa="label-title">Title:</label>
                <input type="text" id="title" name="title" required data-qa="input-title" class="form-control">
            </div>

            <div class="form-group">
                <label for="description" data-qa="label-description">Description:</label>
                <textarea id="description" name="description" required data-qa="textarea-description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="url" data-qa="label-url">Video URL:</label>
                <input type="url" id="url" name="url" required data-qa="input-url" class="form-control">
            </div>

            <button type="submit" data-qa="button-submit" class="btn btn-primary">Create</button>
        </form>
    @else
        <p>You do not have permission to view this page.</p>
    @endcan
@endsection

@section('styles')
    <style>
        .create-video-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
@endsection