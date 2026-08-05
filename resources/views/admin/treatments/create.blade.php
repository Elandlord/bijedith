@extends('master')
@section('content')
    @include('components.page-header', [
        'kicker' => 'Beheer',
        'title' => 'Nieuwe behandeling',
    ])

    <section class="px-4 pb-16 sm:px-6 lg:px-8">
        <div class="mx-auto w-full max-w-2xl rounded-2xl border border-brand-100 bg-white p-6 shadow-sm">
            @include('admin.treatments._form')
        </div>
    </section>
@endsection
