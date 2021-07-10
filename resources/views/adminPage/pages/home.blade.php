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
                                                            {{ $itemHot->active_quantity - $itemHot->quantity_sell }}.PCS
                                                        </strong>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <strong>+{{ number_format(($itemHot->quantity_sell / $itemHot->active_quantity) * 100) }}%</strong>
                                                        <div class="progress" style="height: 4px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: {{ ($itemHot->quantity_sell / $itemHot->active_quantity) * 100 }}%"
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
                                                        <strong>
                                                            @if ($itemStock->active_quantity - ($itemStock->quantity_sell = 0 && $itemStock->quantity_sell != null))
                                                                0%
                                                            @else
                                                                +{{ $itemStock->quantity_sell }}%
                                                            @endif
                                                        </strong>
                                                        @if ($itemStock->active_quantity - ($itemStock->quantity_sell = 0 && $itemStock->quantity_sell != null))
                                                            <div class="progress" style="height: 4px;">
                                                                <div class="progress-bar" role="progressbar"
                                                                    style="width: 0%"
                                                                    aria-valuenow="0"
                                                                    aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        @else
                                                        <div class="progress" style="height: 4px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: {{ (($itemStock->quantity_sell / $itemStock->quantity_sell) * 100) }}%"
                                                                aria-valuenow="{{ (($itemStock->quantity_sell / $itemStock->quantity_sell) * 100) }}"
                                                                aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div> <!-- .col-md-12 -->
                                    </div> <!-- .row -->
                                </div> <!-- .card-body -->
                            </div>
                        </div> <!-- .col -->
                    </div> <!-- / .row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading my-2">Chart Demo</div>
                                <div class="col-md-12">
                                    <div class="chart-box">
                                        <div class="p-6 m-20 bg-white rounded shadow">
                                            {!! $chart->container() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <script src="admin/js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="{{ LarapexChart::cdn() }}"></script>
    {{ $chart->script() }}

    {{-- <script>
        var ctx = document.getElementById('userChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',
            // The data for our dataset
            data: {
                labels: {!! json_encode($chart->labels) !!},
                datasets: [{
                    label: 'Count of product sell',
                    backgroundColor: {!! json_encode($chart->colours) !!},
                    data: {!! json_encode($chart->dataset) !!},
                }, ]
            },
            // Configuration options go here
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            callback: function(value) {
                                if (value % 1 === 0) {
                                    return value;
                                }
                            }
                        },
                        scaleLabel: {
                            display: false
                        }
                    }]
                },
                legend: {
                    labels: {
                        // This more specific font property overrides the global property
                        fontColor: '#122C4B',
                        fontFamily: "'Muli', sans-serif",
                        padding: 25,
                        boxWidth: 25,
                        fontSize: 14,
                    }
                },
                layout: {
                    padding: {
                        left: 10,
                        right: 10,
                        top: 0,
                        bottom: 10
                    }
                }
            }
        });
    </script> --}}
@endsection
