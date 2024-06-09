<x-app-layout>
    <h1>Editar Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label>Titulo:</label>
            <input type="text" name="title" value="{{ $post->title }}" />
        </div>
        <div>
            <label>Contenido:</label>
            <textarea name="content">{{ $post->content }}</textarea>
        </div>
        <div>
            <label>Categoria:</label>
            <input type="text" name="category" value="{{ $post->category }}" />
        </div>
        <button type="submit">Actualizar Post</button>
    </form>
</x-app-layout>