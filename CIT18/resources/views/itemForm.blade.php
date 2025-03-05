<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4">
            {{ isset($id) ? 'Edit Item' : 'Create Item' }}
</h2>

        <form method="POST" action="{{ isset($id) ? url('/items/'.$id) : url('/items') }}" class="space-y-4">
            @csrf
            @if(isset($id))
                @method('PUT')
                <input type="hidden" name="id" value="{{ $id }}">
            @endif

            <div>
                <label class="block text-gray-700">Item Name</label>
                <input type="text" name="name" value="{{ $name ?? '' }}" class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>

            <div>
                <label class="block text-gray-700">Description</label>
                <textarea name="description" class="w-full p-2 border border-gray-300 rounded mt-1" required>{{ $description ?? '' }}</textarea>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
                {{ isset($id) ? 'Update Item' : 'Create Item' }}
            </button>
        </form>
    </div>
</body>
</html>