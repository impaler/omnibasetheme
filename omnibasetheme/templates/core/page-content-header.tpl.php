
<!-- ______________________ Page Header _______________________ -->

<header>

    <div class = "grid-12 messages">

        <?php if ( isset( $messages ) ): ?>
        <div class = "grid-12">

            <?php print $messages; ?>

        </div>
        <?php endif; ?>

    </div>

    <div class = "grid-12 breadcrumb">

        <?php if ( isset( $breadcrumb ) ): ?>
        <div class = "grid-12">

            <?php print $breadcrumb; ?>

        </div>
        <?php endif; ?>

    </div>

    <div class = "grid-12 title">

        <?php if ( isset( $title ) ): ?>
        <div class = "grid-12">

            <?php print $title; ?>

        </div>
        <?php endif; ?>

    </div>

    <div class = "grid-12 tabs">

        <?php if ( isset( $tabs ) ): ?>
        <div class = "grid-12">

            <?php print $tabs; ?>

        </div>
        <?php endif; ?>

    </div>

</header>

<!-- ______________________ / Page Header _______________________ -->
