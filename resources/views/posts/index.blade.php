<x-app-layout>
    <h1>Bienvenido a la pagina de Posts</h1>
    <a href="posts/create">
        Nuevo Post
    </a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="posts/{{$post->id}}">
                    {{ $post['title'] }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}
</x-app-layout>