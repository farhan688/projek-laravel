<x-app>
    <form action="{{  route('post.store') }}"> method="POST">
        @csrf
        <div class="mb-3">
            <label for="title"> Tittle </label>
            <input type="text" name="title">
            @error('title')
                <span class="text-red-500"> {{ $message }}</span>

            @enderror
        </div>

        <div class="mb-3">
            <label for="title"> Tittle </label>
            <input type="text" name="body">
            @error('title')
                <span class="text-red-500"> {{ $message }}</span>

            @enderror
        </div>
        <button></button>
    </form>
</x-app>
