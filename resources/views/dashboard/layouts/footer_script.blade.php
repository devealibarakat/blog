<script>var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if (localStorage.getItem("data-bs-theme") !== null) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>


<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('js/scripts.bundle.js') }}"></script>

<script src="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>

<script src="{{ asset('js/widgets.bundle.js') }}"></script>
<script src="{{ asset('js/custom/widgets.js') }}"></script>
<script src="{{ asset('js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('js/custom/utilities/modals/new-target.js') }}"></script>
<script src="{{ asset('js/custom/utilities/modals/users-search.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">

    $(document).on("click", ".pagination a", function (e) {
        e.preventDefault();
        var url = $(this).attr("href");
        fatchData(url);
    });
    function fatchData(url) {
        $.ajax({
            type: "GET",
            url: url,
            dataType: "html",
            success: function (response) {
                $('#table_data').html(response);
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            }
        });
    }

</script>
