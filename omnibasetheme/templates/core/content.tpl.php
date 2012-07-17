
<?php include( path_to_theme () . '/templates/core/page-content-header.tpl.php' ); ?>

<!-- ______________________ Page Content _______________________ -->

<section>

    <div class = "wrapper">

        <div class = "grids">

            <div class = "grid-12">

                <?php print render ( $page[ 'content' ] ) ?>

            </div>

        </div>

    </div>
</section>

<!-- ______________________ / Page Content _______________________ -->
