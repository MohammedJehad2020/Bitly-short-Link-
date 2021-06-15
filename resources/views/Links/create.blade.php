<x-dashboard-layout title="Create New Link">


    @if (session()->has('success'))
    <div class="alert alert-success">
        <?= session()->get('success') ?>
    </div>
    @endif


    <form action="{{ route('Link.store') }}" method="post">
        @csrf
        <div class="form-group mb-2">
            <label class="mb-2 fs-5" for="">Link Path:</label>
            <textarea name="link" class="form-control @error('link') is-invalid @enderror">

            </textarea>
            @error('link')
            <p class="invalid-feedback d-block">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Create</button>
        </div>
    </form>


</x-dashboard-layout>