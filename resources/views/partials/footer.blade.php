<footer>
    <div class="ms_container container d-flex justify-content-between ">
        <ul class="links-wrapper d-flex flex-column list-unstyled flex-wrap">
            @foreach ($footerLinks as $element)
                <li class="list-name">
                    {{$element['name']}}
                    <ul class="list-unstyled">
                        @foreach ($element['links'] as $link)
                            <li>
                                <a class="links" href="#">{{$link}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
        <div class="img-wrapper">
            <img class="blu-img" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo dc">
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container d-flex justify-content-between align-items-center">
            <button class="sign-up">SIGN-UP NOW</button>
            <ul class="d-flex list-unstyled align-items-center">
                <li class="follow-text">FOOLOW US</li>
                @foreach ($footerImages as $img)
                <li><img src="{{ Vite::asset($img)}}"></li>
                    
                @endforeach
            </ul>
        </div>
    </div>
</footer>