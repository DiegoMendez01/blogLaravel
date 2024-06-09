<x-app-layout>
    <a href="posts/create">
        Nuevo Post
    </a>
    <h1>Bienvenido a la pagina de Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="posts/{{$post->id}}">
                    {{ $post['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-app-layout>