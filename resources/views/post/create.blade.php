<x-app>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body">Text</label>
            <input type="text" name="body" value="{{ old('body') }}">
            @error('body')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Save</button>
    </form>
</x-app>
