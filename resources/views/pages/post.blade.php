<x-layout>
    <div class="w-[700px] mx-auto py-10">
        <a href="/blog">
            <button class="py-2 px-4 bg-blue-500 max-w-max text-white mb-4 rounded-md font-semibold">
                &laquo; Back to All Post
            </button>
        </a>
        <div>
            <img src="/img/p1.jpg" alt="" class="w-full h-[350px] bg-cover rounded-md shadow-md">
        </div>

        <div class="text-center py-4">
            <h1 class="text-4xl font-semibold">{{ $post->title }}</h1>
            <span class="text-gray-600 text-lg">
                By Fitron Ansori {{ $post->created_at->format('j F, Y') }}
            </span>
        </div>

        <div class="py-4 text-justify space-y-4 text-gray-900">
            <p>
                {{ $post->body }}
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, mollitia dolore ut fugit commodi
                nostrum debitis possimus? Cumque atque tempora in culpa eligendi quaerat, officiis id nulla nostrum rem
                beatae! Consequuntur repudiandae exercitationem labore delectus maxime recusandae dolorum iusto, et
                consectetur facilis! Ab, maxime. Atque sapiente itaque placeat architecto tenetur unde, neque totam
                nulla sequi. Sit aut quis, perspiciatis nemo aliquam, tempora illum rerum, ex dignissimos saepe omnis.
                Quam provident explicabo reiciendis aliquam et omnis quaerat accusamus pariatur laudantium soluta.
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptatibus unde dolorum eius? Maxime
                porro a nihil nemo. Necessitatibus accusamus ad facilis non voluptate. Quaerat tenetur blanditiis
                pariatur temporibus amet voluptates dolore ipsam laborum, mollitia sunt in, officia ut ab fuga
                reprehenderit molestiae nisi facere! Magni eius sint laborum consequuntur quae asperiores eum nobis
                repudiandae, eaque nemo dolorem! Dicta autem quisquam voluptates expedita nemo, sed doloribus velit hic
                ex aliquam itaque, at accusamus nihil eaque consequuntur odio excepturi dolorum quos.
            </p>
        </div>

    </div>
</x-layout>
