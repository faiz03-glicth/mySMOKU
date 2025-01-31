<x-default-layout>
<head>
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/assets/css/saringan.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
</head>    
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Tuntutan</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="/" class="text-dark text-hover-primary" style="color:darkblue">Tuntutan</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-dark" style="color:darkblue">Tuntutan Baharu</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
</div>  
<br>
@if (session('message'))
    <div class="alert alert-success" style="color:black; text-align: center;">{{ session('message') }}</div>
@endif
    
<div class="row clearfix">
    <!--begin::Content-->
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Header-->
            <div class="header">
                <h2>Senarai Tuntutan Baharu</h2>
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="body">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table id="sortTable2" class="table table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>ID Permohonan</th>
                                <th>Nama Pelajar</th>
                                <th>Nama Kursus</th>
                                <th>Tempoh Penajaan</th>
                                <th>Status</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($layak as $layak)
                                @php
                                    $status = DB::table('bk_status')->where('kod_status', $layak->permohonan_status)->value('status');
                                                
                                    $text = ucwords(strtolower($layak->nama)); // Assuming you're sending the text as a POST parameter
                                    $conjunctions = ['bin', 'binti'];
                                    $words = explode(' ', $text);
                                    $result = [];
                                    foreach ($words as $word) {
                                        if (in_array(Str::lower($word), $conjunctions)) {
                                            $result[] = Str::lower($word);
                                        } else {
                                            $result[] = $word;
                                        }
                                    }
                                    $pemohon = implode(' ', $result);
                            
                                    //institusi pengajian
                                    $text3 = ucwords(strtolower($layak->nama_kursus)); // Assuming you're sending the text as a POST parameter
                                    $conjunctions = ['of', 'in', 'and'];
                                    $words = explode(' ', $text3);
                                    $result = [];
                                    foreach ($words as $word) {
                                        if (in_array(Str::lower($word), $conjunctions)) {
                                            $result[] = Str::lower($word);
                                        } else {
                                            $result[] = $word;
                                        }
                                    }
                                    $kursus = implode(' ', $result);
                                @endphp
                            <tr>
                                <td>{{ $layak->no_rujukan_permohonan}}</td>
                                <td>{{ $pemohon}}</td>
                                <td>{{ $kursus}}</td>
                                <td>
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $layak->tarikh_mula)->format('d/m/Y') }} - 
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $layak->tarikh_tamat)->format('d/m/Y') }}
                                </td>
                                <td class="text-center"><button class="btn bg-success text-white">{{ucwords(strtolower($status))}}</button></td>
                                <td>
                                    <!--begin::Toolbar-->
                                    <div class="d-flex">
                                        <!--begin::Edit-->
                                        <a href="{{ route('bkoku.kemaskini.keputusan', $layak->smoku_id)}}" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3">
                                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Kemaskini Keputusan Peperiksaan">
                                                <i class="ki-solid ki-pencil text-dark fs-2"></i>
                                            </span>
                                        </a>
                                        <a href="{{ route('bkoku.tuntutan.baharu', $layak->smoku_id)}}" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3">
                                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Hantar Tuntutan">
                                                <i class="ki-solid ki-search-list text-dark fs-2"></i>
                                            </span>
                                        </a>
                                        <!--end::Edit-->
                                    </div>
                                    <!--end::Toolbar-->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content-->
</div>

<!--begin::Javascript-->
<script>
    $('#sortTable1').DataTable();
    $('#sortTable2').DataTable();
</script>
<!--end::Javascript-->     
</x-default-layout>