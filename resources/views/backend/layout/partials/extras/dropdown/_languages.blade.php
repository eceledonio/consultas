<ul class="navi navi-hover py-4">
    <li class="navi-item">
        <a href="{{ route('locale.change', $code) }}" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="{{ asset($details['flag']) }}" alt="" />
            </span>

            <span class="navi-text">
                {{ __(getLocaleName($code)) }}
            </span>
        </a>
    </li>
</ul>
