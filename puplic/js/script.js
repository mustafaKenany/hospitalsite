$(document).ready(function(){

    // for (i = 0; i < 10; i++)
    // { 
    //      $('.bloodType').append($('<option>',
    //      {
    //         value: i,
    //         text : "Option "+i 
    //     }));
    // }
  
    var sexArray = new Array("Select sex","Male","Female");
    var bloodType = new Array("Select Type","O+","O-","A+","A-","B+","B-","AB+","AB-","Not defiend");

    for(i=0; i<sexArray.length; i++)
    {
        $('.sex').append($('<option>',
             {
                value: sexArray[i],
                text : sexArray[i]
            }));
    }

    for(i=0; i<bloodType.length; i++)
    {
        $('.bloodType').append($('<option>',
             {
                value: bloodType[i],
                text : bloodType[i]
            }));
    }   


});