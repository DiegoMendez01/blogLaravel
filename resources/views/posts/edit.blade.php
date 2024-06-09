<x-app-layout>
    <h1>Editar Post</h1>
    @if ($errors->any())
        <div>
            <h2>Error</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label>Titulo:</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" />
        </div>
        <div>
            <label>Slug:</label>
            <input type="text" name="slug" value="{{ old('slug', $post->slug) }}" />
        </div>
        <div>
            <label>Contenido:</label>
            <textarea name="content">{{ old('content', $post->content) }}</textarea>
        </div>
        <div>
            <label>Categoria:</label>
            <input type="text" name="category" value="{{ old('category', $post->category) }}" />
        </div>
        <button type="submit">Actualizar Post</button>
    </form>
</x-app-layout>