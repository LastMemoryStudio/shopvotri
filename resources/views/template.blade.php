<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title ?? ''}} </title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />

    <meta name="title" content="{{ $title ?? ''}}" />
<meta name="description" content="{{ $description ?? ''}}" />
<meta name="keywords" content="Laptop Asus Vivobook E1404FA-NK186W R5 7520U/16GB/512GB/14" FHD Win11" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="copyright" content="memory">
<meta name="author" content="memory">
<meta http-equiv="audience" content="General">
<meta name="resource-type" content="Document">
<meta name="distribution" content="Global">
<meta content="INDEX,FOLLOW" name="robots" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="GENERATOR" content="memory">
<meta property="og:site_name" content="" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="vi_VN" />
<meta property="og:title" content="" />
<meta property="og:description" content="{{ $description ?? ''}}" />
<meta property="og:url" content="request()->url()" />
<meta property="og:image" content="{{ $image ?? ''}}" />
<meta itemprop="name" content="{{ $title ?? ''}}" />
<meta itemprop="description" content="{{ $description ?? ''}}" />
<meta itemprop="image" content="{{ $image ?? ''}}" />
<link rel="canonical" href="{{ request()->url() }}" />
<meta name="referrer" content="no-referrer-when-downgrade" />

</head>
<body class="bg-[#ECF4FF]" >
    @include($template)
</body>
</html>