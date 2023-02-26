<!-- FOOTER -->
<div id="footer">
    <div id="footer-about">
        <div class="container">
            <div class="footer-top">
                <div class="desc px-md-5 text-justify">
                    @php $seo = App\Models\SEO::get() @endphp
                    @foreach ($seo as $artikel)
                    {!! $artikel->artikel !!}
                    @endforeach
                </div>
                <br><br><br>
                <a href="/" class="footer-logo">
                    <img src="{{ config('constant.url.backend').'/logo/'.$web['logo'] }}" alt="Logo">
                    <div class="clearfix"></div>
                </a>
            </div>

            <div class="footer-links">
                <ul class="ulclear">
                    <li>
                        <a href="#" title="Terms of service">Terms of service</a>
                    </li>
                    <li>
                        <a href="#" title="DMCA">DMCA</a>
                    </li>
                    <li>
                        <a href="#" title="Contact">Contact</a>
                    </li>
                    <li>
                        <a href="#" title="Sitemap">Sitemap</a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <p class="copyright">© {{ App\Models\SEO::select('title')->first()->title }}</p>
        </div>
    </div>
</div>
<footer class="text-center fixed-bottom">
    @php $bannerBawah = App\Models\Banner::where(['posisi' => 'Bawah', 'status' => 0])->get() @endphp
    @foreach ($bannerBawah as $bannerBawah)
        <a href="{{ $bannerBawah->link }}" target="_blank">
            <img src="{{ config('constant.url.backend').'/banner/'.$bannerBawah->gambar }}" class="img-fluid" alt="">
        </a>
    @endforeach
</footer>
<!-- FOOTER -->