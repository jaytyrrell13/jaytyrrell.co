<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="list-reset my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/"
                class="nav-menu__item hover:text-blue {{ $page->isActive('/') ? 'active text-blue' : '' }}"
            >Home</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="nav-menu__item hover:text-blue {{ $page->isActive('/blog') ? 'active text-blue' : '' }}"
            >Blog</a>
        </li>
    </ul>
</nav>
