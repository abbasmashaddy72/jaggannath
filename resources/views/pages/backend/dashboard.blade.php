<x-app-layout>
    <x-backend.card>
        <x-slot name="title">
            {{ __('Dashboard') }}
        </x-slot>

        <div class="flex flex-wrap -m-4 text-center">
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px"
                        height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"
                        class="inline-block">
                        <image id="image0" width="64" height="64" x="0" y="0"
                            href="data:image/png;base64,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" />
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $servicesCount }}</h2>
                    <p class="leading-relaxed">Total Services</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px"
                        height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"
                        class="inline-block">
                        <image id="image0" width="64" height="64" x="0" y="0"
                            href="data:image/png;base64,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" />
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $departmentsCount }}</h2>
                    <p class="leading-relaxed">Total Departments</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px"
                        height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"
                        class="inline-block">
                        <image id="image0" width="64" height="64" x="0" y="0"
                            href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC4lBMVEUAAAAzZv87Wek6V+k6WOdAQP87WOY6V+g6V+g4Vuk6V+g5WOk6V+g6WOg6V+g6V+k6V+g6Weg7V+c6WOc6Vuk4Vuk8Veo7V+g3Wek6WOc5Weo3W+Q9XOs7V+k6V+g6V+g+WOU6Vuk7V+g7V+g6V+g6V+g5WOg6V+g6VuhVVf85V+g6V+g7WOg6Vuc5Vuk6V+c6V+g5V+g6WOgAgP86V+g6V+g5WOg6WOc7V+c6V+g6V+g6V+g5WOk6VukrVdU6V+g6V+g5V+gAAP85V+g6V+cuXeg6V+k5Vuk6WOg6V+c6V+c6V+k5WeY7Tus3W+06V+g7Vuk6WuY6V+g6V+g6V+c5Veo6V+k7Vuc6WOkAAAAAAAAAAAAAAAA1Veo7V+c5WOcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA6V+gAAAD///91ienFAAAA83RSTlMABUVydwQ929o7+Dr9o/7YpEJ1gIhEPKUuS0gcGX57/B2ru9HQvKnzkQOT8nF2UNlPeG4CqO9DVKHX8dagUwa5+28BcLgLzUemaoxGKA0O92gfmfqiJCOCzA17fhcYSWsPSeHzgxEShfTmVgWY+K1SE1OulQa726+aidzCDhTTXsgQCsb9cgG+ecX6dP7KArH8YUQjLLxjonBiGfVlayf2jzoqlMuT+S/BBLSsH0jJRvsuMcMwVao+kdIaKLgpG0KboDSfA+g7IUU/8jiW6Txsnm13T0ChnIzQIG+kzFrN3nGIhILa5PDt7/F4C+fqDIAkfXyGcaVsAAAAAWJLR0T1RdIb2wAAAAd0SU1FB+YGBwQ5L7wChxkAAAPjSURBVFjD1VX5fw1XFD9JHrW9l2heREXRUktRRamlNLSWovYisYWirTSqlMQSW0iEeE2FUoratyDWWGtprVUtamtLhbTUznz/AGfmZbyZ3nlvZurTD/3+8N6533O/3zvn3HtniAQEBYc4DBESXIgsoPAzkl8UKWpBX0wKgGLFzfRB+vVLOJ0uHRFqVkWwfkUnUZieKWli8Kx+ejhRuJ4JMTHQTi/hdEcQRbh1VYTbMHCqZNiTMnCFOUoRlXJE/tsSDJto00DcRpsGrrBI12MZiPjPDSLcJoigpx2lHSYobWLwnFkTy5gYRJkZlDWroUhgfahpE54PbFDO1CCqfCB9+Qrm+/CCcgderKhXVnpJuROVLWxkhSo8sSpVc2tukctdjV7m/+pRVo5CDZ5Zk/9fedTPWq/ysDYHdazoqe5rklSvPgeFXm/QsFGjxm80kb8F9etJUmRdSwbU9E1Jim7WXEs1fytakt4OsqYnasHPILVs5SPKtGSidQuresY78hcytE3bdu+2b9eqTS0edOhoQ87o1Dlau4tdur5nT8/o1r1HwUa6enTvZksaE9uzlxL07tPX4ejbp7cy6NUzNs6avl9/4P0BA/XkoA8+BD4abEEe/zEUJAz5ZKjKDf10WIKXHf6ZmT5uBHwYmZg0alRS4mgNNWZsYH3yOJ40bDwMMT6RfyZMDKSflAJMnpJKE4C0qenTVOW09KlpLKXU6RnAjEn+9Z7PgcwvOJjJoiyKnzVbls+eFU9ZbDaTE19OBub4N5jL079SojRl3rz5ssH8eURz+JGUxNdMLPCnX7gI+MYbLuZHWUJLgWXLgKW0JBNY7M0sB1as9GOwCkhZXRCvAdZmrwDWrWNB9lpgjbrN64H0VEP9BiBnozrYlIGMzbxrRGOAzTzYpGa25ABbDQ1SHhUgY5vS/1yiXCXY5stsB3YYPQKXnbDTN9zFZWO3HO3mIHOPL/MtV7bXwIC7s0873s+6A3JwgIP92sx3hlv5/UHgkJY4zAsdkYMj3MbD2sxR4Fi8YPADXzaPjjkOrOdaU7ntx/Vr/QicEAx+An4mGnvylBdHiXbysThNdBpYxL35pSBxkm/TGSBWMDijnLCz6vHPySY6B4zzeM4D54gu5KgZbtSvwG+Cwe9KC3QGyceAixe54GStQZKys5cEgz8A1sRczlNwJVfmrgL5+cBVOc694s1cjuH+An8KBn8Bwrsi7pq85PWB/+QnAn8LBnxPPQJ5Qza4IdAefmsIJM8UD8fNW8DtO2RpsqEB5QF59DgGd4G7/yeDUyL4KzHCgPZjYAuCwUh7+nzB4N79PBt4kKXqHgKzdAnV6BFxqAAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMi0wNi0wN1QwNDo1Nzo0NyswMDowMFA2sc0AAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjItMDYtMDdUMDQ6NTc6NDcrMDA6MDAhawlxAAAAAElFTkSuQmCC" />
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $doctorsCount }}</h2>
                    <p class="leading-relaxed">Total Doctors</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px"
                        height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"
                        class="inline-block">
                        <image id="image0" width="64" height="64" x="0" y="0"
                            href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB3VBMVEUAAAA0Veo2VuYxVvE0Vus1VeoyVfA4VeU4VeQyU+YxUuczVOo7XO44We4yU+o0Vuk1VOo0V+g0TvE0TfIzVeo2Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0VeoyVvE0Vus0Veo1VeoyVfA1U+o1VOo0Veo0Veo0VeozVuoyVus0Veo0Veo1Vek0Veo0Veo0Vek0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Ves0Veo0Veo1VuszVOo0Veo0Veo0Veo0Vug2VOo1VOo0V+k0Vuk1VOo1VOo0Vuk1Veo1VOo0V+g0Vuk0Veo0Veo1VOo2U+o0Vuk0Veo0Veo1VOo0Vuk0Vuk0Veo0Veo1VOo1VOo0Vuk0Veo0Veo1VOo1VOo0Vuk0Veo0Veo0Veo0Veo0Vuk0Veo0Veo0Veo0Veo0Veo1VOo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo0Veo1Veo0Veo0Veo1VeozVeo0Veo1Veo0Veo1Veo1Veo1Veo0Veo1Veo1Veo0Veo1VeozVeo0Veo1Veo1Veo1Veo2Veo0Ver////RcamiAAAAnXRSTlMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAhMVFNju8teXmQlYkFcJAWPj8eJiAbvbMAwNMAHmfGVmfZgfrPkfGTQ4GAEBAQVaXgVGbQ8FY+XnZwZH0fSECGjp62wLTNb4ihQLS2rgTD1kwvd1VxbJlg7Luo3eCQUIXmdpKWg6FzB3eC8GcEZdR28mJrxKCq9vk5OvCkoQAwMGAQ8JDA8BmLpicAAAAAFiS0dEnp+yowsAAAAHdElNRQfmBgcENTJzsaTMAAABxElEQVRYw2NgGAWDBjCSAVANEBOXkCQBSIiLoRkgLiUtQwKQlhJHM0BCWlZOnmggJystgWaApIwcKf6Xk5HEMEAeVQR/mMvT3AAmZhZUN7OysZNmgIKiEnKoKSmrcJBkgKqaugZytGloammTZICYjq6evgEc6Bvq6oiRZICRvLGJqRkcmJobWxiRZACnpZX1XCRgbWXDRZIB3Dy2dvZIwM6Bl5E0A/i48eU+OiSkUQNGDRg1ACvg53d0EhAAUoLOrAJkGMDP7+Lq5i7Ayi/k4ekFNIhUA/j5vX18/fwDWIUDg4JDQCaQakBoWPjcuRGRUdExc+fGxsWTbkBCYlJyclKKV2paekZmVjbpBvAzMubkMDIK8DPmauQxku4FIBDLzxdDCv0BNUCCTAMKCsAGFBaJk24AuFIoLgZTJfrgGoJEA0rLysvNzMpBAFhPVlSSbICENHI1ObeKZANKUKrJ6hqSDcCsJXEZQHQjF6cBtXUODvUNjU3NjGUtjK1tjQ1Y+XgMSNRp7+js6u7pZe3rF2mbMHESVj4rbgMaJ0+ZOnna9BkzRfVniRTPnoOdj8MACpu6FDe2KW7uU9zhoLTLMwoGFAAAq3u91l1vrYMAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjItMDYtMDdUMDQ6NTM6NDkrMDA6MDAJ4mrqAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIyLTA2LTA3VDA0OjUzOjQ5KzAwOjAweL/SVgAAAABJRU5ErkJggg==" />
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $packagesCount }}</h2>
                    <p class="leading-relaxed">Total Packages</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="56" height="56" viewBox="0 0 256 256" xml:space="preserve" class="inline-block">
                        <g transform="translate(128 128) scale(0.72 0.72)" style="">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)">
                                <path
                                    d="M 76.887 60.444 h -4.415 c -0.828 0 -1.5 -0.672 -1.5 -1.5 s 0.672 -1.5 1.5 -1.5 h 4.415 C 82.463 57.444 87 52.907 87 47.331 c 0 -5.335 -4.179 -9.764 -9.514 -10.081 l -1.581 -0.094 l 0.18 -1.573 c 0.1 -0.872 0.147 -1.652 0.147 -2.385 c 0 -11.438 -9.305 -20.742 -20.742 -20.742 c -7.165 0 -13.729 3.641 -17.559 9.741 l -0.745 1.187 l -1.235 -0.663 c -2.294 -1.231 -4.889 -1.882 -7.502 -1.882 c -8.491 0 -15.457 6.65 -15.858 15.14 l -0.057 1.196 l -1.179 0.21 C 6.514 38.244 3 42.428 3 47.331 c 0 5.576 4.537 10.113 10.113 10.113 h 5.186 c 0.829 0 1.5 0.672 1.5 1.5 s -0.671 1.5 -1.5 1.5 h -5.186 C 5.883 60.444 0 54.562 0 47.331 c 0 -5.966 4.007 -11.109 9.683 -12.645 c 1.025 -9.537 9.057 -16.849 18.766 -16.849 c 2.649 0 5.282 0.563 7.693 1.637 c 4.46 -6.299 11.596 -10.019 19.349 -10.019 c 13.092 0 23.742 10.651 23.742 23.742 c 0 0.401 -0.013 0.813 -0.037 1.239 C 85.365 35.536 90 40.93 90 47.331 C 90 54.562 84.117 60.444 76.887 60.444 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 67.472 34.672 c -0.828 0 -1.5 -0.671 -1.5 -1.5 c 0 -5.779 -4.702 -10.481 -10.481 -10.481 c -0.828 0 -1.5 -0.671 -1.5 -1.5 s 0.672 -1.5 1.5 -1.5 c 7.434 0 13.481 6.048 13.481 13.481 C 68.972 34.001 68.3 34.672 67.472 34.672 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 21.859 37.381 c -0.024 0 -0.048 0 -0.072 -0.001 c -0.828 -0.04 -1.467 -0.742 -1.428 -1.569 c 0.205 -4.33 3.758 -7.721 8.089 -7.721 c 0.829 0 1.5 0.671 1.5 1.5 s -0.671 1.5 -1.5 1.5 c -2.727 0 -4.963 2.136 -5.092 4.862 C 23.319 36.755 22.655 37.381 21.859 37.381 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 66.796 45.324 c -0.373 -0.74 -1.276 -1.037 -2.015 -0.663 c -0.739 0.373 -1.036 1.275 -0.663 2.015 c 1.407 2.789 1.404 5.023 0.005 7.932 L 52.924 76.392 L 40.746 45.451 c -0.303 -0.771 -1.174 -1.149 -1.945 -0.847 c -0.771 0.304 -1.15 1.174 -0.847 1.946 l 6.198 15.746 l -7.247 14.095 L 24.728 45.451 c -0.304 -0.771 -1.175 -1.149 -1.945 -0.847 c -0.771 0.304 -1.15 1.174 -0.847 1.946 l 13.392 34.025 c 0.216 0.548 0.733 0.919 1.321 0.948 c 0.025 0.001 0.05 0.002 0.075 0.002 c 0.56 0 1.076 -0.313 1.333 -0.814 l 7.557 -14.698 l 5.732 14.563 c 0.216 0.548 0.732 0.919 1.32 0.948 c 0.025 0.001 0.051 0.002 0.075 0.002 c 0.561 0 1.076 -0.313 1.334 -0.814 l 12.732 -24.768 C 68.614 52.193 68.61 48.918 66.796 45.324 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </g>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $blogsCount }}</h2>
                    <p class="leading-relaxed">Total Blogs</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="56" height="56" viewBox="0 0 256 256" xml:space="preserve"
                        class="inline-block">
                        <g transform="translate(128 128) scale(0.72 0.72)" style="">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)">
                                <path
                                    d="M 57.299 65.386 c -8.373 0 -16.748 -3.188 -23.123 -9.563 C 28 49.647 24.598 41.436 24.598 32.701 c 0 -8.734 3.402 -16.946 9.578 -23.123 C 40.353 3.401 48.564 0 57.299 0 c 8.735 0 16.947 3.401 23.123 9.578 C 86.599 15.754 90 23.966 90 32.701 c 0 8.735 -3.401 16.947 -9.578 23.123 l 0 0 l 0 0 C 74.047 62.198 65.673 65.386 57.299 65.386 z M 57.299 2 c -8.2 0 -15.91 3.193 -21.708 8.992 c -5.798 5.799 -8.992 13.508 -8.992 21.708 c 0 8.201 3.194 15.91 8.992 21.708 c 11.971 11.971 31.448 11.971 43.417 0 l 0 0 C 84.807 48.61 88 40.901 88 32.701 c 0 -8.2 -3.193 -15.91 -8.992 -21.708 S 65.5 2 57.299 2 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 9.542 89.995 c -2.444 0 -4.887 -0.93 -6.748 -2.79 c -3.721 -3.721 -3.721 -9.774 0 -13.495 l 21.204 -21.203 c 0.391 -0.391 1.023 -0.391 1.414 0 s 0.391 1.023 0 1.414 L 4.209 75.124 c -2.941 2.941 -2.941 7.726 0 10.667 c 2.94 2.941 7.726 2.942 10.667 0 l 21.204 -21.203 c 0.391 -0.391 1.023 -0.391 1.414 0 s 0.391 1.023 0 1.414 L 16.29 87.205 C 14.429 89.065 11.986 89.995 9.542 89.995 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 77.044 42.465 c -0.135 0 -0.272 -0.028 -0.404 -0.086 c -0.505 -0.224 -0.732 -0.815 -0.509 -1.32 c 2.879 -6.486 2.245 -13.888 -1.695 -19.801 c -0.307 -0.46 -0.182 -1.081 0.277 -1.387 c 0.46 -0.308 1.08 -0.182 1.387 0.277 c 4.322 6.486 5.018 14.606 1.859 21.722 C 77.793 42.244 77.428 42.465 77.044 42.465 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 37.554 42.466 c -0.383 0 -0.749 -0.222 -0.915 -0.595 c -2.585 -5.83 -2.585 -12.514 0 -18.34 c 4.592 -10.346 16.23 -15.725 27.064 -12.509 c 0.529 0.157 0.832 0.713 0.675 1.243 c -0.156 0.529 -0.712 0.833 -1.243 0.674 C 53.26 10.01 42.655 14.91 38.468 24.342 c -2.357 5.31 -2.357 11.403 0 16.718 c 0.224 0.505 -0.004 1.096 -0.509 1.319 C 37.827 42.438 37.689 42.466 37.554 42.466 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </g>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $blogsViewSum }}</h2>
                    <p class="leading-relaxed">Total Blogs Viewed</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="64" height="64" viewBox="0 0 256 256" xml:space="preserve"
                        class="inline-block">
                        <g transform="translate(128 128) scale(0.72 0.72)" style="">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)">
                                <path
                                    d="M 50.755 19.668 c -0.159 0 -0.319 -0.038 -0.466 -0.115 L 45 16.772 l -5.29 2.781 c -0.337 0.177 -0.745 0.148 -1.054 -0.076 c -0.308 -0.224 -0.462 -0.603 -0.398 -0.979 l 1.01 -5.89 l -4.28 -4.172 c -0.273 -0.266 -0.371 -0.663 -0.253 -1.025 s 0.431 -0.626 0.808 -0.681 l 5.915 -0.859 l 2.644 -5.359 c 0.337 -0.683 1.458 -0.683 1.795 0 l 2.644 5.359 l 5.914 0.859 c 0.377 0.055 0.69 0.319 0.808 0.681 c 0.117 0.362 0.02 0.76 -0.253 1.026 l -4.28 4.172 l 1.01 5.89 c 0.064 0.375 -0.09 0.755 -0.398 0.979 C 51.168 19.604 50.962 19.668 50.755 19.668 z M 37.838 8.419 l 3.205 3.124 c 0.235 0.23 0.343 0.561 0.288 0.886 l -0.757 4.41 l 3.961 -2.083 c 0.291 -0.153 0.64 -0.153 0.931 0 l 3.961 2.083 l -0.756 -4.41 c -0.056 -0.324 0.052 -0.656 0.287 -0.886 l 3.205 -3.124 l -4.428 -0.643 c -0.326 -0.047 -0.608 -0.252 -0.753 -0.548 L 45 3.216 l -1.98 4.012 c -0.146 0.296 -0.427 0.5 -0.754 0.548 L 37.838 8.419 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 79.572 68.851 c 1.361 -1.002 2.245 -2.616 2.245 -4.432 v -0.897 c 0 -1.98 -1.051 -3.719 -2.625 -4.688 c 1.272 -1.008 2.09 -2.567 2.09 -4.313 v -0.897 c 0 -3.033 -2.468 -5.501 -5.503 -5.501 l -17.705 0.028 c 1.064 -11.168 0.059 -17.708 -3.147 -20.539 c -1.851 -1.633 -4.373 -2.048 -7.705 -1.274 l -0.737 0.171 l -0.036 0.755 c -0.464 9.738 -6.423 22.906 -12.256 24.679 v -0.652 c 0 -1.872 -1.652 -3.394 -3.682 -3.394 H 11.669 c -2.03 0 -3.682 1.522 -3.682 3.394 v 35.314 c 0 1.871 1.652 3.393 3.682 3.393 h 18.843 c 2.03 0 3.682 -1.522 3.682 -3.393 v -0.027 c 3.09 2.023 8.158 3.254 13.235 3.134 h 25.367 c 3.033 0 5.501 -2.467 5.501 -5.5 v -0.898 c 0 -1.339 -0.481 -2.568 -1.279 -3.523 c 2.797 -0.255 4.996 -2.614 4.996 -5.476 v -0.898 C 82.013 71.517 81.044 69.838 79.572 68.851 z M 80.012 74.316 c 0 1.93 -1.57 3.499 -3.5 3.499 h -3.717 H 68.31 c -0.553 0 -1.001 0.447 -1.001 1.001 c 0 0.553 0.447 1.001 1.001 1.001 h 4.486 c 1.93 0 3.5 1.57 3.5 3.5 v 0.898 c 0 1.93 -1.57 3.499 -3.5 3.499 H 47.403 c -5.582 0.149 -11.273 -1.511 -13.47 -3.929 l -1.741 -1.915 v 4.738 c 0 0.754 -0.769 1.392 -1.681 1.392 H 11.669 c -0.911 0 -1.681 -0.638 -1.681 -1.392 V 51.293 c 0 -0.755 0.769 -1.393 1.681 -1.393 h 18.843 c 0.911 0 1.681 0.638 1.681 1.393 v 1.844 v 1.06 v 16.449 c 0 0.553 0.448 1.001 1.001 1.001 c 0.553 0 1.001 -0.447 1.001 -1.001 V 53.999 c 7.351 -1.562 13.461 -16.045 14.206 -25.861 c 2.295 -0.41 3.998 -0.089 5.203 0.975 c 2.745 2.423 3.52 8.944 2.371 19.937 l -0.116 1.106 l 19.924 -0.032 c 1.93 0 3.5 1.57 3.5 3.5 v 0.897 c 0 1.93 -1.57 3.5 -3.5 3.5 H 68.31 c -0.553 0 -1.001 0.447 -1.001 1.001 c 0 0.553 0.447 1.001 1.001 1.001 h 7.472 h 0.535 c 1.93 0 3.5 1.57 3.5 3.5 v 0.897 c 0 1.93 -1.57 3.5 -3.5 3.5 H 68.31 c -0.553 0 -1.001 0.447 -1.001 1.001 c 0 0.553 0.447 1.001 1.001 1.001 h 8.007 h 0.195 c 1.93 0 3.5 1.569 3.5 3.499 V 74.316 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 21.38 83.291 c -2.803 0 -5.083 -2.28 -5.083 -5.083 c 0 -2.803 2.28 -5.084 5.083 -5.084 s 5.083 2.28 5.083 5.084 C 26.463 81.01 24.183 83.291 21.38 83.291 z M 21.38 75.125 c -1.7 0 -3.082 1.383 -3.082 3.083 c 0 1.699 1.383 3.082 3.082 3.082 c 1.699 0 3.082 -1.383 3.082 -3.082 C 24.462 76.508 23.079 75.125 21.38 75.125 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 73.88 29.304 c -0.159 0 -0.319 -0.038 -0.466 -0.115 l -5.289 -2.781 l -5.291 2.781 c -0.334 0.177 -0.744 0.148 -1.053 -0.076 c -0.308 -0.224 -0.462 -0.603 -0.398 -0.979 l 1.01 -5.89 l -4.28 -4.172 c -0.273 -0.266 -0.37 -0.663 -0.253 -1.025 c 0.118 -0.362 0.431 -0.626 0.808 -0.681 l 5.914 -0.859 l 2.645 -5.359 c 0.336 -0.683 1.458 -0.683 1.794 0 l 2.645 5.359 l 5.914 0.859 c 0.377 0.055 0.69 0.319 0.808 0.681 c 0.117 0.362 0.02 0.76 -0.253 1.026 l -4.28 4.172 l 1.01 5.89 c 0.064 0.375 -0.09 0.755 -0.398 0.979 C 74.293 29.239 74.087 29.304 73.88 29.304 z M 60.962 18.054 l 3.205 3.124 c 0.235 0.23 0.343 0.561 0.287 0.885 l -0.756 4.41 l 3.962 -2.083 c 0.291 -0.153 0.638 -0.153 0.931 0 l 3.96 2.083 l -0.756 -4.41 c -0.056 -0.324 0.052 -0.656 0.287 -0.886 l 3.205 -3.124 l -4.428 -0.643 c -0.326 -0.047 -0.608 -0.252 -0.753 -0.548 l -1.98 -4.012 l -1.98 4.012 c -0.146 0.296 -0.427 0.5 -0.753 0.548 L 60.962 18.054 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 28.594 29.304 c -0.159 0 -0.319 -0.038 -0.466 -0.115 l -5.29 -2.781 l -5.29 2.781 c -0.337 0.177 -0.745 0.148 -1.054 -0.076 c -0.308 -0.224 -0.462 -0.603 -0.398 -0.979 l 1.01 -5.89 l -4.28 -4.172 c -0.273 -0.266 -0.371 -0.663 -0.253 -1.025 c 0.118 -0.362 0.431 -0.626 0.808 -0.681 l 5.914 -0.859 l 2.645 -5.359 c 0.169 -0.341 0.516 -0.558 0.897 -0.558 l 0 0 c 0.381 0 0.729 0.216 0.897 0.558 l 2.644 5.359 l 5.915 0.859 c 0.377 0.055 0.69 0.319 0.808 0.681 c 0.118 0.362 0.02 0.76 -0.253 1.025 l -4.28 4.172 l 1.01 5.89 c 0.064 0.375 -0.09 0.755 -0.398 0.979 C 29.008 29.239 28.801 29.304 28.594 29.304 z M 22.839 24.277 c 0.16 0 0.32 0.038 0.466 0.115 l 3.961 2.083 l -0.757 -4.41 c -0.055 -0.324 0.052 -0.656 0.288 -0.886 l 3.205 -3.124 l -4.429 -0.643 c -0.326 -0.047 -0.608 -0.252 -0.754 -0.548 l -1.98 -4.013 l -1.981 4.013 c -0.146 0.296 -0.427 0.5 -0.753 0.548 l -4.429 0.643 l 3.205 3.124 c 0.235 0.23 0.343 0.561 0.288 0.886 l -0.757 4.41 l 3.961 -2.083 C 22.519 24.315 22.679 24.277 22.839 24.277 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </g>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $reviewsCount }}</h2>
                    <p class="leading-relaxed">Total Reviews</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <div class="flex">
                        <div class="ml-auto">
                            <div class="bg-green-300 rounded-lg px-2 py-1">
                                <a href="{{ route('admin.contact-us.index') }}">
                                    {{ $contactedToday }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="56" height="56" viewBox="0 0 256 256" xml:space="preserve"
                        class="inline-block">
                        <g transform="translate(128 128) scale(0.72 0.72)" style="">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)">
                                <path
                                    d="M 70.24 20.934 c 4.069 0 7.378 3.31 7.378 7.378 v 3.722 c 0 4.069 -3.31 7.378 -7.378 7.378 c -4.069 0 -7.378 -3.31 -7.378 -7.378 v -3.722 C 62.862 24.244 66.172 20.934 70.24 20.934 M 70.24 17.934 L 70.24 17.934 c -5.708 0 -10.379 4.67 -10.379 10.378 v 3.722 c 0 5.708 4.67 10.378 10.378 10.378 h 0 c 5.708 0 10.378 -4.67 10.378 -10.378 v -3.722 C 80.619 22.604 75.948 17.934 70.24 17.934 L 70.24 17.934 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 19.76 20.934 c 4.069 0 7.378 3.31 7.378 7.378 v 3.722 c 0 4.069 -3.31 7.378 -7.379 7.378 c -4.069 0 -7.378 -3.31 -7.378 -7.378 v -3.722 C 12.381 24.244 15.691 20.934 19.76 20.934 M 19.76 17.934 L 19.76 17.934 c -5.708 0 -10.379 4.67 -10.379 10.378 v 3.722 c 0 5.708 4.67 10.378 10.378 10.378 h 0 c 5.708 0 10.378 -4.67 10.378 -10.378 v -3.722 C 30.138 22.604 25.468 17.934 19.76 17.934 L 19.76 17.934 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 63.291 62.979 H 32.709 c -0.829 0 -1.5 -0.672 -1.5 -1.5 s 0.671 -1.5 1.5 -1.5 h 30.582 c 0.828 0 1.5 0.672 1.5 1.5 S 64.119 62.979 63.291 62.979 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 63.291 62.979 c -0.362 0 -0.726 -0.13 -1.014 -0.395 l -5.894 -5.404 c -0.61 -0.56 -0.651 -1.509 -0.092 -2.119 c 0.561 -0.609 1.509 -0.652 2.119 -0.092 l 5.894 5.404 c 0.61 0.56 0.651 1.509 0.092 2.119 C 64.101 62.815 63.696 62.979 63.291 62.979 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 57.397 68.384 c -0.405 0 -0.81 -0.164 -1.105 -0.486 c -0.56 -0.61 -0.519 -1.56 0.092 -2.119 l 5.894 -5.404 c 0.611 -0.559 1.56 -0.518 2.119 0.092 c 0.56 0.61 0.519 1.56 -0.092 2.119 l -5.894 5.404 C 58.123 68.253 57.76 68.384 57.397 68.384 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 57.291 52.979 H 26.709 c -0.829 0 -1.5 -0.672 -1.5 -1.5 s 0.671 -1.5 1.5 -1.5 h 30.582 c 0.828 0 1.5 0.672 1.5 1.5 S 58.119 52.979 57.291 52.979 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 26.71 52.979 c -0.406 0 -0.81 -0.164 -1.106 -0.486 c -0.56 -0.61 -0.519 -1.56 0.092 -2.119 l 5.894 -5.404 c 0.61 -0.56 1.559 -0.52 2.119 0.092 c 0.56 0.61 0.519 1.56 -0.092 2.119 l -5.894 5.404 C 27.435 52.849 27.072 52.979 26.71 52.979 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 32.603 58.384 c -0.362 0 -0.725 -0.13 -1.013 -0.395 l -5.894 -5.404 c -0.611 -0.56 -0.652 -1.509 -0.092 -2.119 c 0.56 -0.609 1.508 -0.652 2.119 -0.092 l 5.894 5.404 c 0.611 0.56 0.652 1.509 0.092 2.119 C 33.413 58.22 33.008 58.384 32.603 58.384 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 36.519 65.529 V 69.5 H 3 v -9.522 c 0 -6.251 4.457 -11.698 10.501 -13.015 c 1.986 0.869 4.087 1.308 6.259 1.308 c 1.718 0 3.388 -0.286 4.995 -0.831 l 3.224 -3.046 c -0.771 -0.238 -1.561 -0.434 -2.375 -0.556 c -1.756 0.909 -3.74 1.432 -5.844 1.432 s -4.088 -0.523 -5.844 -1.432 C 6.069 45.01 0 51.819 0 59.978 v 10.736 C 0 71.696 0.804 72.5 1.786 72.5 h 35.947 c 0.983 0 1.786 -0.804 1.786 -1.786 v -5.184 H 36.519 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 76.084 43.839 c -1.756 0.909 -3.74 1.432 -5.844 1.432 c -2.104 0 -4.088 -0.523 -5.844 -1.432 c -3.448 0.515 -6.552 2.119 -8.949 4.447 h 5.024 c 1.087 -0.595 2.262 -1.051 3.51 -1.323 c 1.986 0.869 4.087 1.308 6.259 1.308 s 4.273 -0.44 6.259 -1.308 C 82.543 48.28 87 53.727 87 59.978 V 69.5 H 53.481 v -3.971 h -3 v 5.184 c 0 0.983 0.804 1.786 1.786 1.786 h 35.947 c 0.983 0 1.786 -0.804 1.786 -1.786 V 59.978 C 90 51.819 83.931 45.01 76.084 43.839 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </g>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $contactedUs }}</h2>
                    <p class="leading-relaxed">Contacted Us</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <div class="flex">
                        <div class="ml-auto">
                            <div class="bg-green-300 rounded-lg px-2 py-1">
                                <a href="{{ route('admin.feedback') }}">
                                    {{ $feedbacksToday }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px"
                        height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"
                        class="inline-block">
                        <image id="image0" width="64" height="64" x="0" y="0"
                            href="data:image/png;base64,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" />
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $feedbacks }}</h2>
                    <p class="leading-relaxed">Feedbacks</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <div class="flex">
                        <div class="ml-auto">
                            <div class="bg-green-300 rounded-lg px-2 py-1">
                                <a href="{{ route('admin.book.appointment') }}">
                                    {{ $BookedToday }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"  width="64px"
                        height="64px" class="inline-block" viewBox="0 0 512 512">
                        <defs>
                            <style>.cls-1{fill:#3A57E8;}</style>
                        </defs>
                        <title>calendar-remove-outline</title>
                        <path class="cls-1" d="M448,38.4H409.6a38.4,38.4,0,0,0-76.8,0H179.2a38.4,38.4,0,1,0-76.8,0H64a64,64,0,0,0-64,64V428.8A83.2,83.2,0,0,0,83.2,512H428.8A83.2,83.2,0,0,0,512,428.8V102.4A64,64,0,0,0,448,38.4Zm-89.6,0a12.8,12.8,0,0,1,25.6,0V64a12.8,12.8,0,0,1-25.6,0ZM128,38.4a12.8,12.8,0,1,1,25.6,0V64A12.8,12.8,0,1,1,128,64Zm-102.4,64A38.33,38.33,0,0,1,42.54,70.57,38.18,38.18,0,0,1,64,64h38.4a38.4,38.4,0,1,0,76.8,0H332.8a38.4,38.4,0,0,0,76.8,0H448a38.44,38.44,0,0,1,38.2,34.48,38.69,38.69,0,0,1,.2,3.92v51.2H25.6Zm403.2,384H83.2a57.56,57.56,0,0,1-53-35.33A63.61,63.61,0,0,0,64,460.8H448a63.61,63.61,0,0,0,33.8-9.73A57.56,57.56,0,0,1,428.8,486.4Zm57.6-89.6A38.44,38.44,0,0,1,448,435.2H64a38.44,38.44,0,0,1-38.4-38.4V179.2H486.4Z"/>
                        <path class="cls-1" d="M256,243.2a64,64,0,1,1-64,64,64.07,64.07,0,0,1,64-64m0-25.6a89.6,89.6,0,1,0,89.6,89.6A89.6,89.6,0,0,0,256,217.6Z"/>
                        <path class="cls-1" d="M281.6,320H230.4a12.8,12.8,0,0,1,0-25.6h51.2a12.8,12.8,0,0,1,0,25.6Z"/>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $Booked }}</h2>
                    <p class="leading-relaxed">Book Appointment</p>
                </div>
            </div>
        </div>

    </x-backend.card>
</x-app-layout>
