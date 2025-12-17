<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Admin Dashboard</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100">
        @include('adversting.admin.components.sidebar')

        <div class="ml-64 min-h-screen flex flex-col">
            @include('adversting.admin.components.navbar')

            <main class="flex-1 p-8">@yield('content')</main>
        </div>
    </body>
</html>
