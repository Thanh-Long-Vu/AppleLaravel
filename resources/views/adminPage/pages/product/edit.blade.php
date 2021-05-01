@extends('adminPage.index')
@section('scriptHeader')
    <link rel="stylesheet" href="admin/css/feather.css">
    <link rel="stylesheet" href="admin/css/select2.css">
    <link rel="stylesheet" href="admin/css/dropzone.css">
    <link rel="stylesheet" href="admin/css/uppy.min.css">
    <link rel="stylesheet" href="admin/css/jquery.steps.css">
    <link rel="stylesheet" href="admin/css/jquery.timepicker.css">
    <link rel="stylesheet" href="admin/css/quill.snow.css">
@endsection
@section('title', 'Edit Warehouse')
@section('content')
    <script>
        function fill_unit_select_box($connect) {
            $output = '';
            $query = "SELECT * FROM tbl_unit ORDER BY unit_name ASC";
            $statement = $connect - > prepare($query);
            $statement - > execute();
            $result = $statement - > fetchAll();
            foreach($result as $row) {
                $output. = '<option value="'.$row["unit_name"].
                '">'.$row["unit_name"].
                '</option>';
            }
            return $output;
        }
        $(document).ready(function() {

            $(document).on('click', '.add', function() {
                var html = '';
                html += '<tr>';
                html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
                html +=
                    '<td><input type="text" name="item_quantity[]" class="form-control item_quantity" /></td>';
                html +=
                    '<td><select name="item_unit[]" class="form-control item_unit"><option value="">Select Unit</option><?php  ?></select></td>';
                html +=
                    '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fe fe-delete"></span></button></td></tr>';
                $('#item_table').append(html);
            });

            $(document).on('click', '.remove', function() {
                $(this).closest('tr').remove();
            });

            $('#insert_form').on('submit', function(event) {
                event.preventDefault();
                var error = '';
                $('.item_name').each(function() {
                    var count = 1;
                    if ($(this).val() == '') {
                        error += "<p>Enter Item Name at " + count + " Row</p>";
                        return false;
                    }
                    count = count + 1;
                });

                $('.item_quantity').each(function() {
                    var count = 1;
                    if ($(this).val() == '') {
                        error += "<p>Enter Item Quantity at " + count + " Row</p>";
                        return false;
                    }
                    count = count + 1;
                });

                $('.item_unit').each(function() {
                    var count = 1;
                    if ($(this).val() == '') {
                        error += "<p>Select Unit at " + count + " Row</p>";
                        return false;
                    }
                    count = count + 1;
                });
                var form_data = $(this).serialize();
                if (error == '') {
                    $.ajax({
                        url: "insert.php",
                        method: "POST",
                        data: form_data,
                        success: function(data) {
                            if (data == 'ok') {
                                $('#item_table').find("tr:gt(0)").remove();
                                $('#error').html(
                                    '<div class="alert alert-success">Item Details Saved</div>'
                                );
                            }
                        }
                    });
                } else {
                    $('#error').html('<div class="alert alert-danger">' + error + '</div>');
                }
            });

        });

    </script>
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Form Edit Product</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow mb-4">
                                {{-- <div class="card-header">
                                    <strong class="card-title">Advanced Validation</strong>
                                </div> --}}
                                <div class="card-body">
                                    <form class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="name">Name product</label>
                                                <input type="text" class="form-control" id="name" value="Iphone X" required disabled>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="seri">Number Seri</label>
                                                <input type="text" class="form-control" id="seri" value="10802506808" disabled
                                                    required>
                                            </div>
                                        </div> <!-- /.form-row -->
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="warranty">Warranty</label>
                                                <input type="text" class="form-control" id="warranty" value="12 Month"
                                                    required disabled>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="quantity">Quantity</label>
                                                <input type="text" class="form-control" id="quantity" value="Number PCS" disabled
                                                    required>
                                            </div>
                                        </div> <!-- /.form-row -->
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="price">Price buy</label>
                                                <input type="text" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)" id="price" placeholder=".VNĐ" disabled>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="price">Price sell</label>
                                                <input type="text" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)" id="price" placeholder=".VNĐ">
                                            </div>
                                            <div class="form-group col-md-3 mb-3">
                                                <label for="custom-select">Category</label>
                                                <select class="custom-select" id="custom-select" disabled>
                                                    <option selected>Select Category</option>
                                                    <option value="1">Iphone</option>
                                                    <option value="2">Mac</option>
                                                    <option value="3">Ipad</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3 mb-3">
                                                <label for="custom-select">Product Types</label>
                                                <select class="custom-select" id="custom-select" >
                                                    <option selected>Select Product Types</option>
                                                    <option value="1">Iphone 8</option>
                                                    <option value="2">Iphone X</option>
                                                    <option value="3">Iphone 12</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="customFile">Add Thumbail</label>
                                                <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="customFile">Discount</label>
                                                <div class="custom-file">
                                                <input type="text" class="form-control" id="quantity" value="" placeholder="%" required>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <p class="mb-2">Color</p>
                                            <div class="form-row">
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="Red"
                                                            name="radio-memory" value="Red" required disabled>
                                                        <label class="custom-control-label" for="Red">Red</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Yellow"
                                                            name="radio-memory" value="Yellow" required>
                                                        <label class="custom-control-label" for="Yellow">Yellow</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Violet"
                                                            name="radio-memory" value="Violet" required>
                                                        <label class="custom-control-label" for="Violet">Violet</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Green"
                                                            name="radio-memory" value="Green" required>
                                                        <label class="custom-control-label" for="Green">Green</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Black"
                                                            name="radio-memory" value="Black" required>
                                                        <label class="custom-control-label" for="Black">Black</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="White"
                                                            name="radio-memory" value="White" required>
                                                        <label class="custom-control-label" for="White">White</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Other"
                                                            name="radio-memory" value="Other" required>
                                                        <label class="custom-control-label" for="Other">Other</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <p class="mb-2">Memory</p>
                                            <div class="form-row">
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="16GB"
                                                            name="radio-memory" value="16GB" required disabled>
                                                        <label class="custom-control-label" for="16GB">16GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="32GB"
                                                            name="radio-memory" value="32GB" required>
                                                        <label class="custom-control-label" for="32GB">32GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="64GB"
                                                            name="radio-memory" value="64GB" required>
                                                        <label class="custom-control-label" for="64GB">64GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="128GB"
                                                            name="radio-memory" value="128GB" required>
                                                        <label class="custom-control-label" for="128GB">128GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="256GB"
                                                            name="radio-memory" value="256GB" required>
                                                        <label class="custom-control-label" for="256GB">256GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="512Gb"
                                                            name="radio-memory" value="512Gb" required>
                                                        <label class="custom-control-label" for="512Gb">512Gb</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="dataproduct">Data Product</label>
                                            {{-- <form method="post" id="insert_form">
                                                <div class="table-repsonsive">
                                                    <span id="error"></span>
                                                    <table class="table table-bordered" id="item_table">
                                                        <tr>
                                                            <th>Nội dung kỹ thuật</th>
                                                            <th>Enter Quantity</th>
                                                            <th>Select Unit</th>
                                                            <th><button type="button" name="add"
                                                                    class="btn btn-success btn-sm add"><span
                                                                        class="fe fe-plus-square"></span></button>
                                                            </th>
                                                        </tr>
                                                    </table>
                                                    <div align="center">
                                                        <input type="submit" name="submit" class="btn btn-info"
                                                            value="Insert" />
                                                    </div>
                                                </div>
                                            </form> --}}
                                        </div>
                                        <button class="btn btn-primary" type="submit">Edit Product</button>
                                    </form>
                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                    </div> <!-- end section -->
                </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-box fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Package has uploaded successfull</strong></small>
                                        <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-download fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Widgets are updated successfull</strong></small>
                                        <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                                        <small class="badge badge-pill badge-light text-muted">2m ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-inbox fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Notifications have been sent</strong></small>
                                        <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                                        <small class="badge badge-pill badge-light text-muted">30m ago</small>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-link fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Link was attached to menu</strong></small>
                                        <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                                        <small class="badge badge-pill badge-light text-muted">1h ago</small>
                                    </div>
                                </div>
                            </div> <!-- / .row -->
                        </div> <!-- / .list-group -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body px-5">
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-success justify-content-center">
                                    <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Control area</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Activity</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Droplet</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Upload</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-users fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Users</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Settings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- main -->
@endsection
@section('script')
    <script src="admin/js/jquery.min.js"></script>
    <script src="admin/js/popper.min.js"></script>
    <script src="admin/js/moment.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/simplebar.min.js"></script>
    <script src='admin/js/daterangepicker.js'></script>
    <script src='admin/js/jquery.stickOnScroll.js'></script>
    <script src="admin/js/tinycolor-min.js"></script>
    <script src="admin/js/config.js"></script>
    <script src='admin/js/jquery.mask.min.js'></script>
    <script src='admin/js/select2.min.js'></script>
    <script src='admin/js/jquery.steps.min.js'></script>
    <script src='admin/js/jquery.validate.min.js'></script>
    <script src='admin/js/jquery.timepicker.js'></script>
    <script src='admin/js/dropzone.min.js'></script>
    <script src='admin/js/uppy.min.js'></script>
    <script src='admin/js/quill.min.js'></script>
    <script>
        $('.select2').select2({
            theme: 'bootstrap4',
        });
        $('.select2-multi').select2({
            multiple: true,
            theme: 'bootstrap4',
        });
        $('.drgpicker').daterangepicker({
            singleDatePicker: true,
            timePicker: false,
            showDropdowns: true,
            locale: {
                format: 'MM/DD/YYYY'
            }
        });
        $('.time-input').timepicker({
            'scrollDefault': 'now',
            'zindex': '9999' /* fix modal open */
        });
        /** date range picker */
        if ($('.datetimes').length) {
            $('.datetimes').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'M/DD hh:mm A'
                }
            });
        }
        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                    'month')]
            }
        }, cb);
        cb(start, end);
        $('.input-placeholder').mask("00/00/0000", {
            placeholder: "__/__/____"
        });
        $('.input-zip').mask('00000-000', {
            placeholder: "____-___"
        });
        $('.input-money').mask("#.##0,00", {
            reverse: true
        });
        $('.input-phoneus').mask('(000) 000-0000');
        $('.input-mixed').mask('AAA 000-S0S');
        $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
                'Z': {
                    pattern: /[0-9]/,
                    optional: true
                }
            },
            placeholder: "___.___.___.___"
        });
        // editor
        var editor = document.getElementById('editor');
        if (editor) {
            var toolbarOptions = [
                [{
                    'font': []
                }],
                [{
                    'header': [1, 2, 3, 4, 5, 6, false]
                }],
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{
                        'header': 1
                    },
                    {
                        'header': 2
                    }
                ],
                [{
                        'list': 'ordered'
                    },
                    {
                        'list': 'bullet'
                    }
                ],
                [{
                        'script': 'sub'
                    },
                    {
                        'script': 'super'
                    }
                ],
                [{
                        'indent': '-1'
                    },
                    {
                        'indent': '+1'
                    }
                ], // outdent/indent
                [{
                    'direction': 'rtl'
                }], // text direction
                [{
                        'color': []
                    },
                    {
                        'background': []
                    }
                ], // dropdown with defaults from theme
                [{
                    'align': []
                }],
                ['clean'] // remove formatting button
            ];
            var quill = new Quill(editor, {
                modules: {
                    toolbar: toolbarOptions
                },
                theme: 'snow'
            });
        }
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

    </script>
    <script>
        var uptarg = document.getElementById('drag-drop-area');
        if (uptarg) {
            var uppy = Uppy.Core().use(Uppy.Dashboard, {
                inline: true,
                target: uptarg,
                proudlyDisplayPoweredByUppy: false,
                theme: 'dark',
                width: 770,
                height: 210,
                plugins: ['Webcam']
            }).use(Uppy.Tus, {
                endpoint: 'https://master.tus.io/files/'
            });
            uppy.on('complete', (result) => {
                console.log('Upload complete! We’ve uploaded these files:', result.successful)
            });
        }

    </script>
    <script src="admin/js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');

    </script>
@endsection