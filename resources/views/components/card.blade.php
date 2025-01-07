<div class="col-8 col-sm-6 col-md-10 col-lg-10 my-5 d-flex justify-content-center card-w mx-auto">
    <div class="card">
        @if ($key>=0 && $key<=5)
            <span class="premium-label"></span>
        @endif
        <div class="card-img">
            <img 
                src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(1000, 1000) : asset('media/default/default.jpg') }}" 
                alt="Immagine dell'articolo {{ $article->title }}" 
                class="card-img-top img-border">
        </div>
        <div class="card-info">
            <h3 class="text-title">{{ $article->title }}</h3>
            <h4 class="text-body pt-3">
                <a href="{{ route('byCategory', ['category' => $article->category]) }}">{{ __('ui.' . $article->category->name) }}</a>
            </h4>
        </div>
        <div class="card-footer">
            <span class="text-title">${{ $article->price }}</span>
            <a href="{{ route('article.show', compact('article')) }}" class="card-button">
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
