    <section class="sec1 row justify-content-center text-center">
    @unless(request()->routeIs('homepage'))
    <a href="/" class="col-md-3"><h3>Home</h3></a>
    @endunless
    @unless(request()->routeIs('prodotti'))
    <a href="/prodotti" class="col-md-3"><h3>Prodotti</h3></a>
    @endunless
    @unless(request()->routeIs('aboutUs'))
    <a href="/Chi-Siamo" class="col-md-3"><h3>Chi Siamo</h3></a>
    @endunless
    @unless(request()->routeIs('contacts'))
    <a href="/Contatti" class="col-md-3"><h3>Contatti</h3></a>
    @endunless
    </section>