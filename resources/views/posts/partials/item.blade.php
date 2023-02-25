<div class="px-8 py-8 max-w-lg">
    <div class="shadow-2xl" >
        <div class="px-4 py-2 mt-2 bg-white">
            <a href="{{ route("posts.show", $post->id) }}">
            <h2 class="font-semibold text-2xl underline decoration-sky-500">{{ $post->title }}</h2>
            </a>
            <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
            Address: {{ $post->address }}
            </p>
            <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
            Phone: {{ $post->telephone }}
            </p>
            <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
            Director: {{ $post->director }}
            </p>
        </div>
    </div>
</div>