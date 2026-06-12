@extends('layouts.admin', ['title' => 'Tambah Kategori'])

@section('content')
<header class="flex flex-col gap-4 md:flex-row md:justify-between md:items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Tambah Kategori Baru</h1>
        <p class="text-slate-500 font-medium">Isi nama kategori untuk menambah pilihan event.</p>
    </div>
    <a href="{{ route('admin.categories.index') }}" class="rounded-3xl border border-slate-200 px-6 py-3 font-semibold text-slate-700 hover:bg-slate-100 transition">Kembali ke daftar</a>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm p-10 max-w-3xl">
    <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-6">
        @csrf

        @if($errors->any())
            <div class="rounded-2xl bg-rose-50 border border-rose-200 p-4 text-sm text-rose-700">
                {{ $errors->first() }}
            </div>
        @endif

        <label class="block">
            <span class="text-sm font-semibold text-slate-700">Nama Kategori</span>
            <input type="text" name="name" value="{{ old('name') }}" required
                class="mt-2 w-full rounded-3xl border border-slate-200 px-5 py-4 text-slate-900 outline-none focus:ring-2 focus:ring-indigo-300" />
        </label>

        <button type="submit" class="rounded-3xl bg-indigo-600 text-white px-6 py-4 font-semibold shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition">Simpan Kategori</button>
    </form>
</div>
@endsection
