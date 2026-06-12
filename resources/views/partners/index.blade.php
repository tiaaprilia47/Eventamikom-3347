@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-16 px-6">
    <h2 class="text-2xl font-bold mb-6">Partner Kami</h2>
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
        @foreach($partners as $partner)
            <a href="{{ $partner->url ?? '#' }}" target="_blank" class="flex items-center justify-center p-4 bg-white rounded-xl border border-slate-100 shadow-sm hover:shadow-md transition">
                @if($partner->logo_path)
                    <img src="{{ asset('storage/'.$partner->logo_path) }}" alt="{{ $partner->name }}" class="max-h-16 object-contain">
                @else
                    <div class="text-slate-500">{{ $partner->name }}</div>
                @endif
            </a>
        @endforeach
    </div>
</div>
@endsection
