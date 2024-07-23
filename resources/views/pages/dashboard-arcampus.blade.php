<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-----------------------------------------------------------
-- animate.min.css by Daniel Eden (https://animate.style)
-- is required for the animation of notifications and slide out panels
-- you can ignore this step if you already have this file in your project
--------------------------------------------------------------------------->
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Project Dashboard</title>
</head>

<body>

    <div class="m-4" class="container">
        <center>
            <a class="navbar-brand p-4">
                <img style="width: 150px" class='navbar-icon' src="{{asset('images/heritech/arc-logo.png')}}" alt="">
                <!-- <x-bladewind::rating color="yellow" rating="4" clickable="false" /> -->
            </a>
        </center>

        <hr>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <x-bladewind::horizontal-line-graph label="MTN: " percentage="55" color="yellow" />

                        <x-bladewind::horizontal-line-graph label="Vodafone: " percentage="30" color="red" class="py-3" />

                        <x-bladewind::horizontal-line-graph label="AirtelTigo: " percentage="15" color="blue" />

                        <x-bladewind::horizontal-line-graph label="Above 60: " percentage="33" color="cyan" />

                        <x-bladewind::horizontal-line-graph label="Between 40 - 60: " percentage="43" color="purple" class="py-3" />

                        <x-bladewind::horizontal-line-graph label="Under 40: " percentage="24" color="gray" />
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <x-bladewind::timeline-group anchor="big" completed="true">

                    <x-bladewind::timeline color="green" date="Completado!" content="1. Idea" icon="sparkles" />

                    <x-bladewind::timeline color="green" date="Completado!" content="2. Cotizaciones" icon="currency-dollar" />

                    <x-bladewind::timeline color="green" date="Completado!" content="3. Planificacion" icon="rectangle-group" />

                    <x-bladewind::timeline color="green" date="Completado!" content="4. Desarrollo" icon="cpu-chip" />

                    <x-bladewind::timeline color="yellow" content="5. Seguimiento" icon="eye" completed="false" />

                    <x-bladewind::timeline color="yellow" content="6. Resultados" icon="fire" completed="false" />

                </x-bladewind::timeline-group>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <x-bladewind::textarea except="align, indent, color, background" placeholder="Comment" toolbar="true"></x-bladewind::textarea>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <x-bladewind::progress-circle color="green" percentage="100" size="400" circle_width="50" text_size="50" align="100" valign="0" show_label="true" show_percent="true" />
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <!-- <x-bladewind::tab-group name="free-pics">

            <x-slot:headings>
                <x-bladewind::tab-heading name="unsplash-1" label="Lissete Laverde" />

                <x-bladewind::tab-heading name="unsplash-2" label="Marko Pavlichenko" />

                <x-bladewind::tab-heading name="unsplash-3" active="true" label="Yoonbae Cho" />

                <x-bladewind::tab-heading name="unsplash-4" label="Sam Carter" />
            </x-slot:headings>

            <x-bladewind::tab-body>

                <x-bladewind::tab-content name="unsplash-1">
                    <img src="/path/to/the/image/file" alt="Picture by Lissete Laverde" />
                </x-bladewind::tab-content>

                <x-bladewind::tab-content name="unsplash-2">
                    <img src="/path/to/the/image/file" alt="Picture by Marko Pavlichenko" />
                </x-bladewind::tab-content>

                <x-bladewind::tab-content name="unsplash-3" active="true">
                    <img src="/path/to/the/image/file" alt="Picture by Yoonbae Cho" />
                </x-bladewind::tab-content>

                <x-bladewind::tab-content name="unsplash-4">
                    <img src="/path/to/the/image/file" alt="Picture by Sam Carter" />
                </x-bladewind::tab-content>

            </x-bladewind::tab-body>

        </x-bladewind::tab-group> -->

    </div>

</body>

</html>