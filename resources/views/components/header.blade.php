<div class="hero">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
                <div class="intro-excerpt animate__animated animate__fadeInLeft" >
                    <h1 style="font-family: 'Parkinsans'">{{ __('ui.theplacewhereyoucanbuy') }} <span class="text-decoration-underline">{{ __('ui.everything') }} </span></h1>
                    <p class="mb-4 fs-5">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                    <a href="{{route('create.article')}}" class="text-decoration-none media-btn">
                        <button class="btn-primary rounded-pill media-btn-home ">{{ __('ui.InsertArticle') }}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-plus btn-icon" viewBox="2 -1 12 20">
                                <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
                                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                            </svg>
                        </button>
                    </a>
                    <a href="{{route('article.index')}}" class="text-decoration-none media-btn">
                        <button class="button-main rounded-pill media-btn-home ">{{ __('ui.Explore') }}</button>
                    </a>                    
                </div>
            </div>
            <div class="col-lg-7 animate__animated animate__fadeInRight">
                <div class="d-flex justify-content-center align-items-center">
                    <img class="img-fluid hero-img-wrap" src="./media/header.png">
                </div>
            </div>
        </div>
    </div>
</div>
