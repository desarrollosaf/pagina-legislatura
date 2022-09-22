@extends("pages.layouts.app")
@section("content")
    <main>
        <div class="container-xl">
            <div class="row gx-24">
                <div class="col-12 col-lg-3 col-xl-2">
                    <nav
                        class="side-navbar nav border-bottom border-lg-0 border-light py-12 py-lg-32 px-24 px-lg-0 mx-n24 mx-lg-0"
                        id="tabDiputado" role="tablist">
                        <a class="nav-link rounded-4 me-12 active" id="perfil-tab" data-bs-toggle="tab"
                           data-bs-target="#perfil" type="button"
                           role="tab" aria-controls="home" aria-selected="true">
                            <i class="icon-perfil d-none d-lg-block"></i>
                            <span>Perfil</span>
                        </a>
                        <a class="nav-link rounded-4 me-12" id="iniciativas-tab" data-bs-toggle="tab"
                           data-bs-target="#iniciativas" type="button" role="tab" aria-controls="profile"
                           aria-selected="false">
                            <i class="icon-bulb d-none d-lg-block"></i>
                            <span>Iniciativas</span>
                        </a>
                        <a class="nav-link rounded-4" id="comunicados-tab" data-bs-toggle="tab"
                           data-bs-target="#comunicados" type="button" role="tab" aria-controls="contact"
                           aria-selected="false">
                            <i class="icon-chat d-none d-lg-block"></i>
                            <span>Comunicados</span>
                        </a>
                    </nav>
                </div>
                <div class="col-12 col-lg-9 col-xl-10">
                    <div class="py-24 py-md-32"><h4 class="fw-light mb-0">Diputado</h4>
                        <h1 class="fw-bold">{{$data->nombres}} {{$data->apaterno}} {{$data->amaterno}}</h1>
                        <div class="tab-content" id="tabDiputadoContent">
                            @include("pages.diputados.ficha._perfil")
                            @include("pages.diputados.ficha._iniciativas")
                            @include("pages.diputados.ficha._comunicados")
                        </div>
                        <div class="px-48"><a id="backToTop"
                                              class="btn btn-light d-flex align-items-center justify-content-center d-md-none rounded-4 py-16"><i
                                    class="bi bi-arrow-up-short fs-24 me-8 lh-1"></i> <span>Regresa a inicio</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
