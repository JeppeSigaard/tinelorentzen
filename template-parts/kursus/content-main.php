<h1 class="page-title uppercase">Kurser</h1>
<div class="kursus-disclaimer">
    <span>Kurset afholdes både  i februar, marts, april & maj</span>
    <span class="contrast">Den endelige kalender finder du her fra d. 01.01. 2016</span>
    <span>Sælges allerede nu som gavekort</span>
</div>
<div class="order-form">
    <div class="inner">
        <div class="order-form-header">
            <h3>skab plads til hele familien</h3>
            <span>4 kurser med fokus på Indretning, funktioner og personlige
behov</span>
        </div>
        <form class="boxed-form" method="post" action="<?php echo admin_url('admin-ajax.php')?>">
            <input type="hidden" name="action" value="new-kursus-order">
            <?php wp_nonce_field('order-kursus','new-kursus-order'); ?>
            <div class="order-form-spacer">
                <h3>Kursusindhold</h3>
            </div>
            <div class="order-form-collapse">
                <div class="order-form-collapse-header">
                    <span class="number">1</span>
                    <h4>Sæt rod på dagsordenen</h4>
                    <span class="period">3 timer</span>
                </div>
                <div class="order-form-collapse-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit laboriosam provident qui impedit adipisci ex nostrum cupiditate odio doloremque magni alias fugit similique, officia. Officiis exercitationem et maxime incidunt vitae.</p>
                </div>
            </div>
        </form>
    </div>
</div>