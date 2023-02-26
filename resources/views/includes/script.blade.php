@foreach (App\Models\Adds::get() as $adds)
    @if ($adds->status == 0)
        {!! $adds->script !!}         
    @endif
@endforeach
<script src="https://www.google.com/recaptcha/api.js?render=6LfQbGQcAAAAAL1I4ef6T7XEuPi19tYPVtaotny9&hl=en"></script>
<script type="text/javascript" src="https://mangareader.to/js/app.min.js?v=2.1"></script>
<script>
    var     uiMode = localStorage.getItem("uiMode");
    const   body = document.body, 
            btnMode = document.getElementById("toggle-mode"),
            sbBtnMode = document.getElementById("sb-toggle-mode");

    function activeUiMode() {
        if (uiMode === "dark") {
            btnMode && btnMode.classList.add("active");
            sbBtnMode && sbBtnMode.classList.add("active");
            body.classList.add("darkmode");
        } else {
            btnMode && btnMode.classList.remove("active");
            sbBtnMode && sbBtnMode.classList.remove("active");
            body.classList.remove("darkmode");
        }
    }
    
    if (uiMode) { 
        activeUiMode();
    } 
    else {
        window.matchMedia("(prefers-color-scheme: dark)").matches ? (uiMode = "dark") : (uiMode = "light");
        activeUiMode();
    }

    [btnMode, sbBtnMode].forEach((item) => {
        if (item) {
            item.addEventListener("click", function () {
                this.classList.contains("active") ? (uiMode = "light") : (uiMode = "dark");
                localStorage.setItem("uiMode", uiMode);
                activeUiMode();
            });
        }
    });
</script>
<script>
    $(document).ready(function () {
        $(".detail-toggle").click(function (e) {
            $(this).toggleClass("active");
            $(".anis-content").toggleClass("active");
        });
        if ($('.lang-item[data-code=en]').length > 0) {
            $('.lang-item[data-code=en]').click();
        } else {
            $('.c-select-lang').first().click();
            $('.v-select-lang').first().click();
        }
        voteInfo();
        readingListInfo('detail');
    })
</script>

{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-207641274-1"></script>
<script type="text/javascript"
    src="https://mangareader.to//services.vlitag.com/adv1/?q=591701d038949ac7ff56b261301cad42" defer="" async="">
</script>
<script>
    window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-207641274-1");
        
        var vitag = vitag || {};
        vitag.outStreamConfig = { version: "v1" };
</script>
<script>
    var recaptchaV3SiteKey = "6LfQbGQcAAAAAL1I4ef6T7XEuPi19tYPVtaotny9",
        recaptchaV2SiteKey = "6LfVbmQcAAAAAP8gL4mAxtJG0gU0bhuuDwgyBnnJ";

        if ("serviceWorker" in navigator) {
        window.addEventListener("load", function () {
          navigator.serviceWorker.register("/sw.js");
        });
      }
</script> --}}