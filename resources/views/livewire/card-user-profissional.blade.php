<div>
    <div class="topbar-nav ">
        @if (Route::has('login'))
            <div class="navbar navbar-expand fixed-top @if(count($idsClicados) > 0) borda-verde @endif" style="justify-content: space-between;">
                <ul class="navbar-nav align-items-center right-nav-link">
                    @auth
                        <li class="nav-item dropdown-lg">
                            <a href="{{ url('/dashboard') }}" class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item buttom-next-off @if(count($idsClicados) <= 0) buttom-next-on @endif">
                            <a href="{{ route('login') }}" class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect">Log in</a>
                        </li>

                            {{-- @if (Route::has('register'))
                            <li class="nav-item dropdown-lg">
                                <a href="{{ route('register') }}" class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect">Register</a>
                            </li>
                            @endif --}}
                        <li class="nav-item">
                            <div class="buttom-next-off handle-click @if(count($idsClicados) > 0) buttom-next-on @endif" wire:click="RetorneClick">
                                <p><i class="fa-solid fa-arrow-left"></i></p>
                            </div>
                        </li>
                    @endauth
                </ul>

                <div class="buttom-next-off handle-click @if(count($idsClicados) > 0) buttom-next-on @endif"  wire:click="handleClickNext">
                    <p>Next</p>
                </div>
            </div>
        @endif
    </div>
    @if($id)

            <div class="row justify-content-center">
                <div class="col-7 col-sm-4 mt-4 card-worker ">
                    <div class="rounded-4 active card border border-0 mt-4 mt-lg-0">
                        <div class="card-body d-inline justify-content-center">
                            <div style="width:100px;height:100px;margin:auto;">
                                <img src="{{ asset('img/profissional.jpeg') }}" class="rounded-circle" alt="..." style="height:100%;width:100%;object-fit: cover;">
                            </div>
                            <div class="mt-4">
                            <h5 class="card-title text-center">{{  $this->nome }}</h5>
                                <p class="card-text fw-light text-center">{{ $this->categoria }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <p class="fs-1">Escolha a tarefa</p>
            @foreach($category as $cat)
                @php
                    $hasServices = false;
                @endphp
                @foreach($cat->services as $service)
                    @foreach($category_service as $cs)
                        @if ($cs->service_id == $service->id && $cs->profissional_id == $id)
                            @php
                                $hasServices = true;
                            @endphp
                            @break
                        @endif
                    @endforeach
                    @if($hasServices)
                        @break
                    @endif
                @endforeach
                @if($hasServices)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cat->name }}</h5>
                            <div class="row">
                                @foreach($cat->services as $service)
                                    @foreach($category_service as $cs)
                                        @if ($cs->service_id == $service->id && $cs->profissional_id == $id)
                                            <div class="col-12 col-md-6">
                                                <div class="btn btn-light cardTheme {{ in_array($service->id, $idsClicados) ? 'borda-verde' : '' }}" wire:click="handleClickService({{ $service->id }})">{{ $service->name }} <br> €{{ $service->price }}   {{ $service->minutes }} min</div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

    @else
    <p class="fs-1">Escolha o profissional</p>
    <div class="row">
        @foreach ($profissionais as $profissional)
        <div class="col-6 col-sm-4 mt-4 card-worker" wire:click="handleClick({{ $profissional->id }})">
            <div class="rounded-4 card border border-0 mt-4 mt-lg-0">
                <div class="card-body d-inline justify-content-center">
                    <div style="width:100px;height:100px;margin:auto;">
                        <img src="{{ asset('img/profissional.jpeg') }}" class="rounded-circle" alt="..." style="height:100%;width:100%;object-fit: cover;">
                    </div>
                    <div class="mt-4">
                    <h5 class="card-title text-center">{{ $profissional->nome }}</h5>
                        <p class="card-text fw-light text-center">{{ $profissional->categoria }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
