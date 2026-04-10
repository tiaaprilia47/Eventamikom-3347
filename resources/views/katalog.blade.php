<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Katalog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-indigo-200 to-purple-300 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white/80 backdrop-blur shadow-md p-4 flex justify-center gap-4">
        <a href="/" class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">Home</a>
        <a href="/profil" class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">Profil</a>
        <a href="/katalog" class="px-4 py-2 bg-indigo-500 text-white rounded-lg shadow">Katalog</a>
        <a href="/bantuan" class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">Bantuan</a>
    </nav>

    <!-- Content -->
    <div class="max-w-5xl mx-auto mt-16 px-4">

        <h1 class="text-3xl font-bold text-slate-800 mb-8 text-center">
            Katalog Event
        </h1>

        <div class="grid md:grid-cols-3 gap-6">

            <!-- Card 1 -->
            <div class="bg-white/90 p-5 rounded-xl shadow hover:shadow-xl transition backdrop-blur">
                <h2 class="text-xl font-semibold mb-2">katalog 1</h2>
                <p class="text-slate-600 mb-3">Event 1.</p>

            </div>

            <!-- Card 2 -->
            <div class="bg-white/90 p-5 rounded-xl shadow hover:shadow-xl transition backdrop-blur">
                <h2 class="text-xl font-semibold mb-2">Katalog 2</h2>
                <p class="text-slate-600 mb-3">Event 2.</p>

            </div>

            <!-- Card 3 -->
            <div class="bg-white/90 p-5 rounded-xl shadow hover:shadow-xl transition backdrop-blur">
                <h2 class="text-xl font-semibold mb-2">Katalog 3</h2>
                <p class="text-slate-600 mb-3">Event 3.</p>

            </div>

        </div>

    </div>

</body>

</html>