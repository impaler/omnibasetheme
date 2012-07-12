<!-- ______________________ Content _______________________ -->

<section class = "mainContent contentBGImage wrapperBG">
<div class = "wrapper contentBG">

    <div class = "grids mainContentPadding">

<?php if ($messages): ?>
            <div class = "grid-12">

                <?php print $messages; ?>

            </div>
<?php endif; ?>


        <div class="grid-12">
        <header>


<?php if ( $breadcrumb ): ?>
                      <?php print $breadcrumb; ?><?php print "\n"; ?>
           <?php endif; ?>

<?php if ( $title ): ?>
            <div class="content_title">
                    <h1 class="title"><?php print $title; ?></h1>
            </div>
<?php endif; ?>

<?php if ( isset($tabs) ): ?>

            <nav class="tabs">

                <?php print render ( $tabs ); ?>

            </nav>

<?php endif; ?>

        </header>
        </div>

        <div class = "grid-10">
        <section>

            <?php print render ( $page[ 'content' ] ) ?>

        </section>
        </div>

        <div class = "grid-2">
            <section>



            </section>
        </div>

    </div>

</div>
</section>

<!-- ______________________ / Content _______________________ -->
