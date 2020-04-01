$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#Periode').change(function () {
        $('#Periode-range').attr('value',$('#Periode').attr('value'));
    });


    $('#Periode-range').change(function () {
        $('#Periode').attr('value',document.getElementById("Periode-range").value);
    });

    $('#Montant').change(function () {
        $('#Montant-range').attr('value',$('#Montant').attr('value'));
    });

    $('#Montant-range').change(function () {
        $('#Montant').attr('value',document.getElementById("Montant-range").value);
    });

    let simulation = false;

    //Arrondir les valeurs
    function Mef(valeur){
        return valeur.toFixed(2);
    }

    function simuler(montant,periode,interet,type){
        var Rf = (interet / 1200);

        var P1 = montant * (Rf / ( 1 - ( 1 / ( Math.pow ( ( 1 + Rf ), periode ) ) ) ) ) ;

        var Pf = Math.floor ( ( P1 + 0.005 ) * 100) / 100;

        $('#type').html(type);
        $('#amount').html(montant);
        $('#periode').html(periode);
        $('#interet').html(interet);
        $('#mensualite').html(Pf);
        $('#totalCredit').html(Mef((Pf*periode)));
        $('#totalInteret').html(Mef((Pf*periode)-montant));

        simulation = true;
    }

    function printCredit(montant,periode,interet){
        var Rf = (interet / 1200);

        var P1 = montant * (Rf / ( 1 - ( 1 / ( Math.pow ( ( 1 + Rf ), periode ) ) ) ) ) ;

        var Pf = Math.floor ( ( P1 + 0.005 ) * 100) / 100;

        var amortHTML='';
        amortHTML+='<div>';
        amortHTML+='<ul>';
        amortHTML+='<li>Montant : '+montant+'</li>';
        amortHTML+='<li>Durée : '+periode+'</li>';
        amortHTML+='<li>Taux : '+interet+'</li>';
        amortHTML+='<li>Mensualité du credit(euros) : '+Pf+'</li>';
        amortHTML+='<li>Total du crédit : '+Mef((Pf*periode))+'</li>';
        amortHTML+='<li>Total des intérêts : '+Mef((Pf*periode)-montant)+'</li>';
        amortHTML+='</ul>';
        amortHTML+='</div>';

        var Amort = new Array();//Amort[item,value]

        Amort[0,1] = montant;
        var Cp=0;
        var Ci=0;

        amortHTML+='<table border="1" cellpadding="3" style="border-collapse:collapse;border-spacing:0">';
        amortHTML+='<tr>';
        amortHTML+='<th>Mois</th>';
        amortHTML+='<th>Année</th>';
        amortHTML+='<th>Echéance</th>';
        amortHTML+='<th>Principal</th>';
        amortHTML+='<th>Intérêts</th>';
        amortHTML+='<th>Reste</th>';
        amortHTML+='<th>Par période</th>';
        amortHTML+='<tr>';

        for ( var I=1 ; I <= periode ; I++ ){
            Amort[I, 2] = Amort[I - 1, 1] * Rf;
            Amort[I, 2] = Math.floor((Amort[I, 2] + 0.005) * 100) / 100;
            Amort[I, 1] = Amort[I - 1, 1] - Pf + Amort[I, 2];
            Amort[I, 1] = Math.floor ( ( Amort[I, 1] + 0.005 ) * 100 ) / 100;
            var T1 = I - Math.floor ( ( I - 1 ) / 12 ) * 12;
            var T2 = 1 + Math.floor ( ( I - 1 ) / 12 );
            amortHTML+='<tr>';
            amortHTML+='<td>'+T1+'</td>';
            amortHTML+='<td>'+T2+'</td>';
            amortHTML+='<td>'+I+'</td>';
            amortHTML+='<td>'+Mef(Pf - Amort[I, 2])+'</td>';
            amortHTML+='<td>'+Mef(Amort[I,2])+'</td>';
            amortHTML+='<td>'+Mef(Amort[I,1])+'</td>';
            amortHTML+='<td>'+Mef(Pf * I)+'</td>';
            amortHTML+='</tr>';
            Cp = Cp + Pf - Amort[I, 2];
            Ci = Ci + Amort[I, 2];
        }
        Cp = Math.floor((Cp + 0.005) * 100) / 100;
        Ci = Math.floor((Ci + 0.005) * 100) / 100;
        amortHTML+='<tr>';
        amortHTML+='<td></td>';
        amortHTML+='<td></td>';
        amortHTML+='<td></td>';
        amortHTML+='<td>'+Mef(Cp)+'</td>';
        amortHTML+='<td>'+Mef(Ci)+'</td>';
        amortHTML+='<td></td>';
        amortHTML+='<td>'+Mef(Cp+Ci)+'</td>';
        amortHTML+='</tr>';
        amortHTML+='</table>';

        var mywindow = window.open('', 'PRINT', 'height=400,width=600');

        mywindow.document.write('<html><head><title>' + document.title  + '</title>');
        mywindow.document.write('</head><body >');
        mywindow.document.write('<h1>' + document.title  + '</h1>');
        mywindow.document.write(amortHTML);
        mywindow.document.write('</body></html>');
        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/
        mywindow.print();
        mywindow.close();
    }

    function isValidEmail(email) {
        if(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(email)) {
            return true;
        }else{
            return false;
        }
    }

    $('.simuler').click(function (e) {
        e.preventDefault();
        var montant = $('#Montant').val();
        var periode = $('#Periode').val();
        var interet = 0.75;
        var type = '';

        switch ($('#TypeCredit').val()) {
            case 'CRD001' :
                interet = 0.75;
                type='Crédit rapide';
                break;
            case 'CRD002' :
                interet = 1.89;
                type='Crédit personnel';
                break;
            case 'CRD003' :
                interet = 2.5;
                type='Crédit renouvelable';
                break;
            default:
                interet = 0.75;
                type = 'Crédit général';
                break;
        }

        if(montant<2000 || montant >150000){
            $('.simerror').html('Montant non pris en charge');
            $('.simerror').fadeIn();
            setTimeout(function () {$('.simerror').fadeOut();},2000);
        }else{
            if(periode<3 || periode>120){
                $('.simerror').html('Période non pris en charge');
                $('.simerror').fadeIn();
                setTimeout(function () {$('.simerror').fadeOut();},2000);
            }else{
                simuler(montant,periode,interet,type);
                $('.alert-info').html('Remplissez le formulaire ci-dessous afin de déposer une demande de prêt aujourd\'hui et obtenir une réponse en 24h.</a>');
                $('.alert-info').fadeIn();
            }
        }
    });

    $('#print').click(function(e){
        e.preventDefault();
        var montant = Number($('#amount').html());
        var periode = Number($('#periode').html());
        var interet = Number($('#interet').html());
        printCredit(montant,periode,interet);
    });

    $('.btn-demand').click(function (e) {
        e.preventDefault();
        let a = Number($('#amount').html());
        let p = Number($('#periode').html());
        let i = Number($('#interet').html());
        let m = Number($('#mensualite').html());
        var Datas = new FormData();
        Datas.append('gender',$('#gender').val());
        Datas.append('nom',$('#nom').val());
        Datas.append('prenom',$('#prenom').val());
        Datas.append('pays',$('#pays').val());
        Datas.append('phone',$('#phone').val());
        Datas.append('ville',$('#ville').val());
        Datas.append('codePostal',$('#code_postal').val());
        Datas.append('contactemail',$('#email').val());
        Datas.append('typePret',$('#type').html());
        Datas.append('amount',a);
        Datas.append('periode',p);
        Datas.append('interet',i);
        Datas.append('mensualite',m);

        if(simulation===false){
            $('.cmderror').fadeIn();
            $('.cmderror').html('Simulez avant de faire une demande');
            setTimeout(function () {$('.cmderror').fadeOut();},2000);
        }else{
            if(isValidEmail($('#email').val()) && ($('#email').val()!=='') && ($('#email').val()===$('#cemail').val())){
                $.ajax({
                    type:'post',
                    url:'demand',
                    data:Datas,
                    processData: false,
                    contentType: false,
                    dataType:'json',
                    success:function(data){
                        if(data.success){
                            $('.cmdsuccess').html('Demande bien envoyée');
                            $('.cmdsuccess').fadeIn();
                            setTimeout(function () {$('.form-demand')[0].reset();},2000);
                        }else{
                            console.log(data);
                        }
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
            }else{
                $('.cmderror').fadeIn();
                $('.cmderror').html('Coordonnées mal renseignés');
                setTimeout(function () {$('.cmderror').fadeOut();},2000);
            }
        }
    });

    $('.btn-contact').click(function (e) {
        e.preventDefault();
        var Datas = new FormData();
        Datas.append('name',$('#contact-name').val());
        Datas.append('mail',$('#contact-email').val());
        Datas.append('subject',$('#contact-subject').val());
        Datas.append('message',$('#contact-message').val());
        if(isValidEmail($('#contact-email').val()) && ($('#contact-subject').val()!=='') && ($('#contact-name').val()!=='') && ($('#contact-message').val()!=='') ){
            $.ajax({
                type:'post',
                url:'/contact',
                data:Datas,
                processData: false,
                contentType: false,
                dataType:'json',
                success:function(data){
                    if(data.success){
                        $('.sendmessage').fadeIn();
                        setTimeout(function () {$('.form-contact')[0].reset();},2000);
                    }else{
                        $('.errormessage').fadeIn();
                        setTimeout(function () {$('.errormessage').fadeOut();},2000);
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }else{
            $('.errormessage').fadeIn();
            setTimeout(function () {$('.errormessage').fadeOut();},2000);
        }
    });
});
