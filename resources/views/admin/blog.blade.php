<div>
    <h1>Create a Post</h1>

    <form action="{{ route('admin.blog') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="title" placeholder="Título" value="{{ old('title') }}" class="border p-2 w-full mb-2">
        <input type="text" name="slug" placeholder="Slug" value="{{ old('slug') }}" class="border p-2 w-full mb-2">
        <textarea name="summary" placeholder="Resumen" class="border p-2 w-full mb-2">{{ old('summary') }}</textarea>

        {!! richText('content', old('content')) !!}

        <input type="file" name="image" class="border p-2 w-full mb-2">

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
    </form>

</div>
