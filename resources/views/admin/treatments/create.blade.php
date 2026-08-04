@extends('admin.layout')
@section('content')
    <h1 class="mb-6 text-2xl font-display font-semibold text-bijedith-black">Nieuwe behandeling</h1>

    <form method="POST" action="{{ route('admin.treatments.store') }}" enctype="multipart/form-data"
          class="max-w-xl space-y-4 rounded-2xl border border-brand-100 bg-white p-6">
        @include('admin.treatments._form')
    </form>
@endsection
