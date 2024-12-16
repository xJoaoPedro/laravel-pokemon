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
        <img id="background" class="absolute -left-20 top-0 max-w-[600px]" src="{{ asset('assets/images/background.svg') }}" alt="Laravel background" />
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
                        href="{{ url('/profile') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Seu perfil
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

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-371.587 -299.544 871.587 799.544"
                                        xmlns:bx="https://boxy-svg.com" width="50px" height="50px">
                                        <defs>
                                            <bx:export>
                                                <bx:file format="svg" path="pokedex.svg" />
                                                <bx:file format="html" path="pokedex.html" />
                                            </bx:export>
                                        </defs>
                                        <g>
                                            <ellipse style="fill: rgb(255, 0, 0);" cx="-63.871" cy="-182.33" rx="30.5" ry="30.5" />
                                            <ellipse style="fill: none; stroke-width: 3px; stroke: rgb(255, 0, 0);" cx="-63.9"
                                                cy="-182.3" rx="37.5" ry="37.5" />
                                            <ellipse style="fill: rgb(255, 0, 0);" cx="7" cy="-210" rx="12" ry="12" />
                                            <ellipse style="fill: rgb(255, 0, 0);" cx="43" cy="-210" rx="12" ry="12" />
                                            <path
                                                d="M 159.488 -110.262 C 180.268 -110.793 207.571 -109.791 219.867 -109.824 C 225.826 -109.84 231.655 -108.97 233.905 -106.199 C 236.013 -103.603 237.517 -101.641 237.437 -97.804 C 237.363 -94.221 238.609 250.093 236.498 251.864 C 235.967 252.31 233.566 258.469 228.608 261.037 C 220.367 261.288 -43.943 260.487 -49.053 261.027 C -53.429 258.613 -86.131 224.791 -90.239 219.081 C -91.905 214.424 -91.24 -76.043 -90.867 -90.219 C -90.742 -101.309 -87.758 -109.674 -79.063 -110.239 C -56.527 -111.702 141.841 -109.811 159.488 -110.262 Z"
                                                style="fill: none; stroke: rgb(255, 0, 0); stroke-width: 4px;" />
                                        </g>
                                        <path style="fill: none; stroke: rgb(255, 0, 0); stroke-linejoin: round; stroke-width: 8px;"
                                            d="M -87.371 -235.83 H 234.193 A 25.716 25.716 0 0 1 259.909 -210.114 V 391.016 A 45.343 45.343 0 0 1 214.566 436.359 H -101.182 A 30.078 30.078 0 0 1 -131.26 406.281 V -191.941 A 43.889 43.889 0 0 1 -87.371 -235.83 Z"
                                            bx:shape="rect -131.26 -235.83 391.169 672.189 43.889 25.716 45.343 30.078 1@cbba7133" />
                                        <rect x="-68.447" y="-85.396" width="280.938" height="279.686" style="fill: rgb(255, 0, 0);" />
                                        <ellipse style="fill: rgb(255, 0, 0);" cx="-32.824" cy="228.82" rx="15" ry="15" />
                                        <path style="fill: none; stroke-width: 2px; stroke: rgb(255, 0, 0); stroke-linecap: round;"
                                            d="M 144.898 224.042 C 167.22 224.042 190.809 223.707 212.578 223.707" />
                                        <path style="fill: none; stroke-width: 2px; stroke: rgb(255, 0, 0); stroke-linecap: round;"
                                            d="M 144.9 233.488 C 167.222 233.488 190.811 233.153 212.58 233.153" />
                                        <g transform="matrix(1, 0, 0, 1, 16.370024, 11.408523)">
                                            <ellipse style="fill: rgb(255, 0, 0);" cx="-69.893" cy="297.449" rx="22" ry="22" />
                                        </g>
                                        <rect x="144.691" y="321.83" width="87" height="24"
                                            style="stroke: rgb(255, 0, 0); stroke-linecap: round; fill: rgb(255, 0, 0); stroke-linejoin: round;"
                                            rx="3.336" ry="3.336" />
                                        <rect x="177.441" y="290.2" width="24" height="87"
                                            style="fill: rgb(255, 0, 0); stroke-linecap: round; stroke: rgb(255, 0, 0); stroke-miterlimit: 7.04; stroke-linejoin: round;"
                                            rx="1.877" ry="1.877" />
                                        <g transform="matrix(1, 0, 0, 1, -47.400826, 97.577377)">
                                            <rect x="49.924" y="289.833" width="60.868" height="11.97"
                                                style="fill-opacity: 0.22; fill-rule: nonzero; stroke: rgb(255, 0, 0); stroke-width: 3px; fill: none;"
                                                rx="7.764" ry="7.764" />
                                            <rect x="-31.892" y="289.674" width="60.868" height="11.97"
                                                style="fill-opacity: 0.22; fill-rule: nonzero; stroke: rgb(255, 0, 0); stroke-width: 3px; fill: none;"
                                                rx="7.764" ry="7.764" />
                                        </g>
                                    </svg>

                                </div>

                                <div class="pt-3 sm:pt-5 lg:pt-0">
                                    <h2 class="text-xl font-semibold text-black">Pokémon</h2>

                                    <p class="mt-4 text-sm/relaxed md:text-xs">
                                        Pokémon é um mundo vasto e empolgante. Nosso sistema CRUD permite que os usuários gerenciem sua coleção de Pokémon com facilidade, simplificando a criação, visualização de detalhes, atualização ou exclusão de seus Pokémon no sistema.
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" xmlns:bx="https://boxy-svg.com" width="40px" height="40px">
                                        <defs>
                                            <bx:export>
                                                <bx:file format="svg" path="Sem título.svg" />
                                                <bx:file format="html" path="Sem título.html" />
                                            </bx:export>
                                        </defs>
                                        <path style="fill: rgb(109, 64, 68);" d="M 421.705 333.054 L 346.274 353.484 C 346.274 353.484 369.846 355.342 397.191 366.486 C 397.191 366.486 440.38 379.918 496.011 366.915 C 496.011 366.915 466.02 342.341 421.705 333.054 Z" />
                                        <path style="stroke: red; stroke-width: 6px; fill: none;" d="M 400.862 302.503 C 400.862 302.503 337.761 267.118 191.828 331.529 C 170.433 338.931 57.616 375.072 3.978 333.983 C 3.978 333.983 -23.158 94.118 190.497 94.404 L 190.497 94.386 C 190.739 94.386 190.972 94.396 191.212 94.396 C 191.667 94.4 192.099 94.381 192.555 94.386 L 192.555 94.419 C 363.555 95.567 395.281 237.755 400.862 302.503 Z" />
                                        <g transform="matrix(1.276109, 0, 0, 1.256868, -85.257996, -41.33633)">
                                            <path style="fill: red" d="M208.295,113.202l-3.802-4.525c-32.675,27.434-51.199,70.552-53.574,124.694 c-1.782,40.684,6.221,73.747,6.304,74.077l5.737-1.413C162.647,304.753,132.263,177.041,208.295,113.202z" />
                                            <path style="stroke-width: 3.94792px; stroke: red; fill: red;" d="M 287.666 135.08 C 259.027 112.864 231.759 107.281 230.612 107.055 C 230.612 107.055 210.916 105.994 203.23 110.961 C 132.619 156.598 139.148 295.957 155.293 307.14 C 174.116 320.178 350.968 266.104 350.968 266.104 C 346.701 196.297 314.075 155.567 287.666 135.08 Z" />
                                        </g>
                                        <path style="stroke: red; stroke-width: 5px; fill: red;" d="M 306.671 294.978 C 259.528 303.336 77.548 353.484 77.548 353.484 C 77.548 353.484 124.692 427.776 215.211 428.707 C 215.211 428.707 247.269 433.351 301.956 385.991 C 301.956 385.991 411.175 309.296 484.805 361.224 L 400.959 297.764 C 400.959 297.763 353.814 286.62 306.671 294.978 Z M 484.805 361.223 L 490.533 365.558 C 488.654 364.013 486.738 362.584 484.805 361.223 Z" />
                                        <path style="fill: red;" d="M 190.696 71.168 C 177.676 71.168 167.123 81.354 167.123 93.921 C 167.123 106.486 214.266 106.486 214.266 93.921 C 214.268 81.354 203.713 71.168 190.696 71.168 Z" />
                                        <g transform="matrix(0.95515, 0, 0, 1, 8.703419, 1.908997)">
                                            <ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: rgb(255, 255, 255);" cx="227.453" cy="213.319" rx="58.011" ry="56.236" />
                                            <ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: red" cx="228.378" cy="211.297" rx="22.76" ry="22.508" />
                                            <ellipse style="stroke-dashoffset: 19px; stroke-miterlimit: 25.97; fill: rgb(255, 255, 255);" cx="228.024" cy="211.225" rx="14.79" ry="14.665" />
                                            <rect x="244.597" y="202.623" width="59.208" height="17.206" style="fill: red" />
                                            <rect x="151.482" y="202.876" width="59.208" height="17.206" style="fill: red" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black">Treinadores</h2>

                                    <p class="mt-4 text-sm/relaxed md:text-xs">
                                        Aqui você pode administrar seus treinadores Pokémon, aprimorar as estratégias e montar um time forte para se tornar o verdadeiro Campeão Pokemon.

                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </div>
                        </a>

                        <a
                            href="{{ url('profile') }}"
                            style="background-image: url('https://img.freepik.com/free-vector/realistic-technology-particle-background_23-2148409680.jpg?t=st=1733189979~exp=1733193579~hmac=795a62a4235912dc2795b26c2536a48a2949ca5e36b7c46d88f2ed05cce6e6cf&w=1380');"
                            class="flex h-2/6 items-end bg-cover bg-end rounded-lg bg-white shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 hover:ring-4 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20]">
                            <div class="relative p-6 h-full w-full flex items-center justify-between gap-6 rounded-lg bg-gradient-to-t from-gray-100 from-35% lg:items-end">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg width="35px" height="35px" viewBox="0 0 20.00 20.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ff0000" stroke="#ff0000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <title>profile_favorite [#ff0000]</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs> </defs>
                                            <g id="Page-1" stroke-width="0.0002" fill="none" fill-rule="evenodd">
                                                <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -2199.000000)" fill="#ff0000">
                                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                                        <path d="M22.6446428,2043.90844 C22.4684473,2044.08303 22.3882684,2044.33387 22.4298427,2044.57969 L22.6961156,2046.15397 C22.7792641,2046.64461 22.3942076,2047.04294 21.9586681,2047.04294 C21.8438441,2047.04294 21.7250606,2047.01485 21.6102366,2046.95364 L20.2155204,2046.21015 C20.1066355,2046.15196 19.9868622,2046.12286 19.8670888,2046.12286 C19.7473155,2046.12286 19.628532,2046.15196 19.5186572,2046.21015 L18.1239411,2046.95364 C18.009117,2047.01485 17.8903335,2047.04294 17.7755095,2047.04294 C17.33997,2047.04294 16.9559034,2046.64461 17.038062,2046.15397 L17.3053248,2044.57969 C17.3468991,2044.33387 17.2657304,2044.08303 17.0895348,2043.90844 L15.9610917,2042.79371 C15.5166434,2042.35424 15.7621293,2041.58968 16.375844,2041.49937 L17.9358672,2041.2696 C18.1793734,2041.23449 18.3902141,2041.07896 18.4990989,2040.85521 L19.1959621,2039.42242 C19.333553,2039.14047 19.6008158,2039 19.8670888,2039 C20.1343517,2039 20.4006247,2039.14047 20.5382155,2039.42242 L21.2360686,2040.85521 C21.3449534,2041.07896 21.5548043,2041.23449 21.7993003,2041.2696 L23.3583336,2041.49937 C23.9720483,2041.58968 24.2175342,2042.35424 23.773086,2042.79371 L22.6446428,2043.90844 Z M11.8927571,2050.87478 C11.8779091,2050.87478 11.8650409,2050.87277 11.850193,2050.87277 C11.8363349,2050.87277 11.8224768,2050.87478 11.8086188,2050.87478 C10.7365978,2050.8517 9.87046813,2049.96373 9.87046813,2048.87207 C9.87046813,2047.76536 10.7583747,2046.86535 11.850193,2046.86535 C12.9420113,2046.86535 13.8299179,2047.76536 13.8299179,2048.87207 C13.8299179,2049.96373 12.9637882,2050.8517 11.8927571,2050.87478 L11.8927571,2050.87478 Z M14.8455167,2051.46977 C15.6671025,2050.49852 16.0630475,2049.14699 15.6364168,2047.6851 C15.2434414,2046.33758 14.1248969,2045.27301 12.7717549,2044.96398 C10.1842545,2044.373 7.89074327,2046.35062 7.89074327,2048.87207 C7.89074327,2049.86841 8.26194168,2050.76742 8.85486928,2051.46977 C6.29805462,2052.52732 4.4093971,2054.98354 4.00949268,2057.86319 C3.92634423,2058.46421 4.40048834,2059 4.99836525,2059 C5.48834715,2059 5.90210965,2058.63578 5.97041015,2058.14413 C6.37922334,2055.22736 8.83804161,2052.90257 11.8086188,2052.8815 C11.8224768,2052.8815 11.8363349,2052.88552 11.850193,2052.88552 C11.8650409,2052.88552 11.8779091,2052.8815 11.8927571,2052.8815 C14.8623444,2052.90257 17.3221525,2055.22736 17.7299758,2058.14514 C17.7992662,2058.63578 18.2130287,2059 18.7020207,2059 L18.7030106,2059 C19.3008875,2059 19.7740417,2058.46421 19.6908933,2057.8642 C19.2919787,2054.98354 17.4023314,2052.52932 14.8455167,2051.46977 L14.8455167,2051.46977 Z" id="profile_favorite-[#ff0000]"> </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <g fill="#FF2D20">
                                        <path d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z" />
                                    </g>
                                    </svg>
                                </div>

                                <div class="pt-3 sm:pt-5 flex-grow">
                                    <h2 class="text-xl font-semibold text-black">Meu perfil</h2>

                                    <p class="mt-4 text-sm/relaxed md:text-xs">
                                        Visualize e edite as informações do seu perfil.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </main>

            <footer class="h-1/6 py-16 text-center text-sm text-black">
                Feito com Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </footer>
        </div>
    </div>
</body>

</html>
