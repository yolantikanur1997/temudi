

$(document).ready(function() {
    $('#product_table').DataTable({
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
                        return '<a href="/product/' + row.id + '/edit">' + data + '</a>';
                    }
            
                    return data;
                } 

            },      
            {data: 'type_product'},   
            {data: 'price',
                className: 'text-end',
                render: function(data, type, row) {
                    return '<span>' + data + '</span>';
                }   
            },   
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
            // { 
            //     data: 'action', 
            //     name: 'action', 
            //     orderable: false, 
            //     searchable: false 
            // } 
        ],
        order: [[0, 'desc']], 
        // dom: '<"top d-flex justify-content-between align-items-center"fB>rt<"bottom"lip><"clear">' 
    });

});
