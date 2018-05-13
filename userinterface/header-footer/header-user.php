<header id="header" class="page-topbar">
    <nav class="cyan darken-2 hide-on-med-and-down">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li>
                    <a href="../home.php" class="white-text" >
                        Home

                    </a>
                </li>
                <li>
                    <a href="../user/user-profile.php" class="white-text">
                        Profile
                    </a>
                </li>
                <li>
                    <a class="dropdown-menu white-text" href="#!" data-activates="QAdropdown">
                        <span>Question & Answer<i class="mdi-navigation-arrow-drop-down right"></i></span>
                    </a>
                    <!--a class="white-text" href="../user/QA-user.php">
                        <span>Question & Answer</span>
                    </a-->
                </li>
                <li>
                    <a class="white-text" href="../user/ask-a-question.php">
                        <span>Ask a Lawyer</span>
                    </a>
                </li>
                <li>
                    <a class="white-text" href="../user/search-a-lawyer.php">
                        <span>Find a Lawyer</span>
                    </a>
                </li>
            </ul>

            <ul class="right hide-on-med-and-down">
                <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i
                            class="mdi-action-settings-overscan"></i></a>
                </li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a class="white-text" href="../../backend/logout.php">
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- QAdropdown -->
    <ul id="QAdropdown" class="dropdown-content dropdown-horizontal-list">
        <li><a href="../user/all-questions-user.php" class="cyan-text">All Questions</a></li>
        <li><a href="../user/country-questions.php" class="cyan-text">Questions of Your Country</a></li>
    </ul>
</header>
<!-- END HEADER -->