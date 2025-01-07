<nav class="navbar navbar-expand-lg fixed-top">
    <div class=" navbar-container container-fluid">
        <h3 class="title d-flex align-items-center"> Presto.it </h3>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav py-5 py-lg-0 mt-1 mb-2 my-lg-0 p-5 mx-auto navbar-freya">
                <li class="nav-item adjust-navbar">
                    <a class="nav-link" href="/">
                        <i class="bi bi-house-door-fill me-2"></i>{{ __('ui.Home') }}
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-info-circle me-2"></i>About
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.index') }}">
                        <i class="bi bi-boxes me-2"></i>{{ __('ui.Products') }}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-tags-fill me-2"></i>{{ __('ui.Categories') }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li class="categories-drop">
                                <a class="dropdown-item text-capitalize color-categories"
                                    href="{{ route('byCategory', ['category' => $category]) }}">
                                    <i class="bi bi-tag me-2"></i>
                                    {{__('ui.' . $category->name)}}
                                </a>
                            </li>
                            @if (!$loop->last)
                                <hr class="dropdown-divider">
                            @endif
                        @endforeach
                    </ul>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('create.article') }}">
                            <i class="bi bi-file-earmark-plus me-2"></i>{{ __('ui.InsertArticle') }}
                        </a>
                    </li>
                @endauth
                <a href="#" class="d-flex align-items-center nav-link">
                    <i id="searchIcon" class="bi bi-search fs-6"></i>
                </a>
                <div class="d-flex align-items-center">

                    <li>
                        <x-_locale lang="it"/>
                    </li>
                    <li>
                        <x-_locale lang="en"/>
                    </li>
                    <li>
                        <x-_locale lang="es"/>
                    </li>

                    <li id="buttonDark" class="nav-link">
                        <label class="switch mb-0">
                            <input type="checkbox" class="input">
                            <span class="slider"></span>
                        </label>
                    </li>
                </div>
            </ul>
            @auth
                <ul class="navbar-nav d-flex logout media-collapse">
                    <li class="nav-item d-flex align-items-center">
                        <p class="mb-0 fs-5 me-3">{{ __('ui.hello') }} {{ Auth::user()->name }} !</p>
                        @if (Auth::user()->is_revisor)
                            <a class="nav-link btn btn-auth position-relative w-auto rounded-pill px-3 mt-0 me-2 revision-btn"
                                href="{{ route('revisor.index') }}">
                                <i class="bi bi-pen-fill me-2"></i>{{ __('ui.revisionArea') }}
                                <span
                                    class="position-absolute top-0 translate-middle badge rounded-pill bg-danger notifica mt-2 ms-3">
                                    {{ \App\Models\Article::toBeRevisedCount() }}
                                </span>
                            </a>
                        @endif
                        <a class="nav-link" href="#"
                            onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
                            <i class="bi bi-box-arrow-right account"></i>
                        </a>
                        <form id="form-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            @endauth
            @guest
                <div class="auth-buttons d-flex align-items-center justify-content-end ms-auto">
                    <a href="{{ Route('login') }}" class="btn-auth btn-login d-flex align-items-center me-2">
                        <i class="bi bi-box-arrow-in-right me-2"></i>{{ __('ui.Login') }}
                    </a>
                    <a href="{{ Route('register') }}" class="btn-auth btn-signup d-flex align-items-center">
                        <i class="bi bi-person-add me-2"></i>{{ __('ui.signUp') }}
                    </a>
                </div>
            @endguest
        </div>
    </div>
</nav>
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 search-top">
            <form id="searchForm" class="d-flex d-none animate__animated animate__fadeInDown" role="search" action="{{ route('article.search') }}"
                method="GET">
                <input class="form-control me-2 searching rounded-pill animate__animated animate__fadeInDown" type="search" name="query"
                    placeholder="{{ __('ui.Typesomething...') }}" aria-label="Search">
                <button class="btn btn-outline-primary reviewer-btn mt-0 rounded-pill" type="submit">{{ __('ui.Search') }}</button>
            </form>
        </div>
    </div>
</div>
