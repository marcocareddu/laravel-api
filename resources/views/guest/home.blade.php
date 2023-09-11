@extends('layouts.app')
@section('main-content')
    <div class="jumbotron p-5 mb-4 rounded-3">
        <div class="container py-5">
            <div class="logo_laravel">
            </div>
            <h1 class="display-5 fw-bold">
                Portfolio di Marco Careddu
            </h1>

            <p class="col-md-8 fs-4">Questo è il mio portfolio</p>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <p>Questo è il mio portfolio. Ce ne sono tanti come lui, ma questo è il mio.
                Il mio portfolio è il mio migliore amico. È la mia vita. Devo dominarlo come domino la mia vita.
                Il mio portfolio, senza di me, è inutile. Senza il mio portfolio, io sono inutile. Devo scrivere codice bene
                con il
                mio
                portfolio. Devo codare meglio del closed source che tenta di farsi pagare. Devo codare prima che lui scriva
                codice a pagamento.
                Lo farò...
                Il mio portfolio e io sappiamo che quel che conta in questa guerra non sono le LOC, né i commit, e tanto
                meno il tempo passato a leggere documentazione. Sappiamo che sono i codici senza bug che contano.
                Coderemo...

                Il mio portfolio è umano, come me, poiché è la mia vita. Pertanto, imparerò a conoscerlo come un fratello.
                Imparerò i suoi punti deboli, i suoi punti di forza, le sue parti, i suoi accessori, le sue estensioni e
                la repo. Lo proteggerò anche dai bug e da ciò che potrebbe danneggiarlo, come farei con le mie
                gambe, le mie dita, gli occhi ed il cuore. Terrò il mio portfolio pulito ed in ordine. Diverremo una sola
                cosa. Lo diverremo...

                Davanti a Richard Stallman, giuro su questo credo. Io e il mio portfolio siamo i difensori dell'open source.
                Siamo i
                dominatori
                del closed source. Siamo i salvatori della mia vita. E così sia, finché la vittoria sia dell'Open source, e
                non ci
                siano più closed source, ma pace.</p>

            {{-- To projects Button --}}
            <div class="mt-5">
                <a href="{{ route('guest.home') }}" class="btn btn-outline-purple">Progetti</a>
            </div>
        </div>

    </div>
@endsection
