<!-- ______________________ Page Header _______________________ -->

<header>
    <div class = "wrapper">
    <div class="grids">
        
    <?php if ( isset( $messages ) ): ?>
    <div class = "grid-12 messages">

        <?php print $messages; ?>

    </div>
    <?php endif; ?>

    <?php if ( isset( $breadcrumb ) ): ?>
    <div class = "grid-12 breadcrumb">

        <?php print $breadcrumb; ?>

    </div>
    <?php endif; ?>

    <?php if ( isset( $titleH1 ) ): ?>
    <div class = "grid-12 title">

        <?php print $titleH1 ?>

    </div>
    <?php endif; ?>

    <?php if ( isset( $tabs ) ): ?>
    <div class = "grid-12 tabs">

        <?php print $tabs; ?>

    </div>
    <?php endif; ?>
        
    </div>
    </div>


</header>

<!-- ______________________ / Page Header _______________________ -->
