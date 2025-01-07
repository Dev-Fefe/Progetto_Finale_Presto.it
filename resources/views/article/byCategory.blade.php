<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5 text-center auth-spacing">{{ __('ui.Articlesbycategories') }}
                    <span class="fst-italic text-decoration-underline">{{ $category->name }}</span>
                </h1>
            </div>
        </div>
        <hr class="m-5 hr-color">
        <div class="row justify-content-center align-items-center py-5">
            @forelse ($articles as $key=>$article)
                <div class="col-12 col-md-3" id="new2">
                    <x-card :article="$article" key="{{$key}}"/>
                </div>
            @empty
                <div class="col-12 text-center">
                    <h3 class="emoji-color">{{ __('ui.Noarticleshavebeenaddedyet') }}</h3>
                    <i class="bi bi-emoji-frown emoji-color fs-1"></i>
                    @auth
                        <div class="d-flex justify-content-center py-4">
                            <a href="{{ route('create.article') }}" class="text-decoration-none">
                                <button class="btn-primary rounded-pill">{{ __('ui.InsertArticle') }}
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="bi bi-file-earmark-plus btn-icon" viewBox="2 -1 12 20">
                                        <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5" />
                                        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    @endauth
                </div>
            @endforelse
        </div>
        <hr class="m-5 hr-color">
    </div>
</x-layout>
