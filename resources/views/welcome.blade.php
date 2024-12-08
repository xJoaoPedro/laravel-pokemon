<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
</head>

<body class="font-sans antialiased">
    <div class="bg-gray-50 text-black/50">
        <img id="background" class="absolute -left-20 top-0 max-w-[600px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
        <div class="relative h-screen flex flex-col items-center selection:bg-[#FF2D20] selection:text-white">
            <header class="w-3/4 h-1/6 grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                <div class="flex lg:justify-center lg:col-start-2">
                    <svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.985 511.985" xml:space="preserve" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path style="fill:#ED5564;" d="M491.859,156.348c-12.891-30.483-31.342-57.865-54.842-81.372 c-23.516-23.5-50.904-41.96-81.373-54.85c-31.56-13.351-65.091-20.125-99.652-20.125c-34.554,0-68.083,6.773-99.645,20.125 c-30.483,12.89-57.865,31.351-81.373,54.85c-23.499,23.507-41.959,50.889-54.85,81.372C6.774,187.91,0,221.44,0,255.993 c0,34.56,6.773,68.091,20.125,99.652c12.89,30.469,31.351,57.857,54.85,81.357c23.507,23.516,50.889,41.967,81.373,54.857 c31.562,13.344,65.091,20.125,99.645,20.125c34.561,0,68.092-6.781,99.652-20.125c30.469-12.891,57.857-31.342,81.373-54.857 c23.5-23.5,41.951-50.889,54.842-81.357c13.344-31.561,20.125-65.092,20.125-99.652C511.984,221.44,505.203,187.91,491.859,156.348z "></path>
                            <path style="fill:#E6E9ED;" d="M0.102,263.18c0.875,32.014,7.593,63.092,20.023,92.465c12.89,30.469,31.351,57.857,54.85,81.357 c23.507,23.516,50.889,41.967,81.373,54.857c31.562,13.344,65.091,20.125,99.645,20.125c34.561,0,68.092-6.781,99.652-20.125 c30.469-12.891,57.857-31.342,81.373-54.857c23.5-23.5,41.951-50.889,54.842-81.357c12.438-29.373,19.156-60.451,20.031-92.465 H0.102z"></path>
                            <path style="fill:#434A54;" d="M510.765,281.211c0.812-8.344,1.219-16.75,1.219-25.218c0-9.516-0.516-18.953-1.531-28.289 c-12.719,1.961-30.984,4.516-53.998,7.054c-43.688,4.82-113.904,10.57-200.463,10.57c-86.552,0-156.776-5.75-200.455-10.57 c-23.022-2.539-41.28-5.093-53.998-7.054C0.516,237.04,0,246.478,0,255.993c0,8.468,0.406,16.875,1.219,25.218 c41.53,6.25,133.027,17.436,254.773,17.436S469.234,287.461,510.765,281.211z"></path>
                            <path style="fill:#E6E9ED;" d="M309.334,266.656c0,29.459-23.891,53.334-53.342,53.334c-29.452,0-53.334-23.875-53.334-53.334 c0-29.453,23.882-53.327,53.334-53.327C285.443,213.33,309.334,237.204,309.334,266.656z"></path>
                            <path style="fill:#434A54;" d="M255.992,170.66c-52.936,0-95.997,43.069-95.997,95.997s43.062,95.988,95.997,95.988 s95.996-43.061,95.996-95.988C351.988,213.729,308.928,170.66,255.992,170.66z M255.992,309.335 c-23.522,0-42.663-19.156-42.663-42.678c0-23.523,19.14-42.663,42.663-42.663c23.531,0,42.654,19.14,42.654,42.663 C298.646,290.178,279.523,309.335,255.992,309.335z"></path>
                            <path style="opacity:0.2;fill:#FFFFFF;enable-background:new ;" d="M491.859,156.348c-12.891-30.483-31.342-57.865-54.842-81.372 c-23.516-23.5-50.904-41.96-81.373-54.85c-31.56-13.351-65.091-20.125-99.652-20.125c-3.57,0-7.125,0.078-10.664,0.219 c30.789,1.25,60.662,7.93,88.974,19.906c30.498,12.89,57.873,31.351,81.371,54.85c23.5,23.507,41.969,50.889,54.857,81.372 c13.359,31.562,20.109,65.092,20.109,99.646c0,34.56-6.75,68.091-20.109,99.652c-12.889,30.469-31.357,57.857-54.857,81.357 c-23.498,23.516-50.873,41.967-81.371,54.857c-28.312,11.969-58.186,18.656-88.974,19.906c3.539,0.141,7.093,0.219,10.664,0.219 c34.561,0,68.092-6.781,99.652-20.125c30.469-12.891,57.857-31.342,81.373-54.857c23.5-23.5,41.951-50.889,54.842-81.357 c13.344-31.561,20.125-65.092,20.125-99.652C511.984,221.44,505.203,187.91,491.859,156.348z"></path>
                            <path style="opacity:0.1;enable-background:new ;" d="M20.125,355.645c12.89,30.469,31.351,57.857,54.85,81.357 c23.507,23.516,50.889,41.967,81.373,54.857c31.562,13.344,65.091,20.125,99.645,20.125c3.57,0,7.125-0.078,10.664-0.219 c-30.789-1.25-60.67-7.938-88.982-19.906c-30.483-12.891-57.857-31.342-81.364-54.857c-23.507-23.5-41.96-50.889-54.858-81.357 c-13.352-31.56-20.117-65.091-20.117-99.652c0-34.554,6.765-68.084,20.116-99.646C54.35,125.864,72.803,98.481,96.31,74.983 c23.507-23.507,50.881-41.968,81.364-54.858c28.312-11.976,58.193-18.656,88.982-19.906c-3.539-0.14-7.094-0.218-10.664-0.218 c-34.554,0-68.083,6.773-99.645,20.125c-30.483,12.89-57.865,31.351-81.373,54.858c-23.499,23.499-41.959,50.881-54.85,81.364 C6.774,187.91,0,221.44,0,255.993C0,290.553,6.774,324.085,20.125,355.645z"></path>
                        </g>
                    </svg>
                </div>
                @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Dashboard
                    </a>
                    @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Log in
                    </a>

                    @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Registrar
                    </a>
                    @endif
                    @endauth
                </nav>
                @endif
            </header>

            <main class="w-3/4 h-4/6 flex justify-center items-center relative">
                <div class="w-full h-full flex p-10">

                    <a
                        href="{{ url('pokemon') }}"
                        id="docs-card"
                        style="background-image: url('https://wallpapers.com/images/high/pokemon-pictures-u0ycff1698mf8i1a.webp');"
                        class="bg-cover bg-center w-1/2 m-5 overflow-hidden rounded-lg shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 hover:ring-4 focus:outline-none focus-visible:ring-[#FF2D20]">
                        <div class="relative p-6 h-full flex items-center gap-6 bg-gradient-to-t from-gray-100 from-15% lg:items-end">
                            <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-371.587 -299.544 871.587 799.544" xmlns:bx="https://boxy-svg.com" width="50px" height="50px"><defs><bx:export><bx:file format="svg" path="pokedex.svg"/><bx:file format="html" path="pokedex.html"/></bx:export></defs><image href="data:image/png;base64,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iIAIdAsCEkC6xW3WlxQBERABERCB1hGg0MGawOfJvqAVw7gahQVVAkjrOGpvEehIAq6owXNQ6nDFDgocdVhqPF5bmu/I61PbIiACIiACIiACIiACIiACInCwCUgAOdh3QOcXAREQAREQgQwnUJtMWjWukfkFGhtRM/yydXki0C0JuGNUYa265e3XlxYBERABERABERABERABEWhCQAJIEyBaFAEREAEREAER+CgBLyyqzBvAMDqucfWje2hJBERABERABERABERABERABERABERABDKPgF4Oy7x7oisSAREQAREQAREQAREQAREQAREQAREQAREQAREQAREQLM6ExgAAQABJREFUARFoIwEJIG0EqMNFQAREQAREQAREQAREQAREQAREQAREQAREQAREQAREQAQyj4AEkMy7J7oiERABERABERABERABERABERABERABERABERABERABERCBNhKQANJGgDpcBERABERABERABERABERABERABERABERABERABERABEQg8whIAMm8e6IrEgEREAEREAEREAEREAEREAEREAEREAEREAEREAEREAERaCMBCSBtBKjDRUAEREAEREAEREAEREAEREAEREAEREAEREAEREAEREAEMo+ABJDMuye6IhEQAREQAREQAREQAREQAREQAREQAREQAREQAREQAREQgTYS8LfxeB0uAiIgAiIgAiIgAp2OQBJXzKoiAiIgAiIgAiLQvgQ8Dc250/ZtXa2JgAiIgAiIgAiIQOsISABpHS/tLQIiIAIiIAIi0EkJuIIH3V99qJzKONNJb6YuWwREQAREIGMJ8N/beEN1L1L/3rokNBUBERABERABETjQBCSAHGjiOp8IiIAIiIAIiMABIUADDA0ubk0JHx6rhu/HzmTS9mAaRpVR5oDcDp1EBERABESgmxDIxb+sJR6PFeFVAy/+naUYkkDlv8vuv83dBIW+pgiIgAiIgAiIQAYQkACSATdBlyACIiACIiACItC+BGho4Y8cihs0vOyCyWVWIm6rk3HbAfHj/7N3J1CWnmWdwJ9bt3qp6qQ7naQbknQ6C6STJt2kExISRBZFcHSUTVEGdVRU1HMQAYPxeFwPjM6AMwZGHHEkKsPAICOoox6WBBA8smkIhKSBgFlJCGbvvWu587y3upJK6HTS6druU7+Pc/vWeu/3/J731g3f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ZNYoPRABAgQIECCwVAXyJNpYNboq1q9fF20pLNcDWaojQd0ECBAYDIG29FULO45atSqGlw3n8o2mLg5G5+wlAQIECBAgcLgCApDDFfPzBAgQIECAAIGDCLTQoy0l0m4CkIMA+RIBAgQILCqBdt2qdu0P4ceiaoudIUCAAAECBGZZIBepthEgQIAAAQIECBAgQIAAAQIECBAgQIAAAQIEagkIQGr1UzUECBAgQIAAAQIECBAgQIAAAQIECBAgQIBACghADAMCBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoB0y5OcAAEAASURBVJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQICECMAQIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCcgACkXEsVRIAAAQIECBAgQIAAAQIECBAgQIAAAQIECAhAjAECBAgQIECAAAECBAgQIECAAAECBAgQIECgnIAApFxLFUSAAAECBAgQIECAAAECBAgQIECAAAECBAgIQIwBAgQIECBAgAABAgQIECBAgAABAgQIECBAoJyAAKRcSxVEgAABAgQIECBAgAABAgQIECBAgAABAgQIDCMgQIAAAQIECBA4coGhoU50u928DUWn0znyB/QIBAgQIEBgDgXae1V73/KeNYfIHpoAAQIECBBYcAEByIK3wA4QIECAAAECFQT27t0bd99zT4yMjMTkxGSFktRAgAABAlUFMqcf6gzFzl27Ynx8PEOQqoWqiwABAgQIEFjqAgKQpT4C1E+AAAECBAg8ZoHps2bbGbSbzzorTjzhhP7ZtL1eL2LmwaT81OczmHkYD14fD7wgvB68Hhbo9dCediID+3XHr+vfT7+nPTA4fUSAAAECBAgQGHwBAcjg91AFBAgQIECAwAIKtLCjBSCbNp0R/eBjAffFUxMgQIAAgcMVaMHHxMSEpbAOF87PEyBAgAABAgMhIAAZiDbZSQIECBAgQGAQBJw9Owhdso8ECBAgQIAAAQIECBAgsFQEhpZKoeokQIAAAQIECMyXwENngvi8rfHzwMaDxwOjIb5l5pTxYXwYHw8IzPfr4YFn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gAABAn0oIADpw4NqlwgQIECAAAECBAgQIECAAAECBAgQIECAwKALCEAG/RNg/wkQIECAAAECBAgQIECAAAECBAgQIECAQB8KCED68KDaJQIECBAgQIAAAQIECBAgQIAAAQIECBAgMOgCApBB/wTYfwIECBAgQIAAAQIECBAgQIAAAQIECBAg0IcCApA+PKh2iQABAgQIECBAgAABAgQIECBAgAABAgQIDLqAAGTQPwH2nwABAgQIECBAgAABAgQIECBAgAABAgQI9KGAAKQPD6pdIkCAAAECBAgQIECAAAECBAgQIECAAAECgy4gABn0T4D9J0CAAAECBAgQIECAAAECBAgQIECAAAECfSggAOnDg2qXCBAgQIAAAQIECBAgQIAAAQIECBAgQIDAoAsIQAb9E2D/CRAgQIAAAQIECBAgQIAAAQIECBAgQIBAHwoIQPrwoNolAgQIECBAgAABAgQIECBAgAABAgQIECAw6AICkEH/BNh/AgQIECBAgAABAgQIECBAgAABAgQIECDQhwICkD48qHaJAAECBAgQIECAAAECBAgQIECAAAECBAgMuoAAZNA/AfafAAECBAgQIECAAAECBAgQIECAAAECBAj0oYAApA8Pql0iQIAAAQIECBAgQIAAAQIECBAgQIAAAQKDLiAAGfRPgP0nQIAAAQIECBAgQIAAAQIECBAgQIAAAQJ9KCAA6cODapcIECBAgAABAgQIECBAYJUE5udXaUM2Q4AAAQIECBAgsN4CQ+v9ht6PAAECBAgQIECAAAECBAj0gsB8hB+1er3UarUo7nz89/xUPZNP5J3FmyorWePHWZaF8iy8r58ECBAgQIAAAQKnFxCAnN7GEgIECBAgQIAAAQIECBAYYIFavVaOHjlcduzcUYaGms9LLIYczz+xDvcibMngo9VqlcOHDpapqalSbzRKfbGFytJwZh1K4y0IECBAgAABAj0hIADpicOkkAQIECBAgAABAgQIECCwngLZ+mOo2SzPPvlkGT92rDSHR+Ltz3HMkAHI3Fw5fuRoBCFzZSQePxalen2tUd0/x6Vbz8PjvQgQIECAAAECyxIQgCyLyUoECBAgQIAAAQIECBAgMJACETIcPXy4annRDfufrUAa0RqlEbcZyeyPUOab6s2yvdTLZNw30Gc3HCVlIECAAAECBLpFQADSLUdCOQgQIECA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MUEyHIk+K9qL3BIgQIAAAQIDKpDBRg50PjI8XIZHRp5TyAsr2l1u6ubqORZ3CBAgQIAAgTUSEICsEazNEiBAgACBfhXIiot2q5DcxxzU1ESAAAECBAgQOJ1A+9yhHXi0b0+3vucJECBAgAABAqslIABZLUnbIUCAAAECAyywNBAZYAa7ToAAAQIECJxCQOBxChRPESBAgAABAusiMLQu7+JNCBAgQIAAgb4WULHR14fXzhEgQIAAAQIECBAgQIAAgZ4U0GdFTx42hSZAgAABAgQIECBAgAABAgQIECBAgAABAgQ6CQhAOulYRoAAAQIECBAgQIAAAQIECBAgQIAAAQIECPSkgACkJw+bQhMgQIAAAQIECBAgQIAAAQIECBAgQIAAAQKdBAQgnXQsI0CAAAECBAgQIECAAAECBAgQIECAAAECBHpSQADSk4dNoQkQIECAAAECBAgQIECAAAECBAgQIECAAIFOAgKQTjqWESBAgAABAgQIECBAgAABAgQIECBAgAABAj0pIADpycOm0AQIECBAgAABAgQIECBAgAABAgQIECBAgEAnAQFIJx3LCBAgQIAAAQIECBAgQIAAAQIECBAgQIAAgZ4UEID05GFTaAIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCTgACkk45lBAgQIECAAAECBAgQIECAAAECBAgQIECAQE8KCEB68rApNAECBAgQIECAAAECBAgQIECAAAECBAgQINBJQADSSccyAgQIECBAgAABAgQIECBAgAABAgQIECBAoCcFBCA9edgUmgABAgQIECBAgAABAgQIECBAgAABAgQIEOgkIADppGMZAQIECBAgQIAAAQIECBAgQIAAAQIECBAg0JMCApCePGwKTYAAAQIECBAgQIAAAQIECBAgQIAAAQIECHQSEIB00rGMAAECBAgQIECAAAECBAgQIECAAAECBAgQ6EkBAUhPHjaFJkCAAAECBAgQIECAAAECBAgQIECAAAECBDoJCEA66VhGgAABAgQIECBAgAABAgQIECBAgAABAgQI9KSAAKQnD5tCEyBAgAABAgQIECBAgAABAgQIECBAgAABAp0EBCCddCwjQIAAAQIECBAgQIAAAQIECBAgQIAAAQIEelJAANKTh02hCRAgQIAAAQIECBAgQIAAAQIECBAgQIAAgU4CApBOOpYRIECAAAECBAgQIECAAAECBAgQIECAAAECPSkgAOnJw6bQBAgQIECAAAECBAgQIECAAAECBAgQIECAQCcBAUgnHcsIECBAgAABAgQIECBAgAABAgQIECBAgACBnhQQgPTkYVNoAgQIECBAgAABAgQIECBAgAABAgQIECBAoJOAAKSTjmUECBAgQIAAAQIECBAgQIAAAQIECBAgQIBATwoIQHrysCk0AQIECBAgQIAAAQIECBAgQIAAAQIECBAg0ElAANJJxzICBAgQIECAAAECBAgQIECAAAECBAgQIECgJwUEID152BSaAAECBAgQIECAAAECBAgQIECAAAECBAgQ6CQgAOmkYxkBAgQIECBAgAABAgQIECBAgAABAgQIECDQkwICkJ48bApNgAABAgQIECBAgAABAgQIECBAgAABAgQIdBIQgHTSsYwAAQIECBAgQIAAAQIECBAgQIAAAQIECBDoSQEBSE8eNoUmQIAAAQIECBAgQIAAAQIECBAgQIAAAQIEOgkIQDrpWEaAAAECBAgQIECAAAECBAgQIECAAAECBAj0pIAApCcPm0ITIECAAAECBAgQIECAAAECBAgQIECAAAECnQQEIJ10LCNAgAABAgQIECBAgAABAgQIECBAgAABAgR6UkAA0pOHTaEJECBAgAABAgQIECBAgAABAgQIECBAgACBTgICkE46lhEgQIAAAQIECBAgQIAAAQIECBAgQIAAAQI9KSAA6cnDptAECBAgQIAAAQIECBAgQIAAAQIECBAgQIBAJwEBSCcdywgQIECAAAECBAgQIECAAAECBAgQIECAAIGeFBCA9ORhU2gCBAgQIECAAAECBAgQIECAAAECBAgQIECgk4AApJOOZQQIECBAgAABAgQIECBAgAABAgQIECBAgEBPCghAevKwKTQBAgQIECBAgAABAgQIECBAgAABAgQIECDQSUAA0knHMgIECBAgQIAAAQIECBAgQIAAAQIECBAgQKAnBQQgPXnYFJoAAQIECBAgQIAAAQIECBAgQIAAAQIECBDoJCAA6aRjGQECBAgQIECAAAECBAgQIECAAAECBAgQINCTAgKQnjxsCk2AAAECBAgQIECAAAECBAgQIECAAAECBAh0EhCAdNKxjAABAgQIECBAgAABAgQIECBAgAABAgQIEOhJAQFITx42hSZAgAABAgQIECBAgAABAgQIECBAgAABAgQ6CQhAOulYRoAAAQIECBAgQIAAAQIECBAgQIAAAQIECPSkgACkJw+bQhMgQIAAAQIECBAgQIAAAQIECBAgQIAAAQKdBAQgnXQsI0CAAAECBAgQIECAAAECBAgQIECAAAECBHpSQADSk4dNoQkQIECAAAECBAgQIECAAAECBAgQIECAAIFOAgKQTjqWESBAgAABAgQIECBAgAABAgQIECBAgAABAj0pIADpycOm0AQIECBAgAABAgQIECBAgAABAgQIECBAgEAnAQFIJx3LCBAgQIAAAQIECBAgQIAAAQIECBAgQIAAgZ4UEID05GFTaAIECBAgQIAAAQIECBAgQIAAAQIECBAgQKCTgACkk45lBAgQIECAAAECBAgQIECAAAECBAgQIECAQE8KCEB68rApNAECBAgQIECAAAECBAgQIECAAAECBAgQINBJQADSSccyAgQIECBAgAABAgQIECBAgAABAgQIECBAoCcFBCA9edgUmgABAgQIECBAgAABAgQIECBAgAABAgQIEOgkIADppGMZAQIECBAgQIAAAQIECBAgQIAAAQIECBAg0JMCApCePGwKTYAAAQIECBAgQIAAAQIECBAgQIAAAQIECHQSEIB00rGMAAECBAgQIECAAAECBAgQIECAAAECBAgQ6EkBAUhPHjaFJkCAAAECBAgQIECAAAECBAgQIECAAAECBDoJCEA66VhGgAABAgQIECBAgAABAgQIECBAgAABAgQI9KSAAKQnD5tCEyBAgAABAgQIECBAgAABAgQIECBAgAABAp0EBCCddCwjQIAAAQIECBAgQIAAAQIECBAgQIAAAQIEelJAANKTh02hCRAgQIAAAQIECBAgQIAAAQIECBAgQIAAgU4CApBOOpYRIECAAAECBAgQIECAAAECBAgQIECAAAECPSkgAOnJw6bQBAgQIECAAAECBAgQIECAAAECBAgQIECAQCcBAUgnHcsIECBAgAABAgQIECBAgAABAgQIECBAgACBnhQQgPTkYVNoAgQIECBAgAABAgQIECBAgAABAgQIECBAoJPA/w/clTqzK9pc6wAAAABJRU5ErkJggg==" width="1041" height="780.75" x="-456.29" y="-290.15" style="transform-box: fill-box; transform-origin: 50% 50%; opacity: 0.34; pointer-events: none; visibility: hidden;"><title>original-e7509c33cfcda0d2f3a6f6892f7b85fb</title></image><g><ellipse style="fill: rgb(255, 0, 0);" cx="-63.871" cy="-182.33" rx="30.5" ry="30.5"/><ellipse style="fill: none; stroke-width: 3px; stroke: rgb(255, 0, 0);" cx="-63.9" cy="-182.3" rx="37.5" ry="37.5"/><ellipse style="fill: rgb(255, 0, 0);" cx="7" cy="-210" rx="12" ry="12"/><ellipse style="fill: rgb(255, 0, 0);" cx="43" cy="-210" rx="12" ry="12"/><path d="M 159.488 -110.262 C 180.268 -110.793 207.571 -109.791 219.867 -109.824 C 225.826 -109.84 231.655 -108.97 233.905 -106.199 C 236.013 -103.603 237.517 -101.641 237.437 -97.804 C 237.363 -94.221 238.609 250.093 236.498 251.864 C 235.967 252.31 233.566 258.469 228.608 261.037 C 220.367 261.288 -43.943 260.487 -49.053 261.027 C -53.429 258.613 -86.131 224.791 -90.239 219.081 C -91.905 214.424 -91.24 -76.043 -90.867 -90.219 C -90.742 -101.309 -87.758 -109.674 -79.063 -110.239 C -56.527 -111.702 141.841 -109.811 159.488 -110.262 Z" style="fill: none; stroke: rgb(255, 0, 0); stroke-width: 4px;"/></g><path style="fill: none; stroke: rgb(255, 0, 0); stroke-linejoin: round; stroke-width: 8px;" d="M -87.371 -235.83 H 234.193 A 25.716 25.716 0 0 1 259.909 -210.114 V 391.016 A 45.343 45.343 0 0 1 214.566 436.359 H -101.182 A 30.078 30.078 0 0 1 -131.26 406.281 V -191.941 A 43.889 43.889 0 0 1 -87.371 -235.83 Z" bx:shape="rect -131.26 -235.83 391.169 672.189 43.889 25.716 45.343 30.078 1@cbba7133"/><rect x="-68.447" y="-85.396" width="280.938" height="279.686" style="fill: rgb(255, 0, 0);"/><ellipse style="fill: rgb(255, 0, 0);" cx="-32.824" cy="228.82" rx="15" ry="15"/><path style="fill: none; stroke-width: 2px; stroke: rgb(255, 0, 0); stroke-linecap: round;" d="M 144.898 224.042 C 167.22 224.042 190.809 223.707 212.578 223.707"/><path style="fill: none; stroke-width: 2px; stroke: rgb(255, 0, 0); stroke-linecap: round;" d="M 144.9 233.488 C 167.222 233.488 190.811 233.153 212.58 233.153"/><g transform="matrix(1, 0, 0, 1, 16.370024, 11.408523)"><ellipse style="fill: rgb(255, 0, 0);" cx="-69.893" cy="297.449" rx="22" ry="22"/></g><rect x="144.691" y="321.83" width="87" height="24" style="stroke: rgb(255, 0, 0); stroke-linecap: round; fill: rgb(255, 0, 0); stroke-linejoin: round;" rx="3.336" ry="3.336"/><rect x="177.441" y="290.2" width="24" height="87" style="fill: rgb(255, 0, 0); stroke-linecap: round; stroke: rgb(255, 0, 0); stroke-miterlimit: 7.04; stroke-linejoin: round;" rx="1.877" ry="1.877"/><g transform="matrix(1, 0, 0, 1, -47.400826, 97.577377)"><rect x="49.924" y="289.833" width="60.868" height="11.97" style="fill-opacity: 0.22; fill-rule: nonzero; stroke: rgb(255, 0, 0); stroke-width: 3px; fill: none;" rx="7.764" ry="7.764"/><rect x="-31.892" y="289.674" width="60.868" height="11.97" style="fill-opacity: 0.22; fill-rule: nonzero; stroke: rgb(255, 0, 0); stroke-width: 3px; fill: none;" rx="7.764" ry="7.764"/></g></svg>

                                </div>

                                <div class="pt-3 sm:pt-5 lg:pt-0">
                                    <h2 class="text-xl font-semibold text-black">Pokemon</h2>

                                    <p class="mt-4 text-sm/relaxed md:text-xs">
                                        Pokémon é um mundo vasto e maravilhoso. Nosso sistema CRUD
                                        Pokémon is an exciting and vast world. Our CRUD system allows users to easily manage their Pokémon collection, simplifying the way to create, view details, update or delete their Pokemon from the system.
                                    </p>
                                </div>
                            </div>

                            <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </div>
                    </a>


                    <div class="w-1/2 h-full p-5 flex flex-col justify-between">
                        <a
                            href="{{ url('coaches') }}"
                            style="background-image: url('https://static.fandomspot.com/images/10/21066/00-featured-trainer-ash-ketchum-pokemon-anime-screenshot.jpg');"
                            class="flex h-3/5 items-end bg-cover bg-end rounded-lg bg-white shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none hover:ring-4 focus-visible:ring-[#FF2D20]">
                            <div class="relative p-6 h-full w-full flex items-center justify-between gap-6 rounded-lg bg-gradient-to-t from-gray-100 from-35% lg:items-end">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" xmlns:bx="https://boxy-svg.com" width="40px" height="40px"><defs><bx:export><bx:file format="svg" path="Sem título.svg"/><bx:file format="html" path="Sem título.html"/></bx:export></defs><path style="fill: rgb(109, 64, 68);" d="M 421.705 333.054 L 346.274 353.484 C 346.274 353.484 369.846 355.342 397.191 366.486 C 397.191 366.486 440.38 379.918 496.011 366.915 C 496.011 366.915 466.02 342.341 421.705 333.054 Z"/><path style="stroke: red; stroke-width: 6px; fill: none;" d="M 400.862 302.503 C 400.862 302.503 337.761 267.118 191.828 331.529 C 170.433 338.931 57.616 375.072 3.978 333.983 C 3.978 333.983 -23.158 94.118 190.497 94.404 L 190.497 94.386 C 190.739 94.386 190.972 94.396 191.212 94.396 C 191.667 94.4 192.099 94.381 192.555 94.386 L 192.555 94.419 C 363.555 95.567 395.281 237.755 400.862 302.503 Z"/><g transform="matrix(1.276109, 0, 0, 1.256868, -85.257996, -41.33633)"><path style="fill: red" d="M208.295,113.202l-3.802-4.525c-32.675,27.434-51.199,70.552-53.574,124.694 c-1.782,40.684,6.221,73.747,6.304,74.077l5.737-1.413C162.647,304.753,132.263,177.041,208.295,113.202z"/><path style="stroke-width: 3.94792px; stroke: red; fill: red;" d="M 287.666 135.08 C 259.027 112.864 231.759 107.281 230.612 107.055 C 230.612 107.055 210.916 105.994 203.23 110.961 C 132.619 156.598 139.148 295.957 155.293 307.14 C 174.116 320.178 350.968 266.104 350.968 266.104 C 346.701 196.297 314.075 155.567 287.666 135.08 Z"/></g><path style="stroke: red; stroke-width: 5px; fill: red;" d="M 306.671 294.978 C 259.528 303.336 77.548 353.484 77.548 353.484 C 77.548 353.484 124.692 427.776 215.211 428.707 C 215.211 428.707 247.269 433.351 301.956 385.991 C 301.956 385.991 411.175 309.296 484.805 361.224 L 400.959 297.764 C 400.959 297.763 353.814 286.62 306.671 294.978 Z M 484.805 361.223 L 490.533 365.558 C 488.654 364.013 486.738 362.584 484.805 361.223 Z"/><path style="fill: red;" d="M 190.696 71.168 C 177.676 71.168 167.123 81.354 167.123 93.921 C 167.123 106.486 214.266 106.486 214.266 93.921 C 214.268 81.354 203.713 71.168 190.696 71.168 Z"/><g transform="matrix(0.95515, 0, 0, 1, 8.703419, 1.908997)"><ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: rgb(255, 255, 255);" cx="227.453" cy="213.319" rx="58.011" ry="56.236"/><ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: red" cx="228.378" cy="211.297" rx="22.76" ry="22.508"/><ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: rgb(255, 255, 255);" cx="228.024" cy="211.225" rx="14.79" ry="14.665"/><rect x="244.597" y="202.623" width="59.208" height="17.206" style="fill: red"/><rect x="151.482" y="202.876" width="59.208" height="17.206" style="fill: red"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black">Treinadores</h2>

                                    <p class="mt-4 text-sm/relaxed md:text-xs">
                                        Aqui você pode administrar seus treinadores Pokemon, aprimorar as estratégias e montar um time forte para se tornar o verdadeiro Campeão Pokemon.

                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </div>
                        </a>

                        <a
                            href="{{ url('dashboard') }}"
                            style="background-image: url('https://img.freepik.com/free-vector/realistic-technology-particle-background_23-2148409680.jpg?t=st=1733189979~exp=1733193579~hmac=795a62a4235912dc2795b26c2536a48a2949ca5e36b7c46d88f2ed05cce6e6cf&w=1380');"
                            class="flex h-2/6 items-end bg-cover bg-end rounded-lg bg-white shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 hover:ring-4 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20]">
                            <div class="relative p-6 h-full w-full flex items-center justify-between gap-6 rounded-lg bg-gradient-to-t from-gray-100 from-35% lg:items-end">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg width="35px" height="35px" viewBox="0 0 20.00 20.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ff0000" stroke="#ff0000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>profile_favorite [#ff0000]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke-width="0.0002" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -2199.000000)" fill="#ff0000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M22.6446428,2043.90844 C22.4684473,2044.08303 22.3882684,2044.33387 22.4298427,2044.57969 L22.6961156,2046.15397 C22.7792641,2046.64461 22.3942076,2047.04294 21.9586681,2047.04294 C21.8438441,2047.04294 21.7250606,2047.01485 21.6102366,2046.95364 L20.2155204,2046.21015 C20.1066355,2046.15196 19.9868622,2046.12286 19.8670888,2046.12286 C19.7473155,2046.12286 19.628532,2046.15196 19.5186572,2046.21015 L18.1239411,2046.95364 C18.009117,2047.01485 17.8903335,2047.04294 17.7755095,2047.04294 C17.33997,2047.04294 16.9559034,2046.64461 17.038062,2046.15397 L17.3053248,2044.57969 C17.3468991,2044.33387 17.2657304,2044.08303 17.0895348,2043.90844 L15.9610917,2042.79371 C15.5166434,2042.35424 15.7621293,2041.58968 16.375844,2041.49937 L17.9358672,2041.2696 C18.1793734,2041.23449 18.3902141,2041.07896 18.4990989,2040.85521 L19.1959621,2039.42242 C19.333553,2039.14047 19.6008158,2039 19.8670888,2039 C20.1343517,2039 20.4006247,2039.14047 20.5382155,2039.42242 L21.2360686,2040.85521 C21.3449534,2041.07896 21.5548043,2041.23449 21.7993003,2041.2696 L23.3583336,2041.49937 C23.9720483,2041.58968 24.2175342,2042.35424 23.773086,2042.79371 L22.6446428,2043.90844 Z M11.8927571,2050.87478 C11.8779091,2050.87478 11.8650409,2050.87277 11.850193,2050.87277 C11.8363349,2050.87277 11.8224768,2050.87478 11.8086188,2050.87478 C10.7365978,2050.8517 9.87046813,2049.96373 9.87046813,2048.87207 C9.87046813,2047.76536 10.7583747,2046.86535 11.850193,2046.86535 C12.9420113,2046.86535 13.8299179,2047.76536 13.8299179,2048.87207 C13.8299179,2049.96373 12.9637882,2050.8517 11.8927571,2050.87478 L11.8927571,2050.87478 Z M14.8455167,2051.46977 C15.6671025,2050.49852 16.0630475,2049.14699 15.6364168,2047.6851 C15.2434414,2046.33758 14.1248969,2045.27301 12.7717549,2044.96398 C10.1842545,2044.373 7.89074327,2046.35062 7.89074327,2048.87207 C7.89074327,2049.86841 8.26194168,2050.76742 8.85486928,2051.46977 C6.29805462,2052.52732 4.4093971,2054.98354 4.00949268,2057.86319 C3.92634423,2058.46421 4.40048834,2059 4.99836525,2059 C5.48834715,2059 5.90210965,2058.63578 5.97041015,2058.14413 C6.37922334,2055.22736 8.83804161,2052.90257 11.8086188,2052.8815 C11.8224768,2052.8815 11.8363349,2052.88552 11.850193,2052.88552 C11.8650409,2052.88552 11.8779091,2052.8815 11.8927571,2052.8815 C14.8623444,2052.90257 17.3221525,2055.22736 17.7299758,2058.14514 C17.7992662,2058.63578 18.2130287,2059 18.7020207,2059 L18.7030106,2059 C19.3008875,2059 19.7740417,2058.46421 19.6908933,2057.8642 C19.2919787,2054.98354 17.4023314,2052.52932 14.8455167,2051.46977 L14.8455167,2051.46977 Z" id="profile_favorite-[#ff0000]"> </path> </g> </g> </g> </g></svg>
                                        <g fill="#FF2D20">
                                            <path d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="pt-3 sm:pt-5 flex-grow">
                                    <h2 class="text-xl font-semibold text-black">Meu perfil</h2>

                                    <p class="mt-4 text-sm/relaxed md:text-xs">
                                        Visualize e edite as informações do seu perfil.
                                        <!-- Here you can view and edit your profile informations. -->
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <!--

                    <div class="m-10 flex flex-col">

                    </div> -->
            </main>

            <footer class="h-1/6 py-16 text-center text-sm text-black">
                Made with Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </footer>
        </div>
    </div>
</body>

</html>
