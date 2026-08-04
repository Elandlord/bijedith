@extends('admin.layout')
@section('content')
    <h1 class="mb-6 text-2xl font-display font-semibold text-bijedith-black">Behandeling bewerken</h1>

    <form method="POST" action="{{ route('admin.treatments.update', $treatment) }}" enctype="multipart/form-data"
          class="max-w-xl space-y-4 rounded-2xl border border-brand-100 bg-white p-6">
        @method('PUT')
        @include('admin.treatments._form')
    </form>
@endsection
