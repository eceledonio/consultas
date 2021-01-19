<x-utils.link
    :href="route('frontend.auth.social.login', 'bitbucket')"
    class="btn btn-light-primary font-weight-bolder px-4 py-4 my-3 font-size-lg"
    icon="fab fa-bitbucket"
    :text="__('Iniciar Sesión con Bitbucket')"
    :hide="!config('services.bitbucket.active')" />

<x-utils.link
    :href="route('frontend.auth.social.login', 'facebook')"
    class="btn btn-light-primary font-weight-bolder px-4 py-4 my-3 font-size-lg"
    icon="fab fa-facebook"
    :text="__('Iniciar Sesión con Facebook')"
    :hide="!config('services.facebook.active')" />

<x-utils.link
    :href="route('frontend.auth.social.login', 'google')"
    class="btn btn-light-primary font-weight-bolder px-4 py-4 my-3 font-size-lg"
    icon="fab fa-google"
    :text="__('Iniciar Sesión con Google')"
    :hide="!config('services.google.active')" />

<x-utils.link
    :href="route('frontend.auth.social.login', 'github')"
    class="btn btn-light-primary font-weight-bolder px-4 py-4 my-3 font-size-lg"
    icon="fab fa-github"
    :text="__('Iniciar Sesión con Github')"
    :hide="!config('services.github.active')" />

<x-utils.link
    :href="route('frontend.auth.social.login', 'linkedin')"
    class="btn btn-light-primary font-weight-bolder px-4 py-4 my-3 font-size-lg"
    icon="fab fa-linkedin"
    :text="__('Iniciar Sesión con Linkedin')"
    :hide="!config('services.linkedin.active')" />

<x-utils.link
    :href="route('frontend.auth.social.login', 'twitter')"
    class="btn btn-light-primary font-weight-bolder px-4 py-4 my-3 font-size-lg"
    icon="fab fa-twitter"
    :text="__('Iniciar Sesión con Twitter')"
    :hide="!config('services.twitter.active')" />
