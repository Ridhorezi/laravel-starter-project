<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Admin Gudang</title>

    {{-- Style --}}
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</head>

<body>
    <div id="app">

        {{-- Sidebar --}}
        @include('includes.sidebar')
        <div id="main">

            {{-- Header --}}
            @include('includes.navbar')

            <div class="page-content">
                {{-- Content --}}
                @yield('content')
            </div>
        </div>
    </div>

    {{-- Scripts --}}
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

</body>

</html>
