/**
 * Created by oshadi on 1/17/2018.
 */
var counter = 1;
var limit = 3;
function addInput(divName){

    if (counter == limit){
        alert("You have reached the limit of adding " + counter + " inputs");
    }
    else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = " <br><input type='text' id='work-ex' placeholder='Workplace,Address' > ";
        document.getElementById(divName).appendChild(newdiv);
        counter++;
    }
    return false;
}

/* year list---*/
var max = new Date().getFullYear(),
    min= max -40,
    select = document.getElementById('select-s-year');

$("#profileImage").click(function(e) {

});





