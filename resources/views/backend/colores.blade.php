@extends('backend.layout.default')

@section('title', __('Utilidades de Colores'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            {{ __('Utilidades de Colores') }}
        </x-slot>

        <x-slot name="headerActions">
        </x-slot>

        <x-slot name="body">
            <!--begin::Notice-->
            <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
                <div class="alert-icon">
                    <span class="svg-icon svg-icon-primary svg-icon-xl">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                                <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </div>

                <div class="alert-text">
                    {{ __('Custom Bootstrap Color Utility Classes.') }}
                </div>
            </div>
            <!--end::Notice-->

            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    {{ __('Background Colors') }}
                                </h3>
                            </div>
                        </div>

                        <div class="card-body">
                            <!--begin::Example-->
                            <div class="example">
                                <p>
                                    {{ __('Standard and custom Bootstrap background color utilities:') }}
                                </p>

                                <div class="example-preview">
                                    <p class="bg-primary text-white py-2 px-4">.bg-primary</p>
                                    <p class="bg-secondary py-2 px-4">.bg-secondary</p>
                                    <p class="bg-success text-white py-2 px-4">.bg-success</p>
                                    <p class="bg-danger text-white py-2 px-4">.bg-danger</p>
                                    <p class="bg-warning text-white py-2 px-4">.bg-warning</p>
                                    <p class="bg-info text-white py-2 px-4">.bg-info</p>
                                    <p class="bg-light text-dark py-2 px-4">.bg-light</p>
                                    <p class="bg-dark text-white py-2 px-4">.bg-dark</p>
                                    <p class="bg-gray-100 text-dark-50 py-2 px-4">.bg-gray-100</p>
                                    <p class="bg-gray-200 text-dark-50 py-2 px-4">.bg-gray-200</p>
                                    <p class="bg-gray-300 text-dark-50 py-2 px-4">.bg-gray-300</p>
                                    <p class="bg-gray-400 text-dark-50 py-2 px-4">.bg-gray-400</p>
                                    <p class="bg-gray-500 text-dark-50 py-2 px-4">.bg-gray-500</p>
                                    <p class="bg-gray-600 text-white py-2 px-4">.bg-gray-600</p>
                                    <p class="bg-gray-700 text-white py-2 px-4">.bg-gray-700</p>
                                    <p class="bg-gray-800 text-white py-2 px-4">.bg-gray-800</p>
                                    <p class="bg-gray-900 text-white py-2 px-4">.bg-gray-900</p>
                                    <p class="bg-white text-dark py-2 px-4">.bg-white</p>
                                    <p class="bg-transparent text-dark py-2 px-4">.bg-transparent</p>
                                </div>

                                <div class="example-code">
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="example-highlight">
									    <pre>
                                            <code class="language-html">
                                                &lt;p class="bg-primary text-white py-2 px-4"&gt;.bg-primary&lt;/p&gt;
                                                &lt;p class="bg-secondary py-2 px-4"&gt;.bg-secondary&lt;/p&gt;
                                                &lt;p class="bg-success text-white py-2 px-4"&gt;.bg-success&lt;/p&gt;
                                                &lt;p class="bg-danger text-white py-2 px-4"&gt;.bg-danger&lt;/p&gt;
                                                &lt;p class="bg-warning text-white py-2 px-4"&gt;.bg-warning&lt;/p&gt;
                                                &lt;p class="bg-info text-white py-2 px-4"&gt;.bg-info&lt;/p&gt;
                                                &lt;p class="bg-light text-dark py-2 px-4"&gt;.bg-light&lt;/p&gt;
                                                &lt;p class="bg-dark text-white py-2 px-4"&gt;.bg-dark&lt;/p&gt;
                                                &lt;p class="bg-gray-100 text-dark-50 py-2 px-4"&gt;.bg-gray-100&lt;/p&gt;
                                                &lt;p class="bg-gray-200 text-dark-50 py-2 px-4"&gt;.bg-gray-200&lt;/p&gt;
                                                &lt;p class="bg-gray-300 text-dark-50 py-2 px-4"&gt;.bg-gray-300&lt;/p&gt;
                                                &lt;p class="bg-gray-400 text-dark-50 py-2 px-4"&gt;.bg-gray-400&lt;/p&gt;
                                                &lt;p class="bg-gray-500 text-dark-50 py-2 px-4"&gt;.bg-gray-500&lt;/p&gt;
                                                &lt;p class="bg-gray-600 text-white py-2 px-4"&gt;.bg-gray-600&lt;/p&gt;
                                                &lt;p class="bg-gray-700 text-white py-2 px-4"&gt;.bg-gray-700&lt;/p&gt;
                                                &lt;p class="bg-gray-800 text-white py-2 px-4"&gt;.bg-gray-800&lt;/p&gt;
                                                &lt;p class="bg-gray-900 text-white py-2 px-4"&gt;.bg-gray-900&lt;/p&gt;
                                                &lt;p class="bg-white text-dark py-2 px-4"&gt;.bg-white&lt;/p&gt;
                                                &lt;p class="bg-transparent text-dark py-2 px-4"&gt;.bg-transparent&lt;/p&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Example-->
                        </div>
                    </div>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    {{ __('Hover Background Colors') }}
                                </h3>
                            </div>
                        </div>

                        <div class="card-body">
                            <!--begin::Example-->
                            <div class="example mb-15">
                                <p>Use custom
                                    <code>.bg-hover-{color}</code>class to set a hover background color:
                                </p>

                                <div class="example-preview">
                                    <div class="d-flex">
                                        <div class="bg-gray-200 bg-hover-primary d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-gray-200 bg-hover-success d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-gray-200 bg-hover-danger d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-gray-200 bg-hover-warning d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-gray-200 bg-hover-dark d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-gray-200 bg-hover-info d-flex flex-center w-100px h-100px"></div>
                                    </div>
                                </div>

                                <div class="example-code">
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="example-highlight">
                                        <pre>
                                            <code class="language-html">
                                                &lt;div class="bg-gray-200 bg-hover-primary"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 bg-hover-success"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 bg-hover-danger"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 bg-hover-warning"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 bg-hover-dark"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 bg-hover-info"&gt;&lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Example-->

                            <!--begin::Example-->
                            <div class="example">
                                <p>Use custom
                                    <code>.bg-hover-state-{color}</code>class to set a darken hover background color:
                                </p>

                                <div class="example-preview">
                                    <div class="d-flex">
                                        <div class="bg-gray-200 bg-hover-state-primary d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-gray-200 bg-hover-state-success d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-gray-200 bg-hover-state-danger d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-gray-200 bg-hover-state-warning d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-gray-200 bg-hover-state-dark d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-gray-200 bg-hover-state-info d-flex flex-center w-75px h-75px"></div>
                                    </div>
                                </div>

                                <div class="example-code">
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="example-highlight">
                                        <pre>
                                            <code class="language-html">
                                                &lt;div class="bg-gray-200 bg-hover-state-primary"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 bg-hover-state-success"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 bg-hover-state-danger"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 bg-hover-state-warning"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 bg-hover-state-dark"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 bg-hover-state-info"&gt;&lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Example-->
                        </div>
                    </div>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Custom Border Radius Utilities
                                </h3>
                            </div>
                        </div>

                        <div class="card-body">
                            <!--begin::Example-->
                            <div class="example mb-15">
                                <p>Metronic adds 2 new
                                    <code>rounded-sm</code>and
                                    <code>rounded-lg</code>border radius classes to enable more sizing options for border radius:
                                </p>

                                <div class="example-preview">
                                    <div class="d-flex">
                                        <div class="bg-gray-200 d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0 rounded-sm"></div>
                                        <div class="bg-gray-200 d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0 rounded"></div>
                                        <div class="bg-gray-200 d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0 rounded-lg"></div>
                                    </div>
                                </div>

                                <div class="example-code">
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="example-highlight">
                                        <pre>
                                            <code class="language-html">
                                                &lt;div class="bg-gray-200 rounded-sm"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 rounded"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 rounded-lg"&gt;&lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Example-->

                            <!--begin::Example-->
                            <div class="example">
                                <p>Subtractive border radius classes:</p>

                                <div class="example-preview">
                                    <div class="d-flex">
                                        <div class="bg-gray-200 d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0 rounded-lg rounded-top-0"></div>
                                        <div class="bg-gray-200 d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0 rounded-lg rounded-bottom-0"></div>
                                        <div class="bg-gray-200 d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0 rounded-lg rounded-left-0"></div>
                                        <div class="bg-gray-200 d-flex flex-center w-100px h-100px mr-5 mb-1 mb-md-0 rounded-lg rounded-right-0"></div>
                                    </div>
                                </div>

                                <div class="example-code">
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="example-highlight">
                                        <pre>
                                            <code class="language-html">
                                                &lt;div class="bg-gray-200 rounded-lg rounded-top-0"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 rounded-lg rounded-bottom-0"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 rounded-lg rounded-left-0"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-200 rounded-lg rounded-right-0"&gt;&lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Example-->
                        </div>
                    </div>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Background Radial Gradient Color
                                </h3>
                            </div>
                        </div>

                        <div class="card-body">
                            <!--begin::Example-->
                            <div class="example">
                                <p>Use
                                    <code>bg-radial-gradient-{color}</code>class format to set a background radial gradient color.
                                </p>

                                <div class="example-preview">
                                    <div class="d-flex mb-5">
                                        <div class="bg-radial-gradient-primary d-flex flex-center w-150px h-150px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-radial-gradient-success d-flex flex-center w-150px h-150px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-radial-gradient-info d-flex flex-center w-150px h-150px mr-5 mb-1 mb-md-0"></div>
                                    </div>

                                    <div class="d-flex mb-5">
                                        <div class="bg-radial-gradient-danger d-flex flex-center w-150px h-150px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-radial-gradient-warning d-flex flex-center w-150px h-150px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-radial-gradient-dark d-flex flex-center w-150px h-150px mr-5"></div>
                                    </div>
                                </div>

                                <div class="example-code">
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="example-highlight">
                                        <pre>
                                            <code class="language-html">
                                                &lt;div class="bg-radial-gradient-primary"&gt;&lt;/div&gt;
                                                &lt;div class="bg-radial-gradient-success"&gt;&lt;/div&gt;
                                                &lt;div class="bg-radial-gradient-info"&gt;&lt;/div&gt;
                                                &lt;div class="bg-radial-gradient-danger"&gt;&lt;/div&gt;
                                                &lt;div class="bg-radial-gradient-warning"&gt;&lt;/div&gt;
                                                &lt;div class="bg-radial-gradient-dark"&gt;&lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Example-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>

                <div class="col-xl-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Background Color With Opacity
                                </h3>
                            </div>
                        </div>

                        <div class="card-body">
                            <!--begin::Example-->
                            <div class="example">
                                <p>Use
                                    <code>bg-{color}-o-{opacity}</code>class format to set a background color with opacity level in range
                                    <code>1 to 20(0.5 - 1)</code>. For example,
                                    <code>bg-primary-o-10</code>sets primary background color with
                                    <code>opacity: 0.1</code>.
                                </p>

                                <div class="example-preview">
                                    <div class="d-flex mb-5">
                                        <div class="bg-primary-o-10 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-primary-o-20 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-primary-o-30 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-primary-o-40 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-primary-o-50 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-primary d-flex flex-center w-75px h-75px mr-5"></div>
                                    </div>

                                    <div class="d-flex mb-5">
                                        <div class="bg-success-o-10 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-success-o-20 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-success-o-30 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-success-o-40 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-success-o-50 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-success d-flex flex-center w-75px h-75px mr-5"></div>
                                    </div>

                                    <div class="d-flex mb-5">
                                        <div class="bg-warning-o-10 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-warning-o-20 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-warning-o-30 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-warning-o-40 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-warning-o-50 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-warning d-flex flex-center w-75px h-75px mr-5"></div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="bg-danger-o-10 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-danger-o-20 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-danger-o-30 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-danger-o-40 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-danger-o-50 d-flex flex-center w-75px h-75px mr-5 mb-1 mb-md-0"></div>
                                        <div class="bg-danger d-flex flex-center w-75px h-75px mr-5"></div>
                                    </div>
                                </div>

                                <div class="example-code">
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="example-highlight">
                                        <pre>
                                            <code class="language-html">
                                                &lt;div class="bg-primary-o-10"&gt;&lt;/div&gt;
                                                &lt;div class="bg-primary-o-20"&gt;&lt;/div&gt;
                                                &lt;div class="bg-primary-o-30"&gt;&lt;/div&gt;
                                                &lt;div class="bg-primary-o-40"&gt;&lt;/div&gt;
                                                &lt;div class="bg-primary-o-50"&gt;&lt;/div&gt;
                                                &lt;div class="bg-primary"&gt;&lt;/div&gt;

                                                &lt;div class="bg-success-o-10"&gt;&lt;/div&gt;
                                                &lt;div class="bg-success-o-20"&gt;&lt;/div&gt;
                                                &lt;div class="bg-success-o-30"&gt;&lt;/div&gt;
                                                &lt;div class="bg-success-o-40"&gt;&lt;/div&gt;
                                                &lt;div class="bg-success-o-50"&gt;&lt;/div&gt;
                                                &lt;div class="bg-success"&gt;

                                                &lt;div class="bg-warning-o-10"&gt;&lt;/div&gt;
                                                &lt;div class="bg-warning-o-20"&gt;&lt;/div&gt;
                                                &lt;div class="bg-warning-o-30"&gt;&lt;/div&gt;
                                                &lt;div class="bg-warning-o-40"&gt;&lt;/div&gt;
                                                &lt;div class="bg-warning-o-50"&gt;&lt;/div&gt;
                                                &lt;div class="bg-warning"&gt;

                                                &lt;div class="bg-danger-o-10"&gt;&lt;/div&gt;
                                                &lt;div class="bg-danger-o-20"&gt;&lt;/div&gt;
                                                &lt;div class="bg-danger-o-30"&gt;&lt;/div&gt;
                                                &lt;div class="bg-danger-o-40"&gt;&lt;/div&gt;
                                                &lt;div class="bg-danger-o-50"&gt;&lt;/div&gt;
                                                &lt;div class="bg-danger"&gt;&lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Example-->
                        </div>
                    </div>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Diagonal Background Colors
                                </h3>
                            </div>
                        </div>

                        <div class="card-body">
                            <!--begin::Example-->
                            <div class="example">
                                <p>Use
                                    <code>.bg-diagonal</code>,
                                    <code>.bg-diagonal-{color}</code>and
                                    <code>.bg-diagonal-r-{color}</code>class format to set diagonal background colors.
                                </p>

                                <div class="example-preview">
                                    <div class="bg-diagonal bg-diagonal-primary bg-diagonal-r-light rounded h-150px mb-5"></div>
                                    <div class="bg-diagonal bg-diagonal-success bg-diagonal-r-danger rounded h-150px mb-5"></div>
                                    <div class="bg-diagonal bg-diagonal-info bg-diagonal-r-warning rounded h-150px"></div>
                                </div>

                                <div class="example-code">
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="example-highlight">
                                        <pre>
                                            <code class="language-html">
                                                &lt;div class="bg-diagonal bg-diagonal-primary bg-diagonal-r-light rounded h-150px"&gt;&lt;/div&gt;
                                                &lt;div class="bg-diagonal bg-diagonal-success bg-diagonal-r-danger rounded h-150px"&gt;&lt;/div&gt;
                                                &lt;div class="bg-diagonal bg-diagonal-info bg-diagonal-r-warning rounded h-150px"&gt;&lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Example-->
                        </div>
                    </div>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Predefined Height &amp; Width Responsive Classes
                                </h3>
                            </div>
                        </div>

                        <div class="card-body">
                            <!--begin::Example-->
                            <div class="example mb-15">
                                <ul class="px-5">
                                    <li class="py-2">Use
                                        <code>.h-{size}px</code>and
                                        <code>.w-{size}px</code>class format to set fixed height and width in pixels to any element.
                                    </li>

                                    <li class="py-2">Use
                                        <code>.min-h-{size}px</code>and
                                        <code>.min-w-{size}px</code>class format to set minimum height and width in pixels to any element.
                                    </li>

                                    <li class="py-2">Use
                                        <code>.max-w-{size}px</code>and
                                        <code>.max-w-{size}px</code>class format to set maximum height and width in pixels to any element.
                                    </li>

                                    <li class="py-2">Size
                                        <code>{size}</code>accepts values in range
                                        <code>1,2,3,4,5,10,15,20,25,30 ... 95,100,125,150,175,200,225 ... 500,550,600,650 ...1000</code>.
                                    </li>
                                </ul>

                                <div class="example-preview">
                                    <div class="d-flex">
                                        <div class="bg-gray-100 w-75px h-75px mr-2"></div>
                                        <div class="bg-gray-100 min-w-100px min-h-100px mr-2"></div>
                                        <div class="bg-gray-100 max-w-125px max-h-125px">
                                            Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply Lorem Ipsum is simply m Ipsum is simply
                                        </div>
                                    </div>
                                </div>

                                <div class="example-code">
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="example-highlight">
										<pre>
                                            <code class="language-html">
                                                &lt;div class="bg-gray-100 w-75px h-75px mr-2"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-100 min-w-100px min-h-100px mr-2"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-100 max-w-125px max-h-125px"&gt;
                                                Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply  Lorem Ipsum is simply m Ipsum is simply
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Example-->

                            <!--begin::Example-->
                            <div class="example">
                                For responsive variations for each breakpoint
                                <code>sm,md,lg,xl,xxl</code>

                                <ul class="px-5">
                                    <li class="py-2">Use
                                        <code>.h-{breakpoint}-{size}px</code>and
                                        <code>.w-{breakpoint}-{size}px</code>class format to set fixed height and width in pixels to any element.
                                    </li>

                                    <li class="py-2">Use
                                        <code>.min-h-{breakpoint}-{size}px</code>and
                                        <code>.min-w-{breakpoint}-{size}px</code>class format to set minimum height and width in pixels to any element.
                                    </li>

                                    <li class="py-2">Use
                                        <code>.max-w-{breakpoint}-{size}px</code>and
                                        <code>.max-w-{breakpoint}-{size}px</code>class format to set maximum height and width in pixels to any element.
                                    </li>
                                </ul>

                                <div class="example-preview">
                                    <div class="d-flex">
                                        <div class="bg-gray-100 w-50px h-50px w-lg-75px h-lg-75px mr-2"></div>
                                        <div class="bg-gray-100 min-w-50px min-h-50px min-w-lg-100px min-h-lg-100px mr-2"></div>
                                        <div class="bg-gray-100 max-w-75px max-h-75px max-w-125px max-h-125px">
                                            Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply Lorem Ipsum is simply m Ipsum is simply
                                        </div>
                                    </div>
                                </div>

                                <div class="example-code">
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="example-highlight">
                                        <pre>
                                            <code class="language-html">
                                                &lt;div class="bg-gray-100 w-50px h-50px w-lg-75px h-lg-75px mr-2"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-100 min-w-50px min-h-50px min-w-lg-100px min-h-lg-100px mr-2"&gt;&lt;/div&gt;
                                                &lt;div class="bg-gray-100 max-w-75px max-h-75px max-w-125px max-h-125px"&gt;
                                                Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply  Lorem Ipsum is simply m Ipsum is simply
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Example-->
                        </div>
                    </div>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Extended Bootstrap Spacing Classes
                                </h3>
                            </div>
                        </div>

                        <div class="card-body">
                            <p>
                                Metronic extends
                                <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.5/utilities/spacing/" target="_blank">
                                    Bootstrap Spacing Classes
                                </a>
                                to support spacing classes from
                                <code>1</code>
                                to
                                <code>40</code>
                                to provide requied spacing option according to the Metronic design principles.
                            </p>

                            <!--begin::Example-->
                            <div class="example mb-15">
                                <div class="example-preview">
                                    <div class="d-flex align-items-center">
                                        <span class="p-5 bg-light mr-2">.p-5</span>
                                        <span class="p-10 bg-light mr-2">.p-10</span>
                                        <span class="p-15 bg-light mr-2">.p-15</span>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <span class="m-5 p-5 bg-light">.m-5</span>
                                        <span class="m-10 p-5 bg-light">.m-10</span>
                                        <span class="m-15 p-5 bg-light">.m-15</span>
                                    </div>
                                </div>

                                <div class="example-code">
                                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    <div class="example-highlight">
                                        <pre>
                                            <code class="language-html">
                                                &lt;div class="d-flex align-items-center"&gt;
                                                &lt;span class="p-5 bg-light mr-2"&gt;
                                                .p-5
                                                &lt;/span&gt;
                                                &lt;span class="p-10 bg-light mr-2"&gt;
                                                .p-10
                                                &lt;/span&gt;
                                                &lt;span class="p-15 bg-light mr-2"&gt;
                                                .p-15
                                                &lt;/span&gt;
                                                &lt;/div&gt;

                                                &lt;div class="d-flex align-items-center"&gt;
                                                &lt;span class="m-5 p-5 bg-light"&gt;
                                                .m-5
                                                &lt;/span&gt;
                                                &lt;span class="m-10 p-5 bg-light"&gt;
                                                .m-10
                                                &lt;/span&gt;
                                                &lt;span class="m-15 p-5 bg-light"&gt;
                                                .m-15
                                                &lt;/span&gt;
                                                &lt;/div&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                            <!--end::Example-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->

            <div class="row">
                <div class="col">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    {{ __('Color Palette') }}
                                </h3>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="kt-section">
                                <div class="kt-section__info">
                                    <p class="text-justify">This color palette comprises primary and accent colors that can be
                                        used for illustration or to develop your brand colors.
                                        They've been designed to work harmoniously with each other.
                                    </p>

                                    <p class="text-justify">The color palette starts with primary colors and fills in the spectrum
                                        to create a complete and usable palette for web
                                        project. We suggests using the 500 colors as the primary colors
                                        in your project and the other colors as accents colors.
                                    </p>
                                </div>

                                <div class="kt-section__content">
                                    <div class="row row-lg color-palette">
                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">red</h5>
                                            <ul class="list-group">
                                                <li class="bg-red-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#d50000</span>
                                                </li>

                                                <li class="bg-red-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#ff1744</span>
                                                </li>

                                                <li class="bg-red-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#ff5252</span>
                                                </li>

                                                <li class="bg-red-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#ff8a80</span>
                                                </li>

                                                <li class="bg-red-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#b71c1c</span>
                                                </li>

                                                <li class="bg-red-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#c62828</span>
                                                </li>

                                                <li class="bg-red-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#d32f2f</span>
                                                </li>

                                                <li class="bg-red-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#e53935</span>
                                                </li>

                                                <li class="bg-red-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#f44336</span>
                                                </li>

                                                <li class="bg-red-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#ef5350</span>
                                                </li>

                                                <li class="bg-red-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#e57373</span>
                                                </li>

                                                <li class="bg-red-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#ef9a9a</span>
                                                </li>

                                                <li class="bg-red-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#ffcdd2</span>
                                                </li>

                                                <li class="bg-red-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#ffebee</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">pink</h5>
                                            <ul class="list-group">
                                                <li class="bg-pink-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#c51162</span>
                                                </li>

                                                <li class="bg-pink-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#f50057</span>
                                                </li>

                                                <li class="bg-pink-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#ff4081</span>
                                                </li>

                                                <li class="bg-pink-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#ff80ab</span>
                                                </li>

                                                <li class="bg-pink-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#880e4f</span>
                                                </li>

                                                <li class="bg-pink-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#ad1457</span>
                                                </li>

                                                <li class="bg-pink-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#c2185b</span>
                                                </li>

                                                <li class="bg-pink-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#d81b60</span>
                                                </li>

                                                <li class="bg-pink-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#e91e63</span>
                                                </li>

                                                <li class="bg-pink-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#ec407a</span>
                                                </li>

                                                <li class="bg-pink-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#f06292</span>
                                                </li>

                                                <li class="bg-pink-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#f48fb1</span>
                                                </li>

                                                <li class="bg-pink-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#f8bbd0</span>
                                                </li>

                                                <li class="bg-pink-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#fce4ec</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">purple</h5>
                                            <ul class="list-group">
                                                <li class="bg-purple-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#aa00ff</span>
                                                </li>

                                                <li class="bg-purple-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#d500f9</span>
                                                </li>

                                                <li class="bg-purple-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#e040fb</span>
                                                </li>

                                                <li class="bg-purple-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#ea80fc</span>
                                                </li>

                                                <li class="bg-purple-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#4a148c</span>
                                                </li>

                                                <li class="bg-purple-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#6a1b9a</span>
                                                </li>

                                                <li class="bg-purple-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#7b1fa2</span>
                                                </li>

                                                <li class="bg-purple-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#8e24aa</span>
                                                </li>

                                                <li class="bg-purple-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#9c27b0</span>
                                                </li>

                                                <li class="bg-purple-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#ab47bc</span>
                                                </li>

                                                <li class="bg-purple-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#ba68c8</span>
                                                </li>

                                                <li class="bg-purple-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#ce93d8</span>
                                                </li>

                                                <li class="bg-purple-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#e1bee7</span>
                                                </li>

                                                <li class="bg-purple-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#f3e5f5</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">deep-purple</h5>
                                            <ul class="list-group">
                                                <li class="bg-deep-purple-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#6200ea</span>
                                                </li>

                                                <li class="bg-deep-purple-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#651fff</span>
                                                </li>

                                                <li class="bg-deep-purple-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#7c4dff</span>
                                                </li>

                                                <li class="bg-deep-purple-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#b388ff</span>
                                                </li>

                                                <li class="bg-deep-purple-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#311b92</span>
                                                </li>

                                                <li class="bg-deep-purple-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#4527a0</span>
                                                </li>

                                                <li class="bg-deep-purple-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#512da8</span>
                                                </li>

                                                <li class="bg-deep-purple-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#5e35b1</span>
                                                </li>

                                                <li class="bg-deep-purple-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#673ab7</span>
                                                </li>

                                                <li class="bg-deep-purple-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#7e57c2</span>
                                                </li>

                                                <li class="bg-deep-purple-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#9575cd</span>
                                                </li>

                                                <li class="bg-deep-purple-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#b39ddb</span>
                                                </li>

                                                <li class="bg-deep-purple-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#d1c4e9</span>
                                                </li>

                                                <li class="bg-deep-purple-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#ede7f6</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">indigo</h5>
                                            <ul class="list-group">
                                                <li class="bg-indigo-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#304ffe</span>
                                                </li>

                                                <li class="bg-indigo-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#3d5afe</span>
                                                </li>

                                                <li class="bg-indigo-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#536dfe</span>
                                                </li>

                                                <li class="bg-indigo-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#8c9eff</span>
                                                </li>

                                                <li class="bg-indigo-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#1a237e</span>
                                                </li>

                                                <li class="bg-indigo-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#283593</span>
                                                </li>

                                                <li class="bg-indigo-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#303f9f</span>
                                                </li>

                                                <li class="bg-indigo-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#3949ab</span>
                                                </li>

                                                <li class="bg-indigo-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#3f51b5</span>
                                                </li>

                                                <li class="bg-indigo-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#5c6bc0</span>
                                                </li>

                                                <li class="bg-indigo-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#7986cb</span>
                                                </li>

                                                <li class="bg-indigo-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#9fa8da</span>
                                                </li>

                                                <li class="bg-indigo-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#c5cae9</span>
                                                </li>

                                                <li class="bg-indigo-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#e8eaf6</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">blue</h5>
                                            <ul class="list-group">
                                                <li class="bg-blue-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#2962ff</span>
                                                </li>

                                                <li class="bg-blue-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#2979ff</span>
                                                </li>

                                                <li class="bg-blue-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#448aff</span>
                                                </li>

                                                <li class="bg-blue-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#82b1ff</span>
                                                </li>

                                                <li class="bg-blue-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#0d47a1</span>
                                                </li>

                                                <li class="bg-blue-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#1565c0</span>
                                                </li>

                                                <li class="bg-blue-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#1976d2</span>
                                                </li>

                                                <li class="bg-blue-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#1e88e5</span>
                                                </li>

                                                <li class="bg-blue-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#2196f3</span>
                                                </li>

                                                <li class="bg-blue-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#42a5f5</span>
                                                </li>

                                                <li class="bg-blue-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#64b5f6</span>
                                                </li>

                                                <li class="bg-blue-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#90caf9</span>
                                                </li>

                                                <li class="bg-blue-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#bbdefb</span>
                                                </li>

                                                <li class="bg-blue-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#e3f2fd</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">light-blue</h5>
                                            <ul class="list-group">
                                                <li class="bg-light-blue-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#0091ea</span>
                                                </li>

                                                <li class="bg-light-blue-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#00b0ff</span>
                                                </li>

                                                <li class="bg-light-blue-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#40c4ff</span>
                                                </li>

                                                <li class="bg-light-blue-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#80d8ff</span>
                                                </li>

                                                <li class="bg-light-blue-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#01579b</span>
                                                </li>

                                                <li class="bg-light-blue-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#0277bd</span>
                                                </li>

                                                <li class="bg-light-blue-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#0288d1</span>
                                                </li>

                                                <li class="bg-light-blue-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#039be5</span>
                                                </li>

                                                <li class="bg-light-blue-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#03a9f4</span>
                                                </li>

                                                <li class="bg-light-blue-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#29b6f6</span>
                                                </li>

                                                <li class="bg-light-blue-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#4fc3f7</span>
                                                </li>

                                                <li class="bg-light-blue-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#81d4fa</span>
                                                </li>

                                                <li class="bg-light-blue-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#b3e5fc</span>
                                                </li>

                                                <li class="bg-light-blue-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#e1f5fe</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">cyan</h5>
                                            <ul class="list-group">
                                                <li class="bg-cyan-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#00b8d4</span>
                                                </li>

                                                <li class="bg-cyan-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#00e5ff</span>
                                                </li>

                                                <li class="bg-cyan-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#18ffff</span>
                                                </li>

                                                <li class="bg-cyan-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#84ffff</span>
                                                </li>

                                                <li class="bg-cyan-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#006064</span>
                                                </li>

                                                <li class="bg-cyan-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#00838f</span>
                                                </li>

                                                <li class="bg-cyan-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#0097a7</span>
                                                </li>

                                                <li class="bg-cyan-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#00acc1</span>
                                                </li>

                                                <li class="bg-cyan-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#00bcd4</span>
                                                </li>

                                                <li class="bg-cyan-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#26c6da</span>
                                                </li>

                                                <li class="bg-cyan-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#4dd0e1</span>
                                                </li>

                                                <li class="bg-cyan-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#80deea</span>
                                                </li>

                                                <li class="bg-cyan-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#b2ebf2</span>
                                                </li>

                                                <li class="bg-cyan-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#e0f7fa</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">teal</h5>
                                            <ul class="list-group">
                                                <li class="bg-teal-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#00bfa5</span>
                                                </li>

                                                <li class="bg-teal-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#1de9b6</span>
                                                </li>

                                                <li class="bg-teal-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#64ffda</span>
                                                </li>

                                                <li class="bg-teal-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#a7ffeb</span>
                                                </li>

                                                <li class="bg-teal-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#004d40</span>
                                                </li>

                                                <li class="bg-teal-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#00695c</span>
                                                </li>

                                                <li class="bg-teal-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#00796b</span>
                                                </li>

                                                <li class="bg-teal-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#00897b</span>
                                                </li>

                                                <li class="bg-teal-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#009688</span>
                                                </li>

                                                <li class="bg-teal-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#26a69a</span>
                                                </li>

                                                <li class="bg-teal-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#4db6ac</span>
                                                </li>

                                                <li class="bg-teal-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#80cbc4</span>
                                                </li>

                                                <li class="bg-teal-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#b2dfdb</span>
                                                </li>

                                                <li class="bg-teal-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#e0f2f1</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">green</h5>
                                            <ul class="list-group">
                                                <li class="bg-green-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#00c853</span>
                                                </li>

                                                <li class="bg-green-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#00e676</span>
                                                </li>

                                                <li class="bg-green-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#69f0ae</span>
                                                </li>

                                                <li class="bg-green-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#b9f6ca</span>
                                                </li>

                                                <li class="bg-green-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#1b5e20</span>
                                                </li>

                                                <li class="bg-green-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#2e7d32</span>
                                                </li>

                                                <li class="bg-green-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#388e3c</span>
                                                </li>

                                                <li class="bg-green-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#43a047</span>
                                                </li>

                                                <li class="bg-green-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#4caf50</span>
                                                </li>

                                                <li class="bg-green-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#66bb6a</span>
                                                </li>

                                                <li class="bg-green-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#81c784</span>
                                                </li>

                                                <li class="bg-green-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#a5d6a7</span>
                                                </li>

                                                <li class="bg-green-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#c8e6c9</span>
                                                </li>

                                                <li class="bg-green-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#e8f5e9</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">light-green</h5>
                                            <ul class="list-group">
                                                <li class="bg-light-green-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#64dd17</span>
                                                </li>

                                                <li class="bg-light-green-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#76ff03</span>
                                                </li>

                                                <li class="bg-light-green-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#b2ff59</span>
                                                </li>

                                                <li class="bg-light-green-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#ccff90</span>
                                                </li>

                                                <li class="bg-light-green-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#33691e</span>
                                                </li>

                                                <li class="bg-light-green-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#558b2f</span>
                                                </li>

                                                <li class="bg-light-green-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#689f38</span>
                                                </li>

                                                <li class="bg-light-green-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#7cb342</span>
                                                </li>

                                                <li class="bg-light-green-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#8bc34a</span>
                                                </li>

                                                <li class="bg-light-green-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#9ccc65</span>
                                                </li>

                                                <li class="bg-light-green-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#aed581</span>
                                                </li>

                                                <li class="bg-light-green-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#c5e1a5</span>
                                                </li>

                                                <li class="bg-light-green-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#dcedc8</span>
                                                </li>

                                                <li class="bg-light-green-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#f1f8e9</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">lime</h5>
                                            <ul class="list-group">
                                                <li class="bg-lime-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#aeea00</span>
                                                </li>

                                                <li class="bg-lime-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#c6ff00</span>
                                                </li>

                                                <li class="bg-lime-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#eeff41</span>
                                                </li>

                                                <li class="bg-lime-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#f4ff81</span>
                                                </li>

                                                <li class="bg-lime-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#827717</span>
                                                </li>

                                                <li class="bg-lime-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#9e9d24</span>
                                                </li>

                                                <li class="bg-lime-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#afb42b</span>
                                                </li>

                                                <li class="bg-lime-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#c0ca33</span>
                                                </li>

                                                <li class="bg-lime-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#cddc39</span>
                                                </li>

                                                <li class="bg-lime-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#d4e157</span>
                                                </li>

                                                <li class="bg-lime-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#dce775</span>
                                                </li>

                                                <li class="bg-lime-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#e6ee9c</span>
                                                </li>

                                                <li class="bg-lime-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#f0f4c3</span>
                                                </li>

                                                <li class="bg-lime-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#f9fbe7</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">yellow</h5>
                                            <ul class="list-group">
                                                <li class="bg-yellow-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#ffd600</span>
                                                </li>

                                                <li class="bg-yellow-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#ffea00</span>
                                                </li>

                                                <li class="bg-yellow-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#ffff00</span>
                                                </li>

                                                <li class="bg-yellow-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#ffff8d</span>
                                                </li>

                                                <li class="bg-yellow-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#f57f17</span>
                                                </li>

                                                <li class="bg-yellow-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#f9a825</span>
                                                </li>

                                                <li class="bg-yellow-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#fbc02d</span>
                                                </li>

                                                <li class="bg-yellow-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#fdd835</span>
                                                </li>

                                                <li class="bg-yellow-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#ffeb3b</span>
                                                </li>

                                                <li class="bg-yellow-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#ffee58</span>
                                                </li>

                                                <li class="bg-yellow-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#fff176</span>
                                                </li>

                                                <li class="bg-yellow-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#fff59d</span>
                                                </li>

                                                <li class="bg-yellow-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#fff9c4</span>
                                                </li>

                                                <li class="bg-yellow-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#fffde7</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">amber</h5>
                                            <ul class="list-group">
                                                <li class="bg-amber-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#ffab00</span>
                                                </li>

                                                <li class="bg-amber-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#ffc400</span>
                                                </li>

                                                <li class="bg-amber-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#ffd740</span>
                                                </li>

                                                <li class="bg-amber-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#ffe57f</span>
                                                </li>

                                                <li class="bg-amber-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#ff6f00</span>
                                                </li>

                                                <li class="bg-amber-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#ff8f00</span>
                                                </li>

                                                <li class="bg-amber-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#ffa000</span>
                                                </li>

                                                <li class="bg-amber-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#ffb300</span>
                                                </li>

                                                <li class="bg-amber-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#ffc107</span>
                                                </li>

                                                <li class="bg-amber-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#ffca28</span>
                                                </li>

                                                <li class="bg-amber-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#ffd54f</span>
                                                </li>

                                                <li class="bg-amber-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#ffe082</span>
                                                </li>

                                                <li class="bg-amber-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#ffecb3</span>
                                                </li>

                                                <li class="bg-amber-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#fff8e1</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">orange</h5>
                                            <ul class="list-group">
                                                <li class="bg-orange-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#ff6d00</span>
                                                </li>

                                                <li class="bg-orange-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#ff9100</span>
                                                </li>

                                                <li class="bg-orange-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#ffab40</span>
                                                </li>

                                                <li class="bg-orange-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#ffd180</span>
                                                </li>

                                                <li class="bg-orange-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#e65100</span>
                                                </li>

                                                <li class="bg-orange-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#ef6c00</span>
                                                </li>

                                                <li class="bg-orange-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#f57c00</span>
                                                </li>

                                                <li class="bg-orange-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#fb8c00</span>
                                                </li>

                                                <li class="bg-orange-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#ff9800</span>
                                                </li>

                                                <li class="bg-orange-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#ffa726</span>
                                                </li>

                                                <li class="bg-orange-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#ffb74d</span>
                                                </li>

                                                <li class="bg-orange-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#ffcc80</span>
                                                </li>

                                                <li class="bg-orange-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#ffe0b2</span>
                                                </li>

                                                <li class="bg-orange-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#fff3e0</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">deep-orange</h5>
                                            <ul class="list-group">
                                                <li class="bg-deep-orange-a400 grey-800 list-group-item">
                                                    <span>a400</span> /
                                                    <span>#dd2c00</span>
                                                </li>

                                                <li class="bg-deep-orange-a300 grey-800 list-group-item">
                                                    <span>a300</span> /
                                                    <span>#ff3d00</span>
                                                </li>

                                                <li class="bg-deep-orange-a200 grey-800 list-group-item">
                                                    <span>a200</span> /
                                                    <span>#ff6e40</span>
                                                </li>

                                                <li class="bg-deep-orange-a100 grey-800 list-group-item">
                                                    <span>a100</span> /
                                                    <span>#ff9e80</span>
                                                </li>

                                                <li class="bg-deep-orange-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#bf360c</span>
                                                </li>

                                                <li class="bg-deep-orange-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#d84315</span>
                                                </li>

                                                <li class="bg-deep-orange-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#e64a19</span>
                                                </li>

                                                <li class="bg-deep-orange-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#f4511e</span>
                                                </li>

                                                <li class="bg-deep-orange-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#ff5722</span>
                                                </li>

                                                <li class="bg-deep-orange-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#ff7043</span>
                                                </li>

                                                <li class="bg-deep-orange-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#ff8a65</span>
                                                </li>

                                                <li class="bg-deep-orange-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#ffab91</span>
                                                </li>

                                                <li class="bg-deep-orange-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#ffccbc</span>
                                                </li>

                                                <li class="bg-deep-orange-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#fbe9e7</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">brown</h5>
                                            <ul class="list-group">
                                                <li class="bg-brown-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#3e2723</span>
                                                </li>

                                                <li class="bg-brown-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#4e342e</span>
                                                </li>

                                                <li class="bg-brown-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#5d4037</span>
                                                </li>

                                                <li class="bg-brown-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#6d4c41</span>
                                                </li>

                                                <li class="bg-brown-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#795548</span>
                                                </li>

                                                <li class="bg-brown-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#8d6e63</span>
                                                </li>

                                                <li class="bg-brown-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#a1887f</span>
                                                </li>

                                                <li class="bg-brown-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#bcaaa4</span>
                                                </li>

                                                <li class="bg-brown-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#d7ccc8</span>
                                                </li>

                                                <li class="bg-brown-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#efebe9</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">grey</h5>
                                            <ul class="list-group">
                                                <li class="bg-grey-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#212121</span>
                                                </li>

                                                <li class="bg-grey-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#424242</span>
                                                </li>

                                                <li class="bg-grey-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#616161</span>
                                                </li>

                                                <li class="bg-grey-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#757575</span>
                                                </li>

                                                <li class="bg-grey-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#9e9e9e</span>
                                                </li>

                                                <li class="bg-grey-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#bdbdbd</span>
                                                </li>

                                                <li class="bg-grey-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#e0e0e0</span>
                                                </li>

                                                <li class="bg-grey-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#eeeeee</span>
                                                </li>

                                                <li class="bg-grey-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#f5f5f5</span>
                                                </li>

                                                <li class="bg-grey-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#fafafa</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <h5 class="text-uppercase">blue-grey</h5>
                                            <ul class="list-group">
                                                <li class="bg-blue-grey-900 list-group-item">
                                                    <span>900</span> /
                                                    <span>#263238</span>
                                                </li>

                                                <li class="bg-blue-grey-800 list-group-item">
                                                    <span>800</span> /
                                                    <span>#37474f</span>
                                                </li>

                                                <li class="bg-blue-grey-700 list-group-item">
                                                    <span>700</span> /
                                                    <span>#455a64</span>
                                                </li>

                                                <li class="bg-blue-grey-600 list-group-item">
                                                    <span>600</span> /
                                                    <span>#546e7a</span>
                                                </li>

                                                <li class="bg-blue-grey-500 list-group-item">
                                                    <span>500</span> /
                                                    <span>#607d8b</span>
                                                </li>

                                                <li class="bg-blue-grey-400 grey-800 list-group-item">
                                                    <span>400</span> /
                                                    <span>#78909c</span>
                                                </li>

                                                <li class="bg-blue-grey-300 grey-800 list-group-item">
                                                    <span>300</span> /
                                                    <span>#90a4ae</span>
                                                </li>

                                                <li class="bg-blue-grey-200 grey-800 list-group-item">
                                                    <span>200</span> /
                                                    <span>#b0bec5</span>
                                                </li>

                                                <li class="bg-blue-grey-100 grey-800 list-group-item">
                                                    <span>100</span> /
                                                    <span>#cfd8dc</span>
                                                </li>

                                                <li class="bg-blue-grey-50 grey-800 list-group-item">
                                                    <span>50</span> /
                                                    <span>#eceff1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>

        </x-slot>
    </x-backend.card>
@endsection
