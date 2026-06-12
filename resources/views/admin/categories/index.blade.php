@extends('layouts.admin', ['title' => 'Kelola Kategori'])

@section('content')
<header class="flex flex-col gap-4 md:flex-row md:justify-between md:items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Kelola Kategori</h1>
        <p class="text-slate-500 font-medium">Atur kategori event Anda dengan mudah.</p>
    </div>
    <div class="flex flex-col sm:flex-row sm:items-center sm:gap-3 w-full sm:w-auto">
        <form action="{{ route('admin.categories.index') }}" method="GET" class="flex w-full sm:w-auto gap-2">
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari kategori..."
                class="w-full rounded-3xl border border-slate-200 px-5 py-3 outline-none focus:ring-2 focus:ring-indigo-300" />
            <button type="submit" class="rounded-3xl bg-[#D4CEF0] text-slate-900 px-6 py-3 font-semibold hover:bg-[#C6BFE5] transition">Cari</button>
        </form>
        <a href="{{ route('admin.categories.create') }}" class="rounded-3xl bg-indigo-600 text-white px-6 py-3 font-semibold shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition">+ Tambah Kategori</a>
    </div>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4">No</th>
                    <th class="px-8 py-4">Nama Kategori</th>
                    <th class="px-8 py-4">Dibuat</th>
                    <th class="px-8 py-4">Diperbarui</th>
                    <th class="px-8 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y border-t">
                @forelse($categories as $index => $category)
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold text-slate-400">{{ $index + 1 }}</td>
                    <td class="px-8 py-6">
                        <p class="font-black text-slate-800">{{ $category->name }}</p>
                        <p class="text-xs text-slate-400">slug: {{ $category->slug }}</p>
                    </td>
                    <td class="px-8 py-6 text-slate-600">{{ $category->created_at->format('d M Y') }}</td>
                    <td class="px-8 py-6 text-slate-600">{{ $category->updated_at->format('d M Y') }}</td>
                    <td class="px-8 py-6 flex gap-2">
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 00-2 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Hapus kategori ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr class="hover:bg-slate-50/50 transition">
                    <td colspan="5" class="px-8 py-12 text-center text-slate-500">Tidak ada kategori yang ditemukan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
