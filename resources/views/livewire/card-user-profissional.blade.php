<div>
    @if($id)
    <div class="row justify-content-center">
        <div class="col-6 col-sm-3 mt-4 card-worker">
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
    @else
    <p class="fs-1">Escolha o profissional</p>
    <div class="row">
        @foreach ($profissionais as $profissional)
        <div class="col-6 col-sm-3 mt-4 card-worker" wire:click="handleClick({{ $profissional->id}})">
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
