<?php
    require_once(realpath(dirname(__FILE__) . "/../config.php"));

    function renderLayoutWithContentFile($contentFile, $variables = array())
    {
        $contentFileFullPath = TEMPLATES_PATH . "/" . $contentFile;

        if (count($variables) > 0) {
            foreach ($variables as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }

        require_once(TEMPLATES_PATH . "/header.php");

        if (file_exists($contentFileFullPath)) {
            require_once($contentFileFullPath);
        } else {
            require_once(TEMPLATES_PATH . "/error.php");
        }

        require_once(TEMPLATES_PATH . "/body_1.php");

        require_once(TEMPLATES_PATH . "/footer.php");
    }

    function renderViewFile($pageView, $variables = array())
    {
        $pageViewFullPath = TEMPLATES_PATH . "/" . $pageView;

        if (count($variables) > 0) {
            foreach ($variables as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }

        if (file_exists($pageViewFullPath)) {
            require_once($pageViewFullPath);
        } else {
            require_once(TEMPLATES_PATH . "/error.php");
        }
    }

    function renderMasterFile($pageView,$variables = [],$modules='master')
    {
        $pageViewFullPath = TEMPLATES_PATH . "/".$modules."/" . $pageView;

        if (count($variables) > 0) {
            foreach ($variables as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }

        require_once(TEMPLATES_PATH . "/layout/header.php");

        if (file_exists($pageViewFullPath)) {
            require_once($pageViewFullPath);
        } else {
            require_once(TEMPLATES_PATH . "/layout/error.php");
        }

        require_once(TEMPLATES_PATH . "/layout/footer.php");
    }

?>
