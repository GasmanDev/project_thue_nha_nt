@extends('admin_layout2')

@section('page')
<!-- PAGE LOADER -->
<div class="page-loader">
    <!-- PAGE LOADER DECORATION -->
    <div class="page-loader-decoration">
      <!-- ICON LOGO -->
      <svg class="icon-logo" viewBox="0 0 28 40" preserveAspectRatio="xMinYMin meet">
        <path d="M27.18,24.038c-0.141-0.095-0.244-0.146-0.244-0.146l-0.005-0.049C25.489,22.783,23.103,22,23.103,22c1.542,0,2.582-0.563,3.501-1.334c-0.049-0.055,0.7-0.666,0.7-0.666c0.146-8.251-4.477-12.745-7.001-14.667C18.15,9.564,16.802,14,16.802,14c-0.219-4.426,0.243-8.072,0.7-10.667c-0.85-0.452-1.956-0.698-2.296-1.537C14.865,0.957,14.015,0,14.015,0L14,0.014L13.985,0c0,0-0.85,0.957-1.19,1.796c-0.34,0.839-1.445,1.085-2.295,1.537C10.957,5.928,11.418,9.574,11.2,14c0,0-1.349-4.436-3.501-8.667C5.174,7.255,0.551,11.749,0.697,20c0,0,0.75,0.611,0.701,0.666C2.316,21.437,3.357,22,4.898,22c0,0-2.387,0.783-3.829,1.844l-0.005,0.049c0,0-0.104,0.051-0.244,0.146c-0.48,0.397-0.806,0.828-0.819,1.269c-0.023,0.521,0.263,1.181,1.233,1.973c0,0,0.136,9.259,9.69,11.29c0,0,0.212,0.815,0.975,1.431L14,38l2.102,2c0.763-0.615,0.975-1.431,0.975-1.431c9.555-2.031,9.689-11.29,9.689-11.29c0.971-0.792,1.256-1.451,1.233-1.973C27.986,24.866,27.659,24.436,27.18,24.038z M4.198,26c2.362,0.121,3.517,1.473,5.602,4c0.799,0.969,2.059,0.83,2.059,0.83L11.899,34C5.249,34,4.198,26,4.198,26z M14,28.162l-2.97-2.828l2.101-2.001l-2.101-2l2.101-2l-2.101-2L14,14.505l2.972,2.828l-2.102,2l2.102,2l-2.102,2l2.102,2.001L14,28.162z M16.102,34l0.041-3.17c0,0,1.26,0.139,2.059-0.83c2.085-2.527,3.239-3.879,5.602-4C23.803,26,22.752,34,16.102,34z M13.3,26h1.4v-1.333h-1.4V26z M13.3,22h1.4v-1.334h-1.4V22z M13.3,18h1.4v-1.333h-1.4V18z"/>
      </svg>
      <!-- /ICON LOGO -->
    </div>
    <!-- /PAGE LOADER DECORATION -->

    <!-- PAGE LOADER INFO -->
    <div class="page-loader-info">
      <!-- PAGE LOADER INFO TITLE -->
      <p class="page-loader-info-title">Vikinger</p>
      <!-- /PAGE LOADER INFO TITLE -->

      <!-- PAGE LOADER INFO TEXT -->
      <p class="page-loader-info-text">Loading...</p>
      <!-- /PAGE LOADER INFO TEXT -->
    </div>
    <!-- /PAGE LOADER INFO -->

    <!-- PAGE LOADER INDICATOR -->
    <div class="page-loader-indicator loader-bars">
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
    </div>
    <!-- /PAGE LOADER INDICATOR -->
  </div>
  <!-- /PAGE LOADER -->

  <!-- NAVIGATION WIDGET -->
  <nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
    <!-- USER AVATAR -->
    <a class="user-avatar small no-outline online" href="profile-timeline.html">
      <!-- USER AVATAR CONTENT -->
      <div class="user-avatar-content">
        <!-- HEXAGON -->
        <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg"></div>
        <!-- /HEXAGON -->
      </div>
      <!-- /USER AVATAR CONTENT -->

      <!-- USER AVATAR PROGRESS -->
      <div class="user-avatar-progress">
        <!-- HEXAGON -->
        <div class="hexagon-progress-40-44"></div>
        <!-- /HEXAGON -->
      </div>
      <!-- /USER AVATAR PROGRESS -->

      <!-- USER AVATAR PROGRESS BORDER -->
      <div class="user-avatar-progress-border">
        <!-- HEXAGON -->
        <div class="hexagon-border-40-44"></div>
        <!-- /HEXAGON -->
      </div>
      <!-- /USER AVATAR PROGRESS BORDER -->

      <!-- USER AVATAR BADGE -->
      <div class="user-avatar-badge">
        <!-- USER AVATAR BADGE BORDER -->
        <div class="user-avatar-badge-border">
          <!-- HEXAGON -->
          <div class="hexagon-22-24"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR BADGE BORDER -->

        <!-- USER AVATAR BADGE CONTENT -->
        <div class="user-avatar-badge-content">
          <!-- HEXAGON -->
          <div class="hexagon-dark-16-18"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR BADGE CONTENT -->

        <!-- USER AVATAR BADGE TEXT -->
        <p class="user-avatar-badge-text">24</p>
        <!-- /USER AVATAR BADGE TEXT -->
      </div>
      <!-- /USER AVATAR BADGE -->
    </a>
    <!-- /USER AVATAR -->

    <!-- MENU -->
    <ul class="menu small">
      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="newsfeed.html" data-title="Newsfeed">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-newsfeed">
            <use xlink:href="#svg-newsfeed"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="overview.html" data-title="Overview">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-overview">
            <use xlink:href="#svg-overview"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="groups.html" data-title="Groups">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-group">
            <use xlink:href="#svg-group"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="members.html" data-title="Members">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-members">
            <use xlink:href="#svg-members"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="badges.html" data-title="Badges">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-badges">
            <use xlink:href="#svg-badges"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="quests.html" data-title="Quests">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-quests">
            <use xlink:href="#svg-quests"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="streams.html" data-title="Streams">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-streams">
            <use xlink:href="#svg-streams"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="events.html" data-title="Events">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-events">
            <use xlink:href="#svg-events"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="forums.html" data-title="Forums">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-forums">
            <use xlink:href="#svg-forums"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item active">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link text-tooltip-tfr" href="marketplace.html" data-title="Marketplace">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-marketplace">
            <use xlink:href="#svg-marketplace"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->
    </ul>
    <!-- /MENU -->
  </nav>
  <!-- /NAVIGATION WIDGET -->

  <!-- NAVIGATION WIDGET -->
  <nav id="navigation-widget" class="navigation-widget navigation-widget-desktop sidebar left hidden" data-simplebar>
    <!-- NAVIGATION WIDGET COVER -->
    <figure class="navigation-widget-cover liquid">
      <img src="img/cover/01.jpg" alt="cover-01">
    </figure>
    <!-- /NAVIGATION WIDGET COVER -->

    <!-- USER SHORT DESCRIPTION -->
    <div class="user-short-description">
      <!-- USER SHORT DESCRIPTION AVATAR -->
      <a class="user-short-description-avatar user-avatar medium" href="profile-timeline.html">
        <!-- USER AVATAR BORDER -->
        <div class="user-avatar-border">
          <!-- HEXAGON -->
          <div class="hexagon-120-132"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR BORDER -->

        <!-- USER AVATAR CONTENT -->
        <div class="user-avatar-content">
          <!-- HEXAGON -->
          <div class="hexagon-image-82-90" data-src="img/avatar/01.jpg"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR CONTENT -->

        <!-- USER AVATAR PROGRESS -->
        <div class="user-avatar-progress">
          <!-- HEXAGON -->
          <div class="hexagon-progress-100-110"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR PROGRESS -->

        <!-- USER AVATAR PROGRESS BORDER -->
        <div class="user-avatar-progress-border">
          <!-- HEXAGON -->
          <div class="hexagon-border-100-110"></div>
          <!-- /HEXAGON -->
        </div>
        <!-- /USER AVATAR PROGRESS BORDER -->

        <!-- USER AVATAR BADGE -->
        <div class="user-avatar-badge">
          <!-- USER AVATAR BADGE BORDER -->
          <div class="user-avatar-badge-border">
            <!-- HEXAGON -->
            <div class="hexagon-32-36"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR BADGE BORDER -->

          <!-- USER AVATAR BADGE CONTENT -->
          <div class="user-avatar-badge-content">
            <!-- HEXAGON -->
            <div class="hexagon-dark-26-28"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR BADGE CONTENT -->

          <!-- USER AVATAR BADGE TEXT -->
          <p class="user-avatar-badge-text">24</p>
          <!-- /USER AVATAR BADGE TEXT -->
        </div>
        <!-- /USER AVATAR BADGE -->
      </a>
      <!-- /USER SHORT DESCRIPTION AVATAR -->

      <!-- USER SHORT DESCRIPTION TITLE -->
      <p class="user-short-description-title"><a href="profile-timeline.html">Marina Valentine</a></p>
      <!-- /USER SHORT DESCRIPTION TITLE -->

      <!-- USER SHORT DESCRIPTION TEXT -->
      <p class="user-short-description-text"><a href="#">www.gamehuntress.com</a></p>
      <!-- /USER SHORT DESCRIPTION TEXT -->
    </div>
    <!-- /USER SHORT DESCRIPTION -->

    <!-- BADGE LIST -->
    <div class="badge-list small">
      <!-- BADGE ITEM -->
      <div class="badge-item">
        <img src="img/badge/gold-s.png" alt="badge-gold-s">
      </div>
      <!-- /BADGE ITEM -->

      <!-- BADGE ITEM -->
      <div class="badge-item">
        <img src="img/badge/age-s.png" alt="badge-age-s">
      </div>
      <!-- /BADGE ITEM -->

      <!-- BADGE ITEM -->
      <div class="badge-item">
        <img src="img/badge/caffeinated-s.png" alt="badge-caffeinated-s">
      </div>
      <!-- /BADGE ITEM -->

      <!-- BADGE ITEM -->
      <div class="badge-item">
        <img src="img/badge/warrior-s.png" alt="badge-warrior-s">
      </div>
      <!-- /BADGE ITEM -->

      <!-- BADGE ITEM -->
      <a class="badge-item" href="profile-badges.html">
        <img src="img/badge/blank-s.png" alt="badge-blank-s">
        <!-- BADGE ITEM TEXT -->
        <p class="badge-item-text">+9</p>
        <!-- /BADGE ITEM TEXT -->
      </a>
      <!-- /BADGE ITEM -->
    </div>
    <!-- /BADGE LIST -->

    <!-- USER STATS -->
    <div class="user-stats">
      <!-- USER STAT -->
      <div class="user-stat">
        <!-- USER STAT TITLE -->
        <p class="user-stat-title">930</p>
        <!-- /USER STAT TITLE -->

        <!-- USER STAT TEXT -->
        <p class="user-stat-text">posts</p>
        <!-- /USER STAT TEXT -->
      </div>
      <!-- /USER STAT -->

      <!-- USER STAT -->
      <div class="user-stat">
        <!-- USER STAT TITLE -->
        <p class="user-stat-title">82</p>
        <!-- /USER STAT TITLE -->

        <!-- USER STAT TEXT -->
        <p class="user-stat-text">friends</p>
        <!-- /USER STAT TEXT -->
      </div>
      <!-- /USER STAT -->

      <!-- USER STAT -->
      <div class="user-stat">
        <!-- USER STAT TITLE -->
        <p class="user-stat-title">5.7k</p>
        <!-- /USER STAT TITLE -->

        <!-- USER STAT TEXT -->
        <p class="user-stat-text">visits</p>
        <!-- /USER STAT TEXT -->
      </div>
      <!-- /USER STAT -->
    </div>
    <!-- /USER STATS -->

    <!-- MENU -->
    <ul class="menu">
      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="newsfeed.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-newsfeed">
            <use xlink:href="#svg-newsfeed"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Newsfeed
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="overview.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-overview">
            <use xlink:href="#svg-overview"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Overview
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="groups.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-group">
            <use xlink:href="#svg-group"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Groups
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="members.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-members">
            <use xlink:href="#svg-members"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Members
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="badges.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-badges">
            <use xlink:href="#svg-badges"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Badges
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="quests.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-quests">
            <use xlink:href="#svg-quests"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Quests
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="streams.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-streams">
            <use xlink:href="#svg-streams"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Streams
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="events.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-events">
            <use xlink:href="#svg-events"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Events
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="forums.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-forums">
            <use xlink:href="#svg-forums"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Forums
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item active">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="marketplace.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-marketplace">
            <use xlink:href="#svg-marketplace"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Marketplace
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->
    </ul>
    <!-- /MENU -->
  </nav>
  <!-- /NAVIGATION WIDGET -->

  <!-- NAVIGATION WIDGET -->
  <nav id="navigation-widget-mobile" class="navigation-widget navigation-widget-mobile sidebar left hidden" data-simplebar>
    <!-- NAVIGATION WIDGET CLOSE BUTTON -->
    <div class="navigation-widget-close-button">
      <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
      <svg class="navigation-widget-close-button-icon icon-back-arrow">
        <use xlink:href="#svg-back-arrow"></use>
      </svg>
      <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
    </div>
    <!-- /NAVIGATION WIDGET CLOSE BUTTON -->

    <!-- NAVIGATION WIDGET INFO WRAP -->
    <div class="navigation-widget-info-wrap">
      <!-- NAVIGATION WIDGET INFO -->
      <div class="navigation-widget-info">
        <!-- USER AVATAR -->
        <a class="user-avatar small no-outline" href="profile-timeline.html">
          <!-- USER AVATAR CONTENT -->
          <div class="user-avatar-content">
            <!-- HEXAGON -->
            <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR CONTENT -->

          <!-- USER AVATAR PROGRESS -->
          <div class="user-avatar-progress">
            <!-- HEXAGON -->
            <div class="hexagon-progress-40-44"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR PROGRESS -->

          <!-- USER AVATAR PROGRESS BORDER -->
          <div class="user-avatar-progress-border">
            <!-- HEXAGON -->
            <div class="hexagon-border-40-44"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR PROGRESS BORDER -->

          <!-- USER AVATAR BADGE -->
          <div class="user-avatar-badge">
            <!-- USER AVATAR BADGE BORDER -->
            <div class="user-avatar-badge-border">
              <!-- HEXAGON -->
              <div class="hexagon-22-24"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BADGE BORDER -->

            <!-- USER AVATAR BADGE CONTENT -->
            <div class="user-avatar-badge-content">
              <!-- HEXAGON -->
              <div class="hexagon-dark-16-18"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BADGE CONTENT -->

            <!-- USER AVATAR BADGE TEXT -->
            <p class="user-avatar-badge-text">24</p>
            <!-- /USER AVATAR BADGE TEXT -->
          </div>
          <!-- /USER AVATAR BADGE -->
        </a>
        <!-- /USER AVATAR -->

        <!-- NAVIGATION WIDGET INFO TITLE -->
        <p class="navigation-widget-info-title"><a href="profile-timeline.html">Marina Valentine</a></p>
        <!-- /NAVIGATION WIDGET INFO TITLE -->

        <!-- NAVIGATION WIDGET INFO TEXT -->
        <p class="navigation-widget-info-text">Welcome Back!</p>
        <!-- /NAVIGATION WIDGET INFO TEXT -->
      </div>
      <!-- /NAVIGATION WIDGET INFO -->

      <!-- NAVIGATION WIDGET BUTTON -->
      <p class="navigation-widget-info-button button small secondary">Logout</p>
      <!-- /NAVIGATION WIDGET BUTTON -->
    </div>
    <!-- /NAVIGATION WIDGET INFO WRAP -->

    <!-- NAVIGATION WIDGET SECTION TITLE -->
    <p class="navigation-widget-section-title">Sections</p>
    <!-- /NAVIGATION WIDGET SECTION TITLE -->

    <!-- MENU -->
    <ul class="menu">
      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="newsfeed.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-newsfeed">
            <use xlink:href="#svg-newsfeed"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Newsfeed
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="overview.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-overview">
            <use xlink:href="#svg-overview"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Overview
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="groups.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-group">
            <use xlink:href="#svg-group"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Groups
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="members.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-members">
            <use xlink:href="#svg-members"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Members
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="badges.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-badges">
            <use xlink:href="#svg-badges"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Badges
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="quests.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-quests">
            <use xlink:href="#svg-quests"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Quests
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="streams.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-streams">
            <use xlink:href="#svg-streams"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Streams
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="events.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-events">
            <use xlink:href="#svg-events"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Events
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="forums.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-forums">
            <use xlink:href="#svg-forums"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Forums
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <!-- MENU ITEM -->
      <li class="menu-item active">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="marketplace.html">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-marketplace">
            <use xlink:href="#svg-marketplace"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Marketplace
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->
    </ul>
    <!-- /MENU -->

    <!-- NAVIGATION WIDGET SECTION TITLE -->
    <p class="navigation-widget-section-title">My Profile</p>
    <!-- /NAVIGATION WIDGET SECTION TITLE -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="hub-profile-info.html">Profile Info</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="hub-profile-social.html">Social &amp; Stream</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="hub-profile-notifications.html">Notifications</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="hub-profile-messages.html">Messages</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="hub-profile-requests.html">Friend Requests</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION TITLE -->
    <p class="navigation-widget-section-title">Account</p>
    <!-- /NAVIGATION WIDGET SECTION TITLE -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="hub-account-info.html">Account Info</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="hub-account-password.html">Change Password</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="hub-account-settings.html">General Settings</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION TITLE -->
    <p class="navigation-widget-section-title">Groups</p>
    <!-- /NAVIGATION WIDGET SECTION TITLE -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="hub-group-management.html">Manage Groups</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="hub-group-invitations.html">Invitations</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION TITLE -->
    <p class="navigation-widget-section-title">My Store</p>
    <!-- /NAVIGATION WIDGET SECTION TITLE -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="hub-store-account.html">My Account <span class="highlighted">$250,32</span></a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="hub-store-statement.html">Sales Statement</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="hub-store-items.html">Manage Items</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="hub-store-downloads.html">Downloads</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION TITLE -->
    <p class="navigation-widget-section-title">Main Links</p>
    <!-- /NAVIGATION WIDGET SECTION TITLE -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="#">Home</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="#">Careers</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="#">Faqs</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="#">About Us</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="#">Our Blog</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="#">Contact Us</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->

    <!-- NAVIGATION WIDGET SECTION LINK -->
    <a class="navigation-widget-section-link" href="#">Privacy Policy</a>
    <!-- /NAVIGATION WIDGET SECTION LINK -->
  </nav>
  <!-- /NAVIGATION WIDGET -->

  <!-- CHAT WIDGET -->
  <aside id="chat-widget-messages" class="chat-widget closed sidebar right">
    <!-- CHAT WIDGET MESSAGES -->
    <div class="chat-widget-messages" data-simplebar>
      <!-- CHAT WIDGET MESSAGE -->
      <div class="chat-widget-message">
        <!-- USER STATUS -->
        <div class="user-status">
          <!-- USER STATUS AVATAR -->
          <div class="user-status-avatar">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline online">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->

              <!-- USER AVATAR PROGRESS -->
              <div class="user-avatar-progress">
                <!-- HEXAGON -->
                <div class="hexagon-progress-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS -->

              <!-- USER AVATAR PROGRESS BORDER -->
              <div class="user-avatar-progress-border">
                <!-- HEXAGON -->
                <div class="hexagon-border-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS BORDER -->

              <!-- USER AVATAR BADGE -->
              <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->

                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-dark-16-18"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->

                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">16</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
          </div>
          <!-- /USER STATUS AVATAR -->

          <!-- USER STATUS TITLE -->
          <p class="user-status-title"><span class="bold">Nick Grissom</span></p>
          <!-- /USER STATUS TITLE -->

          <!-- USER STATUS TEXT -->
          <p class="user-status-text small">Can you stream the new game?</p>
          <!-- /USER STATUS TEXT -->

          <!-- USER STATUS TIMESTAMP -->
          <p class="user-status-timestamp floaty">2hrs</p>
          <!-- /USER STATUS TIMESTAMP -->
        </div>
        <!-- /USER STATUS -->
      </div>
      <!-- /CHAT WIDGET MESSAGE -->

      <!-- CHAT WIDGET MESSAGE -->
      <div class="chat-widget-message">
        <!-- USER STATUS -->
        <div class="user-status">
          <!-- USER STATUS AVATAR -->
          <div class="user-status-avatar">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline online">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/20.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->

              <!-- USER AVATAR PROGRESS -->
              <div class="user-avatar-progress">
                <!-- HEXAGON -->
                <div class="hexagon-progress-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS -->

              <!-- USER AVATAR PROGRESS BORDER -->
              <div class="user-avatar-progress-border">
                <!-- HEXAGON -->
                <div class="hexagon-border-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS BORDER -->

              <!-- USER AVATAR BADGE -->
              <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->

                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-dark-16-18"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->

                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">9</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
          </div>
          <!-- /USER STATUS AVATAR -->

          <!-- USER STATUS TITLE -->
          <p class="user-status-title"><span class="bold">Matt Parker</span></p>
          <!-- /USER STATUS TITLE -->

          <!-- USER STATUS TEXT -->
          <p class="user-status-text small">Can you stream the new game?</p>
          <!-- /USER STATUS TEXT -->

          <!-- USER STATUS TIMESTAMP -->
          <p class="user-status-timestamp floaty">2hrs</p>
          <!-- /USER STATUS TIMESTAMP -->
        </div>
        <!-- /USER STATUS -->
      </div>
      <!-- /CHAT WIDGET MESSAGE -->

      <!-- CHAT WIDGET MESSAGE -->
      <div class="chat-widget-message">
        <!-- USER STATUS -->
        <div class="user-status">
          <!-- USER STATUS AVATAR -->
          <div class="user-status-avatar">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline away">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->

              <!-- USER AVATAR PROGRESS -->
              <div class="user-avatar-progress">
                <!-- HEXAGON -->
                <div class="hexagon-progress-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS -->

              <!-- USER AVATAR PROGRESS BORDER -->
              <div class="user-avatar-progress-border">
                <!-- HEXAGON -->
                <div class="hexagon-border-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS BORDER -->

              <!-- USER AVATAR BADGE -->
              <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->

                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-dark-16-18"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->

                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">12</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
          </div>
          <!-- /USER STATUS AVATAR -->

          <!-- USER STATUS TITLE -->
          <p class="user-status-title"><span class="bold">Neko Bebop</span></p>
          <!-- /USER STATUS TITLE -->

          <!-- USER STATUS TEXT -->
          <p class="user-status-text small">Awesome! I'll see you there!</p>
          <!-- /USER STATUS TEXT -->

          <!-- USER STATUS TIMESTAMP -->
          <p class="user-status-timestamp floaty">54mins</p>
          <!-- /USER STATUS TIMESTAMP -->
        </div>
        <!-- /USER STATUS -->
      </div>
      <!-- /CHAT WIDGET MESSAGE -->

      <!-- CHAT WIDGET MESSAGE -->
      <div class="chat-widget-message">
        <!-- USER STATUS -->
        <div class="user-status">
          <!-- USER STATUS AVATAR -->
          <div class="user-status-avatar">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline offline">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/04.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->

              <!-- USER AVATAR PROGRESS -->
              <div class="user-avatar-progress">
                <!-- HEXAGON -->
                <div class="hexagon-progress-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS -->

              <!-- USER AVATAR PROGRESS BORDER -->
              <div class="user-avatar-progress-border">
                <!-- HEXAGON -->
                <div class="hexagon-border-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS BORDER -->

              <!-- USER AVATAR BADGE -->
              <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->

                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-dark-16-18"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->

                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">6</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
          </div>
          <!-- /USER STATUS AVATAR -->

          <!-- USER STATUS TITLE -->
          <p class="user-status-title"><span class="bold">Bearded Wonder</span></p>
          <!-- /USER STATUS TITLE -->

          <!-- USER STATUS TEXT -->
          <p class="user-status-text small">Great! Then we'll meet with them at...</p>
          <!-- /USER STATUS TEXT -->

          <!-- USER STATUS TIMESTAMP -->
          <p class="user-status-timestamp floaty">2hrs</p>
          <!-- /USER STATUS TIMESTAMP -->
        </div>
        <!-- /USER STATUS -->
      </div>
      <!-- /CHAT WIDGET MESSAGE -->

      <!-- CHAT WIDGET MESSAGE -->
      <div class="chat-widget-message">
        <!-- USER STATUS -->
        <div class="user-status">
          <!-- USER STATUS AVATAR -->
          <div class="user-status-avatar">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline online">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/09.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->

              <!-- USER AVATAR PROGRESS -->
              <div class="user-avatar-progress">
                <!-- HEXAGON -->
                <div class="hexagon-progress-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS -->

              <!-- USER AVATAR PROGRESS BORDER -->
              <div class="user-avatar-progress-border">
                <!-- HEXAGON -->
                <div class="hexagon-border-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS BORDER -->

              <!-- USER AVATAR BADGE -->
              <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->

                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-dark-16-18"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->

                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">27</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
          </div>
          <!-- /USER STATUS AVATAR -->

          <!-- USER STATUS TITLE -->
          <p class="user-status-title"><span class="bold">Sandra Strange</span></p>
          <!-- /USER STATUS TITLE -->

          <!-- USER STATUS TEXT -->
          <p class="user-status-text small">Can you stream the new game?</p>
          <!-- /USER STATUS TEXT -->

          <!-- USER STATUS TIMESTAMP -->
          <p class="user-status-timestamp floaty">2hrs</p>
          <!-- /USER STATUS TIMESTAMP -->
        </div>
        <!-- /USER STATUS -->
      </div>
      <!-- /CHAT WIDGET MESSAGE -->

      <!-- CHAT WIDGET MESSAGE -->
      <div class="chat-widget-message">
        <!-- USER STATUS -->
        <div class="user-status">
          <!-- USER STATUS AVATAR -->
          <div class="user-status-avatar">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline online">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/12.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->

              <!-- USER AVATAR PROGRESS -->
              <div class="user-avatar-progress">
                <!-- HEXAGON -->
                <div class="hexagon-progress-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS -->

              <!-- USER AVATAR PROGRESS BORDER -->
              <div class="user-avatar-progress-border">
                <!-- HEXAGON -->
                <div class="hexagon-border-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS BORDER -->

              <!-- USER AVATAR BADGE -->
              <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->

                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-dark-16-18"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->

                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">10</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
          </div>
          <!-- /USER STATUS AVATAR -->

          <!-- USER STATUS TITLE -->
          <p class="user-status-title"><span class="bold">James Murdock</span></p>
          <!-- /USER STATUS TITLE -->

          <!-- USER STATUS TEXT -->
          <p class="user-status-text small">Great! Then we'll meet with them at...</p>
          <!-- /USER STATUS TEXT -->

          <!-- USER STATUS TIMESTAMP -->
          <p class="user-status-timestamp floaty">7hrs</p>
          <!-- /USER STATUS TIMESTAMP -->
        </div>
        <!-- /USER STATUS -->
      </div>
      <!-- /CHAT WIDGET MESSAGE -->

      <!-- CHAT WIDGET MESSAGE -->
      <div class="chat-widget-message">
        <!-- USER STATUS -->
        <div class="user-status">
          <!-- USER STATUS AVATAR -->
          <div class="user-status-avatar">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline away">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/10.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->

              <!-- USER AVATAR PROGRESS -->
              <div class="user-avatar-progress">
                <!-- HEXAGON -->
                <div class="hexagon-progress-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS -->

              <!-- USER AVATAR PROGRESS BORDER -->
              <div class="user-avatar-progress-border">
                <!-- HEXAGON -->
                <div class="hexagon-border-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS BORDER -->

              <!-- USER AVATAR BADGE -->
              <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->

                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-dark-16-18"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->

                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">5</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
          </div>
          <!-- /USER STATUS AVATAR -->

          <!-- USER STATUS TITLE -->
          <p class="user-status-title"><span class="bold">The Green Goo</span></p>
          <!-- /USER STATUS TITLE -->

          <!-- USER STATUS TEXT -->
          <p class="user-status-text small">Can you stream the new game?</p>
          <!-- /USER STATUS TEXT -->

          <!-- USER STATUS TIMESTAMP -->
          <p class="user-status-timestamp floaty">2hrs</p>
          <!-- /USER STATUS TIMESTAMP -->
        </div>
        <!-- /USER STATUS -->
      </div>
      <!-- /CHAT WIDGET MESSAGE -->

      <!-- CHAT WIDGET MESSAGE -->
      <div class="chat-widget-message">
        <!-- USER STATUS -->
        <div class="user-status">
          <!-- USER STATUS AVATAR -->
          <div class="user-status-avatar">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline online">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->

              <!-- USER AVATAR PROGRESS -->
              <div class="user-avatar-progress">
                <!-- HEXAGON -->
                <div class="hexagon-progress-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS -->

              <!-- USER AVATAR PROGRESS BORDER -->
              <div class="user-avatar-progress-border">
                <!-- HEXAGON -->
                <div class="hexagon-border-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS BORDER -->

              <!-- USER AVATAR BADGE -->
              <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->

                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-dark-16-18"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->

                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">26</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
          </div>
          <!-- /USER STATUS AVATAR -->

          <!-- USER STATUS TITLE -->
          <p class="user-status-title"><span class="bold">Sarah Diamond</span></p>
          <!-- /USER STATUS TITLE -->

          <!-- USER STATUS TEXT -->
          <p class="user-status-text small">I'm sending you the latest news of...</p>
          <!-- /USER STATUS TEXT -->

          <!-- USER STATUS TIMESTAMP -->
          <p class="user-status-timestamp floaty">16hrs</p>
          <!-- /USER STATUS TIMESTAMP -->
        </div>
        <!-- /USER STATUS -->
      </div>
      <!-- /CHAT WIDGET MESSAGE -->

      <!-- CHAT WIDGET MESSAGE -->
      <div class="chat-widget-message">
        <!-- USER STATUS -->
        <div class="user-status">
          <!-- USER STATUS AVATAR -->
          <div class="user-status-avatar">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline offline">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->

              <!-- USER AVATAR PROGRESS -->
              <div class="user-avatar-progress">
                <!-- HEXAGON -->
                <div class="hexagon-progress-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS -->

              <!-- USER AVATAR PROGRESS BORDER -->
              <div class="user-avatar-progress-border">
                <!-- HEXAGON -->
                <div class="hexagon-border-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS BORDER -->

              <!-- USER AVATAR BADGE -->
              <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->

                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-dark-16-18"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->

                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">13</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
          </div>
          <!-- /USER STATUS AVATAR -->

          <!-- USER STATUS TITLE -->
          <p class="user-status-title"><span class="bold">Destroy Dex</span></p>
          <!-- /USER STATUS TITLE -->

          <!-- USER STATUS TEXT -->
          <p class="user-status-text small">Can you stream the new game?</p>
          <!-- /USER STATUS TEXT -->

          <!-- USER STATUS TIMESTAMP -->
          <p class="user-status-timestamp floaty">2hrs</p>
          <!-- /USER STATUS TIMESTAMP -->
        </div>
        <!-- /USER STATUS -->
      </div>
      <!-- /CHAT WIDGET MESSAGE -->

      <!-- CHAT WIDGET MESSAGE -->
      <div class="chat-widget-message">
        <!-- USER STATUS -->
        <div class="user-status">
          <!-- USER STATUS AVATAR -->
          <div class="user-status-avatar">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline online">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/08.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->

              <!-- USER AVATAR PROGRESS -->
              <div class="user-avatar-progress">
                <!-- HEXAGON -->
                <div class="hexagon-progress-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS -->

              <!-- USER AVATAR PROGRESS BORDER -->
              <div class="user-avatar-progress-border">
                <!-- HEXAGON -->
                <div class="hexagon-border-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS BORDER -->

              <!-- USER AVATAR BADGE -->
              <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->

                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-dark-16-18"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->

                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">4</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
          </div>
          <!-- /USER STATUS AVATAR -->

          <!-- USER STATUS TITLE -->
          <p class="user-status-title"><span class="bold">Damian Greyson</span></p>
          <!-- /USER STATUS TITLE -->

          <!-- USER STATUS TEXT -->
          <p class="user-status-text small">Can you stream the new game?</p>
          <!-- /USER STATUS TEXT -->

          <!-- USER STATUS TIMESTAMP -->
          <p class="user-status-timestamp floaty">2hrs</p>
          <!-- /USER STATUS TIMESTAMP -->
        </div>
        <!-- /USER STATUS -->
      </div>
      <!-- /CHAT WIDGET MESSAGE -->

      <!-- CHAT WIDGET MESSAGE -->
      <div class="chat-widget-message">
        <!-- USER STATUS -->
        <div class="user-status">
          <!-- USER STATUS AVATAR -->
          <div class="user-status-avatar">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline online">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/14.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->

              <!-- USER AVATAR PROGRESS -->
              <div class="user-avatar-progress">
                <!-- HEXAGON -->
                <div class="hexagon-progress-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS -->

              <!-- USER AVATAR PROGRESS BORDER -->
              <div class="user-avatar-progress-border">
                <!-- HEXAGON -->
                <div class="hexagon-border-40-44"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR PROGRESS BORDER -->

              <!-- USER AVATAR BADGE -->
              <div class="user-avatar-badge">
                <!-- USER AVATAR BADGE BORDER -->
                <div class="user-avatar-badge-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE BORDER -->

                <!-- USER AVATAR BADGE CONTENT -->
                <div class="user-avatar-badge-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-dark-16-18"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BADGE CONTENT -->

                <!-- USER AVATAR BADGE TEXT -->
                <p class="user-avatar-badge-text">3</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </div>
            <!-- /USER AVATAR -->
          </div>
          <!-- /USER STATUS AVATAR -->

          <!-- USER STATUS TITLE -->
          <p class="user-status-title"><span class="bold">Paul Lang</span></p>
          <!-- /USER STATUS TITLE -->

          <!-- USER STATUS TEXT -->
          <p class="user-status-text small">Can you stream the new game?</p>
          <!-- /USER STATUS TEXT -->

          <!-- USER STATUS TIMESTAMP -->
          <p class="user-status-timestamp floaty">2hrs</p>
          <!-- /USER STATUS TIMESTAMP -->
        </div>
        <!-- /USER STATUS -->
      </div>
      <!-- /CHAT WIDGET MESSAGE -->
    </div>
    <!-- /CHAT WIDGET MESSAGES -->

    <!-- CHAT WIDGET FORM -->
    <form class="chat-widget-form">
      <!-- INTERACTIVE INPUT -->
      <div class="interactive-input small">
        <input type="text" id="chat-widget-search" name="chat_widget_search" placeholder="Search Messages...">
        <!-- INTERACTIVE INPUT ICON WRAP -->
        <div class="interactive-input-icon-wrap">
          <!-- INTERACTIVE INPUT ICON -->
          <svg class="interactive-input-icon icon-magnifying-glass">
            <use xlink:href="#svg-magnifying-glass"></use>
          </svg>
          <!-- /INTERACTIVE INPUT ICON -->
        </div>
        <!-- /INTERACTIVE INPUT ICON WRAP -->

        <!-- INTERACTIVE INPUT ACTION -->
        <div class="interactive-input-action">
          <!-- INTERACTIVE INPUT ACTION ICON -->
          <svg class="interactive-input-action-icon icon-cross-thin">
            <use xlink:href="#svg-cross-thin"></use>
          </svg>
          <!-- /INTERACTIVE INPUT ACTION ICON -->
        </div>
        <!-- /INTERACTIVE INPUT ACTION -->
      </div>
      <!-- /INTERACTIVE INPUT -->
    </form>
    <!-- /CHAT WIDGET FORM -->

    <!-- CHAT WIDGET BUTTON -->
    <div class="chat-widget-button">
      <!-- CHAT WIDGET BUTTON ICON -->
      <div class="chat-widget-button-icon">
        <!-- BURGER ICON -->
        <div class="burger-icon">
          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->

          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->

          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->
        </div>
        <!-- /BURGER ICON -->
      </div>
      <!-- /CHAT WIDGET BUTTON ICON -->

      <!-- CHAT WIDGET BUTTON TEXT -->
      <p class="chat-widget-button-text">Messages / Chat</p>
      <!-- /CHAT WIDGET BUTTON TEXT -->
    </div>
    <!-- /CHAT WIDGET BUTTON -->
  </aside>
  <!-- /CHAT WIDGET -->

  <!-- CHAT WIDGET -->
  <aside id="chat-widget-message" class="chat-widget chat-widget-overlay hidden sidebar right">
    <!-- CHAT WIDGET HEADER -->
    <div class="chat-widget-header">
      <!-- CHAT WIDGET CLOSE BUTTON -->
      <div class="chat-widget-close-button">
        <!-- CHAT WIDGET CLOSE BUTTON ICON -->
        <svg class="chat-widget-close-button-icon icon-back-arrow">
          <use xlink:href="#svg-back-arrow"></use>
        </svg>
        <!-- CHAT WIDGET CLOSE BUTTON ICON -->
      </div>
      <!-- /CHAT WIDGET CLOSE BUTTON -->

      <!-- USER STATUS -->
      <div class="user-status">
        <!-- USER STATUS AVATAR -->
        <div class="user-status-avatar">
          <!-- USER AVATAR -->
          <div class="user-avatar small no-outline online">
            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->

            <!-- USER AVATAR PROGRESS -->
            <div class="user-avatar-progress">
              <!-- HEXAGON -->
              <div class="hexagon-progress-40-44"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR PROGRESS -->

            <!-- USER AVATAR PROGRESS BORDER -->
            <div class="user-avatar-progress-border">
              <!-- HEXAGON -->
              <div class="hexagon-border-40-44"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR PROGRESS BORDER -->

            <!-- USER AVATAR BADGE -->
            <div class="user-avatar-badge">
              <!-- USER AVATAR BADGE BORDER -->
              <div class="user-avatar-badge-border">
                <!-- HEXAGON -->
                <div class="hexagon-22-24"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BADGE BORDER -->

              <!-- USER AVATAR BADGE CONTENT -->
              <div class="user-avatar-badge-content">
                <!-- HEXAGON -->
                <div class="hexagon-dark-16-18"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BADGE CONTENT -->

              <!-- USER AVATAR BADGE TEXT -->
              <p class="user-avatar-badge-text">16</p>
              <!-- /USER AVATAR BADGE TEXT -->
            </div>
            <!-- /USER AVATAR BADGE -->
          </div>
          <!-- /USER AVATAR -->
        </div>
        <!-- /USER STATUS AVATAR -->

        <!-- USER STATUS TITLE -->
        <p class="user-status-title"><span class="bold">Nick Grissom</span></p>
        <!-- /USER STATUS TITLE -->

        <!-- USER STATUS TAG -->
        <p class="user-status-tag online">Online</p>
        <!-- /USER STATUS TAG -->
      </div>
      <!-- /USER STATUS -->
    </div>
    <!-- /CHAT WIDGET HEADER -->

    <!-- CHAT WIDGET CONVERSATION -->
    <div class="chat-widget-conversation" data-simplebar>
      <!-- CHAT WIDGET SPEAKER -->
      <div class="chat-widget-speaker left">
        <!-- CHAT WIDGET SPEAKER AVATAR -->
        <div class="chat-widget-speaker-avatar">
          <!-- USER AVATAR -->
          <div class="user-avatar tiny no-border">
            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-24-26" data-src="img/avatar/03.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->
          </div>
          <!-- /USER AVATAR -->
        </div>
        <!-- /CHAT WIDGET SPEAKER AVATAR -->

        <!-- CHAT WIDGET SPEAKER MESSAGE -->
        <p class="chat-widget-speaker-message">Hi Marina! It's been a long time!</p>
        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

        <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
        <p class="chat-widget-speaker-timestamp">Yesterday at 8:36PM</p>
        <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
      </div>
      <!-- /CHAT WIDGET SPEAKER -->

      <!-- CHAT WIDGET SPEAKER -->
      <div class="chat-widget-speaker right">
        <!-- CHAT WIDGET SPEAKER MESSAGE -->
        <p class="chat-widget-speaker-message">Hey Nick!</p>
        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

        <!-- CHAT WIDGET SPEAKER MESSAGE -->
        <p class="chat-widget-speaker-message">You're right, it's been a really long time! I think the last time we saw was at Neko's party</p>
        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

        <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
        <p class="chat-widget-speaker-timestamp">10:05AM</p>
        <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
      </div>
      <!-- /CHAT WIDGET SPEAKER -->

      <!-- CHAT WIDGET SPEAKER -->
      <div class="chat-widget-speaker left">
        <!-- CHAT WIDGET SPEAKER AVATAR -->
        <div class="chat-widget-speaker-avatar">
          <!-- USER AVATAR -->
          <div class="user-avatar tiny no-border">
            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-24-26" data-src="img/avatar/03.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->
          </div>
          <!-- /USER AVATAR -->
        </div>
        <!-- /CHAT WIDGET SPEAKER AVATAR -->

        <!-- CHAT WIDGET SPEAKER MESSAGE -->
        <p class="chat-widget-speaker-message">Yeah! I remember now! The stream launch party</p>
        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

        <!-- CHAT WIDGET SPEAKER MESSAGE -->
        <p class="chat-widget-speaker-message">That reminds me that I wanted to ask you something</p>
        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

        <!-- CHAT WIDGET SPEAKER MESSAGE -->
        <p class="chat-widget-speaker-message">Can you stream the new game?</p>
        <!-- /CHAT WIDGET SPEAKER MESSAGE -->
      </div>
      <!-- /CHAT WIDGET SPEAKER -->
    </div>
    <!-- /CHAT WIDGET CONVERSATION -->

    <!-- CHAT WIDGET FORM -->
    <form class="chat-widget-form">
      <!-- INTERACTIVE INPUT -->
      <div class="interactive-input small">
        <input type="text" id="chat-widget-message-text" name="chat_widget_message_text" placeholder="Write a message...">
        <!-- INTERACTIVE INPUT ICON WRAP -->
        <div class="interactive-input-icon-wrap">
          <!-- INTERACTIVE INPUT ICON -->
          <svg class="interactive-input-icon icon-send-message">
            <use xlink:href="#svg-send-message"></use>
          </svg>
          <!-- /INTERACTIVE INPUT ICON -->
        </div>
        <!-- /INTERACTIVE INPUT ICON WRAP -->

        <!-- INTERACTIVE INPUT ACTION -->
        <div class="interactive-input-action">
          <!-- INTERACTIVE INPUT ACTION ICON -->
          <svg class="interactive-input-action-icon icon-cross-thin">
            <use xlink:href="#svg-cross-thin"></use>
          </svg>
          <!-- /INTERACTIVE INPUT ACTION ICON -->
        </div>
        <!-- /INTERACTIVE INPUT ACTION -->
      </div>
      <!-- /INTERACTIVE INPUT -->
    </form>
    <!-- /CHAT WIDGET FORM -->
  </aside>
  <!-- /CHAT WIDGET -->

@endsection


@section('script')
<script src="{{asset('assets/js/utils/app.js')}}"></script>
<script src="{{asset('assets/js/utils/page-loader.js')}}"></script>
<script src="{{asset('assets/js/vendor/simplebar.min.js')}}"></script>
<script src="{{asset('assets/js/utils/liquidify.js')}}"></script>
<script src="{{asset('assets/js/vendor/xm_plugins.min.js')}}"></script>
<script src="{{asset('assets/js/global/global.hexagons.js')}}"></script>
<script src="{{asset('assets/js/global/global.tooltips.js')}}"></script>
<script src="{{asset('assets/js/header/header.js')}}"></script>
<script src="{{asset('assets/js/sidebar/sidebar.js')}}"></script>
<script src="{{asset('assets/js/form/form.utils.js')}}"></script>
<script src="{{asset('assets/js/utils/svg-loader.js')}}"></script>
@endsection
