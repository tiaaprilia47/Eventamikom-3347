<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Dashboard' }} - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-900 flex min-h-screen">
    <aside class="w-64 bg-indigo-900 text-indigo-100 flex flex-col p-6 space-y-8 sticky top-0 h-screen">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-indigo-900 font-bold text-xl">AH</div>
            <span class="text-xl font-bold text-white tracking-tight">AmikomEventHub</span>
        </div>
        <nav class="flex-1 space-y-2">
            <p class="text-[10px] font-bold uppercase tracking-widest text-indigo-400 mb-4 px-2">Main Menu</p>
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.dashboard') ? 'bg-indigo-800 text-white' : '' }} rounded-xl font-bold transition">Dashboard</a>
            
            <a href="{{ route('admin.events.index') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.events.*') ? 'bg-indigo-800 text-white' : '' }} rounded-xl font-bold transition">
                Kelola Event
            </a>
            
            <a href="{{ route('admin.categories.index') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.categories.*') ? 'bg-indigo-800 text-white' : '' }} rounded-xl font-bold transition">
                Kelola Kategori
            </a>
            
            <a href="{{ route('admin.partners.index') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.partners.*') ? 'bg-indigo-800 text-white' : '' }} rounded-xl font-bold transition">
                Kelola Partner
            </a>

            <a href="{{ route('admin.transactions.index') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.transactions.*') ? 'bg-indigo-800 text-white' : '' }} rounded-xl font-bold transition">
                Kelola Transaksi
            </a>
        </nav>
    </aside>


    <main class="flex-1 p-10 overflow-y-auto">
        @yield('content')
    </main>

    @if(session('success'))
        <div id="admin-toast" class="fixed right-6 top-6 z-50 max-w-sm rounded-3xl border border-emerald-300 bg-emerald-600 px-6 py-4 text-white shadow-xl opacity-0 translate-y-[-10px] transition-all duration-300">
            <div class="flex items-start gap-4">
                <div class="mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="font-bold">Berhasil</p>
                    <p class="text-sm text-emerald-100">{{ session('success') }}</p>
                </div>
                <button id="admin-toast-close" class="rounded-full bg-white/20 p-1 transition hover:bg-white/30">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        <script>
            (() => {
                const toast = document.getElementById('admin-toast');
                const close = document.getElementById('admin-toast-close');
                if (!toast) return;
                requestAnimationFrame(() => {
                    toast.classList.remove('opacity-0');
                    toast.classList.add('opacity-100');
                    toast.style.transform = 'translateY(0)';
                });
                const timer = setTimeout(() => {
                    toast.classList.add('opacity-0');
                }, 4000);
                close?.addEventListener('click', () => {
                    toast.classList.add('opacity-0');
                    clearTimeout(timer);
                });
            })();
        </script>
    @endif
</body>
</html>