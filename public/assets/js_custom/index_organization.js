$(document).ready(function() {
    $('#organization_table').DataTable({
        processing: true, 
        serverSide: true, 
        searching: false,
        lengthChange: false,
        ajax: {
            url: '/setting/organization', 
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
                        return '<a href="/setting/organization/' + row.id + '/edit">' + data + '</a>';
                    }
            
                    return data;
                } 

            },         
            { data: 'email' },       
            { data: 'phone_number'},       
            { data: 'created_at'}, 
            // { 
            //     data: 'action', 
            //     name: 'action', 
            //     orderable: false, 
            //     searchable: false 
            // } 
        ],
        order: [[0, 'desc']], 
    });

    // Event listener untuk filter tambahan
    // $('#customFilter').on('change', function() {
    //     $('#exampleTable').DataTable().ajax.reload();
    // });
});
