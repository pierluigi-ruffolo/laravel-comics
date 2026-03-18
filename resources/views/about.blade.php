@extends ('layouts.master')

@section ('title')
about
@endsection


@section('content')

<div class="about-hero">
    <div class="container h-100 d-flex align-items-center">
        <h1 class="display-3 fw-bold text-white text-uppercase">About DC</h1>
    </div>
</div>
<div class="about-content py-5 bg-white text-dark">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4 text-primary">HISTORY OF EXCELLENCE</h2>
                <p class="lead">
                    DC Comics è una delle più grandi e antiche case editrici di fumetti negli Stati Uniti.
                    Fondata nel 1934 come National Allied Publications, ha dato vita a icone mondiali.
                </p>
                <p>
                    Dal debutto di <strong>Superman</strong> in Action Comics #1 nel 1938, DC ha plasmato l'immaginario collettivo
                    introducendo personaggi come Batman, Wonder Woman, The Flash e la Justice League.
                    Oggi, DC è una sussidiaria di Warner Bros. Discovery e continua a dominare il mondo dell'intrattenimento.
                </p>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="about-img-frame">
                    <img src="{{ Vite::asset('resources/img/footer-bg.jpg') }}" class="img-fluid rounded shadow" alt="DC Characters">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="quote-section py-5 bg-dark text-white text-center">
    <div class="container">
        <blockquote class="blockquote">
            <p class="mb-0 italic">"I believe in Batman."</p>
            <footer class="blockquote-footer mt-2 text-primary">Harvey Dent, <cite title="Source Title">The Dark Knight</cite></footer>
        </blockquote>
    </div>
</div>
<section class="cta-about py-5 text-white text-center" style="background-color: #0282f9;">
    <div class="container">
        <h3 class="fw-bold mb-3">JOIN THE JUSTICE LEAGUE</h3>
        <p class="mb-4">Sei un artista, uno scrittore o un appassionato di tecnologia? Scopri le posizioni aperte.</p>
        <button class="btn btn-outline-light rounded-0 px-5 fw-bold">CAREERS</button>
    </div>
</section>
@endsection