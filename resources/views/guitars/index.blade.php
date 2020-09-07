<h1>la lista degli attributi delle chitarre</h1>


<div>
    @foreach ($guitars as $guitar)

    <ul>
        <li> Nome chitarra: {{ $guitar->nome_modello }}</li>
        <li> Manico in: {{ $guitar->manico }} </li>
        <li> Pickup: {{ $guitar->pickup }} </li>
        <li> Colore: {{$guitar->colore }}</li>
        <li> Ponte: {{ $guitar->ponte}}</li>
        <li> Codice identificativo: {{ $guitar->codice_id }}</li>
        <li> descrizione: {{ $guitar->descrizione }}</li>

        <a href="{{ route('guitars.show', $guitar)}}">vedi dettaglio</a>
    </ul>

    @endforeach
</div>