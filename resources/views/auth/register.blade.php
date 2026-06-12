@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-slate-100 flex items-center justify-center px-4 py-10">
        <div class="w-full max-w-lg bg-white rounded-[32px] border border-slate-200 shadow-xl p-10">
            <div class="text-center mb-10">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-3xl bg-indigo-600 text-white text-2xl font-bold mb-4">
                    AH
                </div>
                <h1 class="text-3xl font-bold text-slate-900">Daftar Akun</h1>
                <p class="mt-3 text-slate-500">Buat akun untuk membeli tiket dan mengelola pemesanan.</p>
            </div>

            <form action="{{ route('register.submit') }}" method="POST" class="space-y-6">
                @csrf

                @if($errors->any())
                    <div class="rounded-2xl bg-red-50 border border-red-200 p-4 text-sm text-red-700">
                        {{ $errors->first() }}
                    </div>
                @endif

                <label class="block">
                    <span class="text-sm font-semibold text-slate-700">Nama Lengkap</span>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="mt-2 w-full rounded-3xl border border-slate-200 px-5 py-4 text-slate-900 outline-none transition focus:ring-2 focus:ring-indigo-300" />
                </label>

                <label class="block">
                    <span class="text-sm font-semibold text-slate-700">Email</span>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="mt-2 w-full rounded-3xl border border-slate-200 px-5 py-4 text-slate-900 outline-none transition focus:ring-2 focus:ring-indigo-300" />
                </label>

                <label class="block">
                    <span class="text-sm font-semibold text-slate-700">Password</span>
                    <input type="password" name="password" required
                        class="mt-2 w-full rounded-3xl border border-slate-200 px-5 py-4 text-slate-900 outline-none transition focus:ring-2 focus:ring-indigo-300" />
                </label>

                <label class="block">
                    <span class="text-sm font-semibold text-slate-700">Konfirmasi Password</span>
                    <input type="password" name="password_confirmation" required
                        class="mt-2 w-full rounded-3xl border border-slate-200 px-5 py-4 text-slate-900 outline-none transition focus:ring-2 focus:ring-indigo-300" />
                </label>

                <button type="submit"
                    class="w-full rounded-3xl bg-indigo-600 px-5 py-4 text-white text-base font-semibold shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition">
                    Daftar Sekarang
                </button>
            </form>

            <p class="mt-8 text-center text-sm text-slate-500">
                Sudah punya akun? <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-700">Masuk di sini</a>.
            </p>
        </div>
    </div>
@endsection
