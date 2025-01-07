<x-layout>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1 class="article-title">{{ __('ui.Welcometoyourrevisionarea') }}!</h1>
            </div>
        </div>
        <section class="p-4 container container-color rounded-5 mb-5">
            <h2 class="text-center mb-5 title mt-5">{{ __('ui.Itemstocheckout') }}</h2>
            <hr class="pt-5 hr-color">
            @if (session()->has('message'))
                <div class="row justify-content-center">
                    <div class="col-md-6 alert alert-success text-center shadow-lg rounded-3 p-4">
                        {{ session('message') }}
                    </div>
                </div>
            @endif
            @if ($article_to_check)
                <div class="row justify-content-center mb-5 mt-0">
                    <div class="col-12 col-md-8 mx-5 text-center">
                        <h3 class="article-title">{{ $article_to_check->title }}</h3>
                        <h4 class="article-category">{{ $article_to_check->category->name }}</h4>
                        <p class="article-description text-break">{{ $article_to_check->description }}</p>
                        <h4 class="article-price">${{ $article_to_check->price }}</h4>
                        <p class="article-description">{{ $article_to_check->user->name }}</p>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    @foreach ($article_to_check->images as $key => $image)
                        <div class="col-12 col-md-6 mb-4">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-6 text-center">
                                    <img src="{{ $image->getUrl(1000, 1000) }}"
                                        class="img-fluid rounded-3 shadow-sm img-position"
                                        alt="Immagine {{ $key + 1 }} dell'articolo {{ $article_to_check->title }}">
                                </div>
                                <div class="col-12 mt-3 lable-adjust">
                                    <h5 class="title">{{ __('ui.Labels') }}</h5>
                                    <div class="d-flex flex-wrap gap-2">
                                        @if ($image->labels)
                                            @foreach ($image->labels as $label)
                                                <span class="badge bg-primary">#{{ $label }}</span>
                                            @endforeach
                                        @else
                                            <p class="fst-italic">{{ __('ui.Nolabels') }}</p>
                                        @endif
                                    </div>
                                    <h5 class="mt-3 title">{{ __('ui.Ratings') }}</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between mb-3 rounded">
                                            <span class="fw-bold">{{ __('ui.Adult') }}:</span>
                                            <span class="{{ $image->adult }}"></span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between mb-3 rounded">
                                            <span class="fw-bold">{{ __('ui.Violence') }}:</span>
                                            <span class="{{ $image->violence }}"></span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between mb-3 rounded">
                                            <span class="fw-bold">{{ __('ui.Spoof') }}:</span>
                                            <span class="{{ $image->spoof }}"></span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between mb-3 rounded">
                                            <span class="fw-bold">{{ __('ui.Racy') }}:</span>
                                            <span class="{{ $image->racy }}"></span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between mb-3 rounded">
                                            <span class="fw-bold">{{ __('ui.Medical') }}:</span>
                                            <span class="{{ $image->medical }}"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-around mt-4">
                        <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="delete-btn">{{ __('ui.Refuse') }}</button>
                        </form>
                        <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="accept-btn">{{ __('ui.Accept') }}</button>
                        </form>
                    </div>
                </div>
            @else
            <div class="row justify-content-center align-items-center text-center pb-4">
                <div class="col-12 col-md-6">
                    <h2 class="article-title text-decoration-underline">{{ __('ui.Noitemstoreview') }}</h2>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="{{ route('homepage') }}" class="home-btn rounded-pill text-decoration-none">
                            {{ __('ui.Backtohomepage') }}<i class="bi bi-house-door-fill ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>            
            @endif
        </section>
        <hr class="p-3 hr-color">
        <section class="p-4 container">
            <h3 class="text-center mb-5 title"> {{ __('ui.Last5articlesreviewed') }}</h3>
            @if (isset($last_checked_articles) && $last_checked_articles->count() > 0)
                <div class="row gy-3">
                    @foreach ($last_checked_articles as $article)
                        <div class="col-12 bg-light rounded shadow-sm p-3 d-flex align-items-center">
                            <div class="col-4 col-md-3 fw-bold text-truncate">
                                {{ $article->title }}
                            </div>
                            <div class="col-4 col-md-3 text-nowrap me-3 text-center">
                                {{ $article->user->name }}
                            </div>
                            <div class="col-4 col-md-3 text-nowrap me-3 text-center">
                                @if ($article->is_accepted)
                                    <span class="badge bg-success">{{ __('ui.Accept') }}</span>
                                @else
                                    <span class="badge bg-danger">{{ __('ui.Refuse') }}</span>
                                @endif
                            </div>
                            <div class="col-md-3 text-secondary text-nowrap text-end pe-4 d-none d-md-block">
                                {{ $article->updated_at->format('d/m/Y H:i') }}
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center">{{ __('ui.Therearenorecentlyreviewedarticles.') }}</p>
            @endif
        </section>
        <hr class="mt-5 hr-color">
    </div>
</x-layout>
