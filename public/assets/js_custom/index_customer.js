

$(document).ready(function() {
    
    $('#customer_table').DataTable({
        processing: true, 
        serverSide: true, 
        ajax: {
            type: 'GET', 
            data: function(d) {
                // d.customFilter = $('#customFilter').val();
            }
        },
        columns: [         
            { data: 'name',
                className: 'redirect-link',
                render: function(data, type, row) {
                    if (type === 'display') {
                        return '<a href="/customer/' + row.id + '/edit">' + data + '</a>';
                    }
            
                    return data;
                } 

            },      
            {data: 'email'},   
            {data: 'phone_number'},   
           { 
                data: 'active',
                render: function(data, type, row) {
                    if (data == 1) {
                        return '<span class="badge bg-success">Aktif</span>';
                    } else {
                        return '<span class="badge bg-warning text-dark">Tidak Aktif</span>';
                    }
                    
                }
            },
        
            { data: 'created_at'}, 
            { 
                data: 'id',  
                visible: false
            } 
        ],
        order: [[5, 'desc']], 
        // dom: '<"top d-flex justify-content-between align-items-center"fB>rt<"bottom"lip><"clear">' 
    });

});
