$(document).ready(function(){
    fantasyDb = 0;   
    regenyDB = 0;
    motivaciosDB = 0; 
    if (localStorage.getItem("panel")=="closed") {
        $('#kategoria').addClass('rejtett');
        $('.rejtett').css('width','0');
    }
        
    $('#panel-zaro').click(function(){
        $('#kategoria').animate({
            width: "0"
        }, 700, function(){
            $('#kategoria').addClass('rejtett');
            localStorage.setItem('panel','closed');
        });
    });

    $('#panel-nyito').click(function(){
        $('#kategoria').removeClass('rejtett');
        $('#kategoria').animate({
            width: "25%"
        }, 700, function(){
            localStorage.setItem('panel','opened');
        });
    });

    $('#kereso').click(function(){
        $('#megse').show();
    });
    $('#megse').click(function(){
        $(this).hide();
    });
    $('#fantasy').click(function(){
        if($('#fantasy').prop('checked')){
            fantasyDb++;        
            sessionStorage.setItem('fantasy',fantasyDb);
            $('#fantasy_lbl').text("Fantasy (" + fantasyDb + ") ");        
        }
    });

    $('#regeny').click(function(){
        if($('#regeny').prop('checked')){
            regenyDB++;        
            sessionStorage.setItem('regeny',regenyDB);
            $('#regeny_lbl').text("Regény (" + regenyDB + ") ");        
        }
    });

    $('#motivacios').click(function(){
        if($('#motivacios').prop('checked')){
            motivaciosDB++;        
            sessionStorage.setItem('motivacios',motivaciosDB);
            $('#motivacios_lbl').text("Motivációs (" + motivaciosDB + ") ");        
        }
    });
});