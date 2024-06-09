<x-app-layout>
    <h1>Formulario Crear Post</h1>

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

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div>
            <label>Titulo:</label>
            <input type="text" name="title" value="{{ old('title') }}" />
            {{-- @error('title')
                <p>
                    {{ $message }}
                </p>
            @enderror --}}
        </div>
        <div>
            <label>Slug:</label>
            <input type="text" name="slug" value="{{ old('slug') }}" />
            {{-- @error('slug')
                <p>
                    {{ $message }}
                </p>
            @enderror --}}
        </div>
        <div>
            <label>Contenido:</label>
            <textarea name="content">{{ old('content') }}</textarea>
            {{-- @error('content')
                <p>
                    {{ $message }}
                </p>
            @enderror --}}
        </div>
        <div>
            <label>Categoria:</label>
            <input type="text" name="category" value="{{ old('category') }}" />
            {{-- @error('category')
                <p>
                    {{ $message }}
                </p>
            @enderror --}}
        </div>
        <button type="submit">Crear Post</button>
    </form>
</x-app-layout>