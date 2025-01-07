<x-layout>
    <div class="container w-100 d-flex flex-column justify-content-center align-items-center">
        <div class="row justify-content-center w-100">
            <div class="col-12 text-center mt-5 mb-4">
                <h1 class="article-title animate__animated animate__fadeInDown">{{ $article->title }}</h1>
                <h4> 
                    <a class="article-category" href="{{ route('byCategory', ['category' => $article->category]) }}">
                        {{ $article->category->name }}
                    </a>
                </h4>
            </div>
        </div>
        <div class="row justify-content-center myBorder mb-5">
            <div class="col-12 col-lg-12 justify-content-center">
                <div class="article-show-gallery w-100">
                    @if ($article->images->count() > 0)
                        <div id="articleCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators mb-0">
                                @foreach ($article->images as $key => $image)
                                    <button type="button" data-bs-target="#articleCarousel"
                                        data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"
                                        aria-label="Slide {{ $key + 1 }}">
                                    </button>
                                @endforeach
                            </div>

                            <div class="carousel-inner">
                                @foreach ($article->images as $key => $image)
                                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                        <img src="{{ $image->getUrl(1000, 1000) }}" class="d-block w-100 rounded shadow"
                                            alt="Immagine {{ $key + 1 }} - {{ $article->title }}">
                                    </div>
                                @endforeach
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#articleCarousel"
                                data-bs-slide="prev">
                                <i class="bi bi-arrow-bar-left fs-3 account"></i>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#articleCarousel"
                                data-bs-slide="next">
                                <i class="bi bi-arrow-bar-right fs-3 account"></i>
                            </button>
                        </div>
                    @else
                        <div class="text-center">
                            <img src="{{ asset('media/default/default.jpg') }}" class="d-block w-100 rounded shadow"
                                alt="Immagine predefinita per {{ $article->title }}">
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 d-flex justify-content-center align-items-center mb-5">
            <div class="article-content">
                <h2 class="article-price mb-4">{{ __('ui.ProducrDetails') }}</h2>
                <p class="article-description text-break">{{ $article->description }}</p>
                <h4 class="article-price">${{ $article->price }}</h4>
                @auth
                    @if (Auth::user()->is_revisor)
                        <form method="POST" action="{{ route('article.cancel', $article) }}">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="delete-btn mt-4">{{ __('ui.Undolastoperation') }}</button>
                        </form>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</x-layout>
