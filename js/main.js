$(function(){
    $('#m_btn').on('click',function(){
        $('#m_menu').sidebar('toggle');
    });

});

$(document).ready(function(){
    $('.demo.menu .item').tab({history:false});
});

$(document).ready(function(){
    $('.demos.menu .item').tab({history:false});
});

$(document).ready(function(){
     $('#AddProducts').click(function(){
        $('#modaldiv').modal('show');    
     });
});


$(document).ready(function(){
     $('#EditProducts').click(function(){
        $('#modaldivedit').modal('show');    
     });
});

// Uid should be added to the ID on the anchor and the js for the modal to work
$(document).ready(function(){
     $('#EditProducts2').click(function(){
        $('#modaldivedit').modal('show');    
     });
});

$(document).ready(function(){
     $('#deleteProduct').click(function(){
        $('#modaldivdelete').modal('show');    
     });
});

$(document).ready(function() {
    $('.ui.dropdown').dropdown();
});


$(document).ready(function(){
     $('#AddNew').click(function(){
        $('#AddNewCon').modal('show');    
     });
});

// Uid should be added to the ID on the anchor and the js for the modal to work
$(document).ready(function(){
     $('#AddNew2').click(function(){
        $('#AddNewCon').modal('show');    
     });
});


// Add a new customer
$(document).ready(function(){
     $('#AddNewCus').click(function(){
        $('#AddNewCusMod').modal('show');    
     });
});

// Edit the customer information
$(document).ready(function(){
     $('#editCustomer').click(function(){
        $('#EditNewCusMod').modal('show');    
     });
});
$(document).ready(function(){
     $('#editCustomer2').click(function(){
        $('#EditNewCusMod').modal('show');    
     });
});

// delete section 
$(document).ready(function(){
     $('#deleteCustomer').click(function(){
        $('#deleteCustomerMod').modal('show');    
     });
});
$(document).ready(function(){
     $('#deleteCustomer2').click(function(){
        $('#deleteCustomerMod').modal('show');    
     });
});



// Edit the Sales Rep information
$(document).ready(function(){
     $('#SalesRepEdit').click(function(){
        $('#SalesRepEditMod').modal('show');    
     });
});
$(document).ready(function(){
     $('#SalesRepEdit2').click(function(){
        $('#SalesRepEditMod2').modal('show');    
     });
});




// Assigned agents modal - fifteen
$(document).ready(function(){
     $('#AgentDetails').click(function(){
        $('#AgentDetailsModal').modal('show');    
     });
});