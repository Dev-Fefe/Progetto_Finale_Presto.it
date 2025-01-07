<x-layout>
    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="article-title">{{ __('ui.Searchresultsfor') }}"<span class="fst-italic fw-bold">{{ $query }}</span>"
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-5">
            @forelse ($articles as $key=>$article)
                <div class="col-12 col-md-3" id="new2">
                    <x-card :article="$article" key="{{$key}}"/>
                </div>
            @empty
                <div class="col-12 text-center">
                    <h3 class="emoji-color">
                        {{ __('ui. Noarticlesmatchyoursearch') }}
                    </h3>
                    <i class="bi bi-heartbreak emoji-color fs-2"></i>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>
