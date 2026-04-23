<style>
    /* Widen main content area for frontpage */
    #innertext {
        max-width: 1400px;
        width: 95%;
    }

    .frontpage-row {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
    }

    .frontpage-column-left {
        flex: 1 1 60%;
        min-width: 0;
    }

    .frontpage-column-right {
        flex: 1 1 40%;
        min-width: 0;
    }

    .frontpage-row-full {
        width: 100%;
    }

    .frontpage {
        font-size: 1.1em;
        font-kerning: none;
        line-height: 1.4em;
    }

    /* Responsive: Stack columns on smaller screens */
    @media (max-width: 768px) {
        .frontpage-row {
            flex-direction: column;
        }

        .frontpage-column-left,
        .frontpage-column-right {
            flex: 1 1 100%;
        }

        .frontpage {
            font-size: 1em;
        }
    }

    /* Markdown content styling */
    .markdown-content h1 {
        font-size: 1.8em;
        margin-bottom: 0.5em;
        color: #2c5282;
    }

    .markdown-content h2 {
        font-size: 1.4em;
        margin-top: 1em;
        margin-bottom: 0.5em;
        color: #2d3748;
    }

    .markdown-content p {
        text-align: justify;
        margin-bottom: 1em;
        line-height: 1.6em;
    }

    .markdown-content hr {
        margin: 1.5em 0;
        border: none;
        border-top: 1px solid #cbd5e0;
    }

    .markdown-content a {
        color: #3182ce;
        text-decoration: none;
    }

    .markdown-content a:hover {
        text-decoration: underline;
    }

    .markdown-content ul {
        margin-left: 1.5em;
        margin-bottom: 1em;
    }

    .markdown-content li {
        margin-bottom: 0.8em;
        line-height: 1.5em;
    }

    /* Newsbar specific styling */
    .newsbar-content {
        background-color: #ffffff;
        margin: 0;
        padding: 20px;
        border-radius: 5px;
        border: 1px solid #616C2C;
    }

    .newsbar-content h1 {
        font-weight: bold;
        font-size: 1.3em;
        margin-bottom: 1em;
        margin-top: 0;
        color: #2c5282;
    }

    .newsbar-content ul {
        list-style-type: disc;
        padding-left: 20px;
        margin-bottom: 0;
        column-count: 2;
        column-gap: 30px;
    }

    .newsbar-content li {
        margin-bottom: 0.8em;
        font-size: 0.95em;
        break-inside: avoid;
    }

    /* Responsive: Single column on smaller screens */
    @media (max-width: 768px) {
        .newsbar-content ul {
            column-count: 1;
        }

        .newsbar-content {
            padding: 15px;
        }

        .newsbar-content h1 {
            font-size: 1.2em;
        }
    }

    /* Dark mode support */
    [data-theme="dark"] .markdown-content h1,
    [data-theme="dark"] .markdown-content h2 {
        color: #90cdf4;
    }

    [data-theme="dark"] .newsbar-content {
        background-color: #2d3748;
        border-color: #4a5568;
    }

    [data-theme="dark"] .newsbar-content h1 {
        color: #90cdf4;
    }
</style>

<!-- Welcome header above the row (original styling) -->
<h1><?php echo $LANG['H_HOME_WELCOME']; ?></h1>

<!-- First row: Main content and carousel -->
<div class="frontpage-row">
    <div class="frontpage-column-left frontpage">
        <?php
        // Render left column content from Markdown
        $markdown_file = 'frontpage/left-column';
        $markdown_lang = isset($LANG_TAG) ? $LANG_TAG : 'en';
        $markdown_class = 'markdown-content';
        include($SERVER_ROOT.'/tk/includes/markdown_content.php');
        ?>
    </div>

    <div class="frontpage-column-right frontpage">
        <?php
        // Display image carousel (silent mode - no error messages on frontpage)
        $carousel_limit = 15;
        $carousel_width = 500;
        $carousel_silent = true;
        $carousel_shuffle = true;
        $carousel_media_ids = '2455206,58869,6602273,2455241,2455170,740603,2568017,4984494,1534972,2677263,4700949,2593883,5570823,5385519,125964,5890897';  // Specific mediaIDs to display (optional)
        include($SERVER_ROOT.'/tk/includes/carousel.php');
        ?>
    </div>
</div>

<!-- Second row: News and Events (full width) -->
<div class="frontpage-row">
    <div class="frontpage-row-full frontpage">
        <?php
        // Render newsbar content from Markdown
        $markdown_file = 'frontpage/newsbar';
        $markdown_lang = isset($LANG_TAG) ? $LANG_TAG : 'en';
        $markdown_class = 'newsbar-content';
        include($SERVER_ROOT.'/tk/includes/markdown_content.php');
        ?>
    </div>
</div>
