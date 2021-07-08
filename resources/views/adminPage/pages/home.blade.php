@extends('adminPage.index')

@section('title', 'Home')
    @yield('scriptHeader')
    <link rel="stylesheet" href="css/feather.css">
    <link rel="stylesheet" href="css/select2.css">
    <link rel="stylesheet" href="css/dropzone.css">
    <link rel="stylesheet" href="css/uppy.min.css">
    <link rel="stylesheet" href="css/jquery.steps.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/quill.snow.css">
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow bg-primary text-white border-0">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                                            <span class="circle circle-sm bg-primary-light">
                                                <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                                            </span>
                                        </div>
                                        <div class="col pr-0">
                                            <p class="small text-muted mb-0">Monthly Sales</p>
                                            <span class="h3 mb-0 text-white">${{ number_format($countTotalMoney) }}</span>
                                            <span class="small text-muted">+{{ number_format($percentIncrease) }}% </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                                            <span class="circle circle-sm bg-primary">
                                                <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                                            </span>
                                        </div>
                                        <div class="col pr-0">
                                            <p class="small text-muted mb-0">Orders Monthly</p>
                                            <span class="h3 mb-0">{{ $countOrder }}</span>
                                            <span class="small text-success">+{{ number_format($amountOrder) }}%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                                            <span class="circle circle-sm bg-primary">
                                                <i class="fe fe-16 fe-filter text-white mb-0"></i>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <p class="small text-muted mb-0">Order In-Processing Today</p>
                                            <div class="row align-items-center no-gutters">
                                                <div class="col-auto">
                                                    <span class="h3 mr-2 mb-0"> {{ $percentTransactionNotDone }}% </span>
                                                </div>
                                                <div class="col-md-12 col-lg">
                                                    <div class="progress progress-sm mt-2" style="height:3px">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: {{ $percentTransactionNotDone }}%"
                                                            aria-valuenow="{{ $percentTransactionNotDone }}"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                                            <span class="circle circle-sm bg-primary">
                                                <i class="fe fe-16 fe-database text-white mb-0"></i>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <p class="small text-muted mb-0">Product</p>
                                            <span class="h3 mb-0">{{ $totalProduct }}.pcs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end section -->
                    <!-- info small box -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="card-title">
                                        <strong>Best Selling products</strong>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row align-items-center my-3">
                                                @foreach ($productHot as $itemHot)
                                                    <div class="col-md-3">
                                                        <strong>{{ $itemHot->productType->category->name ?? '' }}</strong>
                                                        <div class="my-0 text-muted small">
                                                            {{ $itemHot->productType->name ?? '' }}</div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <img src="{{ $itemHot->thumbnail ?? '' }}" alt=""
                                                            style="width: 70%;heigh:70%">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <strong>Total:
                                                            {{ $itemHot->active_quantity }}.PCS <br>Remaining:
                                                            {{ $itemHot->active_quantity - $itemHot->quantity_sell }}.PCS </strong>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <strong>+{{ ($itemHot->quantity_sell / $itemHot->active_quantity) * 100 }}%</strong>
                                                        <div class="progress" style="height: 4px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: {{ ($itemHot->quantity_sell / $itemHot->active_quantity) * 100}}%"
                                                                aria-valuenow="{{ ($itemHot->quantity_sell / $itemHot->active_quantity) * 100 }}"
                                                                aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div> <!-- .col-md-12 -->
                                    </div> <!-- .row -->
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col-md -->
                        <div class="col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="card-title">
                                        <strong>Inventory products</strong>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row align-items-center my-3">
                                                @foreach ($productStock as $itemStock)
                                                    <div class="col-md-3">
                                                        <strong>{{ $itemStock->productType->category->name ?? '' }}</strong>
                                                        <div class="my-0 text-muted small">
                                                            {{ $itemStock->productType->name ?? '' }}</div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <img src="{{ $itemStock->thumbnail ?? '' }}" alt=""
                                                            style="width: 70%;heigh:70%">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <strong>Total:
                                                            {{ $itemStock->active_quantity }}.Pcs<br>Remaining:
                                                            {{ $itemStock->active_quantity - $itemStock->quantity_sell }}.Pcs</strong>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <strong>+{{$itemStock->quantity_sell}}%</strong>
                                                        <div class="progress" style="height: 4px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: {{$itemStock->quantity_sell}}%"
                                                                aria-valuenow="{{$itemStock->quantity_sell}}"
                                                                aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div> <!-- .col-md-12 -->
                                    </div> <!-- .row -->
                                </div> <!-- .card-body -->
                            </div>
                        </div> <!-- .col -->
                    </div> <!-- / .row -->
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
    <script src="admin/js/d3.min.js"></script>
    <script src="admin/js/topojson.min.js"></script>
    <script src="admin/js/datamaps.all.min.js"></script>
    <script src="admin/js/datamaps-zoomto.js"></script>
    <script src="admin/js/datamaps.custom.js"></script>
    <script src="admin/js/Chart.min.js"></script>
    <script>
        /* defind global options */
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="admin/js/gauge.min.js"></script>
    <script src="admin/js/jquery.sparkline.min.js"></script>
    <script src="admin/js/apexcharts.min.js"></script>
    <script src="admin/js/apexcharts.custom.js"></script>
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
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month')
                    .endOf('month')
                ]
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
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
@endsection
