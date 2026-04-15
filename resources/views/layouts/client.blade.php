<!DOCTYPE html>

<html class="light" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface": "#f8f9ff",
                        "inverse-surface": "#27313e",
                        "tertiary-fixed": "#ffe083",
                        "on-primary": "#ffffff",
                        "on-error": "#ffffff",
                        "inverse-primary": "#ffb690",
                        "on-secondary-fixed": "#121c2a",
                        "surface-variant": "#d9e3f4",
                        "tertiary": "#735c00",
                        "surface-container": "#e5eeff",
                        "surface-bright": "#f8f9ff",
                        "on-tertiary-container": "#4e3e00",
                        "secondary-fixed-dim": "#bdc7d9",
                        "outline-variant": "#e0c0b1",
                        "secondary": "#555f6f",
                        "error-container": "#ffdad6",
                        "tertiary-container": "#cea700",
                        "primary-fixed": "#ffdbca",
                        "primary": "#9d4300",
                        "inverse-on-surface": "#eaf1ff",
                        "background": "#f8f9ff",
                        "secondary-fixed": "#d9e3f6",
                        "surface-container-high": "#dfe9fa",
                        "on-secondary-fixed-variant": "#3d4756",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed": "#341100",
                        "on-tertiary": "#ffffff",
                        "surface-container-highest": "#d9e3f4",
                        "on-tertiary-fixed-variant": "#574500",
                        "on-tertiary-fixed": "#231b00",
                        "surface-container-low": "#eef4ff",
                        "on-error-container": "#93000a",
                        "on-primary-container": "#582200",
                        "on-surface": "#121c28",
                        "primary-container": "#f97316",
                        "surface-dim": "#d1dbec",
                        "surface-tint": "#9d4300",
                        "on-background": "#121c28",
                        "on-primary-fixed-variant": "#783200",
                        "primary-fixed-dim": "#ffb690",
                        "on-secondary-container": "#596373",
                        "outline": "#8c7164",
                        "tertiary-fixed-dim": "#eec200",
                        "error": "#ba1a1a",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#d6e0f3",
                        "on-surface-variant": "#584237"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Manrope', sans-serif;
        }

        .glass-nav {
            backdrop-filter: blur(20px);
            background-color: rgba(248, 249, 255, 0.8);
        }
    </style>
</head>

<body class="bg-surface text-on-surface">

    @yield('content')
</body>

</html>