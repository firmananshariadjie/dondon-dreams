@extends('admin.partials.header')
<link rel="stylesheet" href="admin/plugins/dropzone/min/dropzone.min.css">
@section('container')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Produk</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                                <i class="fas fa-plus"></i>Tambah Data
                            </button>
                            <div class="modal fade" id="modal-primary">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Tambah Transaksi</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Kategori</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Nama Produk</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Harga Produk</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Gambar Produk</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Deskripsi</label>
                                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-outline-light">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Firman Anshari Adjie</td>
                                    <td>+628788890221</td>
                                    <td>Alat</td>
                                    <td>Board</td>
                                    <td>Rp 50.000</td>
                                </tr>
                                <tr>
                                    <td>Firman Anshari Adjie</td>
                                    <td>+628788890221</td>
                                    <td>Alat</td>
                                    <td>Board</td>
                                    <td>Rp 50.000</td>
                                </tr>
                                <tr>
                                    <td>Firman Anshari Adjie</td>
                                    <td>+628788890221</td>
                                    <td>Alat</td>
                                    <td>Board</td>
                                    <td>Rp 50.000</td>
                                </tr>
                                <tr>
                                    <td>Firman Anshari Adjie</td>
                                    <td>+628788890221</td>
                                    <td>Alat</td>
                                    <td>Board</td>
                                    <td>Rp 50.000</td>
                                </tr>
                                <tr>
                                    <td>Firman Anshari Adjie</td>
                                    <td>+628788890221</td>
                                    <td>Alat</td>
                                    <td>Board</td>
                                    <td>Rp 50.000</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

@endsection
<script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="admin/plugins/jszip/jszip.min.js"></script>
<script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        url: "/target-url", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function(file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function() {
            myDropzone.enqueueFile(file)
        }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function(file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1"
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function() {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function() {
        myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
</script>
<!-- dropzonejs -->
<script src="admin/plugins/dropzone/min/dropzone.min.js"></script>