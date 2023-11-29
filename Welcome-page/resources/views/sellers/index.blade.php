<!DOCTYPE html>
<html>
<head>
    <title>Seller Listing</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
</head>
<body>

<div class="container">
    <h2>Seller Listing</h2>
    <table class="table" id="sellers-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>
    $(function () {
        $('#sellers-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('get.sellers') !!}',
            columns: [
                { data: 'seller_id', name: 'seller_id' },
                { data: 'seller_name', name: 'seller_name' },
                { data: 'seller_email', name: 'seller_email' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action' },
            ]
        });
    });
</script>

</body>
</html>
