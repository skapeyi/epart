$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'https://datatables.yajrabox.com/eloquent/basic-data'
    });
});