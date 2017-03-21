<a class="usa-skipnav" href="#main-content">Skip to main content</a>
<header class="usa-header usa-header-extended" role="banner">
  <!-- Gov banner BEGIN -->
  <div class="usa-banner">
    <div class="usa-accordion">
      <header class="usa-banner-header">
        <div class="usa-grid usa-banner-inner">
        <img src="@asset('images/favicons/favicon-usa-57.png')" alt="U.S. flag">
        <p>An official website of the United States government</p>
        <button class="usa-accordion-button usa-banner-button"
          aria-expanded="false" aria-controls="gov-banner">
          <span class="usa-banner-button-text">Here's how you know</span>
        </button>
        </div>
      </header>
      <div class="usa-banner-content usa-grid usa-accordion-content" id="gov-banner">
        <div class="usa-banner-guidance-gov usa-width-one-half">
          <img class="usa-banner-icon usa-media_block-img" src="@asset('images/icon-dot-gov.svg')" alt="Dot gov">
          <div class="usa-media_block-body">
            <p>
              <strong>The .gov means it’s official.</strong>
              <br>
              Federal government websites always use a .gov or .mil domain. Before sharing sensitive information online, make sure you’re on a .gov or .mil site by inspecting your browser’s address (or “location”) bar.
            </p>
          </div>
        </div>
        <div class="usa-banner-guidance-ssl usa-width-one-half">
          <img class="usa-banner-icon usa-media_block-img" src="@asset('images/icon-https.svg')" alt="SSL">
          <div class="usa-media_block-body">
            <p>This site is also protected by an SSL (Secure Sockets Layer) certificate that’s been signed by the U.S. government. The <strong>https://</strong> means all transmitted data is encrypted  — in other words, any information or browsing history that you provide is transmitted securely.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Gov banner END -->
  <div class="usa-navbar">
    <button class="usa-menu-btn">Menu</button>
    <div class="usa-logo" id="logo">
      <em class="usa-logo-text">
        <a href="{{ esc_url(home_url('/')) }}" accesskey="1" title="Home" aria-label="Home">
          {{ bloginfo('name') }}</a>
      </em>
    </div>

  </div>
  <nav role="navigation" class="usa-nav">
    <div class="usa-nav-inner">
      <button class="usa-nav-close">
        <img src="@asset('images/close.svg')" alt="close">
      </button>
    @php
      if (has_nav_menu('primary_navigation')) :
						wp_nav_menu(array(
							'theme_location' => 'primary_navigation',
							'container' => false,
							'menu_class' => 'usa-nav-primary usa-accordion',
              'link_before' => '<span>',
              'link_after' => '</span>',
							//'fallback_cb' => 'default_header_nav',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'walker' => new App\NASAWDSNavwalker()
						));
        
        //wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => '', 'link_before' => '<span>', 'link_after' => '</span>', 'container' => null]);
      endif;
    @endphp
  </nav>
</header>
