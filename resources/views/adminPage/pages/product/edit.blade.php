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
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Form Edit Product</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <form class="needs-validation"  novalidate method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-row">
                                            <div class="form-group col-md-6 mb-6">
                                                <label for="custom-select">Product Types</label>
                                                <select class="custom-select" name="producttype" id="{{$product->product_type_id}}">
                                                    @foreach($productType as $productVal)
                                                    <option  value="{{$productVal->id_product_type}}" @if($product->product_type_id == $productVal->id_product_type) selected @endif >{{$productVal->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="seri">Number Seri</label>
                                                <input type="text" class="form-control" id="seri" name="IMEI" value="{{$product->IMEI}}"
                                                    required>
                                                    <div class="invalid-feedback">Please enter IMEI for Product</div>
                                            </div>
                                        </div> <!-- /.form-row -->
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="warranty">Warranty( Month )</label>
                                                <input type="text" class="form-control" id="warranty" name = "warranty " value="{{$product->warehouse->warranty}}"
                                                    required >
                                                    <div class="invalid-feedback">Please enter Warranty for Product</div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="quantity">Quantity ( Amount)</label>
                                                <input type="text" class="form-control" id="quantity" name = "quantity" value="{{$product->quantity}}" 
                                                    required>
                                                <div class="invalid-feedback">Please enter Quantity for Product </div>
                                            </div>
                                        </div> <!-- /.form-row -->
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="price_buy">Price buy (.VNĐ)</label>
                                                <input type="text" class="form-control"  value="{{$product->warehouse->price}}" id="price_buy" disabled required>
                                                <div class="invalid-feedback">Please choose image for Price buy</div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="price">Price sell (.VNĐ)</label>
                                                <input type="text" class="form-control" value="{{$product->price}}" id="price" name="price" required>
                                                <div class="invalid-feedback">Please choose image for Price sell</div>
                                            </div>
                                            <div class="form-group col-md-3 mb-3">
                                                <label for="custom-select">Category</label>
                                                {{-- <input class="form-control"  value="{{$product->productType->category->name}}" disabled required> --}}
                                                <select class="custom-select" id="category" name="category">
                                                    <option selected>Select Product Types</option>
                                                    {{-- @foreach($category as $categoryvalues)
                                                        <option  value="{{$categoryvalues->id_category}}" @if($product->productType->category_id == $categoryvalues->id_category) selected @endif >{{$categoryvalues->name}}</option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="customFile">Discount %</label>
                                                <div class="custom-file">
                                                    <input type="text" class="form-control" id="quantity" name="discount" value="{{$product->discount}}" required>
                                                    <div class="invalid-feedback">Please choose image for Discount</div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Add Thumbnail</label>
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="image" value="{{old('image')}}" required>
                                                    <div class="invalid-feedback">Please choose image for Product</div>
                                                </div>
                                                <div class="valid-feedback"> Looks good! </div>
                                            </div>
                                            <div class="form-group col-md-3" style="margin-top: -2.5%">
                                                @if($product->thumbnail != '')
                                                <img src="{{asset($product->thumbnail)}}" alt="" width="25%">
                                                @else
                                                <div class="alert alert-warning" role="alert">
                                                    <span class="fe fe-alert-triangle fe-16 mr-2"></span> Please choose a image for Product Type 
                                                </div>
                                                @endif
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <p class="mb-2">Color</p>
                                            <div class="form-row">
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="Red"
                                                            name="color" value="0" @if($product->color == 0) checked   @endif required>
                                                        <label class="custom-control-label" for="Red">Red</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Yellow"
                                                            name="color" value="1" @if($product->color == 1) checked   @endif required>
                                                        <label class="custom-control-label" for="Yellow">Yellow</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Violet"
                                                            name="color" value="2" @if($product->color == 2) checked   @endif required>
                                                        <label class="custom-control-label" for="Violet">Violet</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Green"
                                                            name="color" value="3" @if($product->color == 3) checked   @endif required>
                                                        <label class="custom-control-label" for="Green">Green</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Black"
                                                            name="color" value="4" @if($product->color == 4) checked   @endif required>
                                                        <label class="custom-control-label" for="Black">Black</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="White"
                                                            name="color" value="5" @if($product->color == 5) checked   @endif required>
                                                        <label class="custom-control-label" for="White">White</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Other"
                                                            name="color" value="6" @if($product->color == 6) checked   @endif required>
                                                        <label class="custom-control-label" for="Other">Other</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Patific"
                                                            name="color" value="7" @if($product->color == 7) checked   @endif required>
                                                        <label class="custom-control-label" for="Patific">Patific</label>
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
                                                            name="memory" value="0"  @if($product->memory == 0) checked   @endif required>
                                                        <label class="custom-control-label" for="16GB">16GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="32GB"
                                                            name="memory" value="1" @if($product->memory == 1) checked   @endif required>
                                                        <label class="custom-control-label" for="32GB">32GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="64GB"
                                                            name="memory" value="2" @if($product->memory == 2) checked   @endif required>
                                                        <label class="custom-control-label" for="64GB">64GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="128GB"
                                                            name="memory" value="3" @if($product->memory == 3) checked   @endif required>
                                                        <label class="custom-control-label" for="128GB">128GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="256GB"
                                                            name="memory" value="4" @if($product->memory == 4) checked   @endif required>
                                                        <label class="custom-control-label" for="256GB">256GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="512Gb"
                                                            name="memory" value="5" @if($product->memory == 5) checked   @endif required>
                                                        <label class="custom-control-label" for="512Gb">512Gb</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" value="Update Product" class="btn btn-primary">
                                    </form>
                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                    </div> <!-- end section            /.col-12 col-lg-10 col-xl-10 -->
                </div>
                <div class="col-12">
                    <h2 class="page-title">Form Edit WareHouse</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow mb-4">
                                {{-- <div class="card-header">
                                    <strong class="card-title">Advanced Validation</strong>
                                </div> --}}
                                <div class="card-body">
                                    <form class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="name">Name product</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{$warehouse->name}}" required>
                                                <div class="valid-feedback"> Looks good! </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="seri">Number Seri</label>
                                                <input type="text" class="form-control" id="seri" name="IMEI_warehouse" value="{{$warehouse->IMEI}}"
                                                    required>
                                                <div class="valid-feedback"> Looks good! </div>
                                            </div>
                                        </div> <!-- /.form-row -->
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="warranty">Warranty</label>
                                                <input type="text" class="form-control" id="warranty" name="warranty_warehouse" value="{{$warehouse->warranty}}"
                                                    required>
                                                {{-- value="Full Box, New Box, Brand New, 99%, < 99% " required> --}}
                                                <div class="valid-feedback"> Looks good! </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="quantity">Quantity</label>
                                                <input type="text" class="form-control" id="quantity" name="quantity_warehouse" value="{{$warehouse->quantity}}"
                                                    required>
                                                <div class="valid-feedback"> Looks good! </div>
                                            </div>
                                        </div> <!-- /.form-row -->
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="price">Price (.VNĐ)</label>
                                                <input type="text" class="form-control" id="price" value="{{$warehouse->price}}" name="price_warehouse">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <p class="mb-2">Color</p>
                                            <div class="form-row">
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="Red0"
                                                            name="color_warehouse" value="0" @if($warehouse->color == 0) checked   @endif required>
                                                        <label class="custom-control-label" for="Red0">Red</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Yellow1"
                                                            name="color_warehouse" value="1" @if($warehouse->color == 1) checked   @endif required>
                                                        <label class="custom-control-label" for="Yellow1">Yellow</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Violet2"
                                                            name="color_warehouse" value="2" @if($warehouse->color == 2) checked   @endif required>
                                                        <label class="custom-control-label" for="Violet2">Violet</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Green3"
                                                            name="color_warehouse" value="3" @if($warehouse->color == 3) checked   @endif required>
                                                        <label class="custom-control-label" for="Green3">Green</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Black4"
                                                            name="color_warehouse" value="4" @if($warehouse->color == 4) checked   @endif required>
                                                        <label class="custom-control-label" for="Black4">Black</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="White5"
                                                            name="color_warehouse" value="5" @if($warehouse->color == 5) checked   @endif required>
                                                        <label class="custom-control-label" for="White5">White</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Other6"
                                                            name="color_warehouse" value="6" @if($warehouse->color == 6) checked   @endif required>
                                                        <label class="custom-control-label" for="Other6">Other</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="Patific7"
                                                            name="color_warehouse" value="7" @if($warehouse->color == 7) checked   @endif required>
                                                        <label class="custom-control-label" for="Patific7">Patific</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <p class="mb-2">Memory</p>
                                            <div class="form-row">
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="16GB0"
                                                            name="memory_warehouse" value="0"  @if($warehouse->memory == 0) checked   @endif required>
                                                        <label class="custom-control-label" for="16GB0">16GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="32GB1"
                                                            name="memory_warehouse" value="1" @if($warehouse->memory == 1) checked   @endif required>
                                                        <label class="custom-control-label" for="32GB1">32GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="64GB2"
                                                            name="memory_warehouse" value="2" @if($warehouse->memory == 2) checked   @endif required>
                                                        <label class="custom-control-label" for="64GB2">64GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="128GB3"
                                                            name="memory_warehouse" value="3" @if($warehouse->memory == 3) checked   @endif required>
                                                        <label class="custom-control-label" for="128GB3">128GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="256GB4"
                                                            name="memory_warehouse" value="4" @if($warehouse->memory == 4) checked   @endif required>
                                                        <label class="custom-control-label" for="256GB4">256GB</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input type="radio" class="custom-control-input" id="512Gb5"
                                                            name="memory_warehouse" value="5" @if($warehouse->memory == 5) checked   @endif required>
                                                        <label class="custom-control-label" for="512Gb5">512Gb</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Update Warehouse</button>
                                    </form>
                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                    </div> <!-- end section -->
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
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
    <script>
        $(document).ready(function(){
            $('#category').change(function(){
            var cid = $(this).val();
            if(cid){
            $.ajax({
            type:"get",
            url: '../admin/product/edit/getCategory/'+cid,//Please see the note at the end of the post**
            success:function(res)
            {       
                    if(res.length !== 0)
                    {
                        $("#producttype").empty();
                        $("#producttype").append('<option>Chon</option>');
                        $.each(res,function(key,value){
                            $("#producttype").append('<option value="'+key+'">'+value+'</option>');
                        });
                    }else{
                        $("#producttype").empty();
                        $("#producttype").append('<option>Chọn</option>');
                    }
            }

            });
            }
        });
    });
    </script>
@endsection