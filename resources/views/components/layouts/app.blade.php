<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alan Ruiz - Project {{ $titulo ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description'}}">
   @vite(['resources/css/app.css','resources/css/app.scss','resources/js/app.js'])
</head>
<body>
<x-layouts.nav/>  
{{ $slot }}
</body>
</html>