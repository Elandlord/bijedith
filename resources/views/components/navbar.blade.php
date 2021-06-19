<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') . '#home' }}">
            Bij Edith
{{--            <img src="/assets/images/bij_edith_logo.png" class="logo"/>--}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') . '#home' }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') . '#pedicurebehandelingen' }}">Pedicurebehandelingen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') . '#spa-arrangementen' }}">Spa-arrangementen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') . '#tarieven' }}">Tarieven</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') . '#contact' }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
