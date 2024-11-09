<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css" rel="stylesheet">
    <title>Login</title>
    <!-- Menambahkan link ke Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        feather.replace();
    });
</script>

<body class="bg-black h-screen flex justify-center items-center">

<!-- Background video -->
<video class="absolute top-0 left-0 w-full h-full object-cover z-[-1]" autoplay loop muted>
    <source src="{{ asset('assets/background_video_new.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
</video>

<div class="w-[350px] p-8 bg-white bg-opacity-90 rounded-lg shadow-lg text-center z-10">
    <h2 class="text-2xl font-semibold mb-6">Silakan Login</h2>
        @if ($errors->any())
        <div class="bg-red-600 text-white p-4 rounded-md mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4 flex items-center">
            <i data-feather="mail" class="inline-block mr-2"></i>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email" required class="w-full p-3 border border-gray-300 rounded-md">
        </div>
        <div class="mb-6 flex items-center">
            <i data-feather="lock" class="inline-block mr-2"></i>
            <input type="password" name="password" placeholder="Masukkan password" required class="w-full p-3 border border-gray-300 rounded-md">
        </div>
        <button type="submit" class="w-full py-3 bg-blue-500 text-white rounded-md text-lg font-semibold hover:bg-blue-600">Login</button>
    </form>
</div>

</body>
</html>
