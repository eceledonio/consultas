<div class="card card-custom" data-card="true">
    @if (isset($header))
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    {{ $header }}
                </h3>
            </div>

            @if (isset($headerActions))
                <div class="card-toolbar">
                    {{ $headerActions }}
                </div>
            @endif
        </div>
    @endif

    @if (isset($body))
        <div class="card-body">
            {{ $body }}
        </div>
    @endif

    @if (isset($footer))
        <div class="card-footer d-flex justify-content-between">
            {{ $footer }}
        </div>
    @endif
</div>
