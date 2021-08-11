@extends('panel.layouts.master-without-nav')

@section('title')
    Registrar
@endsection

@section('css')
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('/panel_assets/libs/owl.carousel/owl.carousel.min.css') }}">
@endsection

@section('body')

    <body class="auth-body-bg">
    @endsection

    @section('content')

        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">

                    <div class="col-xl-9">
                        <div class="auth-full-bg pt-lg-5 p-4">
                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">

                                    <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">

                                            <!--<div class="col-lg-7">
                                                 <div class="text-center">
                                                     <h4 class="mb-3"><i
                                                             class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span
                                                             class="text-primary">5k</span>+ Satisfied clients</h4>

                                                     <div dir="ltr">
                                                         <div class="owl-carousel owl-theme auth-review-carousel"
                                                              id="auth-review-carousel">
                                                             <div class="item">
                                                                 <div class="py-3">
                                                                     <p class="font-size-16 mb-4">" Fantastic theme with a
                                                                         ton of options. If you just want the HTML to
                                                                         integrate with your project, then this is the
                                                                         package. You can find the files in the 'dist'
                                                                         folder...no need to install git and all the other
                                                                         stuff the documentation talks about. "</p>

                                                                     <div>
                                                                         <h4 class="font-size-16 text-primary">Abs1981</h4>
                                                                         <p class="font-size-14 mb-0">- Skote User</p>
                                                                     </div>
                                                                 </div>

                                                             </div>

                                                             <div class="item">
                                                                 <div class="py-3">
                                                                     <p class="font-size-16 mb-4">" If Every Vendor on Envato
                                                                         are as supportive as Themesbrand, Development with
                                                                         be a nice experience. You guys are Wonderful. Keep
                                                                         us the good work. "</p>

                                                                     <div>
                                                                         <h4 class="font-size-16 text-primary">nezerious</h4>
                                                                         <p class="font-size-14 mb-0">- Skote User</p>
                                                                     </div>
                                                                 </div>

                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>-->


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5">
                                        <a href="index" class="d-block auth-logo">
                                            <img src="{{ asset('/panel_assets/images/logo-dark.svg') }}" alt=""
                                                 height="18"
                                                 class="auth-logo-dark">
                                            <img src="{{ asset('/panel_assets/images/logo-light.svg') }}" alt=""
                                                 height="70"
                                                 class="auth-logo-light">
                                        </a>
                                    </div>
                                    <div class="my-auto">
                                        <div>
                                            <h5 class="text-primary">Registrar uma conta</h5>
                                            <p class="text-muted">Registre-se agora e comece a participar dos
                                                campeonatos!</p>
                                        </div>

                                        <div class="mt-4">
                                            <form class="needs-validation" method="POST"
                                                  action="{{ route('register') }}">
                                                @csrf

                                                <div class="mb-3">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nome
                                                        completo</label>
                                                    <input id="name" type="text"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           name="name"
                                                           value="{{ old('name') }}" required autocomplete="name"
                                                           autofocus>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="name_perfil_lichess">Nome do perfil do Lichess</label>
                                                    <input id="name" type="text"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           name="name_perfil_lichess"
                                                           placeholder="Exemplo: campchess"
                                                           value="{{ old('name_perfil_lichess') }}"
                                                           required autocomplete="name_perfil_lichess"
                                                           autofocus>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="email"
                                                           class="col-md-4 col-form-label text-md-right">E-mail</label>
                                                    <input id="email" type="email"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           name="email"
                                                           value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="password"
                                                           class="col-md-4 col-form-label text-md-right">Senha</label>
                                                    <input id="password" type="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           name="password"
                                                           required autocomplete="new-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror

                                                </div>

                                                <div class="mb-3">
                                                    <label for="password-confirm"
                                                           class="col-md-4 col-form-label text-md-right">Confirme a
                                                        senha</label>
                                                    <input id="password-confirm" type="password"
                                                           class="form-control"
                                                           name="password_confirmation" required
                                                           autocomplete="new-password">
                                                </div>


                                                    <div class="mt-4 d-grid">
                                                        <button type="submit" class="btn btn-primary">
                                                            Registrar
                                                        </button>
                                                    </div>

                                            </form>

                                            <div class="mt-5 text-center">
                                                <p>Ja tem uma conta? <a href="auth-login-2"
                                                                        class="fw-medium text-primary"> Login</a></p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">©
                                            <script>
                                                document.write(new Date().getFullYear())

                                            </script>
                                            Camp.Chess
                                        </p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>

    @endsection
    @section('script')
        <!-- owl.carousel js -->
        <script src="{{ asset('/panel_assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
        <!-- auth-2-carousel init -->
        <script src="{{ asset('/panel_assets/js/pages/auth-2-carousel.init.js') }}"></script>
@endsection

