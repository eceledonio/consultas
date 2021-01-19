@props(['id' => ''])
<div class="card card-custom" data-card="true">
    @if (isset($header))
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    {{ $header }}
                </h3>
            </div>

            @if (isset($headerActions))
                <div class="card-toolbar" id="{{ $id }}">
                    {{ $headerActions }}

                    <div class="mr-2" id="ExportButtons"></div>

                    <a href="#" class="btn btn-icon btn-light-primary mr-1" data-card-tool="toggle">
                        <i class="ki ki-arrow-down icon-nm"></i>
                    </a>
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
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endif
</div>
