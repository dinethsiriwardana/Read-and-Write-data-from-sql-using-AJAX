
// This Code for the Select Button and Form
function btnadddata(){
    var btnadd = document.getElementById('btnadddata');
    var btnshow = document.getElementById('btnshowdata');
    var adddataform = document.getElementById('adddata');
    var showdataform = document.getElementById('showdata');
    // console.log(btnadd.className);
    if (btnadd.className == 'btn btn-primary') {
        adddataform.className = 'containerform'
        showdataform.className = 'containerform hide'
        btnadd.className = 'btn btn-danger'
        btnshow.className = 'btn btn-primary float-end'

    }
}
function btnshowdata(){
    var btnadd = document.getElementById('btnadddata');
    var btnshow = document.getElementById('btnshowdata');
    var adddataform = document.getElementById('adddata');
    var showdataform = document.getElementById('showdata');
    // console.log(btnadd.className);
    if (btnshow.className == 'btn btn-primary float-end') {
        adddataform.className = 'containerform hide'
        showdataform.className = 'containerform'
        btnshow.className = 'btn btn-danger float-end' // For Change Show Btn Color 
        btnadd.className = 'btn btn-primary' // For Change Add Btn Color 

    }
}
// This Code for the Select Button and Form





// AJAX Start
$(document).ready(function(){

    $("#adddatasubmit").click(function(event){  // For Submit Data
        event.preventDefault();
        var formdata = $("#formadddata").serialize();
        console.log("formdata");
        $.post(
            "datasubmit_backend.php",
            formdata,
            function(data, status){
               
            }
        )
    });
    $("#refresh").click(function(event){  // For Get data
       
        var formdata = $("#formadddata").serialize();
        // console.log(formdata);
        $.get(
            "datashow_backend.php",
            function(data, status){
               $("#lbl").html(data);
            }
        );
    });
});