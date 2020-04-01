@extends('templates.mail')

@section('content')

    <div align="left" style="text-align:justify;margin:0 0 10px 0;padding:0;">
        <font face="Helvetica,Arial,sans-serif" size="2" color="#222222">
            <li style="font-size:15px;">Civilité : {{$data['gender']}}</li>
            <li style="font-size:15px;">Nom : {{$data['nom']}}</li>
            <li style="font-size:15px;">Prenom : {{$data['prenom']}}</li>
            <li style="font-size:15px;">Ville : {{$data['ville']}}</li>
            <li style="font-size:15px;">Code Postal : {{$data['codePostal']}}</li>
            <li style="font-size:15px;">Email : {{$data['contactemail']}}</li>
            <li style="font-size:15px;">Téléphone : {{$data['phone']}}</li>
        </font>
    </div>
    <div align="left" style="text-align:justify;margin:0 0 10px 0;padding:0;">
        <font face="Helvetica,Arial,sans-serif" size="2" color="#222222">
            <p class="mb-4">Ci-dessous, les résultats de la simulation.</p>
            <ul class="list-unstyled ul-check primary recapitulatif">
                <li>Type de prêt : <strong id="type">{{$data['typePret']}}</strong> </li>
                <li>Montant emprunt (euros) : <strong id="amount">{{$data['amount']}}</strong></li>
                <li>Duree d'emprunt(mois) : <strong id="periode">{{$data['periode']}}</strong></li>
                <li>TAEG négociable(%) : <strong id="interet">{{$data['interet']}}</strong></li>
                <li>Mensualité du credit(euros) : <strong id="mensualite">{{$data['mensualite']}}</strong></li>
            </ul>
        </font>
    </div>
@endsection
