<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5 text-center auth-spacing">{{ __('ui.Allarticles') }}</h1>
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
                </div>
            @endforelse
        </div>
        <div class="justify-content-center">
            <div>
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        @if ($articles->onFirstPage())
                            <li class="page-item disabled page-disabled">
                                <i class="bi bi-arrow-left-circle-fill fs-2 me-3"></i>
                            </li>
                        @else
                            <li class="page-item ">
                                <a class="" href="{{ $articles->previousPageUrl() }}" rel="prev"><i class="bi bi-arrow-left-circle-fill fs-2 me-3 page-activated"></i></a>
                            </li>
                        @endif
        
                        @if ($articles->hasMorePages())
                            <li class="page-item ">
                                <a class="" href="{{ $articles->nextPageUrl() }}" rel="next"><i class="bi bi-arrow-right-circle-fill fs-2 page-activated"></i></a>
                            </li>
                        @else
                            <li class="page-item disabled page-disabled">
                                <span class=""><i class="bi bi-arrow-right-circle-fill fs-2"></i></span>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        
        <hr class="m-5 hr-color">
    </div>
</x-layout>
