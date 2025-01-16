<div class="row mt-4">
    @foreach ($addOnModules as $addOnModule)
        @if (isModuleInstalled($addOnModule->name))
            <div class="col-md-3 mb-4">
                <div class="card text-center border-primary">
                    <div class="card-body">
                        <h5 class="card-title">{{ $addOnModule->name }}</h5>

                        <button type="button"
                            class="btn {{ $addOnModule->status == 1 ? 'btn-danger' : 'btn-primary' }} btn-sm mt-4 disableModule"
                            data-id="{{ $addOnModule->id }}">
                            {{ $addOnModule->status == 1 ? __('Disable') : __('Enable') }}
                        </button>

                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
