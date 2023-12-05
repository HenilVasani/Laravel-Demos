<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
<head>
    <title>Seller Listing</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
</head>
<body>


    <a href={{route('sellers.create')}} class="btn btn-success"><span>Add New Employee</span></a><br>
<table id="myTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>subscription_expiry</th> 
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>
    $(function () {
        var table = $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('sellers') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                {data:'subscription_expiry',name:'subscription_expiry'},
                {
                data: null,
                name: 'edit',
                render: function (data) {
                        return '<a href="{{ route('sellers.edit', ':id') }}'.replace(':id', data.id) + '" class="btn btn-success"><span>Edit</span></a>';
                }
            },
            {
                data: null,
                name: 'delete',
                render: function (data) {
                      return '<a href="{{ route('sellers.delete', ':id') }}'.replace(':id', data.id)+ '" class="btn btn-danger"><span>Delete</span></a>';
                }
            }
                
            ]
        });
    });
</script>

</body>

