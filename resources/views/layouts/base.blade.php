<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-left-20 {
            left: -5rem
        }

        .top-0 {
            top: 0px
        }

        .-bottom-16 {
            bottom: -4rem
        }

        .-left-16 {
            left: -4rem
        }

        .-mx-3 {
            margin-left: -0.75rem;
            margin-right: -0.75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .aspect-video {
            aspect-ratio: 16 / 9
        }

        .size-12 {
            width: 3rem;
            height: 3rem
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-40 {
            height: 10rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-full {
            width: 100%
        }

        .w-\[calc\(100\%\+8rem\)\] {
            width: calc(100% + 8rem)
        }

        .w-auto {
            width: auto
        }

        .max-w-\[877px\] {
            max-width: 877px
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .items-stretch {
            align-items: stretch
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .self-center {
            align-self: center
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-\[10px\] {
            border-radius: 10px
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-md {
            border-radius: 0.375rem
        }

        .rounded-sm {
            border-radius: 0.125rem
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: rgb(255 45 32 / 0.1)
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }

        .stroke-\[\#FF2D20\] {
            stroke: #FF2D20
        }

        .object-cover {
            object-fit: cover
        }

        .object-top {
            object-position: top
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .pt-3 {
            padding-top: 0.75rem
        }

        .text-center {
            text-align: center
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .text-sm\/relaxed {
            font-size: 0.875rem;
            line-height: 1.625
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-semibold {
            font-weight: 600
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-transparent {
            --tw-ring-color: transparent
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / 0.05)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .duration-300 {
            transition-duration: 300ms
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .hover\:text-black\/70:hover {
            color: rgb(0 0 0 / 0.7)
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / 0.2)
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
        }

        @media (min-width: 640px) {
            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0px
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }

            .dark\:hidden {
                display: none
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity))
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity))
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .dark\:text-white\/50 {
                color: rgb(255 255 255 / 0.5)
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-white\/70 {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:hover\:text-white\/70:hover {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:hover\:text-white\/80:hover {
                color: rgb(255 255 255 / 0.8)
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
            }
        }
    </style>
    @endif

    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

</head>

<body class="bg-gray-100 w-full h-screen relative flex flex-col">

    <nav class="flex items-center justify-between flex-wrap bg-sky-900 p-6">

        <div class="w-1/3 flex items-center text-white">
            @yield('title_nav')

        </div>

        <div class="w-1/3 block flex items-center justify-center">

            <a href="{{ url('pokemon') }}" title="Pokémon" class="flex size-12 mx-1 shrink-0 items-center justify-center rounded-full bg-[#F8F8F8]/10 sm:size-16 hover:opacity-65 transition-all">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-371.587 -299.544 871.587 799.544"
                    xmlns:bx="https://boxy-svg.com" width="50px" height="50px">
                    <defs>
                        <bx:export>
                            <bx:file format="svg" path="pokedex.svg" />
                            <bx:file format="html" path="pokedex.html" />
                        </bx:export>
                    </defs>
                    <g>
                        <ellipse style="fill: rgb(255, 255, 255);" cx="-63.871" cy="-182.33" rx="30.5" ry="30.5" />
                        <ellipse style="fill: none; stroke-width: 3px; stroke: rgb(255, 255, 255);" cx="-63.9"
                            cy="-182.3" rx="37.5" ry="37.5" />
                        <ellipse style="fill: rgb(255, 255, 255);" cx="7" cy="-210" rx="12" ry="12" />
                        <ellipse style="fill: rgb(255, 255, 255);" cx="43" cy="-210" rx="12" ry="12" />
                        <path
                            d="M 159.488 -110.262 C 180.268 -110.793 207.571 -109.791 219.867 -109.824 C 225.826 -109.84 231.655 -108.97 233.905 -106.199 C 236.013 -103.603 237.517 -101.641 237.437 -97.804 C 237.363 -94.221 238.609 250.093 236.498 251.864 C 235.967 252.31 233.566 258.469 228.608 261.037 C 220.367 261.288 -43.943 260.487 -49.053 261.027 C -53.429 258.613 -86.131 224.791 -90.239 219.081 C -91.905 214.424 -91.24 -76.043 -90.867 -90.219 C -90.742 -101.309 -87.758 -109.674 -79.063 -110.239 C -56.527 -111.702 141.841 -109.811 159.488 -110.262 Z"
                            style="fill: none; stroke: rgb(255, 255, 255); stroke-width: 4px;" />
                    </g>
                    <path style="fill: none; stroke: rgb(255, 255, 255); stroke-linejoin: round; stroke-width: 8px;"
                        d="M -87.371 -235.83 H 234.193 A 25.716 25.716 0 0 1 259.909 -210.114 V 391.016 A 45.343 45.343 0 0 1 214.566 436.359 H -101.182 A 30.078 30.078 0 0 1 -131.26 406.281 V -191.941 A 43.889 43.889 0 0 1 -87.371 -235.83 Z"
                        bx:shape="rect -131.26 -235.83 391.169 672.189 43.889 25.716 45.343 30.078 1@cbba7133" />
                    <rect x="-68.447" y="-85.396" width="280.938" height="279.686" style="fill: rgb(255, 255, 255);" />
                    <ellipse style="fill: rgb(255, 255, 255);" cx="-32.824" cy="228.82" rx="15" ry="15" />
                    <path style="fill: none; stroke-width: 2px; stroke: rgb(255, 255, 255); stroke-linecap: round;"
                        d="M 144.898 224.042 C 167.22 224.042 190.809 223.707 212.578 223.707" />
                    <path style="fill: none; stroke-width: 2px; stroke: rgb(255, 255, 255); stroke-linecap: round;"
                        d="M 144.9 233.488 C 167.222 233.488 190.811 233.153 212.58 233.153" />
                    <g transform="matrix(1, 0, 0, 1, 16.370024, 11.408523)">
                        <ellipse style="fill: rgb(255, 255, 255);" cx="-69.893" cy="297.449" rx="22" ry="22" />
                    </g>
                    <rect x="144.691" y="321.83" width="87" height="24"
                        style="stroke: rgb(255, 255, 255); stroke-linecap: round; fill: rgb(255, 255, 255); stroke-linejoin: round;"
                        rx="3.336" ry="3.336" />
                    <rect x="177.441" y="290.2" width="24" height="87"
                        style="fill: rgb(255, 255, 255); stroke-linecap: round; stroke: rgb(255, 255, 255); stroke-miterlimit: 7.04; stroke-linejoin: round;"
                        rx="1.877" ry="1.877" />
                    <g transform="matrix(1, 0, 0, 1, -47.400826, 97.577377)">
                        <rect x="49.924" y="289.833" width="60.868" height="11.97"
                            style="fill-opacity: 0.22; fill-rule: nonzero; stroke: rgb(255, 255, 255); stroke-width: 3px; fill: none;"
                            rx="7.764" ry="7.764" />
                        <rect x="-31.892" y="289.674" width="60.868" height="11.97"
                            style="fill-opacity: 0.22; fill-rule: nonzero; stroke: rgb(255, 255, 255); stroke-width: 3px; fill: none;"
                            rx="7.764" ry="7.764" />
                    </g>
                </svg>

            </a>

            <a href="{{ url('coaches') }}" title="Treinadores" class="flex size-12 mx-1 shrink-0 items-center justify-center rounded-full bg-[#F8F8F8]/10 sm:size-16 hover:opacity-65 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" xmlns:bx="https://boxy-svg.com" width="40px" height="40px">
                    <defs>
                        <bx:export>
                            <bx:file format="svg" path="Sem título.svg" />
                            <bx:file format="html" path="Sem título.html" />
                        </bx:export>
                    </defs>
                    <path style="fill: rgb(200, 200, 200);" d="M 421.705 333.054 L 346.274 353.484 C 346.274 353.484 369.846 355.342 397.191 366.486 C 397.191 366.486 440.38 379.918 496.011 366.915 C 496.011 366.915 466.02 342.341 421.705 333.054 Z" />
                    <path style="stroke: rgb(255, 255, 255); stroke-width: 6px; fill: none;" d="M 400.862 302.503 C 400.862 302.503 337.761 267.118 191.828 331.529 C 170.433 338.931 57.616 375.072 3.978 333.983 C 3.978 333.983 -23.158 94.118 190.497 94.404 L 190.497 94.386 C 190.739 94.386 190.972 94.396 191.212 94.396 C 191.667 94.4 192.099 94.381 192.555 94.386 L 192.555 94.419 C 363.555 95.567 395.281 237.755 400.862 302.503 Z" />
                    <g transform="matrix(1.276109, 0, 0, 1.256868, -85.257996, -41.33633)">
                        <path d="M208.295,113.202l-3.802-4.525c-32.675,27.434-51.199,70.552-53.574,124.694 c-1.782,40.684,6.221,73.747,6.304,74.077l5.737-1.413C162.647,304.753,132.263,177.041,208.295,113.202z" />
                        <path style="stroke-width: 3.94792px; stroke: rgb(255, 255, 255); fill: rgb(255, 255, 255);" d="M 287.666 135.08 C 259.027 112.864 231.759 107.281 230.612 107.055 C 230.612 107.055 210.916 105.994 203.23 110.961 C 132.619 156.598 139.148 295.957 155.293 307.14 C 174.116 320.178 350.968 266.104 350.968 266.104 C 346.701 196.297 314.075 155.567 287.666 135.08 Z" />
                    </g>
                    <path style="stroke: rgb(255, 255, 255); stroke-width: 5px; fill: rgb(255, 255, 255);" d="M 306.671 294.978 C 259.528 303.336 77.548 353.484 77.548 353.484 C 77.548 353.484 124.692 427.776 215.211 428.707 C 215.211 428.707 247.269 433.351 301.956 385.991 C 301.956 385.991 411.175 309.296 484.805 361.224 L 400.959 297.764 C 400.959 297.763 353.814 286.62 306.671 294.978 Z M 484.805 361.223 L 490.533 365.558 C 488.654 364.013 486.738 362.584 484.805 361.223 Z" />
                    <path style="fill: rgb(255, 255, 255);" d="M 190.696 71.168 C 177.676 71.168 167.123 81.354 167.123 93.921 C 167.123 106.486 214.266 106.486 214.266 93.921 C 214.268 81.354 203.713 71.168 190.696 71.168 Z" />
                    <g transform="matrix(0.95515, 0, 0, 1, 8.703419, 1.908997)">
                        <ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: rgb(12 74 110);" cx="227.453" cy="213.319" rx="58.011" ry="56.236" />
                        <ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: rgb(255, 255, 255);" cx="228.378" cy="211.297" rx="22.76" ry="22.508" />
                        <ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: rgb(12 74 110);" cx="228.024" cy="211.225" rx="14.79" ry="14.665" />
                        <rect x="244.597" y="202.623" width="59.208" height="17.206" style="fill: rgb(255, 255, 255);" />
                        <rect x="151.482" y="202.876" width="59.208" height="17.206" style="fill: rgb(255, 255, 255);" />
                    </g>
                </svg>
            </a>

        </div>

        <div class="w-1/3 block flex items-center justify-end">
            @if (auth()->check())
            <div class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse relative" x-data="{ open: false }">
                <button @click="open = !open" type="button" class="inline-flex items-center justify-center px-1 py-1 rounded-full cursor-pointer hover:bg-gray-100 transition-all">
                    <img src="{{ url(auth()->user()->image) }}" alt="Profile Picture" class="w-12 h-12 rounded-full object-cover">
                </button>

                <!-- Dropdown -->
                <div x-show="open" x-transition x-cloak @click.outside="open = false" class="absolute right-0 top-16 w-44 bg-white rounded-lg shadow-lg z-10">
                    <p class="px-3 py-2">{{ auth()->user()->name }}</p>
                    <ul class="pt-2 font-medium" role="none">
                        <li class="h-12">
                            <a href="{{ url('profile') }}" class="flex items-center justify-center block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                                <div class="inline-flex items-center">
                                    <svg viewBox="-6.2 -6.2 32.40 32.40" width="30px" height="30px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <title>profile [#1336]</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs> </defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Dribbble-Light-Preview" transform="translate(-380.000000, -2159.000000)" fill="#000000">
                                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                                        <path d="M334,2011 C337.785,2011 340.958,2013.214 341.784,2017 L326.216,2017 C327.042,2013.214 330.215,2011 334,2011 M330,2005 C330,2002.794 331.794,2001 334,2001 C336.206,2001 338,2002.794 338,2005 C338,2007.206 336.206,2009 334,2009 C331.794,2009 330,2007.206 330,2005 M337.758,2009.673 C339.124,2008.574 340,2006.89 340,2005 C340,2001.686 337.314,1999 334,1999 C330.686,1999 328,2001.686 328,2005 C328,2006.89 328.876,2008.574 330.242,2009.673 C326.583,2011.048 324,2014.445 324,2019 L344,2019 C344,2014.445 341.417,2011.048 337.758,2009.673" id="profile-[#1336]"> </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="ml-2">Seu perfil</p>
                                </div>
                            </a>
                        </li>
                        <li class="h-12">
                            <form method="POST" action="{{ route('logout') }}" class="w-full h-12">
                                @csrf

                                <button type="submit" class="flex items-center justify-center w-full h-12 block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                                    <div class="inline-flex items-center">
                                        <svg viewBox="0 0 24 24" width="30px" height="30px" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.25 5.25L9 4.5H18L18.75 5.25V18.75L18 19.5H9L8.25 18.75V16.5H9.75V18H17.25V6H9.75V7.5H8.25V5.25Z" fill="#000000"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.06068 12.7499L14.25 12.7499L14.25 11.2499L7.06068 11.2499L8.78035 9.53027L7.71969 8.46961L4.18936 11.9999L7.71969 15.5303L8.78035 14.4696L7.06068 12.7499Z" fill="#000000"></path>
                                            </g>
                                        </svg>
                                        <p class="ml-2">Sair</p>
                                    </div>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            @else
            <div class="text-sm">
                <a href="{{ url('login') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4">
                    Log in
                </a>
                <a href="{{ url('register') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4">
                    Registrar
                </a>
            </div>
            @endif
        </div>

    </nav>



    <div class="h-full flex">
        @yield('content')
    </div>
</body>

</html>
