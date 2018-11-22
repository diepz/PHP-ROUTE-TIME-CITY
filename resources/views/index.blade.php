<div class="main-content">
    <h1>Time</h1>
    <select id="select-city">
        <option value="America-Chihuahua">America-Chihuahua</option>
        <option value="America-Costa_Rica">America-Costa_Rica</option>
        <option value="America-Havana">America-Havana</option>
        <option value="Asia-Hong_Kong">Asia-Hong_Kong</option>
        <option value="Asia-Ho_Chi_Minh">Asia-Ho_Chi_Minh</option>
    </select>
</div>
<script>

    document.getElementById("select-city").onchange = function () {

        ChooseCity()

    };

    function ChooseCity() {

        var time_zone = document.getElementById("select-city");

        window.location.href = time_zone.value;

    }

</script>