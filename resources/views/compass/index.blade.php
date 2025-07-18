@vite(['resources/css/app.css', 'resources/js/app.js'])

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<style type="text/tailwindcss">
    @import "tailwindcss";

    @custom-variant dark (&:where([data-theme=dark], [data-theme=dark] *));
</style>