<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laravel Datatable Example</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css" />
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
</head>
<body>
<div id="app">
    <v-app>
        <v-main>
            <v-container class="mt-12">
                <data-table></data-table>
            </v-container>
        </v-main>
    </v-app>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
