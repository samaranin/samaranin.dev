<?php
    // changes language on page load
    function change_language() {
        // if not set session language or not made request - set lang to english
        if (!isset($_SESSION['lang']) && !isset($_GET['lang'])){
            $_SESSION['lang'] = "en";
        }
        // if request was made - change language
        else {
            if (isset($_GET['lang']))
                $_SESSION['lang'] = $_GET['lang'];
        }
    }

    // displays lang switcher html
    function lang_switcher() {
        $lang_list = array('en', 'ua', 'ru');

        $html = '<div class="lang">';

        foreach ($lang_list as $lang) {
            $html .= '<a href="/?lang='.$lang.'">'.strtoupper($lang).'</a>';
        }

        $html .= "</div>";

        return $html;
    }
?>