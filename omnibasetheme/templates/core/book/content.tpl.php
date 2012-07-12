
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
                    <?php print $breadcrumb; ?>
                <?php endif; ?>

                <div class="content_title">

                    <?php if ( $title ): ?>

                        <h1 class="title"><?php print $title; ?></h1>

                    <?php endif; ?>

                </div>

                <?php if ( isset($tabs) ): ?>

                    <nav class="tabs">

                        <?php print render ( $tabs ); ?>

                    </nav>

                <?php endif; ?>


            </header>
        </div>

        <div class = "grid-8">
            <section class = "section-padding-10">

                <?php print  $body  ?>

            </section>
        </div>

        <div class = "grid-4">
            <section>

                <?php print  $book_links  ?>

                <?php if ( isset($book_navigation) ): ?>

                    <nav class="book_navigation">

                        <?php print render ( $book_navigation ); ?>

                    </nav>

                <?php endif; ?>


            </section>
        </div>

    </div>

</div>
</section>

<!-- ______________________ / Content _______________________ -->
