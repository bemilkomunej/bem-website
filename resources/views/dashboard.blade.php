<x-app-layout>
    <x-slot name="header_content">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg text-center">
        <!-- <x-jet-welcome /> -->
        <img src={{ asset('template-assets/img/undraw_welcome_cats_thqn.png') }} class="img-fluid" alt="...">
        <!-- <h1 class="fs-1 fw-bold">Welcome, {{ Auth::user()->name }}</h1>  -->
    </div>
</x-app-layout>
