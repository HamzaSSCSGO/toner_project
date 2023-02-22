

let assignements = JSON.parse(window.assignements)
console.log(assignements)


    
    //Ajax Data Source (object) start
    
    
    /* ***********************************
    *************************************
    *****************************************
    ************************************
    *********************************
    *********************************** */
    $('#ajax-data-object').DataTable({
        /* "ajax": "../assets/ajax/colorobject.txt" */data : assignements,
        "columns": [{
            "data": "assignement_id"
        }, {
            "data": "printer_name"
        }, {
            "data": "serial_number"
        }, {
            "data": "ip"
        },{
            "data": "printer_model_name"
        },{
            "data": "printer_category_name"
        },{
            "data": "toner_model_name"
        },{
            "data": "color_name"
        },{
            "data": "employee_name"
        },{
            "data": "department_name"
        },{
            "data": "department_manager"
        },{
            "data": "quantity_assigned"
        },{
            "data": "creation"
        }]
    });
    //Ajax Data Source (object) end 
    


