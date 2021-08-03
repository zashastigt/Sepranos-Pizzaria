$(document).ready(function() {

    $('#Middle').load('Home_page.php');

    $('#Home_Page_Link').click(function(){
        $('#Middle').load('Home_page.php');
    });

    $('#Menu_Link').click(function(){
        $('#Middle').load('Menu.php');
    });

    $('#Tonno_Link').click(function(){
        $('#Middle').load('Tonno.php');
    });

    $('#Vegetariano_Link').click(function(){
        $('#Middle').load('Vegetariano.php');
    });

    $('#Quattro_Formaggio_Link').click(function(){
        $('#Middle').load('Quattro_Formaggio.php');
    });

    $('#Sopranos_Deluxe_Link').click(function(){
        $('#Middle').load('Sopranos_Deluxe.php');
    });
    
    $('#Tonno_Home').click(function(){
        $('#Middle').load('Tonno.php');
    });
    
    $('#Quattro_Formaggio_Home').click(function(){
        $('#Middle').load('Quattro_Formaggio.php');
    });
    
    $('#Vegetariano_Home').click(function(){
        $('#Middle').load('Vegetariano.php');
    });
    
    $('#Sopranos_Deluxe_Link').click(function(){
        $('#Middle').load('Sopranos_Deluxe.php');
    });
});

function removeAmount(z) {
    var y = parseInt(document.getElementsByClassName("Pizza_Counter")[z].innerHTML);

    if ((y - 1) < 1) {
        y = 0        
        document.getElementsByClassName("Pizza_Order_MAP")[z].style.display = "none";

    } else {
         y -= 1;  
    };

    switch (z) {
        case 0:
        case 1:
        case 2:
            var v = 0
            break;
        case 3:
        case 4:
        case 5:
            var v = 1
            break;
        case 6:
        case 7:
        case 8:
            var v = 2
            break;
        case 9:
        case 10:
        case 11:
            var v = 3
            break;
        
        default:
            console.log("nope");
    };        

    var x0 = parseInt(document.getElementsByClassName("Pizza_Counter")[0].innerHTML);
    var x1 = parseInt(document.getElementsByClassName("Pizza_Counter")[1].innerHTML);
    var x2 = parseInt(document.getElementsByClassName("Pizza_Counter")[2].innerHTML);


    if ((x0 !== x1 || x0 !== x2 || x1 !== x2) & (x0 - 1) < 1 && (x1 - 1) < 1 && (x2 - 1) < 1) {
        document.getElementsByClassName("Pizza_Order")[v].style.display = "none";
    }

    document.getElementsByClassName("Pizza_Counter")[z].innerHTML = y;
    document.getElementsByClassName("column_3")[z].innerHTML = y;


};

function addAmount(z) {
    var y = parseInt(document.getElementsByClassName("Pizza_Counter")[z].innerHTML);
        switch (z) {
        case 0:
        case 1:
        case 2:
            var v = 0
            break;
        case 3:
        case 4:
        case 5:
            var v = 1
            break;
        case 6:
        case 7:
        case 8:
            var v = 2
            break;
        case 9:
        case 10:
        case 11:
            var v = 3
            break;
        
        default:
            console.log("nope");
    };        
    y += 1;
    document.getElementsByClassName("Pizza_Order")[v].style.display = "flex";
    document.getElementsByClassName("Pizza_Order_MAP")[z].style.display = "flex";
    document.getElementsByClassName("Pizza_Counter")[z].innerHTML = y;
    document.getElementsByClassName("column_3")[z].innerHTML = y;

}

function Total(v) {
    var TM = 5.99 * parseInt(document.getElementsByClassName("Pizza_Counter")[0].innerHTML);
    var TL = 6.99 * parseInt(document.getElementsByClassName("Pizza_Counter")[1].innerHTML);
    var TC = 6.99 * parseInt(document.getElementsByClassName("Pizza_Counter")[2].innerHTML);
    var VM = 5.99 * parseInt(document.getElementsByClassName("Pizza_Counter")[3].innerHTML);
    var VL = 6.99 * parseInt(document.getElementsByClassName("Pizza_Counter")[4].innerHTML);
    var VC = 6.99 * parseInt(document.getElementsByClassName("Pizza_Counter")[5].innerHTML);
    var QM = 5.99 * parseInt(document.getElementsByClassName("Pizza_Counter")[6].innerHTML);
    var QL = 6.99 * parseInt(document.getElementsByClassName("Pizza_Counter")[7].innerHTML);
    var QC = 6.99 * parseInt(document.getElementsByClassName("Pizza_Counter")[8].innerHTML);
    var SM = 5.99 * parseInt(document.getElementsByClassName("Pizza_Counter")[9].innerHTML);
    var SL = 6.99 * parseInt(document.getElementsByClassName("Pizza_Counter")[10].innerHTML);
    var SC = 6.99 * parseInt(document.getElementsByClassName("Pizza_Counter")[11].innerHTML);
    
    document.getElementById("TM").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(TM);
    document.getElementById("TL").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(TL);
    document.getElementById("TC").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(TC);
    document.getElementById("VM").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(VM);
    document.getElementById("VL").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(VL);
    document.getElementById("VC").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(VC);
    document.getElementById("QM").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(QM);
    document.getElementById("QL").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(QL);
    document.getElementById("QC").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(QC);
    document.getElementById("SM").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(SM);
    document.getElementById("SL").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(SL);
    document.getElementById("SC").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(SC);

    var STotal = TM + TL + TC + VM + VL + VC + QM + QL + QC + SM + SL + SC;

    document.getElementById("Subtotal").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(STotal);

    if (document.getElementById("Delivery").checked == true){
        Delivery = 2.59;
    } else {
        Delivery = 0;
    }

    document.getElementById("Delivery_Amount").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(Delivery);

    var Total = STotal + Delivery;

    document.getElementById("Total").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(Total);
    document.getElementById("Form_Total").innerHTML = new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(Total);

    if (STotal > 0) {
        document.getElementById("Order_Button").style.display = "block";
        console.log("did it");
    } else {
        document.getElementById("Order_Button").style.display = "none";
        console.log("not it");
    }
};
            

