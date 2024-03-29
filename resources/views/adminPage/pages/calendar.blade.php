@extends('adminPage.index')
@section('scriptHeader')
    <link rel="stylesheet" href="admin/css/feather.css">
    <link rel="stylesheet" href="admin/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="admin/css/fullcalendar.css">
    <link rel="stylesheet" href="admin/css/select2.css">
    <link rel="stylesheet" href="admin/css/dropzone.css">
    <link rel="stylesheet" href="admin/css/uppy.min.css">
    <link rel="stylesheet" href="admin/css/jquery.steps.css">
    <link rel="stylesheet" href="admin/css/jquery.timepicker.css">
    <link rel="stylesheet" href="admin/css/quill.snow.css">
@endsection
@section('title', 'Calendar')
@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center my-3">
                        <div class="col">
                            <h2 class="page-title">Calendar</h2>
                        </div>
                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="category">Category</label>
                                <select class="custom-select" name="category" id="category">
                                    <option selected="">Choose category ...</option>
                                    @if (!empty($category))
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id_category }}">{{ $item->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="productType">Product Type</label>
                                <select class="custom-select" id="productType" name="productType">
                                    <option selected="">Choose product type ...</option>
                                </select>
                            </div>
                        </div>
                        {{-- <div class="col">
                            <div class="form-group mb-3">
                                <label for="product">Product </label>
                                <select class="custom-select" id="product" name="product">
                                    <option selected="">Choose product type ...</option>
                                </select>
                            </div>
                        </div> --}}
                    </div>
                    <section class="main_manage">
                        <div id='script-warning'>
                            Sever Error.
                        </div>

                        <div id='loading'>loading...</div>

                        <div id='calendar'></div>
                    </section>
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main>
@endsection
@section('script')
    <script src="admin/js/jquery.min.js"></script>
    <link rel="stylesheet" href="admin/css/fullcalendar-3.9.0.css" />
    <script src="admin/js/moment-2.24.0.min.js"></script>
    <script src="admin/js/fullcalendar-3.9.0.js"></script>
    <script src="admin/js/popper.min.js"></script>
    <script src="admin/js/moment.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/simplebar.min.js"></script>
    <script src='admin/js/daterangepicker.js'></script>
    <script src='admin/js/jquery.stickOnScroll.js'></script>
    <script src="admin/js/tinycolor-min.js"></script>
    <script src="admin/js/config.js"></script>
    <script src='admin/js/jquery.dataTables.min.js'></script>
    <script src='admin/js/dataTables.bootstrap4.min.js'></script>
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
        // var uptarg = document.getElementById('drag-drop-area');
        // if (uptarg) {
        //     var uppy = Uppy.Core().use(Uppy.Dashboard, {
        //         inline: true,
        //         target: uptarg,
        //         proudlyDisplayPoweredByUppy: false,
        //         theme: 'dark',
        //         width: 770,
        //         height: 210,
        //         plugins: ['Webcam']
        //     }).use(Uppy.Tus, {
        //         endpoint: 'https://master.tus.io/files/'
        //     });
        //     uppy.on('complete', (result) => {
        //         console.log('Upload complete! We’ve uploaded these files:', result.successful)
        //     });
        // }

    </script>
    <script src="admin/js/apps.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');

    </script>
    <script>
        $(document).ready(function() {
            $('#category').change(function() {
                var category = $(this).val();
                if (category) {
                    $.ajax({
                        type: "get",
                        url: '../admin/get-product-type/' + category,
                        success: function(res) {
                            if (res.length !== 0) {
                                $("#productType").empty();
                                $("#productType").append(
                                    '<option>Choose product type ...</option>');
                                $.each(res, function(key, value) {
                                    $("#productType").append('<option value="' + key +
                                        '">' + value + '</option>');
                                });
                            } else {
                                $("#productType").empty();
                            }
                        }
                    });
                }
            });
            $('#productType').change(function() {
                var productType = $(this).val();
                if (productType) {
                    $.ajax({
                        type: "get",
                        url: '../admin/order/' + productType,
                        success: function(res) {
                            if (res.length !== 0) {
                                var calendar = $('#calendar').fullCalendar({
                                    plugins: ['dayGrid', 'timeGrid', 'list',
                                        'bootstrap'
                                    ],
                                    timeZone: 'LOCALHOST',
                                    themeSystem: 'standard',
                                    header: {
                                        left: 'today,prev,next',
                                        center: 'title',
                                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                                    },
                                    weekNumbers: true,
                                    eventLimit: true, // allow "more" link when too many events
                                    events: {
                                        url: '../admin/order/' + productType,
                                        color: 'rgba(255, 25, 25, 0.79)',
                                        constraint: 'availableForMeeting',
                                        overlap: false,
                                        backgroundColor: 'rgba(255, 25, 25, 0.79)',
                                        failure: function() {
                                            document.getElementById('script-warning').style.display = 'block'}
                                    },
                                    loading: function(bool) {
                                        document.getElementById('loading').style
                                            .display =
                                            bool ? 'block' : 'none';
                                    }
                                });
                            } else {
                                var calendar = $('#calendar').fullCalendar({
                                    plugins: ['dayGrid', 'timeGrid', 'list',
                                        'bootstrap'
                                    ],
                                    timeZone: 'UTC',
                                    themeSystem: 'standard',
                                    header: {
                                        left: 'today,prev,next',
                                        center: 'title',
                                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                                    },
                                    weekNumbers: true,
                                    eventLimit: true,
                                });
                            }
                        }
                    });
                }
            });
        });
        
        // var calendar = $('#calendar').fullCalendar({
        //         plugins: ['dayGrid', 'timeGrid', 'list',
        //           'bootstrap'
        //         ],
        //         timeZone: 'LOCALHOST',
        //         themeSystem: 'standard',
        //         header: {
        //           left: 'today,prev,next',
        //           center: 'title',
        //           right: 'dayGridMonth,timeGridWeek,timeGridDay'
        //         },
        //         weekNumbers: true,
        //         eventLimit: true,
        //       });

    </script>
@endsection
