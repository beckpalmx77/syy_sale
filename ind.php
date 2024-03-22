<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .example {
            padding: 20px;
            color: white;
        }
        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            .example {background: red;}
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            .example {background: green;}
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            .example {background: blue;}
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            .example {background: orange;}
        }

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {
            .example {background: pink;}
        }
    </style>
</head>
<body>

<h2>Typical Media Query Breakpoints</h2>
<p class="example">Resize the browser window to see how the background color of this paragraph changes on different screen sizes.</p>

</body>
</html>