<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Data Blog') }}</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Blog</a></div>
            <div class="breadcrumb-item"><a href="{{ route('admin.blog.index') }}">Edit Data Blog</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:form-blog action="update" dataId="{{ $blog->id }}"/>
    </div>
</x-app-layout>
