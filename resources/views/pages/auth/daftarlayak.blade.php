<x-auth-layout>

    <!--begin::Form-->
    <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="{{ route('login') }}" action="{{ route('daftarlayak') }}">
    @csrf
        <!--begin::Heading-->
        <div class="text-center mb-11">
            <!--begin::Title-->
            <!-- <h1 class="text-dark fw-bolder mb-3" > -->
            <img alt="Logo" src="{{ image('logos/1.1.png') }}" class="h-100px h-lg-90px"/>
            <br>
            <br>
            <img alt="Logo" src="{{ image('logos/3.1.svg') }}" class="h-100px h-lg-70px"/>
                
            <!-- </h1> -->
            <!--end::Title-->

            <!--begin::Subtitle-->
            <h2 class="text-dark fw-bolder mb-3">Daftar Akaun</h2>
            <!--end::Subtitle--->
        </div>
        <!--begin::Heading-->
        @foreach ($smoku as $smoku)
        <!--begin::Input group--->
        <div class="fv-row mb-8">
            <!--begin::nokp-->
            <input type="text" value="{{($smoku->nama)}}" placeholder="Nama" name="nama" maxlength="12" autocomplete="off" class="form-control bg-transparent" readonly/>
            <!--end::nokp -->
        </div>

        <div class="fv-row mb-8">
            <!--begin::nokp-->
            <input type="text" value="{{($smoku->no_kp)}}" placeholder="No Kad Pengenalan" name="no_kp" maxlength="12" autocomplete="off" class="form-control bg-transparent" readonly/>
            <!--end::nokp -->
        </div>

        <!--begin::Input group--->
        <div class="fv-row mb-8">
            <!--begin::email-->
            <input type="text" value="{{($smoku->email)}}" placeholder="Alamat email" name="email" autocomplete="off" class="form-control bg-transparent" />
            <!--end::email-->
        </div>
        @endforeach
        <!--begin::Input group-->
        <div class="fv-row mb-8" data-kt-password-meter="true">
            <!--begin::Wrapper-->
            <div class="mb-1">
                <!--begin::Input wrapper-->
                <div class="position-relative mb-3">
                    <input class="form-control bg-transparent" type="password" placeholder="Katalaluan" name="password" autocomplete="off"/>

                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                </div>
                <!--end::Input wrapper-->

                <!--begin::Meter-->
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
                <!--end::Meter-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Hint-->
            <div class="text-muted">
                Gunakan 12 atau lebih aksara dengan gabungan huruf, nombor & simbol.
            </div>
            <!--end::Hint-->
        </div>
        <!--end::Input group--->

        <!--end::Input group--->
        <div class="fv-row mb-8">
            <!--begin::Repeat Password-->
            <input placeholder="Pengesahan Katalaluan" name="password_confirmation" type="password" autocomplete="off" class="form-control bg-transparent"/>
            <!--end::Repeat Password-->
        </div>
        <!--end::Input group--->

        <!--begin::Input group--->
        <div class="fv-row mb-10">
            <div class="form-check form-check-custom form-check-solid form-check-inline">
                <input class="form-check-input" type="checkbox" name="toc" value="1"/>

                <label class="form-check-label fw-semibold text-gray-700 fs-6">
                    Saya Setuju &

                    <a href="#" class="ms-1 link-primary">Terma dan syarat</a>.
                </label>
            </div>
        </div>
        <!--end::Input group--->

        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                @include('partials/general/_button-indicator', ['label' => 'Daftar'])
            </button>
        </div>
        <!--end::Submit button-->

        <!--begin::Sign up-->
        <div class="text-gray-500 text-center fw-semibold fs-6">
            Sudah mempunyai akaun?

            <a href="/login" class="link-primary fw-semibold">
                Log Masuk
            </a>
        </div>
        <!--end::Sign up-->
    </form>
    <!--end::Form-->

</x-auth-layout>
