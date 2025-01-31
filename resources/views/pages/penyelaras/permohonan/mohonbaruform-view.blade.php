<x-default-layout> 
<style>
    /* Some custom styles to beautify this example */
	.bs-example{
    	margin: 60px 0;
    }
    a, button{
        margin-right: 30px;
  	}
    i{
        font-size: 22px;
    }
</style>
<script>
$(document).ready(function(){
    $('[data-bs-toggle="tooltip"]').tooltip();
});
</script>
		<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
	<!--begin::Title-->
	<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Permohonan Baru</h1>
	<!--end::Title-->
	<!--begin::Breadcrumb-->
	<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
		<!--begin::Item-->
		<li class="breadcrumb-item text-dark">
			<span class="text-dark text-hover-primary" style="color:darkblue">Laman Utama</span>
		</li>
		<!--end::Item-->
		<!--begin::Item-->
		<li class="breadcrumb-item">
			<span class="bullet bg-gray-400 w-5px h-2px"></span>
		</li>
		<!--end::Item-->
		<!--begin::Item-->
		<li class="breadcrumb-item text-dark" style="color:darkblue">Permohonan Baru</li>
		<!--end::Item-->
	</ul>
	<!--end::Breadcrumb-->
</div>
<!--end::Page title-->
<br>
<main class="login-form">
<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid gap-10" id="kt_create_account_stepper">
										<!--begin::Aside-->
										<div class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px">
											<!--begin::Wrapper-->
											<div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
												<!--begin::Nav-->
												<div class="stepper-nav">
													
													<!--begin::Step 1-->
													<div class="stepper-item" data-kt-stepper-element="nav">
														<!--begin::Wrapper-->
														<div class="stepper-wrapper">
															<!--begin::Icon-->
															<div class="stepper-icon w-40px h-40px">
																<i class="ki-duotone ki-check fs-2 stepper-check"></i>
																<span class="stepper-number">1</span>
															</div>
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="stepper-label">
																<h3 class="stepper-title">Maklumat Peribadi</h3>
																<div class="stepper-desc fw-semibold">Profil Peribadi Diri</div>
															</div>
															<!--end::Label-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Line-->
														<div class="stepper-line h-40px"></div>
														<!--end::Line-->
													</div>
													<!--end::Step 1-->
													<!--begin::Step 2-->
													<div class="stepper-item" data-kt-stepper-element="nav">
														<!--begin::Wrapper-->
														<div class="stepper-wrapper">
															<!--begin::Icon-->
															<div class="stepper-icon w-40px h-40px">
																<i class="ki-duotone ki-check fs-2 stepper-check"></i>
																<span class="stepper-number">2</span>
															</div>
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="stepper-label">
																<h3 class="stepper-title">Maklumat Waris</h3>
																<div class="stepper-desc fw-semibold">Profil Waris</div>
															</div>
															<!--end::Label-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Line-->
														<div class="stepper-line h-40px"></div>
														<!--end::Line-->
													</div>
													<!--end::Step 2-->
													<!--begin::Step 3-->
													<div class="stepper-item" data-kt-stepper-element="nav">
														<!--begin::Wrapper-->
														<div class="stepper-wrapper">
															<!--begin::Icon-->
															<div class="stepper-icon w-40px h-40px">
																<i class="ki-duotone ki-check fs-2 stepper-check"></i>
																<span class="stepper-number">3</span>
															</div>
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="stepper-label">
																<h3 class="stepper-title">Maklumat Akademik</h3>
																<div class="stepper-desc fw-semibold">Pembelajaran Akademik</div>
															</div>
															<!--end::Label-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Line-->
														<div class="stepper-line h-40px"></div>
														<!--end::Line-->
													</div>
													<!--end::Step 3-->
													<!--begin::Step 4-->
													<div class="stepper-item" data-kt-stepper-element="nav">
														<!--begin::Wrapper-->
														<div class="stepper-wrapper">
															<!--begin::Icon-->
															<div class="stepper-icon w-40px h-40px">
																<i class="ki-duotone ki-check fs-2 stepper-check"></i>
																<span class="stepper-number">4</span>
															</div>
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="stepper-label">
																<h3 class="stepper-title">Maklumat Tuntutan</h3>
																<div class="stepper-desc fw-semibold">Tuntutan Yuran dan Elaun Wang Saku</div>
															</div>
															<!--end::Label-->
															
														</div>
														<!--end::Wrapper-->
														<div class="stepper-line h-40px"></div>
													</div>
													<!--end::Step 4-->
													<!--begin::Step 5-->
													<div class="stepper-item" data-kt-stepper-element="nav">
														<!--begin::Wrapper-->
														<div class="stepper-wrapper">
															<!--begin::Icon-->
															<div class="stepper-icon w-40px h-40px">
																<i class="ki-duotone ki-check fs-2 stepper-check"></i>
																<span class="stepper-number">5</span>
															</div>
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="stepper-label">
																<h3 class="stepper-title">Dokumen</h3>
																<div class="stepper-desc fw-semibold">Salinan Dokumen</div>
															</div>
															<!--end::Label-->
															
														</div>
														<!--end::Wrapper-->
														<div class="stepper-line h-40px"></div>
													</div>
													<!--end::Step 5-->
													<!--begin::Step 5-->
													<div class="stepper-item  mark-completed" data-kt-stepper-element="nav">
														<!--begin::Wrapper-->
														<div class="stepper-wrapper">
															<!--begin::Icon-->
															<div class="stepper-icon w-40px h-40px">
																<i class="ki-duotone ki-check fs-2 stepper-check"></i>
																<span class="stepper-number">6</span>
															</div>
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="stepper-label">
																<h3 class="stepper-title">Perakuan</h3>
																<div class="stepper-desc fw-semibold">Pengesahan Semua Maklumat</div>
															</div>
															<!--end::Label-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Line-->
														<div class="stepper-line h-40px"></div>
														<!--end::Line-->
													</div>
													<!--end::Step 5-->
													<!--begin::Step 6-->
													<div class="stepper-item  mark-completed" data-kt-stepper-element="nav">
														<!--begin::Wrapper-->
														<div class="stepper-wrapper">
															<!--begin::Icon-->
															<div class="stepper-icon w-40px h-40px">
																<i class="ki-duotone ki-check fs-2 stepper-check"></i>
																<span class="stepper-number">7</span>
															</div>
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="stepper-label">
																<h3 class="stepper-title">Hantar</h3>
																<div class="stepper-desc fw-semibold">Selesai</div>
															</div>
															<!--end::Label-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Line-->
														
														<!--end::Line-->
													</div>
													<!--end::Step 6-->


												</div>
												<!--end::Nav-->
											</div>
											<!--end::Wrapper-->
										</div>
	<!--begin::Aside-->
										<!--begin::Content-->
										<div class="card d-flex flex-row-fluid flex-center">
											@if (session('message'))
												<div class="alert alert-success">{{ session('message') }}</div>
											@endif
											<!--begin::Form-->
											<form action="" class="card-body py-20 w-100 mw-xl-700px px-9">
											
												<!--begin::Step 1-->
												<div class="current" data-kt-stepper-element="content">
												
													<!--begin::Wrapper-->
													<div class="w-100">
														<!--begin::Heading-->
														<div class="pb-10 pb-lg-15">
															<!--begin::Title-->
															<h2 class="fw-bold text-dark">Maklumat Peribadi</h2>
															<!--end::Title-->
															<!--begin::Notice-->
															<div class="text-muted fw-semibold fs-6">Profil Diri 
															</div>
															<!--end::Notice-->
														</div>
														<!--end::Heading-->
														@foreach ($pelajar as $pelajar)
														<!--begin::Input group-->
														<div class="mb-10 fv-row">
															<!--begin::Label-->
															<label class="form-label mb-3">Nama</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-lg form-control-solid" name="nama_pelajar" placeholder="" value="{{$pelajar->nama_pelajar}}" readonly/>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-10">
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">No. Kad Pengenalan</label>
																<!--end::Label-->
																<!--begin::Row-->
																<div class="row fv-row">
																	<!--begin::Col-->
																	<div class="col-12">
																		<input type="text" class="form-control form-control-lg form-control-solid" minlength="12" name="nokp_pelajar" placeholder="" value="{{$pelajar->nokp_pelajar}}" readonly/>
																	</div>
																	<!--end::Col-->
																</div>
																<!--end::Row-->
															</div>
															<div class="col-md-4 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">Tarikh Lahir</label>
																<!--end::Label-->
																<!--begin::Row-->
																<div class="row fv-row">
																	<!--begin::Col-->
																	<div class="col-12">
																		<!--begin::Input-->
																	<input type="date" data-date-autoclose="true" class="form-control form-control-solid" placeholder="" name="tkh_lahir" value="{{$pelajar->tkh_lahir}}" readonly/>
																	<!--end::Input-->
																	</div>
																</div>	
																</div>
																<div class="col-md-2 fv-row">
																<label class=" fs-6 fw-semibold form-label mb-2">Umur</label>
																<!--end::Label-->
																<div class="row fv-row">
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" name="umur" placeholder="" value="{{$pelajar->umur}}" readonly/>
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
																
																</div>	
																
															<!--end::Col-->
															<!--begin::Col-->
															
															<!--end::Col-->
														</div>
														<div class="row mb-10">
														<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">Jantina</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<select disabled="true" name="jantina" class="form-select form-select-lg form-select-solid">
																		<option value="">{{$pelajar->jantina}}</option>
																	</select>
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
														<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mb-2">Bangsa
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<select name="bangsa" class="form-select form-select-lg form-select-solid" >
																		<option value="">{{$pelajar->bangsa}}</option>
																	</select>
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
</div>
														<!--begin::Input group-->
														<div class="fv-row mb-10">
															<!--end::Label-->
															<label class="form-label">Alamat Tetap</label>
															<!--end::Label-->
															<!--begin::Input-->
															<textarea disabled="true" name="alamat1" class="form-control form-control-lg form-control-solid" rows="2">{{$pelajar->alamat1}}</textarea>
															<!--end::Input-->
														</div>
														<div class="row mb-10">
															<div class="col-md-4 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">Negeri
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" name="alamat_negeri" placeholder="" value="{{$pelajar->alamat_negeri}}" />
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
															
															<div class="col-md-4 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">Bandar
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" name="alamat_bandar" placeholder="" value="{{$pelajar->alamat_bandar}}"/>
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
															
															<div class="col-md-4 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">Poskod
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" name="alamat_poskod" placeholder="" value="{{$pelajar->alamat_poskod}}" />
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Wrapper-->
															<div class="d-flex flex-stack">
																<!--begin::Label-->
																<div class="me-5">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold">Use as a Alamat Surat Menyurat?</label>
																	<!--end::Label-->
																</div>
																<!--end::Label-->
																<!--begin::Switch-->
																<label class="form-check form-switch form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input" id="sama" name="sama" onclick="myFunction()" type="checkbox" value="1" id="kt_modal_update_customer_billing"  @if($pelajar->alamat_surat1)  checked="checked" @else checked=""  @endif/>
																	<!--end::Input-->
																	<!--begin::Label-->
																	<span class="form-check-label fw-semibold text-muted" for="kt_modal_update_customer_billing">Ya</span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
															<!--begin::Wrapper-->
														</div>
														<!--end::Input group-->
														<!--begin::Alamat Surat-->
														<div class="fv-row mb-10">
															<!--end::Label-->
															<label class="form-label">Alamat Surat Menyurat</label>
															<!--end::Label-->
															<!--begin::Input-->
															<textarea id="alamat_surat1" name="alamat_surat1" class="form-control form-control-lg form-control-solid" rows="2">@if($pelajar->alamat_surat1){{$pelajar->alamat_surat1}} @else  @endif </textarea>
															<!--end::Input-->
														</div>
														<div class="row mb-10">
															
															<div class="col-md-4 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">Negeri
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" id="alamat_surat_negeri" name="alamat_surat_negeri" placeholder="" @if($pelajar->alamat_surat_negeri)  value="{{$pelajar->alamat_surat_negeri}}" @else value="" @endif />
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
															<div class="col-md-4 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">Bandar
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" id="alamat_surat_bandar" name="alamat_surat_bandar" placeholder="" @if($pelajar->alamat_surat_bandar)  value="{{$pelajar->alamat_surat_bandar}}" @else value="" @endif />
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
															<div class="col-md-4 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">Poskod
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" id="alamat_surat_poskod" name="alamat_surat_poskod" placeholder="" @if($pelajar->alamat_surat_poskod)  value="{{$pelajar->alamat_surat_poskod}}" @else value="" @endif/>
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
														</div>

													<!--end::Input group-->
														<div class="row mb-10">
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">No. Tel(HP)</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" name="no_tel" placeholder="" value="{{$pelajar->no_tel}}" />
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">No. Tel Rumah
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" name="no_telR" placeholder="" value="{{$pelajar->no_telR}}" />
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
														</div>
														
														<!--end::Input group-->
														<!--end::Input group-->
														<div class="row mb-10">
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">Alamat emel
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" name="emel" placeholder="" value="{{$pelajar->emel}}" readonly/>
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
															
														<div class="separator my-5"></div>
															<div class="pb-10 pb-lg-15">
																<!--begin::Title-->
																<h2 class="fw-bold text-dark">Maklumat Sistem Maklumat Orang Kurang Upaya (SMOKU)</h2>
																<!--end::Title-->
																<!--begin::Notice-->
																<div class="text-muted fw-semibold fs-6">Jabatan Kebajikan Malaysia 
																</div>
																<!--end::Notice-->
															</div>
															<div class="row">
																<div class="col-md-6 fv-row">
																	<!--begin::Label-->
																	<label class=" fs-6 fw-semibold form-label mb-2">No. JKM
																	</label>
																	<!--end::Label-->
																	<!--begin::Input wrapper-->
																	<div class="col-12">
																		<!--begin::Input-->
																		<input type="text" class="form-control form-control-solid" name="noJKM" placeholder="" value="{{$pelajar->noJKM}}"  readonly/>
																		<!--end::Input-->
																	</div>
																	<!--end::Input wrapper-->
																</div>
																<div class="col-md-6 fv-row">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold form-label mb-2">Kecacatan</label>
																	<!--end::Label-->
																	<!--begin::Input wrapper-->
																	<div class="col-12">
																		<!--begin::Input-->
																		<input type="text" class="form-control form-control-solid" placeholder="" value="{{$pelajar->kecacatan}}" readonly/>
																		{{-- <input type="hidden" class="form-control form-control-solid" name="kecacatan" placeholder="" value="{{$pelajar->kodoku}}" readonly/> --}}
																		<!--end::Input-->
																	</div>
																	<!--end::Input wrapper-->
																</div>
															</div>
														
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="separator my-5"></div>
														<div class="pb-10 pb-lg-15">
															<!--begin::Title-->
															<h2 class="fw-bold text-dark">Maklumat Perbankan</h2>
															<!--end::Title-->
															<!--begin::Notice-->
															<div class="text-muted fw-semibold fs-6">Bank Islam 
															</div>
															<!--end::Notice-->
														</div>
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">No. Akaun Bank</label>&nbsp;<a href="#" data-bs-toggle="tooltip" title="CONTOH NYA MACAM NI"><i class="fa-solid fa-circle-info"></i></a>
																
																
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" maxlength="14" name="no_akaunbank" placeholder="" value="{{$pelajar->no_akaunbank}}" readonly/>
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
															
														</div>
														<!--end::Input group-->
													</div>
													@endforeach 
													<!--end::Wrapper-->
												</div>
												<!--end::Step 1-->

												<!--begin::Step 2-->
												<div data-kt-stepper-element="content">
													
													<!--begin::Wrapper-->
													<div class="w-100">
														<!--begin::Heading-->
														<div class="pb-10 pb-lg-15">
															<!--begin::Title-->
															<h2 class="fw-bold text-dark">Maklumat Waris</h2>
															<!--end::Title-->
															<!--begin::Notice-->
															<div class="text-muted fw-semibold fs-6">Profil Waris
															</div>
															<!--end::Notice-->
														</div>
														<!--end::Heading-->
														@foreach ($waris as $waris)
														<!--begin::Input group-->
														<div class="mb-10 fv-row">
															<!--begin::Label-->
															<label class="form-label mb-3">Nama</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-lg form-control-solid" name="nama_waris" placeholder="" value="{{$waris->nama_waris}}" readonly />
															<!--end::Input-->
														</div>
														<div class="row mb-10">
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">No. Kad Pengenalan</label>
																<!--end::Label-->
																<!--begin::Row-->
																<div class="row fv-row">
																	<!--begin::Col-->
																	<div class="col-12">
																		<input type="text" class="form-control form-control-lg form-control-solid" name="nokp_waris" placeholder="" value="{{$waris->nokp_waris}}"  readonly/>
																	</div>
																	<!--end::Col-->
																</div>
																<!--end::Row-->
															</div>
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class=" fs-6 fw-semibold form-label mb-2">No Pasport</label>
																<!--end::Label-->
																<!--begin::Row-->
																<div class="row fv-row">
																	<!--begin::Col-->
																	<div class="col-12">
																		<input type="text" class="form-control form-control-lg form-control-solid" name="noPasport" placeholder="" value="{{$waris->noPasport}}" readonly/>
																	</div>
																	<!--end::Col-->
																</div>
																<!--end::Row-->
															</div>
														</div>
														<div class="row mb-10 hubungan_row">
															<!--begin::Label-->
															<div class="col-md-6 fv-row hubungan_row">
															<label class="form-label mb-6">Hubungan Waris</label>
															<select disabled="true" name="hubungan" class="form-select form-select-lg form-select-solid" data-placeholder="Pilih" data-allow-clear="true" data-hide-search="true" >
																<option value="{{$pelajar->kodhubungan}}">{{$waris->hubungan}}</option>
															</select>
														</div>
															<div class="col-md-6 fv-row lain_hubungan">
															<!--begin::Label-->
															<label class="form-label mb-6">(Jika Lain-lain) Sila Nyatakan:</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-lg form-control-solid lain_hubungan_input" name="lain_hubungan" placeholder="" value="" />
															<!--end::Input-->													
															</div>
														</div>
														
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-10">
															<!--end::Label-->
															<label class="form-label">Alamat Rumah</label>
															<!--end::Label-->
															<!--begin::Input-->
															<textarea disabled="true" name="alamatW1" class="form-control form-control-lg form-control-solid" rows="2">{{$waris->alamat1}}</textarea>
															<!--end::Input-->
														</div>
														<div class="row mb-10">
															
															<div class="col-md-4 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mb-2">Negeri
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<select id="alamatW_negeri" name="alamatW_negeri" class="form-select form-select-lg form-select-solid js-example-basic-single"  data-control="select2" data-hide-search="true">
																		<option value="">{{ $waris->namanegeri}}</option> 
																	</select>
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
															<div class="col-md-4 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mb-2">Bandar
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<select id='alamatW_bandar'  name='alamatW_bandar' class="form-select form-select-lg form-select-solid js-example-basic-single"  data-control="select2" data-hide-search="true">
																		<option value="">{{ $waris->namabandar}}</option>
																	</select>																	
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
															<div class="col-md-4 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mb-2">Poskod
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" name="alamatW_poskod" placeholder="" value="{{$waris->alamat_poskod}}" readonly/>
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
															
														</div>
														<!--end::Input group-->
														<div class="row mb-10">
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mb-2">No. Tel(HP)
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" name="no_telW" placeholder="" value="{{$waris->no_tel}}"  readonly/>
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mb-2">No. Tel Rumah
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" name="no_telRW" placeholder="" value="{{$waris->no_telR}}" readonly/>
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
															</div>
															<div class="row mb-10">

															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mb-2">Pekerjaan
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" name="pendapatan" placeholder="" value="{{$waris->pekerjaan}}"  readonly/>
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mb-2">Pendapatan
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="col-12">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" name="pendapatan" placeholder="" value="{{$waris->pendapatan}}"  readonly/>
																	<!--end::Input-->
																</div>
																<!--end::Input wrapper-->
															</div>
														
															@endforeach
</div>
													<!--end::Input group-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Step 2-->

												<!--begin::Step 3-->
												<div data-kt-stepper-element="content">
													@csrf		
														<!--begin::Wrapper-->
														<div class="w-100">
															<!--begin::Heading-->
															<div class="pb-10 pb-lg-15">
																<!--begin::Title-->
																<h2 class="fw-bold text-dark">Maklumat Akademik</h2>
																<!--end::Title-->
																<!--begin::Notice-->
																<div class="text-muted fw-semibold fs-6">Profil Akademik</div>
																<!--end::Notice-->
															</div>
															<!--end::Heading-->
															@foreach ($akademik as $akademik)
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
																	<span class="">Nama Pusat Pengajian</span>
																	
																</label>
																<!--end::Label-->
																<select id="id_institusi" name="id_institusi" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih">
																	<option value="{{ $akademik->idipt}}">{{ $akademik->namaipt}}</option>
																</select>
															</div>
															<div class="d-flex flex-column mb-7 fv-row">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
																	<span class="">Nama Kursus</span>
																	
																</label>
																<!--end::Label-->
																<select id="nama_kursus" name="nama_kursus" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih">
																	<option value="{{ $akademik->nama_kursus}}">{{ $akademik->nama_kursus}}</option>
																</select>
															</div>
															
															
															
															<!--end::Input group-->
	
															<!--begin::Input group-->
															<div class="row mb-10">
																<!--begin::Col-->
																<div class="col-md-6 fv-row">
																	<!--begin::Label-->
																	<label class=" fs-6 fw-semibold form-label mb-2">Peringkat Pengajian</label>
																	<!--end::Label-->
																	<!--begin::Row-->
																	<div class="row fv-row">
																		<!--begin::Input wrapper-->
																		<select id="peringkat_pengajian" name="peringkat_pengajian" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih">
																			<option value="{{ $akademik->kodperingkat}}">{{ $akademik->peringkat}}</option>
																		</select>
																		<!--end::Input wrapper-->
																	</div>
																	<!--end::Row-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-md-6 fv-row">
																	<!--begin::Label-->
																	<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">Mod Pengajian</label>
																	<!--end::Label-->
																	<!--begin::Input wrapper-->
																			<select name="mod" id="mod"  class="form-select form-select-solid" onchange="select1()" data-control="select2" data-hide-search="true" data-placeholder="Pilih">
																				<option value="{{$akademik->kodmod}}">{{$akademik->mod}}</option>
																			</select>
																		<!--end::Input wrapper-->
																</div>
																
																<!--end::Col-->
																
															</div>
															<!--end::Input group-->
															
															<div class="row mb-10">
																<div class="col-md-6 fv-row">
																	<!--begin::Label-->
																	<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">Tempoh Pengajian</label>
																	<!--end::Label-->
																	<!--begin::Input wrapper-->
																		<input type="text" class="form-control form-control-solid" placeholder="" id="tempoh_pengajian" name="tempoh_pengajian" @if($akademik->tempoh_pengajian)  value="{{$akademik->tempoh_pengajian}}" @else value="" @endif required/>
																		
																		<!--end::Input wrapper-->
																</div>
																<!--end::Col-->
																<div class="col-md-6 fv-row">
																	<!--begin::Label-->
																	<label class=" fs-6 fw-semibold form-label mb-2">Bil Bulan Persemester</label>
																	<!--end::Label-->
																	<!--begin::Row-->
																	<div class="row fv-row">
																		<!--begin::Input wrapper-->
																			<select id="bil_bulanpersem" name="bil_bulanpersem" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih">
																				@if ($akademik->bil_bulanpersem)
																				<option value="{{$akademik->bil_bulanpersem}}">{{$akademik->bil_bulanpersem}}</option>
																				@endif
																				<option value="4">4</option>
																				<option value="6">6</option>
																			</select>
																		<!--end::Input wrapper-->
																	</div>
																	<!--end::Row-->
																</div>
	</DIV>
	
															<!--begin::Input group-->
															<div class="row mb-10">
																<!--begin::Col-->
																<div class="col-md-4 fv-row">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
																	<span class="">No Pendaftaran Pelajar</span>
																	
																</label>
																<!--end::Label-->
																<input type="text" class="form-control form-control-solid" placeholder="" id="no_pendaftaranpelajar" name="no_pendaftaranpelajar" @if($akademik->no_pendaftaranpelajar)  value="{{$akademik->no_pendaftaranpelajar}}" @else value="" @endif />
															</div>
																<div class="col-md-4 fv-row">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold form-label mb-2">Tarikh Mula Pengajian</label>
																	<!--end::Label-->
																		<!--begin::Input wrapper-->
																		<input type="date" class="form-control form-control-solid" placeholder="" id="tkh_mula" name="tkh_mula" @if($akademik->tkh_mula)  value="{{$akademik->tkh_mula}}" @else value="" @endif />
																		<!--end::Input wrapper-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-md-4 fv-row">
																	<!--begin::Label-->
																	<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">Tarikh Tamat Pengajian</label>
																	<!--end::Label-->
																	<!--begin::Input wrapper-->
																		<input type="date" class="form-control form-control-solid" placeholder="" id="tkh_tamat" name="tkh_tamat" @if($akademik->tkh_tamat)  value="{{$akademik->tkh_tamat}}" @else value="" @endif />
																	<!--end::Input wrapper-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Input group-->
	
															<!--begin::Input group-->
															<div class="row mb-10">
																<!--begin::Col-->
																<div class="col-md-4 fv-row">
																	<!--begin::Label-->
																	<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
																	<span class="">Sesi Pengajian</span>&nbsp;<a href="#" data-bs-toggle="tooltip" title="2023/2024"><i class="fa-solid fa-circle-info"></i></a>
																	</label>
																	<!--end::Label-->
																		<!--begin::Input wrapper-->
																		<input type="text" class="form-control form-control-solid" placeholder="" id="sesi" name="sesi" @if($akademik->sesi)  value="{{$akademik->sesi}}" @else value="" @endif />
																		<!--end::Input wrapper-->
																</div>
																<div class="col-md-4 fv-row">
																	<!--begin::Label-->
																	<label class=" fs-6 fw-semibold form-label mb-2">Semester Semasa</label>
																	<!--end::Label-->
																	<!--begin::Row-->
																	<div class="row fv-row">
																		<!--begin::Input wrapper-->
																		
																			<select id="sem_semasa" name="sem_semasa" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih">
																				@if ($akademik->sem_semasa)
																				<option value="{{$akademik->sem_semasa}}">{{$akademik->sem_semasa}}</option>
																				@endif
																				<option value="1">1</option>
																				<option value="2">2</option>
																				<option value="3">3</option>
																				<option value="4">4</option>
																				<option value="5">5</option>
																				<option value="6">6</option>
																				<option value="7">7</option>
																				<option value="8">8</option>
																				<option value="9">9</option>
																				<option value="10">10</option>
																				<option value="11">11</option>
																				<option value="12">12</option>
																				
																			</select>
																		<!--end::Input wrapper-->
																	</div>
																	<!--end::Row-->
																</div>
																<div class="col-md-4 fv-row">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
																	<span class="">CGPA Terkini</span>
																	
																</label>
																<!--end::Label-->
																<input type="text" class="form-control form-control-solid" placeholder="" id="cgpa" name="cgpa" @if($akademik->cgpa)  value="{{$akademik->cgpa}}" @else value="" @endif />
															</div>
																<!--end::Col-->
																<!--begin::Col-->
																
																
															</div>
															<!--end::Input group-->
	
															
	
															
	
															<!--begin::Input group-->
															<div class="row mb-10">
																<!--begin::Col-->
																<div class="col-md-6 fv-row">
																	<!--begin::Label-->
																	<label class=" fs-6 fw-semibold form-label mb-2">Sumber Pembiayaan</label> <a href="#" data-bs-toggle="tooltip" title="CONTOH NYA MACAM NI"><i class="fa-solid fa-circle-info"></i></a>
																	<!--end::Label-->
																	<!--begin::Row-->
																	<div class="row fv-row">
																		<!--begin::Input wrapper-->
																			<select id="sumber_biaya" name="sumber_biaya" class="form-select form-select-solid" onchange="select1()" data-control="select2" data-hide-search="true" data-placeholder="Pilih">
																				<option value="{{$akademik->sumber_biaya}}">{{$akademik->biaya}}</option>
																				
																			</select>
																		<!--end::Input wrapper-->
																	</div>
																	<!--end::Row-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-md-6 fv-row">
																	<!--begin::Label-->
																	<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">Lain-lain</label>
																	<!--end::Label-->
																	<!--begin::Input wrapper-->
																	<input type="text" class="form-control form-control-solid" placeholder="" id="sumber_biayalain" name="sumber_biayalain" value="" />
																	<!--end::Input wrapper-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Input group-->
	
															<div class="d-flex flex-column mb-7 fv-row">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
																	<span class="">Nama Penaja</span>&nbsp;<a href="#" data-bs-toggle="tooltip" title="CONTOH NYA MACAM NI"><i class="fa-solid fa-circle-info"></i></a>
																	
																</label>															
																<!--end::Label-->
																<input type="text" class="form-control form-control-solid" placeholder="JPA" id="nama_penaja" name="nama_penaja" @if($akademik->nama_penaja)  value="{{$akademik->nama_penaja}}" @else value="" @endif />
															</div>
														@endforeach	
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Step 3-->

												<!--begin::Step 4-->
												<div data-kt-stepper-element="content">
												
													<!--begin::Wrapper-->
													<div class="w-100">
														<!--begin::Heading-->
														<div class="pb-10 pb-lg-15">
															<!--begin::Title-->
															<h2 class="fw-bold text-dark">Maklumat Tuntutan</h2>
															<!--end::Title-->
															<!--begin::Notice-->
															<div class="text-muted fw-semibold fs-6">Tuntutan</div>
															<!--end::Notice-->
														</div>
														<!--end::Heading-->
														@foreach ($tuntutanpermohonan as $tuntutanpermohonan)

														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
																<span class="required">Jenis Tuntutan</span>
															</label>
															<!--end::Label-->
															<br>
															<br>
															<div class="row mb-10">
																<br>
																<br>
																<div class="col-6">
																	<input  disabled class="form-check-input" type="checkbox" value="1" id="yuran"  name="yuran"  @if($tuntutanpermohonan->yuran) checked @endif />
																	<label class="fs-6 fw-semibold form-label">
																		Yuran
																	</label>
																</div>
																<div class="col-6" id="divamaun">
																	<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">Amaun Yuran</label>
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" id="amaun" name="amaun" placeholder="" value="{{ $tuntutanpermohonan->amaun}}" readonly/>
																	<!--end::Input-->
																</div>
															
																
															</div>
															<div class="row mb-10">
																<br>
																<br>
																
																<div class="col-6">
																	<input  disabled class="form-check-input" type="checkbox" value="1" id="elaun"  name="elaun" @if($tuntutanpermohonan->elaun) checked @endif/>
																	<label class="fs-6 fw-semibold form-label">
																		Elaun Wang Saku
																	</label>
																</div>
															
																<div class="col-6" id="divamaunelaun">
																	<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">Amaun Wang Saku</label>
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" name="amaunelaun" id="amaunelaun" placeholder="" value="{{ $tuntutanpermohonan->amaunelaun}}" readonly/>
																	<!--end::Input-->
																</div>
															</div>
														</div>
		
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Step 4-->

												<!--begin::Step 5-->
												<div data-kt-stepper-element="content">
												
													<!--begin::Wrapper-->
													<div class="w-100">
														<!--begin::Heading-->
														<div class="pb-10 pb-lg-15">
															<!--begin::Title-->
															<h2 class="fw-bold text-dark">Dokumen</h2>
															<!--end::Title-->
															<!--begin::Notice-->
															<div class="text-muted fw-semibold fs-6">Senarai Dokumen</div>
															<!--end::Notice-->
														</div>
														<!--end::Heading-->
														
														
														<!--begin::Table-->
														<table id="kt_file_manager_list" data-kt-filemanager-table="files" class="table align-middle table-row-dashed fs-6 gy-5">
															<thead>
																<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
																	
																	
																	<th class="w-250px">Nama</th>
																	<th class="w-250px">Catatan</th>
																	<th class="w-125px"></th>
																	<th class="w-125px"></th>
																</tr>
															</thead>
															<tbody class="fw-semibold text-gray-600">
															@foreach($dokumen as $dokumen)
																<tr>
																	<td class="text-gray-800">Salinan Penyata Bank</td>
																	@if($dokumen->akaunBank)
																	<td>{{ $dokumen->nota_akaunBank}}</td>
																	<td><a href="/assets/dokumen/{{$dokumen->akaunBank}}" target="_blank">Papar</a></td>
																	<td><a href="{{url('/download',$dokumen->akaunBank)}}">Muat Turun</a></td>
																	@endif
																</tr>
																<tr>
																	<td class="text-gray-800">Salinan Surat Tawaran Pengajian</td>
																	@if($dokumen->suratTawaran)
																	<td>{{ $dokumen->nota_suratTawaran}}</td>
																	<td><a href="/assets/dokumen/{{$dokumen->suratTawaran}}" target="_blank">Papar</a></td>
																	<td><a href="{{url('/download',$dokumen->suratTawaran)}}">Muat Turun</a></td>
																	@endif
																</tr>
																<tr>
																	<td class="text-gray-800">Salinan Resit/Invois</td>
																	@if($dokumen->invoisResit)
																	<td>{{ $dokumen->nota_invoisResit}}</td>
																	<td><a href="/assets/dokumen/{{$dokumen->invoisResit}}" target="_blank">Papar</a></td>
																	<td><a href="{{url('/download',$dokumen->invoisResit)}}">Muat Turun</a></td>
																	@endif
																</tr>
															@endforeach	
															</tbody>
														</table>
														<!--end::Table-->
		
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Step 5-->

												<!--begin::Step 5-->
												<div data-kt-stepper-element="content">
													
												
													<!--begin::Wrapper-->
													<div class="w-100">
														<!--begin::Heading-->
														<div class="pb-10 pb-lg-15">
															<!--begin::Title-->
															<h2 class="fw-bold text-dark">Perakuan dan Pengesahan</h2>
															<!--end::Title-->
															<!--begin::Notice-->
															<div class="text-muted fw-semibold fs-6">Perakuan</div>
															<!--end::Notice-->
														</div>
														<!--end::Heading-->
														
														<div class="d-flex flex-column mb-7 fv-row">
															<div class="form-check">
																<input  disabled class="form-check-input" type="checkbox" value="1" name="perakuan" @if($tuntutanpermohonan->perakuan) checked @endif/>
																<label class="form-check-label" for="flexCheckDefault">
																Saya mengaku bahawa segala maklumat yang diberikan adalah betul dan benar belaka. Saya juga faham
																sekiranya maklumat yang diberikan didapati palsu atau tidak benar, pihak kementerian berhak menolak
																permohonan saya dan menghentikan bantuan kewangan ini kepada saya.
																</label>
															</div>
															
														</div>

														
														@endforeach	
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Step 5-->

												<!--begin::Step 6-->
												<div data-kt-stepper-element="content">
													<!--begin::Wrapper-->
													<div class="w-100">
														<!--begin::Heading-->
														<div class="pb-8 pb-lg-10">
															<!--begin::Title-->
															<h2 class="fw-bold text-dark">Permohonan Anda Telah Dihantar!</h2>
															<!--end::Title-->
															<!--begin::Notice-->
															<div class="text-muted fw-semibold fs-6">Untuk maklumat lanjut, sila......</div>
															<!--end::Notice-->
														</div>
														<!--end::Heading-->
														<!--begin::Body-->
														<div class="mb-0">
															<!--begin::Text-->
															<div class="fs-6 text-gray-600 mb-5">Writing headlines for blog posts is as much an art as it is a science and probably warrants its own post, but for all advise is with what works for your great & amazing audience.</div>
															<!--end::Text-->
															<!--begin::Alert-->
															<!--begin::Notice-->
															<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
																<!--begin::Icon-->
																<i class="ki-duotone ki-information fs-2tx text-warning me-4">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
																<!--end::Icon-->
																<!--begin::Wrapper-->
																<div class="d-flex flex-stack flex-grow-1">
																	<!--begin::Content-->
																	<div class="fw-semibold">
																		<h4 class="text-gray-900 fw-bold">We need your attention!</h4>
																		<div class="fs-6 text-gray-700">To start using great tools, please,
																		...</div>
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Notice-->
															<!--end::Alert-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Step 6-->
												<!--begin::Actions-->
												<div class="d-flex flex-stack pt-10">
													<!--begin::Wrapper-->
													<div class="mr-2">
														<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
														<i class="ki-duotone ki-arrow-left fs-4 me-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>Kembali</button>
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div>
													@if($tuntutanpermohonan->status =='2')  
														{{--<button type="submit" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
															<span class="indicator-label">Kemaskini</span>
														</button>--}}
														<button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit" onclick="confirmFunction()">Kemaskini</button>
														<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Teruskan
														<i class="ki-duotone ki-arrow-right fs-4 ms-1 me-0">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														</button>
													@else
														{{--<button type="submit" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
															<span class="indicator-label">Kemaskini
															<i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
																<span class="path1"></span>
																<span class="path2"></span>
															</i></span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>--}}
														<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Teruskan
														<i class="ki-duotone ki-arrow-right fs-4 ms-1 me-0">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														</button>	
													@endif	
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Stepper-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>

</div>
</main>

<!--begin::Javascript-->

		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->

		<!--begin::Custom Javascript(used for this page only)-->
		<script src="/assets/js/custom/utilities/modals/view-permohonan.js"></script>

		<!--end::Custom Javascript-->
		<!--end::Javascript-->
		

		<script>
			function select1(){
            var sumber = document.getElementById('sumber_biaya').value;
			var mod = document.getElementById('mod').value;
			var bilbulan = document.getElementById('bil_bulanpersem').value;
			var layak = "300";
			var total = layak * bilbulan;
            if(sumber=="1" && mod=="1"){
                document.getElementById("yuran").disabled = true;
                document.getElementById("divamaun").style.display = "none";
				document.getElementById("elaun").disabled = false;
				document.getElementById("amaunelaun").disabled = true;
				document.getElementById("amaunelaun").value= total;
            }
			else if(sumber!="1" && mod=="2"){
                document.getElementById("yuran").disabled = false;
				document.getElementById("elaun").disabled = true;
				document.getElementById("divamaunelaun").style.display = "none";
            }
			else if(sumber=="1" && mod=="2"){
                document.getElementById("yuran").disabled = true;
				document.getElementById("elaun").disabled = true;
				document.getElementById("divamaun").style.display = "none";
				document.getElementById("divamaunelaun").style.display = "none";
            }
            else{
                document.getElementById("yuran").disabled = false;
				document.getElementById("elaun").disabled = false;
				document.getElementById("amaunelaun").value= total;
				document.getElementById("amaunelaun").disabled = true;
            }
        }

		</script>

		<script>
		function confirmFunction() {
			if (confirm("YEKE NAK KEMASKINI?") == true) {
				window.location.href = "{{ route('kemaskini')}}";
			} 
			/*else {
				document.getElementById("ColorChanger").style.backgroundColor = "#C0C0C0";
			}*/
		}
		</script>


</x-default-layout>