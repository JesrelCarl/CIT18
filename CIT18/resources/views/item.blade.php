<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Item</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4">Create a New Item</h2>

        @if(session('success'))
            <div class="bg-green-200 text-green-700 p-2 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('/items') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700">Item Name</label>
                <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>

            <div>
                <label class="block text-gray-700">Description</label>
                <textarea name="description" class="w-full p-2 border border-gray-300 rounded mt-1"></textarea>
            </div>

            <div>
                <label class="block text-gray-700">Price ($)</label>
                <input type="number" step="0.01" name="price" class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>

            <div>
                <label class="block text-gray-700">Upload Image</label>
                <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Create Item</button>
        </form>
    </div>
</body>
<html>