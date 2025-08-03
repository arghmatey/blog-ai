@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-6">
    <form method="POST" action="{{ route('ai.generate') }}">
        @csrf
        <div class="mb-3">
            <label for="prompt" class="form-label">Blog Title</label>
            <input type="text" name="prompt" id="prompt" class="form-control" value="{{ old('prompt') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate</button>
    </form>

    @error('error')
        <div class="alert alert-danger mt-3">{{ $message }}</div>
    @enderror

    @isset($output)
        <div class="mt-4">
            <h2>Generated Post</h2>
            <textarea class="form-control" rows="10">{{ $output }}</textarea>
        </div>
    @endisset
</div>
@endsection