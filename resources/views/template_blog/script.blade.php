<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
    integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
</script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/ie10-viewport-bug-workaround.js') }}"></script>

<script type="text/javascript">
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    async function showLetter(item, selectedIndex) {
        var selectedIndex = selectedIndex ? selectedIndex : 0
        var demo_input = document.getElementById('placetextheader');

        if (selectedIndex <= item.length) {
            var currentIndex = selectedIndex++;
            demo_input.textContent = item.substr(0, currentIndex);
            await sleep(50);
            showLetter(item, selectedIndex);
        }
    };

    async function typeLetter() {
        // var demo_input = document.getElementById('placetextheader')[0];

        var items = [
            "Belajar",
            "Berkembang",
            "Bercerita",
            "Berbagi"
        ];

        for (var i = 0; i < items.length; i++) {
            var selectedItem = items[i];

            await sleep(2000);
            showLetter(selectedItem)
        }
    }

    typeLetter();

</script>
