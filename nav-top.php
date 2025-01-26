
    <div class="nav-container">
    <button
          id="nav_button" 
          class="menu-toggle js-open-menu js-close-menu"
          aria-expanded="false"
          aria-controls="mobile-menu"
        >
          <svg
            width="24"
            height="24"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>
        <div class="page-nav-wrapper">
			  <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary-menu',
                            'depth'          => 3,
                            'container'     => 'nav',
                            'menu_class'   => 'page-nav',
                            'fallback_cb' => 'wp_page_menu',
                        )
                    ); ?>
                    </div>
    </div>

