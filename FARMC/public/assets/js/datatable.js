$(document).ready(function () {
    //Only needed for the filename of export files.
    //Normally set in the title tag of your page.
    document.title = 'Simple DataTable';
    // DataTable initialisation
    $('#example').DataTable(
        {
            "dom": '<"dt-buttons"Bf><"clear">lirtp',
            "paging": true,
            "autoWidth": true,
            "lengthMenu": [ 10, 25, 50, 75, 100 ], // Specify the available page lengths
            "buttons": [
                'colvis',
                'copyHtml5',
                'csvHtml5',
                'excelHtml5',
                'pdfHtml5',
                'print'
            ]
        }
    );
});
