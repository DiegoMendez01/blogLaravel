<x-app-layout>
    <h1>Formulario Crear Post</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div>
            <label>Titulo:</label>
            <input type="text" name="title" />
        </div>
        <div>
            <label>Contenido:</label>
            <textarea name="content"></textarea>
        </div>
        <div>
            <label>Categoria:</label>
            <input type="text" name="category" />
        </div>
        <button type="submit">Crear Post</button>
    </form>
</x-app-layout>