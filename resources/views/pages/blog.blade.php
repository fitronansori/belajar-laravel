<x-layout>
    <div class="container py-10">
        <div>
            <h1 class="text-4xl font-bold ">All Blog Post</h1>
            <p class="text-gray-600">
                All post from the blog will be shown here.
            </p>
        </div>

        <div class="mt-10 grid grid-cols-4 gap-y-10">
            @foreach ($posts as $post)
                <div class="relative w-[300px] h-[320px] border shadow-md rounded-lg flex flex-col justify-between">
                    <div>
                        <img src="/img/p1.jpg" `alt="" class="rounded-t-lg w-full h-[150px] bg-cover">
                    </div>

                    <div class="h-full flex flex-col justify-between p-4">
                        <div class="space-y-2">
                            <h1 class="text-lg font-bold line-clamp-1">{{ $post->title }}</h1>
                            <p class="text-gray-600 text-sm line-clamp-2">{{ $post->body }}</p>
                        </div>

                        <a href="/blog/post/{{ $post->slug }}">
                            <button class="w-full bg-blue-500 text-white rounded-lg px-4 py-2 font-semibold">
                                Read More &raquo;
                            </button>
                        </a>
                    </div>

                    <div
                        class="w-[150px] h-[50px] absolute top-0 left-0 bg-slate-600/80 flex items-center justify-center text-white font-semibold rounded-tl-lg rounded-br-lg">
                        Programming
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
