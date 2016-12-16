$(document).ready(function(){
    $.ajax({
        type: 'POST',
        url: '../php/test.php',
        dataType: 'json',
        success: function (data) {

            parseData(data);

            $('.accordionButton').click(function(){
                toggleAccordion(this, $(this));
            })
        },
        error: function(jqXHR, textStatus){ 
            console.log("FAIL");
            console.log("error " + textStatus);
            console.log("incoming Text " + jqXHR.responseText);
        }
    });    
});

//Couple globals to make my life easier
var bsMajorCount = 0;
var bsNyMajorCount = 0;
var bsPvMajorCount = 0;
var msMajorCount = 0;
var msNyMajorCount = 0;
var msPvMajorCount = 0;
var phdMajorCount = 0;
var phdNyMajorCount = 0;
var phdPvMajorCount = 0;

//Object Prototype
function majorRow(major, campus, level, empFT, empPT, contEdEn, contEdPl, seek, total){
    this.major = major;
    this.campus = campus;
    this.level = level;
    this.empFT = empFT;
    this.empPT = empPT;
    this.contEdEn = contEdEn;
    this.contEdPl = contEdPl;
    this.seek = seek;
    this.total = total;
}

function parseData(data){

    var majorRows = [];
    var i = 0;

    $.each(data, function(key, val){
        var tempEmpFt = cleanNum(val.EmpFT);
        var tempEmpPt = cleanNum(val.EmpPT);
        var tempContEdEn = cleanNum(val.ContEdEnrolled);
        var tempContEdPl = cleanNum(val.ContEdPlanning);
        var tempSeek = cleanNum(val.Seeking);
        var tempGrad = cleanNum(val.Graduates);

        var temp = new majorRow(
            val.major,
            val.campus,
            val.level,
            tempEmpFt,
            tempEmpPt,
            tempContEdEn,
            tempContEdPl,
            tempSeek,
            tempGrad
            );
        majorRows[i] = temp;
        i++;
    });
    createSumData(majorRows);
}

function createSumData(majorRows){
    //Master Summary
    var totalSum = new majorRow(0,0,0,0,0,0,0,0,0,0);

    //Top Level Summary
    var bsSum = new majorRow(0,0,0,0,0,0,0,0,0,0);
    var msSum = new majorRow(0,0,0,0,0,0,0,0,0,0);
    var phdSum = new majorRow(0,0,0,0,0,0,0,0,0,0);

    //Mid Level Summary
    var bsNySum = new majorRow(0,0,0,0,0,0,0,0,0,0);
    var bsPvSum = new majorRow(0,0,0,0,0,0,0,0,0,0);
    var msNySum = new majorRow(0,0,0,0,0,0,0,0,0,0);
    var msPvSum = new majorRow(0,0,0,0,0,0,0,0,0,0);
    var phdNySum = new majorRow(0,0,0,0,0,0,0,0,0,0);
    var phdPvSum = new majorRow(0,0,0,0,0,0,0,0,0,0);


    $.each(majorRows, function(key, val){

        totalSum.empFT += val.empFT;
        totalSum.empPT += val.empPT;
        totalSum.contEdEn += val.contEdEn;
        totalSum.contEdPl += val.contEdPl;
        totalSum.seek += val.seek;
        totalSum.total += val.total;

        switch(val.level){
            case "Doctoral" :
                phdSum.empFT += val.empFT;
                phdSum.empPT += val.empPT;
                phdSum.contEdEn += val.contEdEn;
                phdSum.contEdPl += val.contEdPl;
                phdSum.seek += val.seek;
                phdSum.total += val.total;
                if(val.campus == "New York City"){
                    phdNySum.empFT += val.empFT;
                    phdNySum.empPT += val.empPT;
                    phdNySum.contEdEn += val.contEdEn;
                    phdNySum.contEdPl += val.contEdPl;
                    phdNySum.seek += val.seek;
                    phdNySum.total += val.total;
                } else if (val.campus == "Pleasantville") {
                    phdPvSum.empFT += val.empFT;
                    phdPvSum.empPT += val.empPT;
                    phdPvSum.contEdEn += val.contEdEn;
                    phdPvSum.contEdPl += val.contEdPl;
                    phdPvSum.seek += val.seek;
                    phdPvSum.total += val.total;
                }   else{
                    console.log("error from createSumData")
                }

            break;

            case "Graduate":
                msSum.empFT += val.empFT;
                msSum.empPT += val.empPT;
                msSum.contEdEn += val.contEdEn;
                msSum.contEdPl += val.contEdPl;
                msSum.seek += val.seek;
                msSum.total += val.total;
                if(val.campus == "New York City"){
                    msNySum.empFT += val.empFT;
                    msNySum.empPT += val.empPT;
                    msNySum.contEdEn += val.contEdEn;
                    msNySum.contEdPl += val.contEdPl;
                    msNySum.seek += val.seek;
                    msNySum.total += val.total;
                } else if (val.campus == "Pleasantville") {
                    msPvSum.empFT += val.empFT;
                    msPvSum.empPT += val.empPT;
                    msPvSum.contEdEn += val.contEdEn;
                    msPvSum.contEdPl += val.contEdPl;
                    msPvSum.seek += val.seek;
                    msPvSum.total += val.total;
                }   else{
                    console.log("error from createSumData")
                }

            break;

            case "Undergradu":
                //Top level Sums
                bsSum.empFT += val.empFT;
                bsSum.empPT += val.empPT;
                bsSum.contEdEn += val.contEdEn;
                bsSum.contEdPl += val.contEdPl;
                bsSum.seek += val.seek;
                bsSum.total += val.total;
                //Campus Level Sums
                if(val.campus == "New York City"){
                    bsNySum.empFT += val.empFT;
                    bsNySum.empPT += val.empPT;
                    bsNySum.contEdEn += val.contEdEn;
                    bsNySum.contEdPl += val.contEdPl;
                    bsNySum.seek += val.seek;
                    bsNySum.total += val.total;
                } else if (val.campus == "Pleasantville") {
                    bsPvSum.empFT += val.empFT;
                    bsPvSum.empPT += val.empPT;
                    bsPvSum.contEdEn += val.contEdEn;
                    bsPvSum.contEdPl += val.contEdPl;
                    bsPvSum.seek += val.seek;
                    bsPvSum.total += val.total;
                }   else{
                    console.log("error from createSumData")
                }                
            break;

            default:
            console.log("Error");
        }
    });

    $('#bsInsertAfter').after('<td> '+ bsSum.empFT +' </td><td>'+makePercent(bsSum.empFT, bsSum.total)+'<td> '+ bsSum.empPT +' </td> <td>'+makePercent(bsSum.empPT, bsSum.total)+'<td> '+bsSum.contEdEn+'</td><td>'+makePercent(bsSum.contEdEn, bsSum.total)+'</td><td>'+bsSum.contEdPl+'</td><td>'+makePercent(bsSum.contEdPl, bsSum.total)+'</td><td>'+bsSum.seek+'</td><td>'+makePercent(bsSum.seek,bsSum.total)+'</td><td>'+bsSum.total+'</td>');
    $('#msInsertAfter').after('<td> '+ msSum.empFT +' </td><td>'+makePercent(msSum.empFT, msSum.total)+'<td> '+ msSum.empPT +' </td> <td>'+makePercent(msSum.empPT, msSum.total)+'<td> '+msSum.contEdEn+'</td><td>'+makePercent(msSum.contEdEn, msSum.total)+'</td><td>'+msSum.contEdPl+'</td><td>'+makePercent(msSum.contEdPl, msSum.total)+'</td><td>'+msSum.seek+'</td><td>'+makePercent(msSum.seek,msSum.total)+'</td><td>'+msSum.total+'</td>');
    $('#phdInsertAfter').after('<td> '+ phdSum.empFT +' </td><td>'+makePercent(phdSum.empFT, phdSum.total)+'<td> '+ phdSum.empPT +' </td> <td>'+makePercent(phdSum.empPT, phdSum.total)+'<td> '+phdSum.contEdEn+'</td><td>'+makePercent(phdSum.contEdEn, phdSum.total)+'</td><td>'+phdSum.contEdPl+'</td><td>'+makePercent(phdSum.contEdPl, phdSum.total)+'</td><td>'+phdSum.seek+'</td><td>'+makePercent(phdSum.seek,phdSum.total)+'</td><td>'+phdSum.total+'</td>');
    
    $('#bachBody').after('<tbody id="bsPv" class="collapse drill"><th><button id="bsPvButton" class="accordionButton"><span id="" class="glyphicon glyphicon-plus"></span></button>Pleasantville</th> <td>'+ bsPvSum.empFT +' </td><td>'+makePercent(bsPvSum.empFT, bsPvSum.total)+'<td> '+ bsPvSum.empPT +' </td> <td>'+makePercent(bsPvSum.empPT, bsPvSum.empPT)+'<td> '+bsPvSum.contEdEn+'</td><td>'+makePercent(bsPvSum.contEdEn, bsPvSum.total)+'</td><td>'+bsPvSum.contEdPl+'</td><td>'+makePercent(bsPvSum.contEdPl, bsPvSum.total)+'</td><td>'+bsPvSum.seek+'</td><td>'+makePercent(bsPvSum.seek, bsPvSum.total)+'</td><td>'+bsPvSum.total+'</td></tbody>');
    $('#bachBody').after('<tbody id="bsNy" class="collapse drill"><th><button id="bsNyButton" class="accordionButton"><span id="" class="glyphicon glyphicon-plus"></span></button>New York City</th> <td>'+ bsNySum.empFT +' </td><td>'+makePercent(bsNySum.empFT, bsNySum.total)+'<td> '+ bsNySum.empPT +' </td> <td>'+makePercent(bsNySum.empPT, bsNySum.empPT)+'<td> '+bsNySum.contEdEn+'</td><td>'+makePercent(bsNySum.contEdEn, bsNySum.total)+'</td><td>'+bsNySum.contEdPl+'</td><td>'+makePercent(bsNySum.contEdPl, bsNySum.total)+'</td><td>'+bsNySum.seek+'</td><td>'+makePercent(bsNySum.seek, bsNySum.total)+'</td><td>'+bsNySum.total+'</td></tbody>');

    $('#msBody').after('<tbody id="msPv" class="collapse drill"><th><button id="msPvButton" class="accordionButton"><span id="" class="glyphicon glyphicon-plus"></span></button>Pleasantville</th> <td>'+ msPvSum.empFT +' </td><td>'+makePercent(msPvSum.empFT, msPvSum.total)+'<td> '+ msPvSum.empPT +' </td> <td>'+makePercent(msPvSum.empPT, msPvSum.empPT)+'<td> '+msPvSum.contEdEn+'</td><td>'+makePercent(msPvSum.contEdEn, msPvSum.total)+'</td><td>'+msPvSum.contEdPl+'</td><td>'+makePercent(msPvSum.contEdPl, msPvSum.total)+'</td><td>'+msPvSum.seek+'</td><td>'+makePercent(msPvSum.seek, msPvSum.total)+'</td><td>'+msPvSum.total+'</td></tbody>');
    $('#msBody').after('<tbody id="msNy" class="collapse drill"><th><button id="msNyButton" class="accordionButton"><span id="" class="glyphicon glyphicon-plus"></span></button>New York City</th> <td>'+ msNySum.empFT +' </td><td>'+makePercent(msNySum.empFT, msNySum.total)+'<td> '+ msNySum.empPT +' </td> <td>'+makePercent(msNySum.empPT, msNySum.empPT)+'<td> '+msNySum.contEdEn+'</td><td>'+makePercent(msNySum.contEdEn, msNySum.total)+'</td><td>'+msNySum.contEdPl+'</td><td>'+makePercent(msNySum.contEdPl, msNySum.total)+'</td><td>'+msNySum.seek+'</td><td>'+makePercent(msNySum.seek, msNySum.total)+'</td><td>'+msNySum.total+'</td></tbody>');

    $('#phdBody').after('<tbody id="phdPv" class="collapse drill"><th><button id="phdPvButton" class="accordionButton"><span id="" class="glyphicon glyphicon-plus"></span></button>Pleasantville</th> <td>'+ phdPvSum.empFT +' </td><td>'+makePercent(phdPvSum.empFT, phdPvSum.total)+'<td> '+ phdPvSum.empPT +' </td> <td>'+makePercent(phdPvSum.empPT, phdPvSum.empPT)+'<td> '+phdPvSum.contEdEn+'</td><td>'+makePercent(phdPvSum.contEdEn, phdPvSum.total)+'</td><td>'+phdPvSum.contEdPl+'</td><td>'+makePercent(phdPvSum.contEdPl, phdPvSum.total)+'</td><td>'+phdPvSum.seek+'</td><td>'+makePercent(phdPvSum.seek, phdPvSum.total)+'</td><td>'+phdPvSum.total+'</td></tbody>');
    $('#phdBody').after('<tbody id="phdNy" class="collapse drill"><th><button id="phdNyButton" class="accordionButton"><span id="" class="glyphicon glyphicon-plus"></span></button>New York City</th> <td>'+ phdNySum.empFT +' </td><td>'+makePercent(phdNySum.empFT, phdNySum.total)+'<td> '+ phdNySum.empPT +' </td> <td>'+makePercent(phdNySum.empPT, phdNySum.empPT)+'<td> '+phdNySum.contEdEn+'</td><td>'+makePercent(phdNySum.contEdEn, phdNySum.total)+'</td><td>'+phdNySum.contEdPl+'</td><td>'+makePercent(phdNySum.contEdPl, phdNySum.total)+'</td><td>'+phdNySum.seek+'</td><td>'+makePercent(phdNySum.seek, phdNySum.total)+'</td><td>'+phdNySum.total+'</td></tbody>');

    $('#grandTotals').append('<tr class="info"><th>Grand Totals</th><th>'+ totalSum.empFT +'</th><th>'+ makePercent(totalSum.empFT, totalSum.total) +'</th><th> '+ totalSum.empPT +' </th><th> '+ makePercent(totalSum.empPT,totalSum.total) +' </th><th> '+totalSum.contEdEn+' </th><th> '+ makePercent(totalSum.contEdEn, totalSum.total) +'</th><th> '+totalSum.contEdPl+' </th><th> '+makePercent(totalSum.contEdPl, totalSum.total)+' </th><th> '+totalSum.seek+' </th><th> '+makePercent(totalSum.seek, totalSum.total)+'</th><th>'+totalSum.total+'</th></tr></tbody>');

    $.each(majorRows, function(key, val){
    switch(val.level){
            case "Doctoral" :
                if(val.campus == "New York City"){
                    $('#phdNy').after('<tbody id="phdNy'+phdNyMajorCount+'" class="collapse drill2"><th>'+val.major+'</th><td>'+ val.empFT +' </td><td>'+makePercent(val.empFT, val.total)+'<td> '+ val.empPT +' </td> <td>'+makePercent(val.empPT, val.total)+'<td> '+val.contEdEn+'</td><td>'+makePercent(val.contEdEn, val.total)+'</td><td>'+val.contEdPl+'</td><td>'+makePercent(val.contEdPl, val.total)+'</td><td>'+val.seek+'</td><td>'+makePercent(val.seek, val.total)+'</td><td>'+val.total+'</td></tbody>');
                    phdNyMajorCount += 1;
                } else if (val.campus == "Pleasantville") {
                    $('#phdPv').after('<tbody id="phdPv'+phdPvMajorCount+'" class="collapse drill2"><th>'+val.major+'</th><td>'+ val.empFT +' </td><td>'+makePercent(val.empFT, val.total)+'<td> '+ val.empPT +' </td> <td>'+makePercent(val.empPT, val.total)+'<td> '+val.contEdEn+'</td><td>'+makePercent(val.contEdEn, val.total)+'</td><td>'+val.contEdPl+'</td><td>'+makePercent(val.contEdPl, val.total)+'</td><td>'+val.seek+'</td><td>'+makePercent(val.seek, val.total)+'</td><td>'+val.total+'</td></tbody>');
                    phdPvMajorCount += 1;
                    }
            phdMajorCount += 1;
            break;

            case "Graduate":

                if(val.campus == "New York City"){
                    $('#msNy').after('<tbody id="msNy'+msNyMajorCount+'" class="collapse drill2"><th>'+val.major+'</th><td>'+ val.empFT +' </td><td>'+makePercent(val.empFT, val.total)+'<td> '+ val.empPT +' </td> <td>'+makePercent(val.empPT, val.total)+'<td> '+val.contEdEn+'</td><td>'+makePercent(val.contEdEn, val.total)+'</td><td>'+val.contEdPl+'</td><td>'+makePercent(val.contEdPl, val.total)+'</td><td>'+val.seek+'</td><td>'+makePercent(val.seek, val.total)+'</td><td>'+val.total+'</td></tbody>');
                    msNyMajorCount += 1;
                } else if (val.campus == "Pleasantville") {
                    $('#msPv').after('<tbody id="msPv'+msPvMajorCount+'"class="collapse drill2"><th>'+val.major+'</th><td>'+ val.empFT +' </td><td>'+makePercent(val.empFT, val.total)+'<td> '+ val.empPT +' </td> <td>'+makePercent(val.empPT, val.total)+'<td> '+val.contEdEn+'</td><td>'+makePercent(val.contEdEn, val.total)+'</td><td>'+val.contEdPl+'</td><td>'+makePercent(val.contEdPl, val.total)+'</td><td>'+val.seek+'</td><td>'+makePercent(val.seek, val.total)+'</td><td>'+val.total+'</td></tbody>');
                    msPvMajorCount += 1;
                    }

            break;

            case "Undergradu":
                if(val.campus == "New York City"){
                    $('#bsNy').after('<tbody id="bsNy'+bsNyMajorCount+'"class="collapse drill2"><th>'+val.major+'</th><td>'+ val.empFT +' </td><td>'+makePercent(val.empFT, val.total)+'<td> '+ val.empPT +' </td> <td>'+makePercent(val.empPT, val.total)+'<td> '+val.contEdEn+'</td><td>'+makePercent(val.contEdEn, val.total)+'</td><td>'+val.contEdPl+'</td><td>'+makePercent(val.contEdPl, val.total)+'</td><td>'+val.seek+'</td><td>'+makePercent(val.seek, val.total)+'</td><td>'+val.total+'</td></tbody>');
                    bsNyMajorCount += 1;
                } else if (val.campus == "Pleasantville") {
                    $('#bsPv').after('<tbody id="bsPv'+bsPvMajorCount+'"class="collapse drill2"><th>'+val.major+'</th><td>'+ val.empFT +' </td><td>'+makePercent(val.empFT, val.total)+'<td> '+ val.empPT +' </td> <td>'+makePercent(val.empPT, val.total)+'<td> '+val.contEdEn+'</td><td>'+makePercent(val.contEdEn, val.total)+'</td><td>'+val.contEdPl+'</td><td>'+makePercent(val.contEdPl, val.total)+'</td><td>'+val.seek+'</td><td>'+makePercent(val.seek, val.total)+'</td><td>'+val.total+'</td></tbody>');
                    bsPvMajorCount += 1;
                    }
            break;

            default:
            console.log("Error");
        }        
    })
}

function cleanNum(value){
    
    if(value == null){
        temp = 0;
    }   else temp = parseInt(value);
    return temp;
}

function toggleAccordion(obj, $obj){
    console.log(obj.id);
    //Toggle Plus/Minus Button
    toggleButton($obj);

    switch(obj.id){
        case "bsOpenButton":
            $('#bsNy').collapse('toggle');
            $('#bsPv').collapse('toggle');
            console.log($('#bsPv0').hasClass("collapse in"));
            if($('#bsPv0').hasClass("collapse in") == true ){
                for (var i = 0; i < bsPvMajorCount; i++) {
                    $('#bsPv'+i).collapse('hide');
                }
                toggleButton($('#bsPv'));

            } if($('#bsNy0').hasClass("collapse in") == true ){
                for (var i = 0; i < bsNyMajorCount; i++) {
                    $('#bsNy'+i).collapse('hide');
                }
                toggleButton($(':button #bsNy')); 
            } else {
                console.log("fails");
            }
            
        break;

        case "msOpenButton":
            $('#msNy').collapse('toggle');
            $('#msPv').collapse('toggle');

            if($('#msPv0').hasClass("collapse in") == true ){
                for (var i = 0; i < msPvMajorCount; i++) {
                    $('#msPv'+i).collapse('hide');
                }
                toggleButton($obj); 
            } if($('#msNy0').hasClass("collapse in") == true ){
                for (var i = 0; i < msNyMajorCount; i++) {
                    $('#msNy'+i).collapse('hide');
                }
                toggleButton($obj); 
            } else {
                console.log("fails");
            }
        break;

        case "phdOpenButton":
            $('#phdNy').collapse('toggle');
            $('#phdPv').collapse('toggle');
            if($('#phdPv0').hasClass("collapse in") == true ){
                for (var i = 0; i < phdPvMajorCount; i++) {
                    $('#phdPv'+i).collapse('hide');
                }
                toggleButton($obj); 
            } if($('#phdNy0').hasClass("collapse in") == true ){
                for (var i = 0; i < phdNyMajorCount; i++) {
                    $('#phdNy'+i).collapse('hide');
                }
                toggleButton($obj); 
            } else {
                console.log("fails");
            }
        break;

        case "phdNyButton":
            for (var i = 0; i < phdNyMajorCount; i++) {
                $('#phdNy'+i).collapse('toggle');
            }
        break;

        case "phdPvButton":
            for (var i = 0; i < phdPvMajorCount; i++) {
                $('#phdPv'+i).collapse('toggle');
            }
        break;

        case "msNyButton":
            for (var i = 0; i < msNyMajorCount; i++) {
                $('#msNy'+i).collapse('toggle');
            }
        break;

        case "msPvButton":
            for (var i = 0; i < msPvMajorCount; i++) {
                $('#msPv'+i).collapse('toggle');
            }
        break;

        case "bsNyButton":
            for (var i = 0; i < bsNyMajorCount; i++) {
                $('#bsNy'+i).collapse('toggle');
            }
        break;

        case "bsPvButton":
            for (var i = 0; i < bsPvMajorCount; i++) {
                $('#bsPv'+i).collapse('toggle');
            }
        break;
        default:
        console.log("Error in accordion");
        break;
    }
    
}

function toggleButton($obj){
    if($obj.children().hasClass("glyphicon-plus")){
        $($obj).children().removeClass("glyphicon-plus").addClass("glyphicon-minus");    
    } else {
        $($obj).children().removeClass("glyphicon-minus").addClass("glyphicon-plus");
    }
}
function addToArray(val, array){
    if($.inArray(val,array) == -1){
        array.push(val);
    }
}

function makePercent(intIn, total){
    var result = Math.round(  (intIn / total) * 100);
    if(isNaN(result) == true){
        return 0 +'%';
    } else {return result +'%'}
}

