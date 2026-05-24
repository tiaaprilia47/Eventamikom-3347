@extends('layouts.admin', ['title' => 'Tambah Partner'])

@section('content')
<header class="flex flex-col gap-4 md:flex-row md:justify-between md:items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Tambah Partner</h1>
        <p class="text-slate-500 font-medium">Tambahkan partner dan link web mereka.</p>
    </div>
    <a href="{{ route('admin.partners.index') }}" class="rounded-3xl border border-slate-200 px-6 py-3 font-semibold text-slate-700 hover:bg-slate-100 transition">Kembali ke daftar</a>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm p-10 max-w-3xl">
    <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        @if($errors->any())
            <div class="rounded-2xl bg-rose-50 border border-rose-200 p-4 text-sm text-rose-700">
                {{ $errors->first() }}
            </div>
        @endif

        <label class="block">
            <span class="text-sm font-semibold text-slate-700">Nama Partner</span>
            <input type="text" name="name" value="{{ old('name') }}" required
                class="mt-2 w-full rounded-3xl border border-slate-200 px-5 py-4 text-slate-900 outline-none focus:ring-2 focus:ring-indigo-300" />
        </label>

        <label class="block">
            <span class="text-sm font-semibold text-slate-700">Logo (opsional)</span>
            <input type="file" name="logo" accept="image/*" class="mt-2" />
        </label>

        <label class="block">
            <span class="text-sm font-semibold text-slate-700">Website URL</span>
            <input type="url" name="url" value="{{ old('url') }}" placeholder="https://example.com"
                class="mt-2 w-full rounded-3xl border border-slate-200 px-5 py-4 text-slate-900 outline-none focus:ring-2 focus:ring-indigo-300" />
        </label>

        <button type="submit" class="rounded-3xl bg-indigo-600 text-white px-6 py-4 font-semibold shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition">Simpan Partner</button>
    </form>
</div>
@endsection
