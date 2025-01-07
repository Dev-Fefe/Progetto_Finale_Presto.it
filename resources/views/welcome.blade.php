<x-layout>
    <x-header/>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1 class="my-5 text-center auth-spacing">{{ __('ui.ultimiArticoli') }}</h1>
            </div>
        </div>
        <hr class="m-5 hr-color">
        @if (session()->has('errorMessage'))
            <div class="alert alert-danger text-center shadow rounded w-50 mx-auto">
                {{ session('errorMessage') }}
            </div>
        @endif
        @if (session()->has('message'))
            <div class="alert alert-success d-flex justify-content-center text-center shadow rounded w-50 mx-auto">
                {{ session('message') }}
            </div>
        @endif
        
        <div class="row justify-content-center align-items-center py-5">
            @forelse ($articles as $key=>$article)
                <div class="col-12 col-md-3" id="new2">
                    <x-card :article="$article" key="{{$key}}"/>
                </div>
            @empty
                <div class="col-12 text-center">
                    <h3 class="emoji-color">{{ __('ui.Noarticleshavebeenaddedyet') }}</h3>
                    <i class="bi bi-emoji-frown emoji-color fs-1"></i>
                </div>
            @endforelse
        </div>
        <hr class="m-5 hr-color">
    </div>
</x-layout>
